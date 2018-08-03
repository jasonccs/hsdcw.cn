<?php
return [
	//'配置项'=>'配置值'
	/* 数据库设置 */
    'TMPL_PARSE_STRING' =>array(

		'__PUBLIC__' =>__ROOT__. '/Application/Home/View/Public', // 更改默认的/Public 替换规则
		'__JS__' => '/Public/js', // 增加新的JS类库路径替换规则
		'__STATIC__' => '/Public', // 增加新的JS类库路径替换规则
		),


    'URL_HTML_SUFFIX'       =>  '.html',  // URL伪静态后缀设置


	'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
	'APP_SUB_DOMAIN_RULES'    =>    array(
	    'admin.localhost'    => 'Home/Xuan/index',  // admin.domain1.com域名指向Home模块

	),

    /**** 价格搜索范围   ****/
		'prices'=>array(
			'0'=>array(
				array(
					'0-6000',
					'6000元以下'
				),
				array(
					'6000-8000',
					'6000-8000元'
				),
				array(
					'8000-10000',
					'8000-10000元'
				),
				array(
					'10000-12000',
					'10000-12000元'
				),
				array(
					'12000-14000',
					'12000-14000元以上'
				),
				array(
					'14000',
					'14000元以上'
				)
			),
			'1'=>array(
				array(
						'0-2000',
						'2000元以下'
				),
				array(
						'2000-3000',
						'2000-3000元'
				),
				array(
						'3000-4000',
						'3000-4000元'
				),
				array(
						'4000-5000',
						'4000-5000元'
				),
				array(
						'5000-7000',
						'5000-7000元以上'
				),
				array(
						'7000',
						'7000元以上'
				)
			)
		),


		 /**** 户型搜索范围   ****/
		'huxing'=>array(
				array(
						'1',
						'1居室'
				),
				array(
						'2',
						'2居室'
				),
				array(
						'3',
						'3居室'
				),
				array(
						'4',
						'4居室'
				),
				array(
						'5',
						'5居室及以上'
				),


		),

		 /**** 面积搜索范围   ****/
		'mianji'=>array(
				array(
						'0-50',
						'50㎡以下'
				),
				array(
						'50-70',
						'50-70㎡'
				),
				array(
						'70-90',
						'70-90㎡'
				),
				array(
						'90-110',
						'90-110㎡'
				),
				array(
						'110-130',
						'110-130㎡'
				),
				array(
						'130',
						'130㎡以上'
				)

		),

];