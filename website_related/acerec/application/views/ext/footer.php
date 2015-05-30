


<footer id="footer" class="ace-footer">
    <div class="am-g am-g-fixed">
        <div class="am-u-md-3 am-u-md-push-9">
            <ul class="ace-social">
                <!--
                <li><a href="#"><span class="am-icon-qq"></span></a></li>
                <li><a href="#"><span class="am-icon-weibo"></span></a></li>
                <li><a href="#"><span class="am-icon-wechat"></span></a></li>
                -->
            </ul>
        </div>
        <div class="am-u-md-9 am-u-md-pull-3">
            <h2 class="ace-fd">
                <span class="am-icon-university"> AceMap</span>
            </h2>
            <ul>
                <li>
                    <a href="<?php echo ROOT_FILE?>/about">About AceMap</a>
                    | <a href="<?php echo ROOT_FILE?>/contact">Contact Us</a>
                </li>
            </ul>
            <p class="ace-cp">© copyright 2015 Acemap, Inc. Shanghai Jiaotong University.
            </p></div>
    </div>
</footer>

<script type="text/javascript">
    // Window load event used just in case window height is dependant upon images
    $(window).bind("load", function() {
        var footerHeight = 0,
            footerTop = 0,
            $footer = $("#footer");
        positionFooter();
//定义positionFooter function
        function positionFooter() {
//取到div#footer高度
            footerHeight = $footer.height();
//div#footer离屏幕顶部的距离
            footerTop = ($(window).scrollTop()+$(window).height()-footerHeight-35)+"px";
            /* DEBUGGING STUFF
             console.log("Document height: ", $(document.body).height());
             console.log("Window height: ", $(window).height());
             console.log("Window scroll: ", $(window).scrollTop());
             console.log("Footer height: ", footerHeight);
             console.log("Footer top: ", footerTop);
             console.log("-----------")
             */
//如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
            if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                $footer.css({
                    position: "absolute"
                }).stop().animate({
                    top: footerTop
                });
            } else {
                $footer.css({
                    position: "static"
                });
            }
        }
        $(window).scroll(positionFooter).resize(positionFooter);
    });
</script>

</body>
</html>
