<?php

namespace Condors\TnMallBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CondorsTnMallBundle extends Bundle
{
    public function getParent() {
        return "FOSUserBundle";
    }
}
