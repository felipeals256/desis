

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>FORMULARIO DE VOTACIÓN DESIS</title>
  </head>
  <body>


    <div class="container">

        <form class="card p-3 mt-4" action="/app/route.php?controller=FormularioController@create" method="post">
            <h4>FORMULARIO DE VOTACIÓN: </h4>


            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre y Apellido</label>
                <div class="col-12 col-sm-4">
                  <input type="text" class="form-control required" name="nombre" id="nombre" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alias" class="col-sm-2 col-form-label">Alias</label>
                <div class="col-12 col-sm-4">
                  <input type="text" class="form-control" name="alias" id="alias">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="rut" class="col-sm-2 col-form-label ">RUT</label>
                <div class="col-12 col-sm-4">
                  <input type="text" class="form-control" name="rut" id="rut">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-12 col-sm-4">
                  <input type="text" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="region" class="col-sm-2 col-form-label">Region</label>
                <div class="col-12 col-sm-4">
                  <select class="form-control" name="region" id="region">
                      <option value="">Seleccione...</option>
                  </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="comuna" class="col-sm-2 col-form-label">Comuna</label>
                <div class="col-12 col-sm-4">
                  <select class="form-control" name="comuna" id="comuna">
                      <option value="">Seleccione...</option>
                  </select>

                </div>
            </div>
            <div class="mb-3 row">
                <label for="candidato" class="col-sm-2 col-form-label">Candidato</label>
                <div class="col-12 col-sm-4">
                  <select class="form-control" name="candidato" id="candidato">
                      <option value="">Seleccione...</option>
                  </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="candidato" class="col-sm-2 col-form-label">Como se enteró de nosotros</label>
                <div class="col-12 col-sm-4">
                    <div class="form-check">
                        <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="web" value="web" name="como_entero[]">
                                  <label class="form-check-label" for="web">Web</label>
                        </div>
                        <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="tv" value="tv" name="como_entero[]">
                                  <label class="form-check-label" for="tv">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="redes_sociales" value="redes sociales" name="como_entero[]">
                                  <label class="form-check-label" for="redes_sociales">Redes Sociales</label>
                        </div>
                        <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="amigo" value="amigo" name="como_entero[]">
                                  <label class="form-check-label" for="amigo">Amigo</label>
                        </div>
                        <div id="aler_como_entero"></div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn-submit">Votar</button>
            </div>

        </form>

        
    </div>
    <script type="text/javascript" src="/assets/js/form.js"></script>
    <script type="text/javascript" src="/assets/js/validate.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>