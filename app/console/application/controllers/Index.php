<?php
/**
 * Created by PhpStorm.
 * User: Jiang Haiqiang
 * Date: 2019/2/19
 * Time: 9:33 PM
 */

/**
 * Class IndexController
 * User Jiang Haiqiang
 */
class IndexController extends \Yaf\Controller_Abstract
{
    /**
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public function indexAction()
    {
        /**
         * @var \yafr\com\log\File $log
         */
        $log      = \yafr\com\Di::get('log');
        $log->info('index');
    }

    /**
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public function testAction()
    {
        /**
         * @var \yafr\com\log\File $log
         */
        $log      = \yafr\com\Di::get('log');
        $log->info('test');
    }
}