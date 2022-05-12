<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Restricted to Multiple Countries</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
  </head>
  <body>
    <div class="pac-card" id="pac-card">
      <div>
        <div id="title">Countries</div>
        <div id="country-selector" class="pac-controls">
          <input type="radio" name="type" id="changecountry-usa" />
          <label for="changecountry-usa">Count</label>

          <input
            type="radio"
            name="type"
            id="changecountry-usa-and-uot"
            checked="checked"
          />
          <label for="changecountry-usa-and-uot"
            >Country</label
          >
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text" placeholder="Enter a location" />
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon" />
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span>
    </div>
        <script src="../script/index.js"></script>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      

      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl2JRwzkUXD643CMVVNv00KkrUUFDitbc&callback=initMap&libraries=places&v=weekly"
      async
    ></script>
  </body>
</html>