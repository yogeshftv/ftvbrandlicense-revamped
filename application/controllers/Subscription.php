<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Subscription extends CI_Controller
{

    public function subscribe()
{
    $email = $this->input->post('email');

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email error
        $response = array(
            'status' => 'error',
            'message' => 'Invalid email address'
        );
        echo json_encode($response);
        return;
    }

    // Check if email already exists in the database
    $existingEmail = $this->db->where('email', $email)->get('newsletter')->row();

    if ($existingEmail && $existingEmail->unsubscribed) {
        // Email exists but was unsubscribed, update status to subscribed
        $this->db->where('email', $email)->update('newsletter', array('unsubscribed' => 0));

        $this->load->library('email');
        // Email configuration
        $filecontent = VIEWPATH . 'templates/email_temp.php';
        $message = file_get_contents($filecontent);
        $message = str_replace('{{user_email}}', $email, $message);

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ftvrealestate.in',
            'smtp_port' => 465,
            'smtp_auth' => true,
            'smtp_user' => 'noreply@ftvrealestate.in',
            'smtp_pass' => 'Fashiontv@123',
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->from('noreply@ftvrealestate.in', 'FashionTV');

        // Send email to candidate
        $this->email->to($email);
        $this->email->subject('Thank you for Resubscribing ftvrealestate');
        $this->email->message($message);

        if ($this->email->send()) {
            // Return JSON response for success
            $response = array(
                'status' => 'resubscribe',
                'message' => 'Thank you for resubscribing'
            );
            echo json_encode($response);
        } else {
            // Return JSON response for error
            $response = array(
                'status' => 'error',
                'message' => 'An error occurred while sending the email. Please try again later.'
            );
            echo json_encode($response);
        }
    } else if ($existingEmail) {
        // Email already exists and is subscribed
        $response = array(
            'status' => 'already_subscribed',
            'message' => 'You are already subscribed'
        );
        echo json_encode($response);
    } else {
        // Email does not exist, proceed with new subscription
        $cur_date = date('Y-m-d H:i:s');
        $data = [
            'email' => $email,
            'created_at' => $cur_date,
            'unsubscribed' => 0
        ];

        $this->load->library('email');
        // Email configuration
        $filecontent = VIEWPATH . 'templates/email_temp.php';
        $message = file_get_contents($filecontent);
        $message = str_replace('{{user_email}}', $email, $message);

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ftvrealestate.in',
            'smtp_port' => 465,
            'smtp_auth' => true,
            'smtp_user' => 'noreply@ftvrealestate.in',
            'smtp_pass' => 'Fashiontv@123',
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->from('noreply@ftvrealestate.in', 'FashionTV');

        // Send email to candidate
        $this->email->to($email);
        $this->email->subject('Thank you for Subscribing ftvrealestate');
        $this->email->message($message);

        if ($this->email->send()) {
            // Return JSON response for success
            $response = array(
                'status' => 'success',
                'message' => 'You have subscribed successfully'
            );
            $this->db->insert('newsletter', $data);
            echo json_encode($response);
        } else {
            // Return JSON response for error
            $response = array(
                'status' => 'error',
                'message' => 'An error occurred while sending the email. Please try again later.'
            );
            echo json_encode($response);
        }
    }
}

    public function unsubscribe()
    {
        $email = $this->input->get('email');
     
        // Validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Handle invalid email error
            redirect('subscription/unsubscribe_error');
       
        }

        // Check if email exists in the database
        $existingEmail = $this->db->where('email', $email)->get('newsletter')->row();

        if (!$existingEmail) {
            // Email does not exist, show error page indicating not subscribed
            redirect('not-subscribe');
         
        }

        if($existingEmail){
            // redirect('subscription/unsubscribeconfirmedpg');
            $this->unsubscribeconfirmedpg($email);

            // $this->db->where('email', $email)->update('newsletter', ['unsubscribed' => 1]);
            // redirect('unsubscribe');
        }


        // if user is already unsubscribe make the condition 
        if ($existingEmail->unsubscribed == 1) {
            // User is already unsubscribed, show appropriate message or redirect
            redirect('not-subscribe');
        }
      
    }

    // 


    public function staying()
    {
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['meta_title'] = '';


        $this->load->view("components/head", $data);
        $this->load->view("templates/staying");
    }
    public function unsubscribepg()
    {
        $emai_id = $this->input->get('email');
        $this->db->where('email', $emai_id)->update('newsletter', ['unsubscribed' => 1]);
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['meta_title'] = '';


        $this->load->view("components/head", $data);
        $this->load->view("templates/unsubscribe");
    }
    public function unsubscribeconfirmedpg($email)
    {
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['meta_title'] = '';
        $data['user_email'] = $email;
        // $email = $this->input->get('email');
        // print_r($email);die;

        $this->load->view("components/head", $data);
        $this->load->view("templates/unsubscribe-confirm",$data);
    }
    public function not_subscribe()
    {
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['meta_title'] = '';
        // $data['user_email'] = $email;

        $this->load->view("components/head", $data);
        $this->load->view("templates/not_subscribed");
    }

 public function unsubscribe_error()
 {
    $data['meta_description'] = '';
    $data['meta_keywords'] = '';
    $data['meta_title'] = '';
    // $data['user_email'] = $email;

    $this->load->view("components/head", $data);
    $this->load->view("templates/not_subscribed");
 }


public function temp()
{
    $data['meta_description'] = '';
    $data['meta_keywords'] = '';
    $data['meta_title'] = '';
    // $data['user_email'] = $email;

    $this->load->view("components/head", $data);
    $this->load->view("templates/email_temp");
}


}
