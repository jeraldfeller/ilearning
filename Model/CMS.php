<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/19/2017
 * Time: 2:39 PM
 */

class CMS {

    public $debug = TRUE;
    protected $db_pdo;


    public function getHeaderImage(){

        $pdo = $this->getPdo();
        $sql = 'SELECT * FROM `header_img` WHERE `id` = 1';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $content = $stmt->fetch(PDO::FETCH_ASSOC);
        return $content['img_src'];

    }



    public function getPdo()
    {
        if (!$this->db_pdo)
        {
            if ($this->debug)
            {
                $this->db_pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASS, array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING));
            }
            else
            {
                $this->db_pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASS);
            }
        }
        return $this->db_pdo;
    }

}