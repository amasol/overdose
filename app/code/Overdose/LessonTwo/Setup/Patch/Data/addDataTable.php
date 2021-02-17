<?php

namespace Overdose\LessonTwo\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;

class addDataTable implements DataPatchInterface
{
    /**
     * @var \Magento\Framework\Setup\ModuleDataSetupInterface
     */
    protected $moduleDataSetup;

    /**
     * @var \Overdose\LessonTwo\Model\FriendsFactory
     */
    protected $model;

    /**
     * @var \Overdose\LessonTwo\Model\ResourceModel\Friends
     */
    protected $resourceModel;

    /**
     * AddDataToTheTable constructor.
     *
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
     * @param \Overdose\LessonTwo\Model\FriendsFactory $friendsModel
     * @param \Overdose\LessonTwo\Model\ResourceModel\Friends $friendsResourceModel
     */
    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        \Overdose\LessonTwo\Model\FriendsFactory $friendsModel,
        \Overdose\LessonTwo\Model\ResourceModel\Friends $friendsResourceModel
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->model = $friendsModel;
        $this->resourceModel = $friendsResourceModel;
    }

    /**
     * // TODO:
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * // TODO:
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Applies this function only once.
     * You can find 'patch_list' table and DROP the row from DB with the name of this class, so that system will apply
     * this patch again. Useful when you're learning.
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        for ($i = 0; $i < 10; $i++) {
            $model = $this->model->create();

            $model->setData('age', $i)
                ->setData('name', $i)
                ->setData('comment', $i);

            $this->resourceModel->save($model);
        }

        $this->moduleDataSetup->endSetup();
    }
}
