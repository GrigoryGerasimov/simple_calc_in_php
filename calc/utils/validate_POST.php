<?php
declare(strict_types=1);

function validate_POST(): bool {
    if (empty($_POST) || count($_POST) !== 3) return false;
    foreach($_POST as $value) {
        if ($value === "") return false;
    }
    return true;
}
?>