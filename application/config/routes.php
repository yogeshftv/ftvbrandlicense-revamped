<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'pages';

$route['our-story'] = 'pages/our_story';
$route['our-services'] = 'pages/our_services';
$route['brand-license'] = 'pages/brand_license';

$route['michel-adam'] = 'pages/michel_adam';
$route['kashiff-khan'] = 'pages/kashiff_khan';

$route['faqs'] = 'pages/faq';
$route['contact-us'] = 'pages/contact_us';
$route['blogs'] = 'pages/blogs';

$route['the-future-of-brand-licensing'] = 'pages/blog_details_1';
$route['what-makes-ftv-brand-licensing-a-significant-investment-opportunity'] = 'pages/blog_details_2';
$route['guidelines-to-obtain-an-ftv-brand-license'] = 'pages/blog_details_3';
$route['blog-details-4'] = 'pages/blog_details_4';
$route['blog-details-5'] = 'pages/blog_details_5';
$route['blog-details-6'] = 'pages/blog_details_6';

$route['terms-conditions'] = 'pages/termsandconditions';
$route['privacy-policy'] = 'pages/privacypolicy';

$route['thankyou'] = 'pages/thankyou';
$route['staying'] = 'subscription/staying';
$route['unsubscribe-me'] = 'subscription/unsubscribepg';
$route['unsubscribe-confirmed'] = 'subscription/unsubscribeconfirmedpg';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;