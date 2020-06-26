<?php
$page_title= "Schedulazione";
echo"<title> $page_title - $site</title>";
?>

<html lang='eng'>
<head>
    <div id="page-title" class="page-title title-left title-center"><h3><?php echo $page_title; ?></h3></div>
</head>
<div id="page-content" class="page-content">
    <body>
    <form action='?page=Start' target='_self' method='post'>

        <label for='vm_name'>Machine Name</label>
        <input id='vm_name' name='vm_name' type='text' placeholder='insert machine name'><br>
        <fieldset>
            <legend>Action</legend>
        <input id='vm_start' type='radio' name='vm_action' value='startvm'>
        <label for='vm_start'>Start</label>
        <input id="start_date" type="date" name="action_date">
        <input type="time" name="action_time">
        <br>
        <input id='vm_stop' type='radio' name='vm_action' value='stopvm'>
        <label for='vm_stop'> Stop</label>
        <input id="start_date" type="date" name="action_date">
        <input type="time" name="action_time">
        </fieldset>
        <div id="submit" class="submit">
        <input type='submit' name='submit-action' value='Esegui'>
        </div>
    </form>
    </body>
</div>
</html>
