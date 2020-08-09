<?php
        // defining varaibles and setting them to empty values
      $fnameErr = $emailErr = $colorErr = $genderErr =  $deptErr = $DOBErr = $passErr = "";
      $fname = $sname =  $email = $favcolor = $gender =  $department = $DOB = $pass = $submit =  "";

     //checking if from is submitted and with post method
     if(isset($_POST["submit"])){
        if($_SERVER["REQUEST_METHOD"] == 'POST'){

        if(empty($_POST['fname'])){
            $fnameErr = "first name is required";
        }
        else{
            $fname = test_input($_POST['fname']);
            //check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z]*$/",$fname)){
            $fnameErr = "Only letters and whitespace allowed";
            } 
        }

        $sname = test_input($_POST['sname']) ;

        if(empty($_POST['gender'])){
            $genderErr = "Gender is required";
        }
        else{
            $gender = $_POST['gender'];
        }

        if(empty($_POST['email'])){
            $emailErr = "Email is required";
        }
        else{
            $email = test_input($_POST['email']);
            //check if email is valid
            $exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
            if(!preg_match($exp,$email)){
                $emailErr = "Your email format is invalid";
                } 
        }
        if(empty($_POST['DOB'])){
            $DOBErr = "Date of birth is required";
        }
        else{
            $DOB = $_POST['DOB'];
        }
        if(empty($_POST['favcolor'])){
            $colorErr = "Favorite color is required";
        }
        else{
            $favcolor = $_POST['favcolor'];
        }
        if(empty( $_POST['department'])){
            $deptErr = "Department is required";
        }
        else{
            $department = $_POST['department'];
        }
        if(empty($_POST['password'])){
            $passErr = "Password is required";
        }
        else{
            $pass = $_POST['password'];
            // checking if password is valid
            $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?([^\w\s]|[_])).{15,}$/";
            if(!preg_match($pattern, $pass)){
                $passErr = "The password must have at least one number, a special character, a lower and uppercase letter and a minimum of fifteen characters";
            }
        } 
            
    } }
    //function to enusre the data input is valid and secure        
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
            ?> 
