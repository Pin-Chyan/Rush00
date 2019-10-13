<?php

    function valid_number($nb) {
        return (isset($nb) and preg_match('/\d\d\d)(-)?\d\d\d(-)?\d\d\d\d/', $nb));
    }

    function pass_match ($pass01, $pass02) {
        if (!isset($pass01) or !isset($pass02))
            return false;
        return ($pass01 === $pass02);
    }

    function valid_email ($email) {
        return ($email and preg_match('/[^@]+@[^\.]+\..+/',$email));
    }
?>