<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatórios</title>
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
        <h1>Central de Relatórios</h1>
        
        <div class="relatorios-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            
            <div class="card" style="border: 1px solid #ccc; padding: 20px; border-radius: 8px;">
                <h3>💰 Valor em Estoque</h3>
                <br>
                <p>Veja o valor total acumulado e a quantidade de itens.</p>
                <br>
                <a href="/sistemaGerenciamentoEstoque/relatorios/estoque-total" class="btn">Visualizar</a>
            </div>

            <div class="card" style="border: 1px solid #ccc; padding: 20px; border-radius: 8px;">
                <h3>📅 Histórico de Movimentações</h3>
                <form action="/sistemaGerenciamentoEstoque/relatorios/historico" method="POST">
                    
                    <label>De:</label>
                    <input type="date" name="data_inicio" required>
                    
                    <label>Até:</label>
                    <input type="date" name="data_fim" required>
                    
                    <button type="submit" class="btn">Gerar Extrato</button>
                </form>
            </div>

            <div class="card" style="border: 1px solid #ccc; padding: 20px; border-radius: 8px;">
                <h3>🏆 Produtos Mais Movimentados</h3>
                <form action="/sistemaGerenciamentoEstoque/relatorios/mais-movimentados" method="POST">
                    
                    <label>Tipo de Movimento:</label>
                    <select name="tipo" required style="width: 100%; margin-bottom: 10px; padding: 8px;">
                        <option value="saida">Saída (Vendas)</option>
                        <option value="entrada">Entrada (Compras)</option>
                    </select>
                    
                    <button type="submit" class="btn">Visualizar Ranking</button>
                </form>
            </div>

            <button class="btn btn-voltar" onclick="window.location.href='/sistemaGerenciamentoEstoque/dashboard'">
                Voltar ao Dashboard
            </button>
        </div>
    </div>
</body>
</html>