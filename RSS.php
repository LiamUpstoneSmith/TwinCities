<?php
function liverpoolrss() {


// Create connection
$conn = new mysqli('localhost', 'root', '', 'twincity');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

# formulate the sql and run it
$sql = "SELECT `poi_id`, `poi_name`, `poi_lat`, `poi_lon`, `poi_desc` FROM `poi` WHERE c_id_fk = 01";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:100%;border:1px solid black;'><tr><th>ID</th><th>Name</th><th>Lat</th><th>Lon</th><th>Desc</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["poi_id"]."</td><td>".$row["poi_name"]."</td><td>".
      $row["poi_lat"]."</td><td>".$row["poi_lon"]."</td><td>".$row["poi_desc"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
}

liverpoolrss();
?>