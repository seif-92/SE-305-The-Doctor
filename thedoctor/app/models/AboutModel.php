<?php
class AboutModel extends model{
public $title="About";

public function readAbout(){

    $this->dbh->query("SELECT * FROM about");
    return $this->dbh->resultSet();
    
    }

}
?>