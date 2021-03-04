<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="sortcut icon" href="image/shait.png" type="image/x-icon" />
    <title>Sign In</title>
</head>

<body>

    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('image/darth.gif') 50% 50% no-repeat white;
        }
    </style>
    <div id="form">
        <form method="post" action="">
            <div class="imagem" align="center">
                <img src="image/logoIndex.jpeg" alt="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label></br>
                <input type="text" autocomplete="off" class="form-control" id="inputNome" name="nome" required>
                <small align="center" class="form-text text-muted">Informe seu nome para prosseguirmos. </small>
            </div></br>
            <div align="center">
                <input type="submit" value="Entrar" name="next" class="btn css-selector">
            </div>
            </br></br>
        </form></br>
    </div>

    <?php
    error_reporting(0);
    session_start();

    if (isset($_POST['next'])) {
        $nome = $_POST['nome'];
        if ($nome == "") {
            echo "</br><div class='alert  alert-danger fade show' role='alert'>
            <strong>Erro! </strong> Por favor, infrome seu nome!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
    </div>
    ";
        } else {
            $_SESSION['nome'] = $nome;
            echo "<div id='loader' class='loader' style='background-color:rgb(79,80,85);'></div>";
            header('Refresh: 1.3; URL=menu.php');
        }
    }


    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>