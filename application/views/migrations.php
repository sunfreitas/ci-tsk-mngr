<?php 
	/*echo '<pre>'; var_dump($migrations);
	echo '</pre>';*/
	foreach($migrations as $migration => $file):
?>
<p><?php echo "{$migration} :: {$file}"; ?></p>

<?php endforeach; ?>