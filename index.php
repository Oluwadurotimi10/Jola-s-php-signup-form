<?php
//including session inorder to keep the data from this page
session_start(); 
include("form_output.php");
//setting the conditions for the next page to display            
if (isset($_POST["fname"]) && isset($_POST["email"]) && isset($_POST["DOB"]) && isset($_POST["favcolor"]) && isset($_POST["department"]) && isset($_POST["gender"]) && isset($_POST["password"]) ){
 if(!empty($_POST["fname"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["department"]) && !empty($_POST["DOB"]) && !empty($_POST["password"]) && !empty($_POST["favcolor"])){
     if(empty($fnameErr) && empty($emailErr) && empty($DOBErr) && empty($genderErr) && empty($deptErr) && empty($passErr) && empty($colorErr)){
     $_SESSION["name"] = $fname;
     $_SESSION["sname"] = $sname;
     $_SESSION["color"] = $favcolor;
     $_SESSION["email"] = $email;
     $_SESSION["DOB"] = $DOB;
     $_SESSION["gender"] = $gender;
     $_SESSION["department"] = $department; 
      header("Location:approved.php"); }  }  }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title> Signup Form</title>
        <link rel = "stylesheet" href = "form_style.css" type = "text/css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
    </head>
    <body>
        <h1  align ="center"><i> A Simple Signup Form</i></h1>
        <!-- <hr color = #f1d6a9 width="70px" /> -->
        <div class = "container">
        <p><span class = "error">* required field </span></p>
        <form class = "submission" name = "form" action = "<?= $_SERVER['PHP_SELF']; ?> " method = "POST">
            <label class = "texts" for = "fname">First Name:</label><br/>
            <input type = "text" id = "fname" name = "fname" placeholder = "first name" value = "<?php echo $fname ?>">
            <span class ="error">* <?php echo $fnameErr;?></span><br/><br/>
            <label class = "texts" for = "sname">Second Name:</label><br/>
            <input type = "text" id = "sname" name = "sname" placeholder = "second name" value = "<?php echo $sname ?>"><br/><br/>
            <label class = "texts" for = "email">Email:</label><br/>
            <input type = "text" id = "email" name = "email" placeholder = "email" value = "<?php echo $email ?>">
            <span class ="error">* <?php echo $emailErr;?></span><br/><br/>
            <label class = "texts" for = "DOB">Date Of Birth:</label><br/>
            <input type = "date" id = "DOB" name = "DOB" max = "2020-08-10" value = "<?php echo $DOB ?>">
            <span class ="error">* <?php echo $DOBErr;?></span><br/><br/>
            <label class = "texts" for = "favcolor">Favorite color:</label><br/>
            <input type = "color" id = "favcolor" name = "favcolor" value = "<?php echo $favcolor ?>">
            <span class ="error">* <?php echo $colorErr;?></span><br/><br/>
            <label class = "texts" for = "gender">Gender:</label><br/>
            <input type = "checkbox" id = "gender" name = "gender" value = "male">Male<br/>
            <input type = "checkbox" id = "gender" name = "gender" value = "female">Female<br/>
            <input type = "checkbox" id = "gender" name = "gender" value = "others">Others
            <span class ="error">* <?php echo  $genderErr;?></span><br/><br/>
            <label  class = "texts" for = "department">Department:</label><br/>
            <select id = "department" name = "department" >
                <option disabled selected value> --select an option --</option>
                <option value = "Engineering">Engineering</option>
                <option value ="IT">IT</option>
                <option value = "Human Resources">Human Resources</option>
                <option value = "Sales/Marketing">Sales/Marketing</option>
                <option value = "Administraton">Administraton</option>
            </select>
            <span class ="error">* <?php echo $deptErr;?></span><br/><br/>
            <label  class = "texts" for = "password">Password:</label><br/>
            <input class = "password_style" type = "password" name = "password"  >
            <span class ="error">* <?php echo $passErr;?></span><br/><br/>
            <input class = "submit_style" type = "submit" name = "submit" value = "Submit">
            <script type = "text/javascript">
            $(document).ready(function(){
                $('input:checkbox').click(function(){
                    $('input:checkbox').not(this).prop('checked',false);
                });
            });
            </script>
        </form>
        </div>
    </body>
</html>
