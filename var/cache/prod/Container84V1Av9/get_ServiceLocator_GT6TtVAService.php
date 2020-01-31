<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GT6TtVA' shared service.

return $this->privates['.service_locator.GT6TtVA'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['queue' => function () {
    return ($this->privates['aws.sqs'] ?? $this->load('getAws_SqsService.php'));
}, 'taskRepository' => function (): \App\Repository\TaskRepository {
    return ($this->privates['App\\Repository\\TaskRepository'] ?? $this->load('getTaskRepositoryService.php'));
}]);