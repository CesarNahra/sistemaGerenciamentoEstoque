<!DOCTYPE html>
<html>
<head>
    <title>Configurações</title>
    <link rel="stylesheet" href="../View/Assets/style.css">
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
        </form>

        <br>
        <a class="btn btn-voltar" href="../Controller/ClienteController.php?acao=dashboard">
            Voltar para o Dashboard
        </a>
    </div>
</body>
</html>