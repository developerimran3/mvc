<?php

if (file_exists(__DIR__ . "/autoload.php")) {
    require_once(__DIR__ . "/autoload.php");
} else {
    echo "autoload.php not found";
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <div class="container my-5">
        <a class="btn btn-primary mb-3" href="index.php">Back</a>
        <div class="row ">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img class="card-img" src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" alt="">
                        <div class="signal-view">
                            <h1>Name</h1>
                            <span>:</span>
                            <h2>Rakib</h2>
                        </div>
                        <div class="signal-view">
                            <h1>Age</h1>
                            <span>:</span>
                            <h2>25</h2>
                        </div>
                        <div class="signal-view">
                            <h1>Skill</h1>
                            <span>:</span>
                            <h2>dess</h2>
                        </div>
                        <div class="signal-view">
                            <h1>Location</h1>
                            <span>:</span>
                            <h2>sss</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>