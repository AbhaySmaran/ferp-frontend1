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
          <div class="mdc-layout-grid">
			<div class="mdc-layout-grid__inner">
				<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
					<div class="mdc-card p-0">
						<p class="card-title card-padding pb-0"><b>Student Section Assignment</b></p>

						<!-- Batch Dropdown Section -->
						<div class="row">
							<div class="col-md-4">
								<label for="batch-select">Select Batch:</label>
								<select id="batch-select" class="form-select">
									<!-- Batches will be dynamically added -->
								</select>
							</div>
							
							<div class="col-md-4">
								<input type="checkbox" id="check-all" /> <label for="check-all">Check All</label>
								<!--<input type="checkbox" id="uncheck-all" /> <label for="uncheck-all">Uncheck All</label>-->
							</div>

							<!-- Check/Uncheck All Section -->
							
							<div class="col-md-4">
								<button class="btn btn-primary"  data-toggle="modal" data-target="#sectionEnrollModal">Enroll Section</button>
							</div>

						</div>

						
						

						<!-- Student Table -->
						<div class="table-responsive mt-4">
							<table id="data-table" class="table attendance-table">
								<thead>
									<tr>
										<th class="text-left">Select</th>
										<th class="text-left">Name</th>
										<th class="text-left">Email</th>
									</tr>
								</thead>
								<tbody>
									<!-- Data will be dynamically populated -->
								</tbody>
							</table>
						</div>

						<!-- Log Attendance Button -->
						<div class="text-right">
							
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
  
  <div class="modal fade" id="sectionEnrollModal" tabindex="-1" role="dialog" aria-labelledby="sectionEnrollLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="addSubjectModalLabel">Enroll Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="addSubjectForm">
				<div class="modal-body">
                
                    <div class="form-group">
                        <div class="row">
							<div class="col-md-5">
								<label>Enroll section for selected students:- </label>
							</div>
							<div class="col-md-3">
								<select
								>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>
									
								</select>
							</div>
						</div>
                    </div>
                    
                
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Enroll</button>
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
		
		
		const baseUrl = localStorage.getItem('url')
		var currentYear = new Date().getFullYear();
		$.ajax({
			url: `${baseUrl}/student/batches/`,
			method: 'GET',
			success: function(response) {
				var batchSelect = $('#batch-select');
				var defaultBatch = null;

				$.each(response, function(index, batch) {
					batchSelect.append('<option value="' + batch + '">' + batch + '</option>');

					var startYear = parseInt(batch.split('-')[0]); 
					if (startYear === currentYear) {
						defaultBatch = batch;
					}
				});

				if (defaultBatch) {
					batchSelect.val(defaultBatch);
					fetchStudentsByBatch(defaultBatch);
				} else if (response.length > 0) {
					batchSelect.val(response[0]);
					fetchStudentsByBatch(response[0]);
				}
			},
			error: function() {
				alert("Error fetching batch data!");
			}
		});

		$('#batch-select').change(function() {
			var batchValue = $(this).val();
			fetchStudentsByBatch(batchValue);
		});

		function fetchStudentsByBatch(batch) {
			$.ajax({
				url: `${baseUrl}/student/batch/${batch}/`,  
				method: 'GET',
				success: function(response) {
					var tableBody = $('#data-table tbody');
					tableBody.empty();  
					$.each(response, function(index, student) {
					
						var row = '<tr>' +
							'<td class="text-left"><input type="checkbox" class="student-checkbox" data-student-id="' + student.student_id + '"></td>' +
							'<td class="text-left">' + student.first_name + ' ' + (student.last_name || '') + '</td>' +
							'<td class="text-left">' + student.email + '</td>' +
							'</tr>';
						tableBody.append(row);
					});
				},
				error: function() {
					alert("Error fetching student data!");
				}
			});
		}
	

		
		/*var currentYear = new Date().getFullYear(); 
		$.ajax({
			url: `${baseUrl}/student/batches/`,  
			method: 'GET',
			success: function(response) {
				var batchSelect = $('#batch-select');
				$.each(response, function(index, batch) {
					
					batchSelect.append('<option value="' + batch + '">' + batch + '</option>');
				});

				
				if (response.length > 0) {
					batchSelect.val(response[0]);
					fetchStudentsByBatch(response[0]);
				}
			},
			error: function() {
				alert("Error fetching batch data!");
			}
		});

		
		$('#batch-select').change(function() {
			var batchValue = $(this).val();
			fetchStudentsByBatch(batchValue);
		})

		
		function fetchStudentsByBatch(batch) {
			$.ajax({
				url: `${baseUrl}/student/batch/${batch}/`,  
				method: 'GET',
				success: function(response) {
					var tableBody = $('#data-table tbody');
					tableBody.empty(); 
					$.each(response, function(index, student) {
						
						var row = '<tr>' +
							'<td class="text-left"><input type="checkbox" class="student-checkbox" data-student-id="' + student.student_id + '"></td>' +
							'<td class="text-left">' + student.first_name + ' ' + (student.last_name || '') + '</td>' +
							'<td class="text-left">' + student.email + '</td>' +
							'</tr>';
						tableBody.append(row);
					});
				},
				error: function() {
					alert("Error fetching student data!");
				}
			});
		}*/

		
		/*$('#check-all').change(function() {
			$('.student-checkbox').prop('checked', true);
		});

		
		$('#uncheck-all').change(function() {
			$('.student-checkbox').prop('checked', false);
		});*/
		
		$('#check-all').click(function () {
			if ($(this).is(':checked')) {
			  $('.student-checkbox').prop('checked', true);
			  $('#uncheck-all').prop('checked', false); // Uncheck the "Uncheck All" checkbox
			}else{
				$('.student-checkbox').prop('checked', false);
				$('#check-all').prop('checked', false);
			}
		  });

		  /*
		  $('#uncheck-all').click(function () {
			if ($(this).is(':checked')) {
			  $('.student-checkbox').prop('checked', false);
			  $('#check-all').prop('checked', false); // Uncheck the "Check All" checkbox
			}
		  });
			*/
		

		
	});

</script>
</body>
</html> 