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
					  <p class="card-title card-padding pb-0"><b>Subject Assignment</b></p>
					  <div class="table-responsive">
						<table id="data-table" class="table">
							<thead class = "thead">
								<tr>
									<th class='text-left'>Batch</th>
									<th class='text-left'>Semester</th>
									<th class='text-left'>Subject-T</th>
									<th class='text-left'>Sub-T-Teacher</th>
									<th class='text-left'>Subject-P</th>
									<th class='text-left'>Sub-P-Teacher</th>
									<th class='text-left'>Action</th>
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
        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  
  <script>
	$(document).ready(function(){
		const baseUrl = localStorage.getItem('url');

		
		$.ajax({
			url: `${baseUrl}/subject/sub-assign/`,  
			type: 'GET',
			success: function(data){

				console.log(data); 
				DisplayData(data);  
			},
			error: function(err) {
				console.log('Error fetching data:', err);  
			}
		});

		
		function DisplayData(batches){
			const tableData = $('#data-table tbody');  
			tableData.empty();  

			batches.forEach((item)=>{
				tableData.append(`
					<tr>
						<td class="text-left">${item.batch}</td>  
						<td class="text-left">${item.sem}</td> 
						<td class="text-left">${item.subject_T}</td>   
						<td class="text-left">${item.sub_T_Teacher}</td> 
						<td class="text-left">${item.subject_P}</td> 
						<td class="text-left">${item.sub_P_Teacher}</td> 
						<td class="text-left">
							<button class='btn btn-light btn-edit-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
								<i class="fa-solid fa-pen-to-square"></i> Edit
							</button>
						</td>
					</tr>
				`);
			});
		}
	});

  </script>
  
  <!--<script>
	$(document).ready(function(){
		const baseUrl = localStorage.getItem('url')
		
		$.ajax({
			url: `${baseUrl}/subject/sub-assign`,
			type: 'GET',
			success: function(data){
				allData = data;
				console.log(allData);
			},
			error: function(error){
				console.log(error);
			}
		})
		
		function DisplayData(allData){
			const dataTable = $('#data-table tbody')
			dataTable.empty()
			
			allData.forEach((item)=>{
				dataTable.append(`
					<tr>
						<td class="text-left">${item.batch}</td>
						<td class="text-left">${item.sem}</td>
						<td class="text-left">${item.subject_T}</td>
						<td class="text-left">${item.sub_T_Teacher}</td>
						<td class="text-left">${item.subject_P}</td>
						<td class="text-left">${item.sub_P_Teacher}</td>
						<td class="text-left">
							<button class='btn btn-light btn-edit-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
								<i class="fa-solid fa-pen-to-square"></i> Edit
							</button>
						</td>
					</tr>
				`)
			})
		}
	})
  </script>-->
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
</body>
</html> 