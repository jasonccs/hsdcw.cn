<?php

namespace Home\Controller;

use Think\Controller;

/*房产控制器*/

class HouseController extends Controller
{
    protected $db;       //数据连接句柄
    private $lid;         //分类主键
    private $price;         //地区主键
    private $mianji;     //房子面积主键
    private $huxing;      //房子户型
    private $url_p;

    public function _initialize()
    {
        if (method_exists($this, '__auto')) {
            $this->__auto();
        }
    }

    public function __auto()
    {
        $this->url_p = remove_Url_Param(C('VAR_PAGE') ? C('VAR_PAGE') : 'p', __SELF__);
        $this->lid = I('get.lid', null, 'intval');
        $this->price = I('get.price', null);
        $this->mianji = I('get.mianji', null);
        $this->huxing = I('get.huxing', null, 'intval');
        $this->db = D('HouseView');
    }

    public function index()
    {

        // dump($this->diqu);

        $this->setLocality();//获得lid地区参数
        $this->getPrcie();//获得price 参数
        $this->getMianji();//获得mianji面积
        $this->getHuxing();//获得huxing户型
        $this->setWhere();//搜索条件
        $this->setGoods(); //设置商品展示结果
        $total = $this->db->totalNum();//统计符合搜索参数的记录的总条数
        // echo  $total; echo __SELF__; echo $_GET['p'];
        $Page = new \Think\Page($total, 1);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $goods = $this->db->getGoods($limit);
        $this->assign('goods', $goods);
        $this->assign('page', $Page->show());
        $this->display('/Fang/index');
    }


    public function setGoods()
    {

        $model = $this->db;
        //  dump($model->lid=array(5,8,4));
        $db = D('diqu');
        $diqu = $db->getdiquid($this->lid);
        // dump($diqu);
        if (strlen($diqu) > 2) {
            $sub = substr($diqu, 0, strrpos($diqu, ','));
            $arr = explode(',', $sub);
        } else {
            $arr = $diqu;
        }

        $model->lid = $arr;
        //  $goods=$model->getGoods($model->lid);
        // $this->assign('goods',$goods);

    }


    public function setWhere()
    {

        //价格搜索处理
        if (!is_null($this->price)) {//存在价格参数
            $price = explode('-', $this->price);
            // dump($price);
            if (isset($price[1])) {
                $this->db->price = 'price>' . $price[0] . ' and price<=' . intval($price[1]);
            } else {
                $this->db->price = 'price>' . intval($price[0]);
            }

            // dump($this->db->price);
        } else {//不存在价格参数

            $this->db->price = 'price > 0';
        }


        //面积搜索处理
        if (!is_null($this->mianji)) {//存在面积参数
            $mianji = explode('-', $this->mianji);
            // dump($price);
            if (isset($mianji[1])) {
                $this->db->mianji = 'mianji>' . $mianji[0] . ' and mianji<=' . intval($mianji[1]);
            } else {
                $this->db->mianji = 'mianji>' . intval($mianji[0]);
            }

            // 	 dump($this->db->mianji);
        } else {//不存在面积参数

            $this->db->mianji = 'mianji > 0';
        }

        //户型搜索处理
        if (!is_null($this->huxing)) {//存在户型参数

            $this->db->huxing = 'huxing=' . $this->huxing;

        } else {//不存在户型参数

            $this->db->huxing = 'huxing > 0';
        }

    }


    //获取价格参数 分配给前台页面
    public function getPrcie()
    {
        $url = remove_Url_Param('price', $this->url_p);
        $price = C('prices');
        $wuhandiqu = M('diqu')->field('pid')->where(array('id' => $this->lid))->find();//查找所有武汉的子地区
        $pricetemp = array();
        if (is_null($this->price)) {

            $pricetemp[] = '<a  class="active" href="' . $url . '">不限</a>';

            if ($this->lid == 4 || intval($wuhandiqu['pid']) == 4) {//武汉地区
                foreach ($price[0] as $key => $value) {
                    $pricetemp[] = '<a  href="' . $url . '/price/' . $value[0] . '">' . $value['1'] . '</a>';
                }
            } else {
                foreach ($price[1] as $key => $value) {
                    $pricetemp[] = '<a  href="' . $url . '/price/' . $value[0] . '">' . $value['1'] . '</a>';
                }

            }
            $this->assign('price', $pricetemp);
        } else {
            $pricetemp[] = '<a   href="' . $url . '">不限</a>';

            if ($this->lid == 4 || intval($wuhandiqu['pid']) == 4) {
                foreach ($price[0] as $key => $value) {
                    if ($this->price == $value[0]) {
                        $pricetemp[] = '<a class="active" href="' . $url . '/price/' . $value[0] . '">' . $value['1'] . '</a>';
                    } else {
                        $pricetemp[] = '<a href="' . $url . '/price/' . $value[0] . '">' . $value['1'] . '</a>';
                    }
                }
            } else {
                foreach ($price[1] as $key => $value) {
                    if ($this->price == $value[0]) {
                        $pricetemp[] = '<a class="active" href="' . $url . '/price/' . $value[0] . '">' . $value['1'] . '</a>';
                    } else {
                        $pricetemp[] = '<a href="' . $url . '/price/' . $value[0] . '">' . $value['1'] . '</a>';
                    }
                }

            }


            $this->assign('price', $pricetemp);
        }

    }


    // 获取congig.php面积配置分配前台

    public function getMianji()
    {

        $url = remove_Url_Param('mianji', $this->url_p);
        $mianji = C('mianji');
        $mianjitemp = array();
        if (is_null($this->mianji)) {

            $mianjitemp[] = '<a  class="active" href="' . $url . '">不限</a>';

            foreach ($mianji as $key => $value) {
                $mianjitemp[] = '<a  href="' . $url . '/mianji/' . $value[0] . '">' . $value['1'] . '</a>';
            }

            $this->assign('mianji', $mianjitemp);
        } else {
            $mianjitemp[] = '<a   href="' . $url . '">不限</a>';
            foreach ($mianji as $key => $value) {
                if ($this->mianji == $value[0]) {
                    $mianjitemp[] = '<a class="active" href="' . $url . '/mianji/' . $value[0] . '">' . $value['1'] . '</a>';
                } else {
                    $mianjitemp[] = '<a href="' . $url . '/mianji/' . $value[0] . '">' . $value['1'] . '</a>';
                }
            }
            $this->assign('mianji', $mianjitemp);
        }


    }


    // 获取congig.php面积配置分配前台

    public function getHuxing()
    {

        $url = remove_Url_Param('huxing', $this->url_p);
        $huxing = C('huxing');
        $huxingtemp = array();
        if (is_null($this->huxing)) {

            $huxingtemp[] = '<a  class="active" href="' . $url . '">不限</a>';

            foreach ($huxing as $key => $value) {
                $huxingtemp[] = '<a  href="' . $url . '/huxing/' . $value[0] . '">' . $value['1'] . '</a>';
            }

            $this->assign('huxing', $huxingtemp);
        } else {
            $huxingtemp[] = '<a   href="' . $url . '">不限</a>';
            foreach ($huxing as $key => $value) {
                if ($this->huxing == $value[0]) {
                    $huxingtemp[] = '<a class="active" href="' . $url . '/huxing/' . $value[0] . '">' . $value['1'] . '</a>';
                } else {
                    $huxingtemp[] = '<a href="' . $url . '/huxing/' . $value[0] . '">' . $value['1'] . '</a>';
                }
            }
            $this->assign('huxing', $huxingtemp);
        }

    }


    //获取地区分配给前台

    public function setLocality()
    {

        $url = remove_Url_Param('lid', $this->url_p);   //var_dump( $url);
        //地区参数不存在
        if (is_null($this->lid)) {
            $db = D('diqu');
            $diqu = $db->getdiqulevel(0);
            $diqutemp = array();
            $diqutemp[] = '<a  class="active" href="' . $url . '">不限</a>';
            foreach ($diqu as $value) {
                $diqutemp[] = '<a href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
            }
            $this->assign('diqu', $diqutemp);

            // dump($diqutemp);
        } else { //地区参数存在
            $db = D('diqu');
            $pid = $db->getdiqupid($this->lid);//var_dump($pid);
            $diqu = $db->getdiqulevel(0);
            $diqutemp = array();
            $diqutemp[] = '<a href="' . $url . '">不限</a>';
            foreach ($diqu as $value) {
                if ($pid['pid'] == 0) {
                    if ($pid['id'] == $value['id']) {
                        $diqutemp[] = '<a class="active" href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
                    } else {
                        $diqutemp[] = '<a href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
                    }
                } else {
                    if ($pid['pid'] == $value['id']) {
                        $diqutemp[] = '<a class="active" href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
                    } else {
                        $diqutemp[] = '<a href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
                    }
                }

            }
            $this->assign('diqu', $diqutemp);
            // dump($diqu);


        }


        if (isset($this->lid)) {
            //地区子类
            $sondiqutemp = array();
            // $sondiqutemp[]='<a  href="'.$url.'/lid/'.$pid['id'].'">不限</a>';

            if ($pid['pid'] == 0) {
                $sondiqutemp[] = '<a class="active" href="' . $url . '/lid/' . $pid['id'] . '">不限</a>';

                $sondiqu = $db->getdiqulevel($this->lid);
                foreach ($sondiqu as $value) {

                    $sondiqutemp[] = '<a  href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
                }
            } else {

                $sondiqu = $db->getdiqulevel($pid['pid']);
                $sondiqutemp[] = '<a  href="' . $url . '/lid/' . $pid['pid'] . '">不限</a>';

                foreach ($sondiqu as $value) {
                    if ($this->lid == $value['id']) {
                        $sondiqutemp[] = '<a class="active" href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';
                    } else {
                        $sondiqutemp[] = '<a  href="' . $url . '/lid/' . $value['id'] . '">' . $value['name'] . '</a>';

                    }
                }
            }
            // dump($sondiqutemp);
            $this->assign('sondiqu', $sondiqutemp);
        }

    }


    //房产展示详情页面
    public function show()
    {

        $gid = I('gid', null, 'intval');
        $house = M('house')->find($gid);
        $this->assign('detail', $house);
        // dump($house);
        $this->display();
    }


}

?>