<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Welcome to Convert Now</title>
  

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
    <title>Convert Now in English:  Welcome :)</title>
    <!-- Favicons -->
  <link rel="shortcut icon" type="image/png" href="logo.png"/>
  <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
  </head>
  <body>


<main class="container-fluid">
  <div class="bg-light p-3 rounded">
       <h2 class=".text-wrap fw-bold">Accidentally left the caps lock on and typed something, but can't be bothered to start again and retype it all?</h2>
    
       <p class="lead text-center">Simply: enter your text and choose the case you want to convert it to.</p>

        <!--Ads 01-->
        <!-- here-->
        <!--End ads01-->

  
    
        <textarea class="form-control" rows="10" id="content" placeholder="Type ou past your content here" onkeyup="counterAll(this);" autofocus></textarea>
        <span class="text-muted pull-left" id="countChar"></span>
        <span class="text-muted pull-left" id="countWords"></span>
        <span class="text-muted pull-left" id="countLines"></span>
    
        <p id="copied"></p>

    
    <!--Buttons-->
    <div class="form-control text-center">
    <button onclick="Sentence()" type="button" class="btn btn-primary mb-1 btn-sm">Sentence case</button>
    <button onclick="Lower()" type="button" class="btn btn-secondary mb-1 btn-sm">lower case</button>
    <button onclick="Upper()" type="button" class="btn btn-success mb-1 btn-sm">UPPER CASE</button>
    <button onclick="capitalizedCase()" type="button" class="btn btn-danger mb-1 btn-sm">Capitalized Case</button>
    <button onclick="inverseCase()" type="button" class="btn btn-warning mb-1 btn-sm">InVeRsE CaSe</button>
    <button onclick="reverseWord()" type="button" class="btn btn-info mb-1 btn-sm">Reverse Word</button>
    <button onclick="spaceLetters()" type="button" class="btn btn-outline-primary mb-1 btn-sm">Character Spacing</button>
    <button onclick="removeSpaces()" type="button" class="btn btn-outline-secondary mb-1 btn-sm">Remove Spaces</button>
    <button onclick="commaSpace()" type="button" class="btn btn-outline-success mb-1 btn-sm">Comma Space</button>
    <button onclick="downloadText(content.value,'ConvertCase ++.txt')" type="button" class="btn btn-outline-danger mb-1 btn-sm">Download Text</button>
    <button onclick="copyToClipboard()" type="button" class="btn btn-outline-dark mb-1 btn-sm">Copy to Clipboard</button>
    <button onclick="Clean()" type="button" class="btn btn-dark mb-1 btn-sm">Clean</button>
    <!--end buttons-->

     

    <!--Ads 02-->
    <!--End ads02-->

      </div>
    </div>
  
</main>
<br>

<!--start infos-->

<!-- Sentense Case-->
<div class="container-fluid">
<p class="h3 text-center alert alert-info">Welcome to the [Convert Case ++] Text Generator Tool</p>

<div class="alert alert-primary role="alert">
 <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
  
  Sentense Case:
  
  </h4>
  <p class="text-justify mb-1">
  The sentence case converter will allow you to paste any text you’d like, and it will automatically transform it to a fully formed structured sentence.
  It works by capitalizing the very first letter in each sentence, and will then go on to transform the rest of the text into lowercase as well as converting i’s into I’s. Every letter after a full stop will get converted into an upper case letter.
  Note: it won’t, however, capitalize names or places.<br><br>
<p class="form-control text-center">This is an example of sentence case.</p>

</div>

<!-- Lower Case -->
<div class="alert alert-secondary role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Lower Case:
   
   </h4>
   <p class="text-justify mb-1">
  If you are wondering how to uncapitalize text, this is exactly what the lower case text converter will allow you to do - it transforms all the letters in your text into lowercase letters. Simply copy the text that you need generating into lower case and paste the text into the box above and select the ‘lower case’ tab.<br><br>
 <b class="form-control text-center">this is an example of lower case.</b>
 </p>
 </div>

<!--  UPPER CASE-->
<div class="alert alert-success role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    UPPER CASE:
   
   </h4>
   <p class="text-justify mb-1">
  The upper case transformer will take any text that you have and will generate all the letters into upper case ones. It will essentially make all lower case letters into CAPITALS (as well as keep upper case letters as upper case letters).

  To do this, you simply have to select the text that you need changing and pasting into the box above and then select the UPPER CASE tab.<br><br>
 <b class="form-control text-center">THIS IS AN EXAMPLE OF UPPER CASE.</b>
 </p>
 </div>
<!-- Capitalized Case-->
<div class="alert alert-danger role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Capitalized Case:
   
   </h4>
   <p class="text-justify mb-1">
  The capitalized case converter will automatically convert the starting letter of every word into an upper case and will leave the remaining letters as lower case ones.

Simply copy the content that you will like to generate into this format, then paste into the box form above and select the Capitalized Case tab.<br><br>
 <b class="form-control text-center">This Is An Example Of Capitalized Case.</b>
 </p>
 </div>
<!-- InVeRsE CaSe-->
<div class="alert alert-warning role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    InVeRsE CaSe:
   
   </h4>
   <p class="text-justify mb-1">
  The Inverse case inverse each typed letter to its opposite. The capital letter becomes lowercase and vice versa.

Simply copy the content that you will like to generate into this format, then paste into the box form above and select the Capitalized Case tab.<br><br>
 <b class="form-control text-center">tHIS IS AN EXAMPLE OF SENTENCE CASE.</b>
 </p>
 </div>
<!-- Reverse Word-->
<div class="alert alert-info role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Reverse Word:
   
   </h4>
   <p class="text-justify mb-1">
  Reverse Word reverses the typed word. It's as if the word is rotated 180 degrees. See an example below:<br><br>
 <b class="form-control text-center"> USA => ASU or Jesus => suseJ </b>
 </p>
 </div>
<!-- Character Spacing-->
<div class="alert alert-primary role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Character Spacing:
   
   </h4>
   <p class="text-justify mb-1">
    The Character Spacing puts a space between each letter of the typed text and does not put commas between these spaces:<br><br>
 <b class="form-control text-center"> United States => U n i t e d   S t a t e s </b>
 </p>
 </div>
<!-- Remove spaces-->

<div class="alert alert-light role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Remove spaces:
   
   </h4>
   <p class="text-justify mb-1">
    The remove spacing button removes any spaces that exist between words or phrases - leaving the text fully together:<br><br>
 <b class="form-control text-center"> S p a c e => Space </b>
 </p>
 </div>


<!-- Comma Space-->
<div class="alert alert-success role="alert">
  <h4 class="alert-heading"><img src="info.png" width="25px" height="25px">
   
    Comma Space:
   
   </h4>
   <p class="text-justify mb-1">
    This button places a comma between each word or phrase and even removes any space between words or phrases:<br><br>
 <b class="form-control text-center"> Australia => A,u,s,t,r,a,l,i,a </b>
 </p>
 </div>
 </div>

<!-- Download Text-->
<!-- Copy to Clipboard-->
<!-- Clean-->
