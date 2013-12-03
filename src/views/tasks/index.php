<?php

//grab objects
$objects = $this->objects;

?>



<?php
    if(isset($this->msg)){
        echo $this->msg;
    }

?>

<?php
    if($objects){?>

        <table>
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



    echo '<a href="tasks/add"> Add Task </a>';


?>