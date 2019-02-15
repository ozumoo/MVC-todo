<html>
	<head>
		<title>Todo</title>
		<link rel="stylesheet" href="/public/css/style.css">
	</head>
	<body>	

		<?php require 'views/partials/nav.php'; ?>

		<h1>Tasks</h1>

		<ul>
			<?php foreach ($tasks as $task) : ?> 
				<li>
					<?php if($task->completed) : ?>
						<strike><?= $task->description; ?></strike>
					<?php else: ?> 
						<?= $task->description; ?> 
					<?php endif; ?> 
				</li>
		    <?php endforeach; ?> 
		</ul>
	</body>
</html>
