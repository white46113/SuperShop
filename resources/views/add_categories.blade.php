<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<form action="{{ route('submit-category', ['id' => 5]) }}" method="POST">
  @csrf

  <div class="mb-3">
    <label for="categoryName" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Enter category name">
  </div>

  <div class="mb-3">
    <label for="parentCategory" class="form-label">Parent Category</label>
    <input type="text" class="form-control" id="parentCategory" name="parent_category" placeholder="Enter parent category">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
