<?php
namespace Overdose\LessonTwo\Model;

class LessonThree extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Overdose\LessonTwo\Model\ResourceModel\LessonThree::class);
    }

    public function test()
    {
//        здесь будет что-то что мы будет вызывать через плагин
    }
}
