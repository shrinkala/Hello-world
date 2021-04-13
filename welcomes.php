

<?php 
if(isset($_POST['show'])){die("++++++");}
if(isset($_POST['submit'])){
    if(file_exists('data.json')){
         $current_data = file_get_contents('data.json');
	$array_data = json_decode($current_data, true);

            
            $datae = array( 
               'Name' => $_POST['name'], 
                'Email' => $_POST['email'], 
                'Employee_id' => $_POST['employee_id'], 
		'Phone' => $_POST['phone'],
		'Address' => $_POST['address'],
            ); 

             $array_data[] = $datae;

            $final_data = json_encode($array_data); 

            if(file_put_contents('data.json', $final_data)){
                echo "Data added succesfully";

}else{
echo 'There is some error';
}
}} 
          
        
   
?> 
       
