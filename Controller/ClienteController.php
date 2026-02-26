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

            require_once __DIR__ . '/../View/Cliente/Dashboard.php';
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
        }
    }
?>