<?php
    $filiais = $_POST['filiais'];
    $produtos = $_POST['produtos'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos e Filiais</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: white;
        }
        .container {
            background-color: #495057;
            border-radius: 8px;
            padding: 30px;
        }
        .table {
            background-color: #6c757d;
            color: white;
        }
        .table th, .table td {
            color: white;
        }
        .form-control {
            background-color: #6c757d;
            color: white;
            border: 1px solid #495057;
        }
        .form-control:focus {
            background-color: #495057;
            color: white;
            border-color: #80bdff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;"> 

<?php
    echo "<div class='container'>";
    echo "<h2 class='text-center mb-4'>Cadastro de Produtos e Filiais</h2>";

    echo "<form method='POST' action='estoque.php'>";
    echo "<table class='table table-bordered table-striped'>";

    echo "<tr><td></td><td colspan='$produtos'>Produtos</td></tr>";

    echo "<tr><td>Filiais</td>";
    for ($j = 0; $j < $produtos; $j++) {
        echo "<td>" . ($j) . "</td>";
    }
    echo "</tr>";

    for ($i = 0; $i < $filiais; $i++) {
        echo "<tr>";
        echo "<td>" . ($i) . "</td>";

        for ($j = 0; $j < $produtos; $j++) {
            echo "<td><input type='number' class='form-control' name='valores[$i][$j]'></td>";
        }
        echo "</tr>";
    }

    echo "<tr><td colspan='" . ($produtos + 1) . "' class='text-center'><input type='submit' class='btn btn-primary' value='Enviar'></td></tr>";

    echo "</table>";
    echo "</form>";
    echo "</div>";
?>

</body>
</html>
