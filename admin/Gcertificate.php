<?php session_start(); 
if(!isset($_SESSION['uname'])){
    header('Location:../login.php');
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Client Admin | Bhopal Incinerators</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include_once('./layouts/meta.php'); ?>
</head>
<body>

<?php 
include('../db_config.php'); // Database configuration file
//include_once('pdf_gernator/fpdf.php');


$sess_id=$_SESSION['uname'];
$sql = "SELECT * FROM bil_client_mw_info WHERE   username_bil= ".$sess_id." ";
$result=mysqli_query($con,$sql);
    //Check whether the query was successful or not
    if($result) {
        if(mysqli_num_rows($result) == 1) {
           $member = mysqli_fetch_assoc($result);
             }else {
        die("Query failed");
    }
}

//code start for gernate pdf
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "bil_techworm_faat");  
      $sql = "SELECT * FROM bil_client_mw_info ORDER BY sno ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["organization_name"].'</td>  
                          <td>'.$row["authorized_person"].'</td>  
                          <td>'.$row["category"].'</td>  
                          <td>'.$row["ap_contact"].'</td>  
                          <td>'.$row["ap_designation"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Certificate Gerenate");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  

   

      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                               <th width="20%">ORGANIZATION</th>  
                                <th width="30%">AUTHRIZED PERSON</th>  
                                <th width="30%">CATEGORY</th>  
                                <th width="30%">CONTACT</th>  
                                <th width="30%">DESIGNATION</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      ob_end_clean();
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?> 

<?php require_once('./layouts/top_header.php');?>
    <!-- End Header Top Area -->
    
   <!--  <div class = "container">
        <div class = "row"> 
            <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br><img src="images/logo.png" style="align-content:center; width: 400px; height:100px;" class="center-block"> 
            <hr style="color:black;">
            <h3 style="text-align:center; font-family: Times New Roman;">Welcome Back, Mr Ashutosh Dubey</h3>
            <h3 style="text-align:center; font-family: Times New Roman;">Hamidia Hospital</h3>
            <h5 style="text-align:center; font-family: Times New Roman;">Airport Rd, Royal Market, Near, Kohefiza, Bhopal, Madhya Pradesh 462001</h5>
            <hr style="color:black;">
            <h5 style="text-align:center; font-family: Times New Roman;">BIL ID: 01259955578 &nbsp &nbsp &nbsp PCB ID: 01259955578 </h5>
            <hr style="color:black;">
            </div>
        </div>
    </div> -->
    
    
    
   <?php include_once('./layouts/menu.php'); ?>
     
   <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
           
   <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
  <!--   <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Generate Certificate</h2>
                                        <p>Generate your Certificate.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Breadcomb area End-->
    <!-- Alert area start-->
          <!--     <div class="container">
               <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="alert-inner">
                       
                        <div class="alert-list">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! You successfully read <a href="" class="alert-link">this important alert message.</a>
                            </div>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Heads up! This <a href="" class="alert-link">alert needs your attention</a>,
                                but it's not super important.
                            </div>
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Warning! Better check yourself, you're <a href="" class="alert-link">not looking too good.</a>
                            </div>
                            <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh snap! <a href="" class="alert-link">Change a few things up</a>                                and try submitting again.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>   -->
            <br>
    <!-- Alert area end-->

    
    <!-- Dialog area Start-->
    <div class="dialog-area">
        <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-10 col-sm-10 col-xs-10">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd" style="text-align:center;">
                            <h2>Generate Your Certificate</h2>
                            <h5 style="color:red;">Today's Date: 10/05/2019</h5>
                         
                    
                   
                <div class="table-responsive">  
                     <table class="table table-bordered" border="1px;">  
                          <tr>  
                              <th width="10%">ORGANIZATION</th>  
                                <th width="30%">AUTHRIZED PERSON</th>  
                                <th width="30%">CATEGORY</th>  
                                <th width="30%">CONTACT</th>  
                                <th width="30%">DESIGNATION</th>
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                         <!--  <input type="submit" name="create_pdf" class="btn btn-info" value="Download Certificate

                          " /> -->
                          <button  name="create_pdf" class="btn btn-info" >Generate Now</button>  
                     </form>  
                </div>  
                          <!-- <div class="dialog-pro dialog" >
                            <button  name="create_pdf" class="btn btn-info" >Generate Now</button>
                        </div> -->
                    </div>
                </div>  
                
            </div>
            
            </div>
        </div>
    <!-- Dialog area End-->
    <!-- Start Footer area-->
    <?php require_once('./layouts/footer.php');?>
</body>

</html>