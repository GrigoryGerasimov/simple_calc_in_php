<?php declare(strict_types=1) ?>

<div>
    <?php
    $timestamp = new DateTime;
    echo "Last visited ".$timestamp->format("H:i:s d/M/Y");
    ?>
</div>