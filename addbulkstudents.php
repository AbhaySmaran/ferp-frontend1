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
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!--<script>
	$(document).ready(function() {
		console.log('Document is ready.'); // Debug log for document ready
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
		
		const limit = 5; 
		let allUsers = []; 
		let displayedUsers = 0; 
		
		loadStudents();

		// Fetch all users
		function loadStudents(){
			$.ajax({
				url: `${baseUrl}/student/students/`,
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
		}
		

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
							<td class="text-left">${item.first_name}</td>
							
							<td class='text-left'>${item.email}</td>
							<td class='text-left'>${item.board}</td>
							<td class='text-left'>${item.institute_name}</td>
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
	

       

            $('#csvForm').on('submit', function(e){
                e.preventDefault();

                let formData = new FormData();
                formData.append('file', $('#file')[0].files[0]);

                $.ajax({
                    url: `${baseUrl}/student/upload-csv/`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
						// Check if there are any failed records
						if (response.failed_records && response.failed_records.length > 0) {
							let errorMessage = "Some records failed validation:\n";
							
							// Loop through the failed records and append the errors to the error messag
							response.failed_records.forEach(function(failedRecord) {
								errorMessage += `Row ${failedRecord.row_number}: \n`;

								Object.keys(failedRecord.errors).forEach(function(field) {
									errorMessage += `${field}: ${failedRecord.errors[field].join(', ')}\n`;
								});

								errorMessage += "\n";
							});

							// Show the error message as an alert
							alert(errorMessage);

						} else {
							// Show success message if no errors
							alert(response.success);
							loadStudents();
						}
					},
					error: function() {
						alert('Error uploading file');
						console.log(error);
					}
                });
			});
            
        });
    </script>-->
	
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
						<td class='text-left'>${item.institute_name}</td>
						<!--<td class="text-center">
							<button class='btn btn-light btn-view-user' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
								<i class="fa-solid fa-eye"></i> View
							</button>
							<button class='btn btn-light btn-edit-user' data-id="${item.student_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
								<i class="fa-solid fa-pen-to-square"></i> Edit
							</button>
							<button class='btn btn-light btn-reset-password' style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-id="${item.student_id}">
								<i class="fa-solid fa-key"></i> Reset Password
							</button>
						</td>-->
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
		
			$('#csvForm').on('submit', function(e){
                e.preventDefault();

                let formData = new FormData();
                formData.append('file', $('#file')[0].files[0]);

                $.ajax({
                    url: `${baseUrl}/student/upload-csv/`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
						// Check if there are any failed records
						if (response.failed_records && response.failed_records.length > 0) {
							let errorMessage = "Some records failed validation:\n";
							
							// Loop through the failed records and append the errors to the error messag
							response.failed_records.forEach(function(failedRecord) {
								errorMessage += `Row ${failedRecord.row_number}: \n`;

								Object.keys(failedRecord.errors).forEach(function(field) {
									errorMessage += `${field}: ${failedRecord.errors[field].join(', ')}\n`;
								});

								errorMessage += "\n";
							});

							// Show the error message as an alert
							alert(errorMessage);

						} else {
							// Show success message if no errors
							alert(response.success);
							loadStudents();
							$('#csvForm')[0].reset();
						}
					},
					error: function(err) {
						const error = err.responseJSON
						alert(error.error);
						console.log(error);
					}
                });
			});
	});
		
	</script>
<!--<script src="./assets/js/preloader.js"></script>-->
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.php -->
	<?php include 'components/sidebar.php'; ?>
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
		
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<!--<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
					<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
						<div class="mdc-card p-0">-->
						<div style="border-radius: 10px; background-color: lightblue; padding: 8px;">
							<div class="row">
								<div class="col-md-9">
									<p><b>Upload Student CSV</b></p>
									<form id="csvForm" enctype="multipart/form-data">
										<input type="file" name="file" id="file" accept=".csv">
										<button class="btn btn-light" type="submit"><b>Upload</b></button>
										
									</form>
								</div>
								<div class="col-md-3">
									<button class="btn btn-light mt-5" onclick="downloadSampleCsv()"><b>Download Sample CSV</b></button>
								</div>
							</div>
							<div id="responseMessage"></div>
						</div>
						<!--</div>
					</div>
				</div>
			</div>-->
			
			<!-- Modal -->
			<!--<div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<p class="modal-title" id="responseModalLabel">Upload Result</p>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" id="modalBody">
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>-->
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
			<div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <p class="card-title card-padding pb-0"><b>Student Information </b></p>
                  <div class="table-responsive">
					<table id="data-table" class="table">
						<thead class = "thead">
							<tr>
								<th class='text-left'>Name</th>
								<th class='text-left'>Email</th>
								<th class='text-left'>Board</th>
								<th class='text-left'>Institute</th>
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
	<!--<script>
		
		$(document).ready(function () {
			$('#upload-csv').click(function () {
			  var fileInput = document.getElementById('csv-file-input');
			  if (fileInput.files.length === 0) {
				alert('Please select a CSV file.');
				return;
			  }
			  
			  var formData = new FormData();
			  formData.append('file', fileInput.files[0]);
			  
			  const baseUrl = localStorage.getItem("url");
			  const access = localStorage.getItem("access_token");
	

			  // AJAX call to upload the CSV file to the backend
			  $.ajax({
				url: `${baseUrl}/api/upload-csv/`,
				type: 'POST',
				data: formData,
				processData: false, // Prevent jQuery from automatically transforming the data into a string
				contentType: false, // Set to false to ensure multipart encoding
				headers: {
				  'Authorization': `Bearer ${access}`
				},
				success: function (data) {
				  alert('CSV file uploaded successfully.');
				  console.log('Data saved:', data);
				},
				error: function (err) {
				  alert('Error uploading CSV file.');
				  console.error('Upload error:', err);
				}
			  });
			});
		});
		

	</script>-->
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
  <script>
	function downloadSampleCsv() {
		// Create a sample CSV content
		const sampleData = `First_Name,Last_Name,UserName,Email,Password,Role,Staff_Category,Course,Photo,Roll_Number,,Lateral,Batch,College,Hostel,DOB,Transport,Gender,Blood_Group,Caste,Religion,Mother_Tongue,Nationality,Last_Exam_Passed,Board,Institute_Name,Year_Passing,Total_Marks,Markes_Secured,CGPA_OR_Percentage,Status,Section`;
		
		// Create a Blob with the sample CSV content
		const blob = new Blob([sampleData], { type: 'text/csv' });
		
		// Create a temporary link element to initiate the download
		const url = URL.createObjectURL(blob);
		const link = document.createElement('a');
		link.href = url;
		link.download = 'sample_student_data.csv';
		
		// Append link to body, trigger click, and remove it afterward
		document.body.appendChild(link);
		link.click();
		document.body.removeChild(link);
		
		// Release the Blob URL
		URL.revokeObjectURL(url);
	}
</script>
  <!-- End custom js for this page-->
</body>
</html> 