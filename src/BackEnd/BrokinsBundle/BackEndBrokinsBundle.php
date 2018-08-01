<?php

namespace BackEnd\BrokinsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BackEndBrokinsBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }

}
