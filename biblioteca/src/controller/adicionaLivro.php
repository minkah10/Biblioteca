<?php
/**
 * Created by PhpStorm.
 * User: minkah
 * Date: 07/07/16
 * Time: 14:15
 */
/*
 * Fazendo o require do arquivo Bootstrap.php, podemos utilizar tudo que lá foi definido.
 * Estou falando principalmente do EntityManager, criado sobre a variável $entityManager
 */
require_once 'bootstrap.php';

/*
 *
 *  instanciando a entidade Categoria
 */
$livro = new Livro();

/*
 *
 * utilizando a função setNome
 * Defino o nome da categoria a ser criada no banco de dados
 */
$livro->setNome('As Cronicas de Gelo e Fogo - Game of Thrones');

/*
 *
 * Aqui o EM entra em ação.
 * A função persist aguarda por um objeto  para colocá-lo na fila
 * de instruções a ser executada sobre o banco de dados
 */
$entityManager->persist($livro);

/*
 *
 * Novamente o EM age e invoca a função flush.
 * Esta é a responsável por pegar todas as intruções previamente preparadas
 * pelo persist e executá-las no banco de dados.
 * Só a apartir daqui o banco é alterado de alguma forma.
 */
$entityManager->flush();

?>;
