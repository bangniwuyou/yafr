<?php
/**
 * Created by PhpStorm.
 * User: Jiang Haiqiang
 * Date: 2018/12/30
 * Time: 5:35 PM
 */
class IndexController extends Yaf\Controller_Abstract
{
    /**
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public function init()
    {
        echo $this->getRequest()->controller.'<br/>';
        echo $this->getRequest()->action.'<br/>';
        if($this->getRequest()->action != 'index') {
            exit('禁止访问');
        }

    }

    // default action name
    public function indexAction()
    {
        $config = \Yaf\Registry::get('config');
        var_dump($config->toArray());
        die;
        //$service = new \service\BaseService('dbName');

        //$adapter = new \adapter\BaseAdapter('testAdapter');

        //$this->getView()->content = $adapter->name;

        $config = \Yaf\Application::app()->getConfig()->toArray();
        echo json_encode($config);
        die;
    }
}