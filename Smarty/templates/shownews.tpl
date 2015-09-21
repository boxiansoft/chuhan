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
<div class="main980 f_n"><img src="images/005.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		
		<div class="commonLeft">
			<div class="recomNews">
				<div class="recomNewsTitle">热点新闻</div>
				<ul>
					<{section name = leftNews loop=$newsLeft}>
					<li><a href="shownews.php?newsID=<{$newsLeft[leftNews].id}>"><{$newsLeft[leftNews].title|truncate:"22":"..."}></a></li>
					<{/section}>
				</ul>
			</div>
			<div class="recomContact">
				<div class="recomContactTitle">联系我们</div>
				<div class="recomContactMemo">
					地址:上海市肇嘉浜路1065号飞雕国际大厦1109室<br/>
					电话:+86-21-31254360<br/>
					传真:+86-21-64230683<br/>
					E-mail:liubin123cn@126.com
				</div>
			</div>
		</div>
		
		<div class="commonRight">
			<div class="about">
				<div class="aboutTitle"><div class="aboutLeftTitle">新闻中心</div><div class="aboutRightTitle">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="about.php">新闻中心</a>>&nbsp;<a href="news.php?newsclass=<{$classID}>"><{$className}></a></div></div>
				
				<div class="newsTitle"><{$newsTitle}></div>
				<div class="newsAddTime"><{$newsAddTime}></div>
				<div class="newsDetail"><{$newDetail}></div>
			</div>
		</div>
	</div>
</div>
<{include file = "Common/Bottom.html" name="bottom"}>
</body>
</html>
