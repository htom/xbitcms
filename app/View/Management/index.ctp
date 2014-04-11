<?php echo $this->Html->css(array('style'), false, array('inline'=>false)); ?>

<body>
	<div class="header header-top">
		<div class="logo">
			test
		</div>
	</div>
	<div class="nav nav-side">
		<ul>
			<li><a href="#メニュー1">メニュー1</a></li>
			<li><a href="#メニュー2">メニュー2</a></li>
			<li><a href="#メニュー3">メニュー3</a></li>
			<li><a href="#メニュー4">メニュー4</a></li>
			<li><a href="#メニュー5">メニュー5</a></li>
		</ul>
	</div>
	<div class="contents">コンテンツ</div>
	<div class='footer footer-bottom'>フッター</div>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<?php echo $this->Html->script(array('xbit.js'), array('inline'=>false)); ?>
</body>
</html>