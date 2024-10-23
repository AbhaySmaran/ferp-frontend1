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
								<input type="checkbox" id="uncheck-all" /> <label for="uncheck-all">Uncheck All</label>
							</div>

							<!-- Check/Uncheck All Section -->
							
							

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
							<button class="btn btn-primary" id="log-attendance">Log Attendance</button>
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
  <!-- plugins:js -->
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chartjs/Chart.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  
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
		// Fetch batches and populate the batch dropdown
		$.ajax({
			url: '/api/batches/',  // Adjust API endpoint for batches
			method: 'GET',
			success: function(response) {
				var batchSelect = $('#batch-select');
				$.each(response, function(index, batch) {
					batchSelect.append('<option value="' + batch.id + '">' + batch.name + '</option>');
				});
				// Set the default batch (current year's batch) - you can define how to set this
				batchSelect.val(response[0].id);
				// Load students for the default batch
				fetchStudentsByBatch(response[0].id);
			}
		});

		// Fetch students when a batch is selected
		$('#batch-select').change(function() {
			var batchId = $(this).val();
			fetchStudentsByBatch(batchId);
		});

		// Function to fetch students by batch
		function fetchStudentsByBatch(batchId) {
			$.ajax({
				url: '/students/batch/' + batchId + '/',
				method: 'GET',
				success: function(response) {
					var tableBody = $('#data-table tbody');
					tableBody.empty();  // Clear previous data
					$.each(response, function(index, student) {
						var row = '<tr>' +
							'<td><input type="checkbox" class="student-checkbox" data-student-id="' + student.student_id + '"></td>' +
							'<td>' + student.first_name + ' ' + student.last_name + '</td>' +
							'<td>' + student.email + '</td>' +
							'</tr>';
						tableBody.append(row);
					});
				}
			});
		}

		// Check all checkboxes
		$('#check-all').change(function() {
			$('.student-checkbox').prop('checked', true);
		});

		// Uncheck all checkboxes
		$('#uncheck-all').change(function() {
			$('.student-checkbox').prop('checked', false);
		});

		// Log attendance on button click
		$('#log-attendance').click(function() {
			var selectedStudents = [];
			$('.student-checkbox:checked').each(function() {
				selectedStudents.push($(this).data('student-id'));
			});
			if (selectedStudents.length > 0) {
				// Send selected student IDs to the server for attendance logging
				$.ajax({
					url: '/api/log-attendance/',  // Adjust API endpoint
					method: 'POST',
					data: {
						students: selectedStudents,
						date: $('#year-select').val() + '-' + $('#month-select').val() + '-' + $('#day-select').val()
					},
					success: function(response) {
						alert('Attendance logged successfully!');
					},
					error: function() {
						alert('An error occurred while logging attendance.');
					}
				});
			} else {
				alert('No students selected.');
			}
		});

		// Populate date pickers
		populateDatePickers();
		function populateDatePickers() {
			var yearSelect = $('#year-select');
			var monthSelect = $('#month-select');
			var daySelect = $('#day-select');

			var currentYear = new Date().getFullYear();
			var currentMonth = new Date().getMonth() + 1;
			var currentDay = new Date().getDate();

			for (var i = currentYear; i >= 2000; i--) {
				yearSelect.append('<option value="' + i + '">' + i + '</option>');
			}

			for (var i = 1; i <= 12; i++) {
				monthSelect.append('<option value="' + (i < 10 ? '0' + i : i) + '">' + i + '</option>');
			}

			for (var i = 1; i <= 31; i++) {
				daySelect.append('<option value="' + (i < 10 ? '0' + i : i) + '">' + i + '</option>');
			}

			// Set default to today's date
			yearSelect.val(currentYear);
			monthSelect.val((currentMonth < 10 ? '0' + currentMonth : currentMonth));
			daySelect.val((currentDay < 10 ? '0' + currentDay : currentDay));
		}
	});

</script>
</body>
</html> 