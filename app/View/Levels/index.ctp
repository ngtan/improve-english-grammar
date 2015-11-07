<h1>List Levels</h1>
<table>
	<tr>
		<th>Level Id</th>
		<th>Level Name</th>
	</tr>
	<?php foreach($levels as $level): ?>
	<tr>
		<td><?php echo $level['Level']['level_id']; ?></td>
		<td><?php echo $level['Level']['level_name']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
