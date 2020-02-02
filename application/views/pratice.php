 <html>
 <head></head>
 <body>
 <table>
 <?php

 foreach ($result as $row){
 ?>
 	<tr>
		<td><?php echo $row->review_id?></td>
		<td><?php echo $row->review?></td>
		<td><?php echo $row->image?></td>
		<td><?php echo $row->title?></td>
		<td><?php echo $row->console?></td>
	</tr>
 <?php
 }
 var_dump($row);

 ?>

 </table>
 </body>
 </html>
