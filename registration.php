<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="./assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
</head>
<body>
<script>
	/*$(document).ready(function(){
		
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
	
		$.ajax({
			url: `${baseUrl}/auth/user/profile/`,
			type: 'GET',
			headers: {
                    'Authorization': `Bearer ${access}` // Include the token
                },
			success: function(response) {
				// Populate form fields with the user data
				let imageUrl;
				if(response.dpimage != null) {
					imageUrl = `${baseUrl}${response.dp_image}`;
				} else {
					imageUrl = "./assets/images/default/default1.jpg";
				}
			 
				$('#user-dp').attr('src', imageUrl);
				$('#user-name').text(response.first_name);
				//$('#user-dp').attr('src', `${baseUrl}`+response.dp_image)
				console.log(response)
				//$('#last_name').val(response.last_name);
				//$('#email').val(response.email);
				//$('#username').val(response.username);
				
			},
			error: function() {
				alert('Failed to load user data');
			}
		});
		
		
	});*/
</script>
<!--<script src="./assets/js/preloader.js"></script>-->
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.php -->
	<?php include 'components/sidebar.php'; ?>
    <!--<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.php" class="brand-logo">
          <img src="./assets/images/logo.svg" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name">Clyde Miles</p>
          <p class="email">clydemiles@elenor.us</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="dashboard.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Configurations
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="registration.php">
                      Add User
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Add Bulk User
                    </a>
                  </div>
				  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      User Operations
                    </a>
                  </div>
                </nav>
              </div>
            </div>
          </nav>
        </div>
        
      </div>
    </aside>-->
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      <!--<header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Greetings Clyde!</span>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <i class="material-icons mdc-text-field__icon">search</i>
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                  <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="./assets/images/faces/face1.jpg" alt="user" id="user-dp">
                  </span>
                  <span id="user-name"></span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Edit profile</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal" id='logout'>Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-settings"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-alert-circle-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Settings</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-progress-download text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Update</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-bell"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-email-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You received a new message</h6>
                      <small class="text-muted"> 6 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-account-outline"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">New user registered</h6>
                      <small class="text-muted"> 15 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-alert-circle-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">System Alert</h6>
                      <small class="text-muted"> 2 days ago </small>
                    </div>
                  </li> 
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-update"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You have a new update</h6>
                      <small class="text-muted"> 3 days ago </small>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-email"></i>
                <span class="count-indicator">
                  <span class="count">3</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="./assets/images/faces/face4.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                      <small class="text-muted"> 1 Minutes ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="./assets/images/faces/face2.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                      <small class="text-muted"> 15 Minutes ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="./assets/images/faces/face3.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                      <small class="text-muted"> 18 Minutes ago </small>
                    </div>
                  </li>                
                </ul>
              </div>
            </div>
            
          </div>
        </div>
      </header>-->
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<p><b>Add User</b></p>
			<div class="mdc-layout-grid">
				
				<form id = "registrationForm" enctype="multipart/form-data">
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Email:</label></div>
					  <div class='col-md-10'>
						  <input
							type="email"
							name="email"
							class= "form-control"
							id= "email"
						  />
						  <div class="invalid-feedback">
							{error.emial && <p>{error.email}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Username:</label></div>
					  <div class='col-md-10'>
						  <input
							type="text"
							name="username"
							class= "form-control"
							id = "username"
						  />
						  <div class="invalid-feedback">
							{error.username && <p>{error.username}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Password:</label></div>
					  <div class='col-md-10'>
						  <input
							type="password"
							name="password"
							class= "form-control"
							id = "password"
						  />
						  <div class="invalid-feedback">
							{error.password && <p>{error.password}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'> 
					  <div class='col-md-2'><label>First Name:</label></div>
					  <div class='col-md-10'>
						  <input
							type="text"
							name="first_name"
							class= "form-control"
							id = "first_name"
						  />
						  <div class="invalid-feedback">
							{error.first_name && <p>{error.first_name}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Last Name:</label></div>
					  <div class='col-md-10'>
						  <input
							type="text"
							name="last_name"
							class= "form-control"
							id = "last_name"
						  />
					  </div>
					</div>
					<div class="row mb-3">
						<div class="col-md-2">
							<label>Date of Birth</label>
						</div>
						<div class="col-md-10">
							<input
								type="date"
								class= "form-control"
								name="dob"
								id = "dob"
							/>
							<div class="invalid-feedback">
								{error.dob}
							</div>
						</div>
					</div>
					
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Age</label></div>
					  <div class='col-md-10'>
						  <input
							type="number"
							name="age"
							class= "form-control"
							id = "age"
						  />
						  <div class="invalid-feedback">
							{error.age}
						  </div>
					  </div>
					</div>

					<div class='row mb-3'>
					  <div class='col-md-2'><label>Phone:</label></div>
					  <div class='col-md-10'>
						  <input
							type="number"
							name= "phone"
							class= "form-control"
							id = "phone"
						  />
						  <div class="invalid-feedback">
							{error.phone && <p>{error.phone}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'>
				    <div class='col-md-2'><label>Role:</label></div>
					  <div class='col-md-10'>
						  <select
							type="text"
							name="role"
							class= "form-control"	
							id = "role"
						  >
							<option value="">Select</option>
							<option value="2">Student</option>
							<option value="3">Faculty</option>
							<option value="4">Management</option>
							<option value="5">Parent</option>
						  </select>
						  <div class="invalid-feedback">
							{error.role && <p>{error.role}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Staff Category:</label></div>
					  <div class='col-md-10'>
						  <select
							type="text"
							name="st_cat"
							class= "form-control"
							id = "st_cat"
						  >
							<option value="">Select</option>
							<option value="2">Student</option>
							<option value="3">Faculty Member</option>
							<option value="4">Principal</option>
							<option value="5">Administrator</option>
							<option value="6">Lab Assistant</option>
							<option value="7">Support Staff</option>
						  </select>
					  </div>
					</div>
					<div class='row mb-3'>
					  <label class='col-md-2'>Department:</label>
					  <div class='col-md-10'>
						  <select
							type="text"
							name="dept"
							class= "form-control"
							id = "dept"
						  >
							<option value="">Select</option>
							<option value="2">Basic Science</option>
							<option value="3">Computer Science</option>
							<option value="4">Accounts</option>
							<option value="5">HR</option>					
						  </select>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Profile Image:</label></div>
					  <div class='col-md-10'>
						  <input
							type="file"
							name="dp_image"
							class= "form-control"
							id = "dp_image"
							accept="image/*"
						  />
						  <!--<div class="invalid-feedback">
							{error.dp_image && <p>{error.dp_image}</p>}
						  </div>--!>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Signature:</label></div>
					  <div class='col-md-10'>
						  <input
							type="file"
							name="signature"
							class= "form-control"
							id = "signature"
							accept="image/*"
						  />
						  <!--<div class="invalid-feedback">
							{error.signature && <p>{error.signature}</p>}
						  </div>!-->
					  </div>
					</div>
					<div class="mdc-layout-grid d-flex justify-content-end">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
			</div>
        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        <!--<footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Free <a href="https://www.bootstrapdash.com/material-design-dashboard/" target="_blank"> material admin </a> dashboards from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>-->
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chartjs/Chart.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  /*$(document).ready(function() {
    // Attach a submit event handler to the form
    //$("#registrationForm").submit(function(event) {
      //event.preventDefault();  // Prevent the form from submitting normally
    $('form').submit(function(e){
	  e.preventDefault();
      // Serialize form data
      var formData = $(this).serialize();
      const baseUrl = localStorage.getItem("url");
	  
	  var form = this.form;
	  var data = new FormData(form);
      // Perform the AJAX request
      $.ajax({
        url: `${baseUrl}/api/user/register/`, // Replace with your actual API endpoint
		
        method: 'POST',
        data: formData,
		processData: false,
		contentType: "multipart/form-data",
        success: function(response) {
          // Handle success response
          alert("Form submitted successfully!");
          console.log(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          var errorMessage = '';

          // Check if the API returns a JSON response with an error message
          if (jqXHR.responseJSON && jqXHR.responseJSON.error) {
            errorMessage = jqXHR.responseJSON.error;
          } else if (jqXHR.responseText) {
            errorMessage = jqXHR.responseText;
          } else {
            errorMessage = 'Unexpected error occurred: ' + textStatus;
          }

          // Display the error message to the user
          alert('Error: ' + errorMessage);
          console.error('Error Details:', jqXHR, errorThrown);
        }
      });
    });
  });*/
  /*
		$(document).ready(function() {
            $('#registrationForm').on('submit', function(e) {
                e.preventDefault();
				const baseUrl = localStorage.getItem("url")
                var formData = new FormData(this);

                $.ajax({
                    url: `${baseUrl}/api/user/register/`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
					
					
                    success: function(response) {
						//console.log(response);
                        alert("User Added Succesfully");
						$('#registrationForm')[0].reset();
                    },
					
                    error: function(response) {
                        alert('Error: ' + JSON.stringify(response.responseJSON));
                    }
					
                });
            });
        });
		
	*/	
		
		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('registrationForm').addEventListener('submit', async function(e) {
				e.preventDefault();
				
				const baseUrl = localStorage.getItem("url");
				const form = this;
				const formData = new FormData();
				console.log("before submit",formData);
				console.log("before submit",formData);
				
				clearValidationErrors();
				
				const username = document.getElementById('username').value;
				const password = document.getElementById('password').value;
				const email = document.getElementById('email').value;
				const first_name = document.getElementById('first_name').value;
				const last_name = document.getElementById('last_name').value;
				const dob = document.getElementById('dob').value;
				const st_cat = document.getElementById('st_cat').value;
				const dept = document.getElementById('dept').value;
				
				const age = document.getElementById('age').value;
				const phone = document.getElementById('phone').value;
				const role = document.getElementById('role').value;

				const dp_image = document.getElementById('dp_image').files[0];
				const signature = document.getElementById('signature').files[0];

				// Append text fields to FormData
				if (email) formData.append('email', email);
				if (username) formData.append('username', username);
				if (password) formData.append('password', password);
				if (first_name) formData.append('first_name', first_name);
				if (last_name) formData.append('last_name', last_name);
				if (age) formData.append('age', age);
				if (phone) formData.append('phone', phone);
				if (role) formData.append('role', role);
				if (role) formData.append('role', role);
				if (st_cat) formData.append('st_cat', st_cat);
				if (dept) formData.append('dept', dept);

				
				if (dp_image) {
					formData.append('dp_image', dp_image);
				}
				if (signature) {
					formData.append('signature', signature);
				}
				
				console.log("after submit",formData);
				/*if(dp_image != null){
					console.log("if image");
					formData.append("dp_image", dp_image)
				}else{
					console.log("if not image");
					formData.append("dp_image", null)
				}
				
				if(signature != null){
					
					formData.append("signature", signature);
				}else{
					
					formData.append("signature", null)
				}*/
				
				/*const dpImage = document.getElementById("dp_image");
				if(dpImage && !dpImage.files.length) {
					formData.delete('dp_image');  // Remove image field if no file is selected
				}*/
				//if(getElementById("dp_image").val() === "");
				
				/*const username = document.getElementById('username');
				const password = document.getElementById('password');
				const email = document.getElementById('email');
				const first_name = document.getElementById('first_name');
				const last_name = document.getElementById('last_name');
				//const last_name = document.getElementById('last_name');
				const age = document.getElementById('age');
				const dob = document.getElementById('dob');
				const role = document.getElementById('role');
				const st_cat = document.getElementById('st_cat');
				const dept = document.getElementById('dept');
				const last_name = document.getElementById('last_name');
				const dp_image = document.getElementById('dp_image').files[0];
				const signature = document.getElementById('signature').files[0];
				

				// Conditionally append form data fields
				/*if (email) formData.append('email', email);
				if (username) formData.append('username', username);
				if (password) formData.append('password', password);
				if (first_name) formData.append('first_name', first_name);
				if (last_name) formData.append('last_name', last_name);
				if (role) formData.append('role', role);
				if (dob) formData.append('dob', dob);
				if (age) formData.append('age', age);
				if (st_cat) formData.append('st_cat', st_cat);
				if (dept) formData.append('dept', dept);
				if (dp_image) formData.append('dp_image', dp_image); 
				if (signature) formData.append('signature', signature);
				/*const dpImageField = form.querySelector('[name="dp_image"]');
				if (dpImageField && !dpImageField.files.length) {
					formData.delete('dp_image');  // Remove image field if no file is selected
				}*/
				
				try {
					const response = await fetch(`${baseUrl}/api/user/register/`, {
						method: 'POST',
						body: formData
					});

					// Check if the response is successful
					console.log("before if");
					console.log(response);
					if (response.ok) {
						const data = await response.json();
						alert("User Added Successfully");
						form.reset();  // Reset the form after successful submission
					} else {
						console.log("after if");
						const errorData = await response.json();
						displayValidationErrors(errorData);
						
						// Handle validation errors
					}
				} catch (error) {
					//console.error('Error:', error);
					console.log("error occure");
				}
			});
			
			function displayValidationErrors(errors) {
				// Clear previous errors
				clearValidationErrors();

				// Iterate over errors and display them in the form
				for (const field in errors) {
					if (errors.hasOwnProperty(field)) {
						const errorMessage = errors[field][0];

						// Find the input or select element by name
						const inputElement = document.querySelector(`[name=${field}]`);
						
						if (inputElement) {
							inputElement.classList.add('is-invalid');  // Add invalid class

							// Display error message next to the field
							const feedbackElement = inputElement.nextElementSibling;
							if (feedbackElement) {
								feedbackElement.textContent = errorMessage;  // Set error message
							}
						}
					}
				}
			}

			// Function to clear validation errors
			function clearValidationErrors() {
				const inputs = document.querySelectorAll('.form-control');
				inputs.forEach(input => {
					input.classList.remove('is-invalid');  // Remove invalid class
					const feedbackElement = input.nextElementSibling;
					if (feedbackElement) {
						feedbackElement.textContent = '';  // Clear error message
					}
				});
			}

			// Function to display validation errors in the form
			/*function displayValidationErrors(errors) {
				// Iterate over errors and display them in the form
				for (const field in errors) {
					if (errors.hasOwnProperty(field)) {
						const errorMessage = errors[field][0];
						
						// Display error next to the field
						document.querySelector(`input[name=${field}]`).classList.add('is-invalid');
						document.querySelector(`input[name=${field}]`).nextElementSibling.textContent = errorMessage;
					}
				}
			}*/
		});
		
		
		/*document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('registrationForm').addEventListener('submit', async function(e) {
				e.preventDefault();
				
				const baseUrl = localStorage.getItem("url");
				const form = this;
				const formData = new FormData(form);
				
				try {
					const response = await fetch(`${baseUrl}/api/user/register/`, {
						method: 'POST',
						body: formData
					});

					// Check if the response is successful
					if (response.ok) {
						const data = await response.json();
						alert("User Added Successfully");
						form.reset();  // Reset the form after successful submission
						// Clear any previous error messages
						clearValidationErrors();
					} else {
						const errorData = await response.json();
						displayValidationErrors(errorData);  // Handle validation errors
					}
				} catch (error) {
					console.error('Error:', error);
				}
			});

			// Function to display validation errors in the form
			function displayValidationErrors(errors) {
				// Clear previous errors
				clearValidationErrors();

				// Iterate over errors and display them in the form
				for (const field in errors) {
					if (errors.hasOwnProperty(field)) {
						const errorMessage = errors[field][0];

						// Find the input or select element by name
						const inputElement = document.querySelector(`[name=${field}]`);
						
						if (inputElement) {
							inputElement.classList.add('is-invalid');  // Add invalid class

							// Display error message next to the field
							const feedbackElement = inputElement.nextElementSibling;
							if (feedbackElement) {
								feedbackElement.textContent = errorMessage;  // Set error message
							}
						}
					}
				}
			}

			// Function to clear validation errors
			function clearValidationErrors() {
				const inputs = document.querySelectorAll('.form-control');
				inputs.forEach(input => {
					input.classList.remove('is-invalid');  // Remove invalid class
					const feedbackElement = input.nextElementSibling;
					if (feedbackElement) {
						feedbackElement.textContent = '';  // Clear error message
					}
				});
			}
		});*/


</script>

</body>
</html> 