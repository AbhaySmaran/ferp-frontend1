$(document).ready(function(){
	
		
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
	
		
		
		function handleNavigate() {
			
			window.location.href = 'profileupdate.php'; 
		}
		
		document.getElementById('profile').addEventListener('click', handleNavigate);

		

		// Load user profile data
		$.ajax({
			url: `${baseUrl}/auth/user/profile/`,
			type: 'GET',
			headers: {
				'Authorization': `Bearer ${access}` // Include the token
			},
			success: function(response) {
				console.log('User profile fetched:', response); // Debug log for profile data
				let imageUrl;
				if(response.dp_image != null) {
					imageUrl = `${baseUrl}${response.dp_image}`;
				} else {
					imageUrl = "./assets/images/default/default1.jpg";
				}
				$('#user-dp').attr('src', imageUrl);
				$('#user-name').text(response.first_name);
			},
			error: function() {
				alert('Failed to load user data');
			}
		});
	});
	