<?php

namespace sys\core;

use sys\core\database\Connection;

class Model
{
    public $conn;

    public function __construct()
    {
        $db = new Connection();
        $this->conn = $db->getConnection();
    }

    public function create($tableName, $insertWhat)
    {
        $sql = 'INSERT INTO ' . $tableName . '(';
        foreach ($insertWhat as $key => $value)
            $sql .= $key . ',';

        $sql = rtrim($sql, ',');
        $sql .= ')';
        $sql .= ' VALUES(';

        foreach ($insertWhat as $key => $value)
            $sql .= '\'' . $value . '\',';

        $sql = rtrim($sql, ',');
        $sql .= ')';

        $sql = $this->appendSemicolon($sql);

        $result = $this->conn->query($sql);
        if ($result)
            return $result;
        else
            return 'Error at MODEL/create';
    }

    public function read($tableName, $args, $whereArgs)
    {

        $sql = 'SELECT ';

        foreach ($args as $key => $value)
            $sql .= $value . ',';
        $sql = rtrim($sql, ',');
        $sql .= ' FROM ' . $tableName;

        if ($whereArgs)
            $sql = $this->where($sql, $whereArgs);

        $sql = $this->appendSemicolon($sql);
        $finale = array();

        $result = $this->conn->query($sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result))
                array_push($finale, $row);
            return $finale;
        } else
            return 'Error at MODEL/read';
    }

    public function update($tableName, $whatToSet, $whereArgs)
    {
        $sql = 'UPDATE ' . $tableName . ' SET ';
        foreach ($whatToSet as $key => $value)
            $sql .= $key . '=\'' . $value . '\',';
        $sql = rtrim($sql, ',');

        if ($whereArgs)
            $sql = $this->where($sql, $whereArgs);
        $sql = $this->appendSemicolon($sql);
        $result = $this->conn->query($sql);

        if ($result)
            return $result;
        else
            return 'Error at CJ_MODEL/update';
    }

    public function delete($tableName, $whereArgs)
    {
        $sql = 'DELETE FROM ' . $tableName;

        if ($whereArgs)
            $sql = $this->where($sql, $whereArgs);
        $sql = $this->appendSemicolon($sql);
        $result = $this->conn->query($sql);

        if ($result)
            return $result;
        else
            return 'Error at CJ_MODEL/delete';
    }

    public function where($sql, $whereArgs)
    {
        $sql .= ' WHERE ';

        foreach ($whereArgs as $key => $value)
            $sql .= $key . ' = \'' . $value . '\' AND ';
        $sql = rtrim($sql, 'AND ');

        return $sql;
    }

    public function appendSemicolon($sql)
    {
        if (substr($sql, -1) != ';')
            return $sql . ' ;';
    }
}
