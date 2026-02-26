<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Cliente</title>
    <link rel="stylesheet" href="../View/Assets/style.css">

    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        .info {
            margin: 15px 0;
        }

        .label {
            font-weight: bold;
        }

        .btn-voltar {
            display: block;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-voltar:hover {
            background: #2980b9;
        }

        .btn-editar {
            padding: 10px 15px;
            background-color: #f39c12;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-editar:hover {
            background-color: #e67e22;
        }

        .btn-excluir {
            padding: 10px 15px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-excluir:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-brand">
            <span class="company-name">🏢 <?php echo $_SESSION['nome']; ?></span>
        </div>
        <div class="nav-links">
            <a href="ClienteController.php?acao=dashboard">🏠 Menu</a>
            <a href="ProdutoController.php?acao=listarProdutos">📦 Produtos</a>
            <a href="FornecedorController.php?acao=listarFornecedores">🚛 Fornecedores</a>
            <a href="CategoriaController.php?acao=listarCategorias">🏷️ Categorias</a>
        </div>
        <div class="nav-logout">
            <a href="AutenticaController.php?acao=logout" class="btn-logout">🚪 Sair</a>
        </div>
    </nav>

    <div class="container">
        <h2>Perfil do Cliente</h2>

        <div class="info">
            <span class="label">Nome:</span>
            <?php echo $_SESSION['nome']; ?>
        </div>

        <div class="info">
            <span class="label">Email:</span>
            <?php echo $_SESSION['email']; ?>
        </div>

        <div class="info">
            <span class="label">Empresa:</span>
            <?php echo $_SESSION['nomeEmpresa']; ?>
        </div>

        <a class="btn-voltar" href="../Controller/ClienteController.php?acao=dashboard">
            Voltar ao Dashboard
        </a>

        <a class="btn-editar" href="../Controller/ClienteController.php?acao=editar">
            Editar Perfil
        </a>

        <a class="btn-excluir" href="../Controller/ClienteController.php?acao=excluir" onclick="return confirm('Tem certeza que deseja excluir sua conta?');">
            Excluir Conta
        </a>
    </div>

</body>
</html>