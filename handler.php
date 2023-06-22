<?php
include('./dbconn.php');
session_start();

class requestUserHandler
{   
    // Login (Login)
    public function logIn($email, $password)
    {
        global $connection;
        $query = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
        $results = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($results);
        $count = mysqli_num_rows($results);
        $_SESSION['userId'] = $row['Email'];
        header('Location:homepage.php');
    }
    // Sign Up (Register)
    public function SignUp($Fname, $Lname, $DOB, $ContactNum, $Gender, $Email, $Password)
    {
        global $connection;
        $query = "INSERT INTO `tbluser`(`First Name`, `Last Name`, `DOB`, `Contact Number`, `Gender`, `Email`, `Password`) VALUES ('$Fname','$Lname','$DOB','$ContactNum','$Gender','$Email','$Password')";
        mysqli_query($connection, $query);
        header('Location:login.php');
    }
    // Book Appoinment(HomePage)
    public function bookAppointment($Name, $Address, $CNum, $AppoDate, $AppoTime)
    {
        global $connection;
        $query = "INSERT INTO `appointment`(`Name`, `Address`, `Contact Number`, `Appointment Date`, `Appointment Time`, `Status`) VALUES ('$Name','$Address','$CNum','$AppoDate','$AppoTime','Pending')";
        mysqli_query($connection, $query);
        header("Location: homepage.php");
    }
}

class requestAdminHandler
{
    // Login (Admin_login)
    public function LogIn($email, $password)
    {
        global $connection;
        $query = "SELECT * FROM `admin` WHERE Email='$email' AND Password='$password'";
        $results = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($results);
        $count = mysqli_num_rows($results);
        $_SESSION['userId'] = $row['Email'];
        header('Location:admin.php');
    }
    // Add Customer Info(admin) 
    public function addCustomerInfo($Fname, $Lname, $DOB, $CNum, $Gender, $Email)
    {
        global $connection;
        $query = "INSERT INTO `tbluser`(`First Name`, `Last Name`, `DOB`, `Contact Number`, `Gender`, `Email`) VALUES ('$Fname','$Lname','$DOB','$CNum','$Gender','$Email')";
        mysqli_query($connection, $query);
        header("Location: admin.php");
        header('Refresh: 0.5s');
    }
    // Delete Customer Info(admin)
    public function deleteCustomerInfo($id)
    {
        global $connection;
        $query = "DELETE FROM tbluser WHERE ID='$id'";
        mysqli_query($connection, $query);
        header("Location: admin.php");
        header("Refresh: 0.5s");
    }
    // Update Appointment(admin)
    public function updateCustomerInfo($Id, $Fname, $Lname, $DOB, $CNum, $Gender, $Email)
    {
        global $connection;
        $query = "UPDATE `tbluser` SET `First Name`='$Fname',`Last Name`='$Lname',`DOB`='$DOB',`Contact Number`='$CNum',`Gender`='$Gender',`Email`='$Email' WHERE `ID` = $Id";
        mysqli_query($connection, $query);
        header('Location: admin.php');
        header("Refresh: 0.5s");
    }
    // Delete Appointment(admin)
    public function deleteAppointment($Id)
    {
        global $connection;
        $query = "DELETE FROM `appointment` WHERE `ID` = $Id";
        mysqli_query($connection, $query);
        header('Location: admin.php');
        header("Refresh: 0.5s");
    }
    //  Assign Appointment(admin)
    public function assignAppointment($Id)
    {
        global $connection;
        $query = "UPDATE `appointment` SET `Status`='Completed' WHERE `ID` = $Id";
        mysqli_query($connection, $query);
        header('Location: admin.php');
        header("Refresh: 0.5s");
    }
}
// Check User Login(Login)
function userCheckLogin($user_id)
{
    global $connection;
    $query = "SELECT * FROM tbluser WHERE Email='$user_id' LIMIT 1";
    $results = mysqli_query($connection, $query);
    if (mysqli_num_rows($results) >= 1) {
        return mysqli_fetch_assoc($results);
    } else {
        header('Location:login.php');
    }
}
// Check Admin Login(Admin_login)
function adminCheckLogin($user_id)
{
    global $connection;
    $query = "SELECT * FROM `admin` WHERE Email='$user_id' LIMIT 1";
    $results = mysqli_query($connection, $query);
    if (mysqli_num_rows($results) >= 1) {
        return mysqli_fetch_assoc($results);
    } else {
        header('Location:admin_login.php');
    }
}
// Profile User Appointment(Profile)
function getUserAppointment($username)
{
    global $connection;
    $query = "SELECT * FROM appointment WHERE Name='$username'";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_all($result);
    return $row;
}
// Profile User Appointment(Admin)
function getAllAppointment()
{
    global $connection;
    $query = "SELECT * FROM appointment";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_all($result);
    return $row;
}
