<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wuQfapA' shared service.

return $this->privates['.service_locator.wuQfapA'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['queue' => function () {
    return ($this->privates['aws.sqs'] ?? $this->load('getAws_SqsService.php'));
}, 'stateGuideRepository' => function (): \App\Repository\StateGuideRepository {
    return ($this->privates['App\\Repository\\StateGuideRepository'] ?? $this->load('getStateGuideRepositoryService.php'));
}]);
