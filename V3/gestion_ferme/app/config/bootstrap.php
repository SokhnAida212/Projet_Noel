<?php
    require_once __DIR__ . '/../../vendor/autoload.php';

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $config = require_once __DIR__ . '/database.php';

    $isDevMode = true;
    $paths = [__DIR__ . '/../models']; 

    $doctrineConfig = Setup::createAttributeMetadataConfiguration($paths, $isDevMode); 

    $entityManager = EntityManager::create($config, $doctrineConfig);

    $loader = new FilesystemLoader(__DIR__ . '/../views');
    $twig = new Environment($loader, [
        'cache' => __DIR__ . '/../../storage/cache',
        'debug' => true,
    ]);

    return [
        'entityManager' => $entityManager,
        'twig' => $twig,
    ];
?>