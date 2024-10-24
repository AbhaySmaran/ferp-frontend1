<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="./assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
</head>
<body>
<!--<script src="./assets/js/preloader.js"></script>-->
<script>
	
</script>
  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  <form id="loginForm">
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="email" name="email" type="text" required>
							<div class="invalid-feedback" id="emailError"></div>
                            <div class="mdc-line-ripple"></div>
                            <label for="email" class="mdc-floating-label">Username</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="password" name="password" type="password" required>
							<div class="invalid-feedback" id="passwordError"></div>
                            <div class="mdc-line-ripple"></div>
                            <label for="password" class="mdc-floating-label">Password</label>
                          </div>
                        </div>
						
						<!--MDC form-->
						<!--<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="email" name="email" type="text" required>
							<div class="invalid-feedback" id="emailError"></div>
                            <div class="mdc-line-ripple"></div>
                            <label for="email" class="mdc-floating-label">Username</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="password" name="password" type="password" required>
							<div class="invalid-feedback" id="passwordError"></div>
                            <div class="mdc-line-ripple"></div>
                            <label for="password" class="mdc-floating-label">Password</label>
                          </div>
                        </div>-->
						
						
						 <!--<div className="form-group">
							<label htmlFor="email">Email</label>
							<input
							  type="email"
							  class="form-control"
							  id="email"
							  name="email"
							  
							/>
							<div className= "invalid-feedback">
							
							</div>
						  </div>

						  <div className="form-group">
							<label htmlFor="password">Password</label>
							<input
							  type="password"
							  class="form-control"
							  id="password"
							  name="password"
							  
							/>
							<div className= "invalid-feedback">
							
							</div>
						  </div>-->
						
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                              <input type="checkbox"
                                      class="mdc-checkbox__native-control"
                                      id="checkbox-1"/>
                              <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark"
                                      viewBox="0 0 24 24">
                                  <path class="mdc-checkbox__checkmark-path"
                                        fill="none"
                                        d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                              </div>
                            </div>
                            <label for="checkbox-1">Remember me</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                          <a href="#">Forgot Password</a>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <button type="submit" class="mdc-button mdc-button--raised w-100">
                            Login
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
  
  <!-- plugins:js -->
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- inject:js -->
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <!-- jQuery (required for AJAX) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./static/index.js"></script> 
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	  $(document).ready(function() {
		// Handle form submission
		$("#loginForm").on("submit", function(e) {
		  e.preventDefault(); // Prevent default form submission

		  // Get input values
		  const email = $("#email").val();
		  const password = $("#password").val();

		  // jQuery AJAX POST request
		  $.ajax({
			url: "http://localhost:8000/api/user/login/", // API login URL
			type: "POST",
			contentType: "application/json",
			data: JSON.stringify({
			  email: email,
			  password: password
			}),
			success: function(response) {
			  // Handle successful login
			  alert(response.message); // Display success message
			  localStorage.setItem("access_token", response.tokens.access);
			  localStorage.setItem("refresh_token", response.tokens.refresh);
			  
			  // Dynamically load dashboard content instead of redirecting
			  loadDashboardContent();
			},
			error: function(xhr, status, error) {
			  // Handle error
			  const errorMsg = xhr.responseJSON ? xhr.responseJSON.errors.error[0] : "Login failed.";
			  alert(errorMsg);
			}
		  });
		});
		
		// Function to load dashboard content dynamically
		function loadDashboardContent() {
		  $.ajax({
			url: "dashboard.php",  // Dashboard content file
			type: "GET",
			success: function(data) {
			  // Inject dashboard content into the 'content' div
			  $("#content").php(data);
			},
			error: function(xhr, status, error) {
			  console.error("Error loading dashboard:", error);
			}
		  });
		}
	  });
	</script> --!>
	<!--<script>
	  $(document).ready(function() {
		// Function to get CSRF token from cookies
		function getCookie(name) {
		  let cookieValue = null;
		  if (document.cookie && document.cookie !== '') {
			const cookies = document.cookie.split(';');
			for (let i = 0; i < cookies.length; i++) {
			  const cookie = cookies[i].trim();
			  if (cookie.substring(0, name.length + 1) === (name + '=')) {
				cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
				break;
			  }
			}
		  }
		  return cookieValue;
		}

		// Setup AJAX to always include the CSRF token
		$.ajaxSetup({
		  beforeSend: function(xhr, settings) {
			xhr.setRequestHeader("X-CSRFToken", getCookie('csrftoken')); // Get the latest CSRF token
		  }
		});

		// Login form submit event handler
		$("#loginForm").on("submit", function(e) {
		  e.preventDefault(); // Prevent default form submission

		  const email = $("#email").val();
		  const password = $("#password").val();

		  // Perform the AJAX request to login
		  $.ajax({
			url: "http://localhost:8000/api/user/login/", // Your API login URL
			type: "POST",
			contentType: "application/json",
			data: JSON.stringify({ email: email, password: password }), // Send email and password in JSON format
			success: function(response) {
			  alert(response.message); // Display success message
			  window.location.href = "dashboard.php"; // Redirect to dashboard on success
			},
			error: function(xhr) {
			  const errorMsg = xhr.responseJSON && xhr.responseJSON.errors
				? xhr.responseJSON.errors.error[0]
				: "Login failed. Please try again."; // Default error message
			  alert(errorMsg);
			}
		  });
		});
	  });
	</script>--!>

</body>
</html>
