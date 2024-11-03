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
				<button class="btn btn-primary" data-toggle="modal" data-target="#addDepartmentModal"> Add Department</button>
			</div>
			<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
					<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
						<div class="mdc-card p-0">
							<p class="card-title card-padding pb-0"><b>Departments:-</b></p>
							<div class="table-responsive">
								<table class="table" id="departmentsTable">
									<thead>
										<tr>
											<th class="text-left">ID</th>
											<th class="text-left">Department Name</th>
											<th class="text-left">HOD</th>
											<th class="text-right">Department Contact</th>
											<th>Edit</th>
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
  
  <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeAddDept">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="addDepartmentForm">
				<div class="modal-body">
				
					
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label>Department Name:- </label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="dept_name"  >
										<div class="invalid-feedback" id="deptNameError"> </div>
									</div>
								</div>
							</div>
						
							
							
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label>HOD:-</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="hod"  >
										
									</div>
								</div>
							</div>
						
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label>Department Contact No.:-</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="dept_contact" >
										
									</div>
								</div>
							</div>
                    
					
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Add Department</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="closeAddDept">Close</button>
				</div>
				
			</form>
        </div>
    </div>
</div>

 </div>
<!--<div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="editDepartmentModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="editDepartmentModalLabel">Update Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeEditDept">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
		</div>
	</div>
</div>-->

<!-- Edit Dept Modal-->
<div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="editDepartmentModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="editDepartmentModalLabel">Edit Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeEditDepartment">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="editDepartmentForm">
				<div class="modal-body">
				
							<input type="hidden" id="update_dept_id" name="dept_id">
					
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label>Department Name:- </label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="editDeptName" >
										<div class="invalid-feedback" id="editDeptError"> </div>
									</div>
								</div>
							</div>
						
							
							
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label>HOD:-</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="editHOD" >
										
									</div>
								</div>
							</div>
						
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label >Department Contact No.:-</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="editDeptContact" >
										
									</div>
								</div>
							</div>
                    
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Update Subject</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="closeEditDept">Close</button>
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
  
  <script>
	$(document).ready(function(){
		const baseUrl = localStorage.getItem('url');
		loadDepartments();
		
		function loadDepartments(){
			$.ajax({
				url: `${baseUrl}/api/dept/`,
				type: 'GET',
				success: function(data) {
                    var tbody = '';
                    data.forEach(function(dept) {
                        tbody += `
                            <tr>
                                <td class="text-left">${dept.dept_id}</td>
                                <td class="text-left">${dept.dept_name}</td>
                                <td class="text-left">${dept.HOD}</td>
                                <td class="text-right">${dept.dept_contact}</td>                       
                                <td>
                                    <button class="btn btn-light update-dept" data-id="${dept.dept_id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" ><i class="fa-solid fa-pen-to-square"></i> Edit</button>									
                                </td>
                            </tr>
                        `;
                    });
                    $('#departmentsTable tbody').html(tbody);
                }
			})
		}
		
		$('#addDepartmentForm').submit(function(e){
			e.preventDefault();
			const formData = new FormData();
			const dept_name = $('#dept_name').val();
			const hod = $('#hod').val();
			const dept_contact = $('#dept_contact').val();
			
			if(dept_name) formData.append('dept_name', dept_name);
			if(hod) formData.append('HOD',hod);
			if(dept_contact) formData.append('dept_contact', dept_contact);
			
			
			$.ajax({
				url: `${baseUrl}/api/dept/`,
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				success: function(data){
					$('#addDepartmentModal').modal('hide');
					
					$('#addDepartmentForm')[0].reset();
        
					// Remove any error classes and messages
					$('.form-control').removeClass('is-invalid');
					$('.invalid-feedback').text('');
					
					loadDepartments();
				},
				error: function(err){
					$('.form-control').removeClass('is-invalid');
					$('.invalid-feedback').text('');
					
					const errors = err.responseJSON;
					
					if(errors.dept_name){
						$('#dept_name').addClass('is-invalid');
						$('#deptNameError').text(errors.dept_name[0]);
					}
				}
			})
		})
		
		$(document).on('click', '#closeAddDept', function(){
			$('#addDepartmentForm')[0].reset();
			$('.form-control').removeClass('is-invalid');
			$('.invalid-feedback').text('');
		})
		
		
		$(document).on('click', '.update-dept', function(){
			var deptId = $(this).data('id');
			$.ajax({
				url:`${baseUrl}/api/dept/${deptId}/`,
				type: 'GET',
				success: function(data){
					$('#update_dept_id').val(data.dept_id);
					$('#editDeptName').val(data.dept_name);
					$('#editHOD').val(data.HOD);
					$('#editDeptContact').val(data.dept_contact);
					
					$('#editDepartmentModal').modal('show');
					console.log(data)
					
				},
				error: function(err){
					console.log(err);
				}
			})
		})
		
		
		$('#editDepartmentForm').submit(function(e){
			e.preventDefault();
			var deptId = $('#update_dept_id').val();
			const formData = new FormData();
			
			if($('#editDeptName').val()) formData.append('dept_name', $('#editDeptName').val());
			if($('#editHOD').val()) formData.append('HOD', $('#editHOD').val());
			if($('#editDeptContact').val()) formData.append('dept_contact', $('#editDeptContact').val());
			
			if(window.confirm("Update department data?")){
				$.ajax({
					url: `${baseUrl}/api/dept/${deptId}/`,
					type: 'PUT',
					data: formData,
					processData: false, // Necessary for FormData
					contentType: false,
					success: function(response){
						$('#editDepartmentModal').modal('hide');
						$('#editDepartmentForm')[0].reset();
						$('.form-control').removeClass('is-invalid');
						$('.invalid-feedback').text('')
						loadDepartments();
					},
					error: function(err){
						
						console.log(err);
					}
				})
			}
		})
	})
  </script>
  
  
  
</body>
</html> 