<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="script.js"></script>
  </head>
  <body>
    <?php
    $soup = array("a","b","c");
    for($n = 0 ; $n < count($soup); $n++){
      $k = $soup[$n];
      ?>
      <label >
        <?php echo $k ?>
        <input type="radio" value=<?php echo $k ?> name="z-index"/>
      </label>
    <div class="A <?php echo $k; echo " layer-$n" ?>">
      <div class="grid">

      <?php for ($i = 0 ; $i < 3; $i++){  ?>
        <div class="<?php echo "row row-$i"; ?>" >
          <?php for($j = 0 ; $j < 3; $j++){ ?>
            <div class="<?php echo "col col-$j";?>">
              <div class="content">
                <h1>
                  <?php
                    echo "row $i col $j layer $k";
                   ?>
                </h1>
                <textarea></textarea>
              </div>
            </div>
          <?php } ?>
        </div>
        <?php
    }
      ?>

    </div>
    </div>
    <?php } ?>
  </body>
</html>
