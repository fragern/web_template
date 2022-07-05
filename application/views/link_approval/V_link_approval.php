<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Visitor Portal</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $this->load->helper('url');
    ?>

    <!-- ########## CSS ##########-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">  
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- DataTables Button-->  
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">  
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">  
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
        
    <!-- ########## Javascript ##########-->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <!-- jquery-validation -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
    
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    
    <!-- DataTables Button--> 
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

    <!-- fullCalendar 2.2.5 -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/fullcalendar/main.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/fullcalendar-interaction/main.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.js"></script>

    
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bs-custom-file-input -->
    <script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

    <!-- Label For Chart -->
    <script src="<?php echo base_url() ?>assets/plugins/label-charts/labels.js"></script>

    <script src="<?php echo base_url() ?>assets/plugins/qrcode.min.js"></script>

    <!-- JSignature -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jSignature/flashcanvas.js"></script>
    
    
</head>

<body>
<script src="<?php echo base_url() ?>assets/plugins/jSignature/jSignature.min.js"></script>

    <div>
        <section class="content">

            <?php echo $this->session->flashdata('message');  ?>
            <small>

                <div class="container-fluid" id="printdiv">
                    <div class="row">
                        <div class="col-12">
                            <!-- .col -->
                            <div class="card">
                                <!-- .card -->
                                <div class="card-body">
                                    <!-- .card-body -->

                                    <div class="">

                                     
                                         <?php if ($nik->name=='All') {
                                            echo "Progress = Close";
                                         } else {
                                            echo 'Progress ='.$nik->nik.'-'.$nik->name. '(' . $nik->sequence  .')'. '(' . $nik->sequence . ' of '.$count_approval->sequence.')';
                                         }?> 


                                        <?php if ($this->session->userdata('user_name') == '' ) 
                                            echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-login'> Login </button>";
                                        ?>

                                        <?php if ($this->session->userdata('user_name') != $nik->nik ) 
                                            {
                                                // redirect('Auth');
                                                echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-approve' hidden> Approve </button>";
                                                echo "<button class='btn btn-warning float-right' data-toggle='modal' data-target='#modal-reject' hidden>Reject</button>";
                                            }
                                            else{
                                                // redirect('Auth');
                                                echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-approve'> Approve</button>";
                                                echo "<button class='btn btn-warning float-right' data-toggle='modal' data-target='#modal-reject'>Reject</button>";
                                            }
                                        ?>

                                        <button class="btn btn-primary float-right" onclick="printDiv('printdiv')"><i class="fa fa-print"></i></button>
                                        <button class="btn btn-danger float-right" onclick="formclose()"><i class="fa fa-times-circle"></i></button>

                                        <button class="btn btn-primary float-right" onclick="linkBack()"><i class="fa fa-arrow-left"></i>Back</button>

                                        <!-- <button class="btn btn-danger float-right" onclick="Approve_data()">TEST</i></button> -->

                                        <!-- <a class="btn btn-danger float-right" href="<php echo base_url() . 'C_Print/print_report2?var1=' . $tb_input_problem->hdrid; ?>"><i class="fa fa-file"></i></a> -->
                                    
                                    </div>

                                    <!-- <div class="">
                                        <a class="btn btn-danger float-right" href="<php echo base_url() . 'C_Print/print_report2?var1=' . $tb_input_problem->hdrid; ?>"><i class="fa fa-file"></i></a>
                                    </div> -->

                                    <!-- ECR -->
                                    <form class="form-horizntal" id="meetingform" role="form">
                                        <input id="text" type="text" hidden value="<?php $current = current_url() . '?var1=' . $tb_visitor->hdrid;
                                                                                    print_r($current); ?>" />
                                        <center>
                                            <table id="ecrtabel" class="table table-bordered table-hover" style="text-align: center;">
                                                <tbody>

                                                    <!-- TITLE -->
                                                    <tr style="height:5px">
                                                        <th> <img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8"> <br> Doc. </th>
                                                        <th colspan="1">
                                                            <div style=" padding-top: 25px">
                                                                <p id="qrcode"></p>
                                                            </div>
                                                        </th>
                                                        <th colspan="9" style="vertical-align: middle;">
                                                            <h2><u>FORM KEDATATANGAN TAMU / ENTERING APLICATION FORM FOR VISITORS</u></h2>
                                                        </th>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <img src="<?php echo base_url() ?>assets/dist/img/no_smoking.JPG" alt="no_smoking" style="opacity: .8">
                                                        </td>
                                                        <td colspan="2">
                                                            <img src="<?php echo base_url() ?>assets/dist/img/apd.JPG" alt="APD" style="opacity: .8">
                                                        </td>
                                                        <td colspan="2">
                                                            <img src="<?php echo base_url() ?>assets/dist/img/alarm.JPG" alt="alarm" style="opacity: .8">
                                                        </td>
                                                        <td colspan="2">
                                                            <img src="<?php echo base_url() ?>assets/dist/img/buang_sampah.JPG" alt="buang_sampah" style="opacity: .8">
                                                        </td>
                                                        <td colspan="2">
                                                            <img src="<?php echo base_url() ?>assets/dist/img/no_camera.JPG" alt="no_camera" style="opacity: .8">
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="1">
                                                            <h4 class="vertical-text">
                                                                <span>Tanggal : </span>
                                                                <?php $myvalue = $tb_visitor->waktu_kunjungan;

                                                                $datetime = new DateTime($myvalue);

                                                                $date = $datetime->format('Y-m-d');
                                                                $time = $datetime->format('H:i:s'); ?>      
                                                                <span><?= $date; ?></span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Jam Masuk : </span>
                                                                <?php $myvalue = $tb_visitor->waktu_kunjungan;

                                                                $datetime = new DateTime($myvalue);

                                                                $date = $datetime->format('Y-m-d');
                                                                $time = $datetime->format('H:i:s'); ?>      
                                                                <span><?= $time; ?></span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Jam Keluar : </span>
                                                                <?php $myvalue = $tb_visitor->waktu_selesai_kunjungan;

                                                                $datetime = new DateTime($myvalue);

                                                                $date = $datetime->format('Y-m-d');
                                                                $time = $datetime->format('H:i:s'); ?>      

                                                                <span><?php if($time == '00:00:00'){echo '-'; }else{echo $time;} ?></span>

                                                                    <!-- <php if($tb_visitor->waktu_selesai_kunjungan == '1900-01-01 00:00:00.000' || $tb_visitor->waktu_selesai_kunjungan == '' ||$tb_visitor->waktu_selesai_kunjungan == null){
                                                                        echo "-";
                                                                    }
                                                                        else{
                                                                            echo $tb_visitor->waktu_selesai_kunjungan;;
                                                                        }
                                                                    ?> -->
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" class=" text-left">
                                                            <h5>
                                                                <span class="vertical-text">Nama Tamu / Visitor Name :</span>
                                                            </h5>   <br>    
                                                            <h5>
                                                                <span class="vertical-text">Perusahaan / Company :</span>
                                                            </h5> <br> <br>  
                                                            <h5>
                                                                <span class="vertical-text">Jumlah Tamu / The Number of Guests : </span>
                                                            </h5>
                                                        </td>
                                                        <td colspan="4"  class=" text-left">
                                                            <h5>
                                                                <span class="vertical-text"><?= $tb_visitor->nama_tamu; ?></span>
                                                            </h5> <br>  
                                                            <h5>
                                                                <span class="vertical-text"><?= $tb_visitor->nama_perusahaan; ?></span>
                                                            </h5> <br>
                                                            <h5>
                                                                <span class="vertical-text"><?= $tb_visitor->jumlah_tamu; ?></span>
                                                            </h5>
                                                        </td>
                                                        <td colspan="1" class=" text-left">
                                                            <h5>
                                                                <span class="vertical-text">Nama Yang Hendak Dikunjungi :</span>
                                                            </h5>
                                                            <h5>
                                                                <span class="vertical-text">Bagian / Department :</span>
                                                            </h5>
                                                        </td>
                                                        <td colspan="4"  class=" text-left">
                                                        <h5>
                                                                <span class="vertical-text"><?= $tb_visitor->name_pic; ?></span>
                                                            </h5>
                                                            <h5>
                                                                <span class="vertical-text">( <?= $tb_visitor->department_pic; ?> ) </span>
                                                            </h5>
                                                            <h5 class="float-left mr-3">Keperluan : </h5>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="keperluan_dinas" class="form-check-input " id="keperluan_dinas" <?php if($tb_visitor->keperluan_dinas == 'on'){echo 'checked';}else{echo 'disabled';} ?> >
                                                                <label for="keperluan_dinas" class="form-check-label mr-5" >
                                                                    Keperluan Dinas
                                                                </label>

                                                                <input type="checkbox" name="keperluan_pribadi" class="form-check-input " id="keperluan_pribadi"  <?php if($tb_visitor->keperluan_pribadi == 'on'){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="keperluan_pribadi" class="form-check-label  mr-2">
                                                                    Keperluan Pribadi
                                                                </label>

                                                                <input type="checkbox" name="safety_induksi" class="form-check-input ml-3" id="safety_induksi" <?php if($tb_visitor->safety_induksi == 'on'){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="safety_induksi" class="form-check-label">
                                                                    Safety Induksi
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <h5 class="float-left mr-3">Janji : </h5>
                                                            <div class="form-group form-check-inline">

                                                                <input type="checkbox" name="sudah_ada_janji" class="form-check-input ml-3" id="sudah_ada_janji" <?php if($tb_visitor->sudah_ada_janji == 'on'){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="sudah_ada_janji" class="form-check-label">
                                                                    Sudah Ada Janji
                                                                </label>
                                                              
                                                                <input type="checkbox" name="belum_ada_janji" class="form-check-input ml-3" id="belum_ada_janji" <?php if($tb_visitor->belum_ada_janji == 'on'){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="belum_ada_janji" class="form-check-label">
                                                                    Belum Ada Janji
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="1"  >
                                                            <h4 class="vertical-text" >
                                                                <span>Peralatan / Equipment </span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Qty </span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Tujuan Penggunaan / Purpose Of Use</span>
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tbody>

                                                    <tr>
                                                        <td colspan="1">
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="pc" class="form-check-input " id="pc" <?php if($tb_visitor->komputer_tamu == 'on' ){echo 'checked';}else{echo 'disabled';} ?> >
                                                                <label for="pc" class="form-check-label">
                                                                    <strong>Laptop PC, Tablet</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check mr-3">
                                                                <input type="checkbox" name="usb" class="form-check-input mr-3" id="usb" <?php if($tb_visitor->usb_tamu == 'on' || $tb_visitor->kamera_tamu == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="usb" class="form-check-label">
                                                                    <strong>USB Memory, Camera</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="peralatan_other" class="form-check-input mr-3" id="peralatan_other" <?php if($tb_visitor->peralatan_other == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="peralatan_other" class="form-check-label">
                                                                    <strong>Others</strong>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="4">
                                                                <span> <?php if($tb_visitor->qty_komputer ==''){echo '0';}else{echo $tb_visitor->qty_komputer;} ?>  PCS</span><br><br>
                                                                <span> <?php if($tb_visitor->qty_usb =='' || $tb_visitor->qty_kamera=='' ){echo '0';}else{ echo $tb_visitor->qty_usb+$tb_visitor->qty_kamera;} ?> PCS </span><br><br>
                                                                <span> <?php if($tb_visitor->qty_other ==''){echo '0';}else{echo $tb_visitor->qty_other;} ?> PCS </span>
                                                        </td>
                                                        <td colspan="4">
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="dw" class="form-check-input " id="dw" <?php if($tb_visitor->development_work == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="dw" class="form-check-label">
                                                                    <strong>Development Work</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check ml-3">
                                                                <input type="checkbox" name="Maintenance" class="form-check-input mr-3" id="Maintenance" <?php if($tb_visitor->maintenance == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="Maintenance" class="form-check-label">
                                                                    <strong>Maintenance / Check Work</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="other" class="form-check-input mr-3" id="other" <?php if($tb_visitor->penggunaan_other == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="other" class="form-check-label">
                                                                    <strong>Others</strong>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tbody>

                                                    <tr>
                                                        <td colspan="12">
                                                            <h4 class="vertical-text">
                                                                <span> Isi Form Di Bawah Ini Jika Membawa Laptop / Komputer </span>
                                                            </h4>
                                                        </td>
                                                    </tr>   
                                                </tbody>



                                                <tbody>

                                                    <tr>
                                                        <td colspan="1"  >
                                                            <h4 class="vertical-text" >
                                                                <span>Apakah Pekerjaan Anda Memerlukan Koneksi Ke Network ?  </span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Persetujuan </span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Sebelum Koneksi Komputer Wajib Diperiksa Oleh PIC Area Tersebut</span>
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="1"  >
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="yes" class="form-check-input " id="yes" <?php if($tb_visitor->yes_request_network == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="yes" class="form-check-label">
                                                                    <strong>Yes</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="no" class="form-check-input" id="no" <?php if($tb_visitor->no_request_network == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="no" class="form-check-label">
                                                                    <strong>No</strong>
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>IS Section </span> 
                                                            </h4>
                                                            <!-- <img src="test.png" alt="test" width="80%" height="auto"> -->
                                                        </td>

                                                        <td colspan="3">
                                                            <span class="float-left">* Hasil Pemeriksaan Virus</span><br><br>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="file_baru" class="form-check-input " id="file_baru" <?php if($tb_visitor->virus_detected == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>  
                                                                <label for="file_baru" class="form-check-label">
                                                                    <strong>Pola File Versi Terbaru</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="tidak_ada_virus" class="form-check-input" id="tidak_ada_virus" <?php if($tb_visitor->no_virus_detected == 'on' ){echo 'checked';}else{echo 'disabled';} ?>> 
                                                                <label for="tidak_ada_virus" class="form-check-label">
                                                                    <strong>Tidak Ada Virus Terdeteksi</strong>
                                                                </label>
                                                            </div> <br>

                                                            <span class="float-left">* OS Security Patch</span><br><br>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="os_security" class="form-check-input " id="os_security" <?php if($tb_visitor->os_security == 'on' ){echo 'checked';}else{echo 'disabled';} ?>> 
                                                                <label for="os_security" class="form-check-label">
                                                                    <strong>Patch Keamanan Diinstal</strong>
                                                                </label>
                                                            </div>
                                                            

                                                        </td>

                                                        <td colspan="2">
                                                                <span>PIC Area</span>
                                                        </td>
                                                    </tr>
                                                </tbody>


                                                <tbody>
                                                    <tr>
                                                        <td colspan="1"  >
                                                            <h4 class="vertical-text" >
                                                                <span>Kartu Identitas Yang Ditinggal</span>
                                                            </h4>
                                                        </td>
                                                      
                                                        <td colspan="3">
                                                            <h4 class="vertical-text">
                                                                <span>Paraf Yang Dikunjungi </span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Security</span>
                                                            </h4>
                                                        </td>
                                                        <td colspan="4">
                                                            <h4 class="vertical-text">
                                                                <span>Tanda Tangan Tamu</span>
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                </tbody>


                                                <tbody>

                                                    <tr>
                                                        <td colspan="1">
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="ktp" class="form-check-input " id="ktp" <?php if($tb_visitor->ktp == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="ktp" class="form-check-label ml-2">
                                                                    <strong>KTP</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check ">
                                                                <input type="checkbox" name="sim" class="form-check-input " id="sim" <?php if($tb_visitor->sim == 'on' ){echo 'checked';}else{echo 'disabled';} ?>> 
                                                                <label for="sim" class="form-check-label ml-2">
                                                                    <strong>SIM</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center form-check">
                                                                <input type="checkbox" name="lainnya" class="form-check-input " id="lainnya"  <?php if($tb_visitor->lainnya == 'on' ){echo 'checked';}else{echo 'disabled';} ?>>
                                                                <label for="lainnya" class="form-check-label  ">
                                                                    <strong>lainnya</strong>
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td colspan="3">
                                                            <!-- <img src="test2.png" alt="test" width="80%" height="auto" style="margin-left: -100px;"> -->
                                                        </td>

                                                        <td colspan="3">
                                                          <!-- <img src="test2.png" alt="test" width="80%" height="auto" style="margin-left: -100px;"> -->
                                                        </td>
                                                        
                                                        <td colspan="3">
                                                         <!-- <img src="test2.png" alt="test" width="80%" height="auto" style="margin-left: -100px;"> -->
                                                        </td>

                                                    </tr>
                                                </tbody>


                                            </table>
                                        </center>
                                    </form>























                                    <!-- TTD APPROVE
                                    <center>
                                        <table id="ecrtabel" class="table table-bordered table-hover table-striped" style="text-align:center">
                                            <thead>
                                                <tr style="height:150px">
                                                    <td style="width:15% height=50%"> <label>APPROVED</label></td>
                                                    <td style="width:10%"> <label>BP</label></td>
                                                    <td style="width:10%"><label>PRC</label></td>
                                                    <td style="width:10%"> <label>WH</label></td>
                                                    <td style="width:10%"><label>MFG</label></td>
                                                    <td style="width:10%"> <label>QC</label></td>
                                                    <td style="width:10%"><label>PE</label></td>
                                                    <td style="width:10%"> <label>QA</label></td>
                                                    <td style="width:10%"><label>PC</label></td>
                                                </tr>

                                            </thead>

                                            <tbody></tbody>
                                        </table>
                                    </center> -->



                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.Col -->
                    </div> <!-- /.Row -->
                </div><!-- ./ Container -->
        </section>
    </div>

     <!--  modal-confirm-login -->
    <div class="modal fade" id="modal-confirm-login">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">

        <div class="modal-header">
            <h4 class="modal-title">Login confirmation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <label id="error_login" > </label>

             <div class="input-group mb-3">
            <input type="text" name="username" id="username" class="form-control" placeholder="UserID">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>

            <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>

        </div>

        <div class="modal-footer justify-content-between">

            <button type="button" id="login" onclick="Login_data()" class="btn btn-outline-light">Login</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

            <p class="mb-1">      
                <a href="http://10.73.142.75/forgot_password/" target="_blank" class="text-white">I forgot my password</a>               
            </p>


        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--  modal-confirm-approve -->
    <div class="modal fade" id="modal-confirm-approve">
    <div class="modal-dialog">
        <div class="modal-content bg-success">

        <div class="modal-header">
            <h4 class="modal-title">Approval confirmation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <label id="iddelete2" hidden> </label>Apakah ingin approve <label id="iddelete" hidden> </label> ?
            <br>
            <label id="lblposition" hidden> </label>
            <br>
            <label id="lbluserconfirm" hidden> <?php echo $userid; ?> </label>
            <label id="iduserlogin" hidden> <?php echo $hdrid; ?> </label>
        </div>

        <div class="modal-footer justify-content-between">

            <button type="button" id="delete" onclick="Approve_data()" class="btn btn-outline-light">Approve</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- modal-reject-approve -->
    <div class="modal fade" id="modal-reject">Reject_data
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
        <div class="modal-header">
            <h4 class="modal-title">Reason reject</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>


        <div class="modal-body">
            <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                <label for="reason_rejected">REASON</label>
                </div>
                <div class="col-md-10">
                <textarea rows="2" type="text" name="reason_rejected" class="form-control" id="reason_rejected"></textarea>
                </div>
            </div>
            </div>
        </div>

        <div class="modal-footer justify-content-between">

            <input type="text" name="rejecter" value="<?php echo $this->session->userdata('nama') ?>" class="form-control" id="rejecter" hidden>

            <!-- <input type="text" name="tbreject" class="form-control" id="tbreject" hidden> -->
            <input type="text" name="idreject" class="form-control" id="idreject" hidden>

            <button type="button" id="process_reject" onclick="Reject_data()" class="btn btn-outline-light">Reject</button>

            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal Reject-->


    <script>
        function printDiv(printdiv) {
            var printContents = document.getElementById(printdiv).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

    <script>
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100,
        });

        function makeCode() {
            var elText = document.getElementById("text");

            qrcode.makeCode(elText.value);
        }

        makeCode();
    </script>

    <!-- 
    <script type='text/javascript'>

/*--This JavaScript method for Print command--*/

    function printDiv() {

        var toPrint = document.getElementById('printdiv');
        var popupWin = window.open();


        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" media="print" href="<php echo base_url();?>assets/dist/css/test.css"/></head><body onload="window.print()">');
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script> -->

    <!-- <script>
        function printDiv(printdiv) {
            var printContents = document.getElementById(printdiv).innerHTML;
            var originalContents = document.body.innerHTML;

            printContents.document.write('<html><head><style type="text/css">');
            printContents.document.write('table tbody tr td.bg-cm{background-color: #D9D9D9; text-align: center; vertical-align: middle;}');
            printContents.document.write('table {text-align: center;');
            printContents.document.write('</style></head><body onload="window.print();">');
            document.body.innerHTML = printContents;
            printContents.document.write('</body></html>');
            // window.print();

            document.body.innerHTML = originalContents;
        }
    </script> -->

    

<!-- // ****************************************** JSignature  ***************************************************************       -->
<?php
// require_once('jSignature_Tools_Base30.php');
function base30_to_jpeg($base30_string, $output_file) {

    $data = str_replace('image/jsignature;base30,', '', $base30_string);
    $converter = new jSignature_Tools_Base30();
    $raw = $converter->Base64ToNative($data);
//Calculate dimensions
$width = 0;
$height = 0;
foreach($raw as $line)
{
    if (max($line['x'])>$width)$width=max($line['x']);
    if (max($line['y'])>$height)$height=max($line['y']);
}

// Create an image
    $im = imagecreatetruecolor($width+20,$height+20);


// Save transparency for PNG
    imagesavealpha($im, true);
// Fill background with transparency
    $trans_colour = imagecolorallocatealpha($im, 255, 255, 255, 127);
    imagefill($im, 0, 0, $trans_colour);
// Set pen thickness
    imagesetthickness($im, 7);
// Set pen color to black
    $black = imagecolorallocate($im, 0, 0, 0);   
// Loop through array pairs from each signature word
    for ($i = 0; $i < count($raw); $i++)
    {
        // Loop through each pair in a word
        for ($j = 0; $j < count($raw[$i]['x']); $j++)
        {
            // Make sure we are not on the last coordinate in the array
            if ( ! isset($raw[$i]['x'][$j])) 
                break;
            if ( ! isset($raw[$i]['x'][$j+1])) 
            // Draw the dot for the coordinate
                imagesetpixel ( $im, $raw[$i]['x'][$j], $raw[$i]['y'][$j], $black); 
            else
            // Draw the line for the coordinate pair
            imageline($im, $raw[$i]['x'][$j], $raw[$i]['y'][$j], $raw[$i]['x'][$j+1], $raw[$i]['y'][$j+1], $black);
        }
    } 

//Create Image
    $ifp = fopen($output_file, "wb"); 
    imagepng($im, $output_file);
    fclose($ifp);  
    imagedestroy($im);

    return $output_file; 
}

//test
// $imgStr='image/jsignature;base30,aW04_2u1xZh_gvfW_3y3T_7S9Q_5I1A_oO2RZcdedY4P_1z1u54101N';
$imgStr=$testas->signature;
$imgStr2=$testas->signature;
base30_to_jpeg($imgStr, 'test.png');
base30_to_jpeg($imgStr2, 'test2.png');

?>




<?php
/** @license
jSignature v2 SVG export plugin.
Copyright (c) 2012 Willow Systems Corp http://willow-systems.com
MIT License <http://www.opensource.org/licenses/mit-license.php>
*/
class jSignature_Tools_Base30 {

    // private $acceptedformat = 'image/jsignature;base30';

    private $chunkSeparator = '';
    private $charmap = array(); // {'1':'g','2':'h','3':'i','4':'j','5':'k','6':'l','7':'m','8':'n','9':'o','a':'p','b':'q','c':'r','d':'s','e':'t','f':'u','0':'v'}
    private $charmap_reverse = array(); // will be filled by 'uncompress*" function
    private $allchars = array();
    private $bitness = 0;
    private $minus = '';
    private $plus = '';

    function __construct() {
        global $bitness, $allchars, $charmap, $charmap_reverse, $minus, $plus, $chunkSeparator;

        $allchars = str_split('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWX');
        $bitness = sizeof($allchars) / 2;
        $minus = 'Z';
        $plus = 'Y';
        $chunkSeparator = '_';

        for($i = $bitness-1; $i > -1; $i--){
            $charmap[$allchars[$i]] = $allchars[$i+$bitness];
            $charmap_reverse[$allchars[$i+$bitness]] = $allchars[$i];
        }

    }

    /*
    Decompresses half of a stroke in a base30-encoded jSignature image.

    $c = new jSignature_base30();

    $t = array(236, 233, 231, 229, 226, 224, 222, 216, 213, 210, 205, 202, 200, 198, 195, 193, 191, 189, 186, 183, 180, 178, 174, 172);

    $leg = '7UZ32232263353223222333242';

    $a = $c->uncompress_stroke_leg($leg);

    $t == $a
    */
    private function uncompress_stroke_leg($datastring){
        global $charmap, $charmap_reverse, $bitness, $minus, $plus;

        // we convert half-stroke (only 'x' series or only 'y' series of numbers)
        // datastring like this:
        // "5agm12100p1235584210m53"
        // is converted into this:
        // [517,516,514,513,513,513,514,516,519,524,529,537,541,543,544,544,539,536]
        // each number in the chain is converted such:
        // - digit char = start of new whole number. Alpha chars except "p","m" are numbers in hiding.
        //   These consecutive digist expressed as alphas mapped back to digit char.
        //   resurrected number is the diff between this point and prior coord.
        // - running polaritiy is attached to the number.
        // - we undiff (signed number + prior coord) the number.
        // - if char 'm','p', flip running polarity 
        $answer = array();
        $chars = str_split( $datastring );
        $l = sizeof( $chars );
        $ch = '';
        $polarity = 1;
        $partial = array();
        $preprewhole = 0;
        $prewhole = 0;

        for($i = 0; $i < $l; $i++){
            // echo "adding $i of $l to answer\n";
            $ch = $chars[$i];
            if (array_key_exists($ch, $charmap) || $ch == $minus || $ch == $plus){
                
                // this is new number - start of a new whole number.
                // before we can deal with it, we need to flush out what we already 
                // parsed out from string, but keep in limbo, waiting for this sign
                // that prior number is done.
                // we deal with 3 numbers here:
                // 1. start of this number - a diff from previous number to 
                //    whole, new number, which we cannot do anything with cause
                //    we don't know its ending yet.
                // 2. number that we now realize have just finished parsing = prewhole
                // 3. number we keep around that came before prewhole = preprewhole

                if (sizeof($partial) != 0) {
                    // yep, we have some number parts in there.
                    $prewhole = intval( implode('', $partial), $bitness) * $polarity + $preprewhole;
                    array_push( $answer, $prewhole );
                    $preprewhole = $prewhole;
                }

                if ($ch == $minus){
                    $polarity = -1;
                    $partial = array();
                } else if ($ch == $plus){
                    $polarity = 1;
                    $partial = array();
                } else {
                    // now, let's start collecting parts for the new number:
                    $partial = array($ch);
                }
            } else /* alphas replacing digits */ {
                // more parts for the new number
                array_push( $partial, $charmap_reverse[$ch]);
            }
        }
        // we always will have something stuck in partial
        // because we don't have closing delimiter
        array_push( $answer, intval( implode('',$partial), $bitness ) * $polarity + $preprewhole );
        
        return $answer;
    }

    /*
    $c = new jSignature_base30();

    $signature = "3E13Z5Y5_1O24Z66_1O1Z3_3E2Z4";
    
    // This is exactly the same as "native" format within jSignature.
    $t = array(
        array(
            'x'=>array(100,101,104,99,104)
            ,'y'=>array(50,52,56,50,44)
        )
        ,array(
            'x'=>array(50,51,48)
            ,'y'=>array(100,102,98)
        )
    );

    $a = $c->Base64ToNative($signature);

    $t == $a
    */
    public function Base64ToNative($datastring){
        global $chunkSeparator;

        $data = array();
        $chunks = explode( $chunkSeparator, $datastring );
        $l = sizeof($chunks) / 2;
        for ($i = 0; $i < $l; $i++){
            array_push( $data, array(
                'x' => $this->uncompress_stroke_leg($chunks[$i*2])
                , 'y' => $this->uncompress_stroke_leg($chunks[$i*2+1])
            ));
        }
        return $data;
    }

}


?>



<!-- // ****************************************** JSignature  ***************************************************************       -->




</body>

</html>

<!-- <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->



<script type="text/javascript">
    function view_modal(hdrid1, status) {
        $('#hdrid').val(hdrid1);
        var hdrid = hdrid1;
        var form_data_edit = $('#ecrform').serializeArray();
        var field;
        var fieldvalue;

        // Ajax isi data
        $.ajax({
            url: "<?php echo base_url('C_Ecr/ajax_getbyhdrid') ?>",
            method: "get",
            dataType: "JSON",
            data: {
                hdrid: hdrid1
            },
            success: function(data) {
                $('#ecr_id').val(data.ecr_id);
                $('#check_point').val(data.check_point);
                $('#part_name').val(data.part_name);
                $('#part_number_old').val(data.part_number_old);
                $('#part_number_new').val(data.part_number_new);
                $('#status').val(data.status);
                // Refresh meeting
                tabel2.draw();

            },
            error: function(e) {
                alert(e);

            }
        });
    }

    function testAlert(){
        return alert ("test");
    }

    function Login_data() {

        // Form data
        var fdata = new FormData();
        // var fdata2 = new FormData();

        // Update by Hdrid    
        fdata.append('username',  $('#username').val());
        fdata.append('password',  $('#password').val());

        // alert('Hello');

        // Url Post Untuk Approve
        vurl = "<?php echo base_url('C_print_approval/ajax_login') ?>";

        // Post data
        $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {

            if(data.status=="OK") {

                // Refresh Page
                location.reload();

            }else{

                // Munculkan pesan
                $('#error_login').text(data.status);
                // Clear inputan login
                $('#username').val("");
                $('#password').val("");

            }

        },
        error: function(e) {
            //Pesan Gagal
            gagal(e);
        }
        });

        }

        
    function formclose(){
        setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 1000); 
    }

    function linkBack(){
      location.href = "http://10.73.142.75/E_Visitor/C_visitor";
    }

    function testAlert(){
        return alert('halo');
    }

    function Approve_data() {

        // alert(<php echo $hdrid ?>);

        // Form data
        var fdata = new FormData();
        // var fdata2 = new FormData();

        // Update by Hdrid
        fdata.append('hdrid',"<?php echo $hdrid ?>");
        fdata.append('nik', "<?php echo $nik->nik; ?>");
        fdata.append('name', "<?php echo $nik->name; ?>");
        fdata.append('sequence', "<?php echo $nik->sequence; ?>");

        var fdata2 = new FormData();

        fdata2.append("hdrid","<?php echo $hdrid ?>");

        // fdata2.append("problem_name","<php echo $tb_visitor->problem_name ?>"); 
        // fdata2.append("group_product_name","<php echo $tb_visitor->group_product_name ?>"); 
        // fdata2.append("product_name","<php echo $tb_visitor->product_name ?>"); 
        // fdata2.append("name2","<php echo $tb_visitor->name2 ?>"); 
        // fdata2.append("problem_category_name","<php echo $tb_visitor->problem_category_name ?>"); 

        fdata2.append("body_content",""); 
        fdata2.append("comment",""); 
        fdata2.append("status_subject","");
        // fdata2.append('position_code', "<php echo $nik->position_code; ?>");

        // Url Post Untuk Approve
        vurl = "<?php echo base_url('C_print_approval/ajax_approve') ?>";

        // Post data
        $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {

            //fdata2.append("body_content",data.status); 
        // Hide modal delete
            berhasil("Approve success");  

            fdata2.append("body_content",data.status); 

            $('#modal-confirm-approve').modal('hide');

            // $('#modal-default').modal('hide');
            // berhasil(data.status);

            var vurl2; 
            // vurl2 = "<php echo base_url('C_Email/ajax_send_mail_v2')?>";
            vurl2 = "<?php echo base_url('C_Email/ajax_send_mail_v2')?>";

            $.ajax({
                url: vurl2,
                method: "post",
                processData: false,
                contentType: false,
                data: fdata2,
                success: function (data) {                 
                    // Pesan berhasil  

                },
                error: function (e) {
                    gagal(e);
                    //location.reload();
                    //error
                }
            });


        },
        error: function(e) {
                //Pesan Gagal
                gagal(e);
            }
        });

        }



</script>

<script type="text/javascript">


  function Reject_data() {

    // Validasi reason harus diisi
    if ($('#reason_rejected').val() == '') {
      gagal('Reason wajib diisi...');
      return false;
    }

    // Form data
    var fdata = new FormData();
    var fdata2 = new FormData();

    // Delete by Hdrid
    // fdata.append('hdrid',"<php echo $hdrid ?>");
    // fdata.append('rejected_by', "<php echo $name; ?>");
    // fdata.append('reason', $('#reason').val());

    fdata.append('hdrid',"<?php echo $tb_visitor->hdrid ?>");
    fdata.append('rejected_by', "<?php echo $nik->name; ?>");
    fdata.append('reason_rejected', $('#reason_rejected').val());
    // fdata.append('position_code', "<php echo $nik->position_code; ?>");

    // return false;    

    var fdata2 = new FormData();

    fdata2.append("hdrid","<?php echo $hdrid ?>"); 
    // fdata2.append("problem_name","<php echo $tb_visitor->problem_name ?>"); 
    // fdata2.append("group_product_name","<php echo $tb_visitor->group_product_name ?>"); 
    // fdata2.append("product_name","<php echo $tb_visitor->product_name ?>"); 
    // fdata2.append("name2","<php echo $name ?>"); 
    // fdata2.append("problem_category_name","<php echo $tb_visitor->problem_category_name ?>"); 
    
    fdata2.append("body_content","Rejected by " + "<?php echo $nik->name; ?>" + " with reason " + $('#reason_rejected').val() ); 
    fdata2.append("comment",""); 
    fdata2.append("status_subject","Rejected");
    // fdata2.append('position_code', "<php echo $nik->position_code; ?>");

    // Url Post delete
    vurl = "<?php echo base_url('C_print_approval/ajax_reject') ?>";

    // Post data
    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        // Hide modal delete
        $('#modal-reject').modal('hide');
        $('#modal-default').modal('hide');

        // berhasil(data.status);
        var vurl2; 
        vurl2 = "<?php echo base_url('C_Email/ajax_send_mail_v1_reject')?>";

        $.ajax({
            url: vurl2,
            method: "post",
            processData: false,
            contentType: false,
            data: fdata2,
            success: function (data) {                 
                // Pesan berhasil
                berhasil(data.status);                               
            },
            error: function (e) {
                gagal(e);
                //location.reload();
                //error
            }
        });


      },
      error: function(e) {
        //Pesan Gagal
        gagal(e);
      }
    });
  }

</script>


<script type="text/javascript">

    const Toast = Swal.mixin({
      toast: true,
      position: 'botton',
      showConfirmButton: false,
      timer: 5000
    });

    function berhasil($data)
      {

          Toast.fire({
          type: 'success',
          title: $data             
          });

      }

      function gagal($data)
      {
        
          Toast.fire({
          type: 'error',
          title: $data             
          });
      }

</script>










