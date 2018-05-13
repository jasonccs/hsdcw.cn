<?php
namespace Admin\Controller;

use Think\Controller;
/**
* @ 文章管理器
*/
class NewsController extends Controller
{
    /**
     * 添加文章
     */
    public function index(){
         
    }
    public function addnews()
    {
        $this->datatree();
        $this->display();
    }
    /**
     * 上传栏目图片
     */
    public function uploadImage()
    {
        $upload = new \Think\Upload(C('upload'));
        // 实例化上传
        $file = $upload->upload();
        if (!$file) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {
            // 上传成功 获取上传文件信息
            $data = array();
            foreach ($file as $key => $value) {
                $data[$key]['imgPath'] = substr(C('upload')['rootPath'], 1) . $value['savepath'] . $value['savename'];
            }
            $this->ajaxReturn($data['Filedata']);
        }
    }


    //提交新闻数据
    public function adddata()
    {
        if (IS_POST) {
            foreach (I('desc_image', null) as $key => $value) {
                $desc_image .= $value . '|';
            }
             $info = array(
                 'cateid'      => I('cateid', null,'intval'), 
                 'title'       => I('title', null), 
                 'type'        => I('type', null), 
                 'desc_image'  => $desc_image, 
                 'keywords'    => I('keywords', null), 
                 'source'      => I('source',null),
                 'tag'         => I('tag',null),
                 'description' => I('description', null), 
                 'content'     => I('content', null, 'html_entity_decode,trim'), 
                 'time'        => I('time') ? strtotime(I('time')) : time());
            // dump($info);die;
            $data = M('news')->add($info);
            if ($data) {
                $this->success('添加成功！');
            } else {
                $this->error('添加失败！');
            }
        }
    }

    //读取所有文章
    public function allnews(){   
        $db=M('news');
        $page=new \Think\HdPage($db->count(),5);
        $data=$db->alias('a')->field('a.id,title,keywords,content,newsname,a.display,a.time,a.type')
        ->limit($page->limit())->join('LEFT JOIN __NEWS_CATEGORY__ b ON b.id=a.cateid')
        ->where("'a.display'=0")->order(array('a.time'=>'desc','a.id'=>'desc'))->select();     
        $this->assign('allnews',$data);
        $this->assign('page',$page->show());
        $this->display();
    }


    //删除文章
     public function del(){

       if(IS_AJAX){ $id=I('id');
            if(M('news')->delete($id)){
                    $data=array('status'=>true);
                    $this->ajaxReturn($data);
            }else{
                    $data=array('status'=>flase);
                    $this->ajaxReturn($data);
            };
        }
     }


    //显示更改文章的模板
    public function editor(){

         if(IS_GET){
           $id=I('id');
           $data=M('news')->find($id);
        
            $str_desc_image=explode('|',$data['desc_image']);
            foreach($str_desc_image as $k=>$v){
                 if(empty($str_desc_image[$k])){
                    array_splice($str_desc_image,$k);//删除数组元素 切保持数组所有不变
                 }
            }
           $data['desc_image']= $str_desc_image;
           $this->assign('data',$data);
           $this->datatree();
           //dump($data);
           $this->display(); 
          }

    } 
   
   //更新文章
     public function updateinfo(){

        if(IS_POST){
                        $img=I('desc_image');
                     
                            foreach ($img as $key => $value) {
                               if($img[$key]==''){
                                  array_splice($img, $key); //移除数组中指定的元素
                               } 
                            }

                            foreach ($img as $k => $v) {
                                     $desc_image .= $v . '|';
                             }  
                       
                        // dump($img);
                        // dump($desc_image);

                         if($img==''&& count($img)<1){//图片全被删除光.即0张
                             $info = array(
                             'id'          =>I('id',null,'intval'),
                             'cateid'      => I('cateid', null), 
                             'title'       => I('title', null), 
                             'type'        => I('type', null), 
                             'desc_image'  => null, // 清空此字段
                             'keywords'    => I('keywords', null), 
                             'source'      => I('source',null),
                             'tag'         => I('tag',null),
                             'description' => I('description', null), 
                             'content'     => I('content', null, 'html_entity_decode,trim'), 
                             'time'        => I('time') ? strtotime(I('time')) : time(),
                             ); 

                         }else if($img==null && count($img)>1){//说明没有添加新图片,但是图片最少有一张
                              $info = array(
                             'id'          =>I('id',null,'intval'),
                             'cateid'        => I('cateid', null), 
                             'title'       => I('title', null), 
                             'type'        => I('type', null), 
                             //  'desc_image'  => $desc_image,  清空此字段
                             'keywords'    => I('keywords', null), 
                             'description' => I('description', null), 
                            'source'      => I('source',null),
                             'tag'         => I('tag',null),
                             'content'     => I('content', null, 'html_entity_decode,trim'), 
                             'time'        => I('time') ? strtotime(I('time')) : time(),
                             ); 
                         }else{//说明图片有存在添加新的
                              $info = array(
                             'id'          =>I('id',null,'intval'),
                             'cateid'      => I('cateid', null), 
                             'title'       => I('title', null), 
                             'type'        => I('type', null), 
                             'desc_image'  => $desc_image,  //清空此字段
                             'keywords'    => I('keywords', null), 
                             'description' => I('description', null), 
                            'source'      => I('source',null),
                             'tag'         => I('tag',null),
                             'content'     => I('content', null, 'html_entity_decode,trim'), 
                             'time'        => I('time') ? strtotime(I('time')) : time(),
                             );
                              
                         };

                        // dump($info);die;
                 
                        $data = M('news')->save($info);
                            
                        if (false !== $data || 0 !== $data ){
                            $this->success('更新成功！'); 
                        } else {
                            $this->error('更新失败！');
                        }
            }else{

                     $this->error('非法操作！');

            }
     }




     //新闻类别
     public function datatree(){
         $catetree=new \Think\HdData();

         $data=M('news_category')->field('id,newsname,pid')->select();
         $news_category=$catetree::tree($data,'newsname','id','pid');
         $this->assign('news_category',$news_category);

     }



}
?>
