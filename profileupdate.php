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
  <div class="body-wrapper">
    
	<?php include 'components/sidebar.php'; ?>
   
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<!--<div class="profile-edit">
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
				</di
			</div>-->

			<div class="row">
				<div class="col-md-3">
					<img src="" alt="Profile Picture" class="user-dp" id="userDp">
					<br/>
					<button class="btn btn-primary mt-3 btn-edit-user"  data-toggle="modal" data-target="#editUserModal">Edit Profile</button>
					<br />
					<button class="btn btn-primary mt-2 btn-change-password" data-toggle="modal" data-target="#userPasswordModal">Chnage Password</button>
					
				</div>
				<div class="col-md-9">
					<p><strong>Name:</strong> <span id="userName"></span></p>
					<p><strong>Role:</strong> <span id="userRole"></span></p>
					<p><strong>Gender:</strong> <span id="userGender"></span></p>
					<p><b>Department:</b> <span id="userDept"></span></p>
					<p><b>Staff Category:</b> <span id="userStCat"></span></p>
					<p><b>Username:</b> <span id="userUsername"></span></p>
					<p><b>Email:</b> <span id="userEmail"></span></p>
					<p><b>Age:</b> <span id="userAge"></span></p>
					<p><b>Conatact No:</b> <span id="userContact"></span></p>
				</div>

			</div>
			



          
        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        
      </div>
    </div>
  </div>
  
  <!-- Chnage Password Modal -->
    <div class="modal fade" id="userPasswordModal" tabindex="-1" role="dialog" aria-labelledby="userPasswordModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content"> 
				<div class="modal-header">
					<h5 class="modal-title" id="editUserModalLabel">Change Password</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form id="changePasswordForm">
					<div class="modal-body">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><label>Old Password:-</label></div>
								<div class="col-md-9">
									<input type="text" id="oldPassword" class="form-control" />
									<div class="invalid-feedback" id="oldPasswordError"></div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><label>New Password:-</label></div>
								<div class="col-md-9">
									<input type="password" id="newPassword" class="form-control"/>
									<div class="invalid-feedback" id="newPasswordError"></div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"><label>Confirm Password:-</label></div>
								<div class="col-md-9">
									<input type="password" id="confirmPassword" class="form-control"/>
									<div class="invalid-feedback" id="confirmPasswordError"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Change Password</button>
						<button typr= "button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  
  
  <!-- User Profile Edit Modal-->
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
							  <!--<input type="hidden" id="editUserId" name="user_id">-->
							  
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
											<div class="invalid-feedback" id='editUserEmailError'></div>
										</div>										
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserAge">Username:</label></div>
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
										<div class="col-md-3"><label for="editUserDept">Department:</label></div>
										<div class="col-md-9">
											<select
												type="text"
												id = "editUserDept"
												class = "form-control"
												name="dept"
											>
												<option id="editUserDept"></option>
												<option value="2">Basic Science</option>
												<option value="3">Computer Science</option>
												<option value="4">Accounts</option>
												<option value="5">HR</option>
											</select>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserPhone">Phone:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserPhone" name="phone"></div>
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
							    <div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserStCat">Staff Category:</label></div>
											<div class="col-md-9">
												<select
													type="text"
													name="st_cat"
													class= "form-control"
													id = "editUserStCat"
												  >
													<option id = "editUserStCat"></option>
													<option value="2">Student</option>
													<option value="3">Faculty Member</option>
													<option value="4">Principal</option>
													<option value="5">Administrator</option>
													<option value="6">Lab Assistant</option>
													<option value="7">Support Staff</option>
												  </select>
											</div>
									  </div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3"><label for="editUserRole">Role:</label></div>
											<div class="col-md-9">
												<select
													type="text"
													name="role"
													class= "form-control"	
													id = "editUserRole"
												  >
													<option id="editUserRole"></option>
													<option value="2">Student</option>
													<option value="3">Faculty</option>
													<option value="4">Management</option>
													<option value="5">Parent</option>
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
										<div class="col-md-3"><label for="editUserGender">Gender:</label></div>
										<div class="col-md-9">
											<select
												type="text"
												id = "editUserGender"
												class = "form-control"
												name="gender"
											>
												<option id="editUserGender"></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserPhone">DOB:</label></div>
										<div class="col-md-9"><input type="date" class="form-control" id="editUserDOB" name="dob"></div>
									  </div>
									</div>
									
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">
						
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
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chartjs/Chart.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- inject:js -->
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
<script>
	$(document).ready(function(){
		const baseUrl = localStorage.getItem('url');
		const access_token = localStorage.getItem('access_token')
		getUser();
		
		function getUser(){
			$.ajax({
				url: `${baseUrl}/auth/user/profile/`,
				type: 'GET',
				headers: {
					"Authorization" : `Bearer ${access_token}`
				},
				success: function(user){
					//console.log(data)
					
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
					
					
					$('#userDp').attr('src', imageUrl);
					$('#userRole').text(user.role.role);
					$('#userGender').text(user.gender);
					$('#userName').text(full_name);
					$('#userDept').text(user.dept.dept_name);
					$('#userStCat').text(user.st_cat.st_cat_name);
					$('#userUsername').text(user.username);
					$('#userEmail').text(user.email);
					$('#userAge').text(user.age);
					$('#userContact').text(user.phone);
				},
				error: function(err){
					console.log(err)
				}
			});
		}
		
		$('#changePasswordForm').submit(function(e){
			e.preventDefault();
			
			const formData = new FormData();
			
			const oldPassword = $('#oldPassword').val();
			const newPassword = $('#newPassword').val();
			const confirmPassword = $('#confirmPassword').val();
			
			if(oldPassword) formData.append('old_password', oldPassword);
			if(newPassword) formData.append('new_password', newPassword);
			if(confirmPassword) formData.append('confirm_password', confirmPassword);
			
			if(window.confirm('Sure to change password?')){
				$.ajax({
					url: `${baseUrl}/auth/user/change-password/`,
					type: 'PUT',
					headers: {
						"Authorization" : `Bearer ${access_token}`
					},
					data: formData,
					processData: false,
					contentType: false,
					success: function(data){
						console.log(data)
						$('#userPasswordModal').modal('hide')
						$('#changePasswordForm')[0].reset();
						
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');		

						
					},
					error: function(err){
						
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						const errors = err.responseJSON;
						
						if(errors.old_password){
							$('#oldPassword').addClass('is-invalid')
							$('#oldPasswordError').text(errors.old_password[0])
						}
						
						if(errors.new_password){
							$('#newPassword').addClass('is-invalid')
							$('#newPasswordError').text(errors.new_password[0])
						}
						
						if(errors.confirm_password){
							$('#confirmPassword').addClass('is-invalid')
							$('#confirmPasswordError').text(errors.confirm_password[0])
						}
						
						if(errors.non_field_errors){
							$('#newPassword').addClass('is-invalid');
							$('#newPasswordError').text(errors.non_field_errors[0])
						}
					}

				})
			}
		})
		
		$(document).on('click', '.btn-edit-user', function() {
		  
			$.ajax({
				url: `${baseUrl}/auth/user/profile/`,  // Use the API endpoint for the user
				type: 'GET',
				headers:{
					"Authorization": `Bearer ${access_token}`
				},
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					
					$('#editUserDpImage').attr('src', imageUrl);
					$('#editUserId').val(user.id);  // Populate form fields with fetched data
					$('#editUserUsername').val(user.username);
					$('#editUserFirstName').val(user.first_name);
					$('#editUserLastName').val(user.last_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.phone);
					$('#editUserAge').val(user.age);
					$('#editUserDOB').val(user.dob);
					$('#editUserStCat').val(user.st_cat.st_cat_id);
					$('#editUserDept').val(user.dept.dept_id);
					$('#editUserRole').val(user.role.role_id);
					$('#editUserRoleId').val(user.role.role_id);
					
					$('#editUserGender').val(user.gender);
					
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
			if(formData.st_cat) formData.append('st_cat', $('#editUserStCat').val());
			if(formData.role) formData.append('role', $('#editUserRole').val());
			if(formData.dept) formData.append('dept', $('#editUserDept').val());
			
			//formData.append('dept', $('#editUserDept').val());
			formData.append('gender', $('#editUserGender').val());
			formData.append('username',$('#editUserUsername').val());
			// Check if the file input exists and if a file has been selected
			const dpInput = $('#editUserDpInput')[0];
			if (dpInput && dpInput.files && dpInput.files.length > 0) {
				const dpImage = dpInput.files[0]; // Get the first file
				formData.append('dp_image', dpImage);
			}

			// Perform the AJAX request
			if(window.confirm("Update user data?")){
				$.ajax({
					url: `${baseUrl}/auth/user/profile/update/`, // Use `id` here for endpoint
					type: 'PUT',
					headers: {
						"Authorization" : `Bearer ${access_token}`
					},
					data: formData,
					processData: false, // Required for FormData
					contentType: false, // Required for FormData
					success: function(response) {
						
						$('#editUserModal').modal('hide');
						$('#editUserForm')[0].reset();
        
						// Remove any error classes and messages
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						//location.reload(); // Refresh user table or user data
						//displayTableData();
						getUser();
					},
					error: function(err) {
						// Remove previous error states
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						const errors = err.responseJSON;

						// Show errors for each field
						if (errors.name) {
						  $('#editUserName').addClass('is-invalid');
						  $('#editUserNameError').text(errors.name[0]);
						}
						
						if (errors.email) {
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
	})
</script>
</script>
</body>
</html> 