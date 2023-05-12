<?php

namespace Dredd\CopyrightedThreadList\XF\Pub\Controller;

class Thread extends XFCP_Thread
{
    public function actionCopyrighted()
    {
        $threads = $this->finder('XF:Thread')->where('w_cn_is_copyrighted', 1)->fetch();

        return $this->view('XF:Thread\Copyrighted', 'ctl_list', ['threads' => $threads]);
    }
}