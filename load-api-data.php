<?php
if(file_exists('api/data.json')){
    $json_data = file_get_contents('api/data.json');
    $data_arr = json_decode($json_data,true);
    echo '<tr><td>DATA ID</td><td>NAME</td><td>AGE</td><td>PHONE</td><td>ADDRESS</td></tr>';
    foreach($data_arr as list('data_id'=>$data_id,'name'=>$name,'age'=>$age,'phone'=>$phone,'address'=>$address)){
        echo "<tr><td><a href='update-api-data.php?q=".$data_id."'>".$data_id."</td><td>".$name."</td><td>".$age."</td><td>".$phone."</td><td>".$address."</td></tr>";
    }
}else{
    echo '<tr><td colspan="4">FILE DOES NOT EXISTS</td></tr>';
}
?>