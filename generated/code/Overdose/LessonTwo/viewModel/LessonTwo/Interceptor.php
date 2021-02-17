<?php
namespace Overdose\LessonTwo\viewModel\LessonTwo;

/**
 * Interceptor class for @see \Overdose\LessonTwo\viewModel\LessonTwo
 */
class Interceptor extends \Overdose\LessonTwo\viewModel\LessonTwo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getText($arg1, $arg2)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getText');
        if (!$pluginInfo) {
            return parent::getText($arg1, $arg2);
        } else {
            return $this->___callPlugins('getText', func_get_args(), $pluginInfo);
        }
    }
}
