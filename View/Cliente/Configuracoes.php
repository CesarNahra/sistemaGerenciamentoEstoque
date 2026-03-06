<!DOCTYPE html>
<html>
<head>
    <title>Configurações</title>
    <link rel="stylesheet" href="/sistemaGerenciamentoEstoque/View/Assets/style.css">
    <link rel="manifest" href="/sistemaGerenciamentoEstoque/manifest.json">
</head>
<body class="<?= isset($_SESSION['tema']) && $_SESSION['tema'] == 'dark' ? 'dark-mode' : '' ?>">

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
        <h2>Configurações</h2>

        <form method="POST" action="/sistemaGerenciamentoEstoque/perfil/alterar-tema">
            <label class="switch">
                <input type="checkbox" name="tema" value="dark"
                    <?= ($_SESSION['tema'] ?? 'light') === 'dark' ? 'checked' : '' ?>
                    onchange="this.form.submit()">
                <span class="slider"></span>
            </label>
        </form>

        <br>
        <a class="btn btn-voltar" href="/sistemaGerenciamentoEstoque/perfil/dashboard">
            Voltar para o Dashboard
        </a>
    </div>
</body>
</html>