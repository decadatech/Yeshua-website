<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> Yeshua - Contato </title>

  <!-- FONTAWESOME KIT -->
  <script src="https://kit.fontawesome.com/1d2d5821dc.js"></script>
  <!---BS CSS--->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

  <!-- NAVBAR CSS -->
  <link rel="stylesheet" href="assets/css/navbar.style.css" />
  <!-- FOOTER CSS -->
  <link rel="stylesheet" href="assets/css/footer.style.css" />
  <!---SCOPED CSS--->
  <link rel="stylesheet" href="assets/css/contact.style.css">
</head>

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="sidenav-itens">
      <a href="index.html">HOME</a>
      <a href="product.html">PRODUTOS</a>
      <a href="contact.php">CONTATO</a>
    </div>
  </div>

  <nav class="navChange navLg">
    <div class="container-fluid navbar">
      <img src="assets/images/yashua-logo.png" alt="Your logo" height="80%;">
      <div class="itens-desktop-nav">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="product.html">PRODUTOS</a></li>
          <li><a class="contact" href="contact.php">CONTATO</a></li>
        </ul>
      </div>
      <button class="btn btn-success button-mobile-nav" onclick="openNav()">Menu</button>
    </div>
  </nav>

  <section>
    <div class="container header">
      <!-- <img src="assets/images/contact/undraw_contact_us_15o2.svg" /> -->
    </div>
  </section>

  <section>
    <h1>Vamos conversar?</h1>
    <h5>Estamos ansiosos para te atender!</h5>

    <form class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-4">
              <label for="company">Empresa: (Opcional)</label>
              <input type="text" class="form-control" id="company">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="address">Enreço:</label>
              <input type="text" class="form-control" id="address" required>
            </div>
            <div class="form-group col-md-4">
              <label for="complement">Complemento: (Opcional)</label>
              <input type="text" class="form-control" id="complement">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="neighborhood">Bairro:</label>
              <input type="text" class="form-control" id="neighborhood" required>
            </div>
            <div class="form-group col-md-4">
              <label for="city">Cidade:</label>
              <input type="text" class="form-control" id="city" required>
            </div>
            <div class="form-group col-md-2">
              <label for="state">UF:</label>
              <select class="form-control" id="state" required>
                <option>SP</option>
                <option>RJ</option>
                <option>-</option>
                <option>-</option>
                <option>-</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="zipcode">CEP:</label>
              <input type="text" class="form-control" id="zipcode" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Telefone:</label>
              <input type="text" class="form-control" id="phone" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="message">Mensagem:</label>
              <textarea class="form-control" id="message" required></textarea>
            </div>
          </div>

          <button type="submit" class="">Enviar</button>

        </div>

        <div class="col-md-4 contact-info">
          <h4>Informações de contato</h4>
          <p><i class="fas fa-map-marker-alt"></i> Bragança Pta.</p> 
          <p><i class="fas fa-envelope"></i> salesrepsy@gmail.com</p>
          <p><i class="fas fa-envelope"></i> julianayeshua@gmail.com</p>
          <p><i class="fas fa-phone-alt"></i> (11) 97618.8465 (Whatsapp)</p>
          <p><i class="fas fa-phone-alt"></i> (11) 98992.4474 (Whatsapp)</p>
        </div>
      </div>
    </form>

  </section>

  <section class="footer">
    <div class="container content">
      <div class="image item">
        <img src="assets/images/footer-logo.png" />
      </div>
      <div class="about item">
        <h3>Yeshua representações</h3>
        <p>Há 15 anos atuamos no ramo de embalagens em geral, tais como, bisnagas laminadas,
          plásticas e de alumínio, cartuchos para bisnagas, rótulos, etiquetas e adesivos.</p>
      </div>

      <div class="links item">
        <h3>Navegue</h3>
        <a href="index.html"><i class="fas fa-angle-right"></i>Home</a>
        <a href="product.html"><i class="fas fa-angle-right"></i>Produtos</a>
        <a href="contact.php"><i class="fas fa-angle-right"></i>Contato</a>
      </div>

      <div class="contact item">
        <h3>Contato</h3>
        <p><i class="fas fa-map-marker-alt"></i>Rua Loren, 100 - Loren ipsum CEP 10000-000 - Loren - SP</p>
        <p><i class="fas fa-phone-alt"></i> (11) 97618.8465 </p>
        <p><i class="fas fa-envelope"></i> salesrepsy@gmail.com </p>
        <p><i class="fas fa-clock"></i> Segunda à Sexta das 9h às 18h</p>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container">
        Copyright © <span class="date-dynamic"></span> <a href="https://www.decadatech.com/">Decada Technology</a>
      </div>
    </div>
  </section>

  <!---JQUERY--->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!---BS POPPER JS--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!---BS JS--->
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- NAVBAR JS -->
  <script type="text/javascript" src="assets/js/navbar.functions.js"></script>
</body>

</html>