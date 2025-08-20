<?php

require_once 'bootstrap.inc.php';

use MinimalMark\MinimalMarkConverter;

// start with default configuration only allowing __em__ and urls
$converter = new MinimalMarkConverter();

echo $converter->convert(<<<EOT
    Das ist __kursiv__ und **fett**. Meine Hompage
    ist http://foo.bar/a__b__c.

    Sie sind Politiker*innen und Professor*innen.
    EOT) . "\n\n";

// allow **strong** as well
$config = [
    'minimalmark' => [
        'use_asterisk' => true,
        'use_underscore' => true,
    ],
];

$converter = new MinimalMarkConverter($config);

echo $converter->convert(<<<EOT
    Das ist __kursiv__ und **fett**. Meine Hompage
    ist http://foo.bar/a__b__c.

    Sie sind Politiker*innen und Professor*innen.
    EOT) . "\n\n";
