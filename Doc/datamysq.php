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

***************************

create database stackfull;
use stackfull;

create table ask(
ask_id int unsigned not null auto_increment primary key,
title varchar(30) not null,
ask_tag not null,
uid int unsigned not null,
add_time not null,
edit_time not null,
ask_detail not null
);
create table answer(
answer_id int unsigned not null ,
answer_content text,
add_time not null,
edit_time not null,
uid int unsigned not null,
answer_comment not null
);
create table reply(
reply_id int unsigned not null,
reply_content text,
uid int unsigned not null,
reply_time not null
);
create table tags(
tag_id int unsigned not null,
tag_name varchar(60) not null
)
create table job(
job_id int unsigned not null auto_increment primary key,
job_name varchar(10) not null,
job_price not null,
job_place not null,
job_desc not null,
job_request not null
)





