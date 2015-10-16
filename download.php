<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
h2{
color:#4cae4c;
}
</style>
<?php
echo "<h2>Your information has been sent successfully!</h2><br/>";
echo "<table style = 'width:600px;'class='table table-striped' border = '1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Firstname</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "</tr>";
echo "</thead>";
echo "<tr>";
echo "<td>";
echo $_GET['fname'];
echo "</td>";
echo "<td>";
echo $_GET['lname'];
echo "</td>";
echo "<td>";
echo $_GET['radio'];
echo "</td>";
echo "</tr>";
echo "</table>";