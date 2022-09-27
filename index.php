<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="public/css/main.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    </head>
    <body>
        <div class="row justify-content-md-center">
            <div class="col-md-3 col-lg-3 col-sm-12" style="padding-top: 15%;">
                <form method="post" action="app/AuthController.php" class="form" style="width: 23rem;">
                    <fieldset>
                        <legend class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                            Datos de accesso
                        </legend>
                        <label>
                            Email:
                        </label>
                        <div>
                        <input type="text" name="email" class="form-control form-control-lg" placeholder="Write here">
                        </div>
                        <div class="mb-6">
                        <label>
                            Password:
                        </label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="*********">
                        </div>        
                        <div class="pt-1 mb-4" style="text-align: center" >
                        <input type="hidden" name="action" value="access">
                        <button type="submit" class="btn btn-info btn-lg btn-block">
                            Acceder
                        </button> 
                        </div>               
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>
