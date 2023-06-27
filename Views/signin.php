<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <body class="container text-center">
    
  <div class="row mt-5">
      <div class="col align-self-start"></div>
      <div class="col align-self-center card" style="width: 18rem;">
        <form  action="../controller" method="post">
          <div class="mb-3">
            <label class="form-label" for="userid">User Id</label>
            <input class="form-control" type="text" name="userid" id="userid">
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="text" name="password" id="password">
          </div>
          <input class="form-control mb-5 btn btn-lg btn-primary text-center" type="submit" name="login">
        </form>
      </div>
      <div class="col align-self-end"></div>
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

  </body>
</html>

