<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_link_approval extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
    
            // if ($this->session->userdata('user_name') == "") {
            //     redirect('Auth');
            // }
    
            $this->load->helper('date');
            $this->load->helper('file');
            $this->load->model('M_print');
            // $this->load->model('M_progress');
            $this->load->model('UserModel');
            $this->load->model('M_link_approval');
            $this->load->model('M_signature_visitor');
            // $this->load->model('M_approver');
    
            
        }
    
        //untuk menampilkan data
        public function index()
        {

            //hdrid
            $hdrid = $this->input->get('var1');     
            //Data transaksi
            $data['tb_visitor'] = $this->M_link_approval->ajax_getbyhdrid($hdrid, 'tb_visitor')->row();
            //List semua approver
            $data['list_all_approval'] = $this->M_link_approval->getApproval($hdrid);
            //Approver berjalan
            $data['nik'] = $this->M_link_approval->cari_tb_approver($hdrid);
            //Total approver
            $data['count_approval'] = $this->M_link_approval->cari_count_tb_approver($hdrid);
            // Transaksi ID
            $data['hdrid'] = $hdrid ;
            // Page approval
            $this->load->view('link_approval/V_link_approval', $data);

        }

        public function print2()
        {
         
            $this->load->view('link_approval/V_link_approval2');
        }
    
        function ajax_getbyhdrid()
        {
    
            $hdrid = $this->input->get('hdrid');
            $data = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
            echo json_encode($data);
        }
    
        function link_show()
        {
            $hdrid = $this->input->get('var1');
            $test = $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
            // error_reporting(0);
            $var1 = $test->problem_name;
            // var_dump($var1);
            // die;
    
            if ($var1 == 'internal') {
                $this->link_report1();
            } else if ($var1 == 'external') {
                $this->link_report1();
            } else {
                echo $msg = "Data Tidak Valid";
            }
            
        }
        function link_show2()
        {
            $hdrid = $this->input->get('var1');
            $test = $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
            // error_reporting(0);
            $var1 = $test->problem_name;
            // var_dump($var1);
            // die;
    
            if ($var1 == 'internal') {
                $this->link_report2();
            } else if ($var1 == 'external') {
                $this->link_report2();
            } else {
                echo $msg = "Data Tidak Valid";
            }
        }
    
        function link_report1()
        {
            $hdrid = $this->input->get('var1');
            $app = $this->input->get('var1');
            $data['username'] = $this->session->userdata('username');
            $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
            $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
            $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();
            $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();
            $data['array_approval'] = $this->m_print->getApproval($hdrid);       
            $this->load->view('Print/v_link_approved', $data);
    
        }
    
        function link_report2()
        {
            $hdrid = $this->input->get('var1'); 
            $app = $this->input->get('var1'); 
            $data['username'] = $this->session->userdata('username');
            $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
            $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
            $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();
            $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();
    
            // $dt['tb_dimas'] = $this->m_print->get_all_userid();
            $data['array_approval'] = $this->m_print->getApproval($hdrid);
            // var_dump($dt);
    
            // $data['tb_pc'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_response')->row();
            // // $data['tb_pe'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_approval')->row();
            // $data['tb_qa'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_input_effectiveness')->row();
    
            $this->load->view('link_approval/V_link_approval2', $data);
    
        }
    
        function link_report2_approved()
        {
            
            $hdrid = $this->input->get('var1');     //hdrid
           
             
            // $data['username'] = $this->session->userdata('username');
    
            $data['tb_visitor'] = $this->M_link_approval->ajax_getbyhdrid($hdrid, 'tb_visitor')->row();
            // $data['tb_visitor'] = $this->M_link_approval->ajax_getbyhdrid('TR202202001', 'tb_visitor')->row();
            $data['array_approval'] = $this->M_link_approval->getApproval($hdrid);
            $data['nik'] = $this->M_link_approval->cari_tb_approver($hdrid);
            $data['nik2'] = $this->M_link_approval->cari_tb_approver2($hdrid);
    
            // Approver
            $data['hdrid'] = $hdrid ;

            $data['testas'] = $this->M_signature_visitor->ajax_getbytest('Dimas', 'tb_signature_visitor')->row();
                        
            $this->load->view('link_approval/V_link_approval', $data);
    
        }
    
        function ajax_login()
        {
    
            $data['status'] = "NG";
            $username = str_replace(' ', '', $this->input->post('username'));
            $password = str_replace(' ', '', $this->input->post('password'));
            $password = md5($password);
           
            $user = $this->UserModel->get($username); // Ambil dari database central
            $email= $this->UserModel->getemployeedetail($username); // Ambil dari database HRSS
    
            if(empty($user)){ // Jika hasilnya kosong atau user ID tidak ditemukan
                $data['status'] = "NG User ID tidak ditemukan"; //User ID tidak ditemukan
            }else{
                 if($password == $user->password){
                     $data['status'] = "OK";
                     $session = array(
                        'authenticated'=>true, // Buat session authenticated dengan value true      
                        // Ambil dari database central
                        'user_name'=>$user->user_name, // Buat session nama          
                        'nama'=>$user->name, // Buat session nama
                        'dept_id'=>$user->kode_department, // Buat session nama                   
                        'email'=>$email->email, // Buat session role
                        'officeemail'=>$email->office_email
                        );
                     $this->session->set_userdata($session); // Buat session sesuai $session
                 }else{
                     $data['status'] = "NG password salah"; //Password salah
                 }
            }
          
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
    
        }
    
    
        function ajax_approve()
        {
    
            $nik = str_replace(' ', '', $this->input->post('nik'));
            $name = str_replace(' ', '', $this->input->post('name'));
            $hdrid = str_replace(' ', '', $this->input->post('hdrid'));
            $sequence = str_replace(' ', '', $this->input->post('sequence'));
    
            // current  date
        	date_default_timezone_set('Asia/Jakarta');
            $data2 = array('date_approve' => mdate('%Y-%m-%d %H:%i:%s', time()));
             
            // Where condition
            $where = array(
                'nik' => $nik,
                'sequence' => $sequence,
                'hdrid' => $hdrid
            );
    
            // Update data
             $status_transaction=$this->M_link_approval->Update_Data_Approve($where, $data2, 'tb_approval',$hdrid);
         
             $data['status'] =  $status_transaction;
             $this->output->set_content_type('application/json')->set_output(json_encode($data));
                 
        }
    
        function ajax_reject()
        {

            // Hdrid
            $hdrid = $this->input->post('hdrid');
            // Rejected by
            $rejected_by = str_replace(' ', '', $this->input->post('rejected_by'));
            // Reason reject
            $reason_rejected = $this->input->post('reason_rejected');
        
            // current  date
            $status_reject = "Rejected By:".$rejected_by." With reason: ".$reason_rejected;
            $data = array('rejected_by' => $rejected_by, 'reason_rejected' => $reason_rejected, 'date_rejected' => mdate('%Y-%m-%d %h:%i:%s', time()),'status_transaction' => $status_reject);
            // Where condition
            $where = array('hdrid' => $hdrid);
            // Update data tb_input_problem
            $this->M_link_approval->Update_Data($where, $data, 'tb_visitor');

            // Update date tb_approval       
            $this->M_link_approval->reject_Data_Approve($hdrid);
                    
            $data['status'] = 'Berhasil direject';

            $this->output->set_content_type('application/json')->set_output(json_encode($data));

        }
    

    
    }
    