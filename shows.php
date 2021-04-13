<?php

 $contents = json_decode(file_get_contents("data.json"), true);
 
$i=0;?>
<style>
table,th,tr,td{border: 1px solid;}
</style>
<table>
<tr><th>Name</th>
<th>Email</th>
<th>Employee Id</th>
<th>Phone</th>
<th> Address</th>
</tr>
<?php foreach($contents as $data){ ?>
<tr>
<td><?php echo $data['Name'] ;?></td>
<td><?php echo $data['Email'] ;?></td>
<td><?php echo $data['Employee_id'] ;?></td>
<td><?php echo $data['Phone'] ;?></td>
<td><?php echo $data['Address'] ;?></td>
</tr>
<?php $i++; }?>
<div class="id input">  <a href="index.php">Add Record</a></div>
<div class="id input"> <a href="delete.php">Delete Record</a></div>
</table>


