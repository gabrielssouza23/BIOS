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
    <header>
      <button onclick="openNav()" id="tog">
        <img src="burger.svg" alt="list" />
      </button>
      <img src="imgs/beeco-removebg-preview.png" id="logo" alt="Beeco" />
      <a id="sign" href="registerRedirecionamento.html">Sign in / Sign up</a>
    </header>
    <nav id="nav">
      <button onclick="closeNav()">
        <img src="close.svg" alt="">
      </button>
      <a href="">Link</a>
      <a href="">QNA</a>
      <a href="">About</a>
    </nav>
    <main>
      <section id="bar">
        <div class="div-search">
          <img src="search.svg" alt="buscar" />
          <input
            type="text"
            name="search"
            id="write"
            placeholder="Procurar serviço"
          />
        </div>
        <button id="search">procurar</button>
      </section>
      <section class="categories">
        <a href="">
          <div class="filter">
            <img
              src="imgs/png-transparent-floral-design-flowerpot-vase-drawing-flower-food-violet-vase.png"
              alt="vaso de flor"
            />
            <p>Jardineiro</p>
          </div>
        </a>
        <a href="">
          <div>
            <img src="imgs/mecanico.png" alt="" />
            <p>Mecanico</p>
          </div>
        </a>
        <a href="">
          <div>
            <img src="imgs/limpeza.jpeg" alt="" />
            <p>Limpeza</p>
          </div>
        </a>
        <a href="">
          <div>
            <img src="imgs/eletrecista.jpeg" alt="" />
            <p>Eletrecista</p>
          </div>
        </a>
        <a href="">
          <div>
            <img src="imgs/manicure.jpeg" alt="" />
            <p>Manicure</p>
          </div>
        </a>
        <a href="">
          <div>
            <p></p>
          </div>
        </a>
      </section>
      <section>
        <a href="business.html">
          <div class="service">
            <img src="imgs/pedreiro.jpg" alt="" />
            <p>Edinho pedreiro</p>
            <p>Preço médio: R$ 120</p>
            <p>Serviço: Em casa</p>
            <ul>
              <li>Pedreiro</li>
              <li>Pintor</li>
              <li>Mecanico</li>
            </ul>
          </div>
          <div class="service">
            <img src="imgs/barbearia.jpg" alt="" />
            <p>Barbudos barbearia</p>
            <p>Preço médio: R$ 30</p>
            <p>Serviço: Estabelecimento</p>
            <ul>
              <li>Cabelereiro</li>
              <li>Barbearia</li>
            </ul>
          </div>
          <div class="service">
            <img src="imgs/fotografo.jpeg" alt="" />
            <p>Photography</p>
            <p>Preço médio: R$ 69</p>
            <p>Serviço: Em casa</p>
            <ul>
              <li>fotografo</li>
            </ul>
          </div>
          <div class="service">
            <img src="imgs/parada.jpg" alt="" />
            <p>Parada segura</p>
            <p>Preço médio: R$ 200</p>
            <p>Serviço: Estabelecimento</p>
            <ul>
              <li>Mecanico</li>
              <li>Lava-jato</li>
            </ul>
          </div>
          <div class="service">
            <img src="imgs/ze.png" alt="" />
            <p>Zé informática</p>
            <p>Preço médio: variavel</p>
            <p>Serviço: Entrega</p>
            <ul>
              <li>Eletronicos</li>
              <li>Manutenção</li>
              <li>Concerto</li>
            </ul>
          </div>
        </a>
      </section>
    </main>
    <footer>
      <img src="imgs/ifsul.png" alt="" id="ifsul" />
      <p>copyright</p>
    </footer>
  </body>
  <script src="code.js"></script>
</html>
