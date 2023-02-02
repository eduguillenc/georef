<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>ABAE Georreferenciador</title>
	  <link rel="stylesheet" type="text/css" href="src/css/styledLayerControl.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="src/css/style.css">	
  </head>
  <body>
  <div class="modal fade modal-centered" id="tabla" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Tabla<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></h4>          
        </div>
        <div class="modal-body">
        <iframe width="100%" height="600px" src="georef/tables.php" frameborder="0"></iframe>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-centered" id="addgeom" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-xl" >
      <div class="modal-content">
        <div class="modal-body">
		<div class="container-iframe">
		  <iframe width='100%' height='600px' class="responsive-iframe" src="georef/addgeom.php" frameborder='0' ></iframe>
		</div>
        </div>
        <div class="modal-footer">
        <form>          
		<span>
		<button type="submit" class="btn btn-default">Cerrar</button></form></span>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
      <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ABAE VRSS2 Geoserver</a>             
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Contacto</a></li>
              <li><a  href="#">Acerca</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Georreferenciaciones <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a data-toggle="modal" data-target="#tabla" href="#">Registros</a></li>
                  <li class="divider"></li>
                  <li><a data-toggle="modal" data-target="#addgeom" href="#">Añadir Nuevo Punto/Poligono</a></li>                  
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>
            </div>
          </nav>
        </div>

      </nav>
      <div id="map">     
      </div>      
    </div>    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/esri-leaflet@3.0.8/dist/esri-leaflet-debug.min.js"></script>
	  <script type="text/javascript" src="src/styledLayerControl.js"></script>
    <script type="text/javascript" src="src/WMSgetFeatureInfo.js"></script>
    <script type="text/javascript" src="src/geoserver.js"></script>
     <script type="text/javascript" src="src/js/app.js"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })
    </script>
  </body>
</html>
