<?php

namespace Wepesi\App;

class TikiDemo
{
    public function index()
    {
        return 'hello world';
    }

    public function test(bool $isextension = false)
    {
        return !$isextension;
    }
}
