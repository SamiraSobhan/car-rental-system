<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        setcookie("loginStatus","",time()-20);
        setcookie("carId","",time()-20);
        unset($_SESSION["id"]);
        $_SESSION["sqlInsert"]="";
        unset($_SESSION["sqlInsert"]);
        $_SESSION["sqlError"]="";
        unset($_SESSION["sqlError"]);
        $_SESSION["valid"]="";
        unset($_SESSION["valid"]);
        $_SESSION["loginStatus"]="";
        unset($_SESSION["loginStatus"]);
        $_SESSION["userId"]="";
        unset($_SESSION["userId"]);
        $_SESSION["userName"]="";
        unset($_SESSION["userName"]);
        $_SESSION["userEmail"]="";
        unset($_SESSION["userEmail"]);
        $_SESSION["adminlogin"]="";
        unset($_SESSION["adminlogin"]);
        $_SESSION["clientlogin"]="";
        unset($_SESSION["clientlogin"]);
        $_SESSION["vehicleID"]="";
        unset($_SESSION["vehicleID"]);
        $_SESSION["vehicleCategory"]="";
        unset($_SESSION["vehicleCategory"]);
        $_SESSION["borrowID"]="";
        unset($_SESSION["borrowID"]);
        unset($_SESSION["userUpdateError"]);
        $_SESSION["checkBorrowID"]="";
        unset($_SESSION["checkBorrowID"]);
        $_SESSION["ckeckVehicleId"]="";
        unset($_SESSION["ckeckVehicleId"]);
        $_SESSION["updateId"]="";
        unset($_SESSION["updateId"]);
        header("Location: ..\..\project\displayFiles\landingPage.php");
    ?>
</body>
</html>