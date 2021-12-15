<?php
$hostname = "localhost";
$dbname = "Likes";
$username = "postgres";
$pass = "12345678";
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");

if (isset($_POST['submit'])) {

    $lname = $_POST['lastname'];

    $query = pg_query($db_conn, "INSERT  INTO likesA(id,date, likeby) VALUES (NULL,NOW(),'$lname');");
    if ( $query ) {
        echo  "Record Successfully Added!";
    }
}


?>
<!DOCTYPE  html>
<html>
<body>
<h2>PostgreSQL Insert Forms</h2>

<form  method="POST"  action="">
    Liké par :<br>
    <input label="entrez le nom" type="text"  name="lastname">
    <br><br>
    <input  type="submit"  name="submit">
</form>
</body>
</html>

