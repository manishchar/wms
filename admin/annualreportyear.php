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
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Annual Waste Collection Report (2018)</h2>
										<p>Check your Annual Waste Collection Records.</p>
									</div>
								</div>
							</div>
							<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
                            <h2>2018 Year Waste Collection Data</h2>
                           </div>
						   
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th>Month</th>
										<th>Yellow</th>	
										<th>Red</th>                                       
                                        <th>Blue</th>
                                        <th>White</th>                                       
                                        <th>Total</th>
										
 
 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>January</td>
                                        <td>22</td>
                                        <td>52</td>
                                        <td>4</td>
                                        <td>121</td>
										<td>121</td>
										
                                    </tr>
									                                     
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Average. per month</th>
                                        <th>174</th>
										<th>169</th>	
										<th>23</th>                                       
                                        <th>55</th>
                                        <th>64</th>                                       
                                      
                                    </tr>
                                </tfoot>
								<tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>14</th>
										<th>13</th>	
										<th>1</th>                                       
                                        <th>10</th>
                                        <th>40</th>                                       
                                      
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
						<br> <br>
						
						<div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Incineration Waste</th>
                                        <th>174.25</th>
										
                                    </tr>
									<tr>
                                        <th>Autoclave Waste</th>
                                        <th>174.25</th>
										
                                    </tr>
                                </thead>
                                
                                
                            </table>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
   <!-- Start Footer area-->
<?php require_once('./layouts/footer.php');?>
</body>

</html>