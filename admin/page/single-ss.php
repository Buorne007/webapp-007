<?php
$page_title= "Start & Stop Portal";
echo"<title> $page_title - $site</title>";
?>

<html lang='eng'>
<head>
    <div id="page-title" class="page-title title-left title-center"><h3><?php echo $page_title; ?></h3></div>
</head>
<div id="page-content" class="page-content">
    <body>
    <form class="form-horizontal">

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Machine Name</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="enter machine name" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="vm_action">Action</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="vm_action-0">
                            <input type="radio" name="vm_action" id="vm_action-0" value="startvm" checked="checked">
                            start vm
                        </label>
                    </div>
                    <div class="radio">
                        <label for="vm_action-1">
                            <input type="radio" name="vm_action" id="vm_action-1" value="stopvm">
                            stop vm
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Esegui</button>
                </div>
            </div>
    </form>

    <!--
        <form action='?page=Start' target='_self' method='post'>

                <label for='vm_name'>Machine Name:</label>
                <input id='vm_name' name='vm_name' type='text' placeholder='insert machine name'><br>
                <label for='vm_action'>Action:</label>
                <input id='vm_start' type='radio' name='vm_action' value='startvm'>
                <label for='vm_start'>Start</label>
                <input id='vm_stop' type='radio' name='vm_action' value='stopvm'>
                <label for='vm_stop'> Stop</label><br>
                <input type='submit' name='submit-action' value='Esegui'>

        </form>
    -->
    </body>
</div>
</html>