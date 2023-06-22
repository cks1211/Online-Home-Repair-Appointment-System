<?php

include('./handler.php');

$userData = adminCheckLogin($_SESSION['userId']);
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
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Admin Page</title>
    <script>
        $(document).ready(function() {
            alert("Welcome to Admin Login");
        })
    </script>
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
                        <a class="nav-link active" href="#user-tb">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#ap-tb">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="title">Home Repair Appoinment Manage</h1>
    <hr>
    <!-- user -->
    <section id="user-tb">
        <div class="user">
            <table class="user-table">
                <h2 class="user-title">Customer Info</h2>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Day Of Birth</th>
                        <th>Contact Number</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = 'SELECT * FROM tbluser;';
                    $result = mysqli_query($connection, $query);

                    if (mysqli_num_rows($result) >= 1) {
                        foreach ($result as $r) {
                            $ID = $r['ID'];
                            $Fname = $r['First Name'];
                            $Lname = $r['Last Name'];
                            $DOB = $r['DOB'];
                            $CNum = $r['Contact Number'];
                            $Gender = $r['Gender'];
                            $Email = $r['Email'];


                            $result =  "<tr><td>$ID</td><td>$Fname</td><td>$Lname</td><td>$DOB</td><td>$CNum</td><td>$Gender</td><td>$Email</td><td>";

                            $result .= "<form action='./requestHandler.php' method='POST'>";
                            $result .= '<button type="button" class="user-table-btn btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#myModal';
                            $result .= $ID;
                            $result .= '">Update</button>';
                            $result .= '<button  class="user-table-btn btn btn-dark btn-sm" name="del-cus">Delete</button>';
                            $result .= "<input type='hidden' class='hidden-input' name='cus-id' value='";
                            $result .= $r['ID'];
                            $result .= "'></form></td></tr>";

                            $result .= '<div class="modal" id="myModal';
                            $result .= $ID;
                            $result .= '">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                    
                                    <div class="modal-header">
                                        <h4 class="modal-title">Users Profile</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                    
                                    <div class="modal-body">
                                        <form action="./requestHandler.php" method="POST">
                                            <label for="Id">ID</label>
                                            <input class="form-control" type="text" value="';
                            $result .= $ID;
                            $result .=  '" id="Id" name="Id">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="Fname">First Name</label>
                                                    <input class="form-control" type="text" value="';

                            $result .= $Fname;
                            $result .=  '" id="Fname" name="Fname"></div>
                                            <div class="col-lg-6">
                                                <label for="Lname">Last Name</label>
                                                <input class="form-control" type="text" value="';
                            $result .= $Lname;
                            $result .= '" id="Lname" name="Lname"></div></div>
                                            <label for="DOB">Day of Birth</label>
                                            <input class="form-control" type="text" value="  ';
                            $result .= $DOB;
                            $result .= '" id="DOB" name="DOB">
                                            <label for="ContactNum">Contact Number</label>
                                            <input class="form-control" type="text" value="';
                            $result .= $CNum;
                            $result .= '" id="ContactNum" name="CNum">
                                            <label for="Gender">Gender</label>
                                            <input class="form-control" type="text" value="';
                            $result .= $Gender;
                            $result .= '" id="Gender" name="Gender">
                                            <label for="Email">Email</label>
                                            <input class="form-control" type="text" value="';
                            $result .= $Email;
                            $result .= '" id="Email" name="Email">
                                            <div class="update-cus-admin">
                                                <button type="submit" class="btn btn-dark btn-dark" name="upd-cus">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                            echo $result;
                        }
                    }
                    ?>
                </tbody>
            </table>
            <form action="./requestHandler.php" method="POST">
                <div id="add">
                    <button type="button" class="user-btn btn btn-user" name="add-cus" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </div>
            </form>

            <!-- The Modal -->
            <div class="modal" id="addModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">User's Profile</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form id="user-table-add" action="./requestHandler.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="Fname">First Name</label>
                                        <input id="Fname" name="Fname" type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="Lname">Last Name</label>
                                        <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <label for="DOB">Day of Birth</label>
                                <input type="text" class="form-control" id="DOB" name="DOB" placeholder="Birthdate">

                                <label for="ContactNum">Contact Number</label>
                                <input type="text" class="form-control" id="ContactNum" name="CNum" placeholder="Phone Number">

                                <label for="Gender">Gender</label>
                                <select id="Gender" name="Gender" class="form-select" aria-label="Default select example">
                                    <option selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                <label for="Email">Email</label>
                                <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">

                                <button type="submit" class="btn btn-primary" name="add-cus">Add</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- appointment -->
    <section id="ap-tb">
        <div user="ap">
            <table class="ap-table">
                <h2 class="user-title">Appoinment Info</h2>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Appoinment Date</th>
                        <th>Appoinment Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM appointment;';
                    $result = mysqli_query($connection, $query);

                    if (mysqli_num_rows($result) >= 1) {
                        foreach ($result as $r) {
                            $ID = $r['ID'];
                            $Name = $r['Name'];
                            $Address = $r['Address'];
                            $CNum = $r['Contact Number'];
                            $Date = $r['Appointment Date'];
                            $Time = $r['Appointment Time'];
                            $Status = $r['Status'];

                            $result = "<tr><td>$ID</td><td>$Name</td><td>$Address</td><td>$CNum</td><td>$Date</td><td>$Time</td><td>$Status</td><td>";
                            $result .= "<form action='./requestHandler.php' method='POST'>";
                            if ($Status == 'Pending') {
                                $result .= '<button type="submit" class="user-table-btn btn btn-dark btn-sm" name="assign">Assign</button>';
                            }
                            $result .= '<button  class="user-table-btn btn btn-dark btn-sm" name="del-appo">Delete</button>';
                            $result .= "<input type='hidden' class='hidden-input' name='cus-id' value='";
                            $result .= $r['ID'];
                            $result .= "'></form></td></tr>";

                            echo $result;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>