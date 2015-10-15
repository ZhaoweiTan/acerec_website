<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/7
 * Time: 16:23
 */

?>


<div class="am-g am-g-fixed" >
    <form name="contactForm" class="am-form am-form-horizontal ace-register" method="post" action="/user/registerresult">

        <div class="fup"><h1>Sign up</h1>
            <p>Fill out the form below to join us. </p>
        </div>


        <div class="am-form-group">
            <label for="doc-ipt-1" class="am-u-sm-3 ">Username *</label>
            <div class="am-u-sm-9">
                <input name="username" type="text" id="doc-ipt-1" placeholder="input your Username, 6-16 characters">
            </div>
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-2" class="am-u-sm-3 ">Password *</label>
            <div class="am-u-sm-9">
                <input name="password" type="password" id="doc-ipt-2">
            </div>
        </div>
        <div class="am-form-group">
            <label for="doc-ipt-3" class="am-u-sm-3 ">Email *</label>
            <div class="am-u-sm-9">
                <input name="email" type="text" id="doc-ipt-3" placeholder="That's important">
            </div>
        </div>
        <div class="fup">
            <p>To provide better service, we hope to know more about you</p>
        </div>

        <div class="am-form-group">
            <label  class="am-u-sm-3 ">Name </label>
            <div class="am-u-sm-9">
                <input name="name" type="text" placeholder="How to call you">
            </div>
        </div>
        <div class="am-form-group">
            <label  class="am-u-sm-3 ">institution </label>
            <div class="am-u-sm-9">
                <input name="institution" type="text" placeholder="Where are you from">
            </div>
        </div>
        <div class="am-form-group">
            <label  class="am-u-sm-3 ">Diploma </label>
            <div class="am-u-sm-9">
                <select data-am-selected name="diploma">
                    <option value="1" selected>Undergraduate</option>
                    <option value="2">Bachelor</option>
                    <option value="3">Master</option>
                    <option value="4">Doctor</option>
                </select>
            </div>
        </div>

        <div class="am-form-group">
            <div class="am-u-sm-10 am-u-sm-offset-3">
                <p style="color:red">
                    * Required
                </p>
                <button name="submit" type="submit" class="am-btn am-btn-primary">Submit</button>
                <button name="reset" type="reset" class="am-btn am-btn-default">Reset</button>

            </div>
        </div>
        <p>&nbsp;</p>

    </form>
</div>
