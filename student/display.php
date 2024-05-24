<!-- <?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>View Uploaded Files</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-title, .card-text {
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
    </style>
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
                        <a class="nav-link" href="./Files.php">Upload Files</a>
                    </li>
          <li>
          <a class="nav-link" href="../register.php" >Logout</a>
      </li>
                </ul>
              
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php
            include("../connect.php");

            $query = "SELECT * FROM file";
            $result = mysqli_query($db, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $filePath = $row['file_path'];
                $fileExt = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                $isImage = in_array($fileExt, ['jpg', 'jpeg', 'png', 'pdf', 'mp3', 'mp4']);
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <?php if ($isImage): ?>
                            <img src="<?php echo $filePath; ?>" class="card-img-top" alt="<?php echo $title; ?>">
                        <?php else: ?>
                            <img src="placeholder.png" class="card-img-top" alt="Placeholder Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $title; ?></h5>
                            <p class="card-text"><a href="<?php echo $filePath; ?>" target="_blank">View File</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 -->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>View Uploaded Files</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
        }
        .card img, .card video, .card audio {
            max-height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .card-title, .card-text {
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
    </style>
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
                        <a class="nav-link" href="./Files.php">Upload Files</a>
                    </li>
          <li>
          <a class="nav-link" href="../register.php" >Logout</a>
      </li>
                </ul>
              
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php
            include("../connect.php");

            $query = "SELECT * FROM file";
            $result = mysqli_query($db, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $filePath = $row['file_path'];
                $fileExt = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <?php if (in_array($fileExt, ['jpg', 'jpeg', 'png'])): ?>
                            <img src="<?php echo $filePath; ?>" class="card-img-top" alt="<?php echo $title; ?>">
                        <?php elseif ($fileExt == 'mp4'): ?>
                            <video controls>
                                <source src="<?php echo $filePath; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php elseif ($fileExt == 'mp3'): ?>
                            <audio controls>
                                <source src="<?php echo $filePath; ?>" type="audio/mpeg">
                                Your browser does not support the audio tag.
                            </audio>
                        <?php else: ?>
                            <img src="placeholder.png" class="card-img-top" alt="Placeholder Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $title; ?></h5>
                            <p class="card-text"><a href="<?php echo $filePath; ?>" target="_blank">View File</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->



<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>View Uploaded Files</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
        }
        .card img, .card video, .card audio {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-title, .card-text {
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
    </style>
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
                        <a class="nav-link" href="./Files.php">Upload Files</a>
                    </li>
          <li>
          <a class="nav-link" href="../register.php" >Logout</a>
      </li>
                </ul>
              
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php
            // Connect to the database
            include("../connect.php");

            // Handle file deletion
            if (isset($_POST['delete'])) {
                $file_id = $_POST['file_id'];
                $filePath = $_POST['file_path'];

                // Delete the file from the server
                if (file_exists($filePath)) {
                    unlink($filePath);
                }

                // Delete the file from the database
                $query = "DELETE FROM file WHERE file_id = $file_id";
                mysqli_query($db, $query);
            }

            // Fetch uploaded files
            $query = "SELECT * FROM file";
            $result = mysqli_query($db, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $file_id = $row['file_id'];
                $title = $row['title'];
                $filePath = $row['file_path'];
                $fileExt = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <?php if (in_array($fileExt, ['jpg', 'jpeg', 'png'])): ?>
                            <img src="<?php echo $filePath; ?>" class="card-img-top" alt="<?php echo $title; ?>">
                        <?php elseif ($fileExt === 'mp3'): ?>
                            <audio controls>
                                <source src="<?php echo $filePath; ?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <?php elseif ($fileExt === 'mp4'): ?>
                            <video controls>
                                <source src="<?php echo $filePath; ?>" type="video/mp4">
                                Your browser does not support the video element.
                            </video>
                        <?php else: ?>
                            <img src="placeholder.png" class="card-img-top" alt="Placeholder Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $title; ?></h5>
                            <p class="card-text"><a href="<?php echo $filePath; ?>" target="_blank">View File</a></p>
                            <form action="" method="post">
                                <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
                                <input type="hidden" name="file_path" value="<?php echo $filePath; ?>">
                                <button type="submit" name="delete" class="btn btn-danger w-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

