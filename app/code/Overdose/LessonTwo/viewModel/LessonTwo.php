<?php

namespace Overdose\LessonTwo\viewModel;

class LessonTwo implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function iAmViewModel()
    {
        date_default_timezone_set('europe/kiev');
        $data = date("d-m-Y H:i:s");
        return $data;
    }

    public function getText($arg1, $arg2)
    {
//        throw new \Exception('test exception');

        return $arg1 . '|' . $arg2;
    }

    public function simpleTextToTheShell()
    {
        return "Simple text to the terminal";
    }
}
