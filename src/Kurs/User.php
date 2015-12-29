<?php

namespace Kurs;

class User extends ModelRecord {
    protected $id;
    protected $name;

    public static $tableName = "users";

    public function setName($n)
    {
        $this->name = $n;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setId($i)
    {
        $this->id = $i;
    }

    public function getId()
    {
        return $this->id;
    }

    public static function asJson(User $u)
    {
        return json_encode(get_object_vars($u));
    }

    public static function isPalindrome(User $u)
    {
        return (strtolower($u->getName()) === strrev(strtolower($u->getName())));
    }

}

?>