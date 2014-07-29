<h1>Hello</h1><br />
If you are seeing this page it means deployment has been successfull.
<br />
The below contents are read from MySQL DB.

<?php
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM t_employee");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Location</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?> 
