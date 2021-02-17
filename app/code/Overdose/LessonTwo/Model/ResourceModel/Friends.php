<?php
namespace Overdose\LessonTwo\Model\ResourceModel;

class Friends extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('overdose_lesson_one', 'id');
    }
}
