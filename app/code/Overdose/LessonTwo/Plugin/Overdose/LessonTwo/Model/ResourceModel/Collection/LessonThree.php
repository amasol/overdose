<?php

namespace Overdose\LessonTwo\Plugin\Overdose\LessonTwo\Model\ResourceModel\Collection;

use Overdose\LessonTwo\Model\ResourceModel\Collection\LessonThree as LessonThreeCollection;

class LessonThree
{

    public function beforeLoad(LessonThreeCollection $collection, $printQuery = false, $logQuery = false)
    {
        $collection->addFieldToFilter('age', ['gt' > 18]);

        return [$printQuery, $logQuery];
    }

}