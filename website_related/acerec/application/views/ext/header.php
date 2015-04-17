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

    <link rel="stylesheet" href="<?php echo ROOT_PATH?>/css/amazeui.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH?>/css/acerec.css">

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="<?php echo ROOT_PATH?>/js/jquery.min.js"></script>
    <script src="<?php echo ROOT_PATH?>/js/amazeui.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
</head>
<body>

<header class="am-topbar am-topbar-inverse">
    <div class="am-g-fixed am-g">
        <h1 class="am-topbar-brand">
            <a href="#">
                <span class="am-icon-university"></span>
                AceRec
            </a>
        </h1>

        <div class="">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li <?php if($nav_title==1)echo 'class="am-active"'?>>
                    <a href="<?php echo ROOT_FILE?>/">Get Started</a>
                </li>
                <li <?php if($nav_title==2)echo 'class="am-active"'?>><a href="#">Topic List</a></li>
                <li <?php if($nav_title==3)echo 'class="am-active"'?>><a href="#">Result</a></li>
            </ul>

        </div>
        <div class="am-topbar-right">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li><a href="#">Help</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</header>