<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Log\Log;

/**
 * Simple console wrapper around Psy\Shell.
 */
class SampleShell extends Shell
{

    /**
     * Start the shell and interactive console.
     *
     * @return int|null
     */
    public function main(){
        LOG::info('OK!!!');
    }
}