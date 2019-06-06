<?php
//se os campos email e senha não estiverem vazios, entra neste if
if(!empty($_POST['email']) && !empty($_POST['senha'])){
    //receber este valores nas variáveis email e senha
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //se o email for lucas@gmail.com e a senha for lucas123, acessa a página
    if ($email == 'lucas@gmail.com' && $senha == 'lucas123'){
        header("Location: acesso.php");
    }else{
        echo "E-mail ou senha inválidos";
    }    
    echo "<hr/>";    
}
?>

<form method="post">    
    E-mail: <br>
    <input type="email" name="email" />
    <br><br>    
    Senha: <br>
    <input type="password" name="senha"/>
    <br><br>    
    <input type="submit" value="Entrar" />    
    
</form>
