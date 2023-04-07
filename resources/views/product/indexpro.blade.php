@include('partials.headerpro')
@extends('layout.app')
<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Products</b></h2>
						</div>
						<div class="col-xs-6">
							
							<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addEmployeeModal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
							@include('product.addpro')							
							  
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								
							</th>
							<th>ID</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Price</th>
						</tr>
					</thead>
					
          @foreach ($products as $product)
					<tbody>
						<tr>
							<td>
								
							</td>
							<th scope="row">{{$product->id}}</th>
              <td>{{$product->description}}</td>
              <td>{{$product->quantity}}</td>
              <td>{{$product->price}}</td>
							<td>
							
							<a href="#" class="edit" data-toggle="modal" data-target="#editEmployeeModal{{$product->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#" class="delete" data-toggle="modal" data-target="#deleteEmployeeModal{{$product->id}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
						</tr>
                        @include('product.editpro')
						@include('product.deletepro')	
					</tbody>
          @endforeach
				</table>
			
			</div>
		</div>        
    </div>
   
  
   
</body>
