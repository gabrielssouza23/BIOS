<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="profileStyle.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <button onclick="openNav()" id="tog">
        <img src="svgs/burger.svg" alt="list" />
      </button>
      <img src="imgs/beeco-removebg-preview.png" id="logo" alt="Beeco" />
      <a id="sign" href="">Sign in / Sign up</a>
    </header>
    <nav id="nav">
      <button onclick="closeNav()">
        <img src="svgs/close.svg" alt="" />
      </button>
      <a href="">Link</a>
      <a href="">QNA</a>
      <a href="">About</a>
    </nav>
    <main>
      <img src="imgs/pedreiro.jpg" alt="" />
      <section id="profile">
        <h2>Edinho pedreiro</h2>
        <p>
          Pedreiro há mais de 30 anos. Posso construir e reparar a sua casa,
          oferecendo um serviço de qualidade e barato. Teve algum problema com
          seu carro e não tem dinheiro? Posso reparar peças e deixar o carro
          novinho!
        </p>
        <p>Preço médio: R$ 120</p>
        <p>Serviço: Em casa</p>
      </section>
      <section class="menu">
        <h3>Pedreiro</h3>
        <div class="select">
          <p>Construir peça</p>
        </div>
        <h3>Pintor</h3>
        <div class="select">
          <p>Pintar 10m²</p>
        </div>
        <h3>Mecanico</h3>
        <div class="select">
          <p>Trocar Pneu</p>
          <p>Consertar Motor</p>
        </div>
      </section>
    </main>
    <footer>
      <img src="imgs/ifsul.png" alt="" id="ifsul" />
      <p>copyright</p>
    </footer>
  </body>
  <script src="code.js"></script>
</html>
