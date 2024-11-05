	<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
		  <div class="text-center">
			<a href="#" class="brand-logo">
			  <img src="./assets/images/default/FORANTS-2.png" alt="logo">
			</a>
		  </div>
      </div>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="dashboard.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
			<div class="mdc-list-item mdc-drawer-item">
			  <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="configurations-sub-menu">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
				Configurations
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
			  </a>
			  <div class="mdc-expansion-panel" id="configurations-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="registration.php">
					  Add User
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="addbulkusers.php">
					  Add Bulk User
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="useroperations.php">
					  User Operations
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="addbulkstudents.php">
					  Add Bulk Student
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="departments.php">
					  Departments
					</a>
				  </div>
				 
				</nav>
			  </div>
			</div>

			<!-- Second Dropdown: Students -->
			<div class="mdc-list-item mdc-drawer-item">
			  <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="students-sub-menu">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">people</i>
				Students
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
			  </a>
			  <div class="mdc-expansion-panel" id="students-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="studentoperations.php">
					  Student operations
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="attendance.php">
					  Attendance
					</a>
				  </div>
				  
				</nav>
			  </div>
			</div>
            
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#" data-toggle="expansionPanel" data-target="faculty-sub-menu">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                Faculty Members
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
			  
			  <div class="mdc-expansion-panel" id="faculty-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="facultyoperations.php">
					  Faculty Operations
					</a>
				  </div>
				</nav>
			  </div>
            </div>
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#" data-toggle="expansionPanel" data-target="academic-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">school</i>
				Academics
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
			  
			  <div class="mdc-expansion-panel" id="academic-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="#">
					  Time Table
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="subjects.php">
					  Subjects
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="subjectassignment.php">
					  Subject Assignment
					</a>
				  </div>
				  
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="sectionassignment.php">
					  Section Assignment
					</a>
				  </div>
				</nav>
			  </div>
			  
            </div>
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#" data-toggle="expansionPanel" data-target="exam-sub-menu">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">assignment</i>
                Examination
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
			  <div class="mdc-expansion-panel" id="exam-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="#">
					  Exam Operation
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="#">
					  Exam Report
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="#">
					  Analytics
					</a>
				  </div>
				</nav>
			  </div>
            </div>
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">account_balance</i>
                 Accounts
              </a>
            </div>
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">hotel</i>
                 Hostel
              </a>
            </div>
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#"">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">directions_bus</i>
                Transport
              </a>
            </div><div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">assessment</i>
                Reports
              </a>
            
          </nav>
        </div>
        
      </div>
    </aside>