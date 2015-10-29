<?php
/**
 * Nooku Platform - http://www.nooku.org/platform
 *
 * @copyright	Copyright (C) 2011 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/nooku/nooku-platform for the canonical source repository
 */

/**
 * Tag Controller Toolbar
 *
 * @author  Tom Janssens <http://github.com/tomjanssens>
 * @package Nooku\Component\Tags
 */
class ComTagsControllerToolbarTag extends ComKoowaControllerToolbarActionbar
{
    protected function _commandNew(KControllerToolbarCommandInterface $command)
    {
        $component = $this->getController()->getIdentifier()->package;
		    $view = KStringInflector::singularize($this->getIdentifier()->name);
		    $table = $this->getController()->getModel()->getState()->table;

        $command->href = 'component='.$component.'&view='.$view.'&table='.$table;
    }
}
