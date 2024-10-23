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
  
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
</head>
<body>

<!--<script src="./assets/js/preloader.js"></script>-->
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.php -->
	<?php include 'components/sidebar.php'; ?>
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<div class="d-flex justify-content-between mb-4">
				<button class="btn btn-primary" data-toggle="modal" data-target="#addSubjectModal">Add Subject</button>
			</div>
          <div class="mdc-layout-grid">
			<div class="mdc-layout-grid__inner">
				<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
					<div class="mdc-card p-0">
						<p class="card-title card-padding pb-0"><b>Subjects:-</b></p>
						<div class="table-responsive">
							<table class="table" id="subjectsTable">
								<thead>
									<tr>
										<th class="text-left">ID</th>
										<th class="text-left">Code</th>
										<th class="text-left">Name</th>
										<th class="text-left">Type</th>
										<th>Full Mark</th>
										<th>Pass Mark</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<!-- Subject rows will be populated here by AJAX -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        
      </div>
    </div>
  </div>
  
  <!--Add Subject Modals -->
  <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="addSubjectModalLabel">Add Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="addSubjectForm">
				<div class="modal-body">
                
                    <div class="form-group">
                        <label for="subject_code">Subject Code</label>
                        <input type="text" class="form-control" id="subject_code" name="subject_code" required>
                    </div>
                    <div class="form-group">
                        <label for="subject_name">Subject Name</label>
                        <input type="text" class="form-control" id="subject_name" name="subject_name" required>
                    </div>
                    <div class="form-group">
                        <label for="subject_type">Subject Type</label>
                        <input type="text" class="form-control" id="subject_type" name="subject_type">
                    </div>
                    <div class="form-group">
                        <label for="full_mark">Full Mark</label>
                        <input type="number" class="form-control" id="full_mark" name="full_mark">
                    </div>
                    <div class="form-group">
                        <label for="pass_mark">Pass Mark</label>
                        <input type="number" class="form-control" id="pass_mark" name="pass_mark">
                    </div>
                    
                
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Add Subject</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
				
			</form>
        </div>
    </div>
</div>

<!--Subject Books view Modal-->
<div class="modal fade" id="subjectBooksModal" tabindex="-1" role="dialog" aria-labelledby="subjectBooksModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="addSubjectModalLabel">Books</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			
			<div class="modal-body">
                
				<table table-responsive>
					<thead>
						<tr>
							<th>Text Book 1<th>
							<th>Text Book 2<th>
							<th>Reference Book 1<th>
							<th>Reference Book 1<th>
						</tr>
					</thead>
					<tbody id="subject_books">
						<td id="text_book_1"></td>
						<td id="text_book_2"></td>
						<td id="ref_book_1"></td>
						<td id="text_book_1"></td>
					</tbody>
				</table>
                    
                    
                
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
				
			
        </div>
    </div>
</div>

<!-- Update Subject Modal -->
<div class="modal fade" id="updateSubjectModal" tabindex="-1" role="dialog" aria-labelledby="updateSubjectModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">

                <h5 class="modal-title" id="updateSubjectModalLabel">Update Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="updateSubjectForm">
				<div class="modal-body">
                
                    <input type="hidden" id="update_subject_id" name="subject_id">
                    <div class="form-group">
                        <label for="update_subject_code">Subject Code</label>
                        <input type="text" class="form-control" id="update_subject_code" name="subject_code" required>
                    </div>
                    <div class="form-group">
                        <label for="update_subject_name">Subject Name</label>
                        <input type="text" class="form-control" id="update_subject_name" name="subject_name" required>
                    </div>
                    <div class="form-group">
                        <label for="update_subject_type">Subject Type</label>
                        <input type="text" class="form-control" id="update_subject_type" name="subject_type">
						
                    </div>
                    <div class="form-group">
                        <label for="update_full_mark">Full Mark</label>
                        <input type="number" class="form-control" id="update_full_mark" name="full_mark">
                    </div>
                    <div class="form-group">
                        <label for="update_pass_mark">Pass Mark</label>
                        <input type="number" class="form-control" id="update_pass_mark" name="pass_mark">
                    </div>
                    
                
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
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  
  <script>
    $(document).ready(function() {
        // Load all subjects on page load
		
		const baseUrl = localStorage.getItem("url");
        loadSubjects();
		
        // Function to load all subjects and append to table
		
		/*$.ajax({
			url: `${baseUrl}/api/users/`,
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
		}*/
        function loadSubjects() {
            $.ajax({
				url: `${baseUrl}/subject/subjects/`,
                method: 'GET',
                success: function(data) {
                    var tbody = '';
                    data.forEach(function(subject) {
                        tbody += `
                            <tr>
                                <td class="text-left">${subject.subject_id}</td>
                                <td class="text-left">${subject.subject_code}</td>
                                <td class="text-left">${subject.subject_name}</td>
                                <td class="text-left">${subject.subject_type}</td>
                                <td>${subject.full_mark}</td>
                                <td>${subject.pass_mark}</td>
                                <td>
									<button class="btn btn-light view-books" data-id="${subject.subject_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" >Books</button>
                                    <button class="btn btn-light update-subject" data-id="${subject.subject_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" >Update</button>
									<!--<button class='btn btn-light btn-view-user' data-id="${subject.subject_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">Update</button>-->
                                </td>
                            </tr>
                        `;
                    });
                    $('#subjectsTable tbody').html(tbody);
                }
            });
        }

        // Add subject using AJAX
        $('#addSubjectForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: `${baseUrl}/subject/subjects/`,
                method: 'POST',
                data: formData,
                success: function(data) {
                    $('#addSubjectModal').modal('hide');
                    loadSubjects();  // Reload the table after adding
                },
                error: function(error) {
                    alert('Failed to add subject.');
                }
            });
        });

        // Update subject: Open modal with data filled
        $(document).on('click', '.update-subject', function() {
            var subjectId = $(this).data('id');
            $.ajax({
                url: `${baseUrl}/subject/subjects/${subjectId}/`,
                method: 'GET',
                success: function(data) {
                    $('#update_subject_id').val(data.subject_id);
                    $('#update_subject_code').val(data.subject_code);
                    $('#update_subject_name').val(data.subject_name);
                    $('#update_subject_type').val(data.subject_type);
                    $('#update_full_mark').val(data.full_mark);
                    $('#update_pass_mark').val(data.pass_mark);
                    $('#updateSubjectModal').modal('show');
                }
            });
        });
		
		/*$('#subjectsTable').on('click','.view-books', function(){
			var subjectId = $(this).data('id);
		})*/

        // Submit the update form
        $('#updateSubjectForm').submit(function(e) {
            e.preventDefault();
            var subjectId = $('#update_subject_id').val();
            var formData = $(this).serialize();
            $.ajax({
                url: `${baseUrl}/subject/subjects/${subjectId}/`,
                method: 'PUT',
                data: formData,
                success: function(data) {
                    $('#updateSubjectModal').modal('hide');
                    loadSubjects();  // Reload the table after update
                },
                error: function(error) {
                    alert('Failed to update subject.');
                }
            });
        });
    });
</script>
</body>
</html> 