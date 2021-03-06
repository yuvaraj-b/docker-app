<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GK6npg9' shared service.

return $this->privates['.service_locator.GK6npg9'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['filewatcherRepository' => function (): \App\Repository\FileWatcherRepository {
    return ($this->privates['App\\Repository\\FileWatcherRepository'] ?? $this->load('getFileWatcherRepositoryService.php'));
}, 'queue' => function () {
    return ($this->privates['aws.sqs'] ?? $this->load('getAws_SqsService.php'));
}]);
