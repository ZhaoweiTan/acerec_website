
<p>&nbsp;</p>
<div class="ace-login" style="text-align: center">
    <?php
    echo $_SESSION['info'];
    if($_SESSION['reg_status']==2){
        ?>
        <a href="<?php echo ROOT_FILE?>/user/loginpage" class="am-btn am-btn-primary">
            Go back to the login page.
        </a>
    <?php }
    if($_SESSION['reg_status']==0||$_SESSION['reg_status']==1||$_SESSION['reg_status']==3){
        ?>
        <a href="<?php echo ROOT_FILE?>/user/register" class="am-btn am-btn-primary">
            Go back to the sign up page.
        </a>
    <?php }
    ?>
    <p>&nbsp;</p>
</div>
