<?php

namespace Source\Helper;

use Source\Utils\Enviroment;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static function createEntityManager(): ?EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(__DIR__ . "/../../src"),
            isDevMode: true
        );
        // or if you prefer yaml or XML
        // $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
        // $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

        // database configuration parameters
        Enviroment::addEnv();

        $conn = DriverManager::getConnection([
            'driver' => 'pdo_mysql',
            'dbname' => getenv('CONF_DB_NAME'),
            'host' => getenv('CONF_DB_HOST'),
            'user' => getenv('CONF_DB_USERNAME'),
            'password' => getenv('CONF_DB_PASSWORD')
        ], $config);


        // obtaining the entity manager
        return (new EntityManager($conn, $config));
    }
}
