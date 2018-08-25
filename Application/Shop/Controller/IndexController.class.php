<?php

namespace Shop\Controller;

use Common\Controller\CommonController;

class IndexController extends CommonController
{
    

    
    public function index ()
    {
    
        $this->display();
    
    }
    
    //购物车页面
    public function cart(){
        
        $this->display();
        
    }
    
    public function cartEdit(){
        $cartType=I('cartType',1);
        $cartType=I('num',1);
        $skuId=I('skuId',5086);
        $this->ajaxReturn(['retCode'=>200,'retMsg'=>'编辑成功']);
    }
    
}