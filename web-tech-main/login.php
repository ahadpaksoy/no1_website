<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Giriş</title>
    <link href="css/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html" id="first">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sehrim.html">Sehir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="miras.html">Miras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ilgi_alanlarim.html">İlgi Alanlari</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ozgecmis.html">CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
</nav>

<div align="center">
  <div class="card text-white bg-dark mb-3" style="max-width: 40rem;padding:10px 10px;margin-top:35vh;">
  <?php if($_POST["email"]=="b201210007@gmail.com" && $_POST["password"]=="b201210007")
			{
        echo"Merhaba ".$_POST["email"];
        echo"<br>Girişin Onaylandı.";
      }
      else{
        echo "Kullanıcı e postası ya da şifre hatalı!";
        header("refresh:2; login.html");
      }    
        ?>
  </div>
</div>

    

   

</body>

</html>