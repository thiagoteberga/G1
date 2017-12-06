<?php
  include_once('db/conexao.php');
  include_once ('classes/inscricao.php');

function getIp()
{
 
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
 
        $ip = $_SERVER['HTTP_CLIENT_IP'];
 
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
 
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    }
    else{
 
        $ip = $_SERVER['REMOTE_ADDR'];
 
    }
 
    return $ip;
 
}
  date_default_timezone_set('America/Sao_Paulo');

  //Sempre serão preenchidos
  $tppessoa = $_POST['tppessoa'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $ip = getIp(); //getenv("REMOTE_ADDR");
  $data = date('Y-m-d H:i:s');

   //Campos Opcionais
   if(isset($_POST['empresa'])) {
      $empresa = $_POST['empresa'];
   } else {
      $empresa = '';
   }

   if(isset($_POST['areatuacao'])) {
      $segmento = $_POST['areatuacao'];
   } else {
      $segmento = '';
   }

  $iinscricao = new inscricao($nome, $email, $tppessoa, $empresa, $segmento, $ip, $data);

  try{
    
    $ins=$pdo->prepare("insert into inscritos(INS_NOME, INS_EMAIL, INS_IP, INS_DATA, INS_EMPRESA, INS_SEGMENTO, INS_TPPESSOA)   values(:nome,:email,:ip,:data,:empresa,:segmento,:tppessoa)");
  
    $ins->bindValue(':nome',$iinscricao->nome);
    $ins->bindValue(':email',$iinscricao->email);
    $ins->bindValue(':tppessoa',$iinscricao->tppessoa);
    $ins->bindValue(':empresa',$iinscricao->empresa);
    $ins->bindValue(':segmento',$iinscricao->segmento);
    $ins->bindValue(':ip',$iinscricao->ip);
    $ins->bindValue(':data',$iinscricao->data);
    $ins->execute();

    $mensagem = 'Olá '.$nome.','."\n"."\n";
    $mensagem .= 'Obrigado por se cadastrar na Iglu Business!'."\n";
    $mensagem .= 'Para você, que ainda não é um empresário ou que deseja se apronfundar nos primeiros passos no mundo da gestão, segue um livro referência no assunto:'."\n";
    $mensagem .= 'https://www.iglubusiness.com/pdf/Business-Model-Generation.pdf'."\n";

    $mensagem .= "\n".'Esta é uma mensagem automática, por favor não responda esse email.'."\n";
    $mensagem .= 'Qualquer dúvida, por favor entrar em contato pelo email: contato@iglubusiness.com.'."\n"."\n";
    $mensagem .= 'Atenciosamente,'."\n";
    $mensagem .= 'Equipe Iglu Business'."\n";

    // enviar o email
    mail( $email, 'Iglu Business - Obrigado pelo Registro', $mensagem );

echo <<<HTML
<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>iGLU Business - Sucesso</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/android-desktop.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">

  <link rel="shortcut icon" href="images/favicon.png">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp; lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">
  <link rel="stylesheet" href="css/styles_fail.css">

<style>
  .botao{
    float:right
  }

  #logar{
    width: 100%;
  }

  .texto{
    width: 100%;
  }

  #show-dialog{
    color: #696969;
  }

  .mdl-dialog {
    border: none;
    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
    width: 480px;
  }

  a {
      color: #696969;
      font-weight: 500;
      text-decoration:none; 
  }

  .grey {
      color: #696969;
      font-weight: 300;
      text-decoration:none; 
  }

  .demo-blog .demo-blog__posts {
    max-width: 750px !important;
  }

  .logo-linkedin{
      height: 100px;
      width: 100px;
  }

  .logo-fluig{
      height: 100px;
      width: 100px;
  }

</style>
</head>

<body>
  <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="mdl-layout__content">
      <div class="demo-blog__posts mdl-grid">

        <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col mdl-shadow--2dp">
          <!-- <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div> -->

          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="entry.html">Obrigado!</a></h3>
          </div>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
              <span class="grey">Sua inscrição foi realizada com <strong>sucesso!</strong></span>
            </div>
          </div>

          <hr>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col">
              <br>
            <span class="grey">Aproveite e siga a página da <strong>TOTVS no Linkedin</strong>. Basta clicar em cima do icone ao lado:</span> <br>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <a href="https://pt.linkedin.com/company/totvs" target="_blank"> <img class="logo-linkedin" src="images/linkedin.svg" alt="Logo do Linkedin" /> </a>
            </div>
          </div>
                  
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col">
            <br>
            <span class="grey">Conheça mais sobre o <strong>Fluig</strong>, o principal produto da TOTVS. Clique em cima do icone ao lado:</span> <br>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <a href="https://pt.linkedin.com/company/totvs" target="_blank"> <img class="logo-fluig" src="images/fluig.svg" alt="Logo do Linkedin" /> </a>
            </div>
           </div>
          <hr>          
          <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <i class="material-icons">info_outline</i>
            <nav class="demo-nav mdl-cell mdl-cell--12-col">
              <a href="index.html" type="button" class="demo-nav__button" style="text-align: justify;">
                <b>Clique aqui</b> para voltar ao site.
              </a>
            </nav>
          </div>
        </div>
      </div>
    </main>
    <div class="mdl-layout__obfuscator"></div>
  </div>

  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>

HTML;
    
  } catch(PDOException $e) {

echo <<<HTML
<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>iGLU Business - Falha</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/android-desktop.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">

  <link rel="shortcut icon" href="images/favicon.png">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp; lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">
  <link rel="stylesheet" href="css/styles_fail.css">

<style>
  .botao{
    float:right
  }

  #logar{
    width: 100%;
  }

  .texto{
    width: 100%;
  }

  #show-dialog{
    color: #696969;
  }

  .mdl-dialog {
    border: none;
    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
    width: 480px;
  }

  a {
      color: #696969;
      font-weight: 500;
      text-decoration:none; 
  }

  .grey {
      color: #696969;
      font-weight: 300;
      text-decoration:none; 
  }

  .demo-blog .demo-blog__posts {
    max-width: 750px !important;
  }

  .logo-linkedin{
      height: 100px;
      width: 100px;
  }

  .logo-fluig{
      height: 100px;
      width: 100px;
  }

</style>
</head>

<body>
  <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="mdl-layout__content">
      <div class="demo-blog__posts mdl-grid">

        <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col mdl-shadow--2dp">
          <!-- <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div> -->

          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="entry.html">Ops, algo deu errado!</a></h3>
          </div>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col" style="text-align: center;">
              <span class="grey"><strong>Desculpe</strong>, infelizmente houve um problema durante a inscrição.</span>
              <br>
              <span class="grey"><strong>Erro: </strong>
HTML;

$e->getMessage();

echo <<<HTML
              </span>
              <i class="material-icons" style="font-size: 150px; color: #247dca;">sentiment_very_dissatisfied</i>
            </div>
          </div>

          <hr>
        
          <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <i class="material-icons">info_outline</i>
            <nav class="demo-nav mdl-cell mdl-cell--12-col">
              <a href="index.html" type="button" class="demo-nav__button" style="text-align: justify;">
                <b>Clique aqui</b> para tentar novamente.
              </a>
            </nav>
          </div>
        </div>
      </div>
    </main>
    <div class="mdl-layout__obfuscator"></div>
  </div>

  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>
HTML;
  }

?>