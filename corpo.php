<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="container-fluid">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class="row">
      <div class="col-sm-6" style="padding-top:10px;font-size: 15px;">
	  		<spam style="">Mapas Nacional</spam>
		  	<iframe width="600" height="440" 
				src="https://maps.google.com/maps?width=600&amp;height=440&amp;hl=en&amp;
				q=advogados%2C%20Brasil+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;
				output=embed" 
				frameborder="0" 
				scrolling="no" 
				marginheight="0" 
				marginwidth="0">
			</iframe>
			
	  </div>
      <div class="col-sm-6" style="padding-top:10px; font-size: 15px; ">
	  	<spam style="" >Lista de Advogados</spam>
			<table  cellspacing="10">
				<thead>
					<tr>
						<th>
							Advogado
						</th>
						<th>
							OAB
						</th>
						<th></th>
						<th>
							Area de Atuação
						</th>
					</tr>
				</thread>
				<tbody>
					<tr>
						<td> 
							<a href="./chatadvogado.php">Alex Jose</a>
						</td>
						<td> OAB-1234 </td>
						<td></td>
						<td> Imobiliario</td>
					</tr>
					<tr>
						<td> 
							<a href="./chatadvogado.php">
								Alexandre Silva 
							</a>
						</td>
						<td> OAB-5432 </td>
						<td></td>
						<td> Saúde</td>
					</tr>
					<tr>
						<td> 
							<a href="./chatadvogado.php">
								Paulo Jose 
							</a>
						</td>
						<td> OAB-1234 </td>
						<td></td>
						<td> Tributario </td>
					</tr>
					<tr>
						<td> 
							<a href="./chatadvogado.php">
								Alexandre Silva 
							</a>
						</td>
						<td> OAB-5432 </td>
						<td></td>
						<td> Civel </td>
					</tr>
					<tr>
						<td>
							<a href="./chatadvogado.php"> 
								Maria Jose 
							</a>
						</td>
						<td> OAB-1234 </td>
						<td></td>
						<td> Civel </td>
					</tr>
					<tr>
						<td> 
							<a href="./chatadvogado.php">
								Alexandre Silva 
							</a>
						</td>
						<td> OAB-5432 </td>

						<td> Civel </td>
					</tr>
				</tbody>
			</table>
		</div>
    </div>
    <br>
</div>

</body>
</html>
