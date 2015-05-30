<script src="<?php echo ROOT_PATH?>/../topic-tree/js/tree.jquery.js"></script>
<script src="<?php echo ROOT_PATH?>/../topic-tree/js/topics.js"></script>
<link rel="stylesheet" href="<?php echo ROOT_PATH?>/../topic-tree/css/jqtree.css">
<div class="am-g am-g-fixed">
    <div class="am-g">
        <form class="am-form" action="<?php echo ROOT_FILE?>/result" method="get" name="searchform">
        <div class="am-u-sm-8">
            <input class="am-form-field" type="text" name="q" value="<?php echo $keyword?>">
        </div>
        <div class="am-u-sm-4">
            <input class="am-btn am-btzfn-primary" value="Search" type="submit">
        </div>
        </form>
    </div>
    <div class="am-g ace_list">
        <div class="am-u-sm-8">

        <p>Found <?php echo $result['response']['numFound']?> results.</p>
        <?php foreach($result['response']['docs'] as $or):?>
            <?php //echo print_r($or)?><br>
            <a href="" class="ace_result_title"><?=$or['title'][0]?></a><br>
            <span class="ace_result_source"><?=$or['conference']?></span><br>
            <span class="ace_result_abstract"><?=$or['abstract']?></span><br>
            <?php foreach ($or['ieeeTerms'] as $kw):?>
                <span class="am-badge am-badge-primary am-radius" name="keyword" kwid="<?=isset($ids[$kw])?$ids[$kw]:0?>">
                    <?php echo $kw?>
                </span>
            <?php endforeach;?><br>
        <hr>

        <?php endforeach;?>

        <p><?php echo $page_link ?></p>
        <?php////////////////view list end/////////////////////////////////////////////?>

        </div>
        <div class="am-u-sm-4">
            <div class="am-panel am-panel-default" data-am-sticky="{top:40}">
                <div class="am-panel-hd"  >Topic Tree</div>
                <div id="tree1" class="ace_result_tree am-panel-bd"></div>
            </div>

        </div>
    </div>
</div>
<script>
    $(function() {
        $('#tree1').tree({
            data: topics
        });
    });
    $('[name=keyword]').click(
        function(){
            //node = $('#tree1').tree('getSelectedNode');
            //$('#tree1').tree('closeNode', node);
            $('#tree1').tree('loadData', topics);
            node = $('#tree1').tree('getNodeById', $(this).attr('kwid'));

            $('#tree1').tree('selectNode', node);
            $('#tree1').tree('scrollToNode', node);
        }
    );
</script>
