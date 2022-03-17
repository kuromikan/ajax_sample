<?php
require_once '../../common/model/dbLink.php';

class Ajaxsample_Model_Index extends Common_Model_dbLink
{
    protected $_dbh;

    private function dbLink()
    {
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
        $this->_dbh = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . '', $this->userName,
            $this->password,
            $options);
    }

    public function fetchAllByInput($inputText)
    {
        if ($inputText == '') {
            return array();
        }
        return [['id' => '1', 'filename' => 'f1']];
        $this->dbLink();
        $sql = "select * from `your_table` where `id` = \"" . $inputText . "\"";
        $data = $this->_dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}

?>
