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
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">User Management</h5>
                    <p class="card-text">Manage user accounts, roles, and permissions.</p>
                    <a href="#" class="btn btn-primary">Go to User Management</a>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Asset Management</h5>
                    <p class="card-text">Track and manage company assets, such as computers, furniture, and vehicles.</p>
                    <a href="#" class="btn btn-primary">Go to Asset Management</a>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Equipment Management</h5>
                    <p class="card-text">Manage equipment inventory, maintenance, and service records.</p>
                    <a href="#" class="btn btn-primary">Go to Equipment Management</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
