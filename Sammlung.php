<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/styleSammlung.css">

  <title>Sammlung</title>
</head>
<body>
  <div class="titel">
    <h1>Sammlung</h1>
    <a href="index.html">Zurück</a>
  </div>

  <?php
    $file = fopen('csv/karten.csv', 'r');
      while($line = fgetcsv($file, 1000, ',')) {
        ?>

        <div class="karte">

          <div class="typ">
            <?php echo $line[1]; ?>
          </div>

          <table>
            <tr>
              <td>Name</td>
              <td><?php echo $line[1];?></td>
            </tr>
            <tr>
              <td>Bild</td>
              <td>
                <img src="img/<?php echo str_replace(' ','',strtolower($line[2])); ?>.png" alt="<?php echo $line[2];?>">
                <img src="img/<?php echo str_replace(' ','',strtolower($line[3])); ?>.png" alt="<?php echo $line[3];?>">
            </td>
            </tr>
            <tr>
              <td>Stat 1</td>
              <td><?php echo $line[4];?></td>
            </tr>
            <tr>
              <td>Stat 2</td>
              <td><?php echo $line[5];?></td>
            </tr>
            <tr>
              <td>Stat 3</td>
              <td><?php echo $line[6];?></td>
            </tr>
            <tr>
              <td>Stat 4</td>
              <td><?php echo $line[7];?></td>
            </tr>
          </table>
          

        </div>
        <?php
      }
      fclose($file);
  ?>
</body>
</html>