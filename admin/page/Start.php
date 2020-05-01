<?php
$texts = "Space for Test Purpose";

echo "$texts<br>";


if(isset($_POST['submit-action'])){
    $vm_name = $_POST['vmname'];
    $action = $_POST['vm_action'];
    echo "<br>";
    echo "Machine Name : $vm_name<br>";
    echo "Action selected: $action<br>";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://prod-44.westeurope.logic.azure.com:443/workflows/f92b067f139d4e249855d2c89374b5e4/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=ZXGTyLxJc5eqW-mmcaugsRsWjBoN3BhZO9K8R3eqhmw');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"action\": \"$action\", \"vmname\": \"$vm_name\" }");


    $headers = array();
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

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