<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Jim White&lsquo;s Homepage</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/homepage2.css" rel="stylesheet">


    <style>

      h2 {
        text-align: center;
      }

      figure {
        width: 100%;
        text-align: center;
      }

      figure img {
        display: block;
        margin: 5px auto 5px;
      }

      #arms {
        width: 250px;

      }

      #burgedin, #gwenwys, #piers {
        width: 100%;
      }






    </style>

  </head>
  <body>

<?php
include "../menu.php";
?>

  <div  class='marspic'>
  <!-- <img src='/img/mars_wp_hdr.png' /> -->
</div>
<main class="container">
<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <h2>Pierce Genealogy</h2>
  </div>

  <figure>
    <img id='arms' src="/img/arms_blazon.png" alt="three nags" />
    <figcaption>Sable three nags' heads erased, argent (Brochwel Ysgythrog)</figcaption>
  </figure>

  <p>This Pierce Welsh genealogy is based on my research and the use of <a href='https://research.aber.ac.uk/en/datasets/bartrum-genealogical-project' target='_blank'>Bartrum's Welsh pedigrees</a> to explore the earlier generations. The tribe of Gwenys is descended from Brochwel Ysgythrog, king of Powys in the sixth century and the arms are the three nags pictured above.</p>

   <figure>
    <img id='burgedin' src="/img/burgedin.jpg" alt="" />
    <figcaption>Genealogy of Reynold ap David ap Griffith of Burgedin</figcaption>
  </figure>

  <figure>
    <img id='gwenwys' src="/img/Gwenwys.jpg" alt="" />
    <figcaption>Gwenwys tribe</figcaption>
  </figure>

  <figure>
    <img id='piers' src="/img/piers.svg" alt="" />
    <figcaption>Gwenwys tribe 2</figcaption>
  </figure>



</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  </body>
</html>
