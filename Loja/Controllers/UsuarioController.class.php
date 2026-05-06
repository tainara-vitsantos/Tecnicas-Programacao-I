<?php
require_once "Models/Usuario.class.php";
require_once "Models/UsuarioDAO.class.php";
require_once "Models/Conexao.class.php";


class UsuarioController {

    public function inserir() {
        $msg = array("", "", "", "");
        $erro = false;

        if ($_POST) {

            // Verificações
            if (empty($_POST["nome"])) {
                $msg[0] = "Preencha o nome";
                $erro = true;
            }

            if (empty($_POST["email"])) {
                $msg[1] = "Preencha o email";
                $erro = true;
            }

            if (empty($_POST["senha"])) {
                $msg[2] = "Preencha a senha";
                $erro = true;
            }

            if (empty($_POST["confirme"])) {
                $msg[3] = "Preencha a confirmação de senha";
                $erro = true;
            }

            // Verifica senha
            if (!empty($_POST["senha"]) && !empty($_POST["confirme"])) {
                if ($_POST["senha"] != $_POST["confirme"]) {
                    $msg[3] = "As senhas não conferem";
                    $erro = true;
                }
            }

            // Verifica email
            if (!empty($_POST["email"])) {
                $usuario = new Usuario();
                $usuario->setEmail($_POST["email"]);

                $usuarioDAO = new UsuarioDAO();
                $existe = $usuarioDAO->verificar_email($usuario);

                if ($existe) {
                    $msg[1] = "Email já cadastrado";
                    $erro = true;
                }
            }

            // Salvar no banco
            if (!$erro) {
                $usuario = new Usuario(email: $_POST["email"]);
                $usuarioDAO = new UsuarioDAO();
                $retorno->verificar_email($usuario);
                if(count(retorno) > 0 ){
                    //Logar
                }else{
                   //Não logar

                }





                
                header("Location: index.php?controle=UsuarioController&metodo=login");
                exit;
            }
        }

        // Mostrar formulário
        require_once "Views/form_usuario.php";
    }

    public function login() {
            $msg = array("", "", "", "");
            $erro = false;
    
            if ($_POST) {
    
                // Verificações
                if (empty($_POST["email"])) {
                    $msg[0] = "Preencha o email";
                    $erro = true;
                }
    
                if (empty($_POST["senha"])) {
                    $msg[1] = "Preencha a senha";
                    $erro = true;
                }
    
                if (!$erro) {
                    // Verificar email e senha
                    $usuario = new Usuario();
                    $usuario->setEmail($_POST["email"]);
    
                    $usuarioDAO = new UsuarioDAO();
                    $retorno = $usuarioDAO->verificar_email($usuario);
                    
                    if(count($retorno) > 0) {
                        // Logar
                        if(password_verify($_POST["senha"], $retorno[0]->getSenha())) {
                            // Criar sessão
                            session_start();
                            $_SESSION["usuario"] = $retorno[0]->getEmail();
    
                            header("Location: index.php");
                            exit;
                        } else {
                            $msg[1] = "Senha incorreta";
                        }
    
            require_once "Views/Login.php";
    }
    

    public function logout() {

    }
}