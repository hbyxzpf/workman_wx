<?php
namespace Wechat\App\Service\Send;

/**
 * 拉好友入群
 */
class SendRoomAddMember extends AbstractSend
{
    /** @var null 定义body解析类，会自动解析 */
    protected $bodyClass = \Wechat\App\Service\Send\Body\BodyRoomAddMember::class;
}
