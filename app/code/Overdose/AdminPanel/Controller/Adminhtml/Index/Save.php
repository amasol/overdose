<?php
namespace Overdose\AdminPanel\Controller\Adminhtml\Index;

class Save extends AbstractController
{
    public function execute()
    {
        $redirect = $this->resultFactory->create('redirect');

        try {
            // Data that was posted to this controller. Put the data to the 'chest' and save it to the database
            $data = $this->getRequest()->getPostValue();

            // TODO: Implement saving of existing record.
            // TODO: Huh, looks like all those repositories or resourceModels can come in handy here.

            /** @var \Overdose\LessonOne\Api\Data\FriendInterface $model */
            $model = null;// TODO: Implement a loading here.


            $newFriendId = $model->getId();

            $this->messageManager->addErrorMessage(__("Yay. Now you have a new friend! Successfully saved to the database!"));
            $redirect->setPath(self::DEFAULT_ACTION_PATH . 'index', ['id' => $newFriendId]);
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Sorry, was unable to save a friend form. =("));
            $redirect->setPath(self::DEFAULT_ACTION_PATH . 'index');
        }

        return $redirect;
    }
}
