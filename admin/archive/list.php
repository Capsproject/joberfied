<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 

<!-- Display Archived Employees -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">List of Archived Employees</h1>
	</div>
</div>

<div class="table-responsive">
	<table id="archive-table" class="table table-striped table-hover table-responsive" style="font-size:12px" cellspacing="0">
		<thead>
			<tr>
				<th width="5%">EmployeeNo</th>
				<th>Name</th>
				<th>Address</th>
				<th>Sex</th>
				<th>Age</th>
				<th>ContactNo</th>
				<th>Position</th>
				<th width="14%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Retrieve and display archived employees
			$mydb->setQuery("SELECT * FROM   `tblemployees` WHERE ARCHIVE = 'Archived'");
			$archived = $mydb->loadResultList();

			foreach ($archived as $result) {
				echo '<tr>';
				echo '<td>' . $result->EMPLOYEEID . '</a></td>';
				echo '<td>' . $result->LNAME . ', ' . $result->FNAME . '</td>';
				echo '<td>' . $result->ADDRESS . '</td>';
				echo '<td>' . $result->SEX . '</td>';
				echo '<td>' . $result->AGE . '</td>';
				echo '<td>' . $result->TELNO . '</td>';
				echo '<td>' . $result->POSITION . '</td>';
				echo '<td align="center">
						<a title="Restore" href="controller.php?action=restore&id=' . $result->EMPLOYEEID . '" class="btn btn-success btn-xs">
							<span class="fa fa-undo fw-fa"></span>
						</a>
					  </td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
</div>
