<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Email extends CI_Controller {

    public function __construct() {

        parent:: __construct();

        $this->load->model('m_req_m_power');//panggil model penilaian
        $this->load->model('M_email');//panggil model penilaian

       
    }

    public function index() {
        $this->load->view('email/contact');
    }

   
     public function ajax_send_mail_v1_reject()
    {
        $body_content=$this->input->post('body_content');
        $body_content="";
        $comment=$this->input->post('comment');
        $comment="";
        $status_subject=$this->input->post('status_subject');       
        $hdrid=$this->input->post('hdrid');
        $name2=$this->input->post('name2');
        $email2=$this->input->post('office_email');
        $problem_name=$this->input->post('problem_name');
        $group_product_name=$this->input->post('group_product_name');
        $product_name=$this->input->post('product_name');
        $problem_category_name=$this->input->post('problem_category_name');
        $customer_name=$this->input->post('customer_name');
        $problem=$this->input->post('problem');

        $inisisator_approver= $this->m_req_m_power->cari_inisiator_responsible($hdrid);        
        $subject=$status_subject." [".$problem_name."] ". $group_product_name.",".$product_name.",".$problem_category_name.",". $customer_name.",".$problem ;
        $sendmail=$this->M_email->Send_mail_reminder_v1($hdrid,$inisisator_approver->name,$inisisator_approver->office_email, $subject,$comment,$body_content); 

        $data['status']="Email Terkirim";       
        $this->output->set_content_type('application/json')->set_output(json_encode($data));


    }


    public function ajax_send_mail_v2()
    {
        
        $body_content=$this->input->post('body_content');
        $comment=$this->input->post('comment');
        $status_subject=$this->input->post('status_subject');
        $hdrid=$this->input->post('hdrid');
        $inisisator_approver= $this->M_email->cari_tb_approver($hdrid);
        // if (!is_empty($inisisator_approver)){
        $subject=$status_subject ;
        $sendmail=$this->M_email->Send_mail_reminder_v2($hdrid,$inisisator_approver->nik,$inisisator_approver->name,$inisisator_approver->office_email, $subject,$comment,$body_content);
        // }

        $data['status']="Email Terkirim";
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    


}