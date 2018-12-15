<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>

	<!-- JQuery file -->
	<script type="text/javascript" src="jquery/jquery.js"></script>
	
	<!-- Bootstrap JS File -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<!-- Bootstrap CSS File -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Balthazar" rel="stylesheet">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="style/customstyle.css">

	<style type="text/css">

	</style>
	
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-header"> 
				<h6 class="text-uppercase"> Admin Dashboard </h6>
			</div>
			<ul class="list-unstyled components">				
				<li>				
					<a href="#homeSubmenu">
					<span class="icon-area">
						<i class="fas fa-tachometer-alt"></i>
					</span>Dashboard </a>									
				</li>

				<li>
					<a href="#media" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="icon-area">
							<i class="fas fa-file-alt"> </i>
						</span>
					Media </a>
					<ul class="collapse list-unstyled" id="media">
						<li>
							<a href=""> Library </a>
							<a href=""> Add New </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<span class="icon-area"><i class="fas fa-file"></i></span> Posts </a>
					<ul class="collapse list-unstyled" id="homeSubmenu1">
						<li>
							<a href=""> All Post </a>
							<a href=""> Add New </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#comments" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="icon-area">
							<i class="fas fa-file-alt"> </i>
						</span>
					Pages </a>
					<ul class="collapse list-unstyled" id="comments">
						<li>
							<a href="">Add New </a>
							<a href="">All Pages </a>
						</li>
					</ul>
				</li>



				<li>
					<a href="#"><span class="icon-area"><i class="fas fa-comment"> </i></span> Comments </a>
				</li>

				<li>
					<a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="icon-area">
							<i class="fas fa-user-alt"> </i>
						</span>
					User </a>
					<ul class="collapse list-unstyled" id="user">
						<li>
							<a href="">All Users </a>
							<a href="">Add New </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#dummy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="icon-area">
							<i class="fas fa-file-alt"> </i>
						</span>
					Pages Lists</a>
					<ul class="collapse list-unstyled" id="dummy">
						<li>
							<a href="">Add New </a>
							<a href="">All Pages </a>
						</li>
					</ul>
				</li>
			</ul>

			<ul class="list-unstyled CTAs">
				<li>
					<a href="#" class="download">Download Code </a>
				</li>
				<li>
					<a href="#" class="article">Article </a>
				</li>
			</ul>

		</nav>
		<!-- end navbar -->

		<!-- content area -->
		<div class="content">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button type="button" id="sidebarCollapse" class="btn btn-info ml-5"> 
					<i class="fas fa-align-left"> </i>
					<span>Toggle</span>
				</button>

				<a class="navbar-brand text-white ml-3 text-uppercase nav-text"> Admin Dashboard</a>

				  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ml-auto text-right">
				         <li class="nav-item dropdown">
					        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          <i class="fas fa-bell"><span class="badge badge-pill badge-warning">3</span></i>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Notification 1</a>
					          <a class="dropdown-item" href="#">Notification 2</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">View All Notification</a>
					        </div>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          <i class="fas fa-envelope"><span class="badge badge-pill badge-warning">3</span></i>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Message 1</a>
					          <a class="dropdown-item" href="#">Message 2</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">View All Messages</a>
					        </div>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          <i class="fas fa-bell"><span class="badge badge-pill badge-warning">3</span></i>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Notification 1</a>
					          <a class="dropdown-item" href="#">Notification 2</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">View All Notification</a>
					        </div>
					      </li>
				     
				    </ul>

				     <ul class="navbar-nav ml-auto text-right">
				         <li class="nav-item dropdown">
					        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         <span><i class="fas fa-user-circle"></i></span> Umesh Rana
					        </a>
					        <div class="dropdown-menu float-left profile-section" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Settings</a>
					          <a class="dropdown-item" href="#">Profile</a>
					         
					          <a class="dropdown-item" href="#">Logout</a>
					        </div>
					      </li>
				  </div>
			</nav>


			<div class="pl-5">

				<h2> Collapsible sidebar using bootstrap 4 </h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

				<div class="line"></div>

				<h2> Collapsible sidebar using bootstrap 4 </h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

				<div class="line"></div>

				<h2> Collapsible sidebar using bootstrap 4 </h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

				<div class="line"></div>
			</div>
			</div>






	</div>  <!-- end wrapper -->

<div class="footer">
	<p class="text-center">Copyright &copy; 2018 <a href="https://www.programmingcraze.com"> Umesh Rana</a>, All Rights Reserved  </p>
</footer>




	<script>
		$(document).ready(function(){
			//alert('hello');
			$("#sidebarCollapse").on('click',function(){
				$("#sidebar").toggleClass('active');
			});
		});
	</script>
</body>
</html>

