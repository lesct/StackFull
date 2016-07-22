

StackFull项目数据库设计

数据库名：stackfull
编码：utf-8;

数据库表：
前缀：sf_ 
表名：
    sf_user

    sf_ask
    sf_tags
    sf_ask_tag

    sf_collect

    sf_answer
    sf_ask_view
    
    sf_job

    
****************************************
NOT NULL - 每一行都必须含有值（不能为空），null 值是不允许的。
DEFAULT value - 设置默认值
UNSIGNED - 使用无符号数值类型，0 及正数
AUTO INCREMENT - 设置 MySQL 字段的值在新增记录时每次自动增长 1
PRIMARY KEY - 设置数据表中每条记录的唯一标识。 通常列的 PRIMARY KEY 设置为 ID 数值，与 AUTO_INCREMENT 一起使用。


*****************************************

一.创建数据库
    //创建数据库
    create databasle stackfull;
        //展示数据库
        show databases;
    //进入使用数据库
    use stackfull;
    //设置数据库字符集
    set names utf8;
        //显示数据库表
        show tables;
二.创建数据库表
    //1.创建用户表
      create table sf_user(
    `uid` int unsigned not null auto_increment,
    `uname` varchar(32) not null default '' comment '用户名',
    `cip` int not null default 0,
    `password` char(32) not null default '' comment '登录密码',
    `mobile` varchar(16) not null default '' comment '手机号',
    `email` varchar(64) not null default '' comment '邮箱',
    `avatar` varchar(64) not null default '' comment '头像',
    `salt` char(6) not null default '' comment '加盐加密',
    `gender` tinyint not null default '0' comment '性别,在我的档案中填写',
    `ctime` int not null default 0 comment '用户注册时间',
    primary key(`uid`),
    unique key(`uname`),
    unique key(`mobile`),
    unique key(`email`)
)engine=InnoDB default charset=utf8 comment '用户注册登录表';


    //2.创建提问表
    create table sf_ask(
    `ask_id` int unsigned not null auto_increment,
    `title` varchar(255) not null default '' comment '问题',
    `content` text comment '内容',
    `uid` int unsigned not null default 0 comment '用户ID',
    `ctime` int unsigned not null default 0,
    `mtime` int unsigned not null default 0,
    `viewcount` int unsigned not null default 0 comment '浏览数',
    `ansc` int unsigned not null default 0 comment '回答数',
    `collect` int unsigned not null default 0 comment '收藏数',
    `state` tinyint not null default 0 comment '状态0未回答1已回答2已解决',
    primary key (`ask_id`),
    key `uid`(`uid`)
)engine=InnoDB default charset=utf8 comment '问题表';

    //3.创建标签表
    create table sf_tags(
    `tid` int unsigned not null auto_increment,
    `name` varchar(255) not null default '' comment  '标签名',
    `summary` text comment '标签内容',
    `ctime` int unsigned not null default 0,
    `mtime` int unsigned not null default 0,
    primary key (`tid`)
)engine=InnoDB default charset=utf8 comment '标签表';

    //4.创建提问标签关联表
   create table sf_ask_tag(
    `ask_id` int unsigned not null default 0 comment '问题ID',
    `tid` int unsigned not null default 0 comment '标签ID',
    `ctime` int unsigned not null default 0,
    unique key `ask_id`(`ask_id`, `tid`),
    key `tid`(`tid`)
)engine=InnoDB default charset=utf8 comment '问题关联标签表';

    //5.创建回答表
    create table sf_answer(
    `aid` int unsigned not null auto_increment,
    `ask_id` int unsigned not null default 0 comment '用户ID',
    `ctime` int unsigned not null default 0,
    `mtime` int unsigned not null default 0,
    `content` text comment '内容',
    `supports` int(10) not null default '0' comment '支持数',
    primary key(`aid`)
)engine=InnoDB default charset=utf8 comment '回答表';

    //6.创建问题浏览记录表
    create table sf_ask_view(
    `vid` int unsigned not null auto_increment,
    `uid` int unsigned not null default 0,
    `ip` int not null default 0,
    `ctime` int unsigned not null default 0,
    `user_agent` varchar(255) not null default '0' comment '用户代理',
    key `uid`(`uid`),
    primary key(`vid`)
)engine=InnoDB default charset=utf8 comment '问题浏览记录表';

    //7.创建问题收藏表
    create table sf_collect(
    `cid` int unsigned not null auto_increment,
    `uid` int not null default 0,
    `ask_id` int not null default 0,
    `ctime` int not null default 0,
    primary key(`cid`)
)engine=InnoDB default charset=utf8 comment '收藏表';