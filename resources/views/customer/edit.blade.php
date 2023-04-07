<!-- Edit Modal HTML -->
<div id="editEmployeeModal{{$customer->id}}" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('customers.update',$customer->id)}}" method="POST">
                {{ method_field('patch') }}
                {{ csrf_field() }}
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                    <input  type="hidden" name="id" id="id" placeholder="" value="{{$customer->id}}">					
						<div class="form-group">
							<label>Last Name</label>
							<input name="lastName"  value="{{$customer->lastName}}" type="text" class="form-control" required>
						</div>
            <div class="form-group">
							<label>First Name</label>
							<input name="firstName" value="{{$customer->firstName}}" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input name="email" value="{{$customer->email}}" type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input name="address" value="{{$customer->address}}" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<input name="contactNumber" value="{{$customer->contactNumber}}" type="text" class="form-control" required>
						</div>					
					</div>				
					
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>