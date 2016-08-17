<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加文章</title>
    <meta name="keywords" content="响应式后台">
    <meta name="description" content="使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="/Application/Admin/View/Public/img/favicon.ico"> 
    <link href="/Application/Admin/View/Public/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/font-awesome.min93e3.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/plugins/iCheck/custom.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/Application/Admin/View/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/style.css" rel="stylesheet">
   
     <!-- Sweet Alert -->
    <link href="/Application/Admin/View/Public/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/animate.min.css" rel="stylesheet">

    <script src="/Application/Admin/View/Public/js/jquery-1.10.2.min.js"></script>
    <!--引入百度编辑器-->
    <script type="text/javascript" charset="utf-8" src="/Public/Static/Ueditor1_4_3/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Static/Ueditor1_4_3/ueditor.all.min.js"> </script>

    <script src="/Public/Static/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/Public/Static/uploadify/uploadify.css">




<script type="text/javascript">
    window.UEDITOR_HOME_URL="/Public/Static/"
    window.onload=function(){
        window.UEDITOR_CONFIG.initialFrameWidth=900 ; 
        window.UEDITOR_CONFIG.initialFrameHeight=320 ; 
        // window.UEDITOR_CONFIG.imageUrl="/Upload/"; 
        //window.UEDITOR_CONFIG.imagePath="{|U:'Admin/Addshop/addshop'}"; 
       var ue = UE.getEditor('editor');
    }
</script>      

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加文章</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                          
                          
                        </div>
                    </div>
                    <div class="ibox-content">
              <form action="<?php echo U('Admin/News/adddata');?>" class="form-horizontal m-t" id="signupForm" method="post" enctype="multipart/form-data">              

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <tbody>

                                   <tr class="gradeX col-md">
                                    <td>所选分类</td>
                                    <td>
                                        <select class="form-control m-b" name="cateid">
                                    <?php if(is_array($news_category)): $i = 0; $__LIST__ = $news_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                         </select>
                                    </td>
                                   
                                </tr>
                                <tr class="gradeA col-md  ">
                                    <td>文章标题</td>
                                    <td class="form-group"><input type="text" id="title" name="title" class="form-control m-input" placeholder="请输入标题" value="" required="" aria-required="true" minlength="2" maxlength="80" ></td>
                                   
                                </tr>
    
                                 <tr class="gradeX col-md ">
                                    <td>所属类别</td>
                                    <td>
                                     <div class="radio i-checks">
                                            <label>
                                            <input type="radio" checked=""  name="type" value="1"> <i></i> 头条</label>
                                            <label>
                                            <input type="radio" checked=""  name="type" value="2"> <i></i> 热点</label>
                                            <label>
                                            <input type="radio" checked=""  name="type" value="3"> <i></i> 普通</label>
                                    </div>
                                    </td>
                                </tr>

                                  <tr class="gradeA col-md  ">
                                    <td>文章来源</td>
                                    <td class="form-group"><input type="text" id="source" name="source" class="form-control m-input" placeholder="请输入来源" value="" required="" aria-required="true" minlength="2" maxlength="80" ></td>
                                   
                                </tr>
                                

     <tr class="gradeA col-md ">
        <td>主图片</td>
        <td>
         <div>
         <input id="file" type="file" multiple="true"  value="" >
         <div id="allimages" style="display:none"></div>
            <span class="miaoshu">类型: *.jpg, *.jpeg,*.png,*gif 大小: 3MB 数量: 1张</span>
            <script type="text/javascript">

                $(function() {

                    $('#file').uploadify({
                        //POST数据
                        'formData'     : {'<?php echo session_name();?>' : '<?php echo session_id();?>'},
                        'fileTypeDesc' : '上传文件',//上传描述
                        'fileTypeExts' : '*.gif; *.jpg; *.png;*.jpeg;*.bmp',
                        'swf'      : '/Public/Static/uploadify/uploadify.swf',
                        'uploader' : "<?php echo U('Admin/News/uploadImage');?>",
                        'method' : 'POST',  //方法，服务端可以用$_POST数组获取数据
                        'buttonText':'选择文件',
                        'fileSizeLimit' : '3145728KB',
                        'multi'         : true,//允许多文件上传
                        'uploadLimit' : 4,//上传文件数
                        'width':65,
                        'height':25,
                        'successTimeout':15,//等待服务器响应时间
                        'removeTimeout' : 0.5,//成功显示时间 onUploadError
                        'overrideEvents' : [ 'onDialogClose', 'onUploadSuccess', 'onUploadError', 'onSelectError' ],  
                         //检测FLASH失败调用
                        'onFallback':function(){
                            alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
                        },
                       
                        'onUploadSuccess' : function(file, data, response) {
                            data=$.parseJSON(data);
                            var imageUrl = data.imgPath?data.imgPath:'/Public/Static/uploadify/default.png';
                            var li="<li path='"+data.imgPath+"' ><img src='"+imageUrl+"' class='hd-w120 hd-h100'/></li>";

                            $("#uploadList ul").prepend(li);

                            var images='<input type="text"  name="desc_image[]" class="hd-w200 ipt3" value="'+data.imgPath+'"'+'/>';

                            $("#allimages").prepend(images); 
                        },
                      //  返回一个错误，选择文件的时候触发
                        // 'onSelectError':function(file, errorCode, errorMsg){
                        //     switch(errorCode) {
                        //         case -100:
                        //             alert("上传的文件数量已经超出系统限制的"+$('#file').uploadify('settings','uploadLimit')+"个文件！");
                        //             break;
                        //         case -110:
                        //             alert("文件 ["+file.name+"] 大小超出系统限制的"+$('#file').uploadify('settings','fileSizeLimit')+"大小！");
                        //             break;
                        //         case -120:
                        //             alert("文件 ["+file.name+"] 大小异常！");
                        //             break;
                        //         case -130:
                        //             alert("文件 ["+file.name+"] 类型不正确！");
                        //             break;
                        //     }
                        // },
                       'onUploadError':function(file, errorCode, errorMsg) {  
                        // 手工取消不弹出提示  
                        // if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED|| errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {  
                        //     return false;  
                        // }  
                        var msgText = "上传失败";  
                        switch (errorCode) {  
                            case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:  
                                msgText += "HTTP 错误\n" + errorMsg;  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:  
                                msgText += "上传文件丢失，请重新上传";  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.IO_ERROR:  
                                msgText += "IO错误";  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:  
                                msgText += "安全性错误\n" + errorMsg;  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:  
                                msgText += "每次最多上传 " + this.settings.uploadLimit + "个";  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:  
                                msgText += errorMsg;  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:  
                                msgText += "找不到指定文件，请重新操作";  
                                break;  
                            case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:  
                                msgText += "参数错误";  
                                break;  
                            default:  
                                msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"  
                                        + errorMsg + "\n" + errorString;  
                        }  
                        alert(msgText);  
                      } ,


                    });
                });
            </script>

            <div id="uploadList">
                <ul>
                 
                </ul>
            </div>

            </td>
           </tr>
    <script type="text/javascript">
            $(function(){
              $('#uploadList>ul').on('click','li',function(){
                 
                  var imgpath    = $(this).attr('path'); 
                  var index      = $(this).index();//点击的索引
                      $.ajax({
                          type:"post",
                          url:"<?php echo U('Admin/Common/delImg');?>",
                          dataType: "json", 
                          data:{delimgpath:imgpath},
                          success:function(data){
                            if(data.status==true){
                                
                                $("#uploadList>ul>li:eq("+index+")").remove();                      
                                swal({title:"太帅了",text:"已删除",type:"success"})
                                                                                     
                            }
                          }
                      })
              });
            })
     </script>


                                <tr class="gradeX col-md ">
                                    <td>关键词(50字以内)</td>
                                    <td class="form-group"><input type="text" id="keywords" name="keywords"   minlength="2" maxlength="80" class="form-control m-input" placeholder="请输入标题" value=""  required="" aria-required="true">

                                    </td>
                                   
                                </tr>
                                 <tr class="gradeX col-md">
                                    <td>文章描述(100字内)</td>
                                    <td class="form-group"><textarea type="text" name="description" class="form-control m-input" placeholder="请输入标题" value="" minlength="2" maxlength="120"  required="" aria-required="true"style="resize:none;"></textarea></td>
                                   
                                </tr>
                                
                                <tr class="gradeA col-md  ">
                                    <td>TAG标签</td>
                                    <td class="form-group"><input type="text" id="tag" name="tag" class="form-control m-input" placeholder="请输入标签" value="" required="" aria-required="true" maxlength="20" maxlength="80" ></td>
                                   
                                </tr>
                          
                                <tr class="gradeC">
                                    <td>发布时间</td>
                                    <td>
                                    <div class="form-group">
                                     
                                        <div class="col-sm-10">
                                            <input class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm:ss" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" name="time" value="" >
                                            <label class="laydate-icon"></label>
                                        </div>
                                    </div>
                                    </td>
                                  
                                </tr>                             
                                                      
                                <tr class="gradeX col-md">
                                    <td>正文内容</td>
                                    <td><textarea type="text" name="content" id="editor" placeholder="请输入标题" value=""></textarea></td>
                                   
                                </tr>


                            </tbody>
                            <tfoot>
                                <tr >
                                    <th colspan="2">
                                    <button class="btn btn-sm btn-primary pull-center" type="submit" style="margin-left: 50%;">
                                    <i class="fa fa-check"></i> <strong>确定</strong>
                                    </button>
                                    </th>
                                
                                   
                                </tr>
                            </tfoot>
                        
                        </table>
</form>    
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
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
   <script src="/Application/Admin/View/Public/js/plugins/layer/laydate/laydate.js"></script>
   
    <script src="/Application/Admin/View/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/Application/Admin/View/Public/js/plugins/validate/messages_zh.min.js"></script>
    <script src="/Application/Admin/View/Public/js/demo/form-validate-demo.min.js"></script>

     <!--sweetalert-->
     <script src="/Application/Admin/View/Public/js/plugins/sweetalert/sweetalert.min.js"></script>
</body>
</html>