
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/index.css" />
    <title> Feedback </title>
  </head>
  <body>
    <div id="panel" class="panel-container">
      <strong>How satisfied are you with <br /> the choosen diets ?</strong>
      <div class="ratings-container">
        <div class="rating">
          <img src="img/unhappy.png" alt="">
          <small>Unhappy</small>
        </div>

        <div class="rating">
          <img src="img/neutral.png" alt=""/>
          <small>Neutral</small>
        </div>

        <div class="rating active">
          <img src="img/satisfied.png" alt=""/>
          <small>Satisfied</small>
        </div>
      </div>
      <button class="btn" id="send">Send Review</button>
    </div>
    <div class="credit">Made with <span style="color:tomato">❤</span> by <a  href="index.php">Diet planner</a></div>
    <script src="js/script.js"></script>
  </body>
</html>
