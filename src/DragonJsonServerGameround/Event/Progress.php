<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGameround
 */

namespace DragonJsonServerGameround\Event;

/**
 * Eventklasse für die Erhöhung des Fortschritts einer Spielrunde
 */
class Progress extends \Zend\EventManager\Event
{
	/**
	 * @var string
	 */
	protected $name = 'Progress';

    /**
     * Setzt die Spielrunde deren Forschritt erhöht wurde
     * @param \DragonJsonServerGameround\Entity\Gameround $gameround
     * @return Tickevent
     */
    public function setGameround(\DragonJsonServerGameround\Entity\Gameround $gameround)
    {
        $this->setParam('gameround', $gameround);
        return $this;
    }

    /**
     * Gibt die Spielrunde deren Forschritt erhöht wurde zurück
     * @return \DragonJsonServerGameround\Entity\Gameround
     */
    public function getGameround()
    {
        return $this->getParam('gameround');
    }
}
