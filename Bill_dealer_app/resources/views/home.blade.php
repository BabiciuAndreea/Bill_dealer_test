<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Edit/style.css">
    <link rel="stylesheet" type="text/css" href="Edit/homepage_style.css">
</head>
<body>
<nav class="home_navbar navbar navbar-expand-lg bg-light">
  <div class="container_nav container">
    <a class="navbar-brand" href="#">Bill Dealer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="profile_pictures/blank_profile_picture.png" alt="Image" class="shadow">
						</div>
					</div>
    <div class="nav_settings collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class=" dots fa fa-ellipsis-v" aria-hidden="true"></i>
          </a>
          <ul class="drop_menu dropdown-menu">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('Info')}}">Info</a></li>
            <li><a class="dropdown-item" href="{{url('Settings')}}">Settings</a></li>
            <li><a class="dropdown-item" href="#">Help</a></li>
          </ul>
        </li>
        </ul>
</div>
</div>
</nav>
<section class="py-5 my-5">
		<div class="container ">
			<div class=" srounded-lg d-block d-sm-flex home_container"><!--container invizibil cu care putem lucra si pune castete text pt facturi-->
				<div class="profile-tab-nav border-right profile_tab">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							
						</div>
						<h4 class="text-center " style="color:white">  </h4>
					</div>
					<div class="text_nav nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="text_part nav-link active" id="account-tab"  data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true" style="color:white;">
							Dashboard
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false"style="color:white;">
							
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false"style="color:white;">
							
							Security
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false"style="color:white;">
							
							Application
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false"style="color:white;">
							
							Notification
						</a>
                        <a class="nav-link" id="notification-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="notification" aria-selected="false"style="color:white;">
							
							Edit Page
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Ciu ciu facturi</h3>
						</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
					</div>
					
					<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Settings</h3>
						
				</div>
			</div>
		
	</section>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>