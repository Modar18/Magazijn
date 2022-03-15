<?php var_dump($_GET) ?>

<form action="./update-script.php" method="post">

  <a>Chosen article id: <?php echo $_GET["id"] ?></a>
  <div class="slidecontainer">
    <label>Choose your rating</label>
    <input type="range" min="1.0" max="10.0" value="1" step="0.1" class="slider" id="myRange" name="naam">
  </div>
  <div id="demo">

  </div>
  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
      output.innerHTML = this.value;
    }
  </script>

  <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">

  <input type="submit" value="Submit">
</form>