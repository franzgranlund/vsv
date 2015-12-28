<?php

require __DIR__ . '/../vendor/autoload.php';

echo "Hello World!\n";
$s = new Kurs\Math();
echo "addOne(2) returns: " . $s->addOne(2) . "\n";

foreach(Kurs\Db::fetchUsers() as $u)
{
    if(Kurs\User::isPalindrome($u))
    {
        echo $u->getName() . " is an palindrome.\n";
    }
    else
    {
        echo $u->getName() . " is not an palindrome.\n";
    }
}

$frassar = Kurs\Db::usersByName("Franz");
if(is_array($frassar)) {
    foreach($frassar as $f)
    {
        echo $f->getName() . " has id: " . $f->getId() . "\n";
    }
}

?>