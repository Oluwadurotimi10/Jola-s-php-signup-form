<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>     
<body style = " background-color : <?php echo  $_SESSION['color']; ?> ">
    <?php
    echo '<h3 align ="center"><i> Hello '. $_SESSION['name'].' '. $_SESSION['sname']. ',</i></h3>';
    echo '<h3 align ="center"><i> Glad to have a member of the ' .$_SESSION["department"]. ' department signup .</i></h3>';
    echo '<h3 align ="center"><i> Your email address is '. $_SESSION['email'].'</i></h3>';
    echo '<h3 align ="center"><i> Your Date of birth is '. $_SESSION['DOB'].'.</i></h3>';
    echo '<h1 align ="center"><i> Enjoy the expereince! </i></h1>';
    session_destroy();
    ?>
</body>
</html>
