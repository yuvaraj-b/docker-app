<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.console.class_context_element_factory' shared autowired service.

include_once $this->targetDirs[3].'/vendor/msgphp/domain/Infra/Console/Context/ClassContextElementFactoryInterface.php';
include_once $this->targetDirs[3].'/src/Console/ClassContextElementFactory.php';
include_once $this->targetDirs[3].'/vendor/msgphp/domain/Infra/Console/Context/ClassContextElementFactory.php';

return $this->privates['app.console.class_context_element_factory'] = new \App\Console\ClassContextElementFactory(new \MsgPhp\Domain\Infra\Console\Context\ClassContextElementFactory(), ($this->privates['MsgPhp\\User\\Infra\\Security\\PasswordHashing'] ?? $this->load('getPasswordHashingService.php')));
