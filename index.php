<b>Hi there,</b><br />

<div style="color:darkgreen">The deployment has been successful. <br />
You are seeing this page as a result of the deployment.
</div>

<br />
The below contents are read from MySQL DB as part of testing MySQL database operations.
<br />
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
