
<!DOCTYPE html>
<html>
  <head>
    

<title>TORNE-SE UM PROGRAMADOR</title>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,Node.js,C#,Ruby,Java,Asp,PHP,Wordpress,Aplicativos">
<meta name="author" content="Danilo Aparecido dos Santos">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stylesheets/wow/css/libs/animate.css">
<link rel="stylesheet" type="text/css" href="https://www.torneseumprogramador.com.br/stylesheets/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://www.torneseumprogramador.com.br/stylesheets/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="https://www.torneseumprogramador.com.br/stylesheets/style.css">

<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:site" content="@didox">
<meta property="twitter:title" content="TORNE-SE UM PROGRAMADOR - Aprenda a desenvolver soluções">
<meta property="twitter:description" content="Com ele você irá aprender tudo que precisa para se tornar um programador.">
<meta property="twitter:image" content="https://i.imgur.com/6ko7NGW.jpg">

<meta property="og:site_name" content="TORNE-SE UM PROGRAMADOR">
<meta property="og:title" content="TORNE-SE UM PROGRAMADOR">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.torneseumprogramador.com.br/">
<meta property="og:image" content="https://i.imgur.com/6ko7NGW.jpg">
<meta property="og:description" content="">

<meta name="facebook-domain-verification" content="px8udkooun14svfous0j7q2ykdb3lj" />

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="/stylesheets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="//code.jivosite.com/widget/uhTDguOTYR" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- Initialize Swiper -->
<script type="text/javascript">
  $(function() {
    $('a').bind('click',function(event){
      var $anchor = $(this);
      $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1000,'swing');
        // Outras Animações
        // linear, swing, jswing, easeInQuad, easeInCubic, easeInQuart, easeInQuint, easeInSine, easeInExpo, easeInCirc, easeInElastic, easeInBack, easeInBounce, easeOutQuad, easeOutCubic, easeOutQuart, easeOutQuint, easeOutSine, easeOutExpo, easeOutCirc, easeOutElastic, easeOutBack, easeOutBounce, easeInOutQuad, easeInOutCubic, easeInOutQuart, easeInOutQuint, easeInOutSine, easeInOutExpo, easeInOutCirc, easeInOutElastic, easeInOutBack, easeInOutBounce
      });
    try{ new WOW().init(); } catch(e) { }
  });

  $(document).on('ready', function() {
    const screenWidth = screen.width;
    slidesComentarios(screenWidth)
    slidesImersoes(screenWidth)
    modalDivulgacao()

    localStorage.removeItem("divulgacao")
    localStorage.removeItem("divulgacao_java")
    localStorage.removeItem("divulgacao_promo_treina")

    if(!getCookies()) $('#barra-cookies').show()
  })

  $(document).on('hidden.bs.modal', '#modalDivulgacao', function (event) {
    setDivulgacao(true)
  });

  const modalDivulgacao = () => {
    if(!getDivulgacao()) $('#modalDivulgacao').modal('show')
  }

  const slidesImersoes = (screenWidth) => {
    let slidesComentariosShow = 3
    if(screenWidth <= 1238 && screenWidth >= 992) slidesComentariosShow = 2

    $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: slidesComentariosShow,
      slidesToScroll: 1
    });
  }

  const slidesComentarios = (screenWidth) => {
    let slidesImersoesShow = 4
    if(screenWidth <= 1092 && screenWidth >= 992) slidesImersoesShow = 3
    if(screenWidth <= 991 && screenWidth >= 557) slidesImersoesShow = 2
    if(screenWidth <= 556) slidesImersoesShow = 1

    $(".mentorias-imersões").slick({
      dots: false,
      infinite: true,
      slidesToShow: slidesImersoesShow,
      slidesToScroll: 1
    });
  }

  var setCookies = (cookies) => {
    localStorage.setItem("cookies", JSON.stringify(cookies));
  };

  var getCookies = () => {
    try{
      let cookies = JSON.parse(localStorage.getItem("cookies"))
      return cookies;
    }
    catch(e){ return undefined }
  }

  var setDivulgacao = (divulgacao) => {
    localStorage.setItem("@Tornese:promo_black", JSON.stringify(divulgacao));
  };

  var getDivulgacao = () => {
    try{
      let divulgacao = JSON.parse(localStorage.getItem("@Tornese:promo_black"))
      return divulgacao;
    }
    catch(e){ return undefined }
  }

  var fecharCookies = function(){
    $('#barra-cookies').hide()
    setCookies("tornese-aprovado")
  }
</script>


    <style>
          #barra-cookies{ background-color: #000; left: 0; bottom: 0; padding: 10px; margin: auto; width: 100%; margin-top: 50px; z-index: 1; position: sticky; display:none}
    </style>
  </head>
  
  <body class="home">