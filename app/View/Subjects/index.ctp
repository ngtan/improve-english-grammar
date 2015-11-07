<h1>List Subjects</h1>
<table>
	<tr>
		<th>Subject Id</th>
		<th>Subject Name</th>
	</tr>
	<?php foreach($subjects as $subject): ?>
	<tr>
		<td><?php echo $subject['Subject']['subject_id']; ?></td>
		<td><?php echo $subject['Subject']['subject_name']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
