<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
    <?php echo $content_for_layout; ?>
	<?php
		echo $this->fetch('script');
	?>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
