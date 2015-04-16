<link rel="stylesheet" href="<?php echo ROOT_PATH?>/css/base.css">
<link rel="stylesheet" href="<?php echo ROOT_PATH?>/css/Icicle.css">
<script src="<?php echo ROOT_PATH?>/js/jit.js"></script>
<script src="<?php echo ROOT_PATH?>/js/icicle.js"></script>
<div class="am-g am-g-fixed">
    <div class="am-g">
        <form class="am-form" action="<?php echo ROOT_FILE?>/result" method="get" name="searchform">
        <div class="am-u-sm-8">
            <input class="am-form-field" type="text" name="q" value="<?php echo $keyword?>">
        </div>
        <div class="am-u-sm-4">
            <input class="am-btn am-btn-primary" value="Search" type="submit">
        </div>
        </form>
    </div>
    <div class="am-g ace_list">
        <div class="am-u-sm-3">

        <p>Found <?php echo $result['response']['numFound']?> results.</p>


<?php
        foreach($result['response']['docs'] as $or):?>
            <h3><a href="#"><?php echo $or['title'][0]?></a></h3>
            <?php
            foreach ($or['ieeeTerms'] as $kw):?>
                <p class="info"><?php echo $kw?></p>
            <p class="describe"></p>
        <?php endforeach;?>
        <?php endforeach;
        echo "<p>".$page_link."</p>"
?>

        </div>
        <div class="am-u-sm-9">
            <section class="am-panel am-panel-default">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">Topic tree</h3>
                </header>
                <div class="am-panel-bd">
                  <div id="container">

                  <div id="left-container">
                  <div class="text">

                    <div>
                      <label for="s-orientation">Orientation: </label>
                      <select name="s-orientation" id="s-orientation">
                        <option value="h" selected>horizontal</option>
                        <option value="v">vertical</option>
                      </select>
                      <br>
                      <div id="max-levels">
                      <label for="i-levels-to-show">Max levels: </label>
                      <select  id="i-levels-to-show" name="i-levels-to-show" style="width: 50px">
                        <option>all</option>
                        <option>1</option>
                        <option>2</option>
                        <option selected="selected">3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      </div>
                    </div>
                  </div>

                  <a id="update" href="#" class="theme button white">Go to Parent</a>

                  <div id="id-list"></div>

                  </div>

                  <div id="center-container">
                      <div id="infovis"></div>
                  </div>

                  <div id="right-container">

                  <div id="inner-details"></div>

                  </div>

                  <div id="log"></div>
                  </div>
                </div>
            </section>
        </div>
    </div>
</div>
