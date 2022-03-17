<?php
require_once '../../init.php';

class Common_Model_dbLink extends Application_Init
{
    private function dbLink()
    {
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
        $dbh = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . '', $this->userName, $this->password,
            $options);
    }
}

?>
