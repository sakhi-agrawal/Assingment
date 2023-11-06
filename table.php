<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else {
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo $num;
echo " records found in the Database<br>";


if ($num > 0) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>First Name</th>';
    echo '<th>Last Name</th>';
    echo '<th>Email</th>';
    echo '<th>Gender</th>';
    echo '<th>City</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['city'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>
