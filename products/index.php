<!DOCTYPE html>
<html>

<head>
  <?php include "../layouts/head.template.php"; ?>
</head>

<body>

<?php 
        session_start();
        $token = strip_tags($_SESSION["token"]);
        include "../app/ProductController.php";
        $productController = new ProductController();
        $products = $productController->getAllProducts($token);
  ?>

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

          <?php for ($i = 0; $i < 6; $i++) : ?>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

          <?php endfor; ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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