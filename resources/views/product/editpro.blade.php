<!-- Edit Modal HTML -->
<div id="editEmployeeModal{{$product->id}}" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('products.update',$product->id)}}" method="POST">
                {{ method_field('patch') }}
                {{ csrf_field() }}
					<div class="modal-header">						
						<h4 class="modal-title">Edit Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                    <input  type="hidden" name="id" id="id" placeholder="" value="{{$product->id}}">					
						<div class="form-group">
							<label>Description</label>
							<input name="description"  value="{{$product->description}}" type="text" class="form-control" required>
						</div>
            <div class="form-group">
							<label>Quantity</label>
							<input name="quantity" value="{{$product->quantity}}" type="number" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Price</label>
							<input name="price" value="{{$product->price}}" type="number" min="0" value="0" step=".01" class="form-control" required>
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