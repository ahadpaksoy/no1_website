<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>İletişim</title>
  <link href="../Web-Teknolojileri-Proje-main/css/iletisim.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
  <div align="center" style="margin-top:30vh;">
  <div class="card text-white bg-dark mb-3" style="max-width: 25rem;padding:10px 10px;margin-top:10%;">
  <table class="text-center table table-dark">
            <tr>
              <th>Ad: </th>
              <td><?php echo $_POST["ad"]; ?></td>
            </tr>
            <tr>
              <th>Soyad: </th>
              <td><?php echo $_POST["soyad"]; ?></td>
            </tr>
            <tr>
              <th>E-Mail: </th>
              <td><?php echo $_POST["email"]; ?></td>
            </tr>
            <tr>
              <th>Konu: </th>
              <td> <?php echo"".$_POST["konu"]?></td>
            </tr>
            <tr>
              <th>Message: </th>
              <td> <?php echo"".$_POST["message"]?></td>
          </tr>
                       
  </table>
  </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
  <script src="../js/iletisim.js"></script>
</body>

</html>