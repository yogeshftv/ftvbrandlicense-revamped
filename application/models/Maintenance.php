<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @author Hemant Karkar 
 * @class 
 * Data class defines functions to fetch or feed data to and from the application.
 * */
class Maintenance extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('parser');
  }
  /**
   * -----------------------------------------------------------
   * Check if the any webpage's view is in maintenance or not.
   * -----------------------------------------------------------
   * @param string $view Name of the view which is under construction.
   * @return void
   */
  public function check_if_in_maintenance($view, $data = null)
  {
    if ($this->config->item('maintenance_mode') == TRUE) {
      if (in_array($view, $this->config->item('views_in_maintenance'))) {
        $this->load->view('status/maintenance');
      } else {
        $this->load->view($view, $data);
      }
    } else {
      $this->load->view($view,$data);
    }
  }

  public function check_template_in_maintenance($template, $data = null){
    if ($this->config->item('maintenance_mode') == TRUE) {
      if (in_array($template, $this->config->item('views_in_maintenance'))) {
        $this->load->view('status/maintenance');
      } else {
        $this->parser->parse($template, $data);
      }
    } else {
      $this->parser->parse($template, $data);
    }
  }
}
