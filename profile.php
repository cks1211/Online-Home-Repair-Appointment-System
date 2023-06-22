<?php
include('./handler.php');

$userData = userCheckLogin($_SESSION['userId']);
$Name = $userData['Last Name'] . $userData['First Name'];
$Email = $userData['Email'];
$Contact = $userData['Contact Number'];
$Gender = $userData['Gender'];

$appointments = getUserAppointment($Name);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://www.apu.edu.my/sites/all/themes/APU/favicon.ico" type="image/vnd.microsoft.icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>APU Home Repair Service</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="picture/logo2.png" alt="company logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- User Profile -->
    <!-- SideBar -->
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-lg-4 mt-1 side-bar">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="picture/customer5.jpg" alt="customer picture" class="profile-img" width="150" height="300">
                            <div class="sidebar-content">
                                <h3><?= $Name ?></h3>
                                <a href="#personal">Personal Information</a>
                                <a href="#appointment">Appointment</a>
                                <a href="#history">History</a>
                                <a href="logout.php">LogOut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal Information -->
                <div id="personal" class="content-container col-lg-8">
                    <div class="col-lg-11">
                        <div class="card mb-3 content">
                            <h1 class="m-3 pt-3">Personal Information</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Full Name</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $Name ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Email</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $Email ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Contact Number</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $Contact ?>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div id="appointment">
                            <div class="card mb-3 content">
                                <h1 class="m-3 ap-title">Appointment</h1>
                                <div class="card-body">
                                    <div class="unpending">
                                        <table class="unpending-table">
                                            <h2 class="ap-title">Incomplete Appointment</h2>
                                            <thead>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>Contact Number</th>
                                                    <th>Date</th>
                                                    <hr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($appointments as $appointment) {
                                                    if ($appointment[6] == 'Completed') {
                                                        $name = $appointment[1];
                                                        $address = $appointment[2];
                                                        $contact = $appointment[3];
                                                        $date = $appointment[4];
                                                        echo "<tr><td>$address</td><td>$contact</td><td>$date</td></tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="history">
                            <div class="card mb-3 content">
                                <h1 class="m-3 h-title">History</h1>
                                <div class="card-body">
                                    <div class="history">
                                        <table class="history-table">
                                            <h2 class="h-title">History Appointment</h2>
                                            <thead>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>Contact Number</th>
                                                    <th>Date</th>
                                                    <hr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($appointments as $appointment) {
                                                    if ($appointment[6] == 'Pending') {
                                                        $name = $appointment[1];
                                                        $address = $appointment[2];
                                                        $contact = $appointment[3];
                                                        $date = $appointment[4];
                                                        echo "<tr><td>$address</td><td>$contact</td><td>$date</td></tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>