<?php

namespace Tadcms\Notification\Notifications;

abstract class NotificationAbstract
{
    protected $notification;
    protected $users;
    /**
     * @param \Tadcms\Notification\Models\ManualNotification $notification
     * */
    public function __construct($notification)
    {
        $this->notification = $notification;
        $this->users = explode(',', $this->notification->users);
    }

    abstract public function handle();
}
