<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $title?></title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/acerec.css">
    <link rel="stylesheet" href="/css/jquery.css">
    <!--[if (gte IE 9)|!(IE)]>    <script src = "http://code.jquery.com/jquery-1.10.2.js"></script><!-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/amazeui.js"></script>

    <script src = "/js/jquery-ui.js"></script>
    <script src = "/js/search.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
</head>
<body>
<style>
    .ui-autocomplete {
        max-height: 300px;
        max-width: 600px;
        overflow-y: auto;
        /* prevent horizontal scrollbar */
        overflow-x: auto;
    }
</style>
<header class="am-topbar am-topbar-inverse">
    <div class="am-g-fixed am-g">
        <h1 class="am-topbar-brand">
            <a href="<?php echo ROOT_FILE?>/">
                <span class="am-icon-university"></span>
                AceMap
            </a>
        </h1>

        <div class="">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li <?php if(isset($nav_title)&&$nav_title==1)echo 'class="am-active"'?>>
                    <a href="<?php echo ROOT_FILE?>/">Get Started</a>
                </li>
                <!--<li><a href="<?php echo ROOT_FILE?>/reference">Reference</a></li>
                <li <?php// if($nav_title==2)echo 'class="am-active"'?>><a href="#">Topic List</a></li>
                <li <?php// if($nav_title==3)echo 'class="am-active"'?>><a href="#">Result</a></li>
                -->
            </ul>

        </div>
        <div class="am-topbar-right">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <!--<li><a href="<?php echo ROOT_FILE?>/help">Help</a></li>-->
                <li <?php if(isset($nav_title)&&$nav_title==4)echo 'class="am-active"'?>
				><a href="<?php echo ROOT_FILE?>/feedback">Contact us</a></li>

                    <?php
                        session_start();
                        if(isset($_SESSION['log_status'])&&($_SESSION['log_status']==2)){
                            ?>

                                <li class="am-dropdown" data-am-dropdown>
                                    <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                                        Hello,
                                        <?php
                                        if(isset($_SESSION['username']))
                                        {echo $_SESSION['username'];}
                                        ?>
                                        <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content">
                                        <li class="am-active"><a href="<?php echo ROOT_FILE?>/logout">Logout</a></li>

                                    </ul>
                                </li>
                            <?php
                        }
                        else{
                            ?>
                            <li <?php if(isset($nav_title)&&$nav_title==5)echo 'class="am-active"'?>>
                                <a href="<?php echo ROOT_FILE?>/login">Login</a>
                            </li>
                        <?php
                        }

                    ?>



            </ul>
        </div>
    </div>
</header>
<div class="ace_page_container">
