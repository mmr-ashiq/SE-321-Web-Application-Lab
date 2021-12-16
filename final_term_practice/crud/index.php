<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_student');

if (isset($_POST['submitbtn'])) {
    $name = $_POST['stdname'];
    $roll = $_POST['stdroll'];

    if (!empty($name) && !empty($roll)) {
        $query = "INSERT INTO student(stdname, stdroll) VALUES('$name', $roll)";
        $createquery = mysqli_query($conn, $query);
    }else{
        echo "Field must not be empty";
    }
}
?>

<?php
    if (isset($_GET['delete'])) {
        $stdid = $_GET['delete'];
        $query = "DELETE FROM student WHERE id = $stdid";
        $deletequery = mysqli_query($conn, $query);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management CRUD System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container shadow mt-5 p-3">
        <form action="" method="post" class="d-flex justify-content-around">
            <input type="text" placeholder="Enter you name" name="stdname" class="form-control">
            <input type="number" placeholder="Enter you roll" name="stdroll" class="form-control">
            <input type="submit" value="send" name="submitbtn" class="btn btn-success">
        </form>
    </div>

    <div class="container shadow my-5 p-3">
        <form action="" method="post" class="d-flex justify-content-around">
            <?php
                if (isset($_GET['edit'])) {
                    $stdid = $_GET['edit'];
                    $query = "SELECT * FROM student WHERE id = $stdid";
                    $getquerybyid = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($getquerybyid)) {
                         $stdid = $row['id'];
                         $stdname = $row['stdname'];
                         $stdroll = $row['stdroll'];   
                    }

                    echo "<input type='text' name='stdname' value='$stdname' class='form-control'>";
                    echo "<input type='number' name='stdroll' value='$stdroll' class='form-control'>";
                    echo "<input type='submit' value='update' name='updatebtn' class='btn btn-primary'>";
                }
            ?>
            <?php
                if (isset($_POST['updatebtn'])) {
                    $stdname = $_POST['stdname'];
                    $stdroll = $_POST['stdroll'];

                    if (!empty($stdname) && !empty($stdroll)) {
                        $query = "UPDATE student SET stdname = '$stdname', stdroll = $stdroll WHERE id = $stdid"; 
                        $updatequery = mysqli_query($conn, $query); 
                    }
                }
            ?>
        </form>
    </div>

    <div class="container">
        <table class="table table-bordered border-primary">
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Student Roll</th>
                <th>Actions</th>
            </tr>
            <?php
                $query = "SELECT * FROM student";
                $readquery = mysqli_query($conn, $query);
                if (mysqli_num_rows($readquery) > 0) {
                    while ($row = mysqli_fetch_assoc($readquery)) {
                        $stdid = $row['id'];
                        $stdname = $row['stdname'];
                        $stdroll = $row['stdroll'];
                        echo "<tr>";
                        echo "<td>$stdid</td>";
                        echo "<td>$stdname</td>";
                        echo "<td>$stdroll</td>";
                        echo "<td>
                                <a href='index.php?edit=$stdid' class='btn btn-primary'>Edit</a>
                                <a href='index.php?delete=$stdid' class='btn btn-danger'>Delete</a>
                            </td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>