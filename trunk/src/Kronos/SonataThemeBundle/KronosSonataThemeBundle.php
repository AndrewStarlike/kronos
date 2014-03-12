<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\SonataThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KronosSonataThemeBundle extends Bundle {

    public function getParent() {
        return 'SonataAdminBundle';
    }

}
