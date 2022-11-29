<?php
   INCLUDE __DIR__ . "./conexao.php";
   $clientArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   if($clientArray){

   
   $sql = "INSERT INTO usuario "
   . "VALUES (null, '{$clientArray["nome"]}','{$clientArray["email"]}','{$clientArray["senha"]}', '{$cpfArray["cpf"]}',null, null)";
   
   $query = $conn->prepare($sql);
   $query->execute();
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <section>
      <div class ="login">
        
        <form id="form-login">
            <img src="beeco.png" id="#beco">
            <input type="text" size="50" id="login" placeholder="Usuario"  value="<?=$nome; ?>"><br><br>
            <input type="password" size="50" id="senha" placeholder="senha" value="<?=$email; ?>"><br><br>
            <input type="password" size="50" id="senha" placeholder="senha" value="<?=$senha; ?>"><br><br>
            <input type="password" size="50" id="senha" placeholder="senha" value="<?=$cpf; ?>"><br><br>
            <input type="submit" id ="loginBtn" value="Entrar" onclick="logar(); return false"><br><br>
            <a href="./register.html">Registre-se</a>
            <div id="message">
                <!-- Aqui vai a mensagem de retorno -->
            </div>
        </form>
      </div>
    </section>
    
    <footer></footer>
  </body>
  <script src="code.js"></script>
</html>