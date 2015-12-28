<?php

namespace Kurs;

class Math {
    public function addOne($num) {
        return $num + $this->one();
    }

    public function addTwo($num) {
        return $num + $this->one() + $this->one();
    }

    private function one() {
        return 1;
    }
}

?>