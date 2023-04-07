@extends('layout.app')
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ route('customers.store')  }}" method="POST">

        {{ csrf_field() }}
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Last Name</label>
							<input name="lastName" type="text" class="form-control" required>
						</div>
            <div class="form-group">
							<label>First Name</label>
							<input name="firstName" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input name="email" type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<input name="contactNumber" type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>