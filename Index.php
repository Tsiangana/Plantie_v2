<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body{
            background-color: #fff;
            position: absolute;
            top: 0;F
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#f4f4f4,#fff);
        }

        .alifrutas img{
          width: 300px;
          margin-top: 10px;
          margin-left: 20px;
        }

        .alifrutas{
          text-align: center;
        }

        .alifrutas p{
          padding: 5px 34px;
          color: #9a9494f5;
        }

        .alifrutas h3{
          font-family: 'Franklin Gothic Medium';
        }

    </style>
</head>
<body>

    <!-- inicio da barra de navegacao-->

    <nav class="navbar navbar-inverse" style="padding: 20px 60px; background: none;border: none;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cultitchowa</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" style="margin-left: 33%;">
              <li><a href="inicio.php" style="color: black;">Início</a></li>
              <li><a href="pesquisa.php"  style="color: black;">Pesquisa</a></li>
              <li><a href="informacoes.php"  style="color: black;">Informações</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php"><button class="btn btn-default" style="padding: 10px 45px; border-radius: 15px;background: rgb(122, 233, 122);color: #fff;border: none;">Login</button></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- fim da barra de navegacao-->

      <!-- Inicio do primeiro template -->

        <div class="template1">
            <div class="container">
                <div class="row">
                  <div class="col-md-7" style="padding-top: 40px; padding-left: 45px;">
                      <h1 style="font-size: 50px;font-family: 'Franklin Gothic Medium';">
                         Venha connosco aprender a cultivar diversos bens alimentares
                         <span class="glyphicon glyphicon-grain"></span></h1>
                         <h5 style="margin-top: 25px; font-family: 'Times New Roman', Times, serif; font-size: 16px;">
                            <span class="glyphicon glyphicon-send"></span>
                             Aqui voce encontra algumas dicas acerca da agricultura
                             do nosso pais. <br>
                             Voce já se perguntou para você mesmo se sabes plantar mandioca.
                         </h5>
                         <div style="margin-top:55px;">
                            <button class="btn btn-default" style="padding: 10px 60px; border-radius: 15px;background: rgb(122, 233, 122);border: none;"><a href="informacoes.html" style="color: #fff;">Junte-se a nós</a></button>
                            <!--<button class="btn btn-default" style="padding: 10px 60px;background: none; border: none;"><a href="pesquisa.html" style="color: cyan;">Veja como funciona <span class="glyphicon glyphicon-arrow"></span></a></button>-->
                         </div>
                  </div>
                  <div class="col-md-5">
                    <img src="img/planta1.png" alt="planat" width="430px" style="margin-left: 50px;">
                  </div>
                </div>
            </div>
        </div>

      <!-- fim do primeiro template -->

      <!-- inicio do segundo template -->

      <div class="row" style="width:80%; padding-left: 75%;margin: 0px auto;">
        <img src="img/bolinha.png" alt="bolinhas" style="width: 80px;">
      </div> 

      <div class="row" style="width: 50%; text-align: center; margin: 0px auto;">
        <h2  style="font-family: 'Franklin Gothic Medium';">Dicas que deverias saber antes de cultivares</h2>
        <h4 style="color: #b8b3b3c1;">Siga a página para mais instruções</h4>
      </div>

      <!-- fim do segundo template -->

      <!-- inicio do terceiro template -->

      <div class="row alifrutas" style="width: 80%;margin: 0px auto;">
        <div class="col-md-4">
          <img src="img/mandioca.png" alt="mandioca">
          <h3>Mandioca</h3>
          <div class="row">
            <p>A mandioca é um dos alimentos mais consumidos em Angola
              e você ja pensou em como ela é cultivada.</p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="img/Figura-Milho-PNG.png" alt="milho">
          <h3>Milho</h3>
          <div class="row">
            <p>Milho é vegetal da família dos gramineas, com caule reto e folhas
              lanceoladas, cultivada pelos seus graus e para foragem.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="img/Jinguba1.png" alt="jinguba">
          <h3>Jinguba</h3>
          <div class="row">
            <p>A jinguba é famosa em Angola por causa da produção de Kitaba muito 
              utilizada na alimentação local, como casos de Muamba de Jinguba.
            </p>
          </div>
        </div>
      </div>
      
      <!-- fim do terceiro template -->

      <!-- inicio do quarto template -->

      <div class="container" style="padding-top: 60px;">
          <div class="row col-md-6" style="padding-top: 40px;">
            <img src="img/sacodemilho.png" alt="saco de milho" style="width: 600px;">
          </div>
          <div class="row col-md-6" style="padding-top: 60px;padding-left: 100px;">
            <h1 style="padding-bottom: 60px;font-family: 'Franklin Gothic Medium';">Faça a sua zona de cultivo <br>um lugar nutricional</h1>

            <p style="color: #9a9494f5;"><span class="glyphicon glyphicon-ok-circle" style="color: rgb(70, 208, 70);"></span> Com o milho pode se fazer a famosa fuba de milho, utilizada no funge</p>
            <p style="color: #9a9494f5;"><span class="glyphicon glyphicon-ok-circle" style="color: rgb(70, 208, 70);"></span> Uma boa pipoca salgada ou doce</p>
            <p style="color: #9a9494f5;"><span class="glyphicon glyphicon-ok-circle" style="color: rgb(70, 208, 70);"></span> Ou numa boa feijoada pode se utilizar o milho doce. Tipico prato estrangeiro
              muito usada ca.
            </p>

        </div>
      </div>
      
      <!-- fim do quarto template -->

      <!-- inicio do quinto template -->

      <div class="container" style="padding-top: 60px;margin-top: 30px;">
        <div class="row col-md-6" style="padding-top: 30px;padding-left: 70px;">

          <h1 style="padding-bottom: 40px;font-family: 'Franklin Gothic Medium';">Venha apreender <br>a cultivar conosco...</h1>
          <p style="color: #9a9494f5;"> Apreender a cultivar não é tarefa difícil, apenas necessitas dos <br>
             conhecimentos necessários podes adiquirir cá no site <br>
             podes pesquisar o que quiseres porque cá tem de quase tudo.
          </p>
          <button class="btn btn-default" style="padding: 10px 5px;background: none; border: none;"><a href="vejamais.html" style="color: cyan;">Ver mais...</a></button>              
        </div>
        <div class="row col-md-6" style="padding-top: 30px;padding-left: 100px;">

          <img src="img/tomate-no-pote.png" alt="saco de milho" style="width: 400px;">
          <h3 style="font-family: Arial, Helvetica, sans-serif; color: rgb(122, 233, 122);margin-bottom: 15px;"><span class="glyphicon glyphicon-leaf"></span> Tomates</h3>
          <p style="color: #9a9494f5;"> O tomateiro é um alimento típico de Angola muito famoso <br>
          de bom uso na cuzinha </p>
      </div>
    </div>

      <!-- fim do quinto template -->

      <!-- inicio do sexto template -->

      <div class="container" style="padding-top: 60px; padding-left: 50px;" >
        <div class="row col-md-6" style="padding-top: 40px;">
          <img src="img/bananeira.png" alt="bananeira" style="width: 400px;">
          <h3 style="font-family: Arial, Helvetica, sans-serif; color: rgb(122, 233, 122);margin-bottom: 15px;"><span class="glyphicon glyphicon-leaf"></span> Bananeira</h3>
          <p style="color: #9a9494f5;"> A bananeira é simples e fácil de ser plantada<br>pesquise como se planta cá</p>
        </div>
        <div class="row col-md-6" style="padding-top: 130px;padding-left: 100px;">
          <h1 style="padding-bottom: 40px;font-family: 'Franklin Gothic Medium';">Veja um video para <br>mais informações</h1>
          <p style="color: #9a9494f5;margin-bottom: 50px;">Neste video voce verá como uma bananeira é na vida <br>
            real, como é cultivada e quidada ao longo do tempo
          </p>
          <button class="btn btn-default" style="padding: 10px 60px; border-radius: 15px;background: none;border: 1px solid rgb(122, 233, 122);color: rgb(122, 233, 122);"><span class="glyphicon glyphicon-play"></span><a href="assistier.html" style="color: rgb(122, 233, 122);"> Assistir Agora</a></button>

      </div>
    </div>
    
    <!-- fim do sexto template -->

    <!-- inicio do setinmo template -->

   <div class="container" style="height: 480px;margin-top: 80px;border-radius: 40px;background: rgb(30, 62, 30);background-image: url('img/fundoplanta.png');">
      <div class="col-md-6" style="padding-left: 80px;padding-top: 55px;">
        <h1 style="padding-bottom: 25px;font-family: 'Franklin Gothic Medium'; color: #fff;">O que estamos fazendo<br>na plantação</h1>
          <p style="color: #cfc9c9f5;margin-bottom: 50px; font-size: 16px;">plantar vegetais é possivel<br>
             em menos de  6 horas  <br>
             na luz solar direita por dia. Existem alguns vegetais <br>
             (pricipalmente os folhosos) que toleram  <br>
            um pouco de sombra.
          </p>
          <div style="text-align: right;"><button class="btn btn-default" style="padding: 15px 40px; border-radius: 15px;background: rgb(60, 210, 60);color: #fff;border: none;margin-right: 50px;margin-top: -15px;">proofment</button>
          </div>
      </div>
      <div class="col-md-6">
      <img src="img/altino.png" alt="altino" width="500px" style="margin-top: -188px;"></div>
    </div>

    <!-- fim do setimo template -->
    

    <!-- inicio do oitavo template -->

    <div class="container" style="margin-top: 70px;">
      <div class="row" style="width: 50%; text-align: center; margin: 0px auto;">
        <h2  style="font-family: 'Franklin Gothic Medium';">Patrocinadores com quem trabalhamos</h2>
        <h4 style="color: #888585;">Siga as instruçoes para mais</h4>
      </div>
      <img src="img/patrocinadores.png" alt="patrocinadores">
    </div>

    

    <!-- fim do oitavo template -->

     <!-- footer  -->

      <footer style="width: 100%;height: 350px;background: #eee9e9c1; margin-top: 80px;padding-top: 70px;">
        <div class="container" style="height: 160px;">
          <div class="col-md-3">
            <a class="navbar-brand" href="#">LogoAltino</a>
            <br><br><br>
            <p style="color: #c6c0c0f5;">Copyright @2022 Altinoprojecty <br>
            All rigts reserved</p>
          </div>
          <div class="col-md-2">
            <h3 style="font-family: 'Franklin Gothic Medium';">Localização</h3><br>
            <p style="color: #c6c0c0f5;">Cabinda-Angola<br><br>
            Tando-zinzi</p>
          </div>
          <div class="col-md-2">
            <h3 style="font-family: 'Franklin Gothic Medium';">Ajuda</h3><br>
            <p style="color: #c6c0c0f5;">Sobre nós<br><br>
            Ajuda <br><br>Serviço <br><br>Privacidade</p>
          </div>
          <div class="col-md-2">
            <h3 style="font-family: 'Franklin Gothic Medium';">Resource</h3><br>
            <p style="color: #c6c0c0f5;">Pricing Feature<br><br>
            Server status <br><br>Carers</p></div>
          <div class="col-md-2">
            <h3 style="font-family: 'Franklin Gothic Medium';">Contacte-nos</h3><br>
            <p style="color: #c6c0c0f5;">Tutorial<br><br>
            suporte<br><span class="glyphicon glyphicon-facebook" style="color: rgb(127, 132, 127);"></span></p></div>
          </div>
        </div>
      </footer>

      <!-- footer -->
      
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <script src="bootstrap/js/bootstrap.min.js"></script>
      </body>
      </html>