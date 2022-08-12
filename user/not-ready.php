<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comunidade - Newron</title>
  <!-------Logo Icon------->
  <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
  <!-------CSS Icons------->
  <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
  <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
</head>

<body>
  <div class="loader"></div>
  <script src="../script/preloader.js"></script>
  <button class="return" onclick="history.go(-1)"><i class="fi fi-rr-angle-square-left"></i></button>
  <center>
    <div class="text"><i class=" fi fi-rr-delete-document"></i>
      <h2>Recurso em testes, em breve.</h2>
    </div>
  </center>

  <style>
    @import url(../style/default/style.css);
    @import url(../style/default/navbar.css);
    @import url(../style/default/footer.css);

    /*-------------------------------------------Big-Fathers-----------------------------------------------------*/
    body {
      min-height: 100vh;
      background: #f0f0f0;
      color: #121212;
    }

    .text {
      width: 100vw;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .text i {
      font-size: 200%;
      margin: 2%;
    }

    .text h2 {
      word-wrap: none;
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content;
    }

    button.return {
      border: none;
      outline: none;
      background: transparent;
      font-size: 1.725rem;
      cursor: pointer;
      margin: 2% 5% 0 2%;
      transition: .3s;
    }

    .return:hover {
      transform: scale(1.2);
    }
  </style>
</body>

</html>