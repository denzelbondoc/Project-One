<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ route('products.store')  }}" method="POST">

        {{ csrf_field() }}
					<div class="modal-header">						
						<h4 class="modal-title">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Description</label>
							<input name="description" type="text" class="form-control" required>
						</div>
            <div class="form-group">
							<label>Quantity</label>
							<input name="quantity" type="number" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>Price</label>
							<input name="price" class="form-control" required type="number" min="0" value="0" step=".01">
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
