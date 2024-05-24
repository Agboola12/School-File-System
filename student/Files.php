<!-- <?php include ('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8i04FZ5LOh1hEXvZUnNQ1anu2P5f+ctW5az1u6UqDZ+qOOmPuE2lZ+QJ" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="index.css">

    
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





            <div class="main-content">

                <div class="about-sect">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="grid-item inner-box grid-cover mb-5" id="head"  >
                                    <div class="overlay-hero"></div>
                                    <h2 class="text-light text-center z-index-1">Upload Files</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-section pb-5">
                    <div class="container">
                        <div class="row ">
                            <form action="" method="post"  enctype="multipart/form-data">
                      <?php include('../errors.php'); ?>
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="title" class="form-control">
                                            <label>Title</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-group row mt-4">
                                                <label class="col-md-2 fw-bold">Add File:</label>
                                                <div class=" form-group col-md-3   ml-2">
                                                    <label for="file-upload" class="custom-file-upload btn btn">
                      <input type="file"  name="pix">

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-center mt-4">
                                            <button type="submit" name="submit" class="btn btn-main-1 w-100 bg-success text-white fw-bold fs-2 text-medium rounded-0 py-3 px-4"> Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                            <div class="col-lg-6">
                                <div style="height: 300px" class="h-75 bg-light p-lg-4 p-3 rounded">
                                    <h5 class="text-center mb-5">Document</h5>
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
 -->



 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>File Upload</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active"  href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
          <a class="nav-link" href="./display.php" >Display</a>
                    </li>
                                        <li class="nav-item">
          <a class="nav-link" href="../register.php" >Logout</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="container mt-5">
        <h2 class="text-center">Upload Files</h2>
        <form action="server.php" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title">
                <label for="title">Title</label>
            </div>
            <div class="form-group mb-3">
                <label for="file" class="form-label">Add File:</label>
                <input type="file" class="form-control" name="file" id="file" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div> -->







<div>
        <div class="auth-section home-banner-2 vh-100 d-flex bg-light justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card border-0 shadow-sm p-4">
                        <div class="card-body">
                            <center>
                                <img src="../images/logooo.png" alt='ukjbdf' class="img-fluid text-center" style="height: 70px" />
                            </center><br/>
                            <div class="mb-4  text-center align-items-center justify-content-between">
                                <h3 class="mb-0">Upload Files</h3>
                            </div>
                                <form action="server.php" method="post" enctype="multipart/form-data">                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="title" required class="form-control" placeholder="Enter Your Title">
                                            <label>Add Title</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" name="file" id="file" required>
                                            <label>Password</label>
                                        </div>          
                                        </div>
                                    <div class="col-lg-12">
                                        <div class="text-center mt-4">
                                            <button type="submit"  name="submit" style="background-color: #3E4095" class="btn btn-main-1 text-white fw-bold fs-5 w-100  text-medium rounded-0 py-3 px-4" >
                                                  Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
