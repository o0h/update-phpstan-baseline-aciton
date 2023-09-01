<?php

$testFile = dirname(__DIR__) . '/test.txt';
file_put_contents($testFile, time());
