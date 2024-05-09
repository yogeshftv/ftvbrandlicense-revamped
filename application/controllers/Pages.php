<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pages extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model("data");
                $this->load->library('form_validation');
        }

        public function index()
        {
                $data['meta_description'] = 'FashionTV offers brand license and licensing opportunities to leverage your business for business growth and success. Join the luxury brand license today!';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FashionTV: Brand License | Licensing Opportunities in India';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/index");
                $this->load->view("components/footer");
        }

        public function our_story()
        {
                $data['meta_description'] = 'Discover the fashion tv story behind our successful journey. Our mission to provide licensing opportunities with startup business ideas. For more visit on FashionTV';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'Discover more for our Story - FashionTV';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/our-story");
                $this->load->view("components/footer");
        }
        
        public function our_services()
        {
                $data['meta_description'] = 'Discover the best brand license opportunity such as beverages, cosmetics, accessories, fashion brand clothing, etc. For more information visit on FashionTV.';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'Buy Brand License | Licensing Opportunities in India - FashionTV';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/our-services");
                $this->load->view("components/footer");
        }

        public function brand_license()
        {
                $data['meta_description'] = 'Are you looking licensing brand Collabration with top brands for mutual success? At fashionTV expand your brand reach through licensing opportunities.';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'Licensing Brand Collaboration - FashionTV';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/brand-license");
                $this->load->view("components/footer");
        }

        public function michel_adam()
        {
                $data['meta_description'] = 'Are you looking licensing brand Collabration with top brands for mutual success? At fashionTV expand your brand reach through licensing opportunities.';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'Licensing Brand Collaboration - FashionTV';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/michel-adam");
                $this->load->view("components/footer");
        }

        public function kashiff_khan()
        {
                $data['meta_description'] = 'Are you looking licensing brand Collabration with top brands for mutual success? At fashionTV expand your brand reach through licensing opportunities.';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'Licensing Brand Collaboration - FashionTV';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/kashiff-khan");
                $this->load->view("components/footer");
        }

        public function contact_us()
        {

                $data['meta_description'] = 'Contact us for good startup business ideas which will help to our customer to stay informative. Visit on Fashion for more!';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'Contact Us - FashionTV';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/contact-us");
                $this->load->view("components/footer");
        }

        public function faq()
        {

                $data['meta_description'] = 'Get quick answers to common questions which will helpful from our customer point of view on fashiontv website. For more visit on FashionTV faq.';
                $data['meta_keywords'] = '';
                $data['meta_title'] = "Frequently Asked Question for Brand License | Fashion TV";

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/faqs");
                $this->load->view("components/footer");
        }

        public function blogs()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blogs");
                $this->load->view("components/footer");
        }

        public function blog_details_1()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blog-details-1");
                $this->load->view("components/footer");
        }
        public function blog_details_2()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blog-details-2");
                $this->load->view("components/footer");
        }
        public function blog_details_3()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blog-details-3");
                $this->load->view("components/footer");
        }
        public function blog_details_4()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blog-details-4");
                $this->load->view("components/footer");
        }
        public function blog_details_5()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blog-details-5");
                $this->load->view("components/footer");
        }
        public function blog_details_6()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | About ';

                $this->load->view("components/head", $data);
                $this->load->view("components/nav");
                $this->load->view("pages/blog-details-6");
                $this->load->view("components/footer");
        }

        public function thankyou()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | Thank you ';
                $this->load->view("components/head", $data);
                $this->load->view('pages/thankyou', $data);
        }
        
        public function privacypolicy()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | Privacy & Policy ';
                $this->load->view("components/head", $data);
                $this->load->view('pages/privacy-policy', $data);
        }

        public function termsandconditions()
        {
                $data['meta_description'] = '';
                $data['meta_keywords'] = '';
                $data['meta_title'] = 'FTV Brand License | Terms & Conditions ';
                $this->load->view("components/head", $data);
                $this->load->view('pages/terms-and-conditions', $data);
        }

        public function enquiry_validation()
        {

                $this->form_validation->set_rules('name', 'Full Name', 'required');
                $this->form_validation->set_rules('email', 'Email ID', 'required');
                $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                $this->form_validation->set_rules('designation', 'Designation', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('investment', 'Investment Capicity', 'required');

                if ($this->form_validation->run() == false) {

                        $response = [
                                'success' => false,
                                'errors' => $this->form_validation->error_array(),
                                'message' => 'Error has been occurred !!'
                        ];
                } else {


                        $cur_date = date('Y-m-d H:i:s');
                        $data = [
                                'name' => htmlspecialchars($this->input->post('name', true)),
                                'email' => htmlspecialchars($this->input->post('email')),
                                'contact' => $this->input->post('mobile'),
                                'designation' => $this->input->post('designation'),
                                'state' => $this->input->post('state'),
                                'city' => $this->input->post('city'),
                                'investment_capacity' => $this->input->post('investment'),
                                'message' => $this->input->post('message'),
                                'created_at' => $cur_date
                        ];

                       $response = $this->db->insert('enquiries', $data)
                                ? ['success' => true, 'message' => 'Your Enquiry has been placed']
                                : ['success' => false, 'message' => 'Failed to insert data.'];
                        redirect('thankyou');
                }
                header('Content-Type: application/json');
                echo json_encode($response);
        }

        public function home_enquiry()
        {
                $this->form_validation->set_rules('name', 'Full Name', 'required');
                $this->form_validation->set_rules('email', 'Email ID', 'required');
                $this->form_validation->set_rules('message', 'Message', 'max_length[500]');

                if ($this->form_validation->run() == false) {
                        $response = [
                                'success' => false,
                                'errors' => $this->form_validation->error_array()
                        ];
                } else {
                        $cur_date = date('Y-m-d H:i:s');
                        $data = [
                                'fullname' => htmlspecialchars($this->input->post('name', true)),
                                'email' => $this->input->post('email'),
                                'message' => $this->input->post('message'),
                                'created_at' => $cur_date
                        ];

                        $response = $this->db->insert('home_enquiry', $data)
                                ? ['success' => true]
                                : ['success' => false, 'message' => 'Failed to insert data.'];
                        redirect('thankyou');
                }
                header('Content-Type: application/json');
                echo json_encode($response);
        }
}
