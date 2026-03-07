<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="/sistemaGerenciamentoEstoque/View/Assets/style.css">
    <link rel="manifest" href="/sistemaGerenciamentoEstoque/manifest.json">
</head>
<body>
    <nav>
        <div class="nav-brand">
            <span class="company-name">🏢 <?php echo $_SESSION['nome']; ?></span>
        </div>
        <div class="nav-links">
            <a href="/sistemaGerenciamentoEstoque/dashboard">🏠 Menu</a>
            <a href="/sistemaGerenciamentoEstoque/produtos">📦 Produtos</a>
            <a href="/sistemaGerencimentoEstoque/fornecedores">🚛 Fornecedores</a>
            <a href="/sistemaGerenciamentoEstoque/categorias">🏷️ Categorias</a>
        </div>
        <div class="nav-logout">
            <a href="/sistemaGerenciamentoEstoque/logout" class="btn-logout">🚪 Sair</a>
        </div>
    </nav>

    <div class="container">
        <h1>Editar Categoria</h1>

        <form action="/sistemaGerenciamentoEstoque/categorias/salvar" method="POST">
            <fieldset>
                <label>Nome da Categoria:</label>
                <input type="text" name="nome" value="<?php echo $dadosCategoria['nome']; ?>" required>
                
                <div style="margin-top: 15px;">
                    <button type="submit" class="btn">Atualizar</button>
                    <a href="/sistemaGerenciamentoEstoque/categorias" class="btn" style="background-color: #6c757d;">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>