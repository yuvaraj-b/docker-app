<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'aws.s3' shared service.

include_once $this->targetDirs[3].'/vendor/aws/aws-sdk-php/src/S3/S3ClientInterface.php';
include_once $this->targetDirs[3].'/vendor/aws/aws-sdk-php/src/Api/Parser/PayloadParserTrait.php';
include_once $this->targetDirs[3].'/vendor/aws/aws-sdk-php/src/S3/S3ClientTrait.php';
include_once $this->targetDirs[3].'/vendor/aws/aws-sdk-php/src/S3/S3Client.php';

return $this->privates['aws.s3'] = ($this->privates['aws_sdk'] ?? $this->load('getAwsSdkService.php'))->createS3();
