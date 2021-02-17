<?php
namespace Overdose\LessonTwo\Api;

use Magento\Framework\Exception\CouldNotDeleteException;

interface FriendRepositoryInterface
{
    /**
     * @param \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends $model
     * @return \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends
     */
    public function save($model);

    /**
     * @param \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends $model
     * @return true
     * @throws CouldNotDeleteException
     */
    public function delete($model);

    /**
     * @param integer $id
     * @return \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends
     */
    public function getById($id);

    /**
     * @param integer $id
     * @return true
     * @throws CouldNotDeleteException
     */
    public function deleteById($id);

    /**
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     */
    public function getList($searchCriteria);
}
