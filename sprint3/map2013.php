<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Fusion Tables queries</title>
    <style type="text/css">
     input{
     border:1px solid lightgray;
     border-radius:5px;
     }
     h1{
      color: #145252;
      font-size:24px;
      text-align:center;
     }
     h3{
      color: darkcyan;
      font-size:16px;
      text-align:center;  
     }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: azure;
      }
      #map {
        height: 82%;
      }
    </style>
    
  </head>
  <body>
    <fieldset><h1>H2O Mapper</h1>
      <h3>Water Consumption Visualization for Year 2013</h3>
      
      <table cellspacing="5" align="center">
          <tr><td><button onclick="initMap1()" id="sum">Sum</button></td><td><button onclick="initMap2()" id="avg">Average</button></td></tr>
      </table>              
      </fieldset>   
    <div id="map"></div>
    <script>
      function initMap1() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 49.8879967, lng: -119.4399066},
          zoom: 13
        });
        var layer = new google.maps.FusionTablesLayer({
          map: map,
          query: {
            select: 'kid' ,
            from: '1VbSz91TXsZoDCoXjOv9kMjT1rVNo9Pf2ldsaPQIg',
          },
          styleId: 2
          /*
              styleID = 2 is ConsumpSum
              sytleID = 3 is ConsumpAvg
          */
        });
        layer.setMap(map);
        document.getElementById('sum').disabled = true;
        document.getElementById('avg').disabled = false;
      }
      
      function initMap2() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 49.8879967, lng: -119.4399066},
          zoom: 13
        });
        var layer = new google.maps.FusionTablesLayer({
          map: map,
          query: {
            select: 'kid' ,
            from: '1VbSz91TXsZoDCoXjOv9kMjT1rVNo9Pf2ldsaPQIg',
          },
          styleId: 3
          /*
              styleID = 2 is ConsumpSum
              sytleID = 3 is ConsumpAvg
          */
        });
        layer.setMap(map);
        document.getElementById('avg').disabled = true;
        document.getElementById('sum').disabled = false;
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzw_ER4m7oh84pImN_U0BGT-orsMlgyvE&callback=initMap">
    </script>
  </body>
</html>