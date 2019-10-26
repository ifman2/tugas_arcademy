
		<center><h1>List Data Belanja</h1></center><br>
		<table id="example1" class="table table-hover table-bordere"><br>
			<thead>
				<tr>
					<th>No.</th>
					<th>Cashier</th>
					<th>Nama</th>
					<th>Nama Category</th>
					<th>Price</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				include 'koneksi.php';
				$data=mysqli_query($db,"SELECT cashier.name, product.nama, category.name, product.price FROM cashier,product,category WHERE category.id=product.id_category AND product.id_cashier=cashier.id ORDER BY product.id DESC");
				$no=1;
				while ($row=mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?= $no; ?></td>
						<td><?=$row['0'];?></td>
						<td><?=$row['1'];?></td>
						<td><?=$row['2'];?></td>
						<td><?=$row['3'];?></td>
						
						
					</tr>
				<?php 
				$no++;
				}
				?>
		</tbody>
		</table>