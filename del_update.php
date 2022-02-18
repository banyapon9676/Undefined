<?php

require "./connection/server.php";

if (isset($_GET['ID'])) {
    $id = mysqli_real_escape_string($conn, $_GET["ID"]);
    $sql = "SELECT * FROM cars WHERE ID='$id' ";
    $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
}

// Delete
if (isset($_GET["delId"])) {
    $id = mysqli_real_escape_string($conn, $_GET["delId"]);
    $sql = "DELETE FROM cars WHERE ID='$id' ";
    $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error());
    if ($result) {
        echo "<script>";
        echo "alert('Delete success')";
        echo "</script>";
        echo "<script>";
        echo "window.location.replace('index.php')";
        echo "</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update and Delete</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Cars information</a>
            <form class="d-flex">
                <a class="btn btn-danger" type="submit" href="index.php?logout='1'">Logout</a>
            </form>
        </div>
    </nav>
    <div class="container my-5" style="width: 600px">
        <div class="card" style="background-color: gray; color: white;">
            <div class="container">
                <div class="row">
                    <div class="col col-12 mt-3">
                        <h2>Update and delete</h2>
                        <h4><?php echo $name ?></h4>
                    </div>
                    <div class="col col-12">
                        <form action="update_db.php" method="post">
                            <div class="row">
                                <div class="col col-12">
                                    <label for="id">ID</label>
                                    <input type="text" id="id" name="id" value="<?php echo $ID ?>" class="form-control" readonly>
                                </div>
                                <div class="col col-12 mt-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" value="<?php echo $name ?>" class="form-control" required>
                                </div>
                                <div class="col col-12 mt-3">
                                    <label for="price">Price</label>
                                    <input type="number" id="price" name="price" value="<?php echo $price ?>" class="form-control" require>
                                </div>
                                <div class="col col-12 mt-3">
                                    <label for="des">Description</label>
                                    <input type="text" id="des" name="des" value="<?php echo $description ?>" class="form-control" require>
                                </div>
                                <div class="col col-12 mt-3">
                                    <label for="img">Picture url</label>
                                    <input type="text" id="img" name="img" value="<?php echo $img_url ?>" class="form-control" require>
                                </div>
                                <div class="col col-12 mt-4 mb-3 text-center">
                                    <a href="del_update.php?delId=<?php echo $ID ?>" class="btn btn-danger">Delete</a>
                                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>