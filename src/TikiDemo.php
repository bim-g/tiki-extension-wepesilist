<?php

namespace Wepesi;

class TikiDemo
{
    public function home()
    {
        return 'hello world';
    }

    public function test(bool $isextension = false)
    {
        return !$isextension;
    }
}
