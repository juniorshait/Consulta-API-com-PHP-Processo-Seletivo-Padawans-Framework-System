<?php
session_start();
ob_start();
$nome = $_SESSION['nome'];
if ($nome == "") {
    header("location: index.php");
} else {
    $url = "https://jsonplaceholder.typicode.com/posts";
    $api = json_decode(file_get_contents($url));
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="sortcut icon" href="image/shait.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/paginas.css" />

    <title>Postagens</title>
</head>

<header>
    <nav class="navbar" style="background-color:#282a36;" id="menuHeader">
        <a href="menu.php" class="navbar-brand">
            <img src="image/logo.jpeg" alt="" width="100" />
        </a>
        <div class="container" style="margin-left: 10%;">

            <div class="row">
                <ul class="mainmenu">
                    <li><a href="menu.php">Inicio</a></li>
                </ul>
                <ul class="mainmenu">
                    <li><a href="" align="center">Tabelas</a>
                        <ul class="submenu">
                            <li><a style="color: white;" class="dropdown-item" href="postagens.php">POSTAGENS</a></li>
                            <li><a style="color: white;" class="dropdown-item" href="albuns.php">ALBUNS</a></li>
                            <li><a style="color: white;" class="dropdown-item" href="to-dos.php">TO-DOs</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="mainmenu">
                    <li><a href="index.php">Sair</a></li>
                </ul>
            </div>
        </div>
        </li>
        </ul>
    </nav>
</header>

<body style="background-color:#d4dadd;">
    <div style="margin-left:40%; margin-top:6%;">
        <h1 style="font-style: italic;">Tabela <span style="color:rgb(71, 197, 65); font-style: italic;">Postagens</span></h1>
    </div>

    <style>
        .menu-fixo {
            position: fixed;
            top: 0;
            z-index: 99;
            transition: all .5s;
            width: 100%;
        }
    </style>
    <script>
        $(function() {
            var nav = $('#menuHeader');
            $(window).scroll(function() {
                if ($(this).scrollTop() > 150) {
                    nav.addClass("menu-fixo");
                    $('body').css('padding-top', 70);
                } else {
                    nav.removeClass("menu-fixo");
                    $('body').css('padding-top', 0);
                }
            });
        });
    </script>

    <?php
    echo "<div style='width:80%; margin-left:10%; '>";
    echo "<table id='minhaTabela' style='width:90%; 'class='table'> ";
    echo "<thead>
    <tr align='center'>
      <th scope='col'style='color:white;'>Id</th>
      <th scope='col'style='color:white;'>Id Usuário</th>
      <th scope='col'style='color:white;'>Título</th>
      <th scope='col'style='color:white;'>Body</th>
    </tr>
  </thead>";
    echo "<tbody class='table-bordered'>";


    foreach ($api as $key => $value) {
        echo "<tr>";
        echo "<td align='center' >$value->id</td>";
        echo "<td align='center' >$value->userId</td>";
        echo "<td align='center' style='font-weight:bold;color:#001c03;' >$value->title</td>";
        echo "<td align='center' >$value->body</td>";
        echo "</tr>";
    }



    echo "</tbody>";
    echo "</table>";
    echo "</div>";

    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function() {
        $('#minhaTabela').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar",
                "previous": "Anterior",
                "next": "Próximo",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próximo"
                }
            }

        });
    });
</script>

</html>
