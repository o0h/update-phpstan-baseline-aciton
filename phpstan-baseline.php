<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Property O0h\\\\UpdatePhpstanBaselineAction\\\\Main\\:\\:\\$bar \\(array\\) does not accept default value of type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Main.php',
];
$ignoreErrors[] = [
	'message' => '#^Property O0h\\\\UpdatePhpstanBaselineAction\\\\Main\\:\\:\\$bar is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Main.php',
];
$ignoreErrors[] = [
	'message' => '#^Property O0h\\\\UpdatePhpstanBaselineAction\\\\Main\\:\\:\\$bar type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Main.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
