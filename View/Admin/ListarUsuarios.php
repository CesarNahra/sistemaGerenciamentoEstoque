<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="/sistemaGerenciamentoEstoque/View/Assets/style.css">
    <link rel="manifest" href="/sistemaGerenciamentoEstoque/manifest.json">
</head>
<body>
    <nav>
        <div class="nav-brand">
            <span class="company-name">🛡️ Admin: <?php echo $_SESSION['nome']; ?></span>
        </div>
        
        <div class="nav-links">
            <span style="color: white; font-weight: bold;">Gestão do Sistema</span>
        </div>

        <div class="nav-logout">
            <a href="/sistemaGerenciamentoEstoque/logout" class="btn-logout">🚪 Sair</a>
        </div>
    </nav>

    <div class="container">
        <h1>Gestão de Usuários (Clientes)</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($listaUsuarios) && count($listaUsuarios) > 0): ?>
                    <?php foreach($listaUsuarios as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td>
                                <strong><?php echo $user['nome']; ?></strong>
                            </td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <?php 
                                    // Pequena lógica visual para diferenciar tipos
                                    if($user['tipo'] == 'admin'){
                                        echo '<span style="color: blue; font-weight: bold;">Administrador</span>';
                                    } else {
                                        echo '<span style="color: green;">Cliente/Operador</span>';
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="/sistemaGerenciamentoEstoque/admin/excluir&id=<?php echo $user['id']; ?>" 
                                   onclick="return confirm('Tem certeza que deseja excluir este usuário? Todos os dados dele (produtos, fornecedores) serão apagados!')" 
                                   style="color: red; font-weight: bold;">
                                   [Excluir Conta]
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align: center;">Nenhum usuário encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>