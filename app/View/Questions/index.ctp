<h1>List Questions</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Question</th>
		<th>Answer A</th>
		<th>Answer B</th>
		<th>Answer C</th>
		<th>Answer D</th>
		<th>Answer Key</th>
		<th>Level Id</th>
		<th>Subject Id</th>
	</tr>
	<?php foreach($questions as $question): ?>
	<tr>
		<td><?php echo $question['Question']['question_id']; ?></td>
		<td><?php echo $question['Question']['question_name']; ?></td>
		<td><?php echo $question['Question']['answer_a']; ?></td>
		<td><?php echo $question['Question']['answer_b']; ?></td>
		<td><?php echo $question['Question']['answer_c']; ?></td>
		<td><?php echo $question['Question']['answer_d']; ?></td>
		<td><?php echo $question['Question']['answer_k']; ?></td>
		<td><?php echo $question['Question']['level_id']; ?></td>
		<td><?php echo $question['Question']['subject_id']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
