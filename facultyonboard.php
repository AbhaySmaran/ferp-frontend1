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
  
  
 

 
  
</head>
<body>


<!--<script src="./assets/js/preloader.js"></script>-->

  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.php -->
	<?php include 'components/sidebar.php'; ?>
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			
		
			<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <i class="material-icons mdc-text-field__icon">search</i>
              <input class="mdc-text-field__input" id="search-bar" type="text" placeholder="Search for students...">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                  <label for="text-field-hero-input" class="mdc-floating-label" >Search..</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
			<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
				  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
					<div class="mdc-card p-0">
					  <p class="card-title card-padding pb-0"><b>Faculty Information </b></p>
					  <div class="table-responsive">
						<table id="data-table" class="table">
							<thead class = "thead">
								<tr>
									<th class='text-left'>User Id</th>
										<th class="text-left">Name</th>
										<th class="text-left">Email</th>
										<th class="text-center">Actions</th>
									</tr>
							</thead>
							<tbody>
									
							</tbody>
						</table>
						<!--<button class="btn btn-primary" id="load-more">Load Data</button>-->
					  </div>
					</div>
				  </div>
				</div>
			</div>
			
			<div class="text-center">
				<nav>
					<ul class="pagination justify-content-center" id="pagination">
						<!-- Pagination Items Go Here -->
					</ul>
				</nav>
			</div>
          
        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        
      </div>
    </div>
  </div>
  
					<!--Modals-->
					<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document" >
						<div class="modal-content">
						  <div class="modal-header">
							<p class="modal-title" id="viewUserModalLabel"><b>User Information</b></p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							<!-- Display User Details -->
							<div class='row'>
								
								<div class='col-md-3'>
									<div>
										<img src="" alt="Profile Picture" class="profile-dp" id="viewUserDp">
										<br/>
										<!--<p><strong>User ID:</strong> <span id="viewUserId"></span></p>-->
										<div class="mt-2"><p><strong>Role:</strong> <span id="viewUserRole"></span></p></div>
										<div class="mt-2"><p><strong>Gender:</strong> <span id="viewUserGender"></span></p></div>
										<!--<p><strong>Name:</strong> <span id="viewUserName"></span></p>-->
									</div>
								</div>
								<div class='col-md-9'>
									<div>
										<table class="table table-striped">
											<thead>
												<tr>
													<th class="text-left">User Id</th>
													<th class="text-left">Department</th>
													<th>DOB</th>
													
													<th class="text-right">Phone</th>
												</tr>
											</thead>
											<tbody>
												<td id="viewUserId" class="text-left"></td>
												<td id="viewUserDept" class="text-left"></td>
												<td id="viewUserDOB"></td>
												<td id="viewUserName"></td>
												
												
											</tbody>
											<thead>
												<tr>
													
													<th class="text-left">Name</th>
													<th class="text-left">Email</th>
													<th>Staff-Category</th>
													<th>Age</th>
												</tr>
											</thead>
											<tbody>
												<td id="viewUserPhone" class="text-left"></td>
												<td id="viewUserEmail" class="text-left"></td>
												<td id="viewUserStCat"></td>
												<td id="viewUserAge"></td>
											</tbody>
											
										</table>
										
									</div>
									
								</div>
							</div>
							<!-- Add more fields as needed -->
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>

					<!-- Edit User Modal -->
					<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <form id="editUserForm">
						  
						  
							<div class="modal-body">
							  <!-- Editable User Details -->
							  <input type="hidden" id="editUserId" name="user_id">
							  
							  <div class="dp-container">
							  <div class="row">
							  <div class="col-md-6">
								<img src="" alt="Profile Picture" class="profile-dp" id="editUserDpImage" >
							  </div>
								<!--<button></button>-->
								<br />
							  <div class="col-md-6">
								<div class="row">
									<div class='col-md-3'><label for="editUserDp">Change DP:</label></div>
									<div class='col-md-9'><input type="file" class="form-control" id="editUserDpInput" name="dp_image" accept="image/*"></div>

								</div>
							  </div>	
							  </div>
							  </div>
                             
							  <div class="form-group">
								<div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserFirstName">First Name:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserFirstName" name="firstname"></div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserLastName">Last Name:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserLastName" name="lastname"></div>
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class = "col-md-3"><label for="editUserEmail">Email:</label></div>
										<div class="col-md-9">
											<input type="email" class="form-control" id="editUserEmail" name="email">
											<div class="invalid-feedback" id="editUserEmailError"></div>
										</div>										
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class = "col-md-3"><label for="editUserUsername">Username:</label></div>
										<div class="col-md-9">
											<input type="text" class="form-control" id="editUserUsername" name="username">
											<div class="invalid-feedback" id="editUserUsernameError"></div>
										</div>										
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">
									
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserPhone">Phone:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserPhone" name="phone"></div>
									  </div>
									</div>
									
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserGender">Gender:</label></div>
										<div class="col-md-9">
											<select
												type = "text"
												class = "form-control"
												id = "editUserGender"
												name = "gender"
											>
												<option id = "editUserGender"><option>
												<option value="Male">Male<option>
												<option value="Female">Female<option>
											</select>
										</div>
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">
									
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserPhone">DOB:</label></div>
										<div class="col-md-9"><input type="date" class="form-control" id="editUserDOB" name="dob"></div>
									  </div>									  
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserAge">Age:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserAge" name="age"></div>
									  </div>
									</div>
								</div>
							  </div>
                              

							  <!-- Add more fields as necessary -->
							</div>
							<div class="modal-footer">
							  <button type="submit" class="btn btn-primary">Save Changes</button>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							  
							</div>
						  </form>
						</div>
					  </div>
					</div>
  
  <!-- plugins:js -->
  
  <!-- endinject -->
  <!-- Custom js for this page-->
  
  <!-- End custom js for this page-->
   <!--plugins-->
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chartjs/Chart.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
  
<script>
	$(document).ready(function() {
		console.log('Document is ready.');

		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
		const limit = 5;  // Number of items per page
		let allUsers = []; 
		let currentPage = 1; // Track the current page
		
		loadFaculties();

		// Fetch all users
		function loadFaculties(){
			$.ajax({
				url: `${baseUrl}/api/faculty/`,
				type: 'GET',
				success: function(data) {
					console.log('Data received from API:', data);
					allUsers = data; 
					displayTableData();
					setupPagination(); // Call pagination after fetching data
				},
				error: function(err) {
					console.log('Error fetching data:', err);
				}
			});
		}

		// Function to display the table data
		function displayTableData() {
			let start = (currentPage - 1) * limit;
			let end = start + limit;
			let paginatedData = allUsers.slice(start, end);

			const tableBody = $('#data-table tbody');
			tableBody.empty(); // Clear the table before adding new data

			paginatedData.forEach(item => {
				tableBody.append(`
					<tr id="row-${item.id}">
						<td class="text-left">${item.id}</td>
						<td class="text-left">${item.first_name}</td>
						<td class="text-left">${item.email}</td>
						<td class="text-center">
							<button class='btn btn-light btn-view-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
								<i class="fa-solid fa-eye"></i> View
							</button>
							<button class='btn btn-light btn-edit-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
								<i class="fa-solid fa-pen-to-square"></i> Edit
							</button>
							<button class='btn btn-light btn-reset-password' style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-id="${item.id}">
								<i class="fa-solid fa-key"></i> Reset Password
							</button>
						</td>
					</tr>
				`);
			});
		}

		// Function to handle pagination setup
		function setupPagination() {
			const totalPages = Math.ceil(allUsers.length / limit);
			const pagination = $('#pagination');
			pagination.empty();

			for (let i = 1; i <= totalPages; i++) {
				pagination.append(`
					<li class="page-item ${i === currentPage ? 'active' : ''}">
						<a href="#" class="page-link" data-page="${i}">${i}</a>
					</li>
				`);
			}

			// Click event for pagination links
			$(".page-link").off('click').on('click', function(e) {
				e.preventDefault();
				currentPage = parseInt($(this).attr('data-page'));
				displayTableData();
				setupPagination(); // Update pagination active state
			});
		}
		
		$('#view').on('shown.bs.modal', function () {
		  $('#myInput').trigger('focus')
		})
		
		
		
		$('#data-table').on('click', '.btn-view-user', function() {
			const userId = $(this).data('id');  // This fetches the correct user ID
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					//let full_name = user.first_name, user.last_name;
					let lastName;
					if(user.last_name == null){
						lastName = "";
					}else{
						lastName = `${user.last_name}`;
					}
					const full_name = `${user.first_name} ${lastName}`;
					$('#viewUserDp').attr('src', imageUrl);
					$('#viewUserId').text(user.user_id);
					$('#viewUserName').text(full_name);
					$('#viewUserEmail').text(user.email);
					$('#viewUserPhone').text(user.phone);
					$('#viewUserAge').text(user.age);
					$('#viewUserDOB').text(user.dob);
					$('#viewUserAddress').text(user.address);
					$('#viewUserRole').text(user.role.role);
					$('#viewUserStCat').text(user.st_cat.st_cat_name);
					$('#viewUserDept').text(user.dept.dept_name);
					$('#viewUserGender').text(user.gender);

					$('#viewUserModal').modal('show');  // Show the modal after fetching data
				},
				error: function(err) {
					console.error('Error fetching user details:', err);  // Log error if fetching fails
				}
			});
		});
		
		$('#data-table').on('click', '.btn-edit-user', function() {
			const userId = $(this).data('id');  // Fetch user ID from the data attribute
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,  // Use the API endpoint for the user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					
					$('#editUserDpImage').attr('src', imageUrl);
					$('#editUserId').val(user.id);  // Populate form fields with fetched data
					$('#editUserFirstName').val(user.first_name);
					$('#editUserLastName').val(user.last_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.phone);
					$('#editUserAge').val(user.age);
					$('#editUserDOB').val(user.dob);
					$('#editUserGender').val(user.gender);
					$('#editUserUsername').val(user.username);

					$('#editUserModal').modal('show');  // Show the modal after populating the data
				},
				error: function(err) {
					console.error('Error fetching user details for edit:', err);  // Log error if fetching fails
				}
			});
		});
		
		$('#editUserForm').submit(function(e) {
			e.preventDefault();
			
			const userId = $('#editUserId').val(); // Use the `id` instead of `user_id`
			
			// Create a FormData object to handle the form data (including potential file uploads)
			const formData = new FormData();
			formData.append('first_name', $('#editUserFirstName').val());
			formData.append('last_name', $('#editUserLastName').val());
			formData.append('email', $('#editUserEmail').val());
			formData.append('phone', $('#editUserPhone').val());
			formData.append('age', $('#editUserAge').val());
			formData.append('dob', $('#editUserDOB').val());
			formData.append('gender',$('#editUserGender').val());
			formData.append('username', $('#editUserUsername').val());
			
			// Check if the file input exists and if a file has been selected
			const dpInput = $('#editUserDpInput')[0];
			if (dpInput && dpInput.files && dpInput.files.length > 0) {
				const dpImage = dpInput.files[0]; // Get the first file
				formData.append('dp_image', dpImage);
			}

			// Perform the AJAX request
			if(window.confirm("Update faculty data?")){
				$.ajax({
					url: `${baseUrl}/api/update/users/${userId}/`, // Use `id` here for endpoint
					type: 'PUT',
					data: formData,
					processData: false, // Required for FormData
					contentType: false, // Required for FormData
					success: function(response) {
						alert('User updated successfully.');
						$('#editUserModal').modal('hide');
						
						$('#editUserForm')[0].reset();
        
						// Remove any error classes and messages
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						location.reload(); // Refresh user table or user data
					},
					error: function(err) {
						//console.error('Error updating user:', err);
						//alert('Failed to update user. Please check the console for more details.');
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						const errors = err.responseJSON;
						
						if(errors.email){
							$('#editUserEmail').addClass('is-invalid');
							$('#editUserEmailError').text(errors.email[0]);
						}
						
						if(errors.username){
							$('#editUserUsername').addClass('is-invalid');
							$('#editUserUsernameError').text(errors.username[0]);
						}
					}
				});
			}
		});


		
		/*$('#editUserForm').submit(function(e) {
			e.preventDefault();
			const userId = $('#editUserId').val(); // Use the `id` instead of `user_id`
			const updatedData = {
				first_name: $('#editUserName').val(),
				email: $('#editUserEmail').val(),
				phone: $('#editUserPhone').val(),
				age: $('#editUserAge').val(),
				dob: $('#editUserDOB').val(),
				//dp_image: $('#editUserDp').val(),
			};

			// Update user info via API using `id`
			$.ajax({
				url: `${baseUrl}/api/users/${userId}/`, // Use `id` here for endpoint, like 10/ or 19/
				type: 'PUT',
				contentType: 'multipart/form-data',
				data: JSON.stringify(updatedData),
				success: function() {
					alert('User updated successfully.');
					$('#editUserModal').modal('hide');
					location.reload(); // Refresh user table or user data
				},
				error: function(err) {
					console.error('Error updating user:', err);
				}
			});
		});*/




		

		// Reset Password
		$(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					url: `${baseUrl}/api/update/users/${userId}/`,
					type: 'PUT',
					data: { reset_password: true },
					success: function(response) {
						alert('Password reset successfully to DD-MM-YY format of current date.');
					},
					error: function(err) {
						console.log('Error resetting password:', err);
					}
				});
			}
		});
		
		$('#search-bar').on('keyup', function() {
			const value = $(this).val().toLowerCase();
			$('#data-table tbody tr').filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		  });
		
	});

</script>
<!--<script>
	$(document).ready(function() {
		console.log('Document is ready.'); // Debug log for document ready
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
		
		const limit = 5; 
		let allUsers = []; 
		let displayedUsers = 0; 

		// Fetch all users
		$.ajax({
			url: `${baseUrl}/api/faculty/`,
			type: 'GET',
			success: function(data) {
				console.log('Data received from API:', data); // Debug log for API data
				allUsers = data; // If data has a 'results' property, use data.results
				loadMoreUsers(); // Load the first batch of users
			},
			error: function(err) {
				console.log('Error fetching data:', err); // Debug log for error
			}
		});

		// Function to load more users
		function loadMoreUsers() {
			console.log('Loading more users:', displayedUsers); // Debug log for current count
			const nextUsers = allUsers.slice(displayedUsers, displayedUsers + limit);
			console.log('Next users to be displayed:', nextUsers); // Debug log for next batch

			nextUsers.forEach(item => {
				// Avoid appending duplicate rows
				if (!$(`#row-${item.user_id}`).length) {
					console.log('Appending user:', item); // Debug log for appending user
					$('#data-table tbody').append(`
						<tr id="row-${item.user_id}">
							<td class="text-left">${item.user_id}</td>
							<td class="text-left">${item.first_name}</td>
							<td class="text-left">${item.email}</td>
							<td class="text-center">
								<button class='btn btn-light btn-view-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
									<i class="fa-solid fa-eye"></i> View
								</button>
								<button class='btn btn-light btn-edit-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
									<i class="fa-solid fa-pen-to-square"></i> Edit
								</button>
								<button class='btn btn-light btn-reset-password' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
									<i class="fa-solid fa-key"></i> Reset Password
								</button>
							</td>
						</tr>
					`);
				} else {
					console.log('User already exists in table:', item); // Debug log for duplicates
				}
			});

			displayedUsers += nextUsers.length;
			console.log('Updated displayedUsers count:', displayedUsers); // Debug log for displayed users

			// Hide the "Load More" button if all users are displayed
			if (displayedUsers >= allUsers.length) {
				console.log('All users loaded, hiding Load More button.'); // Debug log for hiding button
				$('#load-more').hide();
			}
		}

		// Load more items when the "Load More" button is clicked
		$('#load-more').off('click').on('click', function() {
			console.log('Load More button clicked.'); // Debug log for button click
			loadMoreUsers();
		});
		
		
		$('#view').on('shown.bs.modal', function () {
		  $('#myInput').trigger('focus')
		})
		
		
		
		$('#data-table').on('click', '.btn-view-user', function() {
			const userId = $(this).data('id');  // This fetches the correct user ID
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					//let full_name = user.first_name, user.last_name;
					let lastName;
					if(user.last_name == null){
						lastName = "";
					}else{
						lastName = `${user.last_name}`;
					}
					const full_name = `${user.first_name} ${lastName}`;
					$('#viewUserDp').attr('src', imageUrl);
					$('#viewUserId').text(user.user_id);
					$('#viewUserName').text(full_name);
					$('#viewUserEmail').text(user.email);
					$('#viewUserPhone').text(user.phone);
					$('#viewUserAge').text(user.age);
					$('#viewUserDOB').text(user.dob);
					$('#viewUserAddress').text(user.address);
					$('#viewUserRole').text(user.role.role);
					$('#viewUserStCat').text(user.st_cat.st_cat_name);
					$('#viewUserDept').text(user.dept.dept_name);
					$('#viewUserGender').text(user.gender);

					$('#viewUserModal').modal('show');  // Show the modal after fetching data
				},
				error: function(err) {
					console.error('Error fetching user details:', err);  // Log error if fetching fails
				}
			});
		});
		
		$('#data-table').on('click', '.btn-edit-user', function() {
			const userId = $(this).data('id');  // Fetch user ID from the data attribute
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,  // Use the API endpoint for the user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					
					$('#editUserDpImage').attr('src', imageUrl);
					$('#editUserId').val(user.id);  // Populate form fields with fetched data
					$('#editUserFirstName').val(user.first_name);
					$('#editUserLastName').val(user.last_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.phone);
					$('#editUserAge').val(user.age);
					$('#editUserDOB').val(user.dob);
					$('#editUserGender').val(user.gender);
					$('#editUserUsername').val(user.username);

					$('#editUserModal').modal('show');  // Show the modal after populating the data
				},
				error: function(err) {
					console.error('Error fetching user details for edit:', err);  // Log error if fetching fails
				}
			});
		});
		
		$('#editUserForm').submit(function(e) {
			e.preventDefault();
			
			const userId = $('#editUserId').val(); // Use the `id` instead of `user_id`
			
			// Create a FormData object to handle the form data (including potential file uploads)
			const formData = new FormData();
			formData.append('first_name', $('#editUserFirstName').val());
			formData.append('last_name', $('#editUserLastName').val());
			formData.append('email', $('#editUserEmail').val());
			formData.append('phone', $('#editUserPhone').val());
			formData.append('age', $('#editUserAge').val());
			formData.append('dob', $('#editUserDOB').val());
			formData.append('gender',$('#editUserGender').val());
			formData.append('username', $('#editUserUsername').val());
			
			// Check if the file input exists and if a file has been selected
			const dpInput = $('#editUserDpInput')[0];
			if (dpInput && dpInput.files && dpInput.files.length > 0) {
				const dpImage = dpInput.files[0]; // Get the first file
				formData.append('dp_image', dpImage);
			}

			// Perform the AJAX request
			if(window.confirm("Update faculty data?")){
				$.ajax({
					url: `${baseUrl}/api/update/users/${userId}/`, // Use `id` here for endpoint
					type: 'PUT',
					data: formData,
					processData: false, // Required for FormData
					contentType: false, // Required for FormData
					success: function(response) {
						alert('User updated successfully.');
						$('#editUserModal').modal('hide');
						
						$('#editUserForm')[0].reset();
        
						// Remove any error classes and messages
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						location.reload(); // Refresh user table or user data
					},
					error: function(err) {
						//console.error('Error updating user:', err);
						//alert('Failed to update user. Please check the console for more details.');
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						const errors = err.responseJSON;
						
						if(errors.email){
							$('#editUserEmail').addClass('is-invalid');
							$('#editUserEmailError').text(errors.email[0]);
						}
						
						if(errors.username){
							$('#editUserUsername').addClass('is-invalid');
							$('#editUserUsernameError').text(errors.username[0]);
						}
					}
				});
			}
		});


		
		/*$('#editUserForm').submit(function(e) {
			e.preventDefault();
			const userId = $('#editUserId').val(); // Use the `id` instead of `user_id`
			const updatedData = {
				first_name: $('#editUserName').val(),
				email: $('#editUserEmail').val(),
				phone: $('#editUserPhone').val(),
				age: $('#editUserAge').val(),
				dob: $('#editUserDOB').val(),
				//dp_image: $('#editUserDp').val(),
			};

			// Update user info via API using `id`
			$.ajax({
				url: `${baseUrl}/api/users/${userId}/`, // Use `id` here for endpoint, like 10/ or 19/
				type: 'PUT',
				contentType: 'multipart/form-data',
				data: JSON.stringify(updatedData),
				success: function() {
					alert('User updated successfully.');
					$('#editUserModal').modal('hide');
					location.reload(); // Refresh user table or user data
				},
				error: function(err) {
					console.error('Error updating user:', err);
				}
			});
		});*/




		

		// Reset Password
		$(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					url: `${baseUrl}/api/update/users/${userId}/`,
					type: 'PUT',
					data: { reset_password: true },
					success: function(response) {
						alert('Password reset successfully to DD-MM-YY format of current date.');
					},
					error: function(err) {
						console.log('Error resetting password:', err);
					}
				});
			}
		});
		
		$('#search-bar').on('keyup', function() {
			const value = $(this).val().toLowerCase();
			$('#data-table tbody tr').filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		  });
		
	});
</script>-->
</body>
</html> 