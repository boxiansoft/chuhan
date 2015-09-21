<{config_load file="web.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="<{#keywords#}>" />
<meta http-equiv="description" content="<{#description#}>" />
<title><{#title#}></title>
<link media="screen" href="css/index.css" type="text/css" rel="stylesheet">
<script src="js/nav.js" type="text/javascript"></script>
<script src="js/Common.js" type="text/javascript"></script>
</head>

<body>
<{include file = "Common/Menu.html" name="menu"}>
<div class="main980 f_n"><img src="images/002.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		<div class="productTitle">
			<div class="productTitleLeft">案例展示</div>
			<div class="productTitleRight">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="example.php">案例展示</a>&nbsp;>&nbsp;<{$exampleName}></div>
		</div>
		
		<div class="example">
			<a href="<{$productUrl}>"><img src="upload/<{$productPic}>" border="0" alt="上海楚瀚——<{$exampleName}>" /></a>
		</div>
		
	</div>
</div>
<{include file = "Common/Bottom.html" name="bottom"}>
</body>
</html>
