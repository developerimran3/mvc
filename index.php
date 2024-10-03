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
        <div class="row ">
            <div class="col-md-4">
                <div class="card shadow-sm">

                    <!-- Form Control -->
                    <div class="card-head">
                        <h2>Add Deves</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="my-3">
                                <input type="hidden" class="form-control" name="id" value="">
                            </div>
                            <div class="my-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="my-3">
                                <label for="">Age</label>
                                <input type="text" class="form-control" name="age" value="">
                            </div>
                            <div class="my-3">
                                <label for="">Skill</label>
                                <input type="text" class="form-control" name="skill" value="">
                            </div>
                            <div class="my-3">
                                <label for="">Location</label>
                                <input type="text" class="form-control" name="location" value="">
                            </div>
                            <div class="my-3">
                                <label for="">Photo</label>
                                <label class="uploaded">
                                    <input type="file" id="photo" name="photo" class="form-control">
                                </label>
                            </div>
                            <div class="my-3">
                                <input type="submit" value="Save" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- All Developer Show -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Skill</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" alt=""></td>
                                    <td>imran</td>
                                    <td>25</td>
                                    <td>Laravel</td>
                                    <td>Dhaka</td>
                                    <td><button class="btn btn-sm"></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>