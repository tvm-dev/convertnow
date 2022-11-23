<!doctype html>
<html lang="pt-br">
  <head>
     <!-- Favicons -->
     <link rel="icon" type="image/png" href="logo.png"/> 
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- tvm SEO-->
       <title>Convert Now: Conversor de textos</title>
        <meta name="description" content="Site para converter textos, converter letra maiúsculas em minúsculas, converter tudo para maiúsculas, remover espaços entre palavras, ferramenta de texto, conversor">
        <meta name="robots" content="all">
        <meta name="author" content="Thiago Viana">
        <meta name="keywords" content="converter letra para maiusculas, mudar fonte para minusculas, remover espaco da frase, mudar tudo para minusculas, para letras para maisculas, colocar primeira letra de cada palavra em maiusculas, converter textos online">

        <meta property="og:type" content="page">
        <meta property="og:url" content="">
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:description" content="">

        <meta property="article:author" content="">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@">
        <meta name="twitter:title" content="">
        <meta name="twitter:creator" content="@">
        <meta name="twitter:description" content="">


  <!-- tvm end SEO-->
  

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- tvm styles -->
     <link href="navbar-top.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    
    <?php require_once 'menu.php'; ?>
   
 
  
  </head>


<main class="container-fluid">
  <div class="bg-light p-3 rounded">
       <h2 class="d-flex justify-content-center">Digitou tudo que precisava mas percebeu que deixou o CAPS LOCK ativado acidentalmente e não quer digitar tudo de novo? sem problema:</h2>
    
       <p class="lead text-center">Simplesmente cole seu texto na caixa abaixo e escolha como deseja convertê-lo.</p>

        <!--Ad-->
        <?php include_once 'ad.php'; ?>
        <!--End ad-->

  
    
        <textarea class="form-control" rows="10" id="content" placeholder="Digite ou cole seu texto aqui" onkeyup="counterAll(this);" autofocus></textarea>
        <span class="text-muted pull-left" id="countChar"></span>
        <span class="text-muted pull-left" id="countWords"></span>
        <span class="text-muted pull-left" id="countLines"></span>
    
        <p id="copied"></p>

    
    <!--Buttons-->
    <div class="form-control text-center">
    <button onclick="Sentence()" type="button" class="btn btn-primary mb-1 btn-sm">Primeira maiúscula</button>
    <button onclick="Lower()" type="button" class="btn btn-secondary mb-1 btn-sm">todas minúsculas </button>
    <button onclick="Upper()" type="button" class="btn btn-success mb-1 btn-sm">TODAS MAIÚSCULAS</button>
    <button onclick="capitalizedCase()" type="button" class="btn btn-danger mb-1 btn-sm">Primeiras Maiúsculas</button>
    <button onclick="inverseCase()" type="button" class="btn btn-warning mb-1 btn-sm">InVeRtEr</button>
    <button onclick="reverseWord()" type="button" class="btn btn-info mb-1 btn-sm">Inverter Palavra</button>
    <button onclick="spaceLetters()" type="button" class="btn btn-outline-primary mb-1 btn-sm">Espaços entre</button>
    <button onclick="removeSpaces()" type="button" class="btn btn-outline-secondary mb-1 btn-sm">Remove Espaços</button>
    <button onclick="commaSpace()" type="button" class="btn btn-outline-success mb-1 btn-sm">Espaço com , </button>
    <button onclick="downloadText(content.value,'ConvertCase ++.txt')" type="button" class="btn btn-outline-danger mb-1 btn-sm">Baixar Conteúdo</button>
    <button onclick="copyToClipboard()" type="button" class="btn btn-outline-dark mb-1 btn-sm">Copiar para memória</button>
    <button onclick="Clean()" type="button" class="btn btn-dark mb-1 btn-sm">Limpar</button>
    <!--end buttons-->

     

    <!--Ad-->
    <?php include_once 'ad2.php'; ?>
    <?php include_once 'ad3.php'; ?>
        <!--End ad-->

      </div>
    </div>
  
</main>
<br>

<!--start infos-->

<!-- Sentense Case-->
<div class="container-fluid">
<p class="h3 text-center alert alert-info">
<img src="br.band.png" alt="Logo Convert Now" height="30" width="30" id="flags">
Bem-vind@ à ferramenta Convert Now</p>

<div class="alert alert-primary role="alert">
 <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
  
  Primeira maiúscula :
  
  </h4>
  <p class="text-justify mb-1">
  Esta opção pega todo seu texto, que você digitou ou colou, e converte somente a primeira letra dele para caixa alta, ou seja, para letra Maiúscula. Em seguida, transforma o resto do texto em minúsculas. Veja um exemplo abaixo:
  <br><br>
<p class="form-control text-center">Maria DA SILva -> Maria da silva</p>

</div>

<!-- Lower Case -->
<div class="alert alert-secondary role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    todas minúsculas:
   
   </h4>
   <p class="text-justify mb-1">
    Está opção pega tudo que foi digitado ou colado e transforma em letras minúsculas! Veja um exemplo abaixo:
  
   <br><br>
 <b class="form-control text-center">Maria É GENTE fInA -> maria é gente fina</b>
 </p>
 </div>

<!--  UPPER CASE-->
<div class="alert alert-success role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
   TODAS EM MAIÚSCULAS:
   
   </h4>
   <p class="text-justify mb-1">
  Está opção pega tudo que está na caixa de texto e transforma em letras MAIÚSCULAS! Veja um exemplo abaixo:
   .<br><br>
 <b class="form-control text-center"> João É FLAmenGuista -> JOÃO É FLAMENGUISTA </b>
 </p>
 </div>
<!-- Capitalized Case-->
<div class="alert alert-danger role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
   Primeira Letra Maiúscula De Cada Palavra:
   
   </h4>
   <p class="text-justify mb-1">
   O conversor de maiúsculas converterá automaticamente a letra inicial de cada palavra em maiúscula e deixará as letras restantes em minúsculas. Simplesmente copie o conteúdo que você gostaria de gerar neste formato, então cole no formulário da caixa acima e selecione a guia Caixa em maiúscula. Veja um exemplo abaixo: <br><br>
 <b class="form-control text-center">ESTADOS unidos e franÇa -> Estados Unidos E França</b>
 </p>
 </div>
<!-- InVeRsE CaSe-->
<div class="alert alert-warning role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Inverter Todas letras:
   
   </h4>
   <p class="text-justify mb-1">
   Esta opção inverte cada letra digitada para seu oposto. A letra maiúscula torna-se minúscula e vice-versa. Simplesmente copie o conteúdo que você gostaria de gerar neste formato, então cole no formulário e clique para ver a mágica acontecer. Veja um exemplo abaixo:<br><br>
 <b class="form-control text-center"> Eu amo o Brasil  -> EU AMO O bRASIL</b>
 </p>
 </div>
<!-- Reverse Word-->
<div class="alert alert-info role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Inverter Palavra:
   
   </h4>
   <p class="text-justify mb-1">
   Esta opção inverte a palavra digitada. É como se a palavra fosse girada 180 graus. Veja um exemplo abaixo:<br><br>
 <b class="form-control text-center"> Brasil -> lisarB (teste com seu nome, é divertido!) </b>
 </p>
 </div>
<!-- Character Spacing-->
<div class="alert alert-primary role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Espaço entre Letras:
   
   </h4>
   <p class="text-justify mb-1">
   Esta opção coloca um espaço entre cada letra do texto digitado, e não coloca vírgulas entre esses espaços. Veja um exemplo abaixo:<br><br>
 <b class="form-control text-center"> Deputado Federal -> D e p u t a d o   F e d e r a l  </b>
 </p>
 </div>
<!-- Remove spaces-->

<div class="alert alert-light role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Remove espaços:
   
   </h4>
   <p class="text-justify mb-1">
   Use este botão para remover todos os espaçamento existentes entre palavras ou frases - deixando o texto totalmente junto. Veja um exemplo abaixo:<br><br>
 <b class="form-control text-center"> Eu moro na zona Sul       de SP -> EumoronazonaSuldeSP </b>
 </p>
 </div>


<!-- Comma Space-->
<div class="alert alert-success role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
   Colocar vírgula nos espaços e removê-los
   
   </h4>
   <p class="text-justify mb-1">
   Este botão coloca uma vírgula entre cada palavra ou frase e até remove qualquer espaço entre palavras ou frases. Veja um exemplo abaixo:<br><br>
 <b class="form-control text-center"> A  ustrali a => A,u,s,t,r,a,l,i,a </b>
 </p>
 </div>
 <center>Ficou com alguma dúvida sobre o site ou quer informar alguma falha? <a href="contact.php">Clique aqui!</a></center>
 </div>

<!-- Download Text-->
<!-- Copy to Clipboard-->
<!-- Clean-->
<?php include_once 'footer.php';  ?>