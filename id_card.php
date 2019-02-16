<?php

$contact=  array(      
						
						'Prenom'=>'Junior Ciré',
					   'Nom'=>'BA',
					   'Tel'=>'77 842 73 00',
					   'Email'=>'juniorcireba@gmail.com',
					   'N° Carte Etudiant'=>'201708DEI',
					   'Profession'=>'Etudiant',
					   'Date de Naissance'=>'23/03/97',
					   'id Slack'=>'CireJr');

?>

<!DOCTYPE html>
	<html lang="fr">
	
		<head>
			<meta charset="UTF-8">
			<title>id_card</title>
		<style>
			table,tr,td,th{
				border: 2px solid;
				padding : 10px;
				border-radius: 10px 10px;
				font-size: 25px;
				text-decoration-color: white ;
				color: white;

			}
			body{
				background-color : black;
			}
		</style>

		</head>

		
		<body>
			<center style="padding-top: 8%;">
			
			<table>
				<th colspan="4"><a href="id_photo.jpeg"><img src="id_photo.jpeg" title="Cliquez pour agrandir" style="
    height: 200px;
    width: 170px;
    "/></a></th>
				<?php foreach ($contact as $key => $value): ?>
					<tr>
						<td><?php echo $key;?></td>
						<td><?php echo $value;?></td>	
					</tr>

				<?php endforeach ?>
			</table>
			</center>
		</body>
	
	</html>	

	