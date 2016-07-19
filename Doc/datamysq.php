<?php
/**
 * Created by PhpStorm.
 * User: wsp
 * Date: 2016/7/19
 * Time: 18:18
 */
?>

数据库名：stackfull
    编码：utf-8

数据库表：
    前缀：sf_

    sf_user
*****************************************
创建数据库
crete database stackfull;

创建数据库表
    1.用户表
        create table sf_user(
            uid int not null auto_increment primary key,
            uname varchar(32) not null default ''unique key,
            mobile varchar(16) not null default ''unique key,
            email varchar(64) not null default '' unique key,
            password varchar(32) not null default '',
            avatar varchar(100) not null default '',
            salt varchar(6) not null default '',
            gender tinyint not null default '0',
            ctime int not null default '0',
)ENGINE=InnoDB charset=utf8;

    2.提问表
        create table sf_ask(
        

);

    3.问答表
        create table sf_answer(


);

    4.关联表
        create table sf_