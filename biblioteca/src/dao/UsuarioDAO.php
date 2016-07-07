<?php

/**
 * Created by PhpStorm.
 * User: minkah
 * Date: 07/07/16
 * Time: 03:40
 */
class UsuarioDAO
{
    /**
     * Função para inserir dados na tabela
     * @param array $dados Array contendo os dados a serem inseridos
     * @param string $tabela tabela que será inserido os dados
     */
    public function insert($tabela, $dados) {
        foreach ($dados as $key => $value) {
            $keys[] = $key;
            $insertvalues[] = '\'' . $value . '\'';
        }
        $keys = implode(',', $keys);
        $insertvalues = implode(',', $insertvalues);
        $sql = "INSERT INTO $tabela ($keys) VALUES ($insertvalues)";
        return $this->executar($sql);
    }
}