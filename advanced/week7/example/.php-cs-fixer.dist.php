<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('app/vendor');

$config = new PhpCsFixer\Config();
return $config->setRules(
    [
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ]
)
    ->setFinder($finder);
