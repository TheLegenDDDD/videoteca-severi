<?php
require_once 'resources.php';
require_once 'vars.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


class Database {

    function __construct() {
        $conn = new mysqli(HOST, USER, PASSWORD, DB);
    }

    /**
     * @param string $resource
     * @param array $cleaned_GET
     *
     * @return string query completa
     */
    function prepare_query($resource, $cleaned_GET) {
        $query = "";

        return $query;
    }

    /**
     * @param $query
     *
     * @return array contenuto
     */
    function exec($query) {
        $result = [];

        return $result;
    }


}
