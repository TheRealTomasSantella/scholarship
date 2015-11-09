<div class="row">
	<div class="large-3 columns">
		<img src="<?php echo base_url()?>images/ah.png" alt="" height="50" width="150">
	</div>
</div>
<div class="row">
	<div class="large-4 large-offset-1 columns">
		&nbsp;
		<h2>Results: </h2>
	</div>
</div>
<div class="row">
	<div class="large-7 medium-offset-2 columns">
		<table>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>GENDER</th>
				<th>AGE</th>
				<th>TYPE OF SCHOOL</th>
				<th>SCHOLARSHIP PROGRAM</th>
				<th>UNIVERSITY</th>
				<th>DEGREE</th>
				<th>TASKS</th>
			</tr>
			<?php foreach($results as $row){?>
			<tr>
				<td><?php echo $row['scholarID']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['sex']?></td>
				<td><?php echo $row['age']?></td>
				<td><?php echo $row['scholarshipProgram']?></td>
				<td><?php echo $row['university']?></td>
				<td><?php echo $row['degree']?></td>
				<td><?php echo $row['contactNumber']?></td>
				<td><a href="/scholarship/change/<?php echo $row['scholarID']?>">Edit</a>,  <a href="/scholarship/remove/<?php echo $row['scholarID']?>">Remove</a>,  <a href="/scholarship/finance/<?php echo $row['scholarID']?>">View Finance</a></td>
			</tr>
			<?php }?>
		</table>
	</div>
</div>