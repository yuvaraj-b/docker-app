<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'MsgPhp\User\Infra\Doctrine\Repository\RoleRepository' shared autowired service.

include_once $this->targetDirs[3].'/vendor/msgphp/user/Repository/RoleRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/msgphp/user/Infra/Doctrine/Repository/RoleRepository.php';

return $this->privates['MsgPhp\\User\\Infra\\Doctrine\\Repository\\RoleRepository'] = new \MsgPhp\User\Infra\Doctrine\Repository\RoleRepository('App\\Entity\\User\\Role', ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['MsgPhp\\Domain\\DomainIdentityHelper'] ?? $this->getDomainIdentityHelperService()));
