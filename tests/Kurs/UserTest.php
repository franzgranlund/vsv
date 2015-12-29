<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testId()
    {
        $u = new Kurs\User();
        $u->setId(1);
        $this->assertEquals(1, $u->getId());
    }

    public function testAsJson()
    {
        $u = new Kurs\User();
        $u->setId(1);
        $u->setName("Vsv");
        $this->assertEquals(1, $u->getId());
        $this->assertEquals("Vsv", $u->getName());

//        $this->assertEquals("{\"id\":1,\"name\":\"Vsv\"}", Kurs\User::asJson($u));
    }

    public function testPalindrome()
    {
        $u = new Kurs\User();
        $u->setName("Vsv");
        $this->assertTrue(Kurs\User::isPalindrome($u));

        $u->setName("Vsa");
        $this->assertFalse(Kurs\User::isPalindrome($u));
    }

    public function testDelete()
    {
        $all = Kurs\Db::fetchUsers();
        foreach($all as $u) {
            $u->delete();
        }
    }
}

?>