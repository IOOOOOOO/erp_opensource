<?php
use yii\helpers\Html;
use yii\helpers\Url;
use eagle\modules\message\models\Message;

$this->title=$title;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
<!--
.jumbotron {
padding-top: 48px;
padding-bottom: 48px;
}
.jumbotron {
padding-top: 30px;
padding-bottom: 30px;
margin-bottom: 30px;
color: inherit;
background-color: #eee;
}
-->
</style>
<div class="jumbotron">
      <div class="container">
        <h1 class="text-left">授权成功!</h1>
        <p class="text-left"><?php echo isset($message)?$message:'';?></p>
        <p class="text-left"><a class="btn btn-success btn-lg" href="#" role="button" onclick='window.close()'> 关闭页面  </a>页面会在  <span id="time">5</span> 秒钟后关闭</p>
      </div>
    </div>
<script type="text/javascript">
setTimeout('window.close()',5000);
setInterval("showTime()","1000"); 
function showTime(){
	var time = document.getElementById("time");
	document.getElementById("time").innerHTML=time.innerHTML-1;
}
</script>