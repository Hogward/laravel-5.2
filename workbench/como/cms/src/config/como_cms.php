<?php
/**
 * Created by PhpStorm.
 * User: xwk
 * Date: 2016/11/6
 * Time: 12:50
 */
return [
	'top' => [
		'style_default' => 1,
		'style' => [
			1 => ['title_1' => '无', 'title_2' => 'No', 'class' => 'padding-t-0'],
//				2 => ['title_1' => '正常','title_2' => 'Normal','class' => 'padding-t-default'],
//				3 => ['title_1' => '紧凑','title_2' => 'Compact','class' => 'padding-t-compact'],
//				4 => ['title_1' => '宽松','title_2' => 'Loose','class' => 'padding-t-loose'],
		],
	],
	'bottom' => [
		'style_default' => 2,
		'style' => [
			1 => ['title_1' => '无', 'title_2' => 'No', 'class' => 'padding-b-0'],
			2 => ['title_1' => '正常', 'title_2' => 'Normal', 'class' => 'padding-b-default'],
			3 => ['title_1' => '紧凑', 'title_2' => 'Compact', 'class' => 'padding-b-compact'],
			4 => ['title_1' => '宽松', 'title_2' => 'Loose', 'class' => 'padding-b-loose'],
		],
	],
	'layout' => [
		'layout_12' => [
			'filename' => '12',
			'title_1' => '单列布局',
			'title_2' => 'Single layout',
			'min' => 1,
			'max' => 12,
		],
		'layout_6_6' => [
			'filename' => '6_6',
			'title_1' => '6:6布局',
			'title_2' => '6:6 layout',
			'min' => 3,
			'max' => 12,
		],
		'layout_9_3' => [
			'filename' => '9_3',
			'title_1' => '9:3布局',
			'title_2' => '9:3 layout',
			'min' => 6,
			'max' => 12,
		],
		'layout_9_3_noaside' => [
			'filename' => '9_3_noaside',
			'title_1' => '9:3布局(无右侧边栏]',
			'title_2' => '9:3 layout no aside',
			'min' => 6,
			'max' => 12,
		]
	],
	'block' => [
		'splitter' => [
			'title_1' => '分割条',
			'title_2' => 'Splitter',
			'min' => 1,
			'max' => 12,
			'template_default' => 'splitter',
			'template' => [
				'splitter' => [
					'filename' => 'splitter',
					'title_1' => '分割条样式',
					'title_2' => 'Splitter Style',
				]
			]
		],
		'text' => [
			'title_1' => '文本',
			'title_2' => 'Text',
			'min' => 2,
			'max' => 12,
			'template_default' => 'text',
			'template' => [
				'text' => [
					'filename' => 'text',
					'title_1' => '文本样式',
					'title_2' => 'Text Style',
				]
			]
		],
		'image' => [
			'title_1' => '图片',
			'title_2' => 'Image',
			'min' => 3,
			'max' => 12,
			'template_default' => 'image',
			'template' => [
				'image' => [
					'filename' => 'image',
					'title_1' => '图片样式',
					'title_2' => 'Image Style',
				]
			],
			'click' => [],
			/*扩展举例
			'addition' => [
				'sub_title1' => [
					'field_type' => 'text',
					'title_1' => '副标题1',
					'title_2' => 'Sub title 1',
				],
				'sub_title2' => [
					'field_type' => 'text',
					'title_1' => '副标题2',
					'title_2' => 'Sub title 2',
				],
				'description' => [
					'field_type' => 'textarea',
					'field_attr' => 'rows="10"',
					'title_1' => '简述',
					'title_2' => 'Description',
				],
			],
			*/
		],
		'link' => [
			'title_1' => '单个链接',
			'title_2' => 'Link',
			'min' => 3,
			'max' => 12,
			'template_default' => 'link',
			'template' => [
				'link' => [
					'filename' => 'link',
					'title_1' => '链接样式',
					'title_2' => 'Link Style',
				]
			],
			'click' => [],
		],
		'links' => [
			'title_1' => '链接集',
			'title_2' => 'Links',
			'min' => 3,
			'max' => 12,
			'preset' => [
				'link' => [
					'block_type' => 'link',
					'title_1' => '链接',
					'title_2' => 'Link Block',
					'limit' => '*'
				],
			],
			'template_default' => 'links',
			'template' => [
				'links' => [
					'filename' => 'links',
					'title_1' => '链接集样式',
					'title_2' => 'Links Style',
				]
			],
			'click' => [],
		],
//		'video' => [
//			'title_1' => '视频',
//			'title_2' => 'Video',
//			'min' => 3,
//			'max' => 12,
//			'template_default' => 'video',
//			'template' => [
//				'video' => [
//					'filename' => 'video',
//					'title_1' => '带封面',
//					'title_2' => 'Album cover',
//				],
//				'video2' => [
//					'filename' => 'video2',
//					'title_1' => '不带封面',
//					'title_2' => 'No album cover',
//				]
//			],
//		],
//		'custom' => [
//			'title_1' => '自定义组',
//			'title_2' => 'Custom Group',
//			'min' => 2,
//			'max' => 12,
//			'preset' => [
//				
//			],
//			'template_default' => 'none',
//			'template' => [
//				'none' => [
//					'filename' => 'custom',
//					'title_1' => '无样式',
//					'title_2' => 'No Style',
//				],
//			],
//		],
		'imagelist' => [
			'title_1' => '图集',
			'title_2' => 'Image List',
			'min' => 6,
			'max' => 12,
			'preset' => [
				'image' => [
					'block_type' => 'image',
					'title_1' => '图片模块',
					'title_2' => 'Text Block',
					'limit' => '*'
				]
			],
			'template_default' => 'imagelist',
			'template' => [
				'imagelist' => [
					'filename' => 'imagelist',
					'title_1' => '幻灯片',
					'title_2' => 'Slide show',
				],
			],
		],
		'image_text' => [
			'title_1' => '图文',
			'title_2' => 'Image Text',
			'min' => 6,
			'max' => 12,
			'preset' => [
//				'title' => [
//					'block_type' => 'text',
//					'title_1' => '通栏标题',
//					'title_2' => 'title',
//					'limit' => '1'
//				],
				'image' => [
					'block_type' => 'image',
					'title_1' => '内容图片',
					'title_2' => 'Image Block',
					'limit' => '1'
				],
				'text' => [
					'block_type' => 'text',
					'title_1' => '内容文字',
					'title_2' => 'Text Block',
					'limit' => '1'
				],
			],
			'template_default' => 'image_text',
			'template' => [
				'image_text' => [
					'filename' => 'image_text',
					'title_1' => '左图右文(环绕]',
					'title_2' => 'Left Image Right text (surround]',
				],
				'image_text2' => [
					'filename' => 'image_text2',
					'title_1' => '右图左文(环绕]',
					'title_2' => 'Riht Image Left text (surround]',
				],
				'image_text3' => [
					'filename' => 'image_text3',
					'title_1' => '左图右文(不环绕]',
					'title_2' => 'Left Image Right text (not surround]',
				],
				'image_text4' => [
					'filename' => 'image_text4',
					'title_1' => '右图左文(不环绕]',
					'title_2' => 'Right Image Left text (not surround]',
				]
			],
		],
		'html' => [
			'title_1' => '源码',
			'title_2' => 'Html Source',
			'min' => 3,
			'max' => 12,
			'template_default' => 'html',
			'template' => [
				'html' => [
					'filename' => 'html',
					'title_1' => '源码样式',
					'title_2' => 'Html Source Style',
				]
			],
			'click' => [],
		],
	],
];