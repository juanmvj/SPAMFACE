<!DOCTYPE html>
<html lang="en">
<head>
    <title>spamface</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Logo-->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a href="#" class="navbar-brand">SPAMFACE</a>
            </div>
            <!--items del menu -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <!-- Dropdown menu-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi perfil<spanc class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">amigos</a></li>
                            <li><a href="#">fotos</a></li>
                            <li><a href="#">configuracion</a></li>
                        </ul>
                    </li>
                    
                </ul>
            <!-- alineado a la dereha -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>    
                </ul>

            </div>
        </div> 
    </nav>
    <!-- -->
    <div class="container">
        <h2>wells are sections with borders and grey backgrounds</h2>
        <!--Para separar algo e contenido de la pagina principal -->

        <div class="well">Basic Well</div>
        <div class="well well-sm">Basic Well</div>
        
        <div class="alert alert-success">Congratulations, you just won the game</div>

        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> No olvides algo 
        </div>

        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Estás seguro ? 
        </div>



    </div>
    <!-- -->
	<div class="container-fluid" style="background-color: #b22222">
	<h2 style="background-color: white">Esta es una prueba de como funciona la pagina</h2>	
	</div>

    <div class="container-fluid">
        <p>prueba de una tabla</p>
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>sexo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan</td>
                    <td>20</td>
                    <td>M</td>
                </tr>
                <tr>
                    <td>Pedro</td>
                    <td>23</td>
                    <td>M</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <img src="images/linux.jpg" class="img-responsive">
    </div>
 
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>




</body>
</html>