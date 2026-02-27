<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Cliente</title>
    <link rel="stylesheet" href="../View/Assets/style.css">
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

        <button class="btn btn-voltar" onclick="window.location.href='../Controller/ClienteController.php?acao=dashboard'">
            Voltar ao Dashboard
        </button>

        <button class="btn btn-editar" onclick="window.location.href='../Controller/ClienteController.php?acao=editar'">
            Editar Perfil
        </button>

        <button class="btn btn-excluir" onclick="if(confirm('Tem certeza que deseja excluir sua conta?')) {
                window.location.href='../Controller/ClienteController.php?acao=excluirPerfil';
            }">
            Excluir Conta
        </button>
    </div>

</body>
</html>