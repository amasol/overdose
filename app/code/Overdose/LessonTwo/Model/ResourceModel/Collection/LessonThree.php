<?php
namespace Overdose\LessonTwo\Model\ResourceModel\Collection;

class LessonThree extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Overdose\LessonTwo\Model\LessonThree::class,
            \Overdose\LessonTwo\Model\ResourceModel\LessonThree::class
        );
    }
}
