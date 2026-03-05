<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../View/Assets/style.css">
    <link rel="manifest" href="../manifest.json">
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
        <h1>Editar Perfil</h1>

        <form action="ClienteController.php" method="POST">
            <fieldset>
                <legend>Dados Principais:</legend>

                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>" required>

                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required>
                
                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                <input type="hidden" name="acao" value="atualizarPerfil">
                
                <div style="margin-top: 15px;">
                    <button type="submit" class="btn">Atualizar</button>
                    <a href="ClienteController.php?acao=perfil" class="btn" style="background-color: #6c757d;">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>