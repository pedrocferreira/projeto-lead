<!DOCTYPE html>
<html lang="en">
<head>

<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
<link rel="stylesheet" href="ccs/index.css" href="theme.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUGS</title>
</head>
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="#">
   <h1 style="color: #FFFF">HUGS</h1>
  </a>
</nav>

<body>
<div class="container">


  <form action="process.php" method="POST">
    <div class="row">
      <div class="col">
      <label for="nome">Nome </label>
        <input type="text" name="nome" class="form-control" placeholder="Nome">
      </div>
      <div class="col">
      <label for="telefone">Telefone </label>
        <input type="tel" name="telefone" class="form-control" placeholder="Telefone" 
        required>
      </div>
    </div>


      <div class="form-group">
        <label for="email">Email </label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Plataforma</label>
        <select class="form-control" name="plataforma" id="exampleFormControlSelect1">
          <option value="instagram">Instagram</option>
          <option value="facebook">Facebook</option>
          <option value="site">Site</option>
         
        </select>
      </div>
      <div class="form-group">
        <label>Data de Entrada</label>
        <div class="input-group date">
        <input type="date" name="data" class="form-control">
        <div class="input-group-addon" id="exemplo">
        <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>

</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem</label>
    <textarea class="form-control"  name="mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">Empreendimento </label>
        <select multiple class="form-control" name="empreendimento" id="exampleFormControlSelect2">
          <option value="Lead1">Lead1</option>
          <option value="Lead2">Lead2</option>
          <option value="Lead3">Lead3</option>
          <option value="Lead4">Lead4</option>
          <option value="Lead5">Lead5</option>
        </select>
      </div>

  <div class="form-group">
        

      <button type="submit" name="save" class="btn btn-primary">Enviar</button>
  </form>

</div>

</body>
</html>