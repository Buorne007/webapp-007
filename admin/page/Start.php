<?php
$texts = "Space for Test Purpose";

echo "$texts<br>";


if(isset($_POST['submit-action'])){
    $vm_name = $_POST['vmname'];
    $action = $_POST['vm_action'];
    echo "<br>";
    echo "Machine Name : $vm_name<br>";
    echo "Action selected: $action<br>";

    //define post url
   // original  $url = 'https://prod-44.westeurope.logic.azure.com:443/workflows/f92b067f139d4e249855d2c89374b5e4/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=ZXGTyLxJc5eqW-mmcaugsRsWjBoN3BhZO9K8R3eqhmw';
    $url = 'https://prod-109.westeurope.logic.azure.com:443/workflows/9601c497327a4d7e9a648d5150edddce/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=2XqP5QSkO9TJV-SOw64pDY0JI8RTIwWUWO4VqHI6bSY';
    //set post variable

    $data = array(
      "action" => "$action",
      "vmname" => "$vm_name"
    );

    //change data to URL json format for post
    $data_string = json_encode($data);

    //open connection
    $ch = curl_init($url);



    //set parameters
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
    );

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);
    echo $result;


} else{
    echo "No value sent";
}
/*
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://prod-44.westeurope.logic.azure.com:443/workflows/f92b067f139d4e249855d2c89374b5e4/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=ZXGTyLxJc5eqW-mmcaugsRsWjBoN3BhZO9K8R3eqhmw');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"action\": \"$action\"}");

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
*/