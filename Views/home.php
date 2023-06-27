<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container ">
  <header>
    <div class="mt-5 text-center mb-5">
      <div class="row align-items-center">
        <div class="col">
          <form action="../index" method="get">
            <input class="btn btn-primary" type="submit" name="home" value="Home">
            <input class="btn btn-primary" type="submit" name="dashboard" value="Dashboard">
          </form>
        </div>
      </div>
    </div>
  </header>

  <div class="row">
<?php session_start(); $fetchedData = $_SESSION['home_data']; foreach ($fetchedData as $row) { ?>

        <div class="col col-lg-3 mt-4">
            <div class="card">
                <img src="../Assets/image/<?= $row['image'] ?>" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['author'] ?></p>
                    <p class="card-text"><?= $row['description'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

<?php } ?>
    
    </div>
  

  <footer>
    <div class="container">
      <div class="text-center">
        &copy; <?php echo date("Y"); ?> Company Name. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script src="script.js"></script>
</body>
</html>
