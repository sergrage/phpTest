<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		table, th, td {
		    border: 1px solid black;
		}
	</style>
</head>
<body>
	
	<table>
		<caption>TODOS LIST</caption>
		<thead>
			<tr>
				<th>id</th>
				<th>description</th>
				<th>completed</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($todos as $todo): ?>
				<tr>
					<td><?= $todo->id ?></td>
					<td><?= $todo->description ?></td>
					<td><?= $todo->completed ?></td>
				</tr>
		    <?php endforeach ?>
		</tbody>
	</table>
<hr>
	<form action="names" method="get">
		<label for="name">Name</label>	
		<input type="text" name="name">

		<button type="submit">Submit</button>

	</form>


</body>
</html>