<?php
	session_start(); 
  ob_start();
  date_default_timezone_set("Europe/London");
?>	
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> necktapers.com </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Bootstrap here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Fontawesome here -->
    <script src="https://kit.fontawesome.com/80216887ca.js" crossorigin="anonymous"></script>
		<!-- CSS here -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/slicknav.css">
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/gijgo.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">			
		<link rel="stylesheet" href="assets/css/animated-headline.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="assets/css/themify-icons.css">
		<link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/nice-select.css">
		

		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css-1/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css-1/animate.css">
    
    <link rel="stylesheet" href="assets/css-1/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css-1/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css-1/magnific-popup.css">

    <link rel="stylesheet" href="assets/css-1/aos.css">

    <link rel="stylesheet" href="assets/css-1/ionicons.min.css">

    <link rel="stylesheet" href="assets/css-1/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css-1/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css-1/flaticon.css">
    <link rel="stylesheet" href="assets/css-1/icomoon.css">
    <link rel="stylesheet" href="assets/css-1/style.css">
		<link rel="stylesheet" href="assets/css/style.css">

	
		
		
		
		
		
		<!-- Inline CSS here -->

		<!-- Inline CSS for header area here -->
    <style>#make-appointment-header-btn-id{background-color:#ffc107;color:#1D2434;}#make-appointment-header-btn-id:hover{color: white !important;}#make-appointment-header-btn-id::before{ background-color: #1D2434 !important;}</style>
		<style>@media only screen and (max-width:767px){.slider-area2{height:300px !important;}}</style>
		<!-- Inline CSS for Main Appointment Button here -->
		<style>.main-appointment-button-container{display:flex;justify-content: space-between;}@media only screen and (max-width:991px){.main-appointment-button-container{flex-direction: column;align-items: center;justify-content: center;}}</style>
		<style>.main-appointment-button{color:#ffffff;height: 60px;width: 220px;padding: 0px 30px 0px 30px;margin:0px;margin-top: 20px;border: none;border-radius:4px;background-color: #1D2434;box-shadow: 3px 3px 3px #00000030;}</style>
		<style>.change-appointment-button{color:#ffffff;height: 60px;width: 220px;padding: 0px 30px 0px 30px;margin:0px;margin-top: 20px;border: none;border-radius:4px;background-color: #1D2434;box-shadow: 3px 3px 3px #00000030;}</style>
		<style>.delete-appointment-button{color:#ffffff;height: 60px;width: 220px;padding: 0px 30px 0px 30px;margin:0px;margin-top: 20px;border: none;border-radius:4px;background-color: #1D2434;box-shadow: 3px 3px 3px #00000030;}</style>

		<!-- Inline CSS for Footer Area here -->
		<style>.footer-section-title{margin-bottom: 25px !important;}.footer-logo{margin-top: 0px;margin-bottom: 50px;}</style>
		<style>@media screen and (min-width: 576px) {.footer-number{display: flex; justify-content: start;}.footer-e-mail-container{display: flex; justify-content: start;}}.phone-number{font-size: 14px !important; margin-right: 25px; margin-bottom: 15px;}.footer-phone-text{color:#ffffff !important; margin-bottom: 5px; line-height:20px;}</style>
		<style>.footer-e-mail-text-1{font-size: 16px; color: #ffffff !important; margin-right: 10px; margin-bottom: 0px; line-height: 20px;}.footer-e-mail-text-2{font-size: 14px; color: #ffc107 !important; margin-bottom: 10px; line-height: 20px;}.single-footer-caption .mb-50{line-height: 0px !important;} .col-xl-2.col-lg-2.col-md-3.col-sm-5{margin-bottom: 20px !important;}</style>
		<style>.footer-location-map{position:relative;box-shadow: 8px 8px 10px #00000030;}.footer-location-map{width:100%;height: 100%; border-radius: 6px; border:none;}.footer-location-map-sub-container-1{cursor: pointer; position: absolute; width: 15px; height: 15px; border-radius: 7.5px; background-color: transparent; top:10%; left:12%;}.footer-location-map-sub-container-2{cursor: pointer; position: absolute; width: 50px; height: 20px; background-color: transparent;top:5%; left:18%;}.footer-location-map-sub-container-3{cursor: pointer; position: absolute; width: 22px; height: 10px; background-color: transparent;top:20%; left:18%;}.footer-location-map-sub-container-4{cursor: pointer;position: absolute; width: 15px; height: 15px; border-radius: 7.5px; background-color: transparent; bottom:3%; left:22.75%;}.footer-location-map-sub-container-5{cursor: pointer; position: absolute; width: 50px; height: 17px; background-color: transparent;bottom:1.75%; left:29%;}.footer-location-map-sub-container-6{cursor: pointer; position: absolute; width: 11px; height: 8px; background-color: transparent;bottom:1.75%; left:47.75%;}</style>
		<style>.footer-location-adress{display: block;font-size:14px; color:#ffffff !important; margin-top: 10px;}.footer-location-adress:hover{color: #ffc107 !important;}</style>
		<style>.footer-copy-right{display: flex;flex-direction: column;} .footer-copy-right p{margin-bottom: 0px !important;}</style>
		<style>#fa-tiktok-anchor{padding-left: 0px !important;}.fa-facebook-f::before{content:"\f39e" !important;}</style>
</head>
<body>

	<!-- ? Preloader Start -->
	<div id="preloader-active">
			<div class="preloader d-flex align-items-center justify-content-center">
					<div class="preloader-inner position-relative">
							<div class="preloader-circle"></div>
							<div class="preloader-img pere-text">
									<img src="assets/img/logo/loder.png" alt="">
							</div>
					</div>
			</div>
	</div>
	<!-- Preloader End -->
	<header>
		<!--? Header Start -->
		<div class="header-area header-transparent pt-20">
				<div class="main-header header-sticky">
						<div class="container-fluid">
								<div class="row align-items-center">
										<!-- Logo -->
										<div class="col-xl-2 col-lg-2 col-md-1">
												<div class="logo">
														<a href="index.html"><img id="header-logo-image-id" class="logo-image"  src="assets/img/logo/logo.png" alt=""></a>
												</div>	
										</div>
										<div class="col-xl-10 col-lg-10 col-md-10">
												<div class="menu-main d-flex align-items-center justify-content-end">
														<!-- Main-menu -->
														<div class="main-menu f-right d-none d-lg-block">
																<nav>
																		<ul id="navigation">
																				<li><a href="index.html">Home</a></li>
																				<li><a href="about.html">About</a></li>
																				<li><a href="services.html">Services</a></li>
																				<li><a href="gallery.html">Gallery</a></li>
																				<li><a href="contact.html">Contact</a></li>
																		</ul>
																</nav>
														</div>
														<div class="header-right-btn f-right d-none d-lg-block ml-30">
																<a href="appointment.html" id="make-appointment-header-btn-id" class="btn header-btn">Make An Appointment</a>
														</div>
												</div>
										</div>   
										<!-- Mobile Menu -->
										<div class="col-12">
												<div class="mobile_menu d-block d-lg-none"></div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- Header End -->
	</header>
	<main>
		<!--? Hero Start -->
		<div class="slider-area2">
				<div class="slider-height2 d-flex align-items-center">
						<div class="container">
								<div class="row">
										<div class="col-xl-12">
												<div class="hero-cap hero-cap2 pt-70 text-center" style="position: relative;">
														<h2>Admin Account</h2>
                            <?php
                              echo "<p class='welcome-message' style='color:#ffc107;margin-top:20px;'>Hello {$_SESSION["username"]}, you're logged in.</p><br>";
                            ?>
                            <div style="display: none;"><?php include("database.php");?></div>
														<div class="appointment-info-container">
															<p style="color:#e5e5e5;margin:0px;font-size: 14px !important;">Today <?php echo date("d/m/Y"); ?> you have:</p>
															<?php
																$session_username = $_SESSION["username"];
                                $current_date = date("Y-m-d");
																$sql_retrieve = "SELECT * FROM necktapers_users WHERE username  = '$session_username' ";
																$result = mysqli_query($connection, $sql_retrieve);
                                $sql_retrieve_NCG = "SELECT * FROM necktapers_users WHERE branch_name  = 'New Cross Gate' and appointment_date = '$current_date'  ";
                                $result_NCG = mysqli_query($connection, $sql_retrieve_NCG);
                                $num_of_appointments_NCG = mysqli_num_rows($result_NCG);
                                $sql_retrieve_Brockley = "SELECT * FROM necktapers_users WHERE branch_name  = 'Brockley' and appointment_date = '$current_date' ";
                                $result_Brockley = mysqli_query($connection, $sql_retrieve_Brockley);
                                $num_of_appointments_Brockley = mysqli_num_rows($result_Brockley);
                                echo "<p style='cursor:pointer;margin:0px;color:#e5e5e5;font-size:14px;'>{$num_of_appointments_NCG} appointments at <span style='color:#ffc107;'>New Cross Gate</span>";
                                echo "<p style='cursor:pointer;margin:0px;color:#e5e5e5;font-size:14px;'>{$num_of_appointments_Brockley} appointments at <span style='color:#ffc107;'>Brockley</span>";
																// to find how many rows we have in our database table
                                /*
																if(mysqli_num_rows($result) > 0){
																	$row = mysqli_fetch_assoc($result);
																	//echo $row["id"] ."<br>";
																	//echo $row["username"] ."<br>";
																	//echo $row["reg_date"] ."<br>";
																	//echo $row["customer_name"] ."<br>"; 
																	if($row["appointment_date"] == NULL){
																		echo "<p style='color:#ffc107;'>You don't have an appointment.";
																	}
																	else{
																		$retrieved_appointment_date_components = explode("-",$row["appointment_date"],3);
																		$retrieved_appointment_date = $retrieved_appointment_date_components[2]."/".$retrieved_appointment_date_components[1]."/".$retrieved_appointment_date_components[0];
																		$retrieved_appointment_time = substr("{$row["appointment_time"]}",0,-3);
																		echo"<p style='margin:0px;font-size: 14px !important;color:#e5e5e5;'>Branch: <span style='color:#ffc107;'>{$row["branch_name"]}";
																		echo"<p style='margin:0px;font-size: 14px !important;color:white;'>Date: <span style='color:#ffc107;'>{$retrieved_appointment_date}</span> Time: <span style='color:#ffc107;'>$retrieved_appointment_time";
																	}
																}
                                */  
															?>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- Hero End -->
    <section class="ftco-section ftco-booking bg-light">
    	<div class="container ftco-relative">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span style="font-size: 16px;" class="subheading">Admin Account</span>
            <h2 class="mb-4">Appointments</h2>
            <p>Find here your scheduled appointments in New Cross Gate and Brockley.</p>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">
    				<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="appointment-form" method="post">
	            <div class="row">
								<div class="col-sm-6">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"></div>
                      <select name="branch_name" id="" class="form-control">
                      	<option value="">Select a Branch</option>
                        <option value="New Cross Gate">New Cross Gate</option>
                        <option value="Brockley">Brockley</option>
                      </select>
                    </div>
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input name="appointment_date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" type="text" class="form-control appointment_date" placeholder="Date" autocomplete="off">
	                </div>    
	              </div>
                <div class="col-sm-6">
                  <div class="appointments-filter-buttons-container">
                    <input style="color: #e5e5e5 !important;" type="submit" name="find-appointments" value="Find Appointments" class="find-appointments-button" id="find-appointments-button-id" > 
                    <input style="color: #e5e5e5 !important;" type="submit" name="show-all-appointments" value="Show All Appointments" class="show-all-appointments-button" id="show-all-appointments-button-id" >
                  </div>
	              </div>
		          </div>
		          <div class="appointment-schedule" id="appointment-schedule-id">
                <?php
                  if($_SERVER["REQUEST_METHOD"] == "POST"){
                    echo '<script type= "text/javascript">appointmentSchedule=document.getElementById("appointment-schedule-id");appointmentSchedule.scrollIntoView();</script>';
                    if(isset($_POST["find-appointments"])){
                      $branch_name = $_POST["branch_name"];
                      $appointment_date = $_POST["appointment_date"];
                      if(empty($branch_name) and empty($appointment_date)){
                        echo "<p style='color:red;'> Please enter a branch name or an appointment date or both.";
                      }
                      else{
                        if(isset($branch_name) and empty($appointment_date)){
                          $current_date = date("Y-m-d");
                          $sql_retrieve = "SELECT * FROM necktapers_users WHERE branch_name = '$branch_name' and appointment_date >= '$current_date' ";
                          $result = mysqli_query($connection, $sql_retrieve);
                          if(mysqli_num_rows($result) > 0){
                            echo "<p style='color:#1d2434;'>Your scheduled appointments at {$branch_name}:";
                            $number_of_results = mysqli_num_rows($result);
                            echo "<div class='appointments-table'><div class='column-titles-row'><p class='customer-name-column'>Customer Name</p><p class='branch-name-column'>Appointment Branch</p><p class='appointment-date-column'>Appointment Date</p><p class='appointment-time-column'>Appointment Time</p><p class='customer-phone-number-column'>Customer Number</p><p class='customer-email-column'>Customer Email</p><p class='service-column'>Service 1</p><p class='service-column'>Service 2</p><p class='service-column'>Service 3</p><p class='service-column'>Service 4</p><p class='customer-message-column'>Customer Message</p></div>";
                            for ($results_counter = 0;$results_counter<$number_of_results;$results_counter++){
                              $row = mysqli_fetch_assoc($result);
                              $retrieved_appointment_date_components = explode("-",$row["appointment_date"],3);
															$appointment_date_dmY_format = $retrieved_appointment_date_components[2]."-".$retrieved_appointment_date_components[1]."-".$retrieved_appointment_date_components[0];
                              if($row['service_2'] == Null){
                                $row['service_2'] = "None";
                              }
                              if($row['service_3'] == Null){
                                $row['service_3'] = "None";
                              }
                              if($row['service_4'] == Null){
                                $row['service_4'] = "None";
                              }
                              if($row['customer_message'] == Null){
                                $row['customer_message'] = "None";
                              }
                              echo "<div class='appointments-data-rows'><p class='customer-name-column'>{$row["customer_name"]}</p><p class='branch-name-column'>{$row["branch_name"]}</p><p class='appointment-date-column'>{$appointment_date_dmY_format}</p><p class='appointment-time-column'>{$row["appointment_time"]}</p><p class='customer-phone-number-column'>{$row["customer_phone_number"]}</p><p class='customer-email-column'>{$row["customer_email"]}</p><p class='service-column'>{$row["service_1"]}</p><p class='service-column'>{$row["service_2"]}</p><p class='service-column'>{$row["service_3"]}</p><p class='service-column'>{$row["service_4"]}</p><p class='customer-message-column'>{$row["customer_message"]}</p></div>";
                            }
                            echo "</div>";
                            echo "<p style='color:#1d2434;font-size:16px;'>This table is scrollable. Scroll to view all columns.";
                          }
                          else{
                            echo "<p style='color:#1d2434;font-size:18px;'>You don't have any appointments at {$branch_name}.";
                          }
                        }
                        else{
                          if(empty($branch_name) and isset($appointment_date)){
                            $appointment_date_components = explode("/",$appointment_date,3);
														$appointment_date_Ymd_format = $appointment_date_components[2]."-".$appointment_date_components[1]."-".$appointment_date_components[0];
                            $appointment_date_dmY_format = $appointment_date_components[0]."-".$appointment_date_components[1]."-".$appointment_date_components[2];
                            $sql_retrieve = "SELECT * FROM necktapers_users WHERE appointment_date = '$appointment_date_Ymd_format' ";
                            $result = mysqli_query($connection, $sql_retrieve);
                            if(mysqli_num_rows($result) > 0){
                              echo "<p style='color:#1d2434;'>Your scheduled appointments on {$appointment_date_dmY_format}:";
                              $number_of_results = mysqli_num_rows($result);
                              echo "<div class='appointments-table'><div class='column-titles-row'><p class='customer-name-column'>Customer Name</p><p class='branch-name-column'>Appointment Branch</p><p class='appointment-time-column'>Appointment Time</p><p class='customer-phone-number-column'>Customer Number</p><p class='customer-email-column'>Customer Email</p><p class='service-column'>Service 1</p><p class='service-column'>Service 2</p><p class='service-column'>Service 3</p><p class='service-column'>Service 4</p><p class='customer-message-column'>Customer Message</p></div>";
                              for ($results_counter = 0;$results_counter<$number_of_results;$results_counter++){
                                $row = mysqli_fetch_assoc($result);
                                if($row['service_2'] == Null){
                                  $row['service_2'] = "None";
                                }
                                if($row['service_3'] == Null){
                                  $row['service_3'] = "None";
                                }
                                if($row['service_4'] == Null){
                                  $row['service_4'] = "None";
                                }
                                if($row['customer_message'] == Null){
                                  $row['customer_message'] = "None";
                                }
                                echo "<div class='appointments-data-rows'><p class='customer-name-column'>{$row["customer_name"]}</p><p class='branch-name-column'>{$row["branch_name"]}</p><p class='appointment-time-column'>{$row["appointment_time"]}</p><p class='customer-phone-number-column'>{$row["customer_phone_number"]}</p><p class='customer-email-column'>{$row["customer_email"]}</p><p class='service-column'>{$row["service_1"]}</p><p class='service-column'>{$row["service_2"]}</p><p class='service-column'>{$row["service_3"]}</p><p class='service-column'>{$row["service_4"]}</p><p class='customer-message-column'>{$row["customer_message"]}</p></div>";
                              }
                              echo "</div>";
                              echo "<p style='color:#1d2434;font-size:16px;'>This table is scrollable. Scroll to view all columns.";
                            }
                            else{
                              echo "<p style='color:#1d2434;font-size:18px;'>You don't have any appointments on the selected date.";
                            }
                            
                          }
                          else{
                            $appointment_date_components = explode("/",$appointment_date,3);
														$appointment_date_Ymd_format = $appointment_date_components[2]."-".$appointment_date_components[1]."-".$appointment_date_components[0];
                            $appointment_date_dmY_format = $appointment_date_components[0]."-".$appointment_date_components[1]."-".$appointment_date_components[2];
                            $sql_retrieve = "SELECT * FROM necktapers_users WHERE branch_name = '$branch_name' and appointment_date = '$appointment_date_Ymd_format' ";
                            $result = mysqli_query($connection, $sql_retrieve);
                            // to find how many rows we have in our database table
                            if(mysqli_num_rows($result) > 0){
                              echo "<p style='color:#1d2434;'>Your scheduled appointments at {$branch_name} on {$appointment_date_dmY_format}:";
                              $number_of_results = mysqli_num_rows($result);
                              echo "<div class='appointments-table'><div class='column-titles-row'><p class='customer-name-column'>Customer Name</p><p class='branch-name-column'>Appointment Branch</p><p class='appointment-time-column'>Appointment Time</p><p class='customer-phone-number-column'>Customer Number</p><p class='customer-email-column'>Customer Email</p><p class='service-column'>Service 1</p><p class='service-column'>Service 2</p><p class='service-column'>Service 3</p><p class='service-column'>Service 4</p><p class='customer-message-column'>Customer Message</p></div>";
                              for ($results_counter = 0;$results_counter<$number_of_results;$results_counter++){
                                $row = mysqli_fetch_assoc($result);
                                if($row['service_2'] == Null){
                                  $row['service_2'] = "None";
                                }
                                if($row['service_3'] == Null){
                                  $row['service_3'] = "None";
                                }
                                if($row['service_4'] == Null){
                                  $row['service_4'] = "None";
                                }
                                if($row['customer_message'] == Null){
                                  $row['customer_message'] = "None";
                                }
                                echo "<div class='appointments-data-rows'><p class='customer-name-column'>{$row["customer_name"]}</p><p class='branch-name-column'>{$row["branch_name"]}</p><p class='appointment-time-column'>{$row["appointment_time"]}</p><p class='customer-phone-number-column'>{$row["customer_phone_number"]}</p><p class='customer-email-column'>{$row["customer_email"]}</p><p class='service-column'>{$row["service_1"]}</p><p class='service-column'>{$row["service_2"]}</p><p class='service-column'>{$row["service_3"]}</p><p class='service-column'>{$row["service_4"]}</p><p class='customer-message-column'>{$row["customer_message"]}</p></div>";
                              }
                              echo "</div>";
                              echo "<p style='color:#1d2434;font-size:16px;'>This table is scrollable. Scroll to view all columns.";
                            }
                            else{
                              echo "<p style='color:#1d2434;font-size:18px;'>You don't have any appointments at {$branch_name} on {$appointment_date_dmY_format}.";
                            }
                          }
                        }
                      }
                    }
                    else{
                      if(isset($_POST["show-all-appointments"])){
                        $current_date = date("Y-m-d");
                        $sql_retrieve = "SELECT * FROM necktapers_users WHERE appointment_date >= '$current_date' ";
                        $result = mysqli_query($connection, $sql_retrieve);
                        if(mysqli_num_rows($result) > 0){
                          $current_date_dmY_format = date("d-m-Y");
                          echo "<p style='color:#1d2434;'>All upcoming appointments at New Cross Gate or Brockley:";
                          $number_of_results = mysqli_num_rows($result);
                          echo "<div class='appointments-table'><div class='column-titles-row'><p class='customer-name-column'>Customer Name</p><p class='branch-name-column'>Appointment Branch</p><p class='appointment-date-column'>Appointment Date</p><p class='appointment-time-column'>Appointment Time</p><p class='customer-phone-number-column'>Customer Number</p><p class='customer-email-column'>Customer Email</p><p class='service-column'>Service 1</p><p class='service-column'>Service 2</p><p class='service-column'>Service 3</p><p class='service-column'>Service 4</p><p class='customer-message-column'>Customer Message</p></div>";
                          for ($results_counter = 0;$results_counter<$number_of_results;$results_counter++){
                            $row = mysqli_fetch_assoc($result);
                            $retrieved_appointment_date_components = explode("-",$row["appointment_date"],3);
															$appointment_date_dmY_format = $retrieved_appointment_date_components[2]."-".$retrieved_appointment_date_components[1]."-".$retrieved_appointment_date_components[0];
                            if($row['service_2'] == Null){
                              $row['service_2'] = "None";
                            }
                            if($row['service_3'] == Null){
                              $row['service_3'] = "None";
                            }
                            if($row['service_4'] == Null){
                              $row['service_4'] = "None";
                            }
                            if($row['customer_message'] == Null){
                              $row['customer_message'] = "None";
                            }
                            echo "<div class='appointments-data-rows'><p class='customer-name-column'>{$row["customer_name"]}</p><p class='branch-name-column'>{$row["branch_name"]}</p><p class='appointment-date-column'>{$appointment_date_dmY_format}</p><p class='appointment-time-column'>{$row["appointment_time"]}</p><p class='customer-phone-number-column'>{$row["customer_phone_number"]}</p><p class='customer-email-column'>{$row["customer_email"]}</p><p class='service-column'>{$row["service_1"]}</p><p class='service-column'>{$row["service_2"]}</p><p class='service-column'>{$row["service_3"]}</p><p class='service-column'>{$row["service_4"]}</p><p class='customer-message-column'>{$row["customer_message"]}</p></div>";
                          }
                          echo "</div>";
                          echo "<p style='color:#1d2434;font-size:16px;'>This table is scrollable. Scroll to view all columns.";
                        }
                        else{
                          echo "<p style='color:#1d2434;font-size:18px;'>You don't have any appointments today.";
                        }
                      }
                    }
                  }
                  else{
                    $current_date = date("Y-m-d");
                    $sql_retrieve = "SELECT * FROM necktapers_users WHERE appointment_date = '$current_date' ";
                    $result = mysqli_query($connection, $sql_retrieve);
                    // to find how many rows we have in our database table
                    if(mysqli_num_rows($result) > 0){
                      $current_date_dmY_format = date("d-m-Y");
                      echo "<p style='color:#1d2434;'>Your scheduled appointments on {$current_date_dmY_format}:";
                      $number_of_results = mysqli_num_rows($result);
                      echo "<div class='appointments-table'><div class='column-titles-row'><p class='customer-name-column'>Customer Name</p><p class='branch-name-column'>Appointment Branch</p><p class='appointment-time-column'>Appointment Time</p><p class='customer-phone-number-column'>Customer Number</p><p class='customer-email-column'>Customer Email</p><p class='service-column'>Service 1</p><p class='service-column'>Service 2</p><p class='service-column'>Service 3</p><p class='service-column'>Service 4</p><p class='customer-message-column'>Customer Message</p></div>";
                      for ($results_counter = 0;$results_counter<$number_of_results;$results_counter++){
                        $row = mysqli_fetch_assoc($result);
                        if($row['service_2'] == Null){
                          $row['service_2'] = "None";
                        }
                        if($row['service_3'] == Null){
                          $row['service_3'] = "None";
                        }
                        if($row['service_4'] == Null){
                          $row['service_4'] = "None";
                        }
                        if($row['customer_message'] == Null){
                          $row['customer_message'] = "None";
                        }
                        echo "<div class='appointments-data-rows'><p class='customer-name-column'>{$row["customer_name"]}</p><p class='branch-name-column'>{$row["branch_name"]}</p><p class='appointment-time-column'>{$row["appointment_time"]}</p><p class='customer-phone-number-column'>{$row["customer_phone_number"]}</p><p class='customer-email-column'>{$row["customer_email"]}</p><p class='service-column'>{$row["service_1"]}</p><p class='service-column'>{$row["service_2"]}</p><p class='service-column'>{$row["service_3"]}</p><p class='service-column'>{$row["service_4"]}</p><p class='customer-message-column'>{$row["customer_message"]}</p></div>";
                      }
                      echo "</div>";
                      echo "<p style='color:#1d2434;font-size:16px;'>This table is scrollable. Scroll to view all columns.";
                    }
                    else{
                      echo "<p style='color:#1d2434;font-size:18px;'>You don't have any appointments today.";
                    }
                    /*
                    if($row["appointment_date"] == NULL){
                      echo "<p style='color:#ffc107;'>You don't have an appointment.";
                    }
                    else{
                      $retrieved_appointment_date_components = explode("-",$row["appointment_date"],3);
                      $retrieved_appointment_date = $retrieved_appointment_date_components[2]."/".$retrieved_appointment_date_components[1]."/".$retrieved_appointment_date_components[0];
                      $retrieved_appointment_time = substr("{$row["appointment_time"]}",0,-3);
                      echo"<p style='margin:0px;font-size: 14px !important;color:#e5e5e5;'>Branch: <span style='color:#ffc107;'>{$row["branch_name"]}";
                      echo"<p style='margin:0px;font-size: 14px !important;color:white;'>Date: <span style='color:#ffc107;'>{$retrieved_appointment_date}</span> Time: <span style='color:#ffc107;'>$retrieved_appointment_time";
                    }
                    */  
                  }
                ?>
	            </div>
							<input type="submit" name="logout" value="Logout" class="logout-button" id="logout-button-id" >
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
	</main>
	<footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.png">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 class="footer-section-title">Explore</h4>
                                    <ul>
                                        <li class="footer-section-sub-title"><a href="about.html">About</a></li>
                                        <li class="footer-section-sub-title"><a href="services.html">Services</a></li>
                                        <li class="footer-section-sub-title"><a href="gallery.html">Gallery</a></li>
                                        <li class="footer-section-sub-title"><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 class="footer-section-title">Contact Us</h4>
                                    
                                </div>
                                <div class="footer-number">
                                    <h4 class="phone-number"><p class="footer-phone-text">New Cross Gate</p><span>020 </span>3352 7337</h4>
                                    <h4 class="phone-number"><p class="footer-phone-text">Brockley</p><span>020 </span>7671 5548</h4> 
                                </div>
                                <div class="footer-e-mail-container">
                                    <p class="footer-e-mail-text-1">E-mail</p>
                                    <p class="footer-e-mail-text-2">necktapers@gmail.com</p>
                                </div>
                                
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder="Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">Send</button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Subscribe now to get daily updates</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>     
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 class="footer-section-title">Location </h4>
                                </div>
                                <div class="footer-location-map">
                                    <img class="footer-location-map" src="assets/img/gallery/footer-location-map.png" alt="">
                                    <div class="footer-location-map-sub-container-1"><a class="footer-location-map-sub-container-1" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+New+Cross/@51.4746754,-0.0432911,17z/data=!3m1!4b1!4m6!3m5!1s0x487603bbd98217e9:0x62ae6ff4a8729d64!8m2!3d51.4746754!4d-0.0407162!16s%2Fg%2F11k4m8t994?entry=ttu" target="_blank"></a></div>
                                    <div class="footer-location-map-sub-container-2"><a class="footer-location-map-sub-container-2" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+New+Cross/@51.4746754,-0.0432911,17z/data=!3m1!4b1!4m6!3m5!1s0x487603bbd98217e9:0x62ae6ff4a8729d64!8m2!3d51.4746754!4d-0.0407162!16s%2Fg%2F11k4m8t994?entry=ttu" target="_blank"></a></div>
                                    <div class="footer-location-map-sub-container-3"><a class="footer-location-map-sub-container-3" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+New+Cross/@51.4746754,-0.0432911,17z/data=!3m1!4b1!4m6!3m5!1s0x487603bbd98217e9:0x62ae6ff4a8729d64!8m2!3d51.4746754!4d-0.0407162!16s%2Fg%2F11k4m8t994?entry=ttu" target="_blank"></a></div>
                                    <div class="footer-location-map-sub-container-4"><a class="footer-location-map-sub-container-4" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+Brockley/@51.4653658,-0.0390515,17z/data=!3m1!4b1!4m6!3m5!1s0x487603832898c29b:0xf9b8e3a8ab056745!8m2!3d51.4653658!4d-0.0364766!16s%2Fg%2F11vw_zb172?entry=ttu" target="_blank"></a></div>
                                    <div class="footer-location-map-sub-container-5"><a class="footer-location-map-sub-container-5" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+Brockley/@51.4653658,-0.0390515,17z/data=!3m1!4b1!4m6!3m5!1s0x487603832898c29b:0xf9b8e3a8ab056745!8m2!3d51.4653658!4d-0.0364766!16s%2Fg%2F11vw_zb172?entry=ttu" target="_blank"></a></div>
                                    <div class="footer-location-map-sub-container-6"><a class="footer-location-map-sub-container-6" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+Brockley/@51.4653658,-0.0390515,17z/data=!3m1!4b1!4m6!3m5!1s0x487603832898c29b:0xf9b8e3a8ab056745!8m2!3d51.4653658!4d-0.0364766!16s%2Fg%2F11vw_zb172?entry=ttu" target="_blank"></a></div>
                                </div>
                                <a class="footer-location-adress" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+New+Cross/@51.4746754,-0.0432911,17z/data=!3m1!4b1!4m6!3m5!1s0x487603bbd98217e9:0x62ae6ff4a8729d64!8m2!3d51.4746754!4d-0.0407162!16s%2Fg%2F11k4m8t994?entry=ttu" target="_blank">262 New Cross Rd, SE14 5PL, London</a>
                                <a class="footer-location-adress" href="https://www.google.com/maps/place/Neck+Tapers+Barbers+Brockley/@51.4653658,-0.0390515,17z/data=!3m1!4b1!4m6!3m5!1s0x487603832898c29b:0xf9b8e3a8ab056745!8m2!3d51.4653658!4d-0.0364766!16s%2Fg%2F11vw_zb172?entry=ttu" target="_blank">24-26 Brockley Cross, SE4 2AA, London</a>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <a href="https://karimelhammamywebsitedevelopment.com" target="_blank">K.E.H</a>
                                </p>
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a id="fa-tiktok-anchor" href="https://www.tiktok.com/@necktapers"><i id="fa-tiktok-id" class="fa-brands fa-tiktok" style="color: #7c7c7c;"></i></a>
                                <a href="https://www.facebook.com/necktapers?mibextid=kFxxJD" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="index.html" target="_blank"><i class="fas fa-globe"></i></a>
                                <a href="https://www.instagram.com/necktapers?igsh=ZmhhaHB0cnpkZHBl" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
	<!-- Scroll Up -->
	<div id="back-top" >
			<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
	</div>

	<!-- JS here -->

	<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- Jquery Mobile Menu -->
	<script src="./assets/js/jquery.slicknav.min.js"></script>

	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/slick.min.js"></script>
	<!-- One Page, Animated-HeadLin -->
	<script src="./assets/js/wow.min.js"></script>
	<script src="./assets/js/animated.headline.js"></script>
	<script src="./assets/js/jquery.magnific-popup.js"></script>

	<!-- Date Picker -->
	<script src="./assets/js/gijgo.min.js"></script>
	<!-- Nice-select, sticky -->
	<script src="./assets/js/jquery.nice-select.min.js"></script>
	<script src="./assets/js/jquery.sticky.js"></script>
	
	<!-- counter , waypoint,Hover Direction -->
	<script src="./assets/js/jquery.counterup.min.js"></script>
	<script src="./assets/js/waypoints.min.js"></script>
	<script src="./assets/js/jquery.countdown.min.js"></script>
	<script src="./assets/js/hover-direction-snake.min.js"></script>

	<!-- contact js -->
	<script src="./assets/js/contact.js"></script>
	<script src="./assets/js/jquery.form.js"></script>
	<script src="./assets/js/jquery.validate.min.js"></script>
	<script src="./assets/js/mail-script.js"></script>
	<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
	
	<!-- Jquery Plugins, main Jquery -->	
	<script src="./assets/js/plugins.js"></script>
	<script src="./assets/js/main.js"></script>
	<script src="./assets/js/a.js"></script>

	<!-- header logo animation -->	
	<script src="./assets/js/logo-animation.js"></script>

	<!-- footer social media icons animation -->	
	<script src="./assets/js/footer-social-media-icons.js"></script>


	<!-- templete 2 js for appointment use -->	
	<script src="assets/js-1/jquery.min.js"></script>
  <script src="assets/js-1/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js-1/popper.min.js"></script>
  <script src="assets/js-1/bootstrap.min.js"></script>
  <script src="assets/js-1/jquery.easing.1.3.js"></script>
  <script src="assets/js-1/jquery.waypoints.min.js"></script>
  <script src="assets/js-1/jquery.stellar.min.js"></script>
  <script src="assets/js-1/owl.carousel.min.js"></script>
  <script src="assets/js-1/jquery.magnific-popup.min.js"></script>
  <script src="assets/js-1/aos.js"></script>
  <script src="assets/js-1/jquery.animateNumber.min.js"></script>
  <script src="assets/js-1/bootstrap-datepicker.js"></script>
  <script src="assets/js-1/jquery.timepicker.min.js"></script>
  <script src="assets/js-1/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js-1/google-map.js"></script>
  <script src="assets/js-1/main.js"></script>
	<script src="assets/js-1/appointment-button.js"></script>

	

	</body>
</html>
<?php
  //echo $_SESSION["username"] . "<br>";
  //echo $_SESSION["password"] . "<br>";

  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: login.php");
    ob_end_flush();
  }
?>	
