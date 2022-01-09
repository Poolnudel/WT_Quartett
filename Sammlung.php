<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Sammlung</title>
    <link rel="stylesheet" href="/style/styleSammlung.css">
</head>

<body>
    
<?php
echo '<table border="1">';
$start_row = 1;
if (($csv_file = fopen("csv/karten.csv", "r")) !== FALSE) {
  while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
    $column_count = count($read_data);
	echo '<tr>';
    $start_row++;
    for ($c=0; $c < $column_count; $c++) {
        echo "<td>".$read_data[$c] . "</td>";
    }
	echo '</tr>';
  }
  fclose($csv_file);
}
echo '</table>';
?>

</body>

</html>