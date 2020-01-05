<?php

namespace addons\framework;

use think\Addons;
use think\facade\Log;
use think\facade\Config;
use think\facade\View;

/**
 * EasyAdmin核心框架
 */
class Framework extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }

    /**
     * 控制台显示插件统计信息
     * 如果需要显示统计信息可去掉注释
     * @param $params
     * @return false|mixed|string
     * @throws \think\Exception
     */
    public function addonsDashboardExtendHtml($params)
    {
        $addons =$this->getInfo() ;
        //tab标题
        if ($params == 'title'){
            return '<li><a href="#'.$addons['name'].'" data-toggle="tab">'.$addons['title'].'</a></li>';
        }
        //tab内容
        if ($params == 'content'){
            $this->assign('addons' , $addons);
            return $this->fetch('/info');
        }
    }


}
