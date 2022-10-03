<?php 
        include "../app/ProductController.php";
        $token = strip_tags($_SESSION["token"]);
        $productController = new ProductController();
        $products = $productController->getAllProducts($token);
?>
<!DOCTYPE html>
<html>

<head>
  <?php include "../layouts/head.template.php"; ?>
</head>

<body>

  <?php include "../layouts/nav.template.php"; ?>

  <div class="container-fluid">

    <div class="row">

      <?php include "../layouts/sidebar.template.php"; ?>

      <!-- CONTENIDO -->
      <div class="col-10">
        <div class="row">
          <a href="#" data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-primary" style="background-color: green">Añadir producto</a>
          <?php foreach($products as $product) { ?>
            <div class="card col-3">
              <img class="card-img-top" src="<?php echo $product["cover"]?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $product["name"]?></h5>
                <p class="card-text"><?php echo $product["description"]?></p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-primary" style="background-color: green">Editar</a>
                <a onclick="remove(this)" href="#" class="btn btn-primary" style="background-color: red">Eliminar</a>
                <a href="details.php" data-bs-target="#createProductModal" class="btn btn-primary" style="background-color: #ffa500">ver detalles</a>
              </div>
            </div><?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form enctype="multipart/form-data" action="../app/ProductController.php" method="post" class="FORM">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="name" type="text" class="form-control" placeholder="Name Product" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="slug" type="text" class="form-control" placeholder="Slug" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="description" type="text" class="form-control" placeholder="Description" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="features" type="text" class="form-control" placeholder="Features" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="brand_id" type="text" class="form-control" placeholder="id" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input name="cover" type="file" class="form-control">
              </div>

              <input type="hidden" name="action" value="create">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <?php include "../layouts/scripts.template.php"; ?>

  <script type="text/javascript">
    function remove(target) {
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            });
          } else {
            swal("Your imaginary file is safe!");
          }
        });
    }
  </script>

</body>

</html>