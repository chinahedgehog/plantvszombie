<?php
class Mysql {
    static $pdo;
    public function __construct() {

        self::$pdo = new PDO(
            'mysql:host=127.0.0.1;dbname=zw',
            'zw',
            'zw'

        );
    }
    public function execute($sql) {
        return self::$pdo->exec($sql);
    }
    public function query($sql) {
        $rs = self::$pdo->query($sql);
        if (!$rs) return [];
        return $rs->fetchAll();
    }
    public function find($sql) {
        $rs = self::$pdo->query($sql);
        if (!$rs) return [];
        return $rs->fetchAll()[0];
    }
}