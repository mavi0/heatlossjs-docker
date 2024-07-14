<?php 
    $v = 311;
    $example = file_get_contents("heatlossjs/files/midterrace.json");

?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

<!-- <style>
  body { font-family:arial; text-align:center; }
  .page { max-width:960px; margin: 0 auto; }
  li {margin-bottom:10px}
</style> -->
<meta charset="utf-8">
<title>Heatloss Calculator</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1"/> 
<meta name="viewport" content="width=device-width" />
<style>

    /*FONTS*/

    /* @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto Regular'), local('Roboto-Regular'), url(https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/roboto-webfont/Roboto-Regular-webfont.woff) format('woff');
    }

    @font-face {
        font-family: 'Roboto Condensed';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto Condensed Regular'), local('RobotoCondensed-Regular'), url(fhttps://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/roboto-webfont/Roboto-Thin-webfont.woff) format('woff');
    } */

    ::-moz-selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    ::selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    html {
        padding: 30px 10px;
        line-height: 1.4;
        color: #737373;
        background: #ecf0f1;
    } 

    html {
        padding: 30px 10px;
        color: #737373;
        background: #ecf0f1;
    }


    body {
        font-family: 'Arial', sans-serif;
        max-width: 1000px;
        _width: 1000px;
        padding: 30px 20px 50px;
        border: 1px solid #b3b3b3;
        border-radius: 4px;
        margin: 0 auto;
        box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
        background: #fcfcfc;
    }

    h1 {
        margin: 0 10px;
        font-size: 50px;
        text-align: center;
        font-family: 'Arial', sans-serif;
    }

    h3 {
        margin: 1.5em 0 0.5em;
    }

    /* p {
        margin: 1em 0;
        font-family: 'Arial', sans-serif;
        text-align: left;
        word-spacing: 10px;s
        font-size: 20px;
    } */

    /* ul {
        padding: 0 0 0 40px;
        margin: 1em 0;
    } */

    a {
        text-align: center;
        color: #d64937;
    }

    a:hover{
        color: #bbb;
    }

    .page { 
        max-width:960px; 
        margin: 0 auto;
    }

    .heatloss {
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 900px;
        _width: 900px;
        margin: 0 auto;
    }
</style>
<body>
  <div class="page">
  
    <h2>heatloss.js example</h2>
    <i>See linked resources at the bottom for more information on how to use this tool</i>
    <br><br>
    <script type="text/javascript" src="files/config_new.js?v=<?php echo $v; ?>"></script>
    <link rel="stylesheet" type="text/css" href="heatlossjs/style.css?v=<?php echo $v; ?>" />
    <div id="heatloss"></div>
    <br><br>
    <div style="text-align:left">
    <b>How to use this tool</b>
    <ul>
      <li>Example calculation and discussion: <a href="https://trystanlea.org.uk/roombyroomheatloss2">A mid terraced house</a></li>
      <li>This tool is based on the BS EN 12831:2003 heat loss calculation standard:<br><a href="https://trystanlea.org.uk/roombyroomheatloss">Room by room heat loss using MCS heat pump calculator</a></li>
      <li>There are a number of useful resources available on the MCS installer standards and tools page (see under Heat pump section), including U-value and heat emitter guides: <a href="https://mcscertified.com/standards-tools-library/">MCS installer standards and tools</a></li>
      <li><a href="https://mcscertified.com/wp-content/uploads/2020/04/Guidance-on-U-Values-from-Domestic-Heating-Design-Guide.pdf">MCS Guidance on U-Values from Domestic Heating Design Guide</a></li>
      <li>To generate a more accurate degree-days value for your location see: <a href="https://www.degreedays.net/">https://www.degreedays.net/</a></li>
      <li>This tool is open source and free to use, the source code is available on github: <a href="https://github.com/trystanlea/heatlossjs">https://github.com/trystanlea/heatlossjs</a></li>
      <li>You may also be interested in SAPjs, a tool for household energy assessment based on SAP 2012: <a href="https://openenergymonitor.org/sapjs">https://openenergymonitor.org/sapjs</a></li>
    </ul>
    </div>
  </div>
</body>

<script> 
var cachev = <?php echo $v; ?>; 
var config = <?php echo $example; ?>;
</script>

<script type="text/javascript" src="heatlossjs/ecodan.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="heatlossjs/model.js?v=<?php echo $v; ?>"></script>
