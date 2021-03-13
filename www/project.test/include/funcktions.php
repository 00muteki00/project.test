<?php

function get_lesson($db_link, $day)
    {
        $sql = "SELECT `day`, `first_less`, `second_less`, `third_less`, `fourth_less` FROM `rozklad` where `day`= '$day'";

        $result = mysqli_query($db_link, $sql);

        $lessons = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $lessons;

    }
?>