<?php
   INCLUDE __DIR__ . "./conexao.php";
   $clientArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   if($clientArray){
   $sql = "INSERT INTO `contratado`"
   . "VALUES (null, '{$clientArray["nome"]}','{$clientArray["email"]}','{$clientArray["senha"]}', '{$cpfArray["cpf"]}', '{$arrayProfissao["profissao"]}',null,null)";
   
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
        <?php
    $method = "POST";
        $nome = "";
        $email = "";
        $senha = "";
        $cpf = "";
        $profissao = "";
        ?>
      <div class ="login">
        <form id="form-login" method=<?= $method ?> enctype="multypart/form-data" novalidate>
            <img src="beeco.png" id="#beco">
            <input type="text" size="50" id="login" placeholder="Usuario"  value="<?=$nome; ?>"><br><br>
            <input type="email" size="50" id="senha" placeholder="email" value="<?=$email; ?>"><br><br>
            <input type="password" size="50" id="senha" placeholder="senha" value="<?=$senha; ?>"><br><br>
            <input type="text" size="50" id="senha" placeholder="cpf" value="<?=$cpf; ?>"><br><br>
            <input type="text" size="50" id="text" placeholder="profissao" value="<?=$profissao; ?>"><br><br>
            <input type="submit" id ="loginBtn" value="Entrar" ><br><br>
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