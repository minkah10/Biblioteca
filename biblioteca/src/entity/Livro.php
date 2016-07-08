<?php

/**
 * Created by PhpStorm.
 * User: minkah
 * Date: 07/07/16
 * Time: 03:16
 */

/**
 * @Entity
 * @Table(name=livro)
*/
class Livro
{
    //Atributos
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
    */
    private $id;

    /**
     * @Column(type=string)
     */
    private $nome;

    /**
     * @Column(type=string)
     */
    private $autor;

    /**
     * @Column(type=string)
     */
    private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}