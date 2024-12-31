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
  <div class="col-md-6">
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

<p id='degrees_compass'>equivalent compass degrees: 0</p>
<p id='degrees_trig'>equivalent trigonometry degrees: 90</p>
</div>
</div>

<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="comment">Points table:</label>
      <textarea class="form-control" rows="5" id="points_table"></textarea>
    </div>
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
          <input style='width:20;' value='0' type="text" class="form-control" id="end_x">
        </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
          <label >end y:</label>
          <input style='width:20;' value='0' type="text" class="form-control" id="end_y">
        </div>
  </div>
</div>

<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-4">
<button id='calculate' type="button" class="btn btn-primary">Calculate</button>
</div>
<div class="col-md-2">
<button id='add_point' type="button" class="btn btn-primary">add point</button>
</div><div class="col-md-2">
<button id='reset' type="button" class="btn btn-primary">reset</button>
</div>
</div>

    <div class="row g-5 bg-light rounded">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h4 style='padding-top: 25px;'>Notes</h4>
            <ol>
                <li>Download historic topo maps for the area of interest from <a href='https://www.usgs.gov/the-national-map-data-delivery/topographic-map-access-points'> usgs</a></li>
                <li>Crop topos the remove border material</li>
                <li>Use the QGIS georeferencer to reference the topo maps. They will be saved with updated name ending _modified.tif. Import the georeferenced raster files into QGIS. They should line up, ie, roads, rivers, etc. should be continuous even if maps are styled differently.</li>
                <li>Update the project CRS from WGS 84 to a state plane. I used the Virginia state plane ESRI:102747.</li>
                <li>Watch the tutorial to see how to create polygons and edit the vertices. It is easiest to first create a rough outline of the deeds or grants and then use this app to calculate more precise bearings. Use the atrribute table field calculator to check that the areas drawn correspond at least roughly to the area cited in the deed or grant. You can add an acres column with this formula: area($geometry) / 43560.</li>
            </ol>
            <figure>
              <img src="/img/warwick_qgis.png" alt="Trulli" style="width:100%">
              <figcaption>Three land grants in Warwick County, Virginia.</figcaption>
            </figure>

            <h4 style='padding-top: 25px;'>The Warwick County Grants</h4>
            <p>The 1668 grant to William Pierce ran NExE along George Harwoods line to a marked marked pohickory. The 1669 grant to Thomas Iken ran along the river and followed the bounds of the grant to William Pierce and at George Harwoods line ran to 'marked pohickory standining nere George Harwooods lyne and bounded on these two by the land of John Basse'. The grant to William Peirce fits perfectly against the grant to Thomas Iken. The 1674 grant placement to Thomas Pierce is also aided by its alignment to the Iken grant, by which time Iken had died and his lands escheated.</p>
            <p>The calculations of acres plotted with QGIS give William Pierce 102 acres, Thomas Pierce 161 acres and Thomas Iken 1876 acres. The acreage given in the grants is 100 acres for William Pierce and 155 acres for Thomas Pierce - so a close matchs. The marginal entry for the Iken grant is 1350 acres which is not close the value given by the bounds plotted with QGIS. However, a closer reading of the grant seems to indicate that 1350 is not the correct total but just that part that was part of a grant to Capt. Wm. Pierce in 1643 of 2100 acres. The grant also includes 150 acres granted by the county court and 400 acres for transport of 8 person. Adding these in would give 1900 acres which is close agreement with the area given by QGIS.</p>
            <p>The interesting question raised by the Iken and William Pierce grant is the contradiction between the 1668 grant to William Pierce and the 1669 grant to Iken that said this property was owned by John Basse. There was a John Basse who lived in Virginia and there is some controversy about when he died but probably before 1654 in which case the reference may be to a previous owner before it was granted to William Pierce. It could also be that William Pierce was granted that land and immediately resold it to a John Basse.</p>
        </div>
    </div>



</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src='../js/jquery-3.7.1.min.js'></script>
    <script src='../js/compass-headings.js'></script>



  </body>
</html>
