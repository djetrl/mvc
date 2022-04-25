<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?= $page['id']; ?></td>
			<td><?= $page['name']; ?></td>
			<td><a href="1804/page/<?= $page['id']; ?>">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>