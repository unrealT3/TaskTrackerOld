<?php
//grab objects
$objects = $this->objects;
?>

<div class="page-content">
    <p>Here is your profile info</p>

    <div class="user-info">
        <?php

        foreach($objects as $user){
            echo '<div class="user-legend">Username: <div class="username">' . $user['username'] . '</div></div>';
            echo '<div class="user-legend">Email: <div class="email">' . $user['email'] . '</div></div>';
            echo '<div class="user-legend">First Name: <div class="first-name">' . $user['firstName'] . '</div></div>';
            echo '<div class="user-legend">Last Name: <div class="last-name">' . $user['lastName'] . '</div></div>';

        }
        ?>
    </div>

</div>