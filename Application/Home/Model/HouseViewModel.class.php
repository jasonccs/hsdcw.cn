<?php

namespace Home\Model;
use Think\Model\ViewModel;
/**
* 
*/
class HouseViewModel extends ViewModel
{
	
     public $lid=array();   //地区主键
     public $price='';      //价格参数
     public $mianji='';     //面积参数
     public $huxing='';     //面积参数
     

     public $viewFields =array(
        'house'=>array('gid','cid','lid','main_title','price','goods_img','mianji','huxing','_type'=>'INNER'),

        'diqu'=>array('_on'=>'house.lid=diqu.id'),
        
      );
 
   //统计参与条件的商品条数
    public function totalNum(){
         $count=0;
         if(!is_null($this->lid)){//存在lid 的情况
            $map['lid']  = array('in',$this->lid);
            $mianji=array($this->mianji);//面积参数来源于控制器
            $huxing=array($this->huxing);//户型参数来源于控制器
            $count = $this->where($map)->where($mianji)->where($huxing)->where($this->price)->count();
        }else{//不存在lid的情况
            $aid='';//声明一个变量
            $allid=M('diqu')->field('id')->select();
            if(!empty($allid)){
                foreach ($allid as $key => $value) {
                    $aid.=$value['id'].',';
                }
            }
            $this->lid=$aid;//接受不存在lid时 把查询所有的地区表的所有id 
            $map['lid']  = array('in',$this->lid);
            $mianji=array($this->mianji);//面积参数来源于控制器 
            $huxing=array($this->huxing);//户型参数来源于控制器
            $count = $this->where($map)->where($mianji)->where($huxing)->where($this->price)->count();
        }
        return $count;
    }
 

   //商品
    public function getGoods($limit){
      
        $result=null;
        if(!is_null($this->lid)){//存在lid 的情况
            $map['lid']  = array('in',$this->lid);
            $mianji=array($this->mianji);//面积参数来源于控制器
            $huxing=array($this->huxing);//户型参数来源于控制器
            $result = $this->where($map)->where($mianji)->where($huxing)->where($this->price)->limit($limit)->select();
        }else{//不存在lid的情况
            $aid='';//声明一个变量
            $allid=M('diqu')->field('id')->select();
            if(!empty($allid)){
                foreach ($allid as $key => $value) {
                    $aid.=$value['id'].',';
                }
            }
            $this->lid=$aid;//接受不存在lid时 把查询所有的地区表的所有id 
            $map['lid']  = array('in',$this->lid);
            $mianji=array($this->mianji);//面积参数来源于控制器 
            $huxing=array($this->huxing);//户型参数来源于控制器
            $result = $this->where($map)->where($mianji)->where($huxing)->where($this->price)->limit($limit)->select();
        }
        return $result;
    }

   
  


}
?>