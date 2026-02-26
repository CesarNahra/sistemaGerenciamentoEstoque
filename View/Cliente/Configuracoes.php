<!DOCTYPE html>
<html>
<head>
    <title>Configurações</title>
    <link rel="stylesheet" href="../View/Assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            color: #000;
            transition: 0.3s;
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

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .dark-mode {
            background-color: #1e1e1e;
            color: #ffffff;
        }
    </style>

</head>
<body class="<?= isset($_SESSION['tema']) && $_SESSION['tema'] == 'dark' ? 'dark-mode' : '' ?>">

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
        <h2>Configurações</h2>

        <form method="POST" action="../Controller/ClienteController.php?acao=alterarTema">
            
            <label class="switch">
                <input type="checkbox" name="tema" value="dark"
                    <?= ($_SESSION['tema'] ?? 'light') === 'dark' ? 'checked' : '' ?>
                    onchange="this.form.submit()">
                <span class="slider"></span>
            </label>

            <br><br>

            <button type="submit">Salvar</button>
        </form>

        <br>
        <a class="btn-voltar" href="../Controller/ClienteController.php?acao=dashboard">
            Voltar para o Dashboard
        </a>
    </div>
</body>
</html>