<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/7
 * Time: 16:23
 */

?>

<p>&nbsp;</p>

<div class="am-g am-g-fixed"  >
    <form name="contactForm" class="am-form am-form-horizontal ace-login" method="post" action="/user/logresult">

        <div class="fup">
            <h1>Log in</h1>
            <p>Fill out the form below to login. </p>
        </div>


        <div class="am-form-group">
            <label for="doc-ipt-1" class="am-u-sm-3 am-form-label">Username *</label>
            <div class="am-u-sm-9">
                <input name="username" type="text" id="doc-ipt-1" placeholder="input your Username">
            </div>
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-3" class="am-u-sm-3 am-form-label">Password *</label>
            <div class="am-u-sm-9">
                <input name="password" type="password" id="doc-ipt-3" placeholder="input your Password">
            </div>
        </div>


        <p></p>

        <div class="am-form-group">
            <div class="am-u-sm-10 am-u-sm-offset-3">
                <p style="color:red">
                    * Required
                </p>
                <button name="submit" type="submit" class="am-btn am-btn-primary">Submit</button>
                <a name="Register" type="Register" class="am-btn am-btn-default" href="/user/register">Sign up</a>

            </div>
        </div>
        <p>&nbsp;</p>

    </form>
</div>
