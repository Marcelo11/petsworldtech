<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

 <?php require ("navigation.php");?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Servicios
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a class="text-info" href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Servicios</li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-12 mb-12">
        <div class="card h-100">
          <h4 class="card-header">Rastreo GPS</h4>
          <div class="card-body">
            <p class="card-text">
			<p>El monitoreo de la mascota se realizará por medio de GPS, en donde, mediante un tracker, se enviará en tiempo real la posición de la mascota a un mapa integrado en la aplicación.</p>

			<p>El tracker debe tener una tarjeta sim de la compañía de telecomunicaciones que él desee, esto para que el tracker pueda ocupar las funcionalidades GPS globales. </p>

			<p>Si la mascota sale fuera de un área determinada previamente por el usuario, se enviará una alerta a la APP, indicando que el animal está del perímetro designado.</p>

			<p>Las siguientes funcionalidades estarán activas tanto para los usuarios que tengan el tracker como los que no lo tienen.</p>

			<p>Al momento de que la mascota se extravíe, el usuario puede activar una opción para dar aviso a su comunidad cercana, esto mediante notificaciones a los otros usuarios que tienen activada la opción, dicha notificación se guardará en la base de datos para poder ser vista por cualquier usuario.</p>

			<p>Cuando la mascota sea encontrada, el usuario puede desactivar la opción de mascota perdida, por lo cual también se eliminará el estado de mascota perdida desde la base de datos.</p>

			<p>Los usuarios con mascotas perdidas podrán imprimir un cartel de mascota extraviada para poder ser repartido por la comunidad.</p>

			<p>Los usuarios podrán escanear la placa de una mascota mediante el código QR (si es que esta posee una) para poder observar el perfil (sólo si este se encuentra activado como público). Esto con el fin de identificar cualquier mascota en vía pública para determinar si esta se encuentra perdida.</p>
</p>
          </div>
          <div class="card-footer">
           <!-- <a href="#" class="btn btn-primary">Learn More</a>-->
          </div>
        </div>
      </div>
      <div class="col-lg-12 mb-12">
        <div class="card h-100">
          <h4 class="card-header">Adopciones</h4>
          <div class="card-body">
            <p class="card-text">
			<p>Los usuarios podrán dar en adopción animales propios o encontrados en la calle. Cuando esto suceda, se alertará a todos los usuarios que cercanos que quieran adoptar mascotas con similares características, a su vez, se guardará en la base de datos el animal que necesita ser adoptado para que este pueda ser visto por los usuarios que requieran adoptar una mascota.</p>

            <p>Cuando el animal sea adoptado, el usuario puede desactivar la opción de mascota en adopción, por lo cual también se eliminará el estado de mascota en adopción desde la base de datos.</p>

			<p>Si un usuario requiere adoptar una mascota, esté podrá seleccionar una serie de filtros para depurar la búsqueda, para así poder contactar con el usuario que adopta al animal en cuestión.</p>
</p>
          </div>
          <div class="card-footer">
           <!-- <a href="#" class="btn btn-primary">Learn More</a>-->
        </div>
      </div>
      <div class="col-lg-12 mb-12">
        <div class="card h-100">
          <h4 class="card-header">Comunidad</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
           <!-- <a href="#" class="btn btn-primary">Learn More</a>-->
          </div>
        </div>
      </div>
	  <div class="col-lg-12 mb-12">
        <div class="card h-100">
          <h4 class="card-header">Perfil de Mascota</h4>
          <div class="card-body">
            <p class="card-text">
			<p>El Usuario debe crear al menos un perfil de mascota para poder utilizar la aplicación. En esta sección se podrá ingresar distintos datos tales como:</p>

<p>Nombre, Identificador del chip, Fotografía, Dueño, Fecha de nacimiento entre otros</p>


<p>Este perfil podrá ser público, privado o para visible para las personas que el usuario estime conveniente.</p>

<p>El usuario podrá desactivar y activar el perfil de la mascota en cualquier instante que el deseé, quedando de esta manera, oculto para los otros usuarios.</p>

<p>El usuario podrá eliminar y restaurar el perfil de la mascota, quedando de esta manera oculto para los otros usuarios, luego de seis meses, la cuenta será borrada de forma permanente de la base de datos.</p>

<p>El usuario podrá tener más de un perfil de mascota, el cual podrá seleccionar mediante una lista desplegada en la APP.</p>
</p>
          </div>
          <div class="card-footer">
          <!--  <a href="#" class="btn btn-primary">Learn More</a>-->
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
<?php require ("footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
