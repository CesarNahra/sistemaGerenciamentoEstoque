<?php
    require_once __DIR__ . '/../Model/Cliente.php';

    class ClienteController {

        public function dashboard(){
            session_start();
        
            if(!isset($_SESSION['id']) || $_SESSION['tipo'] != 'cliente'){ 
                header("Location: ../index.php"); 
                exit(); 
            }
            
            require_once __DIR__ . '/../View/Cliente/Dashboard.php';
        }

        // Futuras implementações:
        public function perfil(){
            session_start();
            if(!isset($_SESSION['id']) || $_SESSION['tipo'] != 'cliente'){
                header("Location: ../index.php");
                exit();
            }
            require_once __DIR__ . '/../View/Cliente/Perfil.php';
        }

        public function editar(){
            session_start();

            if(!isset($_SESSION['id']) || $_SESSION['tipo'] != 'cliente'){
                header("Location: ../index.php");
                exit();
            }

            require_once __DIR__ . '/../View/Cliente/EditarPerfil.php';
        }

        public function configuracoes(){
            session_start();

            if(!isset($_SESSION['id']) || $_SESSION['tipo'] != 'cliente'){
                header("Location: ../index.php");
                exit();
            }

            require_once __DIR__ . '/../View/Cliente/Configuracoes.php';
        }

        public function alterarTema(){
            session_start();

            if(!isset($_SESSION['id'])){
                header("Location: ../index.php");
                exit();
            }

            if(isset($_POST['tema']) && $_POST['tema'] === 'dark'){
                $_SESSION['tema'] = 'dark';
            } else {
                $_SESSION['tema'] = 'light';
            }

            header("Location: ClienteController.php?acao=configuracoes");
            exit();
        }

        public function relatorios(){

            if(!isset($_SESSION['id'])){
                header("Location: ../index.php");
                exit();
            }
            
            echo "<h1>Página de Configurações em construção...</h1>";
        }

        public function atualizarPerfil(){
            session_start();

            if(!isset($_SESSION['id']) || $_SESSION['tipo'] != 'cliente'){
                header("Location: ../index.php");
                exit();
            }

            $usuario = new Cliente(null, null, null, null);

            $usuario->atualizar(
                $_SESSION['id'],
                $_POST['nome'],
                $_POST['email']
            );

            // Atualiza sessão
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['email'] = $_POST['email'];

            header("Location: ClienteController.php?acao=perfil");
            exit();
        }

        public function excluirPerfil() {
            session_start();

            if(!isset($_SESSION['id']) || $_SESSION['tipo'] != 'cliente'){
                header("Location: ../index.php");
                exit();
            }

            $id = $_SESSION['id'];

            $cliente = new Cliente(null, null, null, null);
            $cliente->excluir($id);

            session_destroy();

            echo "Conta excluída com sucesso. Redirecionando...";
            header("Refresh: 3; url=../index.php");
            exit();
        }
    }

    if(isset($_REQUEST['acao'])){
        $controller = new ClienteController();
        switch($_REQUEST['acao']){
            case 'dashboard':
                $controller->dashboard();
                break;
            case 'perfil':
                $controller->perfil();
                break;
            case 'configuracoes':
                $controller->configuracoes();
                break;
            case 'relatorios':
                $controller -> relatorios();
                break;
            case 'editar':
                $controller->editar();
                break;
            case 'alterarTema':
                $controller->alterarTema();
                break;
            case 'atualizarPerfil':
                $controller->atualizarPerfil();
                break;
            case 'excluirPerfil':
                $controller->excluirPerfil();
                break;
        }
    }
?>