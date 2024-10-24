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
  <link rel="stylesheet" href="./assets/css/demo/profile.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
</head>
<body>
<script></script>
<script src="./assets/js/preloader.js"></script>
  <div class="body-wrapper">
    
	<?php include 'components/sidebar.php'; ?>
   
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<div class="profile-edit">
				<div class="dp-container">
					<img src="./assets/images/faces/face1.jpg" alt="Profile" class="profile-dp" id="profile-dp">
					<button class="change-dp-btn" id="change-dp-btn">Change DP</button>
				</div>

				<div class="password-change">
					<h2>Change Password</h2>
					<input type="password" id="new-password" placeholder="New Password">
					<button class="save-password-btn" id="save-password-btn">Save Password</button>
				</div>

				<div class="edit-details">
					<h2>Change Details</h2>
					<button id="edit-details-btn">Edit Details</button>
				</div>
			</div>

		
			<div class="modal" id="edit-details-modal">
				<div class="modal-content">
					<h2>Edit Details</h2>
					<input type="text" id="name" placeholder="Name">
					<input type="email" id="email" placeholder="Email">
					<input type="text" id="phone" placeholder="Phone">
					<button id="save-details-btn">Save</button>
					<button id="cancel-btn">Cancel</button>
				</div>
			</div> 
			
			<!--<div class="profile-edit">
				<div class="dp-container">
					<img src="path/to/image.jpg" alt="Profile Picture" class="profile-dp">
					<button class="change-dp-btn">Change DP</button>
				</div>-->

				<!--<div class="password-change">
					<h3>Change Password</h3>
					<input type="password" class="password-input" placeholder="New Password">
					<button class="save-password-btn">Save Password</button>
				</div>

				<div class="edit-details">
					<h3>Edit Details</h3>
					<button id="save-details-btn">Save Details</button>
				</div>-->
			</div>

			<!-- Modal for editing details -->
			<div class="modal" id="details-modal">
				<div class="modal-content">
					<span id="cancel-btn" class="close">&times;</span>
					<!-- Form fields for editing details -->
				</div>
			</div>



          
        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        
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
</body>
</html> 