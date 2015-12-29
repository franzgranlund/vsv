<?php

class DbTest extends \PHPUnit_Framework_TestCase {

    public function testFetchUsers()
    {
        $a = Kurs\Db::fetchUsers();
        foreach($a as $u) {
            $this->assertNotEmpty($u->getName());
        }

        $this->assertGreaterThan(1, $a);
    }
}

?>