<!doctype html>
<html>
<head>
<title>Weather Forecaster</title>

<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="weatherstyles.css">
<link rel="stylesheet" href="redo/css/style.css">
</head>
  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-md-offset-3 center">

          <h1 class="center">Weather Predictor</h1>
          <p class="lead center">Enter your city below to get a forecast for the
            weather.</p>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" name="city" id="city" placeholder="Eg.
                London, Paris, San Francisco..." />
              </div>
              <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
            </form>
            <div id="success" class="alert alert-success">Success!</div>
            <div id="fail" class="alert">Could not find weather data for that
              city. Please try again.</div>
              <div id="noCity" class="alert">Please enter a city!</div>
            </div>
          </div>
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script type="text/javascript" href="javascript.js"></script>

        </body>
        <footer>
          <div class="foot">
            <div class=" col-sm-4 col-sm-offset-4 bottom-info">
              <p>See the Code Here</p>
              <a href="https://github.com/aaronburatti/Weather-Web-Scraper"><img class="sicon" src="pics/GitHub.png"></a>
          </div>
        </footer>
      </html>
