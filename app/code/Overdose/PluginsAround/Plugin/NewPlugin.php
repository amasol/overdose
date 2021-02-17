<?php
namespace Overdose\PluginsAround\Plugin;

class NewPlugin
{
    // первый аргумент это инстанс класа на который мы вешаем плагин
    // Closure $proceed - оригинальная фкнкцыя которую мы может вызвать.
    public function aroundGetText(\Overdose\LessonTwo\viewModel\LessonTwo $subject, \Closure $proceed, $arg1, $arg2)
    {
        $x = 5;

        //before plugin

        $originalFunctionResult = $proceed($arg1, $arg2);

        //after plugin

        return $originalFunctionResult;
//        $y = 3;

    }
}
