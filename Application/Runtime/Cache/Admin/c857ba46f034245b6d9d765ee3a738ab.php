<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/Application/Admin/View/Public/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/font-awesome.min93e3.css" rel="stylesheet">

     <!-- Sweet Alert -->
    <link href="/Application/Admin/View/Public/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/animate.min.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/Application/Admin/View/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/style.css" rel="stylesheet">
    <script src="/Application/Admin/View/Public/js/jquery.min.js"></script>


</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>所有新闻 </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
<style type="text/css">
    thead tr th:nth-of-type(1){
        width: 2%;
    }
    thead tr th:nth-of-type(2){
        width: 4%;
    }
    thead tr th:nth-of-type(3){
        width: 20%;
    }
    thead tr th:nth-of-type(4){
        width: 12%;
    }
    thead tr th:nth-of-type(5){
        width: 30%;
    }
    thead tr th:nth-of-type(6){
        width: 12%;
    }
    thead tr th:nth-of-type(7){
        width: 10%;
    }
    thead tr th:nth-of-type(8){
        width: 12%;
    }
   tr>td,tr>th{
    text-align: center;
   }
</style>
<!-- 
<script type="text/javascript">
     $(function(){
          $('#all').click(function(){    
                   if(this.checked){    
                        $("tbody :checkbox").attr("checked", true);   
                    }else{    
                        $("tbody :checkbox").attr("checked", false); 
                    }    
            });  
     })
</script> -->
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th> <input type="checkbox"   class="i-checks" name="all" id="all"></th>
                                    <th>ID</th>
                                    <th>标题</th>
                                    <th>关键字</th>
                                    <th>内容</th>
                                    <th>所属类别</th>
                                    <th>发布时间</th>
                                    <th>操作</th>

                                </tr>
                            </thead>
                            <tbody>

                          <?php if(is_array($allnews)): $i = 0; $__LIST__ = $allnews;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                    <td>
                                        <input type="checkbox" class="i-checks" name="input[]">
                                    </td>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo (msubstr($vo["title"],0,30)); ?></td>
                                    <td><?php echo (msubstr($vo["keywords"],0,15)); ?></td>
                                    <td><?php echo (msubstr(htmlspecialchars_decode(strip_tags($vo["content"])),0,32)); ?></td>
                                    <td><?php echo ($vo["newsname"]); ?>|<?php if($vo['type'] == 1): ?>头条<?php elseif($vo['type'] == 2): ?>热点<?php else: ?>普通<?php endif; ?></td>
                                    <td><?php echo (date("Y-m-d H:i",$vo["time"])); ?></td>
                                    <td class="content-tabs">
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="是否隐藏"><i class="fa fa-eye"></i></a>
                 
                                        <a  class="btn btn-white btn-sm demo3" data-toggle="tooltip" data-placement="top" title="删除此文章"><i class="fa fa-trash"></i></a>

                                        <a  href="<?php echo U('Admin/News/editor',array('id'=>$vo['id']));?>"class=" J_menuItem btn btn-white btn-sm "  title="编辑此文章"  target="_self"><i class="fa fa-pencil"></i></a>
                                       
                                    </td>
                                </tr><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?> 
                           
                            </tbody>
                            <tfoot>
                                <tr>
                                 <th colspan="10"><div class="page_tag"><?php echo ($page); ?></div></th>

                                </tr>
                            </tfoot>
                        </table>
<script type="text/javascript">
    
   $(function(){
  
        $('.fa-trash').parent('a').click(function(){
           var html=$(this).parent('td').parent('tr'); 
           var idtext=$(this).parent('td').prevAll('td:eq(5)').text();
             swal({
                title: "您确定要删除这条信息吗",
                text: "删除后将无法恢复，请谨慎操作！",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "删除",
                closeOnConfirm: false
               }, function () {
                $.post("<?php echo U('Admin/News/del');?>",{id:idtext},function(data){
                          html.remove();
                          swal("删除成功！", "您已经永久删除了这条信息。", "success");
                          if(data.status==false){
                            alert('此文章不存在！');
                          }
                },'json');
                
            });
        })


   })

</script>


                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <script src="/Application/Admin/View/Public/js/bootstrap.min.js"></script>
    <script src="/Application/Admin/View/Public/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="/Application/Admin/View/Public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/Application/Admin/View/Public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/Application/Admin/View/Public/js/content.min.js"></script>
    <script src="/Application/Admin/View/Public/js/plugins/iCheck/icheck.min.js"></script>


     <script src="/Application/Admin/View/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/Application/Admin/View/Public/js/plugins/validate/messages_zh.min.js"></script>
    <script src="/Application/Admin/View/Public/js/demo/form-validate-demo.min.js"></script>

  <!--sweetalert-->
     <script src="/Application/Admin/View/Public/js/plugins/sweetalert/sweetalert.min.js"></script>

     <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
</body>

</html>