<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WJfzm_w' shared service.

return $this->privates['.service_locator.WJfzm_w'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['em' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());
}, 'formFactory' => function () {
    return ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php'));
}]);