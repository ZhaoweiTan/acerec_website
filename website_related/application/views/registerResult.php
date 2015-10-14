
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Index | Academic Paper Recommendation</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <link rel="stylesheet" href="../../css/amazeui.min.css">
    <!--    <link rel="stylesheet" href="css/AceMap.css">-->
    <link rel="stylesheet" href="../../css/register_test.css">
</head>

<form name="Register-form" class="login-form" action="" method="post">

    <!--HEADER-->
    <div class="header" style="text-align: center">
        <?php


        if(isset($_SESSION['reg_status'])){
        if($_SESSION['reg_status']==0){//no username
        ?>
        <h1>Sorry!</h1>
        <h1>Your password confirmed is different from the password you input before!</h1>
    </div>
    <!--END HEADER-->

    <!--FOOTER-->
    <div class="footer">
        <a href="<?php echo ROOT_FILE?>/register">
            <input type="button" name="submit" value="Go back to the registration page."  class="button2" />
        </a>
    </div>
    <?php
    }
    elseif($_SESSION['reg_status']==1){//password is wrong
        ?>
        <h1>Sorry!</h1>
        <h1>There already exists this username!</h1>
    </div>
    <!--END HEADER-->

    <!--FOOTER-->
    <div class="footer">
        <a href="<?php echo ROOT_FILE?>/register">
            <input type="button" name="submit" value="Go back to the registration page."  class="button2" />
        </a>
    </div>
    <?php
    }
    elseif($_SESSION['reg_status']==3){
        ?>
                <h1>Sorry!</h1>
                <h1>There are some compulsory information you didn't give us!</h1>
    </div>
    <!--END HEADER-->

    <!--FOOTER-->
    <div class="footer">
        <a href="<?php echo ROOT_FILE?>/register">
            <input type="button" name="submit" value="Go back to the registration page."  class="button2" />
        </a>
    </div>
                <?php
        $_SESSION['logged']=1;
    }
    elseif($_SESSION['reg_status']==2){
        ?>
                <h1>Thank you!</h1>
                <h1>Welcome to Acemap!</h1>
    </div>
    <!--END HEADER-->

    <!--FOOTER-->
    <div class="footer">
        <a href="<?php echo ROOT_FILE?>/">
            <input type="button" name="submit" value="Go back to the main page."  class="button2" />
        </a>
    </div>
                <?php

    }

    }
    ?>
    <!--END FOOTER-->

</form>