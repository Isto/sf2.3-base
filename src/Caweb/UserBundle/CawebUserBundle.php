<?php

namespace Caweb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CawebUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
