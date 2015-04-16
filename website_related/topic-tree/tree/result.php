<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Icicle - Icicle Tree with static JSON data</title>

<!-- CSS Files -->
<link type="text/css" href="../css/base.css" rel="stylesheet" />
<link type="text/css" href="../css/Icicle.css" rel="stylesheet" />

<!--[if IE]><script language="javascript" type="text/javascript" src="../../Extras/excanvas.js"></script><![endif]-->

<!-- JIT Library File -->
<script language="javascript" type="text/javascript" src="../js/jit.js"></script>

<!-- Example File -->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" type="text/javascript" src="example1.js"></script>


</head>

<body>

</br>

<form action="result.php" method="get">
<input type="text" placeholder="Type in topic" name="q" >
<input type="submit">

</form>


</br>

<div id="container">

<div id="left-container">

<div class="text" style="text-decoration:underline; color:blue">

<?php
  $keyword = $_GET['q'];
  $result = file_get_contents("http://localhost:8983/solr/topics_ieee/select?q=".urlencode($keyword)."&wt=json&indent=true");
  //echo $result;
  $res = json_decode($result, true);
  foreach($res['response']['docs'] as $r)
  {
    echo "<div onclick= \"changeroot('Node".$r['id']."')\">";
    echo $r['name'][0];
    echo "</div>";
    echo "</br>";
  }
?>
</div>

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


<div style="text-align:center;"><a href="example1.js">See the Example Code</a></div>
</div>

<div id="center-container">
    <div id="infovis"></div>
</div>

<div id="right-container">

<div id="inner-details"></div>

</div>

<div id="log"></div>
</div>
</body>
</html>
