<?php

//grab objects
$objects = $this->objects;

?>

<h1>Here are your current tasks</h1>

<?php
    echo '<ul>';
    foreach($objects as $task){
        echo '<li>' . $task['task_name'] . '</li>';
    }

?>