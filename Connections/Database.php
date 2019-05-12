<?php
/**
 * Created by PhpStorm.
 * User: hiteshbhatia
 * Date: 2019-05-12
 * Time: 15:56
 */
include('Validation.php');
include('Database.php');
session_start();
$username = 'root';
$password = 'root';
$host = 'localhost';
$database = 'TechMech';
$connection = mysqli_connect($host, $username, $password, $database);
if($connection){
    if (isset($_POST['register'])) {
        $name = $_POST['username'];
        $password = $_POST['password'];
        if (!empty($name && $password)) {
            $check = " select * from user where name = $name";
            $result = mysqli_query($connection, $check);
            $checkResult = mysqli_num_rows($result);
            if ($checkResult == 1) {
                echo 'Data Already exist';
            } else {
                $insert = "Insert into user(name, password) VALUES ($name, $password)";
                mysqli_query($connection, $insert);
            }
        }
    }
            if (isset($_POST['login'])) {
                $usrName = $_POST['username'];
                $pass = $_POST['password'];
            $check = " select 'username', 'password' from user where username = $usrName && password = $pass";
            if ($check['username'] == $usrName && $check['password'] == $pass) {
                if ($check == success) {
                    header("Location:CustomerDetails.php");
                    exit();
                }
            }
        }
            if(isset($_POST['customer'])){
                $name = $_POST['name'];
                $lastName = $_POST['lastname'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $county = $_POST['county'];
                $phone = $_POST['phone'];
                $eirCode = $_POST['eir'];
                $country = $_POST['country'];
                $cscheck = " select * from Customer where email = $email";
                $csresult = mysqli_query($connection, $check);
                $cscheckResult = mysqli_num_rows($result);
                if ($cscheckResult) {
                    echo 'Data Already exist';
                } else {
                    $insert = "Insert into Customer(name, password) VALUES ($name, $password)";
                    mysqli_query($connection, $insert);
            }
    }

         if(isset($_POST['register'])){
             $check = " select * from Customer where name = $name";
            $result = mysqli_query($connection, $check);
                $checkResult = mysqli_num_rows($result);
                    if($checkResult ==1){
                        echo 'Data Already exist';
                    }else{
                        $insert = "Insert into Customer(f_name, l_name, c_add, county, email, phone, eirCode, Country) VALUES ($name, $lastName, $address, $county, $email, $phone, $eirCode, $country)";
                        mysqli_query($connection, $insert);
                    }
                            if($insert == success) {
                                header("Location:CustomerDetails.php");
                                exit();
                            }else{

                            }
        }else{
                    echo 'Something went wrong. Please try after sometime.';

    }
    }else{
    echo 'Connection failed';
}
?>