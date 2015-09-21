<{config_load file="Web.conf"}>
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
<div class="main980 f_n"><img src="images/index.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>
<div class="main980 f_n">
	<div class="indexCenter">
		<div class="indexLeft">
			<div class="indexAbout ">
				<div class="indexAboutTitle"><span>公司简介</span></div>
				<div class="index_about_content"><img src="images/about.jpg" width="200" height="148" border="0" align="left" alt=""/>
					<{$about}>
				</div>
			</div>
		</div>			
		<div class="indexRight">
			<div class="indexRightTitle">新闻资讯</div>
			<ul>
			<{section name=p1 loop=$newsList}>
				<li class="indexNewsTitle"><a href="shownews.php?id=<{$newsList[p1].id}>"><{$newsList[p1].title|truncate:23:"..."}></a></li><li class="indexNewsTime"><{$newsList[p1].addTime}></li>
			<{/section}>
			</ul>
		</div>
	</div>
</div>
<div class="main980 f_n">
	<div class="indexBottomPic">
		<div id="productshow" style="overflow:hidden;height:130px;width:980px;">
			 <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" cellspace="0">
				<tr>
				  <td valign="top" id="productshow1">
				  	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" cellspace="0">
                  		<tbody>
                    		<tr>
							<{section  name=p1 loop=$productList}>
					            <td valign="bottom"><ul><li><a href="showexample.php?id=<{$productList[p1].id}>"><img src="upload/<{$productList[p1].detailPic}>" width="280" height="117" border="0" /></li><li><{$productList[p1].title}></li></ul></td>
							<{/section}>
							</tr>
						</tbody>
					</table>				  	
				 </td>
				 <td id="productshow2" valign="top"></td>
			    </tr>
			</table>
		</div>
		<script type="text/javascript" language="javascript">
			var speedProduct=15;
			scrollltr=true;
			productshow2.innerHTML=productshow1.innerHTML;
			
			function scrollDirection(ltr)
			{
			 scrollltr = ltr;
			}
			
			function MarqueeProduct(){ 
			if(scrollltr)
			 {
				if(productshow2.offsetWidth-productshow.scrollLeft<=0) 
				productshow.scrollLeft-=productshow1.offsetWidth 
				else{ 
					productshow.scrollLeft++ 
				}
			 }
			 else
			 {
				if(productshow.scrollLeft<=0) 
					productshow.scrollLeft+=productshow2.offsetWidth 
				else{ 
					productshow.scrollLeft-- 
				}
			 } 
			
			} 
			var MyMarProduct=setInterval(MarqueeProduct,speedProduct) 
			productshow.onmouseover=function() {clearInterval(MyMarProduct)} 
			productshow.onmouseout=function() {MyMarProduct=setInterval(MarqueeProduct,speedProduct)} 
		</script>
	</div>
</div>
<{include file = "Common/Bottom.html" name="bottom"}>
</body>
</html>
