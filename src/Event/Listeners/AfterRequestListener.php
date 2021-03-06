<?php

namespace Swoft\Http\Server\Event\Listeners;

use Swoft\App;
use Swoft\Core\RequestContext;
use Swoft\Bean\Annotation\Listener;
use Swoft\Event\EventInterface;
use Swoft\Event\EventHandlerInterface;
use Swoft\Http\Server\Event\HttpServerEvent;

/**
 * 请求后事件
 *
 * @Listener(HttpServerEvent::AFTER_REQUEST)
 * @uses      AfterReceiveListener
 * @version   2017年08月30日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class AfterRequestListener implements EventHandlerInterface
{
    /**
     * 事件回调
     *
     * @param EventInterface $event      事件对象
     */
    public function handle(EventInterface $event)
    {
        App::getLogger()->appendNoticeLog();
        RequestContext::destroy();
    }
}
