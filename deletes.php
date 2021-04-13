<?php
 $contents = json_decode(file_get_contents("data.json"), true);
    if(isset($_POST['submit'])){
 	$record = $_POST['record'];
	unset($contents[$record]); 
	file_put_contents('data.json', json_encode($json));
    }

?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<form method="post"action="">
<lable>Select Record </lable>

 <select name="record">
  <option>select </option>
	<?php foreach($contents as $key=>$data){ ?>
    	<option value="<?php echo $key;?>"><?php echo $data['Name'] ;?></option>
	<?php }?>
 </select>
 <input type="submit" name="submit" value="submit">
<div class="id input"><a href="show.php">Show Record</a></div>
<div class="id input"><a href="index.php">Add Record</a></div>
</form>
