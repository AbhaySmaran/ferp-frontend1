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
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- Layout styles -->
  <link rel="stylesheet" href="./assets/css/demo/style.css">
  <link rel="stylesheet" href="./assets/css/demo/profile.css">
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
</head>
<body>

<div class="body-wrapper">
    <!-- Sidebar -->
    <?php include 'components/sidebar.php'; ?>
    <div class="main-wrapper mdc-drawer-app-content">
        <!-- Navbar -->
        <?php include 'components/header.php'; ?>
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
                <!-- Search Bar -->
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
                <!-- User Information Table -->
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div class="mdc-card p-0">
                                <h6 class="card-title card-padding pb-0">User Information Table</h6>
                                <div class="table-responsive">
                                    <table id="data-table" class="table">
                                        <thead class="thead">
                                            <tr>
                                                <th class='text-left'>User Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- User data will be injected here -->
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" id="load-more">Load Data</button>
                                </div>
                                <!-- View User Modal -->
                                <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewUserModalLabel">User Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>User ID:</strong> <span id="viewUserId"></span></p>
                                                <p><strong>Name:</strong> <span id="viewUserName"></span></p>
                                                <p><strong>Email:</strong> <span id="viewUserEmail"></span></p>
                                                <p><strong>Phone:</strong> <span id="viewUserPhone"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit User Modal -->
                                <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editUserForm">
                                                    <input type="hidden" id="editUserId">
                                                    <div class="form-group">
                                                        <label for="editUserName">Name</label>
                                                        <input type="text" class="form-control" id="editUserName" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editUserEmail">Email</label>
                                                        <input type="email" class="form-control" id="editUserEmail" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editUserPhone">Phone</label>
                                                        <input type="text" class="form-control" id="editUserPhone">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modals -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

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
            allUsers = data; 
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
                        <td>${item.first_name}</td>
                        <td>${item.email}</td>
                        <td>
                            <button class='btn btn-light btn-view-user' data-id="${item.id}">
                                <i class="fa-solid fa-eye"></i> View
                            </button>
                            <button class='btn btn-warning btn-edit-user' data-id="${item.id}">
                                <i class="fa-solid fa-pen"></i> Edit
                            </button>
                            <button class='btn btn-danger btn-reset-password' data-id="${item.id}">
                                <i class="fa-solid fa-lock"></i> Reset Password
                            </button>
                        </td>
                    </tr>
                `);
            }
        });

        displayedUsers += nextUsers.length; 
        if (displayedUsers >= allUsers.length) {
            $('#load-more').hide(); // Hide load more button if no more users
        }
    }

    $('#load-more').click(loadMoreUsers);

    // View User Details
    $('#data-table').on('click', '.btn-view-user', function() {
        const userId = $(this).data('id');
        const user = allUsers.find(u => u.id === userId);
        $('#viewUserId').text(user.user_id);
        $('#viewUserName').text(user.first_name);
        $('#viewUserEmail').text(user.email);
        $('#viewUserPhone').text(user.phone);
        $('#viewUserModal').modal('show');
    });

    // Edit User
    $('#data-table').on('click', '.btn-edit-user', function() {
        const userId = $(this).data('id');
        const user = allUsers.find(u => u.id === userId);
        $('#editUserId').val(user.user_id);
        $('#editUserName').val(user.first_name);
        $('#editUserEmail').val(user.email);
        $('#editUserPhone').val(user.phone);
        $('#editUserModal').modal('show');
    });

    $('#editUserForm').submit(function(e) {
        e.preventDefault();
        const userId = $('#editUserId').val();
        const updatedData = {
            user_id: userId,
            first_name: $('#editUserName').val(),
            email: $('#editUserEmail').val(),
            phone: $('#editUserPhone').val()
        };

        // Update user info via API
        $.ajax({
            url: `${baseUrl}/api/users/${userId}/`,
            type: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify(updatedData),
            success: function() {
                alert('User updated successfully.');
                $('#editUserModal').modal('hide');
                // Refresh user table or user data
                location.reload();
            },
            error: function(err) {
                console.error('Error updating user:', err); // Debug log for error
            }
        });
    });

    // Reset Password
    $('#data-table').on('click', '.btn-reset-password', function() {
        const userId = $(this).data('id');
        if (confirm('Are you sure you want to reset this user\'s password?')) {
            $.ajax({
                url: `${baseUrl}/api/reset-password/${userId}/`,
                type: 'POST',
                headers: { Authorization: `Bearer ${access}` },
                success: function() {
                    alert('Password reset email sent to user.');
                },
                error: function(err) {
                    console.error('Error resetting password:', err); // Debug log for error
                }
            });
        }
    });
});
</script>
<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<!--<script src="./assets/js/material.js"></script>
<script src="./assets/js/misc.js"></script>

</body>
</html>








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
        url: `${baseUrl}/api/users/`,
        type: 'GET',
        success: function(data) {
            console.log('Data received from API:', data); // Debug log for API data
            allUsers = data; 
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
                        <td>${item.first_name}</td>
                        <td>${item.email}</td>
                        <td>
                            <button class='btn btn-light btn-view-user' data-id="${item.id}">
                                <i class="fa-solid fa-eye"></i> View
                            </button>
                            <button class='btn btn-light btn-edit-user' data-id="${item.id}">
                                <i class="fa-solid fa-pen"></i> Edit
                            </button>
                            <button class='btn btn-light btn-reset-password' data-id="${item.id}">
                                <i class="fa-solid fa-lock"></i> Reset Password
                            </button>
                        </td>
                    </tr>
                `);
            }
        });

        displayedUsers += nextUsers.length; 
        if (displayedUsers >= allUsers.length) {
            $('#load-more').hide(); // Hide load more button if no more users
        }
    }

    $('#load-more').click(loadMoreUsers);

    // View User Details
    $('#data-table').on('click', '.btn-view-user', function() {
        const userId = $(this).data('id');
        const user = allUsers.find(u => u.id === userId);
        $('#viewUserId').text(user.user_id);
        $('#viewUserName').text(user.first_name);
        $('#viewUserEmail').text(user.email);
        $('#viewUserPhone').text(user.phone);
        $('#viewUserModal').modal('show');
    });

    // Edit User
    $('#data-table').on('click', '.btn-edit-user', function() {
		console.log("edit clicked")
        const userId = $(this).data('id');
        const user = allUsers.find(u => u.id === userId);
        $('#editUserId').val(user.user_id);
        $('#editUserName').val(user.first_name);
        $('#editUserEmail').val(user.email);
        $('#editUserPhone').val(user.phone);
        $('#editUserModal').modal('show');
    });

    $('#editUserForm').submit(function(e) {
        e.preventDefault();
        const userId = $('#editUserId').val();
        const updatedData = {
            user_id: userId,
            first_name: $('#editUserName').val(),
            email: $('#editUserEmail').val(),
            phone: $('#editUserPhone').val()
        };

        // Update user info via API
        $.ajax({
            url: `${baseUrl}/api/users/${userId}/`,
            type: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify(updatedData),
            success: function() {
                alert('User updated successfully.');
                $('#editUserModal').modal('hide');
                // Refresh user table or user data
                location.reload();
            },
            error: function(err) {
                console.error('Error updating user:', err); // Debug log for error
            }
        });
    });

    // Reset Password
   
   $(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					url: `${baseUrl}/api/users/${userId}/`,
					type: 'PUT',
					data: { reset_password: true },
					success: function(response) {
						alert('Password reset successfully.');
					},
					error: function(err) {
						console.log('Error resetting password:', err);
					}
				});
			}
		});
});
</script>-->


<!--<script>
	$(document).ready(function() {
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");

		// Handle View button click
		$(document).on('click', '.btn-view-user', function() {
			const userId = $(this).data('id');
			
			
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,
				type: 'GET',
				success: function(user) {
					
					$('#viewUserId').text(user.id);
					$('#viewUserName').text(user.first_name);
					$('#viewUserEmail').text(user.email);
					$('#viewUserPhone').text(user.phone);

					$('#viewUserModal').modal('show');
				},
				error: function(err) {
					console.log('Error fetching user details:', err);
				}
			});
		});

		// Handle Edit button click
		$(document).on('click', '.btn-edit-user', function() {
			const userId = $(this).data('id');

			// Fetch the user details via AJAX
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,
				type: 'GET',
				success: function(user) {
					// Fill the modal form with user details
					$('#editUserId').val(user.id);
					$('#editUserName').val(user.first_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.phone);

					// Show the Edit User Modal
					$('#editUserModal').modal('show');
				},
				error: function(err) {
					console.log('Error fetching user details:', err);
				}
			});
		});

		// Handle Edit User form submission
		$('#editUserForm').submit(function(e) {
			e.preventDefault(); // Prevent the form from submitting the traditional way

			const userId = $('#editUserId').val(); // Get the user ID from the hidden field
			const userData = {
				first_name: $('#editUserName').val(),
				email: $('#editUserEmail').val(),
				phone: $('#editUserPhone').val(),
			};

			// Send the updated user data to the server
			$.ajax({
				url: `${baseUrl}/api/user/${userId}/`,
				type: 'PUT', // Assuming the API uses PUT for updates
				data: JSON.stringify(userData), // Convert data to JSON
				contentType: 'application/json', // Specify content type
				success: function(response) {
					console.log('User updated successfully:', response);
					$('#editUserModal').modal('hide'); // Hide the modal after success
					location.reload(); // Optionally reload the page to reflect changes
				},
				error: function(err) {
					console.log('Error updating user:', err);
				}
			});
		});

		// Handle Reset Password button click
		$(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					url: `${baseUrl}/api/users/${userId}/`,
					type: 'PUT',
					data: { reset_password: true },
					success: function(response) {
						alert('Password reset successfully.');
					},
					error: function(err) {
						console.log('Error resetting password:', err);
					}
				});
			}
		});
	});

  </script>-->
  
  
  
  
  
  <!--Orginal File
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dashboard</title>
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
  
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  
  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>-->
			<style>
			  max-width: 100% !important;
				width: 80% !important;
			</style>

</head>
<body>

<script>
	// Ensure the user ID is being passed correctly
		/*$('#data-table').on('click', '.btn-view-user', function() {
			const userId = $(this).data('id'); // This should pull the correct user ID
			const user = allUsers.find(u => u.id === userId);
			if (user) {
				$('#viewUserId').text(user.user_id);
				$('#viewUserName').text(user.first_name);
				$('#viewUserEmail').text(user.email);
				$('#viewUserPhone').text(user.phone);
				$('#viewUserAge').text(user.age);
				$('#viewUserDOB').text(user.dob);
				$('#viewUserAddress').text(user.address);
				$('#viewUserDept').text(user.role.role);
				
				$('#viewUserModal').modal('show');
			} else {
				console.error('User not found:', userId); // Log if user is not found
			}
		});

		// Edit User
		$('#data-table').on('click', '.btn-edit-user', function() {
			const userId = $(this).data('id');
			const user = allUsers.find(u => u.id === userId);
			if (user) {
				$('#editUserId').val(user.user_id);
				$('#editUserName').val(user.first_name);
				$('#editUserEmail').val(user.email);
				$('#editUserPhone').val(user.phone);
				$('#editUserModal').modal('show');
			} else {
				console.error('User not found for editing:', userId); // Log if user is not found
			}
		});

		$('#editUserForm').submit(function(e) {
			e.preventDefault();
			const userId = $('#editUserId').val(); // Ensure this is correctly populated
			const userID = $(this).data('id');
			const updatedData = {
				
				first_name: $('#editUserName').val(),
				email: $('#editUserEmail').val(),
				phone: $('#editUserPhone').val()
			};
			

			// Update user info via API
			$.ajax({
				url: `${baseUrl}/api/users/${userId}/`, // Ensure this URL uses the correct userId
				type: 'PUT',
				contentType: 'application/json',
				data: JSON.stringify(updatedData),
				success: function() {
					alert('User updated successfully.');
					$('#editUserModal').modal('hide');
					// Refresh user table or user data
					location.reload();
				},
				error: function(err) {
					console.error('Error updating user:', err); // Debug log for error
				}
			});
		});*/
</script>
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
							<td>${item.first_name}</td>
							<td>${item.email}</td>
							<td>
								<button class='btn btn-light btn-view-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
									<i class="fa-solid fa-eye"></i> View
								</button>
								<button class='btn btn-light btn-edit-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#editUserModal">
									<i class="fa-solid fa-pen-to-square"></i> Edit
								</button>
								<button class='btn btn-light btn-reset-password' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
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
				url: `${baseUrl}/api/user/${userId}/`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					//let full_name = user.first_name, user.last_name;
					
					$('#viewUserDp').attr('src', imageUrl);
					$('#viewUserId').text(user.user_id);
					$('#viewUserName').text(user.first_name);
					$('#viewUserEmail').text(user.email);
					$('#viewUserPhone').text(user.phone);
					$('#viewUserAge').text(user.age);
					$('#viewUserDOB').text(user.dob);
					$('#viewUserAddress').text(user.address);
					$('#viewUserRole').text(user.role.role);

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
				url: `${baseUrl}/api/user/${userId}/`,  // Use the API endpoint for the user
				type: 'GET',
				success: function(user) {
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					
					$('#editUserDpImage').attr('src', imageUrl);
					$('#editUserId').val(user.id);  // Populate form fields with fetched data
					$('#editUserName').val(user.first_name);
					$('#editUserEmail').val(user.email);
					$('#editUserPhone').val(user.phone);
					$('#editUserAge').val(user.age);
					$('#editUserDOB').val(user.dob);

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
			formData.append('first_name', $('#editUserName').val());
			formData.append('email', $('#editUserEmail').val());
			formData.append('phone', $('#editUserPhone').val());
			formData.append('age', $('#editUserAge').val());
			formData.append('dob', $('#editUserDOB').val());
			
			// Check if the file input exists and if a file has been selected
			const dpInput = $('#editUserDpInput')[0];
			if (dpInput && dpInput.files && dpInput.files.length > 0) {
				const dpImage = dpInput.files[0]; // Get the first file
				formData.append('dp_image', dpImage);
			}

			// Perform the AJAX request
			$.ajax({
				url: `${baseUrl}/api/users/${userId}/`, // Use `id` here for endpoint
				type: 'PUT',
				data: formData,
				processData: false, // Required for FormData
				contentType: false, // Required for FormData
				success: function(response) {
					alert('User updated successfully.');
					$('#editUserModal').modal('hide');
					location.reload(); // Refresh user table or user data
				},
				error: function(err) {
					console.error('Error updating user:', err);
					alert('Failed to update user. Please check the console for more details.');
				}
			});
		});


		
		/*$('#editUserForm').submit(function(e) {
			e.preventDefault();
			const userId = $('#editUserId').val(); // Use the `id` instead of `user_id`
			const updatedData = {
				first_name: $('#editUserName').val(),
				email: $('#editUserEmail').val(),
				phone: $('#editUserPhone').val(),
				age: $('#editUserAge').val(),
				dob: $('#editUserDOB').val(),
				//dp_image: $('#editUserDp').val(),
			};

			// Update user info via API using `id`
			$.ajax({
				url: `${baseUrl}/api/users/${userId}/`, // Use `id` here for endpoint, like 10/ or 19/
				type: 'PUT',
				contentType: 'multipart/form-data',
				data: JSON.stringify(updatedData),
				success: function() {
					alert('User updated successfully.');
					$('#editUserModal').modal('hide');
					location.reload(); // Refresh user table or user data
				},
				error: function(err) {
					console.error('Error updating user:', err);
				}
			});
		});*/




		

		// Reset Password
		$(document).on('click', '.btn-reset-password', function() {
			const userId = $(this).data('id');

			if (confirm('Are you sure you want to reset this user\'s password?')) {
				// Reset the password via AJAX
				$.ajax({
					url: `${baseUrl}/api/users/${userId}/`,
					type: 'PUT',
					data: { reset_password: true },
					success: function(response) {
						alert('Password reset successfully.');
					},
					error: function(err) {
						console.log('Error resetting password:', err);
					}
				});
			}
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
                  <h6 class="card-title card-padding pb-0">User Information Table</h6>
                  <div class="table-responsive">
					<table id="data-table" class="table">
						<thead class = "thead">
							<tr>
								<th class='text-left'>User Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Actions</th>
								</tr>
						</thead>
						<tbody>
								
						</tbody>
					</table>
					<button class="btn btn-primary" id="load-more">Load Data</button>
				  </div>
				  
				  <!--Test-->
					<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					  Launch demo modal
					</button>-->

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							...
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						  </div>
						</div>
					  </div>
					</div>
					<!--test-->
				  
				  <!-- View User Modal -->
					<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
					  <div class="modal-dialog custom-modal-width" role="document" >
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="viewUserModalLabel">User Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							<!-- Display User Details -->
							<div class='row'>
								
								<div class='col-md-5'>
									<div>
										<img src="" alt="Profile Picture" class="profile-dp" id="viewUserDp">
										<br/>
										<p><strong>User ID:</strong> <span id="viewUserId"></span></p>
										<p><strong>Role:</strong> <span id="viewUserRole"></span></p>
										<p><strong>Name:</strong> <span id="viewUserName"></span></p>
									</div>
								</div>
								<div class='col-md-7'>
									<div>
										<table class="table table-striped">
											<thead>
												<tr>
													<th class="text-left">Email</th>
													<th>Age</th>
												</tr>
											</thead>
											<tbody>
												<td id="viewUserEmail" class="text-left"></td>
												<td id="viewUserAge"></td>
											</tbody>
											<thead>
												<tr>
													<th class="text-left">Phone</th>
													<th>DOB</th>
												</tr>
											</thead>
											<tbody>
												<td id="viewUserPhone" class="text-left"></td>
												<td id="viewUserDOB"></td>
											</tbody>
											
										</table>
										
									</div>
									<!--<div >
										<div><p><strong>User ID:</strong> <span id="viewUserId"></span></p><div>
										<div><p><strong>Name:</strong> <span id="viewUserName"></span></p><div>
									</div>
									<p><strong>Email:</strong> <span id="viewUserEmail"></span></p>
									<p><strong>Phone:</strong> <span id="viewUserPhone"></span></p>
									<p><strong>Age:</strong> <span id="viewUserAge"></span></p>
									<p><strong>DOB:</strong> <span id="viewUserDOB"></span></p>
									<p><strong>Role:</strong> <span id="viewUserDept"></span></p>
									<p><strong>Address:</strong> <span id="viewUserAddress"></span></p>-->
								</div>
							</div>
							<!-- Add more fields as needed -->
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>

					<!-- Edit User Modal -->
					<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
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
								<img src="" alt="Profile Picture" class="profile-dp" id="editUserDpImage">
								<!--<button></button>-->
								<br />
								<div class="row">
									<div class='col-md-2'><label for="editUserDp">Change Profile Picture:</label></div>
									<div class='col-md-10'><input type="file" class="form-control" id="editUserDpInput" name="dp_image"></div>
								</div>
							  </div>
                             
							  <div class="form-group">
								  <div class="row">
									<div class="col-md-2"><label for="editUserName">Name</label></div>
									<div class="col-md-10"><input type="text" class="form-control" id="editUserName" name="username"></div>
								  </div>
							  </div>
							  <div class="form-group">
								  <div class="row">
									<div class = "col-md-2"><label for="editUserEmail">Email</label></div>
									<div class="col-md-10"><input type="email" class="form-control" id="editUserEmail" name="email"></div>
								  </div>
							  </div>
							  <div class="form-group">
								  <div class="row">
									<div class="col-md-2"><label for="editUserAge">Age</label></div>
									<div class="col-md-10"><input type="text" class="form-control" id="editUserAge" name="age"></div>
								  </div>
							  </div>
							  <div class="form-group">
								  <div class="row">
									<div class="col-md-2"><label for="editUserPhone">Phone</label></div>
									<div class="col-md-10"><input type="text" class="form-control" id="editUserPhone" name="phone"></div>
								  </div>
							  </div>
                              <div class="form-group">
								  <div class="row">
									<div class="col-md-2"><label for="editUserPhone">DOB</label></div>
									<div class="col-md-10"><input type="date" class="form-control" id="editUserDOB" name="dob"></div>
								  </div>
							  </div>

							  <!-- Add more fields as necessary -->
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  <button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						  </form>
						</div>
					  </div>
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
  
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chartjs/Chart.min.js"></script>
  
  <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 

  