<?php 

      // Monitoramento de leads (pedido da gestora de trafégo)
      $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; // Capturando a url
      $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); // Sanitizando a url

      // A url será passada através de um input invisível (type=hidden) do formulário
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

    <!-- title -->
    <meta property="og:title" content="Franquia Galo Zé" />

    <!-- description -->
    <meta
      name="description"
      content="Franguinho sequinho e suculento? Cheddar de outro planeta? É com a gente mesmo!"
    />
    <meta
      property="og:description"
      content="Franguinho sequinho e suculento? Cheddar de outro planeta? É com a gente mesmo!"
    />
    <meta
      name="twitter:description"
      content="Franguinho sequinho e suculento? Cheddar de outro planeta? É com a gente mesmo!"
    />

    <!-- image -->
    <!-- <meta property="og:image" content="http://..." />
    <meta name="twitter:image" content="http://..." /> -->

    <!-- misc -->
    <meta property="og:locale" content="pt_BR" />
    <meta name="theme-color" content="#ff992d" />


    <link rel="stylesheet" href="style.css">

    <!-- Splide lib -->
    <link
      rel="preload"
      href="./libs/splide-3.6.4/splide.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <link
      rel="preload"
      href="./libs/lite-youtube/lite-yt-embed.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />

    <!-- Fonts -->
    <link
      rel="preload"
      href="public/fonts/Matiz.ttf"
      as="font"
      type="font/ttf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Thin.otf"
      as="font"
      type="font/otf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Black.otf"
      as="font"
      type="font/otf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Bold.otf"
      as="font"
      type="font/otf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/ExtraBold.otf"
      as="font"
      type="font/otf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Light.otf"
      as="font"
      type="font/otf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Medium.otf"
      as="font"
      type="font/otf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Regular.otf"
      as="font"
      type="font/otf"
      crossorigin
    />

    <title>Galo Zé - Franquia</title>
  </head>
  <body>
    <div class="exit-form__trigger" id="exitFormTrigger"></div>
    <div class="exit-form__trigger-activator" id="exitFormTriggerActivator"></div>

    <section class="section-hero">
      <div class="section-center">
        <img width="150" height="202.5" src="./public/images/logo-final-laranja.png" alt="" />
        <p class="above-title">Pronto pra ser o</p>
        <h1>DONO <span>DO GALO?</span></h1>

        <p class="below-title">
          Então <span class="underline-main">arrasta pra baixo</span> e vem com a
          gente
          <span class="smile">:)</span>
        </p>
      </div>
    </section>

    <section class="section-warning">
      <div class="section-center">
        <p class="above-title">Mas antes...</p>
        <h2>UM AVISO!! <br /><span>IMPORTANTE, VIU?!</span></h2>

        <p class="text">
          Ler sobre as gostosuras da Galo Zé
          <span>pode causar fome!!</span>
        </p>
        <p class="text--sublime">Quem avisa amigo é... :)</p>

        <div class="center">
          <p class="underline-accent">
            O último a chegar no final é a mulher do padre!!
          </p>
        </div>
      </div>
    </section>

    <section class="section-numbers">
      <div class="section-center">
        <p class="above-title">Agora vamos ao que interessa!</p>
        <h2>DADOS, DADOS E MAIS DADOS!</h2>

        <div class="cards">
          <!-- start of item -->
          <div class="cards__card">
            <img src="./public/images/6.png" alt="" width="100" height="100" />
            <div class="cards__card__text">
              <p class="title">+6 anos de história</p>
              <p class="text">
                Temos seis anos de experiência e de conhecimento de mercado. A gente
                não abaixa a crista pra tempo ruim!!
              </p>
            </div>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/franchise.png"
              alt=""
              width="100"
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">+40 <span> franquias por ai</span></p>
              <p class="text">
                Tá todo mundo querendo um pedacinho do frango mais gostoso do Brasil
                <span class="smile">:)</span>
              </p>
            </div>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="cards__card">
            <img src="./public/images/profits.png" alt="" width="100" height="100" />
            <div class="cards__card__text">
              <p class="title">+170 <span> mil faturamento/ano</span></p>
              <p class="text">
                Já parou pra pensar quantas porções de isca de frango da pra comprar
                com tanto dinheiro? Não? Nem a gente!
              </p>
            </div>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/transaction.png"
              alt=""
              width="100"
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">16 <span> meses pro payback</span></p>
              <p class="text">
                É uma média, ok? Mas que o payback vem rápido, ele vem! (só perde pro
                nosso tempo de entrega <span>¯\_(ツ)_/¯</span>)
              </p>
            </div>
          </div>
          <!-- end of item -->
        </div>
        <button class="btn btn--cta">Virar franqueado? Tô dentro!!</button>
      </div>

    </section>

    <!-- SECTION FRANCHISES -->
    <section class="section-franchises">
      <div class="section-center">
        <p class="above-title">Sem perder o foco, hein?!</p>
        <h2>NOSSOS MODELOS DE FRANQUIA!</h2>
        <p class="below-title">
          Não esquenta, as imagens tão logo na sessão debaixo!
        </p>

        <div class="splide" id="slider1">
          <div class="splide__track">
            <div class="splide__list">
              <!-- start of slide -->
              <div class="splide__slide">
                <p class="slide__title">MODELO PARA RUA</p>

                <ul class="item-list">
                  <div class="item-list__item-wrapper">
                    <li>Faturamento Bruto: R$62.000</li>
                    <li>Investimento Total: R$99.900</li>
                    <li class="fw-500">Prazo de Contrato: 5 anos</li>
                    <li class="fw-500">Área: 70m2</li>
                  </div>

                  <div class="item-list__item-wrapper">
                    <li>Taxa de Franquia: R$34.000</li>
                    <li>Retorno do Investimento: 10 a 15 meses</li>
                    <li class="fw-500">Taxa de Publicidade: 1/2 salário mínimo</li>
                    <li class="fw-500">Royalties: 1 salário mínimo</li>
                  </div>
                </ul>
              </div>
              <!-- end of slide -->

              <!-- start of slide -->
              <div class="splide__slide">
                <p class="slide__title">MODELO PARA SHOPPING</p>

                <ul class="item-list">
                  <div class="item-list__item-wrapper">
                    <li>Faturamento Bruto: R$80.000</li>
                    <li>Investimento Total: R$175.500</li>
                    <li class="fw-500">Prazo de Contrato: 5 anos</li>
                    <li class="fw-500">Área: 40m2</li>
                  </div>

                  <div class="item-list__item-wrapper">
                    <li>Taxa de Franquia: R$36.000</li>
                    <li>Retorno do Investimento: 18 a 24 meses</li>
                    <li class="fw-500">Taxa de Publicidade: 1/2 salario mínimo</li>
                    <li class="fw-500">Royalties: 2 salários mínimos</li>
                  </div>
                </ul>
              </div>
              <!-- end of slide -->

              <!-- start of slide -->
              <div class="splide__slide">
                <p class="slide__title">MODELO PARA DELIVERY</p>

                <ul class="item-list">
                  <div class="item-list__item-wrapper">
                    <li>Faturamento Bruto: R$45.000</li>
                    <li>Investimento Total: R$69.500</li>
                    <li class="fw-500">Prazo de Contrato: 5 anos</li>
                    <li class="fw-500">Área: 30m2</li>
                  </div>

                  <div class="item-list__item-wrapper">
                    <li>Taxa de Franquia: R$29.000</li>
                    <li>Retorno do Investimento: 10 a 15 meses</li>
                    <li class="fw-500">Taxa de Publicidade: 1/2 salario mínimo</li>
                    <li class="fw-500">Royalties: 1 salário mínimo</li>
                  </div>
                </ul>
              </div>
              <!-- end of slide -->
            </div>
          </div>
        </div>
        <button class="btn btn--cta btn--red">Virar franqueado? Tô dentro!</button>
      </div>
    </section>

    <!-- SECTION GALLERY -->
    <section class="section-gallery">
      <div class="section-center">
        <div class="above-title">Senhoras e senhores...</div>
        <h2>As esperadas imagens!</h2>

        <div class="splide" id="slider2">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img width="800" height="800" data-splide-lazy="./public/images/ft01.jpg" alt="" />
              </li>
              <li class="splide__slide">
                <img width="800" height="800" data-splide-lazy="./public/images/ft02.jpg" alt="" />
              </li>
              <li class="splide__slide">
                <img width="800" height="800" data-splide-lazy="./public/images/ft03.jpg" alt="" />
              </li>
              <li class="splide__slide">
                <img width="800" height="800" data-splide-lazy="./public/images/ft04.jpg" alt="" />
              </li>
              <li class="splide__slide">
                <img width="800" height="800" data-splide-lazy="./public/images/ft05.jpg" alt="" />
              </li>
            </ul>
          </div>
        </div>
        <button class="btn btn--cta">Virar franqueado? Tô dentro!</button>
      </div>
    </section>

    <!-- SECTION VIDEOS -->
    <section class="section-videos">
      <div class="section-center">
        <p class="above-title">Tá inseguro ainda?</p>
        <h2>Relaxa, somos famosinhos!!</h2>
        <p class="below-title">
          E não, eles não aceitam qualquer <b>Zé</b> nesses programas
          <span class="smile">:)</span>
        </p>

        <div class="flex">
          <!-- start of video item -->
          <div class="container">
            <lite-youtube
              videoid="9bRlEVbkhFQ"
              playlabel="Galo Zé - Edu Guedes"
              class="video"
              style="background-image: url(./public/images/video-2.jpg)"
            ></lite-youtube>
            <p class="title">Estivemos no The Chef!</p>
          </div>
          <!-- end of video item -->
          <!-- start of video item -->
          <div class="container">
            <lite-youtube
              videoid="vu99a0rupe4"
              playlabel="Galo Zé Midia - Jogo aberto"
              class="video"
              style="background-image: url(./public/images/video-1.jpg)"
            ></lite-youtube>
            <p class="title">Estivemos no Jogo Aberto!</p>
          </div>
          <!-- end of video item -->
        </div>

        <button class="btn btn--cta btn--red">Virar franqueado? Tô dentro!</button>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="section-center">
        <p>Feito com 🧡 por Blanc Digital <span class="smile">:)</span></p>
      </div>
    </footer>

    <div class="modal modal--main-form is-hidden" id="modal">
      <div class="modal__image-wrapper">
        <img data-src="./public/images/ft05.jpg" class="lazyload" alt="" />
      </div>

      <form
        method="post"
        action="enviar.php"
        id="enviar"
        name="enviar"
        class="form"
        autocomplete="off"
        onsubmit="return validateForm(e)"
      >

        <input
          type="hidden"
          name="url-form"
          value="<?php echo $escaped_url?>"
        />
        <div class="wrapper">
          <button class="btn btn--full btn--close" type="button">&times;</button>

          <h6>Quase lá pra você ser um dono do galo!!</h6>
          <p>
            Que bom saber que você tá com a gente nessa!! Só precisamos de mais
            algumas coisinhas e então nossa equipe incrível vai te ajudar no processo
            de ter <b>sua própria franquia</b>!
          </p>
          <p id="alertForm" class="alert is-hidden">
            Preencha todos os campos corretamente!
          </p>
          <!-- FORM__NAME -->
          <div class="form__field-wrapper">
            <label class="" for="name-form">Nome*</label>
            <input
              type="text"
              name="name-form"
              id="nameForm"
              placeholder="Seu nome aqui"
              autocomplete="off"
              oninput="validateName(this)"
              required
            />
          </div>

          <!-- FORM__EMAIL -->
          <div class="form__field-wrapper">
            <label for="email-form">Seu melhor e-mail para contato*</label>
            <input
              type="email"
              name="email-form"
              id="emailForm"
              placeholder="email@exemplo.com"
              oninput="validateEmail(this)"
              required
            />
          </div>

          <!-- FORM__CELLPHONE -->
          <div class="form__field-wrapper">
            <label class="" for="cellphone-form">Número de celular*</label>
            <input
              type="tel"
              name="cellphone-form"
              id="cellphoneForm"
              placeholder="Seu número aqui"
              title="Seu número de celular com o código de área"
              oninput="validateNumber(this)"
              onkeypress="mascara(this)"
              maxlength="15"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__COUNTRY -->
          <div class="form__field-wrapper">
            <label class="" for="country-form">País de interesse*</label>
            <input
              type="text"
              name="country-form"
              id="countryForm"
              placeholder="Insira o país de interesse aqui"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__STATE-->
          <div class="form__field-wrapper">
            <label class="" for="state-form">Estado*</label>
            <input
              type="text"
              name="state-form"
              id="stateForm"
              placeholder="Insira o estado aqui"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__CITY -->
          <div class="form__field-wrapper">
            <label class="" for="city-form">Cidade*</label>
            <input
              type="text"
              name="city-form"
              id="cityForm"
              placeholder="Insira a cidade aqui"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__CONHECEU -->
          <div class="form__field-wrapper">
            <label class="" for="conheceu-form">Como nos conheceu?</label>
            <input
              type="text"
              name="conheceu-form"
              id="conheceuForm"
              placeholder="Conte-nos como nos conheceu"
              autocomplete="off"
            />
          </div>

          <!-- FORM__QUANTIA -->
          <div class="form__field-wrapper">
            <label for="quantia-form">Capital para investimento*</label>
            <div class="form__select-wrapper">
              <select name="quantia-form" required>
                <option selected="selected" disabled="disabled" value="">
                  Selecione um valor
                </option>
                <option value="Até  70 mil reais">Até R$70 mil</option>
                <option value="Até 100 mil reais">Até R$100 mil</option>
                <option value="Até R$180 mil reais">Até R$180 mil</option>
              </select>
            </div>
          </div>

          <button
            class="btn btn--full btn--submit"
            name="submit-btn"
            formaction="enviar.php"
            type="submit"
            id="enviar"
            title="Enviar formulário"
          >
            Quero ser um dono de franquia!!
          </button>
        </div>
      </form>
    </div>

    <!-- EXIT FORM -->
    <div class="modal modal--exit-form is-hidden" id="modal">
      <div class="modal__image-wrapper">
        <img data-src="./public/images/ft05.jpg" class="lazyload" alt="" />
      </div>

      <form
        method="post"
        id="exitForm"
        name="envia"
        class="form form--exit"
        autocomplete="off"
      >
        <div class="wrapper">
          <button class="btn btn--full btn--close btn--close-exit" type="button">
            &times;
          </button>

          <h6>
            Calma ai, não vamos nos precipitar... <span class="smile">:(</span>
          </h6>
          <p>
            Depois de todo tempo que a gente passou junto, você vai me abandonar?
            Vamo lá, me dá mais uma chance... <i><b>Por favorzinho</b></i
            >?
          </p>
          <p id="alertForm" class="alert is-hidden">
            Preencha todos os campos corretamente!
          </p>

          <input type="hidden" name="url-form" value="<?php echo $escaped_url?>" />

          <!-- FORM__NAME -->
          <div class="form__field-wrapper">
            <label class="" for="name-form">Nome*</label>
            <input
              type="text"
              name="name-form"
              id="nameForm"
              placeholder="Seu nome aqui"
              autocomplete="off"
              oninput="validateName(this)"
              required
            />
          </div>

          <!-- FORM__EMAIL -->
          <div class="form__field-wrapper">
            <label for="email-form">Seu melhor e-mail para contato*</label>
            <input
              type="email"
              name="email-form"
              id="emailForm"
              placeholder="email@exemplo.com"
              oninput="validateEmail(this)"
              required
            />
          </div>

          <!-- FORM__CELLPHONE -->
          <div class="form__field-wrapper">
            <label class="" for="cellphone-form">Número de celular*</label>
            <input
              type="tel"
              name="cellphone-form"
              id="cellphoneForm"
              placeholder="Seu número aqui"
              title="Seu número de celular com o código de área"
              onkeypress="mascara(this)"
              oninput="validateNumber(this)"
              maxlength="15"
              autocomplete="off"
              required
            />
          </div>

          <button
            class="btn btn--full btn--submit"
            name="submit-btn"
            formaction="enviar.php"
            type="submit"
            id="enviar"
            title="Enviar formulário"
          >
            Quero dar mais uma chance pra franquia! <span class="smile">:)</span>
          </button>
        </div>
      </form>
    </div>

    <script src="./libs/lazysizes/lazysizes.min.js" async></script>
    <script src="./main.js" defer></script>
    <script src="./libs/splide-3.6.4/splide.min.js" defer></script>
    <script src="./libs/lite-youtube/lite-ytb-embed.js" defer></script>
  </body>
</html>
