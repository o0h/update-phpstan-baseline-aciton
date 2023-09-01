<?php

$command = 'php ./vendor/bin/phpstan clear-result-cache && php ./vendor/bin/phpstan analyze --memory-limit=4G --generate-baseline=phpstan-baseline.php';
exec($command);
