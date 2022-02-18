<?php

session_start();

if (!isset($_SESSION['login_success'])) {
    header('location: ./auth/login_form.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['login_success']);
    header('location: ./auth/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Cars information<i class="fa-duotone fa-car"></i></a>
            <form class="d-flex">
                <a class="btn btn-danger" type="submit" href="index.php?logout='1'">Logout</a>
            </form>
        </div>
    </nav>
    <div class="container">
        <h2>Welcome</h2>
        <?php if (isset($_SESSION['login_success'])) : ?>
            <a href="index.php?logout='1'"></a>
        <?php endif ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <div class="text-end">
                        <a class="btn btn-success text-right right" href="insert.php" role="button">เพิ่มรายการ</a>
                    </div>
                </div><br>
                <form action="" method="POST">

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Modelname</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require './connection/server.php';
                            $query = "SELECT * FROM cars";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $img = $row["img_url"];
                                echo "<tr>";
                                echo "<td>" . $row["ID"] . "</td>";
                                echo "<td>" . " <a href= 'del_update.php?ID=$row[0]' > " . $row["name"] . "</a>" . "</td>";
                                echo "<td width='150px'><img width='100%' src='$img'></td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td>" . $row["price"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
    </div>
   <!-- JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>