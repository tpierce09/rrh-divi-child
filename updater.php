<?php

require 'inc/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/tpierce09/rrh-divi-child/',
    __FILE__,
    'rrh-divi-child'
);

$updateChecker->setBranch('main');