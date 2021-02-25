<?php
namespace Overdose\AdminPanel\Controller\Adminhtml\Index;

class Edit extends AbstractController
{
    public function execute()
    {
        $adminPage = $this->resultFactory->create('page');

        $adminPage->getConfig()->getTitle()->prepend(__('Friend form'));

        // TODO: Implement edit of existing record. OR of a new one, if there is no 'id' param in the url.
        // TODO: go see vendor/magento/module-cms/Controller/Adminhtml/Page/Edit.php::execute() for an example

        return $adminPage;
    }
}
