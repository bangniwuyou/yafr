<?php
/**
 * Created by PhpStorm.
 * User: Jiang Haiqiang
 * Date: 2018/12/30
 * Time: 5:35 PM
 */
class IndexController extends Yaf\Controller_Abstract
{
    // default action name
    public function indexAction()
    {
        //$service = new \service\BaseService('dbName');

        $adapter = new \adapter\BaseAdapter('testAdapter');

        $this->getView()->content = $adapter->name;
    }
}