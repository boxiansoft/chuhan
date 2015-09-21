<{config_load file = "Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

<table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px;font-size:16px; font-weight:bold; color:#FFFFFF">首页参数设置</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><form id="systemNumber" name="systemNumber" action="UpdateSystem.php?action=updateSystem&systemID=<{$systemID}>" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td colspan="2" height="10"></td></tr>
      <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td width="29%" align="right" class="siteName">网站标题：</td>
        <td width="71%"><input name="webName" type="text" size="50" value="<{$webName}>"/></td>
      </tr>
	  <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td align="right" class="siteName">关键词优化：</td>
        <td><textarea name="keyWord" cols="50" rows="5"><{$webKeyWords}></textarea></td>
      </tr>
	  <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td align="right">描述优化：</td>
        <td><textarea name="description" cols="50" rows="8"><{$webDescription}></textarea></td>
      </tr>
	  <tr><td colspan="2" height="20"></td></tr>
	  <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td></td>
        <td class="siteName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit"  value="立即提交"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset"  value="重新填写"/></td>
      </tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
