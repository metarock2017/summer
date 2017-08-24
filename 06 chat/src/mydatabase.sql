create database chat;

set names gbk;

use chat;

create table denglu(
id int auto_increment comment 'id',
name varchar(30) not null comment '名字',
phone varchar(30) not null comment '手机号',
password varchar(30) not null comment '密码',
addtime varchar(30) not null comment '时间',
primary key(id)
)charset=utf8;

create table message(
id int unsigned primary key auto_increment,
sender varchar(64) not null,
getter varchar(64) not null,
content varchar(3600) not null,
sendTime datetime not null,
isGet tinyint default 0
)charset=utf8;

