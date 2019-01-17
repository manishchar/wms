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
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Daily Waste Collection Report</h2>
										<p>Check and Download Daily waste collection reports</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
	           <div class="container">
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
			</div>
			<br>
	<!-- Alert area end-->
 <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>HCF Waste Collection Data</h2>
                           </div>
                        <div class="table-responsive">
                            <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-wuhm{font-family:Verdana, Geneva, sans-serif !important;;background-color:#ffffff;color:#036400;border-color:#9b9b9b;text-align:center}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-ecul{font-family:Verdana, Geneva, sans-serif !important;;background-color:#ffffff;color:#036400;border-color:#9b9b9b;text-align:center;vertical-align:top}
.tg .tg-f8tx{color:#000000;text-align:center;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 1070px">
<colgroup>

<col style="width: 102px">
<col style="width: 103px">
<col style="width: 102px">
<col style="width: 83px">
<col style="width: 78px">
<col style="width: 87px">
<col style="width: 50px">
<col style="width: 85px">
<col style="width: 56px">
<col style="width: 86px">
<col style="width: 57px">
<col style="width: 94px">
<col style="width: 53px">
</colgroup>
  <tr>
    
    <th class="tg-wuhm" rowspan="3">Name of HCF</th>
    <th class="tg-wuhm" rowspan="3">HCF Address</th>
    <th class="tg-wuhm" rowspan="3">Type of HCF</th>
    <th class="tg-ecul" colspan="10">Details of BioMedical Generated by the HCF<br>(Qty. of BMW in Kg)</th>
  </tr>
  <tr>
    <td class="tg-wuhm" rowspan="2">Date</td>
    <td class="tg-wuhm" rowspan="2">Time</td>
    <td class="tg-ecul" colspan="2">Yellow</td>
    <td class="tg-ecul" colspan="2">Red</td>
    <td class="tg-ecul" colspan="2">Blue</td>
    <td class="tg-ecul" colspan="2">White</td>
  </tr>
  <tr>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
  </tr>
  <tr">
   
    <td class="tg-f8tx">Hamidia</td>
    <td class="tg-f8tx">Bhopal</td>
    <td class="tg-f8tx">Hospital</td>
    <td class="tg-f8tx">10/08/2019</td>
    <td class="tg-f8tx">07:00 AM</td>
    <td class="tg-f8tx">5</td>
    <td class="tg-f8tx">24</td>
    <td class="tg-f8tx">5</td>
    <td class="tg-f8tx">25</td>
    <td class="tg-f8tx">26</td>
    <td class="tg-f8tx">63</td>
    <td class="tg-f8tx">24</td>
    <td class="tg-baqh">6</td>
  </tr>
</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
 
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>CBWTF Waste Collection Data</h2>
                           </div>
                        <div class="table-responsive">
                            <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-wuhm{font-family:Verdana, Geneva, sans-serif !important;;background-color:#ffffff;color:#036400;border-color:#9b9b9b;text-align:center}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-ecul{font-family:Verdana, Geneva, sans-serif !important;;background-color:#ffffff;color:#036400;border-color:#9b9b9b;text-align:center;vertical-align:top}
.tg .tg-f8tx{color:#000000;text-align:center;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 1070px">
<colgroup>

<col style="width: 102px">
<col style="width: 103px">
<col style="width: 102px">
<col style="width: 83px">
<col style="width: 78px">
<col style="width: 87px">
<col style="width: 50px">
<col style="width: 85px">
<col style="width: 56px">
<col style="width: 86px">
<col style="width: 57px">
<col style="width: 94px">
<col style="width: 53px">
</colgroup>
  <tr>
    
    <th class="tg-wuhm" rowspan="3">Name of HCF</th>
    <th class="tg-wuhm" rowspan="3">HCF Address</th>
    <th class="tg-wuhm" rowspan="3">Type of HCF</th>
    <th class="tg-ecul" colspan="10">Details of BioMedical Generated by the CBWTF<br>(Qty. of BMW in Kg)</th>
  </tr>
  <tr>
    <td class="tg-wuhm" rowspan="2">Date</td>
    <td class="tg-wuhm" rowspan="2">Time</td>
    <td class="tg-ecul" colspan="2">Yellow</td>
    <td class="tg-ecul" colspan="2">Red</td>
    <td class="tg-ecul" colspan="2">Blue</td>
    <td class="tg-ecul" colspan="2">White</td>
  </tr>
  <tr>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
    <td class="tg-ecul">No. of Bags</td>
    <td class="tg-ecul">Qty.</td>
  </tr>
  <tr">
   
    <td class="tg-f8tx">Hamidia</td>
    <td class="tg-f8tx">Bhopal</td>
    <td class="tg-f8tx">Hospital</td>
    <td class="tg-f8tx">10/08/2019</td>
    <td class="tg-f8tx">07:00 AM</td>
    <td class="tg-f8tx">5</td>
    <td class="tg-f8tx">24</td>
    <td class="tg-f8tx">5</td>
    <td class="tg-f8tx">25</td>
    <td class="tg-f8tx">26</td>
    <td class="tg-f8tx">63</td>
    <td class="tg-f8tx">24</td>
    <td class="tg-baqh">6</td>
  </tr>
</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
  <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Difference in waste collected and received (+/- in Kg)</h2>
							<p>Red Bag:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 44 Kg</p> <br>
							<p>Yellow Bag: &nbsp &nbsp &nbsp &nbsp &nbsp 44 Kg</p> <br>
							<p>Blue Bag: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 44 Kg</p> <br>
							<p>White Bag: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 44 Kg</p> <br>
                           </div>
						</div>   
                     </div>
					 </div>
					 </div>
					 </div>




 <!-- Start Footer area-->
 <!-- Start Footer area-->
<?php require_once('./layouts/footer.php');?>
</body>

</html>