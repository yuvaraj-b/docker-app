<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'MsgPhp\User\Infra\Doctrine\Repository\UserRoleRepository' shared autowired service.

include_once $this->targetDirs[3].'/vendor/msgphp/user/Repository/UserRoleRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/msgphp/user/Infra/Doctrine/Repository/UserRoleRepository.php';

return $this->privates['MsgPhp\\User\\Infra\\Doctrine\\Repository\\UserRoleRepository'] = new \MsgPhp\User\Infra\Doctrine\Repository\UserRoleRepository('App\\Entity\\User\\UserRole', ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['MsgPhp\\Domain\\DomainIdentityHelper'] ?? $this->getDomainIdentityHelperService()));
