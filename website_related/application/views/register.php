<div class="register" style="width: 40%;margin: 0px auto";>
<form class="am-form" method="post" action="<?php echo ROOT_FILE?>/registerResult">
    <fieldset>
        <legend>Register Form</legend>

        <div class="am-form-group">
            <label for="doc-ipt-username-1">Username *</label>
            <input name="username" type="text" class="" id="doc-ipt-username-1" placeholder="input your username">
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-email-1">Email *</label>
            <input name="email" type="email" class="" id="doc-ipt-email-1" placeholder="input your email">
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-pwd-1">Password *</label>
            <input name="password" type="password" class="" id="doc-ipt-pwd-1" placeholder="set your password">
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-pwd-2">Password Confirm *</label>
            <input name="password-confirm" type="password" class="" id="doc-ipt-pwd-2" placeholder="confirm your password">
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-pwd-2">Real Name *</label>
            <input name="name" type="text" class="" id="doc-ipt-name-1" placeholder="input your real name">
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-pwd-2">Profession *</label>
            </br>
            <label class="am-radio-inline">
                <input type="radio"  value="High School or Lower" name="diploma"> High School or Lower
            </label>
            <label class="am-radio-inline">
                <input type="radio" value="Bachelor" name="diploma"> Bachelor
            </label>
            <label class="am-radio-inline">
                <input type="radio" value="Master" name="diploma"> Master
            </label>
            <label class="am-radio-inline">
                <input type="radio" value="Phd" name="diploma"> Phd
            </label>
            <label class="am-radio-inline">
                <input type="radio" value="Professor" name="diploma"> Professor
            </label>
            <label class="am-radio-inline">
                <input type="radio" value="Worker" name="diploma"> Worker
            </label>


        </div>

        <p><button type="submit" class="am-btn am-btn-default">Submit</button></p>
    </fieldset>
</form>
</div>