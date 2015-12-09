<?php

class Numeros
{
    protected $a;
    protected $b;

    public function add($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

        return (int) ($this->a + $this->b);
    }

    public function divide($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

        return (int) ($this->a / $this->b);
    }

}

?>
