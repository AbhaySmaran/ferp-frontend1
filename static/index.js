$(document).ready(function() {
      // Handle form submission
      $("#loginForm").on("submit", function(e) {
        e.preventDefault(); // Prevent default form submission
		
		const baseUrl = "http://localhost:8000"
		localStorage.setItem("url", baseUrl)

        // Get input values
        const email = $("#email").val();
        const password = $("#password").val();
		
		const formData = new FormData();
		
		if(email) formData.append("email", email);
		if(password) formData.append("password", password);
		
        // jQuery AJAX POST request
        $.ajax({
		  url: `${baseUrl}/auth/user/login/`, // API login URL
          type: "POST",
         /* contentType: "application/json",
          data: JSON.stringify({
            email: email,
            password: password
          }),*/
		  data: formData,
		  processData: false,
		  contentType: false,
          success: function(response) {
            // Handle successful login
            //alert(response.message); // Display success message
            localStorage.setItem("access_token", response.tokens.access);
            localStorage.setItem("refresh_token", response.tokens.refresh);
            window.location.href = "dashboard.php"; // Redirect to dashboard
          },
          
		  error: function(err){
			  $('.form-control').removeClass('is-invalid');
			  $('.invalid-feedback').text('');
			  
			  errors = err.responseJSON;
			  console.log(errors);
			  if(errors.email){
				  $('#email').addClass('is-invalid');
				  $('#emailError').text(errors.email);
				  console.log("e",errors.email[0])
				  alert(errors.email[0])
			  }
			  
			  if(errors.password){
				  $('password').addClass('is-invalid');
				  $('#passwordError').text(errors.passsword[0]);
				  console.log("p",errors.password)
			  }
			  
		  }
        });
      });
    });
	
	