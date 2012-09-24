<?php


class Connection {

    protected $link;

    /**
     * Connect to MYSQL
     * @param  String $host
     * @param  String $user
     * @param  String $password
     * @param  String $db
     * @return void
     */
    public function connect($host, $user, $password, $db) {

        $link = @mysql_connect($host, $user, $password);

        if (!$link) {
            throw new Exception('Could not connect to mysql server', 1100);
        }

        @mysq_select_db($db, $link);

        $this->link = $link;

    }

}