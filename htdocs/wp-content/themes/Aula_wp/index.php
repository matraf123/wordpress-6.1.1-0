<?php
/**
 * O tema do Rafael do torne-se um programa
 *
 * sonho de milhões 
 *
 * @link https://www.torneseumprogramador.com.br/
 *
 * @package Didox Business & Technology
 * @subpackage Aula Wordpress
 * @since 0.0.1
 */

get_header();
?>
    <div class="nav-style nav-desktop">
  
    <div class="container-fluid header-divulgacao">
      <div style="font-size: 1.2rem;"> 
        <b><span style="background-color: #4749a7; padding: 5px;">BLACK NOVEMBER T.U.P.</span></b>
      </div>
      <div style="font-size: .9rem;padding: 0px 5%;">
        <b>Saiba como ganhar dinheiro com tecnologia e garanta seu espaço nesse mercado com cursos.</b> <br>
        Tenha acesso ao conhecimento que vai fazer você construir uma nova fonte de renda ou aumentar o seu sálario atual, mesmo que você esteja começando agora!
      </div>
    </div>
  
  
  <div class="container-fluid" style="padding: 0px 5%;">
    <div class="row" style="align-items: center;">
      <div class="col-sm-1 col-md-1">
        <a href="/">
          <img src="https://www.torneseumprogramador.com.br/images/icon.png" class="icon-tornese">
        </a>
      </div>
      <div class="col-sm-2 col-md-2">
        <a class="navbar-brand" style="font-weight: 900; text-align:center;color:#fff;" href="/">TORNE-SE UM <br> PROGRAMADOR</a>
      </div>
      <div class="col-sm-3 col-md-5">
        <form class="form-inline" action="/busca" method="GET">
          <div class="input-group" style="width: 100%;">
            <input type="text" class="form-control" type="text" id="aula" name="q" value="" placeholder="O que procura?" aria-label="O que procura?" aria-describedby="basic-addon2" style="border-radius: 0px;" required>
            <button style="border: 0;background-color: #1f4e63;"><span class="input-group-text" id="basic-addon2" style="border-radius: 0px;border:0px;background-color: #1f4e63;color: #fff;"><ion-icon name="search" id="icon-pesquisa"></ion-icon></span></button>
          </div>
        </form>
      </div>
      <div class="col-sm-6 col-md-4" style="text-align: end;">
        <a href="https://cursos.torneseumprogramador.com.br/index.html" target="_blank" class="btn btn-assinatura"> Assinatura Anual </a>
        <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/v94J1XJgOg/texto-de-apresentacao" target="_blank" class="btn btn-aluno ml-2">Área do Aluno</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0px 5%;">
    <div class="container-fluid" style="border-top: 1px solid #fff; padding: 0px;">
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto" style="width: 100%;justify-content: space-between;">
          <li class="nav-item">
            <a class="nav-link" href="/">PÁGINA INICIAL</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              CURSOS
            </a>
            <div class="dropdown-menu dropdown-style" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class="col-md-4">
                  <a class="dropdown-item" href="/cursos/angular"><ion-icon name="logo-angular"></ion-icon>Angular</a>
                  <a class="dropdown-item" href="/cursos/aplicativos"><ion-icon name="logo-ionic"></ion-icon>Aplicativos</a>
                  <a class="dropdown-item" href="/cursos/arquitetura"><ion-icon name="archive"></ion-icon>Arquitetura</a>
                  <a class="dropdown-item" href="/cursos/sql"><ion-icon name="server"></ion-icon>Banco de Dados</a>
                  <a class="dropdown-item" href="/cursos/cache"><ion-icon name="bar-chart"></ion-icon>Cache</a>
                  <a class="dropdown-item" href="/cursos/c-sharp"><ion-icon name="map"></ion-icon>C-Sharp</a>
                  <a class="dropdown-item" href="/aulas/devops"><ion-icon name="logo-deviantart"></ion-icon>Devops</a>
                  <a class="dropdown-item" href="/cursos/javascript"><ion-icon name="logo-nodejs"></ion-icon>ECMAScript(JavaScript)</a>
                  <a class="dropdown-item" href="/cursos/html"><ion-icon name="logo-html5"></ion-icon>HTML/CSS</a>
                </div>
                <div class="col-md-5">
                  <a class="dropdown-item" href="/aulas/graphql"><ion-icon name="share-social-outline"></ion-icon>GraphQL</a>
                  <a class="dropdown-item" href="/aulas/infra_nuvem"><ion-icon name="partly-sunny"></ion-icon>Infraestrutura na Nuvem</a>
                  <a class="dropdown-item" href="/aulas/integracao-continua"><ion-icon name="cube"></ion-icon>Integração Contínua</a>
                  <a class="dropdown-item" href="/cursos/java"><ion-icon name="logo-stencil"></ion-icon>Java</a>
                  <a class="dropdown-item" href="/aulas/kubernetes"><ion-icon name="leaf"></ion-icon>Kubernetes</a>
                  <a class="dropdown-item" href="/aulas/logica_programacao_javascript"><ion-icon name="logo-javascript"></ion-icon>Lógica de Programação</a>
                  <a class="dropdown-item" href="/aulas/multiplas_apis"><ion-icon name="code-slash"></ion-icon>Multiplas APIs</a>
                  <a class="dropdown-item" href="/cursos/negocios-tecnologicos"><ion-icon name="business-outline"></ion-icon>Negócios e Tecnologia</a>
                  <a class="dropdown-item" href="/aulas/nextjs"><ion-icon name="earth"></ion-icon>Next.js</a>
                </div>
                <div class="col-md-3">
                  <a class="dropdown-item" href="/cursos/php"><ion-icon name="paw"></ion-icon>PHP</a>
                  <a class="dropdown-item" href="/aulas/logica_programacao_python"><ion-icon name="logo-python"></ion-icon>Python</a>
                  <a class="dropdown-item" href="/cursos/react"><ion-icon name="logo-react"></ion-icon>React</a>
                  <a class="dropdown-item" href="/cursos/ruby"><ion-icon name="diamond"></ion-icon>Ruby on Rails</a>
                  <a class="dropdown-item" href="/aulas/seguranca"><ion-icon name="shield-checkmark"></ion-icon>Segurança</a>
                  <a class="dropdown-item" href="/aulas/sql-server"><ion-icon name="server"></ion-icon>SQL Server</a>
                  <a class="dropdown-item" href="/cursos/vuejs"><ion-icon name="logo-vue"></ion-icon>Vue.js</a>
                  <a class="dropdown-item" href="/cursos/wordpress"><ion-icon name="logo-wordpress"></ion-icon>WordPress</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cursos/vitalicio">CURSOS VITALÍCIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/comunidade-site">COMUNIDADE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/agenda">AGENDAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.youtube.com/c/daniloaparecido">YOUTUBE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=5511976144154&amp;text=Oi%20Danilo%2C%20quero%20marcar%20uma%20consultoria%20ou%20aula%20particular">CONTATE-NOS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<nav class="navbar navbar-expand-lg navbar-dark nav-style nav-mobile py-3">
  
    <div class="container-fluid header-divulgacao">
      <div style="font-size: 12px;text-align: center;width: 100%;">
        <a href="https://cursos.torneseumprogramador.com.br/combo-csharp/" target="_blank" style="color: #fff;"> 
          <b><span style="background-color: #ed5249;padding: 5px;">BLACK</span> NOVEMBER T.U.P.</b>
        </a>
      </div>
    </div>
  
  <div class="container-fluid">
    <a href="/">
      <img src="https://www.torneseumprogramador.com.br/images/icon.png" class="icon-tornese">
    </a>
    <a class="navbar-brand" style="font-weight: 900; text-align:center;" href="/">TORNE-SE UM <br> PROGRAMADOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
      aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="padding-left: 4%;">
      <ul class="navbar-nav mr-auto mt-3">
        <li class="nav-item">
          <a class="nav-link" href="/">PÁGINA INICIAL</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            CURSOS
          </a>
          <div class="dropdown-menu dropdown-style" aria-labelledby="navbarDropdown">
            <div class="row">
              <div class="col-md-4">
                <a class="dropdown-item" href="/cursos/angular"><ion-icon name="logo-angular"></ion-icon>Angular</a>
                <a class="dropdown-item" href="/cursos/aplicativos"><ion-icon name="logo-ionic"></ion-icon>Aplicativos</a>
                <a class="dropdown-item" href="/cursos/arquitetura"><ion-icon name="archive"></ion-icon>Arquitetura</a>
                <a class="dropdown-item" href="/cursos/sql"><ion-icon name="server"></ion-icon>Banco de Dados</a>
                <a class="dropdown-item" href="/cursos/cache"><ion-icon name="bar-chart"></ion-icon>Cache</a>
                <a class="dropdown-item" href="/cursos/c-sharp"><ion-icon name="map"></ion-icon>C-Sharp</a>
                <a class="dropdown-item" href="/aulas/devops"><ion-icon name="logo-deviantart"></ion-icon>Devops</a>
                <a class="dropdown-item" href="/cursos/javascript"><ion-icon name="logo-nodejs"></ion-icon>ECMAScript(JavaScript)</a>
                <a class="dropdown-item" href="/cursos/html"><ion-icon name="logo-html5"></ion-icon>HTML/CSS</a>
              </div>
              <div class="col-md-5">
                <a class="dropdown-item" href="/aulas/graphql"><ion-icon name="share-social-outline"></ion-icon>GraphQL</a>
                <a class="dropdown-item" href="/aulas/infra_nuvem"><ion-icon name="partly-sunny"></ion-icon>Infraestrutura na Nuvem</a>
                <a class="dropdown-item" href="/aulas/integracao-continua"><ion-icon name="cube"></ion-icon>Integração Contínua</a>
                <a class="dropdown-item" href="/cursos/java"><ion-icon name="logo-stencil"></ion-icon>Java</a>
                <a class="dropdown-item" href="/aulas/kubernetes"><ion-icon name="leaf"></ion-icon>Kubernetes</a>
                <a class="dropdown-item" href="/aulas/logica_programacao_javascript"><ion-icon name="logo-javascript"></ion-icon>Lógica de Programação</a>
                <a class="dropdown-item" href="/aulas/multiplas_apis"><ion-icon name="code-slash"></ion-icon>Multiplas APIs</a>
                <a class="dropdown-item" href="/cursos/negocios-tecnologicos"><ion-icon name="earth"></ion-icon>Negócios e Tecnologia</a>
                <a class="dropdown-item" href="/aulas/nextjs"><ion-icon name="earth"></ion-icon>Next.js</a>
              </div>
              <div class="col-md-3">
                <a class="dropdown-item" href="/cursos/php"><ion-icon name="paw"></ion-icon>PHP</a>
                <a class="dropdown-item" href="/aulas/logica_programacao_python"><ion-icon name="logo-python"></ion-icon>Python</a>
                <a class="dropdown-item" href="/cursos/react"><ion-icon name="logo-react"></ion-icon>React</a>
                <a class="dropdown-item" href="/cursos/ruby"><ion-icon name="diamond"></ion-icon>Ruby on Rails</a>
                <a class="dropdown-item" href="/aulas/seguranca"><ion-icon name="shield-checkmark"></ion-icon>Segurança</a>
                <a class="dropdown-item" href="/aulas/sql-server"><ion-icon name="server"></ion-icon>SQL Server</a>
                <a class="dropdown-item" href="/cursos/vuejs"><ion-icon name="logo-vue"></ion-icon>Vue.js</a>
                <a class="dropdown-item" href="/cursos/wordpress"><ion-icon name="logo-wordpress"></ion-icon>WordPress</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cursos/vitalicio">CURSOS VITALÍCIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/comunidade-site">COMUNIDADE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/agenda">AGENDAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://www.youtube.com/c/daniloaparecido">YOUTUBE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=5511976144154&amp;text=Oi%20Danilo%2C%20quero%20marcar%20uma%20consultoria%20ou%20aula%20particular">CONTATE-NOS</a>
        </li>
      </ul>
      <form class="form-inline" action="/busca" method="GET" style="position: relative;">
        <div class="input-group">
          <input type="text" class="form-control"required type="text" id="aula" name="q" value="" placeholder="O que deseja?" aria-label="O que deseja?" aria-describedby="basic-addon2" style="border-radius: 0px;">
          <button style="border: 0;background-color: #1f4e63;"><span class="input-group-text" id="basic-addon2" style="border-radius: 0px;border:0px;background-color: #1f4e63;color: #fff;"><ion-icon name="search" id="icon-pesquisa"></ion-icon></span></button>
        </div>
      </form>
    </div>
  </div>
</nav> 

<script>
  $('.header-divulgacao').click(function () {
    window.open('https://cursos.torneseumprogramador.com.br/', '_blank')
  })
</script>
    <div class="container-fluid imagem-topo" style="background-image: url(https://www.torneseumprogramador.com.br/images/capa.png);background-color: #2692c4;">
  <div class="container-fluid div-topo">

    <div>
      <div class="div-col-text" style="padding: 5rem 0;">
        <h1 class="div-col-h1" style="text-transform:uppaercase;">Torne-se um PROGRAMADOR</h1>
        <p class="div-col-p">Aprenda as tecnologias mais atuais no mercado, com profissionais dedicados a oferecer aulas personalizadas e de excelência de acordo com as necessides de nossos alunos.</p>
      </div>
      <div>
        <iframe class="iframe" src="https://www.youtube.com/embed/RMWy3J5YM9w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
    <!-- Courses Section -->
<section id="courses" class="pb-3 pt-5">
  <h1 class="curso-h1">Cursos</h1>
  
  <div class="courses">
    <?php
      $args = array(
        'post_type'=>'aula',
        'posts_per_page'=> 6
      );
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post();?>

    <div>  
          <a href="/aulas/dotnet_csharp"><img src="https://www.torneseumprogramador.com.br/images/mentorias/dotnet-csharp.jpeg"></a>
        
        <div class="content-legend">
          <h6>DotNet 7 | C# 11</h6>
          <span>Danilo Aparecido</span>
          <h5 class="mt-2">Comunidade</h5>
        </div>
    </div>

      <!-- post -->
      <div class="col-md-4">
        <div class="post post-sm">
          <a class="post-img" href="<?php echo get_permalink(); ?>"><img src="<?php echo
          get_the_post_thumbnail_url(); ?>" alt=""></a>
          <div class="post-body">
            <div class="post-category">
              <?php foreach (get_the_category() as $category){ ?>
                <a href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a>
              <?php } ?>
            </div>
            <h3 class="post-title">
              <a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
            </h3>
            <ul class="post-meta">
              <!--li><?php echo get_the_author(); ?></li-->
              <li><?php echo get_the_date(); ?></li>
            </ul>
          </div> 
        </div>
      </div>
                <!-- /post -->
      <?php endwhile; ?>
      <div>
    

    <div></div>
    <div></div>
  </div>

  <p style="display: flow-root; margin-right: 5rem;">
    <a href="/cursos" class="btn btn-primary" style="background-color: #2f98cf;border-radius: 15px;float: right;">
      Veja Mais Cursos
    </a>
  </p>
</section>
    
<div class="container-fluid cursos pt-5 pb-5" style="background-color: #def3ff">
  <h1 class="curso-h1">Sou aluno</h1>
  <div class="container plataformas pt-3" style="text-align: center;">
    <h2 class="mt-3"> 
      Se você é aluno da <strong>COMUNIDADE TOP</strong>, clique no botão abaixo e tenha acesso a todas as nossas mentorias.
    </h2>

    <div class="mt-5">
      <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/"
        target="_blank"
        style="background-color: #ed4e23; color: #fff; font-weight: 900;padding: 14px;border-radius: 15px; text-transform: uppercase;">
        acessar comunidade
      </a>
    </div>
  </div>
</div>

    



  <div class="container-fluid ul-aulas aul" id="UL" >
    <br><br>
    <h1 class="ulAulas-h1">Últimas Aulas</h1>
    <br>
    <div class="container-fluid aulas" style="text-align: center;">
      <div class="row">
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/NOwpy8x14m/02-or-novidades-dotnet-7-e-c-11" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/dotnet-csharp.jpeg" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Novidades dotnet 7 e C# 11</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/YOmw1xGqed/01-or-instalacao-do-net7-c-11-e-configuracao-dos-editores-em-windows-mac-e-linux" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/dotnet-csharp.jpeg" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Instalação do .Net7, C# 11 e configuração dos editores em Windows, Mac e Linux</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/BOnpnKdJeR/05-or-utilizando-graphql-no-frontend" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/graphql.png" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Utilizando GraphQL no Frontend</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/V73WxaoZ73/21-or-criando-endpoints-configurando-handlers-e-multi-tenant" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/multiTenant_api.png" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Criando endpoints, configurando handlers e multi-tenant</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/64lpnQmQ4j/18-or-sincronizando-links-ativo-a-tela-selecionada-resolvendo-feedbacks-via-websocket" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/rails_7.png" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Sincronizando links ativo à tela selecionada, resolvendo feedbacks via websocket</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/146WMJ8Ked/20-or-concluindo-testes-integrados-da-camada-de-aplicacao-e-organizando-api-(injecao-de-dependencia-e-pacotes)" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/multiTenant_api.png" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Concluindo testes integrados da camada de aplicação e organizando api (injeção de dependência e pacotes)</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/146Wm5Pwed/17-or-resolvendo-pendencias" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/rails_7.png" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Resolvendo pendências</h6>
          </div>
        
          
          <div class="col-sm-4 col-md-3 titulo">
            
              <a href="https://comunidadefechadatorneseumprog.club.hotmart.com/lesson/E4zgldQ9el/04-or-mutacoes-e-o-tipo-input-no-graphql" target="_blank">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/graphql.png" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
              </a>
            
            <h6>Mutações e o tipo input no GraphQL</h6>
          </div>
        
      </div>
    </div>
    <br><br><br> 
  </div>







    <section style="background-image: linear-gradient(to bottom, #fff, #00000012);">
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="card card-compra" style="margin-right: 0px; width: 100%; margin-bottom: 30px;">
          <h5 class="card-title card-title-h5-2" style="background: #02b919">Comunidade <br> Fechada</h5>
  
          <div class="div-img-compra">
            <img src="https://trello-attachments.s3.amazonaws.com/570b74611cd5fe43e9d239c0/5e7e22718240961bb6ddb37e/89cc0a68b19c65f404a5aa1415a9557a/image.png" class="img-compra-project">
            <div class="div-text-card" >
  
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Estudo Orientado;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Exercícios Práticos;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Mentorias Ao Vivo e Gravadas;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Aulas Técnicas;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Acompanhamento Diário;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Suporte Intensivo;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Grupo Exclusivo;</span></p>
            </div>
          </div>
          <br>
          <div class="div-valor-compra" style="padding-top: 85px;">
            <p><b>R$</b> <span class="valor-compra">29,23</span><b>/mês</b></p>
            <a href="https://cursos.torneseumprogramador.com.br/#planos" class="btn btn-compra"  style="background: #02b919">Comprar</a> 
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="card card-compra" style="margin-right: 0px; width: 100%; margin-bottom: 30px;" style="padding:0px; margin-bottom: 10px">
          <h5 class="card-title card-title-h5-2">Dê vida ao seu<br> PROJETO</h5>
  
          <div class="div-img-compra">
            <img src="https://www.torneseumprogramador.com.br/images/icone-projetos.png" class="img-compra-project">
            <div class="div-text-card">
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Desenvolva do MENOR ao MAIOR sistema com suporte a todo momento;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Saiba como Rentabilizar e Escalar seu sistema;</span></p>
              <p class="card-text p-card-text" style="text-align: left;"><img src="https://www.torneseumprogramador.com.br/images/checked.png" style="height: 17px;"> <span>Aprenda como EVOLUIR o seu projeto;</span></p>
            </div>
          </div>
          <br>
          <div class="div-valor-compra">
            <div>
              <b>R$</b> <span class="valor-compra">140,00</span><b>/hora</b><br>
              <div>
                Para alunos ELITE/VIP<br>
                <b>R$ 120,00/hora </b><br>
                Para ser aluno <a href="https://cursos.torneseumprogramador.com.br/index.html" target="_blank">clique aqui</a>
              </div>
            </div>
            <br>
            <a href="/comprar/hora-desenvolvimento" class="btn btn-compra"  style="background:#0271b9;">Comprar</a> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>
</section>

    <style>
  .mentorias .desafios h1{
    text-align: initial;
    font-size: 2em;
    margin-left: 3rem;
  }

  a{
    color: #000;
  }

  a:hover{
    color: #000;
    text-decoration: none;
  }

  .tittle-ultimas-aulas{
    background: #fff;
    color: #2378a3;
    display: inline-block;
    padding: 8px;
    border-radius: 20px;
  }

  .cards-ultimas-aulas{
    display: flex;     
    padding-bottom: 10px;
    overflow: auto;
  }

  .cards-ultimas-aulas::-webkit-scrollbar {
    display: none;
  }

  .card-img-top{
    margin: 10px; 
    width: 93%;
    border-radius: 8px;
  }

  /* Hide scrollbar for IE, Edge and Firefox */
  .cards-ultimas-aulas {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
  }

  .card-mentorias{
    background-color: #fff;
    color: #000;
    border: none;
    min-width: 15rem;
    margin-right: 25px;
    border-radius: 0px;
    height: 19rem;
  }

  .card-title{
    text-align: center;
  }

  .slick-prev:before, .slick-next:before {
    color: rgb(255, 255, 255);
  }
</style>

<div class="container-fluid mentorias">
  <br><br>
  <div class="container">
    <div class="wow animated flipInX mb-5" data-wow-duration=".1s" data-wow-delay=".3s">
      <h1 class="h1-mentorias">Mentorias da Comunidade TOP</h1>
    </div>

    
    <div class="desafios mt-5">
      <h1 class="h1-mentorias mt-5 mb-4">DESAFIOS E IMERSÕES</h1>

      <section class="mentorias-imersões slider-mentorias">
        
          <div>
            <a href="/aulas/logica_programacao_python">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/capa-python.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Lógica de Programação | Python</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/banco-dados">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/banco-de-dados.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Banco de Dados</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/logica_programacao_javascript">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/logica-js.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Lógica de Programação | JavaScript</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/criacao_api">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/criacao-apis.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Criação de APIs</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/kubernetes">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/kubernetes.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Kubernetes</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/devops">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/devops.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Devops</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/logica_programacao_ruby">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/logica-ruby.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Lógica de Programação | Ruby</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/infra_nuvem">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Infraestrutura.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Infraestrutura na Nuvem</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/programacao_orientada_objetos">
              <div class="card card-mentorias">
                <img src="https://img.youtube.com/vi/bN-6E8NIq78/maxresdefault.jpg" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Programação Orientada a Objetos | C#</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/multiplas_apis">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/multiplas-apis.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Múltiplas API´S</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/seguranca">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/imersao-seguranca-da-informacao.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Segurança em Aplicações Web</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/wordpress_programadores">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/wordpress.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">WordPress para Programadores</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/kubernetes">
              <div class="card card-mentorias">
                <img src="https://img.youtube.com/vi/N7Phh15NwPk/maxresdefault.jpg" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Docker, Docker Compose e Kubernetes</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/devops">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/CI &amp; CD.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Continuous Delivery e Continuous Integration</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/testes_automatizados">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/ddd.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">Domain Driven Design</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/testes_automatizados">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/TDD E BDD.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">DESAFIOS E IMERSÕES</h6>
                  <h5 class="card-title">TDD e BDD - Testes Automatizados</h5>
                </div>
              </div>
            </a>
          </div>
        
      </section>
    </div> 
    
    <div class="desafios mt-5">
      <h1 class="h1-mentorias mt-5 mb-4">MENTORIAS TÉCNICAS</h1>

      <section class="mentorias-imersões slider-mentorias">
        
          <div>
            <a href="/aulas/design_patterns">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Design_Patterns.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Design Patterns</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/jwt_autorizacao">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/JWT_JAVA.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Java API JWT com Autorização</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/websokets_rails">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/websokets_rails.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Websokets em Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/type_orm">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/type_orm.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Iniciando com Type ORM</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/tdd_rspec_2">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/tdd_rspec.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">TDD COM RSPEC 2.0</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/sql_language">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/sql.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">SQL - Structured Query Language</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/servico_integracao">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/servico_integracao.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Serviço de Integração com Windows Background Services</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/sequelize">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/sequelize.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Introdução ao Sequelize</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/iniciando_react">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/react.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Iniciando com React</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/contruindo_api_rails">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/rails_7.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">CONTRUINDO API COM RAILS 7</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/api_multi_tenant">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/multiTenant_api.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Api multi-tenant em .Net 6</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/gerenciamento_academias">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/gerenciamento.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Projeto: Gerenciamento de Academias</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/entity_framework">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/entity_framework.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Introdução ao Entity Framework</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/docker_compose_rails">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/docker_rails.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Docker Compose on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/capacitor">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tecnico/capacitor.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Introdução ao Capacitor</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/micro_servicos">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/micro-servicos.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Aplicação Com Micro Serviços | JavaScript</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/zero_app_mobile_2">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/app-ror-ajs.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Do Zero ao Aplicativo Mobile | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/fluxo_caixa">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/fluxo-caixa-react.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Fluxo de Caixa | React</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/locacao_veiculo_react">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/rn-locacao.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Locação de Veiculos | React Native</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/zero_aplicacao_desktop">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Novo APP Desktop.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Do Zero a Aplicação Desktop | C#</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/sistema-controle-estoque">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/sistema-controle-estoque.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Sistema de Controle de Estoque | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/ror-meio-pagamento">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/ror-meio-pagamento.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Do Zero ao Meio de Pagamento | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/ror-locacao-veiculos">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/rOR-locacao.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Locação de Veiculos | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/zero_api_rails">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/novo_zero_a_api.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Do Zero a API | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/reproducao_cursos">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/app-reprod-curso.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">Aplicação para Reprodução de Cursos | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/tdd_rspec">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/tdd com rspc.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">TDD com RSPEC | Ruby on Rails</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/git">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/GIT.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">GIT</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/html_css">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/html.jpg" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS TÉCNICAS</h6>
                  <h5 class="card-title">HTML/CSS</h5>
                </div>
              </div>
            </a>
          </div>
        
      </section>
    </div> 
    
    <div class="desafios mt-5">
      <h1 class="h1-mentorias mt-5 mb-4">MENTORIAS FINANCEIRAS</h1>

      <section class="mentorias-imersões slider-mentorias">
        
          <div>
            <a href="/aulas/mindset-milionario">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Mindset-Programador-Milionario.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS FINANCEIRAS</h6>
                  <h5 class="card-title">Mindset do Programador Milionário</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/deslanchar-carreira">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Transforaçao e Prosperidade.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS FINANCEIRAS</h6>
                  <h5 class="card-title">Como deslanchar sua carreira em Tecnologia</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/mercado-corportativo">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Mercado Corporativo.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS FINANCEIRAS</h6>
                  <h5 class="card-title">Mercado Corporativo</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/visao-longo-prazo">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/VISAO DE LONGO PRAZO.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS FINANCEIRAS</h6>
                  <h5 class="card-title">Visão de Longo Prazo</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/financas-pessoais">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Finanças Pessoais.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS FINANCEIRAS</h6>
                  <h5 class="card-title">Finanças Pessoais</h5>
                </div>
              </div>
            </a>
          </div>
        
          <div>
            <a href="/aulas/marketing-digital">
              <div class="card card-mentorias">
                <img src="https://www.torneseumprogramador.com.br/images/mentorias/Marketing Digital.png" class="card-img-top">
                <div class="card-body">
                  <h6 class="text-center" style="font-size: 9px;color: #4e4e4e;">MENTORIAS FINANCEIRAS</h6>
                  <h5 class="card-title">Marketing Digital</h5>
                </div>
              </div>
            </a>
          </div>
        
      </section>
    </div> 
    

    <p class="text-center mt-5">
      <a class="btn btn-warning" style="font-size: 20px" target="_blank" href="https://cursos.torneseumprogramador.com.br/index.html#planos">ASSINE JÁ</a>
    </p>
  </div>
  <br><br>
</div>





    <section class="text-center pt-5 pb-5">
  <br>
  <h1 class="curso-h1">Produtos</h1>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <a href="https://cursos.torneseumprogramador.com.br/camiseta/" target="_blank">
          <img src="https://www.torneseumprogramador.com.br/images/produtos/Combo.png" class="img-fluid">
        </a>
        <h4>Camisa + Adesivo<br> TORNE-SE PROGRAMADOR</h4>
        <br>
        <h4>R$ 45,90</h4>
        <p>Frete a calcular</p>
        <a href="https://api.whatsapp.com/send?phone=5511976144154&text=Fala%20Danilo%2C%20gostei%20muito%20da%20Camiseta.%20Já%20quero%20fazer%20o%20pedido." class="btn btn-compra"  style="background:#0271b9;">Comprar</a>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://www.torneseumprogramador.com.br/images/produtos/bone-tornese.png" class="img-fluid">
        <h4>Boné Preto Aba Curva<br> TORNE-SE PROGRAMADOR</h4>
        <br>
        <h4>R$ 38,90</h4>
        <p>Frete a calcular</p>
        <a href="https://api.whatsapp.com/send?phone=5511976144154&text=Fala%20Danilo%2C%20gostei%20muito%20do%20Boné.%20Já%20quero%20fazer%20o%20pedido." class="btn btn-compra"  style="background:#0271b9;">Comprar</a>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://www.torneseumprogramador.com.br/images/produtos/garrafa-tornese.png" style="width: 200px;" class="img-fluid">
        <h4>Garrafa 450ml<br> TORNE-SE PROGRAMADOR</h4>
        <br>
        <h4>R$ 41,90</h4>
        <p>Frete a calcular</p>
        <a href="https://api.whatsapp.com/send?phone=5511976144154&text=Fala%20Danilo%2C%20gostei%20muito%20da%20Garrafa.%20Já%20quero%20fazer%20o%20pedido." class="btn btn-compra"  style="background:#0271b9;">Comprar</a>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://www.torneseumprogramador.com.br/images/produtos/MousePad.png" style="width: 310px;" class="img-fluid">
        <h4>Mouse Pad em tecido Preto <br> TORNE-SE PROGRAMADOR</h4>
        <br>
        <h4>R$ 6,90</h4>
        <p>Frete a calcular</p>
        <a href="https://api.whatsapp.com/send?phone=5511976144154&text=Fala%20Danilo%2C%20gostei%20muito%20da%20Garrafa.%20Já%20quero%20fazer%20o%20pedido." class="btn btn-compra"  style="background:#0271b9;">Comprar</a>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://www.torneseumprogramador.com.br/images/produtos/Adesivo.png" style="width: 310px;" class="img-fluid">
        <h4>Adesivo Logo<br> TORNE-SE PROGRAMADOR</h4>
        <br>
        <h4>R$ 4,45</h4>
        <p>Frete a calcular</p>
        <a href="https://api.whatsapp.com/send?phone=5511976144154&text=Fala%20Danilo%2C%20gostei%20muito%20da%20Garrafa.%20Já%20quero%20fazer%20o%20pedido." class="btn btn-compra"  style="background:#0271b9;">Comprar</a>
      </div>
    </div>
  </div>
</section>

    
<div class="container-fluid sobre" style="background-attachment: fixed;">

  <div class="container-fluid sobre-interno">
    <div class="container">
      <div style="padding-top: 11%;">
        <h1 class="titulo-sobre">Danilo Aparecido</h1>
        <p style="text-indent: 40px"> <i>Oi meu nome é Danilo, fundei o torne-se um programador com objetivo de levar tecnologia e educação para todas as pessoas que deseja aprender. Minha proposta para você é: Aprenda com nossos conteúdos pagos e gratuitos ou através de mentorias e aulas particulares. Se o nosso conteúdo ajudar você, já iremos saber que fizemos um bom trabalho, obrigado por estar aqui.</i>
        </p>
        <p>
          <a class="btn btn-outline-light" 
             style="font-size: 20px"
             target="_blanck"
             href="http://www.daniloaparecido.com.br">Saiba Mais</a>
        </p>
      </div>
  </div>
</div>
</div>
    <section>
  <div class="container-fluid" style="padding: 5%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 align-self-center text-center">
          <img src="https://www.torneseumprogramador.com.br/images/app-tornese.png" alt="app-tornese.png" class="img-fluid" style="width: 50%;">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
          <div class="align-items" >
            <p style="    font-weight: bold;
            color: #757575;
            font-size: 1.4rem;">Agora na palma de suas mãos.</p>
            <h1 style="font-size: 4.3rem; line-height: .8;">Assista nossas aulas quando e onde quiser.</h1>
      
            <h5 class="mt-4">
              <p> Com o aplicativo do Tornse-se um Programador, você assiste nossas aulas em qualquer lugar do mundo. Baixe grátis no seu celular (Android) e fique por dentro das melhores de todo nosso conteudo em um só lugar.  </p>
    
              <p><b>Baixe agora o aplicativo na <a href="https://play.google.com/store/apps/details?id=com.tornese.programador&hl=pt&gl=US" target="_blank" rel="noopener noreferrer">Play Store</a>.</b></p>
            </h5>
  
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>
    <style>
  .cards-comentarios{
    display: flex;     
    padding-bottom: 10px;
    overflow: auto;
  }

  .cards-comentarios::-webkit-scrollbar {
    display: none;
  }

  /* Hide scrollbar for IE, Edge and Firefox */
  .cards-comentarios {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
  }

  .cards{
    background-color: #fff;
    color: #000;
    border: none;
    min-width: 22rem;
    margin-right: 25px;
    border-radius: 0px;
  }
</style>

<div class="container-fluid div-comentario number1">
  <br><br>
    <h1 class="h1-comentario">
      O que nossos alunos e parceiros estão falando do projeto Torne-se um Programador?
    </h1>

    <section class="regular slider">
      <div>
        <div class="div-image-user">
          <img src="https://www.torneseumprogramador.com.br/images/depoimentos/Isaac Martiniano.jpg" class="img-user">
        </div>
         <div class="cards card-comentario">
          <div class="div-comentario-text">
            <div>
               <p class="p-comentario">
                Putz encontrei esse canal hoje. Anos luz a frente dos ensino do meu curso na faculdade. Parabens brother vc tem um método muito detalhado e esclarecedor de passar conhecimento. Forte abraço! Muito obrigado por passar tanto conhecimento!</p>
               <p class="p-nome-user"><i><b>Isaac Martiniano</b></i></p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="div-image-user">
          <img src="https://www.torneseumprogramador.com.br/images/depoimentos/Patrick Siqueira.jpg" class="img-user">
        </div>
         <div class="cards card-comentario">
          <div class="div-comentario-text">
            <div>
               <p class="p-comentario">
                Primeiramente muito obrigado por disponibilizar materiais tao importante, conserteza vou compartilhar e acompanhar todos os seus videos, valeu por tudo. A principio nao tinha algum contato com a programação, mais agora terei contato completo com os seus videos. novamente muito obrigado.</p>
               <p class="p-nome-user"><i><b>Patrick Siqueira</b></i></p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="div-image-user">
          <img src="https://www.torneseumprogramador.com.br/images/depoimentos/Ralf Montel.jpg" class="img-user">
        </div>
         <div class="cards card-comentario">
          <div class="div-comentario-text">
            <div>
               <p class="p-comentario">
                Cara, te amo, namoral. Aprendi a programar por conta própria com o sonho de empreender, mas por ser autodidata, acabava que aprendia bem as paradas porém coisas como essa de planejamento passava em branco por eu ta sozinho e sem orientação. Ae por exemplo não sabia como organizar um layout, usabilidade e coisas como essa que vc passou(era tudo no papel). </p>
               <p class="p-nome-user"><i><b>Ralf Montel</b></i></p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="div-image-user">
          <img src="https://www.torneseumprogramador.com.br/images/depoimentos/Anderson Godoy.jpg" class="img-user">
        </div>
         <div class="cards card-comentario">
          <div class="div-comentario-text">
            <div>
               <p class="p-comentario">
                Danilo, meus sinceros parabéns pelo projeto... são caras como você que eu ainda tenho esperança... Eu tenho dificuldades com as Sintaxes, mas assistindo as suas aulas, tudo está ficando mais claro na minha mente. continue o seu Ótimo trabalho! Deus o abençoe!</p>
               <p class="p-nome-user"><i><b>Anderson Godoy</b></i></p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="div-image-user">
          <img src="https://www.torneseumprogramador.com.br/images/depoimentos/Michel Bernardo.jpg" class="img-user">
        </div>
         <div class="cards card-comentario">
          <div class="div-comentario-text">
            <div>
               <p class="p-comentario">
                Impressionante, tenho vários cursos de js pagos mas consigo entender melhor aqui. O diferencial é que me sinto na sala de aula começando no quadro, parece que ficou mas focado, fora a didática top.</p>
               <p class="p-nome-user"><i><b>Michel Bernardo</b></i></p>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>



<div class="container-fluid div-comentario number2">
  <br><br>
  <h1 class="h1-comentario">
    O que nossos alunos e parceiros estão falando do projeto Torne-se um Programador?
  </h1>

  <br><br>
  <div style="border-left: 4px solid #5c5e9b; padding-left: 6px;">
    <p class="p-comentario2">
      <i>"Putz encontrei esse canal hoje. Anos luz a frente dos ensino do meu curso na faculdade. Parabens brother vc tem um método muito detalhado e esclarecedor de passar conhecimento. Forte abraço! Muito obrigado por passar tanto conhecimento!"
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Isaac Martiniano</b></p>
  </div>
  <br><br>
  <div style="border-right: 4px solid #5c5e9b; padding-right: 6px; text-align: end">
    <p class="p-comentario2">
      <i>"Impressionante, tenho vários cursos de js pagos mas consigo entender melhor aqui. O diferencial é que me sinto na sala de aula começando no quadro, parece que ficou mas focado, fora a didática top."
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Michel Bernardo</b></p>
  </div>
  <br><br>
  <div style="border-left: 4px solid #5c5e9b; padding-left: 6px;">
    <p class="p-comentario2">
      <i>"Cara, te amo, namoral. Aprendi a programar por conta própria com o sonho de empreender, mas por ser autodidata, acabava que aprendia bem as paradas porém coisas como essa de planejamento passava em branco por eu ta sozinho e sem orientação. Ae por exemplo não sabia como organizar um layout, usabilidade e coisas como essa que vc passou(era tudo no papel)."
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Michel Bernardo</b></p>
  </div>
  <br><br>
  <div style="border-right: 4px solid #5c5e9b; padding-right: 6px; text-align: end">
    <p class="p-comentario2">
      <i>"Primeiramente muito obrigado por disponibilizar materiais tao importante, conserteza vou compartilhar e acompanhar todos os seus videos, valeu por tudo. A principio nao tinha algum contato com a programação, mais agora terei contato completo com os seus videos. novamente muito obrigado."
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Patrick Siqueira</b></p>
  </div>
  <br><br><br><br>
</div>




    <!-- Modal -->
<div class="modal fade" id="modalDivulgacao" tabindex="-1" role="dialog" aria-labelledby="modalDivulgacaoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <a href="https://cursos.torneseumprogramador.com.br/index.html" target="_blank" rel="noopener noreferrer">
        <img src="https://www.torneseumprogramador.com.br/images/divulgacao/promo-black.jpeg" class="img-user img-fluid">
      </a>
    </div>
  </div>
</div>
    <div id="barra-cookies">
  <h6 class="text-center" style="color: #fff;">Utilizamos os cookies para oferecer melhor expêriencia, melhorar o desempenho, analisar como você interage com o site e personalizar o conteúdo. Ao utilizar este site, você concorda com o uso de cookies?</h6>
  <div class="text-center">
    <a href="javascript:history.back()" style="text-decoration: none; color: #fff; font-weight: bold; cursor:pointer;" class="mr-3">Recusar Cookies</a>
    <button class="btn btn-light" onclick="fecharCookies()">Aceitar Cookies</button>
  </div>
</div>
    <div class="container-fluid enviar-email pb-5">
  <h1> ELEVE SEUS GANHOS E POTENCIALIZE SUA PERFORMANCE</h1>
  <h5> Receba nossa Ebook de LÓGICA DE PROGRAMAÇÃO </h5>
  <br> 
  <div class="row">
    <div class="col-md-5 text-center">
      <img src="https://www.torneseumprogramador.com.br/images/nova-capa-ebook-tornese.png" class="img-fluid" style="width:60%;">
    </div>
    <div class="col-md-7" style="margin-top: 45px;">
      <iframe style="width: 100%; height: 615px;" src="https://40701a8a.sibforms.com/serve/MUIEADsw3OHT6nTgZZ84Pe426OuGWKD8T3dqGEKLWVpgVleo55mVe6lKo-z0P1wffmiMI6bUYn6qhz3w7DRUhglfPAt1bCt78FYTVHCrxzcwKs7Tmsan-Gity9_XMm-Le4b_277ycCAxdB_ECGgFglWsleikuMD0l3Fn364nx3n1Lqw3e75gE8aG-1bK2XfKBG7B0teQeI2mK6SV" frameborder="0" scrolling="auto" allowfullscreen></iframe>    
    </div>
  </div>
</div>
<?php
get_footer();