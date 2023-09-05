<?php
include("./connect.php");
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];
    // echo $username;
    // echo "<br>";
    // echo $mobile;
    // echo "<br>";
    // print_r($image);
    // echo "<br>";
    // print_r($image['name']);
    // echo "<br>";
    $filename_separation = explode('.', $image['name']);
    // print_r($filename_separation);
    // echo "<br>";
    $file_extension = strtolower($filename_separation[1]);
    // print_r($file_extension);
    // echo "<br>";


    $extension = array('jpg', 'jpeg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = "images/" . $image['name'];
        move_uploaded_file($image['tmp_name'], $upload_image);

        //insert data into the database 
        $sql = "insert into `registration` (name,mobile,image) values('$username','$mobile','$upload_image')";

        // to execute the query
        $result = mysqli_query($con, $sql);
        if (!$result) {
            die(mysqli_error($con));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        img {
            width: 200px;
        }
    </style>
</head>

<body>
    <h1 class="text-center">User data</h1>
    <div class="container w-50 d-flex justify-content-center">
        <table class="table table-bordered">
            <thead class="table-dark">
                <th>Sr no</th>
                <th>Name</th>
                <th>Image</th>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `registration`";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $image =  $row['image'];
                    echo "
                    <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td><img src='$image'/></td>
                    </tr>
                    ";
                };
                ?>

            </tbody>
    </div>

    </table>
</body>

</html>