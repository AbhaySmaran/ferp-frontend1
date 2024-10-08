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
  <!--<style>
    .date-picker-row {
      display: flex;
      gap: 10px;
      align-items: center;
      margin-bottom: 20px;
    }

    .attendance-table th,
    .attendance-table td {
      text-align: left;
      padding: 10px;
    }

    .log-attendance-btn {
      margin-top: 20px;
      display: block;
    }

  </style>-->
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
                  <p class="card-title card-padding pb-0"><b>Student Attendance</b></p>

                  <!-- Date Picker Section -->
                  <div > <!--class="date-picker-row"-->
					  <div class="row">
						<div class="col-md-3"><p id="checkbox_p"><b>Give attendance for date: </b></p></div>
							<div class="col-md-5">
							<div class="row">
								<div>
									<label for="year-select">Year:</label>
									<select id="year-select" class="form-select">
									  <!-- Years will be dynamically added -->
									</select>
								</div>
								<div>
									<label for="month-select">Month:</label>
									<select id="month-select" class="form-select">
									  <!-- Months will be dynamically added -->
									</select>
								</div>
								<div>
									<label for="day-select">Day:</label>
									<select id="day-select" class="form-select">
									  <!-- Days will be dynamically added -->
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div>
								<div style="margin-left: 20px;">
									<div class="row">
									<div style="margin-right: 1.5rem;"><input type="checkbox" id="check-all" /> <label for="check-all">Check All</label></div>
									<div><input type="checkbox" id="uncheck-all" /> <label for="uncheck-all">Uncheck All</label></div>
									</div>
								</div>
							</div>
						</div>
					   </div>

                    <!--<button class="btn btn-primary" id="filter-button">Filter by Date</button>-->
                  </div>

                  <!-- Student Table -->
                  <div class="table-responsive">
                    <table id="data-table" class="table attendance-table">
                      <thead>
                        <tr>
                          <th class ="text-left">Attendance</th>
                          <th class ="text-left">Name</th>
                          <th class ="text-left">Email</th>
                    
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Data will be dynamically populated -->
                      </tbody>
                    </table>
					
                  </div>
				  
                  <!-- Log Attendance Button -->
                  
                </div>
				
              </div>
            </div>
          </div>
		  <div class="text-right"><button class="btn btn-primary" id="log-attendance">Log Attendance</button></div>
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
  <!--<script>
    $(document).ready(function () {
      const baseUrl = localStorage.getItem("url");
      const access = localStorage.getItem("access_token");

      // Function to generate years
      function generateYears() {
        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i >= 2000; i--) {
          $('#year-select').append(`<option value="${i}">${i}</option>`);
        }
      }

      // Function to generate months
      function generateMonths() {
        for (let i = 1; i <= 12; i++) {
          $('#month-select').append(`<option value="${i}">${i}</option>`);
        }
      }

      // Function to generate days
      function generateDays() {
        for (let i = 1; i <= 31; i++) {
          $('#day-select').append(`<option value="${i}">${i}</option>`);
        }
      }

      // Initialize the dropdowns
      generateYears();
      generateMonths();
      generateDays();

      // Fetch all students and populate table
      $.ajax({
        url: `${baseUrl}/student/students/`,
        type: 'GET',
        success: function (data) {
          data.forEach(item => {
            $('#data-table tbody').append(`
              <tr id="row-${item.student_id}">
                <td class ="text-left"><input type="checkbox" class="attendance-checkbox" data-student-id="${item.student_id}" /></td>
                <td class ="text-left">${item.first_name}</td>
                <td class ="text-left">${item.email}</td>
              </tr>
            `);
          });
        },
        error: function (err) {
          console.log('Error fetching data:', err);
        }
      });

      // Log attendance button click handler
      $('#log-attendance').click(function () {
        const attendanceData = [];
        $('.attendance-checkbox:checked').each(function () {
          attendanceData.push($(this).data('student-id'));
        });

        // Send attendance data to the backend
        $.ajax({
          url: `${baseUrl}/attendance/log/`,
          type: 'POST',
          headers: {
            'Authorization': `Bearer ${access}`
          },
          data: JSON.stringify({ students: attendanceData }),
          contentType: 'application/json',
          success: function (response) {
            alert('Attendance logged successfully');
          },
          error: function (err) {
            console.log('Error logging attendance:', err);
          }
        });
      });
    });
  </script>-->
  <script>
    $(document).ready(function () {
      const baseUrl = localStorage.getItem("url");
      const access = localStorage.getItem("access_token");
	  

      // Function to generate years
      function generateYears() {
        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i >= 2000; i--) {
          $('#year-select').append(`<option value="${i}">${i}</option>`);
        }
      }

      // Function to generate months
      function generateMonths() {
        for (let i = 1; i <= 12; i++) {
          $('#month-select').append(`<option value="${i}">${i}</option>`);
        }
      }

      // Function to generate days
      function generateDays() {
        for (let i = 1; i <= 31; i++) {
          $('#day-select').append(`<option value="${i}">${i}</option>`);
        }
      }

      // Initialize the dropdowns
      generateYears();
      generateMonths();
      generateDays();

      // Fetch all students and populate table
      $.ajax({
        url: `${baseUrl}/student/students/`,
        type: 'GET',
        success: function (data) {
          data.forEach(item => {
            $('#data-table tbody').append(`
              <tr id="row-${item.student_id}">
                <td class="text-left"><input type="checkbox" class="attendance-checkbox" data-student-id="${item.student_id}" /></td>
                <td class="text-left">${item.first_name}</td>
                <td class="text-left">${item.email}</td>
              </tr>
            `);
          });
        },
        error: function (err) {
          console.log('Error fetching data:', err);
        }
      });
	  
	  const user = localStorage.getItem("user")
	  
	  $('#check-all').click(function () {
		if ($(this).is(':checked')) {
		  $('.attendance-checkbox').prop('checked', true);
		  $('#uncheck-all').prop('checked', false);  // Uncheck the "Uncheck All" checkbox
		}
	  });

	  // Uncheck All functionality
	  $('#uncheck-all').click(function () {
		if ($(this).is(':checked')) {
		  $('.attendance-checkbox').prop('checked', false);
		  $('#check-all').prop('checked', false);  // Uncheck the "Check All" checkbox
		}
	  });

      // Log attendance button click handler
      $('#log-attendance').click(function () {
        const attendanceData = [];
        $('.attendance-checkbox').each(function () {
          const studentId = $(this).data('student-id');
          const status = $(this).is(':checked') ? 'P' : 'A';  // P for present, A for absent
		  
          attendanceData.push({ student_id: studentId, status: status, uploaded_by: user });
        });

        // Send attendance data to the backend
        const year = $('#year-select').val();
        const month = $('#month-select').val();
        const day = $('#day-select').val();
        
        $.ajax({
          url: `${baseUrl}/student/attendance/${year}/${month}/${day}/`,
          type: 'POST',
          headers: {
            'Authorization': `Bearer ${access}`
          },
          data: JSON.stringify({ attendance_data: attendanceData }),
          contentType: 'application/json',
          success: function (response) {
			if(response.non_field_errors && response.non_field_errors.length > 0){
				alert(response.non_field_errors)
			}else{
				alert('Attendance logged successfully');
			}
          },
		  
          error: function (err) {
            console.log('Error logging attendance:', err);
          }
        });
		
      });
	  
	  $('#search-bar').on('keyup', function() {
        const value = $(this).val().toLowerCase();
        $('#data-table tbody tr').filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>
</html> 