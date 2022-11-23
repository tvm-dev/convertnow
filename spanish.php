<!doctype html>
<html lang="es">
  <head>
      <!-- Favicons -->
      <link rel="icon" type="image/png" href="logo.png"/> 
      
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- tvm SEO-->
        <title>Convert Now: convertidor de texto</title>
        <meta name="description" content="Sitio web para convertir texto, convertir mayúsculas a minúsculas, convertir todo a mayúsculas, eliminar espacios entre palabras, herramienta de texto, convertidor">
        <meta name="robots" content="all">
        <meta name="author" content="Thiago Viana">
        <meta name="keywords" content="convertir la letra a mayúscula, cambiar la fuente a minúscula, eliminar el espacio de la oración, cambiar todo a minúsculas, a mayúsculas, poner en mayúscula la primera letra de cada palabra, convertir textos en línea">

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
       <h2 class="d-flex justify-content-center">¿Escribió todo lo que necesitaba, pero se dio cuenta de que accidentalmente dejó activado el BLOQ MAYÚS y no quiere volver a escribirlo todo? sin problema:</h2>
    
       <p class="lead text-center">Simplemente pegue su texto en el cuadro de abajo y elija cómo desea <strong>convertirlo</strong>. ¡Hay varias opciones!</p>

        <!--Ad-->
        <?php include_once 'ad.php'; ?>
        <!--End ad-->

  
    
        <textarea class="form-control" rows="10" id="content" placeholder="Escriba o pegue su texto aquí" onkeyup="counterAll(this);" autofocus></textarea>
        <span class="text-muted pull-left" id="countChar"></span>
        <span class="text-muted pull-left" id="countWords"></span>
        <span class="text-muted pull-left" id="countLines"></span>
    
        <p id="copied"></p>

    
    <!--Buttons-->
    <div class="form-control text-center">
    <button onclick="Sentence()" type="button" class="btn btn-primary mb-1 btn-sm">Primera capital</button>
    <button onclick="Lower()" type="button" class="btn btn-secondary mb-1 btn-sm">todo en minúsculas</button>
    <button onclick="Upper()" type="button" class="btn btn-success mb-1 btn-sm">TODAS LAS CAPITALES</button>
    <button onclick="capitalizedCase()" type="button" class="btn btn-danger mb-1 btn-sm">Primeras Capitales</button>
    <button onclick="inverseCase()" type="button" class="btn btn-warning mb-1 btn-sm">Marcha atrás</button>
    <button onclick="reverseWord()" type="button" class="btn btn-info mb-1 btn-sm">Invertir palabra</button>
    <button onclick="spaceLetters()" type="button" class="btn btn-outline-primary mb-1 btn-sm">Espacios Entre</button>
    <button onclick="removeSpaces()" type="button" class="btn btn-outline-secondary mb-1 btn-sm">Eliminar Espacios</button>
    <button onclick="commaSpace()" type="button" class="btn btn-outline-success mb-1 btn-sm">Espacios con , </button>
    <button onclick="downloadText(content.value,'ConvertCase ++.txt')" type="button" class="btn btn-outline-danger mb-1 btn-sm">Descargar contenido</button>
    <button onclick="copyToClipboard()" type="button" class="btn btn-outline-dark mb-1 btn-sm">Copiar a la memoria</button>
    <button onclick="Clean()" type="button" class="btn btn-dark mb-1 btn-sm">Limpiar</button>
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
<img src="es.band.png" alt="Logo Convert Now" height="30" width="30" id="flags">
Bienvenid@ a la herramienta Convert Now</p>

<div class="alert alert-primary role="alert">
 <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
  
 Primera letra mayúscula:
  
  </h4>
  <p class="text-justify mb-1">
  Esta opción toma todo su texto, que escribió o pegó, y convierte solo la primera letra a mayúscula, es decir, a mayúscula. Luego, convierte el resto del texto en minúsculas. Vea un ejemplo a continuación:
  <br><br>
<p class="form-control text-center">margarita -> Margarita</p>

</div>

<!-- Lower Case -->
<div class="alert alert-secondary role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  todo en minúsculas:
   
   </h4>
   <p class="text-justify mb-1">
   ¡Esta opción toma todo lo que se escribió o pegó y lo convierte en minúsculas! Vea un ejemplo a continuación:
  
   <br><br>
 <b class="form-control text-center">MargaritA aMA la comida mexicana -> margarita ama la comida mexicana</b>
 </p>
 </div>

<!--  UPPER CASE-->
<div class="alert alert-success role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  TODO EN MAYÚSCULAS:
   
   </h4>
   <p class="text-justify mb-1">
   ¡Esta opción toma todo en el cuadro de texto y lo transforma en MAYÚSCULAS! Vea un ejemplo a continuación:
   <br><br>
 <b class="form-control text-center"> Madrid es UNA ciudad hermosa y hospitalaria -> MADRID ES UNA CIUDAD HERMOSA Y HOSPITALARIA </b>
 </p>
 </div>
<!-- Capitalized Case-->
<div class="alert alert-danger role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  Primera letra mayúscula de cada palabra:
   
   </h4>
   <p class="text-justify mb-1">
   El convertidor de mayúsculas convertirá automáticamente la letra inicial de cada palabra a mayúscula y hará que las letras restantes sean minúsculas. Simplemente copie el contenido que le gustaría generar en este formato, luego péguelo en el formulario en el cuadro de arriba y seleccione la pestaña Cuadro en mayúscula. Vea un ejemplo a continuación: <br><br>
 <b class="form-control text-center"> Hay 21 países en el mundo que hablan español -> Hay 21 Países En El Mundo Que Hablan Español</b>
 </p>
 </div>
<!-- InVeRsE CaSe-->
<div class="alert alert-warning role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  Invierta todas las letras:
   
   </h4>
   <p class="text-justify mb-1">
   Esta opción invierte cada letra escrita a su opuesto. La letra mayúscula se convierte en minúscula y viceversa. Simplemente copie el contenido que le gustaría generar en este formato, luego péguelo en el formulario y haga clic para ver cómo sucede la magia. Vea un ejemplo a continuación:<br><br>
 <b class="form-control text-center"> Amo argentina y peRU  -> aMO ARGENTINA Y PEru </b>
 </p>
 </div>
<!-- Reverse Word-->
<div class="alert alert-info role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  Palabra inversa:
   
   </h4>
   <p class="text-justify mb-1">
   Esta opción invierte la palabra escrita. Es como si la palabra se girara 180 grados. Vea un ejemplo a continuación:<br><br>
 <b class="form-control text-center"> USA -> ASU (prueba con tu nombre, ¡es divertido!) </b>
 </p>
 </div>
<!-- Character Spacing-->
<div class="alert alert-primary role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  Espacio entre letras:
   
   </h4>
   <p class="text-justify mb-1">
   Esta opción coloca un espacio entre cada letra del texto mecanografiado y no coloca comas entre esos espacios. Vea un ejemplo a continuación:<br><br>
 <b class="form-control text-center">   Congresista  -> C o n g r e s i s t a  </b>
 </p>
 </div>
<!-- Remove spaces-->

<div class="alert alert-light role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
  Eliminar espacios:
   
   </h4>
   <p class="text-justify mb-1">
   Utilice este botón para eliminar cualquier espacio existente entre palabras o frases, dejando el texto completamente unido. Vea un ejemplo a continuación:<br><br>
 <b class="form-control text-center"> Un taco es un platillo tradicional mexicano -> Untacoesunplatillotradicionalmexicano </b>
 </p>
 </div>


<!-- Comma Space-->
<div class="alert alert-success role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    
  Ponga comas en espacios y elimínelas
   </h4>
   <p class="text-justify mb-1">
   Este botón coloca una coma entre cada palabra o frase e incluso elimina los espacios entre palabras o frases. Vea un ejemplo a continuación:<br><br>
 <b class="form-control text-center"> M edellí  n => M,e,d,e,l,l,í,n </b>
 </p>
 </div><center>
 ¿Tiene alguna pregunta sobre el sitio o desea informar una falla?<a href="contact.php">Haga clic aquí</a></center>
 </div>

<!-- Download Text-->
<!-- Copy to Clipboard-->
<!-- Clean-->
<?php include_once 'footer.php';  ?>