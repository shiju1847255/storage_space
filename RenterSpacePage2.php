<?php
	session_start();
	ob_start();
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
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link rel="stylesheet" type="text/css" href="RenterSpace.css">
		
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="images/logo.ico" type="image/x-icon">
	</head>
    	<style>
		body{
			    background: url(images/2.jpg) no-repeat;
			    /*max-width: 100%;*/
			    /*min-width: 300px;*/
			    /*height: auto;*/
			    background-attachment: fixed;
                color: white;
			    
		}
            .footer{
            color: black;
            background-color: #d9d9d9;
            width: 100%;
            height: 30px;
            text-align: right;
            padding-right: 15px;
                position: fixed;
            bottom:0;
        }
	</style>
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
				<!--<ul class="nav navbar-nav navbar-right">
					<li><a href="signlogin.php">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
					<li><a href="login.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
				</ul>-->
			</div><!-- /.navbar-collapse -->
</div>
	 
<!--- End Navigation ---->

<div class="jumbotron" id="jumbotron">
	<div class="container">
	  <h1>Step 2</h1>
	  <p>Storage Information</p>
	</div>
</div>



<!-- Sign up -->
<div id="myForm" class="container" >
	<form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<div class="row">
		<div class="col-md-6">
				<div class="form-group">
		           <label class="control-label">Name for the Storage :</label>
		            <input maxlength="100" type="text" required="required" name="sname" class="form-control" placeholder="Enter Your Space Name 'eg: Garage space'">
		          </div>
				<div class="form-group">
		            <label class="control-label">Space available from : </label>
		            <input type="date" required="required" name="spacefrom" class="form-control" placeholder="yyyy-mm-dd">
		          </div>
		          <div class="form-group">
		            <label class="control-label">Space available till : </label>
		            <input type="date" required="required" name="spacetill" class="form-control" placeholder="yyyy-mm-dd">
		          </div>
		          <div class="form-group">
		            <label class="control-label">Storage Type : </label>
		            <select class="form-control" name="stype" required="required">
                        <option > Please select one</option> 
                        <option value="Loft/Attic">Loft/Attic</option> 
                        <option value="Spare room">Spare room</option>
                        <option value="Garage">Garage</option>
                        <option value="Other indoor">Other indoor</option>
                        <option value="Driveway">Driveway</option>
                        <option value="Commercial/self storage">Commercial/self storage</option>
                        <option value="Other Outdoor">Other Outdoor</option>
                    </select>
		          </div>
		          


		</div>


		<div class="col-md-6">
					<div class="form-group">
			            <label class="control-label">Storage Size : </label>
			            <select class="form-control" name="ssize" required="required">
                            <option >Please select one</option>
                            <option value="8">XS - cupboard/under bed- 5 boxes/suitcase(8 sq ft)</option>
                            <option value="20">S- Small wardrobe/part of loft - 10 boxes/suitcase(20 sq ft)</option>
                            <option value="50">M -Large double wardrobe/quarter  size loft - 20 boxes (50 sq ft)</option>
                            <option value="100">L- Half a garage/loft/large shed - 40 boxes (100 sq ft)</option>
                            <option value="150">XL - Whole garage/loft/spareroom - 50+ boxes (150sq ft)</option>
                            <option value="200">XXL - Double garage/large loft/basement/warehouse (200+ sq ft)</option>
                        </select>
			        </div>
					<div class="form-group">
				            <label class="control-label">Youtube Video of the Space (Optional) : </label>
				            <input  type="text" name="yt" class="form-control" placeholder="Eg: https://www.youtube.com/watch?v=dQw4w9WgXcQ" maxlength="50">
					</div>
					<div class="form-group">
				            <label class="control-label">Rent Per Week : </label>
				            <input maxlength="200" type="number" required="required" name="rent" class="form-control" placeholder="Rupees" min="0">
					</div>
				    
			  
			  <button class="btn btn-success btn-lg pull-right" type="submit">Submit <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </button>
		</div>
</div>

<!-- end of sign up -->

<center><p>
<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            	
            	$sname = $_POST['sname'];
            	$spacefrom = $_POST['spacefrom'];
            	$spacetill = $_POST['spacetill'];
            	$stype = $_POST['stype'];
            	$ssize = $_POST['ssize'];
            	$yt = $_POST['yt'];
            	$rent = $_POST['rent'];
            	$ownerid=$_SESSION['id'];
            	$addressid=$_SESSION['addr_id'];

            	$currentDate=date("Y-m-d");

            	if(!preg_match('/^[a-zA-Z -.]*/', $sname)){
            		echo 'Invalid Storage Name!';
            	}
            	elseif ($currentDate > $spacefrom) {
						echo 'Invalid Space available from date! Must be present or future date.';
				}
				elseif ($spacefrom > $spacetill) {
						echo 'Invalid Space available till date! Must be future day from available date.';
				}
            	else{
            	include 'dbh.php';

                
                $sql="INSERT INTO storage(storage_size,rent,start_date,stop_date,owner_id,address2_id,storage_name,storage_type,yt_video) VALUES ('$ssize','$rent','$spacefrom','$spacetill','$ownerid','$addressid','$sname','$stype','$yt')";

                //$result= mysql_query($sql);
                $retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));

                if($retval==1){
                	
                	$sql="SELECT * from storage where storage_name='$sname'";

	                $result= mysqli_query($conn ,$sql)or die(mysqli_error($conn));

	                if($row=mysqli_fetch_assoc($result)){
	                  	
	                  	$_SESSION['store_id']=$row['storage_id'];
						header("Location: RenterSpacePage3.php");
	                }
                }
                else{
                	echo "Failed to query database ".mysqli_error($conn);
                }
            }
          }
?>
</p></center>

    </div>

	
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/renter.js"></script>
	<script src="js/wow.min.js"></script>
		<script>
		new WOW().init();
		</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <div class="footer">
        Kenguru &#169 2019 - www.kenguru.in
        
        </div>
	</body>
</html>