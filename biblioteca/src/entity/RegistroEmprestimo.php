<?php

/**
 * Created by PhpStorm.
 * User: minkah
 * Date: 07/07/16
 * Time: 03:18
 */
class RegistroEmprestimo
{
    //Atributos
    private $id;
    private $nome;
    private $cpf;
    private $idLivro;
    private $dataRetirada;
    private $dataEntrega;
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
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getIdLivro()
    {
        return $this->idLivro;
    }

    /**
     * @param mixed $idLivro
     */
    public function setIdLivro($idLivro)
    {
        $this->idLivro = $idLivro;
    }

    /**
     * @return mixed
     */
    public function getDataRetirada()
    {
        return $this->dataRetirada;
    }

    /**
     * @param mixed $dataRetirada
     */
    public function setDataRetirada($dataRetirada)
    {
        $this->dataRetirada = $dataRetirada;
    }

    /**
     * @return mixed
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * @param mixed $dataEntrega
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;
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