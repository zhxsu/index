<?php
$token=$_GET['signtk'];
$u=$_SESSION['usrn'];
?>

<div>
<h2 style="color:#4fb4f7">执信学生会报名系统<span style="font-size:14px"> / 控制台 </span>
  <span class="version">α</span>
  &#12288;<a class="nav" href="SignAdmin_Profile.php?signtk=<?php echo $token."&u=".$u; ?>">重置密码</a>
  &#12288;<a class="nav" href="#">导出Excel</a>
  <span class="loginfo"><span class="perinfo"><?php echo($_SESSION['usrn']);?></span>，欢迎回来。
  <br>
  你现在查看的是<span class="perinfo"><?php echo($_SESSION['dep']);?></span>的报名数据
</span>
</h2>
</div>