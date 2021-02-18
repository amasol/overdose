<?php

namespace Overdose\LessonTwo\Observer;

use Magento\Framework\Event\ObserverInterface;

class ControllerActionDie implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
	    die("keke");
    }
}
