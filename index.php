<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM m001_d001";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="app.js"></script>
  <script type="text/javascript" src="refresh1.js"></script>
<style>
table {
    border-collapse: collapse;
		width:600px;
		line-height: 40px;
}
table, th, td {
    border: 1px solid black;
    text-align: center;
}
</style>
</head>
<body>
<div id="load">
<?php
echo  "<div class='container'>";
echo  "<table id='foundry' border='1px'>";
echo  "<tr>";
echo  "<th colspan='5'>";
echo  "<h2> Foundry unit</h2>";
echo  "</th>";
echo  "</tr>";
echo  "<tr style='background-color:skyblue;'>";
echo  "<th>CriticalParameter</th>";
echo  "<th>setvalue</th>";
echo  "<th>units</th>";
echo  "<th>tolerance</th>";
echo  "<th id='status' class='actualvalue'>actualvalue</th>";
echo  "</tr>";

    while($row = $result->fetch_array()) {

      $CriticalParameter = $row[2];
      $setvalue = $row[3];
      $units = $row[4];
      $tolerance = $row[5];
      $actualvalue = $row[6];


    echo  "<tr>";
    echo  "<td>$CriticalParameter</td>";
    echo  "<td>$setvalue</td>";
    echo  "<td>$units</td>";
    echo  "<td>$tolerance</td>";
    echo  "<td>$actualvalue</td>";
    echo  "</tr>";
	}

echo "</table>";
  ?>
</div>
</body>
</html>
