<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ldAMdQU' shared service.

return $this->privates['.service_locator.ldAMdQU'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['customReportRepository' => function (): \App\Repository\CustomReportRepository {
    return ($this->privates['App\\Repository\\CustomReportRepository'] ?? $this->load('getCustomReportRepositoryService.php'));
}, 'logger' => function () {
    return ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());
}, 'queue' => function () {
    return ($this->privates['aws.sqs'] ?? $this->load('getAws_SqsService.php'));
}]);
