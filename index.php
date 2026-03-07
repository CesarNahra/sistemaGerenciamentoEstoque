<?php
    spl_autoload_register(function ($class_name) {
        $caminho = __DIR__ . '/Controller/' . $class_name . '.php';
        if (file_exists($caminho)) {
            require_once $caminho;
        }
    });
    // 1. Pega a URL completa da requisição (ex: /sistemaGerenciamentoEstoque/categorias)
    $url_completa = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // 2. Define o nome da pasta onde seu projeto está no WAMP
    $pasta_projeto = '/sistemaGerenciamentoEstoque';

    // 3. CRIAÇÃO DA VARIÁVEL $route: 
    // Ela remove o nome da pasta para sobrar apenas o comando (ex: /categorias)
    $route = str_replace($pasta_projeto, '', $url_completa);

    // 4. Se a URL vier vazia (apenas a raiz), define como '/'
    if ($route == '') {
        $route = '/';
    }

    switch ($route) {
    case '/categorias':
        $controller = new CategoriaController();
        $controller->listarCategorias();
        break;
    case '/categorias/cadastro':
        $controller = new CategoriaController();
        $controller->prepararCadastroCategoria();
        break;
    case '/categorias/salvar':
        $controller = new CategoriaController();
        $controller->salvarCategoria();
        break;
    case '/categorias/editar':
        $controller = new CategoriaController();
        $controller->prepararEdicaoCategoria();
        break;
    case '/categorias/excluir':
        $controller = new CategoriaController();
        $controller->excluirCategoria();
        break; 
    case '/produtos':
        $controller = new ProdutoController();
        $controller->listarProdutos();
        break;
    case '/produtos/cadastro':
        $controller = new ProdutoController();
        $controller->prepararCadastro();
        break;
    case '/produtos/salvar':
        $controller = new ProdutoController();
        $controller->salvarProduto();
        break;
    case '/produtos/movimentar':
        $controller = new ProdutoController();
        $controller->movimentar();
        break;
    case '/produtos/excluir':
        $controller = new ProdutoController();
        $controller->excluirProduto();
        break;
    case '/produtos/editar':
        $controller = new ProdutoController();
        $controller->prepararEdicaoProduto();
        break;
    case '/produtos/atualizar':
        $controller = new ProdutoController();
        $controller->atualizarProduto();
        break;
    case '/fornecedores':
        $controller = new FornecedorController();
        $controller->listarFornecedores();
        break;
    case '/fornecedores/salvar':
        $controller = new FornecedorController();
        $controller->salvarFornecedor();
        break;
    case '/fornecedores/excluir':
        $controller = new FornecedorController();
        $controller->excluirFornecedor();
        break;
    case '/fornecedores/cadastro':
        $controller = new FornecedorController();
        $controller->prepararCadastroFornecedor();
        break;
    case '/fornecedores/atualizar':
        $controller = new FornecedorController();
        $controller->atualizarFornecedor();
        break;
    case '/fornecedores/editar':
        $controller = new FornecedorController();
        $controller->prepararEdicaoFornecedor();
        break;
    case '/relatorios':
        $controller = new RelatorioController();
        $controller->prepararMenu();
        break;
    case '/relatorios/estoque-total':
        $controller = new RelatorioController();
        $controller->gerarTotalEstoque();
        break;
    case '/relatorios/historico':
        $controller = new RelatorioController();
        $controller->gerarHistorico();
        break;
    case '/relatorios/mais-movimentados':
        $controller = new RelatorioController();
        $controller->gerarMaisMovimentados();
        break;
    case '/relatorios/menu':
        $controller = new RelatorioController();
        $controller->prepararMenu();
    case '/perfil':
        $controller = new ClienteController();
        $controller->perfil();
        break;
    case '/perfil/editar':
        $controller = new ClienteController();
        $controller->editar();
        break;
    case '/perfil/alterar-tema':
        $controller = new ClienteController();
        $controller->alterarTema();
        break;
    case '/perfil/atualizar':
        $controller = new ClienteController();
        $controller->atualizarPerfil();
        break;
    case '/configuracoes':
        $controller = new ClienteController();
        $controller = $controller->configuracoes();
        break;
    // case '/logar':
    //     $controller = new AutenticaController();
    //     $controller->logar();
    case '/logout':
        $controller = new AutenticaController();
        $controller->logout();
        break;
    default:
        $controller = new ClienteController();
        $controller = $controller->dashboard();
    }
?>