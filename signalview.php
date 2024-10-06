<?php

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
}



if (file_exists(__DIR__ . "/autoload.php")) {
    require_once(__DIR__ . "/autoload.php");
} else {
    echo "autoload.php not found";
}

$signalDeves = find('db/data.JSON', $user_id);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $signalDeves->name; ?></title>
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
                        <img class="card-img" id="signal-card-img" src="assets/img/<?php echo $signalDeves->photo; ?>" alt="">
                        <div class="signal-view">
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td> :</td>
                                    <td><?php echo $signalDeves->name; ?></td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>:</td>
                                    <td><?php echo $signalDeves->age; ?></td>
                                </tr>
                                <tr>
                                    <td>Skill</td>
                                    <td>:</td>
                                    <td><?php echo $signalDeves->skill; ?></td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td>:</td>
                                    <td><?php echo $signalDeves->location; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>