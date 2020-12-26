
<ul>
<?php

$sql = "SELECT * FROM mbtest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
	echo '<li><a href="?id=',$row["id"],'">',$row["email"],'</a></li>';
  }
} else {
  echo "E-pasta adrešu nav!";
}
?>
 
</ul>
</div>