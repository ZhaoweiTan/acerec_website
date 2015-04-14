<?php
  $keyword = $_GET['q'];
  $result = file_get_contents("http://localhost:8983/solr/papers/select?q=".urlencode($keyword)."&wt=json&indent=true");
  //echo $result;
  $res = json_decode($result, true);
  echo "<div>";
  foreach($res['response']['docs'] as $r)
  {
    echo "<div>";
    echo $r['title'][0];
    echo "</div>";

    echo "<div>";
    echo $r['ieeeTerms'][0];
    echo "</div>";
    echo "</br>";
  }
  echo "</div>";
?>