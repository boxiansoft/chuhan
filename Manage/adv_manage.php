<?php require("usersession.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
 a{ text-decoration:none;
 color:#000000;}
 a:hover{ text-decoration:underline;}
-->
</style>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#666666">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">FLASH管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td colspan="6" height="10"></td></tr>
      <tr height="30">
        <td>缩略图</td><td>FLASH链接</td><td>添加时间</td><td>操作</td>
      </tr>
	  <?php
	  include("conn.php");
	  $sql="select * from adv order by id desc";
	  $query=mysql_query($sql,$conn);	  
	  while($row=mysql_fetch_array($query))
	  {
	  ?>
      <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'" height="55" style="font-size:16px;">
        <td><img src="../<?php echo $row['advPic']?>" width="50" height="50" border="0"/></td>
		
        <td><?php echo $row['advUrl']?></td>
		<td><?php echo $row['addTime']?></td>
        <td><a href="add_adv.php?action=updateAdv&id=<?php echo $row['id']?>">修改</a>&nbsp;|&nbsp;<a href="update_adv.php?action=deleteAdv&id=<?php echo $row['id']?>">删除</a></td>
      </tr>
	  <?php
	  }
	  mysql_close($conn);
	  ?>
    </table></td>
  </tr>
</table>
</body>
</html>
