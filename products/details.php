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
          
            <div class="card col-7">
              <img class="card-img-top" src="https://media.sofa.com/thumbor/unsafe/fit-in/440x220/center/middle/https%3A%2F%2Fmedia.sofa.com%2Fmedias%2F%3Fcontext%3DbWFzdGVyfHJvb3R8MTUyNDc3N3xpbWFnZS9qcGVnfGg1ZS9oZjAvODk2ODE1MTYyOTg1NC5qcGd8ZTA5YWU3M2Q3ZmQzYWE3MDM1NDJkYjQ5NzYzMWI1N2U5ZTljM2YzYTliMTBmNTg4NWE3MmVkZWZlM2MwYTU1NQ" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-primary" style="background-color: green">Editar</a>
                <a onclick="remove(this)" href="#" class="btn btn-primary" style="background-color: red">Eliminar</a>
              </div>
          
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