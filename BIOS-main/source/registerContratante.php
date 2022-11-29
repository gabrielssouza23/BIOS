<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./icon/favicon.ico" type="image/x-icon">
    <title>Bee.co</title>
  </head>
  <body>
    <section>
      <div class ="login">
        
        <form id="form-register">
            <img src="./img/Beeco-removebg-preview.png" id="#beco">
            <input type="text" size="50" id="nome" placeholder="Nome"><br><br>
            <input type="text" size="50" id="profissao" placeholder="Profissão"><br><br>
            <input type="text" size="50" id="email" placeholder="E-mail"><br><br>
            <input type="password" size="50" id="cpf" placeholder="CPF"><br><br>
            <input type="password" size="50" id="senha" placeholder="senha"><br><br>
            <input type="submit" id ="loginBtn" value="Entrar" onclick="logar(); return false"><br><br>
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