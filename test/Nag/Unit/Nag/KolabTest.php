<?php
/**
 * Test the core Nag class with the Kolab backend.
 *
 * PHP version 5
 *
 * @category   Horde
 * @package    Nag
 * @subpackage UnitTests
 * @author     Gunnar Wrobel <wrobel@pardus.de>
 * @link       http://www.horde.org/apps/nag
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
 */

/**
 * Prepare the test setup.
 */
require_once dirname(__FILE__) . '/../../Autoload.php';

/**
 * Test the core Nag class with the Kolab backend.
 *
 * Copyright 2011 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (GPLv2). If you did not
 * receive this file, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * @category   Horde
 * @package    Nag
 * @subpackage UnitTests
 * @author     Gunnar Wrobel <wrobel@pardus.de>
 * @link       http://www.horde.org/apps/nag
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
 */
class Nag_Unit_Nag_KolabTest extends Nag_Unit_Nag_Base
{
    protected $backupGlobals = false;

    /**
     * The default share name expected to be used.
     *
     * @var string
     */
    protected $default_name = 'Tasks';

    public static function setUpBeforeClass()
    {
        self::$setup = new Horde_Test_Setup();
        parent::setUpBeforeClass();
        self::createKolabShares(self::$setup);
    }
}
