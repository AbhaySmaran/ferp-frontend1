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
            
			<!--<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
				  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
					<div class="mdc-card p-0">
					  <p class="card-title card-padding pb-0"><b>Student Information </b></p>
					  <div class="table-responsive">
						<table id="data-table" class="table">
							<thead class = "thead">
								<tr>
									<th class='text-left'>User Id</th>
										<th class="text-left">Name</th>
										<th class="text-left">Email</th>
										<th>Actions</th>
									</tr>
							</thead>
							<tbody>
									
							</tbody>
						</table>
						<button class="btn btn-primary" id="load-more">Load Data</button>
					  </div>
					</div>
				  </div>
				</div>
			</div>-->
			
			<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
				  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
					<div class="mdc-card p-0">
					  <p class="card-title card-padding pb-0"><b>Student Information </b></p>
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
							<p class="modal-title" id="viewUserModalLabel"><b>Student Information</b></p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							<!-- Display User Details -->
							<div class='row'>
								
								<div class='col-md-2'>
									<div>
										<img src="" alt="Profile Picture" class="profile-dp" id="viewUserDp">
										<br/>
										<!--<p><strong>User ID:</strong> <span id="viewUserId"></span></p>-->
										<div class="mt-2"><p><strong></strong> <span id="viewUserRole"></span></p></div>
										<!--<p><strong>Name:</strong> <span id="viewUserName"></span></p>-->
									</div>
								</div>
								<div class='col-md-10'>
									<div>
										<table class="table table-striped">
											<thead>
												<tr>
													<th class="text-left">User Id</th>
													<th class="text-left">Name</th>
													<th class="text-right">DOB</th>
													<th class="text-right">Roll No</th>
													
												</tr>
											</thead>
											<tbody>
												<td id="viewUserId" class="text-left"></td>
												<td id="viewUserName" class="text-left"></td>
										
												<td id="viewUserDOB" class="text-right"></td>
												<td id="viewUserRollNo" class="text-right"></td>
												
												
											</tbody>
											<thead>
												<tr>
													<th class="text-left">Phone</th>
													<th class="text-left">Email</th>
													
													<th class="text-right">Age</th>
													
													<th class="text-right">Batch</th>
												</tr>
											</thead>
											<tbody>
												<td id="viewUserPhone" class="text-left"></td>
												<td id="viewUserEmail" class="text-left"></td>
												<td id="viewUserAge" class="text-right"></td>
												<td id="viewUserBatch" class="text-right"></td>
											</tbody>
											<thead>
												<tr>
													<th class="text-left">Institute</th>
													
													<th class="text-left">Board</th>
													<th class="text-right">Year Of Passing</th>
													<th class="text-right">Total Marks</th>
													
												</tr>
											</thead>
											<tbody>
												
												<td id="viewInstitute" class="text-left"></td>
												<td id="viewUserBoard" class="text-left"></td>
												<td id="viewUserPassingYear" class="text-right"></td>
												<td id="viewUserTotalMark" class="text-right"></td>
											</tbody>
											<thead>
												<tr>
													<th class="text-left">College</th>
													
													<th class="text-left">Hostel</th>
													<th >Status</th>
													<th class="text-right">Secured Marks</th>
													
												</tr>
											</thead>
											<tbody>
												
												<td id="viewCollege" class="text-left"></td>
												<td id="viewUserHostel" class="text-left"></td>
												<td id="viewUserStatus"></td>
												<td id="viewUserMark" ></td>
											</tbody>
											<thead>
												<tr>
													<th class="text-left">Course</th>
													
													<th class="text-left">Hostel Name</th>
													<th class="text-right">Blood Group</th>
													<th >CGPA / Percentage</th>
													
												</tr>
											</thead>
											<tbody>
												
												<td id="viewUserCourse" class="text-left"></td>
												<td id="viewUserHostelName" class="text-left"></td>
												<td id="viewUserBloodGroup"></td>
												<td id="viewUserCGPA"></td>
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
					  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
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
								<img src="" alt="Profile Picture" class="profile-dp" id="editUserDpImage">
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
										<div class="col-md-9">
											<input type="text" class="form-control" id="editUserFirstName" name="first_name">
											<div class="invalid-feedback" id="editUserFirstNameError"></div>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserLastName">Last Name:</label></div>
										<div class="col-md-9">
											<input type="text" class="form-control" id="editUserLastName" name="last_name">
											<div class="invalid-feedback" id="editUserLastNameError"></div>
										</div>
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
										<div class="col-md-3"><label for="editUserDOB">DOB:</label></div>
										<div class="col-md-9">
											<input type="date" class="form-control" id="editUserDOB" name="dob">
											
										</div>
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
							  
							  <div class="form-group">
								<div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserCollege">College:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserCollege" name="college"></div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserCourse">Course:</label></div>
										<div class="col-md-9">										
											<select
												type="text"
												class="form-control"
												id = "editUserCourse"
												name = "course"
											>
												<option id="editUserCourse"></option>
												<option value=1>+2 Science</option>
												<option value=2>B.Tech</option>
												<option value=3>MCA</option>
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
										<div class="col-md-3"><label for="editUserBatch">Batch:</label></div>
										<div class="col-md-9">
											<input type="text" class="form-control" id="editUserBatch" name="batch">
											<div class="invalid-feedback" id="editUserBatchError"></div>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserInstitite">Institute:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserInstitute" name="institute"></div>
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserBoard">Board:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserBoard" name="board"></div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserRollNo">Roll No.:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserRollNo" name="institute"></div>
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class = "col-md-3"><label for="editUserCGPA">CGPA or Parcentage:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserCGPA" name="cgpa_or_percentage"></div>										
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserMark">Mark Secured:</label></div>
										<div class="col-md-9"><input type="number" class="form-control" id="editUserMark" name="marks_secured"></div>
									  </div>
									</div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<div class="row">								
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserBloodGroup">Blood Group:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserBloodGroup" name="blood_group"></div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class = "col-md-3"><label for="editUserStatus">Status:</label></div>
										<div class="col-md-9">
											
											<select
												type="text"
												id = "editUserStatus"
												class = "form-control"
												name = "status"
											>
												<option id="editUserStatus"></option>
												<option value = "Active">Active</option>
												<option value = "Inactive">Inactive</option>
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
											<div class="col-md-3">
												<label for="editUserHostel">Hostel:</label>
											</div>
											<div class="col-md-9">
												<select
													id="editUserHostel"
													class="form-control"
													name="hostel"
													onchange="toggleHostelName()"
												>
													<option value="">Select</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<label for="editUserHostelName">Hostel Name:</label>
											</div>
											<div class="col-md-9">
												<input 
													type="text" 
													class="form-control" 
													id="editUserHostelName" 
													name="hostel_name"
													disabled  
												>                                        
											</div>                                        
										</div>
									</div>
								</div>
								
							  </div>
							  
							  <div class="form-group">
								<div class="row">
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserRoom">Room No:</label></div>
										<div class="col-md-9"><input type="text" class="form-control" id="editUserRoom" name="room"></div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="row">
										<div class="col-md-3"><label for="editUserPhone">Phone:</label></div>
										<div class="col-md-9"><input type="number" class="form-control" id="editUserPhone" name="phone"></div>
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
		
		loadStudents();

		// Fetch all users
		function loadStudents(){
			$.ajax({
				url: `${baseUrl}/student/students/list/`,
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
					<tr id="row-${item.student_id}">
						<td class="text-left">${item.user.user_id}</td>
						<td class="text-left">${item.first_name}</td>
						<td class="text-left">${item.email}</td>
						<td class="text-center">
							<button class='btn btn-light btn-view-user' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
								<i class="fa-solid fa-eye"></i> View
							</button>
							<button class='btn btn-light btn-edit-user' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
								<i class="fa-solid fa-pen-to-square"></i> Edit
							</button>
							<button class='btn btn-light btn-reset-password' style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-id="${item.student_id}">
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
				url: `${baseUrl}/student/student/${userId}`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.user.dp_image != null) {
						imageUrl = `${baseUrl}${user.user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					//let full_name = user.first_name, user.last_name;
					let last_name;
					if(user.last_name != null){
						last_name = `${user.last_name}`;
					} else{
						last_name = "";
					}
					const full_name = `${user.first_name} ${last_name}`
					
					$('#viewUserDp').attr('src', imageUrl);
					$('#viewUserId').text(user.user.user_id);
					$('#viewUserName').text(full_name);
					$('#viewUserEmail').text(user.email);
					$('#viewUserPhone').text(user.user.phone);
					$('#viewUserAge').text(user.user.age);
					$('#viewUserDOB').text(user.dob);
					$('#viewUserRollNo').text(user.roll_number);
					$('#viewInstitute').text(user.institute_name);
					$('#viewUserPassingYear').text(user.year_passing);
					$('#viewUserBoard').text(user.board);
					
					$('#viewUserBatch').text(user.batch);
					
					$('#viewCollege').text(user.college);
					$('#viewUserHostel').text(user.hostel);
					$('#viewUserMark').text(user.marks_secured);
					$('#viewUserStatus').text(user.status);
					$('#viewUserCGPA').text(user.cgpa_or_percentage);
					$('#viewUserTotalMark').text(user.total_marks);
					$('#viewUserCourse').text(user.course.course_name);
					$('#viewUserReligion').text(user.religion);
					$('#viewUserBloodGroup').text(user.blood_group);
					$('#viewUserHostelName').text(user.hostel_name);
					
					
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
				url: `${baseUrl}/student/student/${userId}/`,  // Use the API endpoint for the user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.user.dp_image != null) {
						imageUrl = `${baseUrl}${user.user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					
					$('#editUserDpImage').attr('src', imageUrl);
					$('#editUserId').val(user.student_id);  // Populate form fields with fetched data
					$('#editUserFirstName').val(user.first_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.user.phone);
					$('#editUserAge').val(user.user.age);
					$('#editUserDOB').val(user.dob);
					
					$('#editInstitute').val(user.institute_name);
					$('#editUserPassingYear').val(user.year_passing);
					
					$('#editUserBoard').val(user.board);
					
					$('#editUserBatch').val(user.batch);
					
					$('#editUserCollege').val(user.college);
					$('#editUserHostel').val(user.hostel);
					$('#editUserMark').val(user.marks_secured);
					$('#editUserStatus').val(user.status);
					$('#editUserCGPA').val(user.cgpa_or_percentage);
					
					$('#editUserInstitute').val(user.institute_name);
					$('#editUserBloodGroup').val(user.blood_group);
					
					$('#editUserHostelName').val(user.hostel_name);
					$('#editUserCourse').val(user.course.course_id);
					$('#editUserRoom').val(user.room_no);
					
					$('#editUserUsername').val(user.user.username);
					$('#editUserLastName').val(user.last_name)

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
			
			const name = $('#editUserName').val();
			const email = $('#editUserEmail').val();
			const course = document.getElementById('editUserCourse').value;
			const batch = document.getElementById('editUserBatch').value;
			
			if (name) formData.append('first_name', name);
			if (email) formData.append('email', email);
			if (course) formData.append('course', course);
			if (batch) formData.append('batch', batch);
			
			//formData.append('first_name', $('#editUserFirstName').val());
			//formData.append('email', $('#editUserEmail').val());
			formData.append('phone', $('#editUserPhone').val());
			formData.append('age', $('#editUserAge').val());
			formData.append('dob', $('#editUserDOB').val());
			
			formData.append('last_name',$('#editUserLastName').val());
			formData.append('user', $('#editUserUsername').val());
			
			formData.append('board',$('#editUserBoard').val());
			//formData.append('batch',$('#editUserBatch').val());
			formData.append('institute_name',$('#editUserInstitute').val());
			formData.append('college',$('#editUserCollege').val());
			formData.append('marks_secured',$('#editUserMark').val());
			formData.append('status', $('#editUserStatus').val());
			formData.append('blood_group', $('#editUserBloodGroup').val());
			formData.append('cgpa_or_percentage',$('#editUserCGPA').val());
			formData.append('hostel',$('#editUserHostel').val());
			formData.append('hostel_name',$('#editUserHostelName').val());
			//formData.append('course',$('#editUserCourse').val());
			formData.append('room_no', $('#editUserRoom').val());
			formData.append('roll_number', $('#editUserRollNo').val());
			// Check if the file input exists and if a file has been selected
			const dpInput = $('#editUserDpInput')[0];
			if (dpInput && dpInput.files && dpInput.files.length > 0) {
				const dpImage = dpInput.files[0]; // Get the first file
				formData.append('dp_image', dpImage);
			}
			
			if(window.confirm("Update Student Data")){					
			// Perform the AJAX request
				$.ajax({
					url: `${baseUrl}/student/student/update/${userId}/`, // Use `id` here for endpoint
					type: 'PUT',
					data: formData,
					processData: false, // Required for FormData
					contentType: false, // Required for FormData
					success: function(response) {
						//alert('User updated successfully.');
						
						$('#editUserModal').modal('hide');
						$('#editUserForm')[0].reset();
        
						// Remove any error classes and messages
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						// Reload the page to reflect changes (optional)
						//location.reload();
						loadStudents();
					},
					error: function(err) {
						// Remove previous error states
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						const errors = err.responseJSON;

						// Show errors for each field
						if (errors.first_name) {
						  $('#editUserFirstName').addClass('is-invalid');
						  $('#editUserFirstNameError').text(errors.name[0]);
						}
						
						if (errors.email) {
						  $('#editUserEmail').addClass('is-invalid');
						  $('#editUserEmailError').text(errors.email[0]);
						}
						
						if(error.username){
							$('#editUserUsername').addClass('is-ivalid');
							$('#editUserUsernameError').text(errors.username[0]);
						}
						
						if(errors.batch){
							$('#editUserBatch').addClass('is-invalid');
							$('#editUserBatchError').text(errors.batch[0]);
						}

						

						// Add more fields as necessary
					  }
				});
			}
		});


		
		



		

		// Reset Password
		$(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					//url: `${baseUrl}/api/users/${userId}/`,
					url: `${baseUrl}/student/student/update/${userId}/`,
					type: 'PUT',
					data: { reset_password: true },
					success: function(response) {
						alert('Password successfully reset to DDMMYY format of current date.');
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
		  
		/*$('#search-bar').on('keyup', function() {
			const searchTerm = $(this).val().toLowerCase(); // Get the search term
			const filteredUsers = allUsers.filter(user => 
				user.first_name.toLowerCase().includes(searchTerm) || 
				user.email.toLowerCase().includes(searchTerm)
			); // Filter the allUsers array based on the search term
			
			displayUsers(filteredUsers); // Display the filtered users
		});*/
	
	});

</script>

<!--<script>
	function toggleHostelName() {
		const hostelDropdown = document.getElementById("editUserHostel");
		const hostelNameInput = document.getElementById("editUserHostelName");
		const roomInput = document.getElementById("editUserRoom")

		if (hostelDropdown.value === "Yes") {
			hostelNameInput.disabled = false;  // Enable input if "Yes" is selected
			roomInput.disabled = false;
		} else {
			hostelNameInput.value = "";        // Clear input value
			hostelNameInput.disabled = true;   // Disable input if "No" is selected
			roomInput.disabled = true;
		}
	}
	</script>-->
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
			url: `${baseUrl}/student/students/list/`,
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
				if (!$(`#row-${item.student_id}`).length) {
					console.log('Appending user:', item); // Debug log for appending user
					$('#data-table tbody').append(`
						<tr id="row-${item.student_id}">
							<td class="text-left">${item.user.user_id}</td>
							<td class="text-left">${item.first_name}</td>
							<td class="text-left">${item.email}</td>
							<td>
								<button class='btn btn-light btn-view-user' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
									<i class="fa-solid fa-eye"></i> View
								</button>
								<button class='btn btn-light btn-edit-user' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
									<i class="fa-solid fa-pen-to-square"></i> Edit
								</button>
								<button class='btn btn-light btn-reset-password' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
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
				url: `${baseUrl}/student/student/${userId}`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.user.dp_image != null) {
						imageUrl = `${baseUrl}${user.user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					//let full_name = user.first_name, user.last_name;
					let last_name;
					if(user.last_name != null){
						last_name = `${user.last_name}`;
					} else{
						last_name = "";
					}
					const full_name = `${user.first_name} ${last_name}`
					
					$('#viewUserDp').attr('src', imageUrl);
					$('#viewUserId').text(user.user.user_id);
					$('#viewUserName').text(full_name);
					$('#viewUserEmail').text(user.email);
					$('#viewUserPhone').text(user.user.phone);
					$('#viewUserAge').text(user.user.age);
					$('#viewUserDOB').text(user.dob);
					$('#viewUserRollNo').text(user.roll_number);
					$('#viewInstitute').text(user.institute_name);
					$('#viewUserPassingYear').text(user.year_passing);
					$('#viewUserBoard').text(user.board);
					
					$('#viewUserBatch').text(user.batch);
					
					$('#viewCollege').text(user.college);
					$('#viewUserHostel').text(user.hostel);
					$('#viewUserMark').text(user.marks_secured);
					$('#viewUserStatus').text(user.status);
					$('#viewUserCGPA').text(user.cgpa_or_percentage);
					$('#viewUserTotalMark').text(user.total_marks);
					$('#viewUserCourse').text(user.course.course_name);
					$('#viewUserReligion').text(user.religion);
					$('#viewUserBloodGroup').text(user.blood_group);
					$('#viewUserHostelName').text(user.hostel_name);
					
					
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
				url: `${baseUrl}/student/student/${userId}/`,  // Use the API endpoint for the user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.user.dp_image != null) {
						imageUrl = `${baseUrl}${user.user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					
					$('#editUserDpImage').attr('src', imageUrl);
					$('#editUserId').val(user.student_id);  // Populate form fields with fetched data
					$('#editUserFirstName').val(user.first_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.user.phone);
					$('#editUserAge').val(user.user.age);
					$('#editUserDOB').val(user.dob);
					
					$('#editInstitute').val(user.institute_name);
					$('#editUserPassingYear').val(user.year_passing);
					
					$('#editUserBoard').val(user.board);
					
					$('#editUserBatch').val(user.batch);
					
					$('#editUserCollege').val(user.college);
					$('#editUserHostel').val(user.hostel);
					$('#editUserMark').val(user.marks_secured);
					$('#editUserStatus').val(user.status);
					$('#editUserCGPA').val(user.cgpa_or_percentage);
					
					$('#editUserInstitute').val(user.institute_name);
					$('#editUserBloodGroup').val(user.blood_group);
					
					$('#editUserHostelName').val(user.hostel_name);
					$('#editUserCourse').val(user.course.course_id);
					$('#editUserRoom').val(user.room_no);
					
					$('#editUserUsername').val(user.user.username);
					$('#editUserLastName').val(user.last_name)

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
			
			const name = $('#editUserName').val();
			const email = $('#editUserEmail').val();
			const course = document.getElementById('editUserCourse').value;
			const batch = document.getElementById('editUserBatch').value;
			
			if (name) formData.append('first_name', name);
			if (email) formData.append('email', email);
			if (course) formData.append('course', course);
			if (batch) formData.append('batch', batch);
			
			//formData.append('first_name', $('#editUserFirstName').val());
			//formData.append('email', $('#editUserEmail').val());
			formData.append('phone', $('#editUserPhone').val());
			formData.append('age', $('#editUserAge').val());
			formData.append('dob', $('#editUserDOB').val());
			
			formData.append('last_name',$('#editUserLastName').val());
			formData.append('user', $('#editUserUsername').val());
			
			formData.append('board',$('#editUserBoard').val());
			//formData.append('batch',$('#editUserBatch').val());
			formData.append('institute_name',$('#editUserInstitute').val());
			formData.append('college',$('#editUserCollege').val());
			formData.append('marks_secured',$('#editUserMark').val());
			formData.append('status', $('#editUserStatus').val());
			formData.append('blood_group', $('#editUserBloodGroup').val());
			formData.append('cgpa_or_percentage',$('#editUserCGPA').val());
			formData.append('hostel',$('#editUserHostel').val());
			formData.append('hostel_name',$('#editUserHostelName').val());
			//formData.append('course',$('#editUserCourse').val());
			formData.append('room_no', $('#editUserRoom').val());
			// Check if the file input exists and if a file has been selected
			const dpInput = $('#editUserDpInput')[0];
			if (dpInput && dpInput.files && dpInput.files.length > 0) {
				const dpImage = dpInput.files[0]; // Get the first file
				formData.append('dp_image', dpImage);
			}
			
			if(window.confirm("Update Student Data")){					
			// Perform the AJAX request
				$.ajax({
					url: `${baseUrl}/student/student/update/${userId}/`, // Use `id` here for endpoint
					type: 'PUT',
					data: formData,
					processData: false, // Required for FormData
					contentType: false, // Required for FormData
					success: function(response) {
						//alert('User updated successfully.');
						
						$('#editUserModal').modal('hide');
						$('#editUserForm')[0].reset();
        
						// Remove any error classes and messages
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						// Reload the page to reflect changes (optional)
						location.reload();
						
					},
					error: function(err) {
						// Remove previous error states
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('');
						
						const errors = err.responseJSON;

						// Show errors for each field
						if (errors.first_name) {
						  $('#editUserFirstName').addClass('is-invalid');
						  $('#editUserFirstNameError').text(errors.name[0]);
						}
						
						if (errors.email) {
						  $('#editUserEmail').addClass('is-invalid');
						  $('#editUserEmailError').text(errors.email[0]);
						}
						
						if(error.username){
							$('#editUserUsername').addClass('is-ivalid');
							$('#editUserUsernameError').text(errors.username[0]);
						}
						
						if(errors.batch){
							$('#editUserBatch').addClass('is-invalid');
							$('#editUserBatchError').text(errors.batch[0]);
						}

						

						// Add more fields as necessary
					  }
				});
			}
		});


		
		



		

		// Reset Password
		$(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					//url: `${baseUrl}/api/users/${userId}/`,
					url: `${baseUrl}/student/student/update/${userId}/`,
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
		  
		/*$('#search-bar').on('keyup', function() {
			const searchTerm = $(this).val().toLowerCase(); // Get the search term
			const filteredUsers = allUsers.filter(user => 
				user.first_name.toLowerCase().includes(searchTerm) || 
				user.email.toLowerCase().includes(searchTerm)
			); // Filter the allUsers array based on the search term
			
			displayUsers(filteredUsers); // Display the filtered users
		});*/
	});
</script>-->


</body>
</html> 