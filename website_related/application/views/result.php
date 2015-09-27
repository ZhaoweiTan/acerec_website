<script src="<?php echo ROOT_PATH?>topic-tree/js/tree.jquery.js"></script>
<script src="<?php echo ROOT_PATH?>topic-tree/js/topics.js"></script>

<?php error_reporting(E_ALL);?>

<link rel="stylesheet" href="<?php echo ROOT_PATH?>topic-tree/css/jqtree.css">
<div class="ace_result">
<div class="am-g am-g-fixed">
    <div class="am-g">
        <form class="am-form" action="<?php echo ROOT_FILE?>/result" method="get" name="searchform">
        <div class="am-u-sm-8">
            <input class="am-form-field" type="text" id="query1" name="q" value="<?php echo $keyword?>" autocomplete="off">
        </div>
        <div class="am-u-sm-4">
            <input class="am-btn am-btzfn-primary" value="Search" type="submit">
        </div>
        </form>
    </div>
    <div class="am-g ace_list  container">
        <div class="am-u-sm-8 ">

            <?php /////////////////////////////////若搜索为作者相关，此处为推荐作者//////////////////////////////////
            if (true)
            {
                $max_aut_score=array();
                $max_index=array();
                $aut_score=array();

                $search_num=1;
				/*
                for($i=0;$i<$search_num;$i++) {
                    for ($aut = 0; $aut < count($result['response']['docs'][$i]['author']); $aut++) {
                        $aut_score[$i] = $aut_score[$i] - $aut_score[$i];
                        for ($aut_letter = 0; $aut_letter < strlen($keyword); $aut_letter++) {
                            if ($result['response']['docs'][$i]['author'][$aut][$aut_letter] == $keyword[$aut_letter]) {
                                $aut_score[$i]++;
                            }
                        }
                        if ($aut_score[$i] > $max_aut_score[$i]) {
                            $max_aut_score[$i] = $aut_score[$i];
                            $max_index[$i] = $aut;
                        }
                    }
                }*/

                $this->load->helper('url');
                $flag = false;
                if(isset($result_for_author)&&$result_for_author['response']['numFound'] > 0)
                {
                    $flag = true;
                    echo "Do you want to find ";
                    echo " </br> Author: </br>";

					$str=array();
					foreach($result_for_author['response']['docs'] as $oc){
						$name=$oc['Name'][0];
						$str[]=anchor_popup('authorpage?id='.urlencode($name),$name, FALSE);
					}
					echo implode(', ',$str);
                    /*
                    for($i=0;$i<$search_num;$i++) {
                        $new_author = true;
                        for ($j = 0; $j < $i; $j++) {
                            if ($result['response']['docs'][$i]['author'][$max_index[$i]] == $result['response']['docs'][$j]['author'][$max_index[$j]]) {
                                $new_author = false;
                                break;
                            }
                        }
                        if ($new_author == true) {
                            $this->load->helper('url');
                            echo anchor_popup('authorpage',$keyword, FALSE);
                        }
                    }
                    */
                }
                if(isset($result_for_conference)&&$result_for_conference['response']['numFound'] > 0)
                {
                    if($flag == false)
                    {
                        echo "Do you want to find ";
                    }
                    echo "</br> Conference:</br>";
                    /*
                    for($i=0;$i<$search_num;$i++) {
                        $new_author = true;
                        for ($j = 0; $j < $i; $j++) {
                            if ($result['response']['docs'][$i]['author'][$max_index[$i]] == $result['response']['docs'][$j]['author'][$max_index[$j]]) {
                                $new_author = false;
                                break;
                            }
                        }
                        if ($new_author == true) {
                            $this->load->helper('url');
                            echo anchor_popup('conference', 'gy', FALSE);
                        }
                    }
                    
					*/
					$str=array();
					foreach($result_for_conference['response']['docs'] as $oc){
						$name=$oc['ShortName'][0];
						$str[]=anchor_popup('conference?id='.$name,$name, FALSE);
					}
					echo implode(', ',$str);
                }

                echo "<p></p>";
            }
            ?>
        </div>
        <?php ////////////////////////////////////page start/////////////////////////////////////////////////// 
		?>

        <div class="am-u-sm-8 left-col">

            <?php ////////////////view list start///////////////////////////
			?>
        <p>Found <?php echo $result['response']['numFound']?> results.</p>
        <?php foreach($result['response']['docs'] as $or):?>

            <?php //echo print_r($or)?><br>
            <a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=<?=$or['id']?>" class="ace_result_title">
			<?php foreach ($or['title'] as $tit):echo $tit; ?><?php endforeach;?></a><br>
            <span class="ace_result_source"><?php foreach ($or['conference'] as $cof):echo $cof; ?><?php endforeach;?></span><br>
            <span class="ace_result_author"><?php $str=implode(', ',$or['author']); echo $str;?></span><br>
            <!--<span class="ace_result_abstract"><?php foreach ($or['abstract'] as $abs):echo $abs;?><?php endforeach;?></span><br>-->

            <?php foreach ($or['ieeeTerms'] as $kw):?>
                <span class="am-badge am-badge-primary am-radius" name="keyword" kwid="<?=isset($ids[$kw])?$ids[$kw]:0?>">
                    <?php echo $kw?>
                </span>
            <?php endforeach;?><br>
        <hr>

        <?php endforeach;?>

        <p><?php echo $page_link ?></p>
        <?php ////////////////view list end/////////////////////////// 
		?>
        </div>

        <div class="am-u-sm-4">
            <div class="am-panel am-panel-default  pinned" >
                <div class="am-panel-hd"  >Topic Tree</div>
                <div id="tree1" class="ace_result_tree am-panel-bd"></div>
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
            <?php ////////////////////////////////////page end///////////////////////////////////////
			?>

    </div>
</div>
</div>

<script src="../../topic-tree/js/jquery.pin.js"></script>
<!--<script src="../../topic-tree/js/jquery-2.1.4.js"></script>-->
<script type="text/javascript">
    $(document).ready(function()
    {
        $(".pinned").pin({
            containerSelector: ".container"
        });
    })
</script>