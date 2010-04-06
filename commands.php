<?php
/**
 * Copyright 2010 Cyrille Mahieux
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations
 * under the License.
 *
 * ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°>
 *
 * Executing commands
 *
 * @author c.mahieux@of2m.fr
 * @since 06/04/2010
 */

# Headers
header('Content-type: text/html; charset=UTF-8');
header('Cache-Control: no-cache, must-revalidate');

# Require
require_once 'library/commands/ICommands.php';
require_once 'library/commands/Factory.php';
require_once 'library/Configuration.php';

# Date timezone
date_default_timezone_set('Europe/Paris');

# Loading ini file
$_ini = MemCacheAdmin_Configuration::getInstance();

# Initializing requests
$request = null;

# Showing Header
include 'view/header.tpl';
include 'view/commands/menu.tpl';

# Display by Request Type
switch($request)
{
        # Default : Show all commands available
    default :
        include 'view/commands/commands.tpl';
        break;
}
# Showing Footer
include 'view/footer.tpl';