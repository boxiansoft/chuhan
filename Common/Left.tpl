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