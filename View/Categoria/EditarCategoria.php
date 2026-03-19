<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="../View/Assets/style.css">
    <link rel="manifest" href="../manifest.json">
</head>
<body class="<?= isset($_SESSION['tema']) && $_SESSION['tema'] == 'dark' ? 'dark-mode' : '' ?>">
    <nav>
        <div class="nav-brand">
            <a href="ClienteController.php?acao=dashboard" class="company-name">🏢 <?php echo $_SESSION['nome']; ?></a>
        </div>
        <div class="nav-links">
            <a href="ProdutoController.php?acao=listarProdutos">📦 Produtos</a>
            <a href="FornecedorController.php?acao=listarFornecedores">🚛 Fornecedores</a>
            <a href="CategoriaController.php?acao=listarCategorias">🏷️ Categorias</a>
            <a href="RelatorioController.php?acao=prepararMenu">📊 Relatórios</a>
            <a href="ClienteController.php?acao=perfil">👤 Meu Perfil</a>
            <a href="ClienteController.php?acao=configuracoes">⚙️ Configurações</a>
        </div>
        <div class="nav-logout">
            <a href="AutenticaController.php?acao=logout" class="btn-logout">🚪 Sair</a>
        </div>
    </nav>

    <div class="container">
        <h1>Editar Categoria</h1>

        <form action="CategoriaController.php" method="POST">
            <fieldset>
                <label>Nome da Categoria:</label>
                <input type="text" name="nome" value="<?php echo $dadosCategoria['nome']; ?>" required>
                
                <input type="hidden" name="id" value="<?php echo $dadosCategoria['id']; ?>">
                <input type="hidden" name="acao" value="atualizarCategoria">
                
                <div style="margin-top: 15px;">
                    <button type="submit" class="btn">Atualizar</button>
                    <a href="CategoriaController.php?acao=listarCategorias" class="btn" style="background-color: #6c757d;">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>