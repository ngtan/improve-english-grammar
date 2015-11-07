<h2>Selection</h2>
<?php
	echo $this->Form->create();
?>
	<table>
		<?php
			$options = array();
			foreach ($levels as $key => $value) {
				$options[] = $value['Level']['level_name'];
			}

			foreach ($subjects as $key => $value) {
				echo "<tr>";
				echo "<td>";
				echo "<label>";
				echo $this->Form->checkbox($value['Subject']['subject_name']);
				echo $value['Subject']['subject_name'] . "</label>";
				echo "</td>";
				echo "<td>";
				echo $this->Form->select('level', $options, array('empty' => false, 'value' => '0'));
				echo "</td>";
				echo "<td>";
				echo $this->Form->input('quantity', array('placeholder' => 'Quantity', 'label' => false));
				echo "</td>";
				echo "</tr>";
			}
		?>
		<tr>
			<td colspan="3" style="text-align:center"><?php echo $this->Form->end('Submit'); ?></td>
		</tr>
	</table>
