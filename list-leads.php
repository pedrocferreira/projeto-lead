<?php 
    $mysqli = new mysqli('localhost', 'root', '', 'lead') or die (mysqli_error($mysqli));
    $result = $mysqli -> query("select * from lead") or die($mysqli ->error);		

		

	

include ('header.php');

require_once 'process.php';
?>

<div class="container">
<div class="row justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Telefon</th>
				<th>Email </th>
				<th>Plataforma</th>
				<th>Data</th>

			</tr>
		</thead>

		<?php
		 while ($row = $result -> fetch_assoc()): ?>
		<tr>
			<td><?php echo $row['nome'] ?></td>
			<td><?php echo $row['telefone'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['plataforma'] ?></td>
			<td><?php echo $row['data'] ?></td>
			<td>
				<a href="list-leads.php?edit=<?php echo $row['id']; ?>" class="btn- btn-info">Edit</a>
				<a href="process.php?delete=<?php echo $row['id']; ?>" class="btn- btn-info">Delete</a>
			</td>


		</tr>
	<?php endwhile; ?>
		
	</table>
</div>



</div>