<style>
    .ui-autocomplete-category {
        font-weight: bold;
        font-family: Georgia;
        border: 0.5px solid #aaaaaa;
        line-height:1.5;
        padding-left:8px;
    }
    strong{
        font-size:14px;
        font-family:"Times New Roman";
    }
    small{
        font-size:2px;
        font-family:Times;
    }


    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-catcomplete {
        height: 300px;
    }
</style>

<div class="am-g am-g-fixed">
    <form class="am-form" action="<?php echo ROOT_FILE?>/result" method="get" name="searchform" id="searchForm" onsubmit="return checkform();">
        <div class="ace-main-search am-center">
            <h1 class="am-text-center">Academic Paper Recommendation</h1>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <input class="am-form-field"  type="text" id="query1" name="q" placeholder="Please input the author/paper you want">
                </div>
            </div>

            <div class="am-g btn-set">
                <div class="am-u-sm-3">&nbsp;</div>
                <div class="am-u-sm-3">
                    <a  class="am-btn am-btn-primary" name="submit" id="submit" value=""/>Search</a>

                </div>

                <div class="am-u-sm-3">
                    <a class="am-btn am-btn-default" style="width:180px">Advanced Search   </a>
                </div>
                <div class="am-u-sm-3">&nbsp;</div>
            </div>
            <div class="am-g ace-advance am-hide">
                <div class="am-u-sm-3">sha</div>
            </div>

        </div>

    </form>

    <div class="ace-browse am-g">
		<div class="ace-main-search am-center">
		<h2>What's new:</h2>
		
  <ul class="am-comments-list am-comments-list-flip">

   <li class="am-comment am-comment-primary"><a href="#link-to-user-home"><img src="http://upload.univs.cn/2013/0415/1366014328448.jpg" alt="" class="am-comment-avatar" width="48" height="48" /></a>
    <div class="am-comment-main">
     <header class="am-comment-hd">
      <div class="am-comment-meta">
       <time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2015-9-10</time>
      </div>
     </header>
     <div class="am-comment-bd">
      <p>
	  We launch the first version of AceMap.<br>
	You can check 
	<a href="http://acemap.sjtu.edu.cn/conf">acemap.sjtu.edu.cn/conf</a> and 
	<a href="http://acemap.sjtu.edu.cn/conf">acemap.sjtu.edu.cn/map</a> as two example pages.<br>
	Our next version will include the analysis of authors and conferences. Coming soon!
	  </p>
     </div>
    </div></li>
  
  </ul> 

		</div>
        <!--
        <div class="am-u-sm-12">
            <p>
                <strong>By Auther:</strong><br>
                <span class="am-badge am-badge-secondary">A</span>
                <span class="am-badge am-badge-secondary">B</span>
                <span class="am-badge am-badge-secondary">C</span>
                <span class="am-badge am-badge-secondary">D</span>
                <span class="am-badge am-badge-secondary">E</span>
                <span class="am-badge am-badge-secondary">F</span>
                <span class="am-badge am-badge-secondary">G</span>
                <span class="am-badge am-badge-secondary">H</span>
                <span class="am-badge am-badge-secondary">I</span>
                <span class="am-badge am-badge-secondary">J</span>
                <span class="am-badge am-badge-secondary">K</span>
                <span class="am-badge am-badge-secondary">L</span>
                <span class="am-badge am-badge-secondary">M</span>
                <span class="am-badge am-badge-secondary">N</span>
                <span class="am-badge am-badge-secondary">O</span>
                <span class="am-badge am-badge-secondary">P</span>
                <span class="am-badge am-badge-secondary">Q</span>
                <span class="am-badge am-badge-secondary">R</span>
                <span class="am-badge am-badge-secondary">S</span>
                <span class="am-badge am-badge-secondary">T</span>
                <span class="am-badge am-badge-secondary">U</span>
                <span class="am-badge am-badge-secondary">V</span>
                <span class="am-badge am-badge-secondary">W</span>
                <span class="am-badge am-badge-secondary">X</span>
                <span class="am-badge am-badge-secondary">Y</span>
                <span class="am-badge am-badge-secondary">Z</span>
            </p>
            <p>
                <strong>By Topic:</strong><br>
                <span class="am-badge am-badge-success">A</span>
                <span class="am-badge am-badge-success">B</span>
                <span class="am-badge am-badge-success">C</span>
                <span class="am-badge am-badge-success">D</span>
                <span class="am-badge am-badge-success">E</span>
                <span class="am-badge am-badge-success">F</span>
                <span class="am-badge am-badge-success">G</span>
                <span class="am-badge am-badge-success">H</span>
                <span class="am-badge am-badge-success">I</span>
                <span class="am-badge am-badge-success">J</span>
                <span class="am-badge am-badge-success">K</span>
                <span class="am-badge am-badge-success">L</span>
                <span class="am-badge am-badge-success">M</span>
                <span class="am-badge am-badge-success">N</span>
                <span class="am-badge am-badge-success">O</span>
                <span class="am-badge am-badge-success">P</span>
                <span class="am-badge am-badge-success">Q</span>
                <span class="am-badge am-badge-success">R</span>
                <span class="am-badge am-badge-success">S</span>
                <span class="am-badge am-badge-success">T</span>
                <span class="am-badge am-badge-success">U</span>
                <span class="am-badge am-badge-success">V</span>
                <span class="am-badge am-badge-success">W</span>
                <span class="am-badge am-badge-success">X</span>
                <span class="am-badge am-badge-success">Y</span>
                <span class="am-badge am-badge-success">Z</span>
            </p>
            <p>
                <strong>By Published Year:</strong><br>
                <span class="am-badge am-badge-warning">Before 1950</span>
                <span class="am-badge am-badge-warning">1950s</span>
                <span class="am-badge am-badge-warning">1960s</span>
                <span class="am-badge am-badge-warning">1970s</span>
                <span class="am-badge am-badge-warning">1980s</span>
                <span class="am-badge am-badge-warning">1990s</span>
                <span class="am-badge am-badge-warning">2000-2005</span>
                <span class="am-badge am-badge-warning">2006</span>
                <span class="am-badge am-badge-warning">2007</span>
                <span class="am-badge am-badge-warning">2008</span>
                <span class="am-badge am-badge-warning">2009</span>
                <span class="am-badge am-badge-warning">2010</span>
                <span class="am-badge am-badge-warning">2011</span>
                <span class="am-badge am-badge-warning">2012</span>
                <span class="am-badge am-badge-warning">2013</span>
                <span class="am-badge am-badge-warning">2014</span>
            </p>
        </div>-->
    </div>

    <!--<div class="am-g ace-index-panel">
        <div class="am-u-sm-4">
            <section class="am-panel am-panel-default">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">Statistics</h3>
                </header>
                <div class="am-panel-bd">
                    # of publications: 2,909,788<br>
                    # of authors: 1,537,934<br>
                    # of conferences: 3,759<br>
                    # of journals: 1,409<br>
                </div>
            </section>
        </div>
        <div class="am-u-sm-8">
            <section class="am-panel am-panel-default">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">Topic Display</h3>
                </header>
                <div class="am-panel-bd">
                    <p>&nbsp;</p>
                </div>
            </section>
        </div>
    </div>-->

</div>
<p>&nbsp;</p><p>&nbsp;</p>

<!--
<section class="ace-credits">
    <div class="am-g am-g-fixed credits-list">
        <div class="am-u-md-4">
            <h2><span class="am-icon-search"></span> Feature 1</h2>

            <p>
                The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick
                brown fox jumps over the lazy dog.
            </p>
        </div>
        <div class="am-u-md-4">
            <h2><span class="am-icon-tags"></span> Feature 2</h2>

            <p>
                The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
            </p>
        </div>
        <div class="am-u-md-4">
            <h2><span class="am-icon-share-alt"></span> Feature 3</h2>

            <p>
                The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick
                brown fox jumps over the lazy dog.
            </p>
        </div>
    </div>
</section>
-->
<script>
function trim(str){ //
	return str.replace(/(^\s*)|(\s*$)/g, "");
}

$('[name=submit]').click(
    function(){
		$('[name=searchform]').submit();
    }
);

function checkform(){
	var str=$('#query1').val();
	str=trim(str);
	if(str==''){
		alert('Please input some words');
		return false;
	}
	else return true;
}
   
</script>