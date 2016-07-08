<?php
/**
 * Created by PhpStorm.
 * User: minkah
 * Date: 07/07/16
 * Time: 13:27
 */
// o Autoload é responsável por carregar as classes sem necessidade de incluí-las previamente
require_once "vendor_autoload.php";

// o Doctrine utiliza namespaces em sua estrutura, por isto estes uses
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//onde irão ficar as entidades do projeto? Defina o caminho aqui
$entidades = array("src/entity");
$isDevMode = true;

// configurações de conexão. Coloque aqui os seus dados
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'senha',
    'dbname'   => 'biblioteca',
);

//setando as configurações definidas anteriormente
$config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);

//criando o Entity Manager com base nas configurações de dev e banco de dados
$entityManager = EntityManager::create($dbParams, $config);
?>;