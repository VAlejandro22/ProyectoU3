<?php
//database conection  file
include('php/dbconnection.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/estiln.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="assets/js/funciones.js"></script>
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="javascript:;" id="enlaceCambio">
              <i class="nc-icon nc-bank"></i>
              <p>Realizar Compra</p>
            </a>
          </li>
          <li>
            <a href="javascript:;" id="enlaceCambio2">
              <i class="nc-icon nc-diamond"></i>
              <p>Second Item</p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <i class="nc-icon nc-pin-3"></i>
              <p>Third Item</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Title</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12" id="form-cprs" style="display: block;">
            <div class="card ">
              <div class="card-header ">
                <a href="#" class="btn btn-primary btn-round" id="btn-cmpra">Realizar Compra</a>
                <hr>
              </div>
              <div class="card-body ">

                <!---------------------------- Hoja de compras ----------------------------->
                <div id="hoja-compras">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>TIPO</th>
                        <th>CODIGO</th>
                        <th>FECHA COMPRA</th>
                        <th>PRECIO TOTAL</th>



                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $ret=mysqli_query($con,"select * from compra");
                          $cnt=1;
                          $row=mysqli_num_rows($ret);
                          if($row>0){
                          while ($row=mysqli_fetch_array($ret)) {
                          
                        ?>
                      <!--Fetch the Records -->
                      <tr>
                        <td>
                          <?php echo $cnt;?>
                        </td>
                        <td>
                          <?php  echo $row['TIPO'];?>
                        </td>
                        <td>
                          <?php  echo $row['CODIGO'];?>
                        </td>
                        <td>
                          <?php  echo $row['F_COMPRA'];?>
                        </td>
                        <td>
                          <?php  echo $row['PRECIOT'];?>
                        </td>

                      </tr>
                      <?php 
                        $cnt=$cnt+1;
                        } } else {
                      ?>
                      <tr>
                        <th style="text-align:center; color:red;" colspan="5">No Record Found</th>
                      </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>

                <!---------------------------- fomrulario para hacer compra----------------------------->


                <div id="form-compras" style="display: none;">

                  <form method="POST">
                    <div id="slc-tipo">
                      <!-- <button class="btn btn-success btn-lg btn-block" name="tipo" value="herramienta">Herramientas</button>
                          <button class="btn btn-success btn-lg btn-block" name="tipo" value="material">Materiales</button> -->
                      <label for="unidad">Selecciona tipo de objeto a ingresar:</label>
                      <select name="tipo" id="tipo" >
                        <option value="nada">Ninguno</option>
                        <option value="Herramienta">Herramienta</option>
                        <option value="Material">Material</option>
                      </select>
                    </div>
                    <hr>
                    <div id="form-h" >
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col"><input type="text" class="form-control" name="fname" placeholder="Codigo"
                              required="true"></div>
                          <div class="col"><input type="text" class="form-control" name="lname"
                              placeholder="Nombre Producto" required="true"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="costo" placeholder="Ingrese costo unitario"
                          required='true' step='0.01' id="valorUnitario" >
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="cantidad" placeholder="Ingrese cantidad"
                          required='true' id="cantidad">
                      </div>
                      <div class="form-group">
                          <p>Total: <span id="valorTotal">0.00</span></p>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="fecha_actual"
                          value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
                      </div>
                    </div>
<!-------------------------------------------------------------------------------------------------------------->
                    <div id="form-m">
                    <div class="form-group">
                        <div class="row">
                          <div class="col"><input type="text" class="form-control" name="fname" placeholder="Codigo"
                              required="true"></div>
                          <div class="col"><input type="text" class="form-control" name="lname"
                              placeholder="Nombre Producto" required="true"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col">
                          <select name="tipo-medida" id="tipo-medida" >
                        <option value="masa">Masa</option>
                        <option value="area">Area</option>
                        <option value="volumen">Volumen</option>
                      </select>
                          </div>
                          <div class="col"><input type="text" class="form-control" name="fname" placeholder="Valor"
                              required="true"></div>
                          <div class="col"><input type="text" class="form-control" name="lname"
                              placeholder="Unidad de medida" required="true"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="costo" placeholder="Ingrese costo unitario"
                          required='true' step='0.01' id="valorUnitario" >
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="cantidad" placeholder="Ingrese cantidad"
                          required='true' id="cantidad">
                      </div>
                      <div class="form-group">
                          <p>Total: <span id="valorTotal">0.00</span></p>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="fecha_actual"
                          value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
                    </div>
  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>