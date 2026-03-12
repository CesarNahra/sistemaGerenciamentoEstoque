<?php
        require_once __DIR__ . "/../Model/Cliente.php";
        require_once __DIR__ . "/../Model/Administrador.php";
        session_start();

        class AutenticaController {

            public function logar(){
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                // Chamando um método estático para verificar o login, pelo fato dele ser estático, não há necessidade de instaciar um objeto, para posteriormente chamar o método.

                $dadosUsuario = Usuario::verificaLogin($email, $senha);

                if($dadosUsuario){

                    $_SESSION['id'] = $dadosUsuario['id'];
                    $_SESSION['nome'] = $dadosUsuario['nome'];
                    $_SESSION['email'] = $dadosUsuario['email'];
                    $_SESSION['tipo'] = $dadosUsuario['tipo'];
                    $_SESSION['nomeEmpresa'] = $dadosUsuario['nomeEmpresa'];

                    $usuario = null;

                    if($dadosUsuario['tipo'] === 'admin'){
                    $usuario = new Administrador($dadosUsuario['nome'], $dadosUsuario['email'], $dadosUsuario['senha']);
                    } else {
                        $usuario = new Cliente($dadosUsuario['nome'], $dadosUsuario['email'], $dadosUsuario['senha'], $dadosUsuario['nomeEmpresa']);
                    }

                    $endereco = $usuario->enderecoPaginaInicial();

                    header("Location: ../dashboard");
                    exit();
                } else {
                    header("Location: ../index.php");
                    exit();
                }
            }

            public function logout(){
                session_destroy();
                header("Location: ../index.php");
                exit();
            }
        }

        // Lógica do roteamento por meio da variavel acao presente nos forms.

        if(isset($_REQUEST['acao'])){
            
            $controller = new AutenticaController();

            switch($_REQUEST['acao']){
                case 'logar':
                $controller->logar();
                break;
                case 'logout':
                    $controller->logout();
                    break;
            }
        }

?>