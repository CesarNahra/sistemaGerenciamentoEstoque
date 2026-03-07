<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Categorias</title>
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
        <h1>Categorias</h1>

        <div style="margin-bottom: 20px;">
            <a href="/sistemaGerenciamentoEstoque/categorias/cadastro" class="btn">
                + Nova Categoria
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($listaCategorias) && count($listaCategorias) > 0): ?>
                    <?php foreach($listaCategorias as $cat): ?>
                        <tr>
                            <td style="width: 10%;"><?php echo $cat['id']; ?></td>
                            <td><?php echo $cat['nome']; ?></td>
                            <td style="width: 20%;">
                                <a href="/sistemaGerenciamentoEstoque/categorias/editar&id_categoria=<?php echo $cat['id']; ?>"
                                   class="btn-acao btn-editar">Editar</a>
                                
                                <a href="/sistemaGerenciamentoEstoque/categorias/excluir?id_categoria=<?php echo $cat['id']; ?>" 
                                   onclick="return confirm('Tem certeza?')" 
                                   class="btn-acao btn-excluir">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="3" style="text-align: center;">Nenhuma categoria.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <button class="btn btn-voltar" onclick="window.location.href='/sistemaGerenciamentoEstoque/dashboard'">
            Voltar ao Dashboard
        </button>
    </div>
</body>
</html>