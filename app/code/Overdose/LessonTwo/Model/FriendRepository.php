<?php
namespace Overdose\LessonTwo\Model;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;

class FriendRepository implements \Overdose\LessonTwo\Api\FriendRepositoryInterface
{
    /**
     * @var \Overdose\LessonTwo\Model\FriendsFactory
     */
    protected $friendsFactory;

    /**
     * @var \Overdose\LessonTwo\Model\ResourceModel\Friends
     */
    protected $friendsResourceModel;

    /**
     * @var \Overdose\LessonTwo\Model\ResourceModel\Collection\FriendsFactory
     */
    protected $friendsCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var SearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * TwoTwo constructor.
     *
     * @param \Overdose\LessonTwo\Model\FriendsFactory $friendsFactory
     * @param \Overdose\LessonTwo\Model\ResourceModel\Friends $friendsResourceModel
     * @param \Overdose\LessonTwo\Model\ResourceModel\Collection\FriendsFactory $friendsCollectionFactory
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor
     * @param \Magento\Framework\Api\SearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        \Overdose\LessonTwo\Model\FriendsFactory $friendsFactory,
        \Overdose\LessonTwo\Model\ResourceModel\Friends $friendsResourceModel,
        \Overdose\LessonTwo\Model\ResourceModel\Collection\FriendsFactory $friendsCollectionFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor,
        \Magento\Framework\Api\SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->friendsFactory = $friendsFactory;
        $this->friendsResourceModel = $friendsResourceModel;
        $this->friendsCollectionFactory = $friendsCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @inheritDoc
     */
    public function save($model)
    {
        try {
            return $this->friendsResourceModel->save($model);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__("Sorry. I cannot save your friend. =("));
        }
    }

    /**
     * @inheritDoc
     */
    public function delete($model)
    {
        try {
            $this->friendsResourceModel->delete($model);
            return true;
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__("Sorry. I cannot delete your friend. =("));
        }
    }

    /**
     * @inheritDoc
     */
    public function deleteById($id)
    {
        try {
            $this->friendsResourceModel->delete($this->getById($id));

            return true;
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__("Sorry. I cannot delete your friend. =("));
        }
    }

    /**
     * @inheritDoc
     */
    public function getById($id)
    {
        try {
            $model = $this->friendsFactory->create();
            $this->friendsResourceModel->load($model, $id);

            return $model;
        } catch (\Exception $e) {
            throw new NoSuchEntityException(__("Sorry. No friend with id of 666"));
        }
    }

    /**
     * @inheritDoc
     */
    public function getList($searchCriteria)
    {
        $collection = $this->friendsCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        $searchResult = $this->searchResultsFactory->create();

        $searchResult->setSearchCriteria($searchCriteria)
            ->setTotalCount($collection->getSize())
            ->setItems($collection->getItems());

        return $searchResult;
    }

    /**
     * @return Friends
     */
    public function getEmptyModel()
    {
        return $this->friendsFactory->create();
    }
}
