<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
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
            <h3>New Model Product  </h3>

          </div>
          <!-- Data -->
          <div class="col col-12">
            <form action="insert_db.php" method="post">
              <div class="row">
                <div class="col col-12 mt-3">
                  <label for="name">Modelname</label>
                  <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col col-12 mt-3">
                  <label for="des">Description</label>
                  <div class="input-group">
                    <textarea name="des" type="text" id="description" size="10" required class="form-control" aria-label="With textarea"></textarea>
                  </div>
                </div>
                <div class="col col-12 mt-3">
                  <label for="price">Price</label>
                  <input name="price" type="number" id="price" min="0" max="99999999" class="form-control" required>
                </div>
                <div class="col col-12 mt-3">
                  <label for="img">Picture url</label>
                  <input name="url" type="text" id="url" class="form-control" required>
                </div>
                <div class="col col-12 mt-4 mb-3 text-center">
                  <input type="submit" class="btn btn-success" value="Save">
                  <input type="reset" class="btn btn-danger" value="Cancel">
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