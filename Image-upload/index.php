<?php
require_once("./operations.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            <!-- <div class="form-group my-4">
                <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off">
            </div>
            <div class="form-group my-4">
                <input type="text" name="mobile" placeholder="Mobile" class="form-control" autocomplete="off">
            </div> -->
            <?php
            inputFields("text", "username", "Username", "");
            inputFields("text", "mobile", "Mobile", "");
            inputFields("file", "file", "", "");
            ?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>