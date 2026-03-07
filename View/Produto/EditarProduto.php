<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
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
        <h1>Editar Produto</h1>

        <form action="/sistemaGerenciamentoEstoque/produtos/salvar" method="POST">
            <fieldset>
                <legend>Dados Principais</legend>
                
                <label>SKU:</label>
                <input type="text" name="sku" value="<?php echo $dadosProduto['sku']; ?>" required>

                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $dadosProduto['nome']; ?>" required>

                <label>Descrição:</label>
                <input type="text" name="descricao" value="<?php echo $dadosProduto['descricao']; ?>" required>

                <label>Preço (R$):</label>
                <input type="number" name="preco" step="0.01" value="<?php echo $dadosProduto['preco']; ?>" required>
                
                <label>Estoque Mínimo:</label>
                <input type="number" name="estoque_minimo" value="<?php echo $dadosProduto['estoque_minimo']; ?>" required>
                
                </fieldset>

            <fieldset>
                <legend>Classificação</legend>

                <label>Categoria:</label>
                <select name="id_categoria" required>
                    <?php foreach($listaCategorias as $cat): ?>
                        <?php $selected = ($cat['id'] == $dadosProduto['id_categoria']) ? 'selected' : ''; ?>
                        <option value="<?php echo $cat['id']; ?>" <?php echo $selected; ?>>
                            <?php echo $cat['nome']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <label>Fornecedor:</label>
                <select name="id_fornecedor" required>
                    <?php foreach($listaFornecedores as $forn): ?>
                        <?php $selected = ($forn['id'] == $dadosProduto['id_fornecedor']) ? 'selected' : ''; ?>
                        <option value="<?php echo $forn['id']; ?>" <?php echo $selected; ?>>
                            <?php echo $forn['nome_empresa']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            
            <div style="margin-top: 15px;">
                <button type="submit" class="btn">Salvar Alterações</button>
                <a href="/sistemaGerenciamentoEstoque/produtos" class="btn" style="background-color: #6c757d;">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>