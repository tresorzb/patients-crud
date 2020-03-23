<?php

    function test_input($data)  {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function isPhone($phone) {
        return preg_match("/^[0-9 ]*$/",$phone);
    }

?>
