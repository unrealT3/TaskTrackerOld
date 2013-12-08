<?php

//grab objects
$objects = $this->objects;

?>

<div class="page-content">
    <?php
    if(isset($this->msg)){
        echo '<div class="msg">' . $this->msg . '</div>';
    }

    ?>

    <?php
    if($objects){?>

        <table cellspacing="10" borderspacing="8">
            <tr>
                <th>Task Name</th>
                <th>Task Details</th>
            </tr>
            <tr>
                <?php
                foreach($objects as $task){
                    echo '<tr>';
                    echo '<td>' . $task['task_name'] . '</td>';
                    echo '<td>' . $task['task_details'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tr>
        </table>

    <?php }



    echo '<a href="'.URL.'tasks/add"> Add Task </a>';


    ?>
</div>