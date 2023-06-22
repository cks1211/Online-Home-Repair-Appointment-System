<?php
include('./handler.php');

$userHandler = new requestUserHandler();
$adminHandler = new requestAdminHandler();

if (isset($_POST['LogIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
        $userHandler->logIn($email, $password);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else if (isset($_POST['SignUp'])) {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $DOB = $_POST['DOB'];
    $CNum = $_POST['CNum'];
    if ($_POST['Gender']) {
        $Gender = 'Male';
    } else {
        $Gender = 'Female';
    }
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $userHandler->SignUp($Fname, $Lname, $DOB, $CNum, $Gender, $Email, $Password);
} else if (isset($_POST['add-cus'])) {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $DOB = $_POST['DOB'];
    $ContactNum = $_POST['CNum'];
    if ($_POST['Male']) {
        $Gender = 'Male';
    } else {
        $Gender = 'Female';
    }
    $Email = $_POST['Email'];
    $adminHandler->addCustomerInfo($Fname, $Lname, $DOB, $CNum, $Gender, $Email);
} else if (isset($_POST['del-cus'])) {
    $id = $_POST['cus-id'];
    $adminHandler->deleteCustomerInfo($id);
} else if (isset($_POST['upd-cus'])) {
    $Id = $_POST['Id'];
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $DOB = $_POST['DOB'];
    $CNum = $_POST['CNum'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $adminHandler->updateCustomerInfo($Id, $Fname, $Lname, $DOB, $CNum, $Gender, $Email);
} else if (isset($_POST['assign'])) {
    $Id = $_POST['cus-id'];
    $adminHandler->assignAppointment($Id);
} else if (isset($_POST['del-appo'])) {
    $Id = $_POST['cus-id'];
    $adminHandler->deleteAppointment($Id);
} else if (isset($_POST['admin-log'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $adminHandler->LogIn($email, $password);
} else if (isset($_POST['book-appo'])) {
    $Name = $_POST['Name'];
    $CNum = $_POST['CNum'];
    $Address =  $_POST['Address'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
    $userHandler->bookAppointment($Name, $Address, $CNum, $Date, $Time);
}
