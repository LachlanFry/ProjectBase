<?php
/**
 * Created by PhpStorm.
 * User: lachiefry
 * Date: 13/2/17
 * Time: 10:44 PM
 * Docs: https://github.com/FaaPz/Slim-PDO/tree/master/docs - For SQL framework
 */

class User extends \Slim\PDO\Database
{
    public function __construct($database)
    {
        $dsn = 'mysql:host=localhost;dbname='.$database.';charset=utf8';
        $usr = 'root';
        $pwd = '';
        $options = [];
        parent::__construct($dsn, $usr, $pwd, $options);
    }
    
}