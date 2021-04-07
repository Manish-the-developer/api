<?php
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$data_id = $_POST['data_id'];
if(file_exists('api/data.json')){
    $jsondata = file_get_contents('api/data.json');
    $data_arr = json_decode($jsondata);
    $new_data_arr = array(
        "data_id"=>$data_id,
        "name"=>$name,
        "age"=>$age,
        "phone"=>$phone,
        "address"=>$address
    );
    $data_arr[] = $new_data_arr;
    $json_data = json_encode($data_arr,JSON_PRETTY_PRINT);
    if(file_put_contents('api/data.json',$json_data)){
        echo "<p>DATA INSERTED SUCCESSFULLY</p><a href='api/data.json'>See JSON File</a>";
    }else{
        echo "DATA CAN NOT BE INSERTED RIGHT NOW. PLEASE TRY AGAIN LATER";
    }
}else{
    echo "JSON FILE DOES NOT EXISTS !<br/>Create a json file manually and then try again";
}
?>