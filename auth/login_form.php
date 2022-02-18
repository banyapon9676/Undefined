<?php

session_start();
include("../connection/server.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Login Page</title>
    <!-- Bootstrap CND -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>
    <div class="container" style="width: 500px; padding-top: 200px">
        <?php
        if (isset($_SESSION['login_error'])) {
            echo "<script>";
            echo "alert('Wrong email or password.')";
            echo "</script>";
        }
        ?>
        <div class="row" style="background-color:#f4f4f4">
            <div class="col col-12 mt-2">
                <h3>LOGIN   </h3>
            </div>
            <div class="col col-12">
                <form action="login_db.php" method="post">
                    <div class="row">
                        <!-- Email -->
                        <div class="col-sm-12 mt-3">
                            <div class="form-group">
                                <input type="email" name="email" value="eak_1@gmail.com" class="form-control" placeholder="Username" required />
                            </div>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="col-sm-12 mt-3">
                        <div class="form-group">
                            <input type="password" name="password" value="123456789" class="form-control" placeholder="Password" required />
                        </div> 
                    </div>
                    <!-- Button -->
                    <div class="col-sm-12 mt-3 mb-2 text-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" id="submit" name="submit">
                                <span class="glyphicon glyphicon-log-in">SUBMIT</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>


</html>