<!-- <? php ?> -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script> src = "js/bootstrap.min.js"</script>

</head>

<body >
    <form  method="post" action="registrar.php" class="container">
        <div class="mb-3">
            <label for="identificador" class="form-label" >identificador</label>
            <input type="text" class="form-control" id="identificador" name="identificador"  >
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="Nombre">
        </div>
        <div class="mb-3">
            <label for="detalle" class="form-label">detalle</label>
            <input type="text" class="form-control" id="detalle" name="detalle">
        </div>
        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <!-- Disabled forms -->
</body>

</html>