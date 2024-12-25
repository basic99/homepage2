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
        p {
            margin-top: 20px;
        }
        button {
            margin-top: 20px;
        }
    </style>

  </head>
  <body>

<?php
    include "../menu.php";
?>

  <div  class='marspic'>
  <img src='/img/mars_wp_hdr.png' />
</div>
<main class="container">
<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <h2>Metes and Bounds with QGIS</h2>

    <p><a href='https://www.directlinesoftware.com/metes.htm' target='_blank'>Metes and Bounds Surveys</a></p>
    <p><a href='http://bit.ly/4gltvax' target='_blank'>Create a Polygon in QGIS - GIS Tutorial</a></p>

<select id='headings' class="form-select" aria-label="Default select example">
  <option value="">N</option>
  <option value="">NxE</option>
  <option value="">NNE</option>
  <option value="">NExN</option>
  <option value="">NE</option>
  <option value="">NExE</option>
  <option value="">ENE</option>
  <option value="">ExN</option>
  <option value="">E</option>
  <option value="">ExS</option>
  <option value="">ESE</option>
  <option value="">SExE</option>
  <option value="">SE</option>
  <option value="">SExS</option>
  <option value="">SSE</option>
  <option value="">SxE</option>
  <option value="">S</option>
  <option value="">SxW</option>
  <option value="">SSW</option>
  <option value="">SWxS</option>
  <option value="">SW</option>
  <option value="">SWxW</option>
  <option value="">WSW</option>
  <option value="">WxS</option>
  <option value="">W</option>
  <option value="">WxN</option>
  <option value="">WNW</option>
  <option value="">NWxW</option>
  <option value="">NW</option>
  <option value="">NWxN</option>
  <option value="">NNW</option>
  <option value="">NxW</option>
</select>

<p id='degrees_compass'>0</p>
<p id='degrees_trig'>90</p>
</div>
</div>

<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <div class="form-group">
          <label >start x:</label>
          <input value='0' type="text" class="form-control" id="start_x">
        </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
          <label >start y:</label>
          <input value='0' type="text" class="form-control" id="start_y">
        </div>
  </div>
</div>
<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <div class="form-group">
          <label >distance:</label>
          <input id='distance' value='100' type="text" class="form-control" id="start_y">
        </div>
  </div>
</div>

<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <div class="form-group">
          <label >end x:</label>
          <input value='0' type="text" class="form-control" id="end_x">
        </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
          <label >end y:</label>
          <input value='0' type="text" class="form-control" id="end_y">
        </div>
  </div>
</div>

<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-4">
<button type="button" class="btn btn-primary">Calculate</button>
</div>
</div>





</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src='../js/jquery-3.7.1.min.js'></script>
    <script src='../js/compass-headings.js'></script>



  </body>
</html>
