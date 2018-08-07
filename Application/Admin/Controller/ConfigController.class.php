<?php

namespace Admin\Controller;

use Think\Controller;


/**
 * 网站配置文件
 */
class ConfigController extends CommonController
{

    /**
     * 显示网站配置数据
     * @return [type] [description]
     */

    public function index()
    {

        echo '';
    }


    public function webconfig()
    {
        $db = M('webconfig');
        $data = $db->alias('w')->where('w.id=1')->find();
        $this->assign('config', $data);
        // dump($data);
        $this->display();
    }


    /**
     * 修改网站配置方法
     * @return [type] [description]
     */
    public function updateconfig()
    {
        if (IS_POST) {

            $info = [
                'id' => I('id', null, 'intval'),
                'webname' => I('webname', null),
                'keywords' => I('keywords', null),
                'description' => I('description', null),
                'phone' => I('phone', null),
                'logo' => I('desc_image', null), // 清空此字段
                'qq' => I('qq', null),
                'email' => I('email', null),
                'ywemail' => I('ywemail', null),
                'weixin' => I('weixin', null),
                'address' => I('address', null),
                'beian' => I('beian', null),
                'time' => I('time') ? strtotime(I('time')) : time(),
            ];

//                   dump($info); die;
            $data = M('webconfig')->save($info);

            if (false !== $data || 0 !== $data) {
                $this->success('更新成功！');
            } else {
                $this->error('更新失败！');
            }

        } else {

            $this->error('非法操作！');
        }

    }


}