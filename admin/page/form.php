<?php

echo "
<html lang='it'>
    <body>
        <form action='?page=Start' target='_self' method='post'> 
            <label for='vm_name'>Machine Name</label><br>
            <input id='vm_name' name='vm_name' type='text' placeholder='insert machine name'>
            <input id='vm_start' type='radio' name='vm_action' value='startvm'>   
            <label for='vm_start'>Start</label>
            <input id='vm_stop' type='radio' name='vm_action' value='stopvm'>
            <label for='vm_stop'> Stop</label>
            <input type='submit' name='submit-action' value='Esegui'>
        
        </form>
    </body>
</html>
";