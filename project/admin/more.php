<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<h2>Registered Users</h2>


<br>

<table id="t01">
  <?php
$con=mysqli_connect("localhost","root","","vegdb") or die("couldn't connect");
                            $query = " select * from tbl_reg";
                            $results = mysqli_query($con,$query);
							$n=mysqli_num_rows($results);

                            echo "<tr><th>First Name</th><th>Last Name</th><th>email id</th><th>phno</th></tr>";
while($a=mysqli_fetch_array($results))
{
// print_r($a);echo "<br>";
                            echo "<tr>";
                            echo "<td>".$a['fname']."</td><td>"
									.$a['lname']."</td><td>"
                                   .$a['email']."</td><td>"
                               .$a['phone_no']."</td>";

                          echo "</tr>";
}
                             ?>
</table>

</body>
</html>
