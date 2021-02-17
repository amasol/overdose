<?php
namespace Overdose\LessonTwo\Api\Data;

interface FriendInterface
{
    const TABLE_NAME = 'overdose_lesson_two';

    const FIELD_NAME_ID = 'id';
    const FIELD_NAME_AGE = 'age';
    const FIELD_NAME_NAME = 'name';
    const FIELD_NAME_COMMENT = 'comment';
    const FIELD_NAME_CREATED_AT = 'created_at';
    const FIELD_NAME_UPDATED_AT = 'updated_at';

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return string|integer
     */
    public function getAge();

    /**
     * @param string|integer $age
     * @return \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends
     */
    public function setAge($age);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getComment();

    /**
     * @param string $comment
     * @return \Overdose\LessonTwo\Api\Data\FriendInterface|\Overdose\LessonTwo\Model\Friends
     */
    public function setComment($comment);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdatedAt();
}
