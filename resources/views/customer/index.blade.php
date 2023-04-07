@include('partials.header')
@extends('layout.app')
<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Customers</b></h2>
						</div>
						<div class="col-xs-6">
							
							<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addEmployeeModal"><i class="material-icons">&#xE147;</i> <span>Add New Customer</span></a>
							@include('customer.add')							
							  
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								
							</th>
							<th>ID</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>EMail</th>
              <th>Address</th>
						</tr>
					</thead>
					
          @foreach ($customers as $customer)
					<tbody>
						<tr>
							<td>
								
							</td>
							<th scope="row">{{$customer->id}}</th>
              <td>{{$customer->lastName}}</td>
              <td>{{$customer->firstName}}</td>
              <td>{{$customer->email}}</td>
              <td>{{$customer->address}}</td>
							<td>
							
							<a href="#" class="edit" data-toggle="modal" data-target="#editEmployeeModal{{$customer->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#" class="delete" data-toggle="modal" data-target="#deleteEmployeeModal{{$customer->id}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
						</tr>
						@include('customer.edit')
						@include('customer.delete')
					</tbody>
          @endforeach
				</table>
			
			</div>
		</div>        
    </div>
   
  
   
</body>
