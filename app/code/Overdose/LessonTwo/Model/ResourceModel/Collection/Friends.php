<?php
namespace Overdose\LessonTwo\Model\ResourceModel\Collection;

class Friends extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Overdose\LessonTwo\Model\Friends::class,
            \Overdose\LessonTwo\Model\ResourceModel\Friends::class
        );
    }
}
