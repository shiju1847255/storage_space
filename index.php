<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Kenguru</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="images/logo.ico" type="image/x-icon">
  </head>
  <body>
   
<!--NAVIGATION-->

<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a href="index.php" class="navbar-brand" id="navTitle">KENGURU</a>
		</div>
		
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#howitworks">How it works</a></li>
	        <li><a href="#benefits">Benefits</a></li>
	        <li><a href="#contact">Contact</a></li>
	       
	      </ul>

<?php

if(isset($_SESSION['id'])){
  $std=$_SESSION['id'];
  include 'dbh.php';

					    $sql="SELECT * from customer where customer_id = '$std'";
					    $result= mysqli_query($conn ,$sql)or die(mysqli_error($conn));
					    
					    if($row=mysqli_fetch_assoc($result)){
					      	
					      	echo "	<ul class='nav navbar-nav navbar-right'>
	        						<li><a href='Ken-userDash.php'>".$row['first_name']."</a></li>
	       							<li><a href='logout.php'>Logout <i class='fa fa-sign-in' aria-hidden='true'></i></a></li>
	      							</ul>";

							}
}
else{
  echo "<ul class='nav navbar-nav navbar-right'>
	        <li><a href='signlogin.php'>Sign Up <i class='fa fa-user-plus' aria-hidden='true'></i></a></li>
	        <li><a href='login.php'>Login <i class='fa fa-sign-in' aria-hidden='true'></i></a></li>
	      </ul>";
}

?>


	      <!-- <ul class="nav navbar-nav navbar-right">
	        <li><a href="signlogin.php">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
	        <li><a href="login.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
	      </ul> -->
	    </div><!-- /.navbar-collapse -->
</div>
   
<!--- End Navigation ---->
  
<!--- Header ---->
 
 <div id="header" class="header bgimg-1">
	 <div class="container">
		 <div class="row">

			 <div class="col-lg-12">

				<div id="content">
					<img src="logo.png" height="25%" width="25%" class="wow zoomIn" data-wow-delay="0.8s">
					<h1 class="wow zoomIn" data-wow-delay="0.8s">KENGURU</h1>
					<h3>A Storage Solution</h3>
					<hr>

					<div class="row">
						<div class="col-lg-4 col-md-4">
							<button class="btn btn-default btn-lg wow fadeInUp" onclick="window.location.href='search.php'"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search for Space</button>
						</div>
<?php
$_SESSION['svalue']=NULL;
?>

						<div class="col-lg-4 col-md-4">
							<h4 style="color:white;"> OR </h4>
						</div>
						<div class="col-lg-4 col-md-4">
							<button class="btn btn-default btn-lg wow fadeInUp" onclick="window.location.href='RenterSpacePage1.php'"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 
								<!-- <a style="text-decoration: none; color:black;" href="RenterSpacePage1.php">Rent your Space</a> -->Rent your Space</button>
						</div>
					</div>
					
					
					
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
  

<!---- End Header ---->

<!--- How it works ---->
 
 <div id="howitworks" class="howitworks bgimg-2">
     <div class="container">
         <h1 class="wow fadeInUp">How it works</h1>
         
        	     <h2>Searching for Space</h2>
				<hr>

				<div class="row">
					<div class="col-lg-4 col-md-4 wow flipInY">
						<i class="fa fa-search fa-lg fa-5x" aria-hidden="true"></i>
						<h3>Find space<br>near your location</h3>
					</div>
					<div class="col-lg-4 col-md-4 wow flipInY">
						<i class="fa fa-address-book fa-lg fa-5x" aria-hidden="true"></i>
						<h3>Contact the storage provider<br>and book your space</h3>
					</div>
					<div class="col-lg-4 col-md-4 wow flipInY">
						<i class="fa fa-truck fa-lg fa-5x" aria-hidden="true"></i>
						<h3>Move your items<br>to the booked space</h3>
					</div>
				</div>
				
				<h2>Renting your Space</h2>
				<hr>

				<div class="row">
					<div class="col-lg-4 col-md-4 wow flipInY">
						<i class="fa fa-list-alt fa-lg fa-5x" aria-hidden="true"></i>
						<h3>List your space<br>on our website for free</h3>
					</div>
					<div class="col-lg-4 col-md-4 wow flipInY">
						<i class="fa fa-phone fa-lg fa-5x" aria-hidden="true"></i>
						<h3>Receive enquires from<br>storage seekers</h3>
					</div>
					<div class="col-lg-4 col-md-4 wow flipInY">
						<i class="fa fa-archive fa-lg fa-5x" aria-hidden="true"></i>
						<h3>Store the items<br>and collect the rent</h3>
					</div>
				</div>
     </div>
 </div>
  
<!---- End how it works ----> 

<!--- Benefits ------>

<div id="benefits" class="benefits bgimg-3">
    <div class="container">
        <div class="row">
					
					<h1>The benefits of Storemates</h1>
					
					
					<div class="col-lg-1 col-md-1">
						<i class="fa fa-tag fa-lg fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-11 col-md-11">
						<h3>50% cheaper</h3>
						<h4>It’s cheaper. we are the largest aggregation of storage options of all sizes for you to choose from. This saves you search time and money, potentially up to 50% off rack rates from walking in the door of a traditional storage facility.</h4>
					</div>
					
					

					<div class="col-lg-1 col-md-1">
						<i class="fa fa-lock fa-lg fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-11 col-md-11">
						<h3>Safe and Secure</h3>
						<h4>We treat safety and security as our priority. We’re a storage solution that connects people and communities, allowing them to store their belongings in each other’s free space. Of course, you want to know you can trust your belongings are in safe hands.</h4>
					</div>

					
					<div class="col-lg-1 col-md-1">
						<i class="fa fa-map-marker fa-lg fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-11 col-md-11">
						<h3>Convenient</h3>
						<h4>Access hundreds of short or long term self storage solutions near you at the click of a button. With thousands of trusted storage hosts throughout India, we know there will be cheap local storage option just a short jaunt from your home and usually nearer to you than an out of town Self Storage Warehouse</h4>
					</div>

					
					<div class="col-lg-1 col-md-1">
						<i class="fa fa-leaf fa-lg fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-11 col-md-11">
						<h3>Eco-friendly</h3>
						<h4>We believe in minimizing waste and being kinder to our environment. We’re seeing more and more self-storage sites being built, whilst the space we need is all around us. It’s just hidden away in office spaces, lofts, and cupboards. The inefficiency rankles us; that’s why we decided to provide a safe, secure, and elegant storage solution that gets the most out of these spaces.</h4>
					</div>
					
		</div>
    </div>
</div>
 
 <!---- End Benefits -->


<!--- Contact ------>
<form action="#" method="post">
<div id="contact" class="contact bgimg-4">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp" style="color:white;">Contact</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4"style="color:white;">For any Queries.</p>
            <div class="col-lg-6 col-md-6">
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.4s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="name" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name" required>
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="email" name="email" class="form-control" aria-describedby="sizing-addon1" placeholder="Email Address" required>
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                    <span class="input-group-addon" id="sizing-addon1">+91</i></span>
                    <input type="number" name="contact" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-group wow fadeInUp" data-wow-delay="1.6s">
                    <textarea name="message" id="" cols="80" rows="6" class="form-control" maxlength="250" placeholder="Message (Max 250 Characters)" required></textarea>
                </div>
                <button class="btn btn-lg wow fadeInUp" data-wow-delay="2s">Submit Your Message</button>
            </div>
        </div>

        <h2 style="color: white;"><center>
<?php
		        if ($_SERVER["REQUEST_METHOD"] == "POST") {
		            	$fname = $_POST['name'];
		            	$email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $message = $_POST['message'];

                        	if(!preg_match('/^[789][0-9]{9}$/', $contact))
						    {
						      	echo 'Invalid Number!';
						    }
						    elseif (!preg_match('/^[a-zA-Z ]*$/', $fname)) {
						    	echo 'Invalid Name!';
						    }
						    else{
						    	include 'dbh.php';
                                $cust = rand(10,100)
			               		$sql="INSERT INTO contact(name,email,contact,message) VALUES ('$fname','$email','$contact','$message')";

			                	//$result= mysql_query($sql);
			                	$retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));
						    }
		          }
?>
        </center></h2>
    </div>
</div>
</form>

 <!---- End Contact -->


<!---- Footer ---->
 
 <div id="footer" class="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-4">
                 <h4 class="wow fadeInUp">Contact Us</h4>
                 
                 <p><i class="fa fa-envelope" aria-hidden="true"></i> www.kenguru@gmail.com</p>
                 <p><i class="fa fa-phone" aria-hidden="true"></i> +91 740 680 62 59</p>
                 <p><i class="fa fa-globe" aria-hidden="true"></i> www.kenguru.com</p>
             </div>
             <div class="col-lg-4 col-md-4">
                 <h4>About</h4>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i><a style="color:darkgray" href="#"> About Us</a></p>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i><a style="color:darkgray" href="privacy.php"> Privacy</a></p>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i><a style="color:darkgray" href="tc.php"> Term & Condition</a></p>
             </div>
             <div class="col-lg-4 col-md-4">
                 <h4>Stay in touch</h4>
                 <i class="social fa fa-facebook" aria-hidden="true"></i>
                 <i class="social fa fa-twitter" aria-hidden="true"></i>
                <i class="social fa fa-linkedin" aria-hidden="true"></i>
                <i class="social fa fa-pinterest" aria-hidden="true"></i>
                <i class="social fa fa-youtube" aria-hidden="true"></i>
                <i class="social fa fa-github" aria-hidden="true"></i><br>
                
             </div>
         </div>
     </div>
 </div>

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>