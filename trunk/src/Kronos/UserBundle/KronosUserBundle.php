<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KronosUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
