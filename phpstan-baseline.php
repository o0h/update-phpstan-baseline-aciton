<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Property O0h\\\\UpdatePhpstanBaselineAction\\\\Main\\:\\:\\$bar has no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Main.php',
];
$ignoreErrors[] = [
	'message' => '#^Property O0h\\\\UpdatePhpstanBaselineAction\\\\Main\\:\\:\\$bar is unused\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Main.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
