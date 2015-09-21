<?php require("usersession.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<?php
include("conn.php");
$mysql="select * from contact where id=5";
$myquery=mysql_query($mysql,$conn);
$row=mysql_fetch_array($myquery);

?>
<table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px;font-size:16px; font-weight:bold; color:#FFFFFF">招聘信息</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><form id="systemNumber" name="systemNumber" action="UpdateSystem.php?action=zhaopin" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td colspan="2" height="10"></td></tr>
	  <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td align="right">招聘信息:</td>
        <td>
		<?php
		include("../FCKeditor/fckeditor.php") ;
		$oFCKeditor = new FCKeditor('content') ;//实例化
		$oFCKeditor->BasePath = '../FCKeditor/';//这个路径一定要和上面那个引入路径一致，否则会报错:找不到fckeditor.html页面
		$oFCKeditor->Value = $row['content'];
		$oFCKeditor->Width = '550' ; 
		$oFCKeditor->Height = '400' ; 
		$oFCKeditor->Create() ;
		?>
		</td>
      </tr>
	  <tr><td colspan="2" height="20"></td></tr>
	  <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td></td>
        <td class="siteName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit"  value="立即提交"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset"  value="重新填写"/></td>
      </tr>
    </table></form></td>
  </tr>
</table>
<?php

 mysql_close($conn);
 ?>
</body>
</html>
