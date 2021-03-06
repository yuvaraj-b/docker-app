<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'MsgPhp\User\Infra\Console\Command\ChangeUserCredentialCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/msgphp/domain/Message/MessageReceivingInterface.php';
include_once $this->targetDirs[3].'/vendor/msgphp/domain/Message/MessageDispatchingTrait.php';
include_once $this->targetDirs[3].'/vendor/msgphp/user/Infra/Console/Command/UserCommand.php';
include_once $this->targetDirs[3].'/vendor/msgphp/user/Infra/Console/Command/ChangeUserCredentialCommand.php';
include_once $this->targetDirs[3].'/vendor/msgphp/domain/Infra/Console/Context/ContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/msgphp/domain/Infra/Console/Context/DoctrineEntityContextFactory.php';
include_once $this->targetDirs[3].'/vendor/msgphp/domain/Infra/Console/Context/ClassContextFactory.php';

$this->privates['MsgPhp\\User\\Infra\\Console\\Command\\ChangeUserCredentialCommand'] = $instance = new \MsgPhp\User\Infra\Console\Command\ChangeUserCredentialCommand(($this->privates['MsgPhp\\Domain\\Infra\\Doctrine\\EntityAwareFactory'] ?? $this->getEntityAwareFactoryService()), ($this->privates['MsgPhp\\Domain\\Message\\DomainMessageBus'] ?? $this->load('getDomainMessageBusService.php')), ($this->privates['MsgPhp\\User\\Infra\\Doctrine\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), new \MsgPhp\Domain\Infra\Console\Context\DoctrineEntityContextFactory(new \MsgPhp\Domain\Infra\Console\Context\ClassContextFactory('MsgPhp\\User\\Entity\\Credential\\EmailPassword', '__construct', $this->parameters['msgphp.domain.class_mapping'], 3, ($this->privates['app.console.class_context_element_factory'] ?? $this->load('getApp_Console_ClassContextElementFactoryService.php'))), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), 'MsgPhp\\User\\Entity\\Credential\\EmailPassword'));

$instance->setName('user:change-credential');

return $instance;
