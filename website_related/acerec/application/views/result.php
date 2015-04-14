<div class="am-g am-g-fixed">
<?php //print_r($result)?>
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


<?php //print_r($result);
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

                </div>
            </section>
        </div>
    </div>
</div>