<?php

namespace Overdose\LessonTwo\Plugin\Overdose\LessonTwo\Model\ResourceModel\Collection;

use Overdose\LessonTwo\Model\ResourceModel\LessonThree\Collection as LessonThreeCollection;

class LessonThree
{

    public function beforeLoad(LessonThreeCollection $subject, $printQuery = false, $logQuery = false)
    {
        $subject->addFieldToFilter('age', ['gt' => 18]);

        return [$printQuery, $logQuery];
    }

}
