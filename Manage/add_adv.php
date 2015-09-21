<?php require("usersession.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script language="javascript">
<!--
function UploadPic()
{
window.open('upLoadPic/upLoadPic.php','Upload'); 
}
-->
</script>

</head>

<body>
<?php
if($_GET['action']=="updateAdv")
{
include("conn.php");
$id=$_GET['id'];
$mySql="select * from adv where id='$id'";
$myQuery=mysql_query($mySql,$conn);
$row=mysql_fetch_array($myQuery);
if($row==false)
{
echo "<script language='javascript'>alert('没有您选择的项目！');window.location.href='adv_manguage.php';</script>";
}
else
{
?>
<table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666">
  <tr>
    <td style=" background-image:url(images/bg_list.gif);"><div style="margin-left:5px;height:30px; line-height:30px; vertical-align:middle;color:#ffffff;font-size:16px; text-align:center">修改FLASH</div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff"><form name="addFriend" id="addFriend" action="update_adv.php?action=update_adv&id=<?php echo $id?>" method="post"><table width="80%" border="0" cellspacing="0" cellpadding="0" align="center" height="100" style="font-size:18px">
      <tr>
        <td colspan="2" height="10">&nbsp;</td>
      </tr>
      
	  <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'">
        <td align="right">广告网址:</td>
        <td><input name="advUrl" type="text" size="46"  value="<?php echo $row['advUrl']?>"/></td>
      </tr>
	    <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td height="25" align="right">广告图片:</td>
        <td><input name="advpic" id="advpic"  type="text" size="30" value="<?php echo $row['advPic']?>"/>			 
<label style="cursor:hand" onClick="window.open('/uploadadv/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td>
      </tr>  
	  <tr>
        <td></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="立即修改"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" value="重新填写" /></td>
      </tr>
    </table></form></td>
  </tr>
</table>
<?php
mysql_close($conn);
}
 }
 else
 {
 ?>
 <table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666">
  <tr>
    <td style=" background-image:url(images/bg_list.gif);"><div style="margin-left:5px;height:30px; line-height:30px; vertical-align:middle;color:#ffffff;font-size:16px; text-align:left">添加FLASH</div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff"><form name="addFriend" id="addFriend" action="update_adv.php?action=add_adv" method="post"><table width="80%" border="0" cellspacing="0" cellpadding="0" align="center" height="100" style="font-size:18px">
      <tr>
        <td colspan="2" height="10">&nbsp;</td>
      </tr>
      <!--<tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'">
        <td align="right">广告名称:</td>
        <td><input name="advName" type="text" size="46" /></td>
      </tr>-->
	  <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'">
        <td align="right">广告网址:</td>
        <td><input name="advUrl" type="text" size="46" value="http://"/></td>
      </tr>
	  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td height="25" align="right">广告图片:</td>
        <td><input name="advpic" id="advpic"   type="text" size="30"/>			 
<label style="cursor:hand" onClick="window.open('/uploadadv/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td>
      </tr>
	  <!--<tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td height="30" align="right">广告位置:</td>
        <td>
		<div style="float:left;width:140px;">
		  <select style="width:130px" name="area">		       
		  <option>选择地区</option>					  
		  <option selected="selected" value="上海">上海</option>
		  <option value="北京">北京</option>			  
		  </select>
		  </div>
		<div style="float:left;width:140px;">
		  <select style="width:130px" name="advClass">		       
		  <option>选择广告位置</option>					  
		  <option selected="selected" value="Banner广告">Banner广告</option>
		  <option value="LOGO广告">LOGO广告</option>			  
		  </select>
		  </div>
		</td>
      </tr>
	  <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'">
        <td align="right">备&nbsp;&nbsp;&nbsp;&nbsp;注:</td>
        <td><textarea name="advContent" cols="46" rows="8"></textarea></td>
      </tr>-->
	  <tr>
        <td></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="立即添加"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" value="重新填写" /></td>
      </tr>
    </table></form></td>
  </tr>
</table>
<?php
}
?>
</body>
</html>
