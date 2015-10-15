
<p>&nbsp;</p>
<div class="ace-login" style="text-align: center">
    <?php
    echo$_SESSION['info'];
    if($_SESSION['log_status']==2){
    ?>
        <a href="<?php echo ROOT_FILE?>/" class="am-btn am-btn-primary">
            Go back to the homepage.
        </a>
    <?php }
    if($_SESSION['log_status']==0||$_SESSION['log_status']==1){
        ?>
        <a href="<?php echo ROOT_FILE?>/user/loginpage" class="am-btn am-btn-primary">
            Go back to the login page.
        </a>
    <?php }
    ?>
    <p>&nbsp;</p>
</div>

