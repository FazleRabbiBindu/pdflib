<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Dashboard</title>
</head>
<body class="container-fluid bg-light">
  <header class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
  </header>
  <div class="row mt-5">
    <div class="col-md-2">
        <form action="../index" method="get">
            <ul class="text-center list-group">
                <input class="btn btn-dark mb-2 " type="submit" name="dasUpload" value="Upload">
                <input class="btn btn-dark mb-2 " type="submit" name="dasManage" value="Manage">
                <input class="btn btn-dark mb-2 " type="submit" name="dasRead" value="Read">
                <input class="btn btn-dark mb-2 " type="submit" name="dasUser" value="User">
                <input class="btn btn-dark mb-2 " type="submit" name="home" value="Home">
            </ul>

        </form>
        
    </div>
    <div class="col-md-10">
      <div class="h1">Upload file</div>
      <?php
      if (isset($_SESSION['alert'])) {    ?> 

      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= $_SESSION['alert'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <?php unset($_SESSION['alert']);  } ?>

        <form action="../Controller/upload" method="POST" enctype="multipart/form-data">
            <div>
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div>
                <label class="form-label" for="author">Author</label>
                <input class="form-control" type="text" name="author" id="author">
            </div>
            <div>
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" id="">
            </div>
            <div>
                <label class="form-label" for="pdf">PDF</label>
                <input class="form-control" type="file" name="pdfToUpload" id="pdf">
            </div>
            <div>
                <label class="form-label" for="image">Image</label>
                <input class="form-control" type="file" name="imageToUpload" id="image">
            </div>
            <input class="mt-5 mb-5 form-control btn btn-primary" type="submit" name="upload" value="Upload" />
        </form>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
