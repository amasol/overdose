<?php
namespace Overdose\AdminPanel\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\App\Config\ScopeConfigInterface;
// с помощью интерфейса ScopeConfigInterface - мы может доставать данные с БД

abstract class AbstractController extends \Magento\Backend\App\Action
{
    const DEFAULT_ACTION_PATH = 'myadminroute/index/';

    public function __construct(
        Action\Context $context
        // TODO: Add your repository or model/resourceModel classes here
    ) {
        parent::__construct($context);
        // TODO: Assign them to the protected variable, so that child classes can access it
    }
}
