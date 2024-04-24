$.validator.addMethod("fullName", function (value, element) {
	return (
		this.optional(element) || /^[a-zA-Z][a-zA-Z\s']* [a-zA-Z\s']*$/i.test(value)
	);
});
$.validator.addMethod("strictPhone", function (value, element) {
	return this.optional(element) || /^[789]\d{9}$/.test(value);
});

$.validator.addMethod("emailvalid", function (value, element) {
	return (
		this.optional(element) ||
		/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value)
	);
});
$.validator.addMethod(
	"validURL",
	function (value, element) {
		var urlPattern = /^(http(s)?:\/\/)?(www\.)?[\w.-]+\.[a-z]{2,}(\/)?[^\s]*$/i;
		return this.optional(element) || urlPattern.test(value);
	},
	"Please enter a valid URL."
);

$(document).ready(function () {
	$("#enquiryForm").validate({
		rules: {
			name: {
				fullName: true,
				minlength: 4,
				maxlength: 100,
				required: true,
			},
			mobile: {
				required: true,
				digits: true,
				strictPhone: true,
			},
			email: {
				required: true,
				email: true,
				emailvalid: true,
				maxlength: 100,
			},
			stateSelect: "required",
			citySelect: "required",
			profession: "required",
			investment: "required",
			message: {
				maxlength: 500,
			},
		},
		messages: {
			name: {
				required: "Please enter your full name",
				fullName: "Please Don't Keep Space Before Name & Enter Full Name",
				minlength: "Name should be at least 4 characters",
				maxlength: "Name cannot exceed 100 characters",
			},
			email: {
				required: "Please Enter Valid Email Address",
				emailvalid: "Please enter a valid email address.",
				maxlength: "Email cannot exceed 100 characters",
			},
			mobile: {
				required: "Please Enter Only Valid Mobile Number",
				strictPhone: "Please Enter Only Valid Mobile Number",
			},
			stateSelect: "Please Select your State",
			citySelect: "Please Select your city",
			profession: "Please Enter your profession",
			investment: "Please range your Investment capicity",
			message: {
				maxlength: "Message must be no more than 500 characters.",
			},
		},
	});
});

let auth_token;

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: "https://www.universal-tutorial.com/api/getaccesstoken",
		success: function (data) {
			auth_token = data.auth_token;
			getState(data.auth_token);
		},
		error: function (error) {
			console.log(error);
		},
		headers: {
			Accept: "application/json",
			"api-token":
				"j9EF8D8eDp_H5D40m01kiK9E7JnY7s8Yd8bkFkzIUs945wrtSCMTl94WJ7BW0Mbznh4",
			"user-email": "ingaleaarti956@gmail.com",
		},
	});
	$("#stateSelect").change(function () {
		getCity();
	});

	function getState() {
		let country_name = "India";
		$.ajax({
			type: "GET",
			url: "https://www.universal-tutorial.com/api/states/" + country_name,
			success: function (data) {
				$("#stateSelect").empty();
				$("#stateSelect").append(
					'<option selected="true" value="">Select State *</option>'
				);
				data.forEach((element) => {
					$("#stateSelect").append(
						'<option value="' +
						element.state_name +
						'">' +
						element.state_name +
						"</option>"
					);
				});
			},
			error: function (error) {
				console.log(error);
			},
			headers: {
				Authorization: "Bearer " + auth_token,
				Accept: "application/json",
			},
		});
	}

	function getCity() {
		let state_name = $("#stateSelect").val();
		$.ajax({
			type: "GET",
			url: "https://www.universal-tutorial.com/api/cities/" + state_name,
			success: function (data) {
				// console.log(data);
				$("#citySelect").empty();
				$("#citySelect").append(
					'<option selected="true" value="">SELECT CITY *</option>'
				);
				data.forEach((element) => {
					$("#citySelect").append(
						'<option value="' +
						element.city_name +
						'">' +
						element.city_name +
						"</option>"
					);
				});
			},
			error: function (error) {
				console.log(error);
			},
			headers: {
				Authorization: "Bearer " + auth_token,
				Accept: "application/json",
			},
		});
	}
});

$(document).ready(function () {
	$("#joinus_form").validate({
		rules: {
			name: {
				fullName: true,
				minlength: 4,
				maxlength: 100,
				required: true,
			},
			email: {
				required: true,
				email: true,
				emailvalid: true,
				maxlength: 100,
			},
			message: {
				maxlength: 500,
			},
		},
		messages: {
			name: {
				required: "Please enter your full name",
				fullName: "Please Don't Keep Space Before Name & Enter Full Name",
				minlength: "Name should be at least 4 characters",
				maxlength: "Name cannot exceed 100 characters",
			},
			email: {
				required: "Please Enter Valid Email Address",
				emailvalid: "Please enter a valid email address.",
				maxlength: "Email cannot exceed 100 characters",
			},
			message: {
				maxlength: "Message must be no more than 500 characters.",
			},
		},
	});
});

// footer subscribe handle new
$(document).ready(function () {
	$('#subscribtion').on('submit', function (e) {
		e.preventDefault();

		var submitBtn = $(this).find('button[type="submit"]');
		submitBtn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin" style="color: #ffffff; font-size: 1.75rem;"></i>');

		$.ajax({
			url: base_path + 'subscription/subscribe',
			method: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function (response) {
				submitBtn.prop('disabled', false).html(`
		  		<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
		  			<circle cx="30" cy="30" r="29.75" transform="rotate(-180 30 30)" stroke="white" stroke-width="0.5" />
		  			<path d="M22.2583 30.0001L38.7099 30.0001M38.7099 30.0001L34.8389 33.8711M38.7099 30.0001L34.8389 26.1292" stroke="white" stroke-width="0.5" />
	  			</svg>
		  `);

				if (response.status === 'success') {
					$('#staticBackdrop').modal('show');
				} else if (response.status === 'already_subscribed') {

					$('#staticBackdrop3').modal('show');
				} else if (response.status === 'resubscribe') {
					$('#staticBackdrop2').modal('show');
				} else {

					$('#staticBackdrop3').modal('show');
				}
			},
			error: function () {
				submitBtn.prop('disabled', false).html(
					`<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="30" cy="30" r="29.75" transform="rotate(-180 30 30)" stroke="white" stroke-width="0.5" />
						<path d="M22.2583 30.0001L38.7099 30.0001M38.7099 30.0001L34.8389 33.8711M38.7099 30.0001L34.8389 26.1292" stroke="white" stroke-width="0.5" />
					</svg>`
				);

				$('#staticBackdrop3').modal('show');
			}
		});
	});
});