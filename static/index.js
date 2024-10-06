$(document).ready(function() {
      // Handle form submission
      $("#loginForm").on("submit", function(e) {
        e.preventDefault(); // Prevent default form submission

        // Get input values
        const email = $("#email").val();
        const password = $("#password").val();
		const baseUrl = "http://localhost:8000"
		localStorage.setItem("url", baseUrl)
        // jQuery AJAX POST request
        $.ajax({
		url: `${baseUrl}/auth/user/login/`, // API login URL
          type: "POST",
          contentType: "application/json",
          data: JSON.stringify({
            email: email,
            password: password
          }),
          success: function(response) {
            // Handle successful login
            //alert(response.message); // Display success message
            localStorage.setItem("access_token", response.tokens.access);
            localStorage.setItem("refresh_token", response.tokens.refresh);
            window.location.href = "dashboard.php"; // Redirect to dashboard
          },
          error: function(xhr, status, error) {
            // Handle error
            const errorMsg = xhr.responseJSON ? xhr.responseJSON.errors.error[0] : "Login failed.";
            alert(errorMsg);
          }
        });
      });
    });
	
	/*<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
	</script>*/