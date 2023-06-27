<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
  <title>Manage Data</title>

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

      <?php if (isset($_SESSION['alert'])) {    ?> 
      <div class="alert alert-info alert-dismissible fade show" role="alert">
<?= $_SESSION['alert'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

<?php unset($_SESSION['alert']);  } ?>


<table class="table table-striped table-bordered">
        <form action="../Controller/manage" method="post"><input type="submit" value="update"></form>        
        <thead>
            <tr>
                <th data-sortable="true">ID</th>
                <th>Book Cover</th>
                <th data-sortable="true">Title</th>
                <th data-sortable="true">Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $fetchedData = $_SESSION['pdf_data']; foreach ($fetchedData as $row) { ?>

          <form action="../Controller/manage" method="post">
            <tr>
              <td><?= $row['id'] ?></td>
              <td>
                <div>
                  <img src="../Assets/image/<?= $row['image'] ?>" class="img-fluid rounded" alt="<?= $row['title'] ?>"></td>
                </div>
              <td>
                <div class="form-group">
                  <label class="label" for="title"></label>
                  <input class="form-control" type="text" name="title" id="title" value="<?= $row['title'] ?>"> 
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label class="label" for="author"></label>
                  <input class="form-control" type="text" name="author" id="author" value="<?= $row['author'] ?>"> 
                </div>
              </td>
              <td>
                <div class="form-group text-center">
                  <input type="text" name="id" value="<?= $row['id'] ?>" hidden> 
                  <input class="btn btn-warning form-control mb-1" type="submit" name="update" value="update"> 
                  <input class="btn btn-danger form-control" type="submit" name="delete" value="delete">
                  <!-- <input type="submit" value=""> -->
                </div>
              </td>
            </tr>
          </form>
        <?php } ?>
        </tbody>
      </table>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#myTable').bootstrapTable();
      });
  </script>
</body>
</html>




