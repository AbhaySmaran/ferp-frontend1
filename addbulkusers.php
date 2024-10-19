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
<script>
	$(document).ready(function() {
		console.log('Document is ready.'); // Debug log for document ready
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
		
		const limit = 5; 
		let allUsers = []; 
		let displayedUsers = 0; 

		// Fetch all users
		$.ajax({
			url: `${baseUrl}/api/users/`,
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
							<td class='text-left'>${item.first_name}</td>
							<td class='text-left'>${item.email}</td>
							<td class='text-left'>${item.role.role}</td>
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
	});
</script>

 <script>
        $(document).ready(function(){
			
			const baseUrl = localStorage.getItem("url");

            $('#csvForm').on('submit', function(e){
                e.preventDefault();

                let formData = new FormData();
                formData.append('file', $('#file')[0].files[0]);

                $.ajax({
                    url: `${baseUrl}/api/uplodCSV/`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
						// Check if there are any failed records
						if (response.errors && response.errors.length > 0) {
							/*let errorMessage = "Some records failed validation:\n";
							
							// Loop through the failed records and append the errors to the error message
							response.failed_records.forEach(function(failedRecord) {
								errorMessage += `Row ${failedRecord.row_number}: \n`;

								Object.keys(failedRecord.errors).forEach(function(field) {
									errorMessage += `${field}: ${failedRecord.errors[field].join(', ')}\n`;
								});

								errorMessage += "\n";
							});

							// Show the error message as an alert
							alert(errorMessage);*/
							alert(response.errors)

						} else {
							// Show success message if no errors
							alert(response.success);
						}
					},
					error: function() {
						alert('Error uploading file');
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
							<p><b>Upload User CSV</b></p>
							<form id="csvForm" enctype="multipart/form-data">
								<input type="file" name="file" id="file" accept=".csv">
								<button class="btn btn-light" type="submit">Upload</button>
							</form>
						</div>
						<!--</div>
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
                  <p class="card-title card-padding pb-0"><b>User Information</b></p>
                  <div class="table-responsive">
					<table id="data-table" class="table">
						<thead class = "thead">
							<tr>
								<th class='text-left'>User Id</th>
									<th class='text-left'>Name</th>
									<th class='text-left'>Email</th>
									<th class='text-left'>role</th>
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
  <!-- End custom js for this page-->
</body>
</html> 