<?php
/**
 * Created by JetBrains PhpStorm.
 * User: amalyuhin
 * Date: 06.08.13
 * Time: 12:27
 * To change this template use File | Settings | File Templates.
 */

namespace Wealthbot\AdminBundle\Event;


use Wealthbot\UserBundle\Entity\User;
use Symfony\Component\EventDispatcher\Event;

class UserHistoryEvent extends Event
{
    private $user;
    private $description;

    public function __construct(User $user, $description)
    {
        $this->user = $user;
        $this->description = $description;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getDescription()
    {
        return $this->description;
    }
}