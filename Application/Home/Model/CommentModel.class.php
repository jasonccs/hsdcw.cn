<?php
    
    namespace Home\Model;
    
    use Think\Model;
    
    class CommentModel extends Model
    {
        
        
        protected $_validate = [
            ['mobile', 'require', '点赞的id 不能为空！'], // 在新增的时候验证name字段是否唯一
        ];
        
        //点赞
        public function thumbs(int $id)
        {
            
            $result = $this->where(['id' => $id])->setInc('click');
            
            return $result;
        }
        
        
    }
    
    
    ?>