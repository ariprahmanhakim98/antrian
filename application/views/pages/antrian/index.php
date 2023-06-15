<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- nantnya dinamis baik pas mcu atau di poli dokter view nya tetap ini -->
				<div class="text-center mt-3 mb-3">
					<h1>Panggil Antrian <i><?= $cek != null ? $cek->position : 'Null' ?></i></h1>
				</div>
			</div>
			<?php if($cek != null) : if($cek->level == 1) : ?>
			<?php 
				if($queue != null) : 
					foreach ($queue as $key) :
			?>
			<div class="col-sm-4">
				<div class="card m-1">
					<div class="text-center p-2">
						<div>ANTRIAN</div>
						<h1><?= substr($key->number_of_queue, -3)?></h1>
						<div>
							<tr>
								<td>Nama :</td>
								<td><?= $key->name ?></td>
							</tr>
						</div>
						<div>
							<tr>
								<td>Tujuan :</td>
								<td><?= $key->description ?></td>
							</tr>
						</div>
					</div>
				</div>
			</div>
			<?php 
				endforeach;
				endif; 
			?>

			<div class="col-sm-12">
				<div class="text-center mt-3 mb-3">
					<h1>Dalam Antrian</h1>
				</div>
			</div>
			<?php if($secq != null) : foreach($secq as $keyx): ?>
			<div class="col-sm-4 col-md-2">
				<div class="text-center border m-3">
					<div>ANTRIAN</div>
					<h3><?= substr($keyx->number_of_queue, -3) ?></h3>
				</div>
			</div>
			<?php 
				endforeach;
				endif; 
			?>
			<!-- <div class="col-sm-4 col-md-2">
				<div class="text-center border m-3">
					<div>ANTRIAN</div>
					<h3>B01</h3>
				</div>
			</div>
			<div class="col-sm-4 col-md-2">
				<div class="text-center border m-3">
					<div>ANTRIAN</div>
					<h3>B01</h3>
				</div>
			</div>
			<div class="col-sm-4 col-md-2">
				<div class="text-center border m-3">
					<div>ANTRIAN</div>
					<h3>B01</h3>
				</div>
			</div>
			<div class="col-sm-4 col-md-2">
				<div class="text-center border m-3">
					<div>ANTRIAN</div>
					<h3>B01</h3>
				</div>
			</div>
			<div class="col-sm-4 col-md-2">
				<div class="text-center border m-3">
					<div>ANTRIAN</div>
					<h3>B01</h3>
				</div>
			</div> -->
			<?php endif; endif; ?>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
