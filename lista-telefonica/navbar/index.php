<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="navbar.css">
</head>
<body>
  <main>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <img width="50" height="50" src="https://img.icons8.com/dotty/80/phone-book.png" alt="phone-book"/>
          

<p class="bem-vindo" style="position: absolute; top: 30px; left: 200px; margin-left:10px ;">Bem vindo(a), <?php echo $_SESSION['nome'];?></p>


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 " style="margin-left:200px;">
          <li><a href="/main.php" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Lista</a></li>
          <li><a href="/add/add.php" class="nav-link px-2 link-dark">Adicionar</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Calculadora</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Sobre</a></li>
        </ul>

        

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Perfil</button>
          <a href="/sair.php"><button type="button" class="btn btn-primary">Sair</button></a>
        </div>
      </header>
    </div>
  </main> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

 

 