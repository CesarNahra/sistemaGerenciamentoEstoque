<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Cliente</title>
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
        <h2>Perfil do Cliente</h2>

        <div class="info">
            <span class="label">Nome:</span>
            <?php echo $_SESSION['nome']; ?>
        </div>

        <div class="info">
            <span class="label">Email:</span>
            <?php echo $_SESSION['email']; ?>
        </div>

        <button class="btn btn-voltar" onclick="window.location.href='/sistemaGerenciamentoEstoque/perfil/dashboard'">
            Voltar ao Dashboard
        </button>

        <button class="btn btn-editar" onclick="window.location.href='/sistemaGerenciamentoEstoque/perfil/editar'">
            Editar Perfil
        </button>
    </div>

</body>
</html>