<?php
/**
 * Created by PhpStorm.
 * User: minkah
 * Date: 07/07/16
 * Time: 04:37
 */
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
define('DB_SEVER', 'localhost:8000');
define('DB_NAME', 'biblioteca');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'senha');

class Conexao
{
    var $db, $conn;

    /**
     * Conexao constructor.
     * @param $server
     * @param $database
     * @param $username
     * @param $password
     */
    public function __construct($server, $database, $username, $password)
    {
        $this->conn = mysql_connect($server, $username, $password);
        $this->db = mysql_select_db($database, $this->conn);
    }
}