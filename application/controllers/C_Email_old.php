<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Email extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->model('M_Employee');
        $this->load->model('M_email');
       
    }

    public function index() {
        $this->load->view('email/contact');
    }

    function send() {

            $this->email->from('dmia.system.a2d@ap.denso.com');            
            $this->email->to('widodo.a5v@ap.denso.com');
            $this->email->subject('Your request has been approved');           
            $this->email->message('Testing the email class.<br>
            Testing the email class.<br>
            Testing the email class.<br>');

        if ($this->email->send()) {
            // echo 'Your Email has successfully been sent.';
            $this->load->view('templates/header'); //Tampil header
            $this->load->view('templates/sidebar'); //Tampil Sidebar
            $this->load->view('employee/V_employee'); // Tampil data
            $this->load->view('templates/footer'); // Tampil footer
        } else {
            show_error($this->email->print_debugger());
        }

    }
    
    function Send_mail() {

        $hdrid=$this->input->post('hdrid');
        $this->M_email->Send_mail($hdrid); // Ambil dari database central

    }

    function Send_mail_reject() {

        $hdrid=$this->input->post('hdrid');
        $this->M_email->Send_mail_reject($hdrid); // Ambil dari database central

    }

    
}