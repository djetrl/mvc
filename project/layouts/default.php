<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/1804/project/webroot/styles.css">
		<title><?= $title ?></title> 
			<!-- выводим тайтл страницы --> 
	</head>
	<body>
		<header>
			хедер сайта
		</header>
		<div class="container">
			<aside class="sidebar left">
				левый сайдбар
			</aside>
			<main>
				<?= $content ?>
				<img src="\1804\project\webroot\на ките.jpg" alt="альтернативный текст">
			</main>
			<aside class="sidebar right">
				правый сайдбар
			</aside>
		</div>
		<footer>
			футер сайта
		</footer>
	</body>
</html>
