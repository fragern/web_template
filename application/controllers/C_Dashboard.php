<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 **/

     /** ---------------------------------------------- Employee----------------------------------------------**/

	public function Index()
	{

        if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
			
			//$dat1=$this->session->userdata('nama');
			//$datww=$this->UserModel->getPersonalData('DM1902106');
			//$data['Nameemp'] = $datww;
			//$details=$this->UserModel->getPersonalData('DM1902106');
            //$data['Employee'] =$details; 

			$this->load->view('templates/header'); //Tampil header
			$this->load->view('templates/sidebar'); //Tampil Sidebar
			$this->load->view('V_dashboard'); // Tampil data
			$this->load->view('templates/footer'); // Tampil footer
			        
        }else{

            redirect('auth');

		}
		
	}
		
	public function Details_User($NoPegawai) 
	{

        if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
             
        //$this->load->Model('M_Employee');
		$details=$this->M_Dashboard->GetNameEmployee($NoPegawai);
        $data['Nameemp'] =$details;      
        $this->load->view('templates1/header');
		$this->load->view('templates1/sidebar');
		$this->load->view('employee/V_EmployeeDetails',$data);
        $this->load->view('templates1/footer');     
        
        }else{

        redirect('auth');

        }

    }
    
    /** ---------------------------------------------- /Employee----------------------------------------------**/

}
