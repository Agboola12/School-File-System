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
                        <a class="nav-link active" href="../index.php">Home</a>
                    </li>
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

            // Fetch uploaded files
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
