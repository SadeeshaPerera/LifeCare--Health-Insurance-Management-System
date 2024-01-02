<!-- Afterlogin.php eken ewa -->

<?php 
   session_start();
   include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | LifeCare</title>
	<link rel="icon" type="image/x-icon" href="../Images/logo.png">
    <link rel="stylesheet" href="../CSS/After_login.css">
	<link rel="stylesheet" href="../CSS/home.css">

	<style>
	 	body{
			background-color: aliceblue;
  		}

   		#Explore{
			display:flex;
			float:right;
			margin-top:50px; 
			margin-bottom:20px;
			margin-right:20px;
			background-color: blue;
			color:white;
			padding:10px 10px;
   		}

   		#Explore:hover{
			background-color: bisque;
			color:black;
   		}

   		#admin-img{
			margin-top:100px;
   		}

   		#admin-logout{
			display:flex;
			float:left;
			margin-top:50px; 
			background-color: blue;
			color:white;
			padding:10px 10px;
			text-decoration: none;
   		}

   		#admin-logout:hover{
			background-color: lightblue;
			color:black;
   		}

   		#Greeting{
			text-align: center;
			font-size:60px; 
			/* margin-bottom:600px; */
			margin-right:450px;
		}

	</style>
</head>

<body>
	<div>
      <div class="container d-flex justify-content-center align-items-center"
      	style="min-height: 100vh">
      	<?php if ($_SESSION['User_Type'] == 'Admin') {?>
      		<!-- For Admin -->
			<div>
			
			</div>
      		<div class="card" style="width: 18rem;">
			  <img src="../Images/admin-default.png" id="admin-img" alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['Username']?>
			    </h5>
			    <a href="./logout.php" id="admin-logout">Logout</a>
			  </div>
			</div>
			<div class="p-3">
				<?php include 'members.php';
                if (mysqli_num_rows($res) > 0) {?>
                <h1 id="heading-adminpage">Welcome Admin</h1>
				<h1 id="heading-table">Members</h1>
				<table class="table" id="members">
				  <thead>
				    <tr>
				      <th id=left-table >No</th>
				      <th >Name</th>
				      <th >User Name</th>
				      <th >Role</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($res)) {?>
				    <tr>
				      <th scope="row"><?=$i?></th>
				      <td><?=$rows['First_Name']?></td>
				      <td><?=$rows['Username']?></td>
				      <td><?=$rows['User_Type']?></td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>
				<!-- <?php include "Admin-footer";?> -->
				<?php }?>
			</div>
      	<?php }else { ?>
      		<!-- FORE USERS -->
			
			<div>
      			<div id="user-card">
			  		<div class="card-body text-center">
						<div class="header">
				<!-- <div class="greet">
	<h1 id="Greeting">Welcome to LifeCare</h1>
		</div>
	 -->

        					<div class="logo">
            					<img src="../Images/logo.png" >
            					<div class="site-name">LIFE CARE</div>
        					</div>
    
        					<div class="middle-list">
            					<ul class="nav">
									<li><a href="../index.php">Home</a></li>
									<li><a href="./package.php">Packages</a></li>
									<li><a href="./ContactUs.php" class="action">Contact us</a></li>
									<li><a href="./about.php">About us</a></li>
            					</ul>
        					</div>
    
        					<div class="right-section">
            					<div class="buttons">
                			<a href="./logout.php" id><button>Logout</button></a>
            			</div>
        			</div>
    			</div>
	
			    <!-- <a href="logout.php">Logout</a> -->
			</div>
			
			<div>
				<div class="header">
        			<div class="logo">
            			<img src="../Images/logo.png" >
            			<div class="site-name">LIFE CARE</div>
        			</div>
    
        			<div class="middle-list">
            			<ul class="nav">
							<!-- <li><a href="../Admin Pages/CRUD for Manage User Page">Manage Users</a></li>
							<li><a href="#">Manage Packages</a></li>
							<li><a href="../Admin Pages/CRUD for Claim Page/index.php" class="action">Manage Claims</a></li>
							<li><a href="#">Manage Polices</a></li>
							<li><a href="../Admin Pages/CRUD_for_HealthCare_Provider_Page/">Manage HealthCare Providers</a></li>
							<li><a href="#">Home</a></li> -->


							<li><a href="../Admin Pages/CRUD for Manage User Page/index.php">Manage Users</a></li>
            <li><a href="../Admin Pages/CRUD for Manage Packages/">Manage Packages</a></li>
            <li><a href="../Admin Pages/CRUD for Claim Page/index.php" class="action">Manage Claims</a></li>
            <li><a href="../Admin Pages/CRUD for Manage Policy/">Manage Polices</a></li>
            <li><a href="../Admin Pages/CRUD_for_HealthCare_Provider_Page/">Manage HealthCare Providers</a></li>
            <li><a href="../PHP/admin.php">Home</a></li>
            			</ul>
        			</div>
    
        			<div class="right-section">
						<h5 class="card-title">
							<?php echo "Welcome  ";?><?php echo $_SESSION["Username"] ?>
			    		</h5>
               
            			<div class="buttons">
                			<a href="./logout.php"><button style="margin-right:80px; margin-bottom:5px; " >Logout</button></a>
            			</div>
        			</div>
    			</div>

				<div class="greet" style="margin-top:200px;">
			  		<h1 id="Greeting">Welcome Admin</h1>
			  		<a href="../index.php"><button id="Explore" style="margin-right:650px;">Vist LifeCare</button></a>
				</div>
			</div>
		</div>		
	<div>	

    <?php } ?>
      </div>
	  </div>
	  </div>
	  
	<!-- <?php include "Admin-footer.php";?> -->
	  
</body>
</html>