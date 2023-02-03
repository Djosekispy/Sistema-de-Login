<?php
session_start();
$conexao = mysqli_connect('localhost','root','','sistemaLogin') or die("Conexão Não Feita");
$erros = array();
if(isset($_POST['logar'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(!empty($email) and !empty($senha)){
      $email = mysqli_escape_string($conexao,$email);
      $senha = mysqli_escape_string($conexao,$senha);
      $senha = md5($senha);

      $sql = "SELECT * FROM login WHERE senha = '$senha' and email = '$email' ";
      $bancoEntar = mysqli_query($conexao,$sql);
      if(mysqli_num_rows($bancoEntar) == 1){
         
        $dados = mysqli_fetch_array($bancoEntar);
        $_SESSION['id'] = $dados['idLogin'];
        $_SESSION['login'] = true; 
        $_SESSION['tipo'] = $dados['tipo'];
        header('location: index.php');
 
      }else{
        $erros[]= "Usuario e Senha não conferem";
      }




    }else{
        $erros[]="TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
    }
}




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

#formulario{
    margin: 10px auto;
    box-shadow: 2px 2px 2px 2px skyblue;
    background-color: yellowgreen;
    width: 400px;
    height: 300px;
}
#formulario form{
    padding: 10px;
    display: flex;
    flex-direction: column;
}
form input{
    height: 40px;
    border: 1px solid skyblue;
    border-radius: 5px;
    margin: 5px 0px;
    outline: none;
    cursor: pointer;
    padding-left: 5px;

}
#erros{
 background-color: red;
 text-align: center;
 font-size: 15px;
 width: auto;


}
form button{
    height: 30px;
    border: 1px solid skyblue;
    border-radius: 5px;
    margin: 5px 0px;
    outline: none;
    cursor: pointer;
    background-color: skyblue;
}
form button:hover{
    background-color: blueviolet;
}
label{
    font-weight: bold;
}
h2{
    text-align: center;
    padding: 10px;
}
    </style>
</head>
<body>
    
<div id="formulario">
<h2>LOGIN</h2>

<?php if(!empty($erros)):
    foreach($erros as $p):
    ?>
<div id="erros">
<?php echo $p;?>


</div>
<?php 
endforeach;
endif;
?>

<form action="login.php" method="post">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">
    <button type="submit" name="logar" id="logar">Entrar</button>
</form>


</div>



</body>
</html>