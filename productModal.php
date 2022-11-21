<!-- product MODAL -->
<div class="modal fade" id="modal-product" data-parsley-validate>
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="script.php" method="POST" id="form-product" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title">Add product</h5>
          <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
        </div>
        <div class="modal-body">
          <!-- This Input Allows Storing product Index  -->
          <input type="hidden" name="product-id" id="product-id">
          <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" name="category" id="product-category" required>
              <option value="">Please select</option>
              <option value="1">string</option>
              <option value="2">Wind</option>
              <option value="3">Percussion</option>
            </select>
          </div>
          <input type="file" name="file">
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="product-title" required />
          </div>

          <!-- color -->
          <div class="mb-3">
            <label class="form-label">Color</label>
            <input type="text" class="form-control" name="color" id="product-color" required />
          </div>
          <!-- quantity  -->
          <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="product-quantity" required />
          </div>

          <!-- prix -->
          <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="product-prix" required />
          </div>
          <div class="mb-0">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="10" name="description" id="product-description"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
          <button type="submit" name="delete" class="btn btn-danger product-action-btn" id="product-delete-btn">Delete</a>
            <button type="submit" name="update" class="btn btn-warning product-action-btn" id="product-update-btn">Update</a>
              <button type="submit" name="save" class="btn btn-primary product-action-btn" id="product-save-btn">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>