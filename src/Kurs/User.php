<?php

namespace Kurs;

class User {
    protected $id;
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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