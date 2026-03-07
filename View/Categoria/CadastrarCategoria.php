<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Categoria</title>
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
            <a href="/sistemaGerenciamentoEstoque/fornecedores">🚛 Fornecedores</a>
            <a href="/sistemaGerenciamentoEstoque/categorias">🏷️ Categorias</a>
        </div>
        <div class="nav-logout">
            <a href="/sistemaGerenciamentoEstoque/logout" class="btn-logout">🚪 Sair</a>
        </div>
    </nav>

    <div class="container">
        <h1>Cadastrar Nova Categoria</h1>

        <form action="/sistemaGerenciamentoEstoque/categorias/salvar" method="POST">
            <fieldset>
                <label>Nome da Categoria:</label>
                <input type="text" name="nome" required placeholder="Ex: Eletrônicos">
                
                <div style="margin-top: 15px;">
                    <button type="submit" class="btn">Salvar</button>
                    <a href="/sistemaGerenciamentoEstoque/categorias" class="btn-link" style="background-color: #6c757d;">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>