let countdownInterval;
let coderesult;
let otpSent = false;
// let otpVerified = false;

window.onload = function () {
  render();

  // document.getElementById('enquiryForm').addEventListener('submit', function (event) {
  //     event.preventDefault();
  //     disableSubmitButton();
  //     phoneAuth();
  // });
  document
    .getElementById("enquiryForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      if ($("#enquiryForm").valid()) {
        disableSubmitButton();
        // Step 3
        // phoneAuth();
      } else {
        // Handle the case where the form is not valid, e.g., display an error message.
        // alert("Please fill in all required fields correctly.");
        let errormsg = "Please fill in all required fields correctly.";
        displayErrorInModal(errormsg);
      }
    });
};

function render() {
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
    "recaptcha-container"
  );
  recaptchaVerifier.render();
}

function disableSubmitButton() {
  document.getElementById("submitButton").disabled = true;
  document.getElementById("submitButton").innerHTML = "Please Wait...";
}

function enableSubmitButton() {
  document.getElementById("submitButton").disabled = false;
  document.getElementById("submitButton").innerHTML = "ENQUIRE NOW";
}

// OTP : Step 2
// function phoneAuth() {
//   var number = "+91" + document.getElementById("number").value;

//   grecaptcha.ready(function () {
//     recaptchaVerifier.render().then(function (widgetId) {
//       var recaptchaResponse = grecaptcha.getResponse(widgetId);

//       if (!recaptchaResponse) {
//         var message = "Please Verify Captcha first";
//         enableSubmitButton();
//         displayErrorInModal(message);
//         return;
//       }

//       firebase
//         .auth()
//         .signInWithPhoneNumber(number, recaptchaVerifier)
//         .then(function (confirmationResult) {
//           window.confirmationResult = confirmationResult;
//           coderesult = confirmationResult;
//           verificationId = confirmationResult.verificationId;

//           // Handle OTP sending success, open a modal if needed
//           $("#verificationModal").modal("show");
//           startCountdown(120);
//           otpSent = true;
//         })
//         .catch(function (error) {
//           enableSubmitButton();
//           displayErrorInModal(error.message);
//         });
//     });
//   });
// }

function codeverify() {
  var otpFields = document.querySelectorAll(".wrapper input.field");
  var otpCode = "";

  otpFields.forEach(function (field) {
    otpCode += field.value;
  });

  if (!otpCode) {
    var message = "Please enter the OTP";
    displayErrorInModal(message);
    return;
  }

  // document.getElementById('verifyButton').disabled = true;
  // document.getElementById('verifyButton').innerHTML = 'Please Wait...';

  confirmationResult
    .confirm(otpCode)
    .then(function (result) {
      var user = result.user;

      otpVerified = true;
      if (otpVerified) {
        $("#verificationModal").modal("hide");
        submitForm();
      }
    })
    .catch(function (error) {
      enableSubmitButton();
      displayErrorInModal(error.message);
    });
}
// ------ submit function is here ------

function submitForm() {
  var formData = new FormData(document.getElementById("enquiryForm"));

  $.ajax({
    url: base_path + "pages/enquiry_validation",
    type: "post",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data, textStatus, jqXHR) {
      debugger
      let submitdata = data;

      console.log(data);
      console.log(textStatus);
      console.log(jqXHR.status);

      debugger
      if (jqXHR.status === 200 && textStatus === "success") {
        console.log("Do i come here");
        $("#enquiryForm")[0].reset();
        window.location.href = 'thankyou';
        console.log("checkmate");
      } else {
        console.log("what is the message",submitdata.message);
        displayErrorInModal(submitdata.message);
      }
    },
    error: function (error) {
      console.error("Error:", error);
      enableSubmitButton();
    },
  });
}


function startCountdown(seconds) {
  let countdown = seconds;
  countdownInterval = setInterval(function () {
    document.getElementById(
      "countdown"
    ).textContent = `Resend OTP in ${countdown} seconds`;
    countdown--;

    if (countdown < 0) {
      clearInterval(countdownInterval);
      document.getElementById("resendOTP").removeAttribute("disabled");
      document.getElementById("countdown").textContent = "";
    }
  }, 1000);
}

function calculateTimeRemaining(endTime) {
  const now = Date.now();
  const timeRemaining = Math.max(0, Math.floor((endTime - now) / 1000));
  return timeRemaining;
}

function resendOTP() {
  if (otpSent) {
    var number = "+91" + document.getElementById("number").value;

    const now = Date.now();
    const expirationTime = now + 2 * 60 * 1000;

    console.log("Inside resendOTP");
    clearInterval(countdownInterval);

    document.getElementById("resendOTP").setAttribute("disabled", "true");
    startCountdown(calculateTimeRemaining(expirationTime));

    firebase
      .auth()
      .signInWithPhoneNumber(number, window.recaptchaVerifier)
      .then(function (confirmationResult) {
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;

        console.log("Firebase OTP resend code executed");
      })
      .catch(function (error) {
        // alert(error.message);
        // $('#validationhandler').modal('show');
        displayErrorInModal(error.message);
      });
  } else {
    alert("Please send the initial OTP first.");
  }
}
// ... (other functions like resendOTP, startCountdown, calculateTimeRemaining, etc.)

function displayErrorInModal(errorMessage) {
  $.confirm({
    title: "Error",
    content: errorMessage,
    type: "red", // You can set the alert color here
    buttons: {
      ok: {
        text: "OK",
        btnClass: "btn-danger",
        keys: ["enter"],
        action: function () {
          // window.location.reload(true);
        },
      },
    },
  });
}

//   $.validator.addMethod("strictPhone", function (value, element) {
//     return this.optional(element) || /^[1-9]\d{9}$/.test(value);
// });

$.validator.addMethod("fullName", function (value, element) {
  return (
    this.optional(element) || /^[a-zA-Z][a-zA-Z\s']* [a-zA-Z\s']*$/i.test(value)
  );
});
$.validator.addMethod("strictPhone", function (value, element) {
  return this.optional(element) || /^[789]\d{9}$/.test(value);
});

$.validator.addMethod("emailvalid", function (value, element) {
  return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
  });
  

// $(document).ready(function () {
//   var otpVerified = false;
//   $("#enquiryForm").validate({
//     errorPlacement: function (error, element) {
//       var errorID = element.attr("id") + "-error";
//       error.appendTo("#" + errorID);
//     },
//     rules: {
//       name: {
//         fullName: true,
//         minlength: 4,
//         maxlength: 100,
//         //   atLeastOneLetter: true,
//         required: true,
//       },
//       number: {
//         required: true,
//         digits: true,
//         strictPhone: true,
//       },
//       email: {
//         required: true,
//         email: true,
//         emailvalid:true,
//         maxlength: 100,
//       },
//       stateSelect: "required",
//       citySelect: "required",
//       category: {
//         required: true,
//       },
//       investment: "required",
//     },
//     messages: {
//       name: {
//         required: "Please enter your full name",
//         fullName: "Please Don't Keep Space Before Name & Enter Full Name",
//         minlength: "Name should be at least 4 characters",
//         maxlength: "Name cannot exceed 100 characters",
//         // atLeastOneLetter: "At least one letter is required in the name",
//       },
//       email: {
//         required:"Please Enter Valid Email Address",
//         emailvalid:"Please enter a valid email address.",
//         maxlength: "Email cannot exceed 100 characters",
//     },
//       number: {
//         required: "Please Enter Only Valid Mobile Number",
//         strictPhone: "Please enter a valid 10-digit mobile number",
//       },
//       stateSelect: "Please Select your State",
//       citySelect: "Please Select your city",
//       category: "Please Select Valid Category",
//       investment: "Please Enter your Investment capicity",
//     },
//   });
// });

function closeModal() {
  confirmationResult = null;
  $("#enquiryForm")[0].reset();
  $("#verificationModal").modal("hide");
  enableSubmitButton();
}
