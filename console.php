<?php

use Classes\InputParams\ArgvParser;
use Classes\Application;
use Classes\Output\ConsoleOutput;

require_once 'autoloader.php';

$argvParser = new ArgvParser;
$params = $argvParser->getInputParams();

$app = new Application($params);
$app->run(new ConsoleOutput);
