<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/11
 * Time: 14:15
 */
$siteUrl = get_bloginfo( 'url', 'display' );
$slugs = is_page() ? get_post($post->ID, ARRAY_A)['post_name'] : '';
$category = get_categories();
$categoryNameToId = array();
$categoryIdToName = array();
foreach ($category as $item){
    $categoryNameToId[trim($item->name)] = $item->term_id;
    $categoryIdToName[$item->term_id] = trim($item->name);
}
$navInfo = [
    ''=>[
        'title'=>'网站首页',
        'class'=>'',
        'child'=>[
            ['title'=>'关于我们','class'=>'','url'=>$siteUrl.'/about/?id='.$categoryNameToId['公司简介']],
            ['title'=>'新闻资讯','class'=>'','url'=>$siteUrl.'/news/?id='.$categoryNameToId['公司动态']]
        ]
    ],
    'about'=>[
        'title'=>'关于我们',
        'class'=>'',
        'child'=>[
            ['title'=>'公司简介','class'=>''],
            ['title'=>'企业文化','class'=>''],
            ['title'=>'公司资质','class'=>''],
            ['title'=>'企业荣誉','class'=>''],
            ['title'=>'发展历程','class'=>''],
        ]
    ],
    'news'=>[
        'title'=>'新闻资讯',
        'class'=>'',
        'child'=>[
            ['title'=>'公司动态','class'=>''],
            ['title'=>'行业动态','class'=>''],
        ]
    ],
    'food'=>[
        'title'=>'美食文化',
        'class'=>'',
        'child'=>[
            ['title'=>'豆腐美食','class'=>''],
            ['title'=>'豆腐宴','class'=>''],
        ]
    ],
    'product'=>[
        'title'=>'公司产品',
        'class'=>'',
        'child'=>[
            ['title'=>'产品展示','class'=>''],
            ['title'=>'天猫商城','class'=>'icon','url'=>'https://taobao.com'],
        ]
    ],
    'hierarchy'=>[
        'title'=>'溯源体系',
        'class'=>'ict1',
        'child'=>[
            ['title'=>'原产料基地','class'=>''],
        ]
    ],
    'affiliate'=>[
        'title'=>'连锁加盟',
        'class'=>'ict2',
        'child'=>[
            ['title'=>'连锁加盟','class'=>''],
        ]
    ],
    'contact'=>[
        'title'=>'联系我们',
        'class'=>'item ict3',
        'child'=>[
            ['title'=>'联系方式','class'=>''],
            ['title'=>'在线招聘','class'=>'','url'=>$siteUrl.'/job'],
        ]
    ],
];

