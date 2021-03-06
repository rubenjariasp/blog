<?php


abstract class Models
{
    private static $db_host = 'localhost';
    private static $db_user = 'ruprosperi';
    private static $db_pass = 'ruben';
    private static $db_name = 'blog';
    private static $db_charset = 'UTF8';
    protected $conn;
    protected $query;
    protected $rows = [];

    private function db_open()
    {
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);

        $this->conn->set_charset(self::$db_charset);
    }

    private function db_close()
    {
        $this->conn->close();
    }

    protected function set_query()
    {
        $this->db_open();
        $this->conn->query($this->query);
        var_dump($this->conn->error);
        $this->db_close();

    }

    protected function get_query()
    {
        $this->db_open();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->db_close();
        return array_pop($this->rows);
    }
    abstract protected function set($array, $activity);
    abstract protected function get($data);
    abstract protected function del($data);
}
