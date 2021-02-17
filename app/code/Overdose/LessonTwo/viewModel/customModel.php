<?php

namespace Overdose\LessonTwo\viewModel;

class customModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var null|\Overdose\LessonTwo\Model\Friends
     */
    private $model = null;

    /**
     * @var \Overdose\LessonTwo\Api\FriendRepositoryInterface|\Overdose\LessonTwo\Model\FriendRepository
     */
    protected $friendsRepository;

    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @param \Overdose\LessonTwo\Api\FriendRepositoryInterface $friendsRepository
     */
    public function __construct(
        \Overdose\LessonTwo\Api\FriendRepositoryInterface $friendsRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->friendsRepository = $friendsRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @return string
     */
    public function getText($arg1, $arg2)
    {
        return $arg1 . ' |||| ' . $arg2;
    }

    /**
     * @param string $name
     * @param integer $age
     * @param string $comment
     */
    public function saveNewFriend($name, $age, $comment)
    {
        for ($i = 0; $i < 10; $i++) {
//            'Semen', '156', 'A cool guy'
            $model = $this->friendsRepository->getEmptyModel();

            $model->setAge($age)
                ->setName($name)
                ->setComment($comment);

            try {
                $this->friendsRepository->save($model);
            } catch (\Exception $e) {
                // Do something, when saving a friend failed.
            }
        }
    }

    /**
     * Get collection of all friends from 'overdose_lesson_two'
     *
     * @return \Magento\Framework\DataObject[]|\Overdose\LessonTwo\Model\ResourceModel\Collection\Friends[]
     */
    public function getAllFriends()
    {
        $searchCriteria = $this->searchCriteriaBuilder->addFilter(
            \Overdose\LessonTwo\Api\Data\FriendInterface::FIELD_NAME_ID,
            3,
            'eq'
        )->create();

        $searchResults = $this->friendsRepository->getList($searchCriteria);

        var_dump($searchResults->getItems());
    }

    /**
     * Return name of the friend
     *
     * @param int $id
     * @return string
     */
    public function getFriendName($id)
    {
        try {
            return $this->friendsRepository->getById($id)->getName();
        } catch (\Exception $e) {
            return 'Sorry. Your friend not found =)';
        }
    }

    public function getFriendComment($id)
    {
        try {
            return $this->friendsRepository->getById($id)->getComment();
        } catch (\Exception $e) {
            return 'Sorry. Your friend not found =)';
        }
    }
}
