<?php

if (isset($_GET['id'])) {
    $users_id = $_GET['id'];
}



if (file_exists(__DIR__ . "/autoload.php")) {
    require_once(__DIR__ . "/autoload.php");
} else {
    echo "autoload.php not found";
}

$editDeves = find('db/data.JSON', $users_id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $editDeves->name; ?></title>
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
                        <div class="signal-view">
                            <form action="">
                                <div class="my-2">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="">Age</label>
                                    <input type="text" name="age" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="">Skill</label>
                                    <input type="text" name="skill" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="">Location</label>
                                    <input type="text" name="location" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="">Photo</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="my-2">
                                    <input type="submit" value="Update" class="btn btn-success w-100">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>