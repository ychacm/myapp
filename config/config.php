<?php

/*数据库配置*/
$CONFIG['system']['db'] = array(
    'db_host'           =>      'localhost',
    'db_user'           =>      'root',
    'db_password'       =>      '',
    'db_database'       =>      'b5_10631563_ych',
    'db_table_prefix'   =>      'b5_10631563_ych_',
    'db_charset'        =>      'utf8',
    'db_conn'           =>      '',             //数据库连接标识; pconn 为长久链接，默认为即时链接
    
);

/*自定义类库配置*/
$CONFIG['system']['lib'] = array(
    'prefix'            =>      'my'   //自定义类库的文件前缀
);

$CONFIG['system']['route'] = array(
    'default_controller'             =>      'home',  //系统默认控制器
    'default_action'                 =>      'index',  //系统默认控制器
    'url_type'                       =>      1          /*定义URL的形式 1 为普通模式    index.php?c=controller&a=action&id=2
                                                         *              2 为PATHINFO   index.php/controller/action/id/2(暂时不实现)              
                                                         */                                                                           
);

/*缓存配置*/
$CONFIG['system']['cache'] = array(
    'cache_dir'                 =>      'cache', //缓存路径，相对于根目录
    'cache_prefix'              =>      'cache_',//缓存文件名前缀
    'cache_time'                =>      1800,    //缓存时间默认1800秒
    'cache_mode'                =>      2,       //mode 1 为serialize ，model 2为保存为可执行文件    
);






