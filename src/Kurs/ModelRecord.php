<?php

namespace Kurs;

class ModelRecord extends Db
{
    /**
     * Contains attributes for this class. Same as the column names for the database table
     *
     * @var array
     **/
    protected $_attributes;

    /**
     * Table-name that this class uses.
     *
     * @var string
     **/
    public static $tableName = "SET_TABLE_NAME";


    /**
     * Constructor
     *
     * @return void
     **/
    public function __construct()
    {
        parent::__construct();
        $this->_attributes = array();
    }


    /**
     * Magic getter class.
     *
     * @return value of the attribute if it exists.
     **/
    public function __get($name)
    {
        if(isset($this->_attributes[$name]))
        {
            return $this->_attributes[$name];
        }
        return false;
    }

    /**
     * Magic setter class.
     *
     * @return void
     **/
    public function __set($name, $value)
    {
        $this->_attributes[$name] = $value;
    }

    public function delete()
    {
        $statement = $this->connection->prepare("DELETE from " . static::$tableName . " where ID = :id");
        $statement->execute([
            ':id' => $this->id
        ]);
    }

    public static function fetchAll($limit = 100)
    {
        // ...
    }
}

?>