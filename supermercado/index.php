<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
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

    <div class="container">
        <h2 class="text-center mb-4">Cadastro de Filiais e Produtos</h2>
        <form action="filiais.php" method="POST">
            <div class="form-group">
                <label for="filiais">Filiais</label>
                <input type="number" name="filiais" id="filiais" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="produtos">Produtos</label>
                <input type="number" name="produtos" id="produtos" class="form-control" required>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
