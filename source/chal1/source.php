<?php

$contents = file_get_contents('./index.php');
$contents = preg_replace('/HKN\{.*?\}/', '[REDACTED]', $contents);
highlight_string($contents);