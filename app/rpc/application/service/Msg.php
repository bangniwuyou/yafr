<?php
/**
 * Created by PhpStorm.
 * User: Jiang Haiqiang
 * Date: 2019/3/9
 * Time: 10:26 AM
 */

namespace service;


use common\libs\Rpc;

/**
 * Class Msg
 * @package service
 * User Jiang Haiqiang
 */
class Msg extends Rpc
{
    /**
     * @param $params
     * @return bool
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public function send($params)
    {
        sleep(1);
        return true;
    }


}