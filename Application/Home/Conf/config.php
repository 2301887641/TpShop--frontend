<?php
return array(
	'HTML_CACHE_ON'     =>    false, // 开启静态缓存
        'HTML_CACHE_TIME'   =>    0,   // 全局静态缓存有效期（秒）
        'HTML_FILE_SUFFIX'  =>    '.shtml', // 设置静态缓存文件后缀'
        'HTML_CACHE_RULES'  =>     array( 
            'index:index'=>'index', //index控制器的index方法,生成的文件名为index.在APP下面会生成Html文件夹,index就在里面
            'Index:goods'=>'Goods/{id|_url}'
    )
);

function _url($id){//对id进行处理
    return ceil($id/100).'/'.$id;
}