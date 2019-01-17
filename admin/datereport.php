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
?>     

<?php require_once('./layouts/top_header.php');?>
    <!-- End Header Top Area -->
    
  <!--   <div class = "container">
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
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Date Report</h2>
                                        <p>Panel to details your Date Report.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Alert area start-->
         <!--      <div class="container">
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
            </div> -->
            <br>
    <!-- Alert area end-->


    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Waste Collection Data</h2>
                           </div>
                           
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>HCF Numerical Number</th>
                                        <th>Date</th>
                                        <th>Time</th>   
                                        <th>Bag Color</th>                                       
                                        <th>Bag Weight</th>
                                        <th>QR Generate Date</th>                                       
        
 
                                    </tr>
                                </thead>
                                <tbody>
                              <?php
                               $output = "";
                             $connect = mysqli_connect("localhost", "root", "", "bil_techworm_faat");  
                             $sql = "SELECT * FROM bil_client_mw_report_hcf";  
                             $result = mysqli_query($connect, $sql);  
                             while($row = mysqli_fetch_array($result))  
                             {       
                              ?> 
                              <tr>  
                              <td><?php echo $row["s.no"]; ?></td>  
                              <td><?php echo $row["hcf_number_number"];?></td>  
                              <td><?php echo $row["bag_color"]; ?></td>  
                              <td><?php echo $row["entry_time"]; ?></td>  
                              <td><?php echo $row["bag_weight"]; ?></td> 
                              <td><?php echo $row["qr_generate_date"]; ?></td>  
                                
                         </tr>  
                     <?php
                          }  
                     ?> 
                                    
                                </tbody>
                               <!--  <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>HCF Numerical Number</th>
                                        <th>Date</th>
                                        <th>Time</th>   
                                        <th>Bag Color</th>                                       
                                        <th>Bag Weight</th>
                                        <th>QR Generate Date</th>                                       
                                   </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->


    <!-- Dialog area End-->
    <!-- Start Footer area-->
    <?php require_once('./layouts/footer.php');?>
</body>

</html>