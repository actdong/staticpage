
<?php

return [

	'routes' => [
		// 'login' => ['middleware' => ['web']],
		// 'jqadm' => ['prefix' => 'admin/{site}/jqadm', 'middleware' => ['web', 'auth']],
		// 'extadm' => ['prefix' => 'admin/{site}/extadm', 'middleware' => ['web', 'auth']],
		// 'jsonadm' => ['prefix' => 'admin/{site}/jsonadm', 'middleware' => ['web', 'auth']],
		// 'jsonapi' => ['prefix' => 'jsonapi', 'middleware' => ['web', 'api']],
		// 'account' => ['middleware' => ['web', 'auth']],
		// 'default' => ['middleware' => ['web']],
		// 'update' => [],
	],

	'page' => [
		// 'account-index' => [ 'account/profile','account/history','account/favorite','account/watch','basket/mini','catalog/session' ],
		// 'basket-index' => [ 'basket/standard','basket/related' ],
		// 'catalog-count' => [ 'catalog/count' ],
		// 'catalog-detail' => [ 'basket/mini','catalog/stage','catalog/detail','catalog/session' ],
		// 'catalog-list' => [ 'basket/mini','catalog/filter','catalog/stage','catalog/lists' ],
		// 'catalog-stock' => [ 'catalog/stock' ],
		// 'catalog-suggest' => [ 'catalog/suggest' ],
		// 'checkout-confirm' => [ 'checkout/confirm' ],
		// 'checkout-index' => [ 'checkout/standard' ],
		// 'checkout-update' => [ 'checkout/update' ],
	],

	/*
	'resource' => [
		'db' => [
			'adapter' => env('DB_CONNECTION', 'mysql'),
			'host' => env('DB_HOST', 'localhost'),
			'port' => env('DB_PORT', ''),
			'socket' => '',
			'database' => env('DB_DATABASE', 'laravel'),
			'username' => env('DB_USERNAME', 'root'),
			'password' => env('DB_PASSWORD', ''),
			'stmt' => ["SET SESSION sort_buffer_size=2097144; SET NAMES 'utf8'; SET SESSION sql_mode='ANSI'"],
		],
	],
	*/

	'admin' => [],

	'client' => [
		'html' => [
			 'catalog' => [
                                'lists' => [ 'size' => 20 ],
			// 	'filter' => [
			// 		'tree' => [
			// 			'startid' => 4,
			// 		],
			// 	],
			 ],
			'basket' => [
				'cache' => [
					// 'enable' => false, // Disable basket content caching
				],
			],
			'common' => [
				'content' => [
					// 'baseurl' => '/',
				],
				'template' => [
					// 'baseurl' => 'packages/aimeos/shop/themes/elegance',
				],

			],
			'checkout' => [
				'standard' => [
					// 'standard' => [
					// 	'subparts' => ['address', 'payment', 'summary', 'process'],
					// ],
					'onepage' => ['address', 'delivery', 'payment', 'summary'],
			    'summary' => [
						'standard' => [
							// 'subparts' => ['details'],
						],
					],
					'address' => [
						'delivery' => [
							'mandatory' => [
								 'order.base.address.lastname',
								 'order.base.address.address1',
								 'order.base.address.city',
								 'order.base.address.telephone',
							],
							'optional' => [
								'order.base.address.postal',
							],
						],
						'billing' => [
							'mandatory' => [
								 'order.base.address.lastname',
								 'order.base.address.address1',
								 'order.base.address.city',
								 'order.base.address.telephone',
							],
							'optional' => [
								'order.base.address.postal',
							],
						],
					],
				],
			],
		],
	],

	// 'controller' => [
	// 	// 'extjs' => [
	// 	// 	'product' => [
	// 	// 		'export' => [
	// 	// 			'text' => [
	// 	// 				'default' => [
	// 	// 					'downloaddir' => '/var/www/demo04/files/exports',
	// 	// 				],
	// 	// 			],
	// 	// 		],
	// 	// 	],
	// 	// ],
	// 	'jobs' => [
	// 		'product' => [
	// 			'import' => [
	// 				'csv' => [
	// 					'container' => [
	// 						'type' => 'PHPExcel',
	// 						'content' => 'PHPExcel',
	// 					],
	// 				],
	// 				'location' => '/tmp',
	// 			],
	// 		],
	// 	],
	// 	'common' => [
	// 		'product' => [
	// 			'import' => [
	// 				'csv' => [
	// 					'processor' => [
	// 						'price' => [
	// 							'listtypes' => [
	// 								'price.typeid',
	// 								'price.type',
	// 								'price.label',
	// 								'price.currencyid',
	// 								'price.value',
	// 								'price.costs',
	// 								'price.rebate',
	// 								'price.taxrate',
	// 								'price.status',
	// 							],
	// 						],
	// 					],
	// 				],
	// 			],
	// 		],
	// 	],
	// ],

	'i18n' => [
		'zh_CN' => [
			'client/code' => [
				'price:default' => ['￥%1$s'],
			],
			'client' => [
                                'Page %1$d of %2$d' => [ '第%1$d页 共%2$d页' ], 
				'Latest' => [ '最新' ],
				'Our products' => [ '小学帮产品列表' ],
                                'Stock: %1$s, %2$s' => [ '库存: %2$s' ],
                                'I accept the <a href="%1$s" target="_blank" title="terms and conditions" alt="terms and conditions">terms and conditions</a> and <a href="%2$s" target="_blank" title="privacy policy" alt="privacy policy">privacy policy</a>' => [ '我接受 <a href="%1$s" target="_blank" title="terms and conditions" alt="terms and conditions">条款及细则</a> 以及 <a href="%2$s" target="_blank" title="privacy policy" alt="privacy policy">隐私权政策</a>' ],
			],
			'admin' => [
				'dashboard' => [ '销售统计' ],
				'order' => [ '订单情况' ],
				'customer' => [ '会员信息' ],
				'product' => [ '产品管理' ],
				'coupon' => [ '优惠券' ],
				'supplier' => [ '供应商' ],
				'plugin' => [ '插件管理' ],
				'locale' => [ '区域语言' ],
				'type' => [ '类型信息' ],
				'Expert' => [ '开发者选项' ],
				'Latest orders' => [ '最新订单情况' ],
				'Orders by payment status' => [ '根据支付状态统计' ],
				'Orders by hour' => [ '根据时间段统计' ],
				'Orders by day' => [ '根据日期统计' ],
				'Payment types' => [ '支付类型' ],
				'Delivery types' => [ '配送类型' ],
				'Dashboard' => [ '面板详情' ],
				'Status' => [ '状态' ],
				'Type' => [ '类型' ],
				'image' => [ '图片' ],
				'text' => [ '文本描述' ],
				'stock' => [ '库存量' ],
				'related' => [ '关联产品' ],
				'physical' => [ '尺寸大小' ],
				'special' => [ '特殊功能' ],
				'Allow custom price' => [ '允许价格定制' ],
				'Provider' => [ '提供者' ],
				'Find category' => [ '查找目录' ],
				'Postal' => [ '邮政编码' ],
				'Invoice' => [ '发票编号' ],
				'Pay status' => [ '支付状态' ],
				'Pay date' => [ '支付日期' ],
				'Ship status' => [ '发货状态' ],
				'Ship date' => [ '发货日期' ],
				'Related order' => [ '关联订单' ],
				'Modified' => [ '最新修改' ],
				'Customer ID' => [ '顾客ID' ],
				'Site' => [ '商品域' ],
				'Rebate' => [ '退税' ],
				'Tax' => [ '税率' ],
				'Incl. tax' => [ '含税' ],
				'Subscription' => [ '订阅' ],
				'VAT ID' => [ '增值税 ID' ],
				'Title' => [ '标题' ],
				'House number' => [ '房屋号码' ],
				'Floor' => [ '楼层' ],
				'Zip code' => [ '邮政编码' ],
				'Facsimile' => [ '传真' ],
				'Pay name' => [ '支付商品名' ],
				'Pay price' => [ '支付商品价格' ],
				'Pay costs' => [ '支付总价' ],
				'Pay rebate' => [ '支付返利' ],
        'Order' => [ '订单详情' ],
				'invoice' => [ '发票信息' ],
				'pay:received' => [ '支付: 已收到' ],
				'pay:authorized' => [ '支付: 授权' ],
				'pay:pending' => [ '支付: 待定' ],
				'pay:refund' => [ '支付: 退款' ],
				'pay:refused' => [ '付款: 拒绝' ],
				'pay:canceled' => [ '付款: 已取消' ],
				'pay:deleted' => [ '付款: 已删除' ],
				'pay:unfinished' => [ '付款: 未完成' ],
				'Code' => [ '识别码' ],
				'City' => [ '所在城市' ],
			],
		],
	],

	'madmin' => [
		'cache' => [
			'manager' => [
				// 'name' => 'None', // Disable caching
			],
		],
		'log' => [
			'manager' => [
				'standard' => [
					// 'loglevel' => 7, // Enable debug logging into madmin_log table
				],
			],
		],
	],

	'mshop' => [
	],


	'command' => [
	],

	'frontend' => [
	],

	'backend' => [
	],

];

