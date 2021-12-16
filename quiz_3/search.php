<?php

$db = new mysqli('localhost', 'root', '', 'quiz_3');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz -3</title>
    <link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"
			integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
    />
</head>
<body>
    <?php
        $query_name = $_POST['query_name'];
        $query_country = $_POST['query_country'];

        $min_length = 3;

        if (strlen($query_country) >= $min_length && strlen($query_name) >= $min_length) {

            $queryForName = htmlspecialchars($query_name);
            $queryForCountry = htmlspecialchars($query_country);

            $sql = "SELECT * FROM student_info
                    WHERE (`name` LIKE '%".$queryForName."%') OR (`country` LIKE '%".$queryForCountry."%')";
            $raw_results = $db->query($sql) or die(mysql_error());

            if ($raw_results->num_rows > 0) {
                echo "<table border='1'>
                <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Country</th>
                </tr>";
                
                while ($row = $raw_results->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['country'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($raw_results);

            } else {
                echo "No results for this query";
            }
        } else {
            echo "Minimum length for name or country is " . $min_length . " characters";
        }
        $db->close();
    ?>
</body>
</html>