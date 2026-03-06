<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
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
        <h1>Cadastrar Novo Produto</h1>

        <form action="/sistemaGerenciamentoEstoque/produtos/cadastro" method="POST">
            <fieldset>
                <legend>Dados Principais</legend>
                
                <label>SKU (Código Único):</label>
                <input type="text" name="sku" required placeholder="Ex: PROD-001">

                <label>Nome do Produto:</label>
                <input type="text" name="nome" required placeholder="Ex: Notebook Dell">

                <label>Descrição:</label>
                <input type="text" name="descricao" required>

                <label>Preço (R$):</label>
                <input type="number" name="preco" step="0.01" required placeholder="0.00">
            </fieldset>

            <fieldset>
                <legend>Estoque Inicial</legend>
                
                <label>Quantidade Atual:</label>
                <input type="number" name="quantidade" required value="0">

                <label>Estoque Mínimo (Para Alerta):</label>
                <input type="number" name="estoque_minimo" required value="5">
            </fieldset>

            <fieldset>
                <legend>Classificação</legend>

                <label>Categoria:</label>
                <select name="id_categoria" required>
                    <option value="">Selecione...</option>
                    <?php foreach($listaDeCategorias as $cat): ?>
                        <option value="<?php echo $cat['id']; ?>">
                            <?php echo $cat['nome']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <small><a href="/sistemaGerenciamentoEstoque/categorias" class="gerencia">Gerenciar Categorias</a></small>
                <br><br>

                <label>Fornecedor:</label>
                <select name="id_fornecedor" required>
                    <option value="">Selecione...</option>
                    <?php foreach($listaDeFornecedores as $forn): ?>
                        <option value="<?php echo $forn['id']; ?>">
                            <?php echo $forn['nome_empresa']; ?> (CNPJ: <?php echo $forn['cnpj']; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
                <small><a href="/sistemaGerenciamentoEstoque/fornecedores" class="gerencia">Gerenciar Fornecedores</a></small>
            </fieldset>

            <button type="submit" class="btn">Salvar Produto</button>
            <a href="/sistemaGerenciamentoEstoque/produtos" class="btn-link" style="background-color: #6c757d;">Cancelar</a>
        </form>
    </div>
</body>
</html>