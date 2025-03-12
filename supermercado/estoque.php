<?php
    $valores = $_POST['valores']; 
    $filiais = count($valores);
    $produtos = count($valores[0]);

    $totalColuna = array_fill(0, $produtos, 0);
    $totalLinha = [];

    for ($i = 0; $i < $filiais; $i++) {
        $linhaTotal = 0;
        for ($j = 0; $j < $produtos; $j++) {
            $linhaTotal += $valores[$i][$j];
            $totalColuna[$j] += $valores[$i][$j];
        }
        $totalLinha[$i] = $linhaTotal;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Totais de Produtos e Filiais</title>
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
        .table-bordered {
            border-color: #495057;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #495057;
        }
        .table-striped tbody tr:nth-child(even) {
            background-color: #343a40;
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
    echo "<h2 class='text-center mb-4'>Totais de Produtos e Filiais</h2>";

    echo "<table class='table table-bordered table-striped'>";
    echo "<tr><td></td><td colspan='$produtos'>Produtos</td><td>Total</td></tr>";
    echo "<tr><td>Filiais</td>";

    for ($j = 0; $j < $produtos; $j++) {
        echo "<td>" . ($j) . "</td>";
    }
    echo "<td>Total</td>";
    echo "</tr>";

    for ($i = 0; $i < $filiais; $i++) {
        echo "<tr>";
        echo "<td>" . ($i) . "</td>"; 

        for ($j = 0; $j < $produtos; $j++) {
            echo "<td>" . $valores[$i][$j] . "</td>";
        }

        echo "<td>" . $totalLinha[$i] . "</td>";
        echo "</tr>";
    }

    echo "<tr><td>Total</td>";
    for ($j = 0; $j < $produtos; $j++) {
        echo "<td>" . $totalColuna[$j] . "</td>";
    }
    echo "<td></td>";
    echo "</tr>";

    echo "</table>";
    echo "</div>";
?>

</body>
</html>
