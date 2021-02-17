<?php
namespace Overdose\PluginsAround\Plugin;

class Friend
{
    public function afterGetName(\Overdose\LessonTwo\Api\Data\FriendInterface $friend, $result)
    {
        return "Тихон";
    }

    public function beforeGetName(\Overdose\LessonTwo\Api\Data\FriendInterface $friend, ...$args)
    {
        return $args;
    }
}
