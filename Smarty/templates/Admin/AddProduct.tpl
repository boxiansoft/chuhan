<{config_load file ="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">案例编辑</div></td>
  </tr>
  <tr>
    <td><form name="addFriend" id="addFriend" action="UpdateProduct.php?action=editProduct&productID=<{$productID}>" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr>
        <td height="25"  align="right">案例网址：</td>
        <td><input name="productUrl" type="text" size="60" value="<{$productUrl}>"/></td>
      </tr>
	  <tr>
        <td height="25" align="right">案例标题：</td>
        <td><input name="productTitle" type="text" size="60" value="<{$productTitle}>"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">案例排序：</td>
        <td><input name="productOrder" type="text" size="30" value="<{$productOrder}>"/><font style="color:#FF0000; font-size:12px;">注：默认状态是“1”；</font></td>
      </tr>
	  <!--<tr>
        <td height="25"  align="right">是否新品：</td>
        <td><{html_radios name="npID" options=$newProduct checked=$npID}></td>
      </tr>
	  <tr>
        <td height="25"  align="right">是否推荐：</td>
        <td><{html_radios name="tuijianID" options=$tuijian checked=$tjID}></td>
      </tr>
	  <tr>
        <td height="25"  align="right">产品类别：</td>
        <td>
			<select name="classID" style="width:150px;">
			/*<{foreach key=key item=item from=$classList}>
			<{if $item.id == $classID}>
			<option value="<{$item.id}>" selected="selected"><{$item.cnClassName}></option>
			/*<{else}>
			<option value="<{$item.id}>"><{$item.cnClassName}></option>
			/*<{/if}>
			<{/foreach}>*/
			</select>
		</td>
      </tr>-->
	  <tr>
        <td height="25"  align="right">细节图：</td>
        <td><input name="productPic" type="text" size="50" value="<{$productPic}>"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('uploadPro/index.html','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td>
      </tr>
	  <tr>
        <td height="25"  align="right">缩略图：</td>
        <td><input name="detailPic" type="text" size="50" value="<{$detailPic}>"/></td>
      </tr>
	  <!--<tr>
        <td height="25"  align="right">产品细节图：</td>
        <td><input name="productDetailPic" type="text" size="40" value="<{$productDetailPic}>"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('upload/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td>
      </tr>
	  <tr>
        <td height="25" align="right">产品详情：</td>
        <td><{$editor}></td><input type="hidden" name="FCKediter" value="<{$FCKediterValue}>" />
      </tr>-->
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
