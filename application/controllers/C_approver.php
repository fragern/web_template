<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_approver extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->model('M_Employee');
        $this->load->model('M_email');
       
    }

    public function index() {
        $this->load->view('email/contact');
    }

    function Details_wiretransfer_approved(){
        
        $hdrid=$this->input->get('var1');
        $nik_approver=$this->input->get('var2');
                
        if ((int)(strlen($hdrid))>20){ //Sudah encode
            $hdrid2=str_replace("5y5Dm1A","+",$this->input->get('var1'));
            $hdrid2=$this->encrypt->decode($hdrid2);
            $hdrid=$hdrid2;

        } else{   //Belum encode

            $msg=substr("WTR2011063",3); // yang dibolehin 63 kebawah
            $msg2=substr($hdrid,3);

            if ((int)($msg2)>(int)($msg)){ // Jika lebih besar tidak diijinkan
                redirect('C_wiretransfer_approver/index');
            }

        }

        if ((int)(strlen($nik_approver))>20){ //Sudah encode

            $nik_approver2=str_replace("5y5Dm1A","+",$this->input->get('var2'));
            $nik_approver2=$this->encrypt->decode($nik_approver2);
            $nik_approver=$nik_approver2;

        }else{ //Belum encode

            $msg=substr("WTR2011063",3); // yang dibolehin 63 kebawah
            $msg2=substr($hdrid,3);

            if ((int)($msg2)>(int)($msg)){ // Jika lebih besar tidak diijinkan
                redirect('C_wiretransfer_approver/index');
            }

        }

        //Jika hdrid 0 setelah encrypt

        if ((int)(strlen($hdrid))<1){
            redirect('C_wiretransfer_approver/index');
        }

        //Jika nik_approver 0 setelah encrypt

        if ((int)(strlen($nik_approver))<1){
            redirect('C_wiretransfer_approver/index');
        }

        //Jika hdrid ilegal
        $count=$this->M_wiretransfer->get_tb_wiretransfer_count($hdrid); 
       
        if ((int)($count)<1){
            redirect('C_wiretransfer_approver/index');
        }

        /* $msg=$this->encrypt->encode('encrypt');
        $data['hasil5'] =$msg; */
        /* $hdrid2 =$this->encrypt->decode($hdrid);
        $nik_approver2=$this->encrypt->decode($nik_approver); */
        
        $data['wiretransfer'] =$this->M_wiretransfer->get_tb_wiretransfer($hdrid); 
        $data['dataapprover3'] =$this->M_wiretransfer->view_mail_approver($hdrid,$nik_approver)->row(); 
        $data['dataallaprover'] =$this->M_wiretransfer->view_mail_approver_all($hdrid); 

        $msg=substr("WTR2011064",3);
        $msg2=substr("WTR2011063",3);

        if ((int)($msg)<(int)($msg2)){
            $msg='';
        }else{
            $msg='';
        }

        $data['data5'] =$msg; 
        $data['data6'] =$nik_approver; 
        $data['data7'] =$count; 
        
        $this->load->view('approver/V_wiretransfer_details_approved',$data); // Tampil data
      
    }


    
}