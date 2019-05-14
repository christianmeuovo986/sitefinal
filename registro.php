<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    //background: #002BFF;//
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>nerdmania</h1>
  <p>asssunto gamer</p> 
  <h4>chris correa</h4>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="w3bootstrap.php">Destaque do Seculo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="registro.php">REGISTRO</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="curriculo.php">CURRICULO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-7">
  <h1>LOCALIZACAO</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14641.431575961442!2d-51.8696442!3d-23.4475515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1286c3f69a9f00db!2sCol%C3%A9gio+Ant%C3%B4nio+Francisco+Lisboa!5e0!3m2!1spt-BR!2sbr!4v1557238124549!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>  
  <div class="col-sm-5">
       
        
          <h2>Contato</h2>
       <form action="/action_page.php">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="nome">Nome:</label>
		    <input type="text" class="form-control" id="nome" name="nome">
		  </div>
		  <div class="form-group">
		    <label for="fone">Fone:</label>
		    <input type="text" class="form-control" id="fone" name="fone">
		  </div>
		  <div class="form-group">
		    <label for="descricao">Descrição:</label>
		    <textarea class="form-control" id="descricao" name="descricao"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form> 	
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
<h2>SEJA BEM VINDO</h2>
</div>

</body>
</html>