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
    <!--    <link rel="stylesheet" href="../../css/AceMap.css">-->
    <link rel="stylesheet" href="../../css/login_test.css">
</head>


<body>

<!--<header class="am-topbar am-topbar-inverse">-->
<!--    <div class="am-g-fixed am-g">-->
<!--        <h1 class="am-topbar-brand">-->
<!--            <a href="#">-->
<!--                <span class="am-icon-university"></span>-->
<!--                AceMap-->
<!--            </a>-->
<!--        </h1>-->
<!---->
<!--        <div class="">-->
<!--            <ul class="am-nav am-nav-pills am-topbar-nav">-->
<!--                <li><a href="#">Get Started</a></li>-->
<!--                <li><a href="#">Topic List</a></li>-->
<!--                <li><a href="#">Result</a></li>-->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!--        <div class="am-topbar-right">-->
<!--            <ul class="am-nav am-nav-pills am-topbar-nav">-->
<!--                <li><a href="#">Help</a></li>-->
<!--                <li class="am-active"><a href="index.html">Login</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->

<!--WRAPPER-->
<!--<div id="wrapper"> -->

<!--SLIDE-IN ICONS-->
<!--<div class="user-icon"></div>
<div class="pass-icon"></div>-->
<!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="<?php echo ROOT_FILE?>/logResult" method="post">

    <!--HEADER-->
    <div class="header">
        <h1>Login Form</h1>
        <span>Fill out the form below to login.</span>
    </div>
    <!--END HEADER-->

    <!--CONTENT-->
    <div class="content">
        <div class="h1">Username</div>
        <input name="username" type="text" class="input username" onfocus="this.value=''" />
        <div class="h1">Password</div>
        <input name="password" type="password" class="input password" onfocus="this.value=''" />
    </div>
    <!--END CONTENT-->

    <!--FOOTER-->
    <div class="footer">
        <input type="submit" name="submit" value="Login" class="button" />
        <input type="button" name="submit" value="Register" onclick="location='<?php echo ROOT_FILE?>/register'" class="register" />
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

<!--GRADIENT-->
<div class="gradient"></div>
<!--END GRADIENT-->

<!--<footer class="ace-footer">-->
<!--    <div class="am-g am-g-fixed">-->
<!--        <div class="am-u-md-3 am-u-md-push-9">-->
<!--            <ul class="ace-social">-->
<!--                <li><a href="#"><span class="am-icon-qq"></span></a></li>-->
<!--                <li><a href="#"><span class="am-icon-weibo"></span></a></li>-->
<!--                <li><a href="#"><span class="am-icon-wechat"></span></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="am-u-md-9 am-u-md-pull-3">-->
<!--            <h2 class="ace-fd">-->
<!--                <span class="am-icon-university"> AceMap</span>-->
<!--            </h2>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="#">关于AceMap</a>-->
<!--                    | <a href="#">联系我们</a>-->
<!--                    | <a href="#">实现技术</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <p class="ace-cp">© copyright 2015 AceMap, Inc. Shanghai Jiaotong University.-->
<!--            </p></div>-->
<!--    </div>-->
<!--</footer>-->


</body>
</html>