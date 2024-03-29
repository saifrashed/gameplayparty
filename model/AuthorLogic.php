<?php
require_once 'model/DataHandler.php';

/**
 * Class AuthorLogic
 *
 * Handles Author actions
 */
class AuthorLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    /**
     * Returns all page titles & content
     *
     * @return false|PDOStatement
     */
    public function getPages() {
        return $this->DataHandler->readsData('SELECT pagina_titel, pagina_content FROM paginas');
    }

    /**
     * Returns content of specified page
     *
     * @param $pageName
     * @return mixed
     */
    public function getContent($pageName) {
        $results = $this->DataHandler->readsData('SELECT pagina_content FROM paginas WHERE pagina_titel="' . $pageName . '"');
        return $results;
    }


    public function setContent($pageName, $content) {
        $sql='UPDATE paginas SET pagina_content='.$content.' WHERE pagina_titel="'.$pageName.'" ';
        $results= $this->DataHandler->readsData($sql);
        return $results;
    }

    /**
     * Gets navigation links for the pages
     */
    public function getPageLinks() {
        $result = $this->DataHandler->readsData('SELECT pagina_titel FROM paginas');
        $html   = '';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<li><a href="./?op=author&selectedPage=' . $row['pagina_titel'] . '">' . $row['pagina_titel'] . '</a></li>';
        }

        return $html;
    }
}

?>
