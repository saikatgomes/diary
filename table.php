<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th><?php echo $tableColHr1;?></th>
      <th><?php echo $tableColHr2;?></th>
    </tr>
  </thead>
  <tbody>
	<?php 
		$rowCount = 0;
		foreach ($tableData as $aRow){
			$rowCount++;
			echo "<tr>";
				echo "<th scope=\"row\">".$rowCount."</th>";
				echo "<td>".$aRow[0]."</td>";
				echo "<td>".$aRow[1]."</td>";
			echo "</tr>";
		}
	?>
  </tbody>
</table>


