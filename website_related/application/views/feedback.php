
<div class=" ace_banner">
    <div class="am-g am-g-fixed" >

        <div class="fup"><span class="spantitle"><h1>Contact us</h1></span></div>

            <h5>
            </h5>

        <form name="contactForm" class="am-form am-form-horizontal" method="post" action="<?php echo ROOT_FILE?>/feedback/sendmail">

            <div class="am-form-group">
                <label for="doc-ipt-1" class="am-u-sm-2 am-form-label">Name *</label>
                <div class="am-u-sm-10">
                    <input name="q1" type="text" id="doc-ipt-1" placeholder="input your name">
                </div>
            </div>
<!--
            <div class="am-form-group">
                <label for="doc-ipt-2" class="am-u-sm-2 am-form-label">Phone No. *</label>
                <div class="am-u-sm-10">
                    <input name="q2" type="number" id="doc-ipt-2" placeholder="input your phone number">
                </div>
            </div>
-->
            <div class="am-form-group">
                <label for="doc-ipt-3" class="am-u-sm-2 am-form-label">Suburb</label>
                <div class="am-u-sm-10">
                    <input name="q3" type="text" id="doc-ipt-3" placeholder="input your address">
                </div>
            </div>

            <div class="am-form-group">
                <label for="doc-ipt-4" class="am-u-sm-2 am-form-label">Email *</label>
                <div class="am-u-sm-10">
                    <input name="email" type="email" id="doc-ipt-4" placeholder="input your email">
                </div>
            </div>

            <div class="am-form-inline" role="form">
                <div class="am-form-group">
                    <label for="doc-ta-1" class="am-u-sm-2 am-form-label">Message *</label>
                    <div class="am-u-sm-10">
                        <textarea name="q4" rows="5" cols="120" id="doc-ta-1" placeholder="leave your messages here"></textarea>
                    </div>
                </div>
            </div>

            <p></p>

            <div class="am-form-group">
                <div class="am-u-sm-10 am-u-sm-offset-2">
                    <button name="submit" type="submit" class="am-btn am-btn-default">Submit</button>
                    <button name="reset" type="reset" class="am-btn am-btn-default">Reset</button>
                </div>
            </div>

            <div class="am-form-group">
                <div class="am-u-sm-offset-2 am-u-sm-10">
                    <label style="color:red">
                        * Required
                    </label>
                </div>
            </div>
        </form>

    </div>
</div>
