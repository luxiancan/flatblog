
use flat_style_blog;
show variables like '%time_zone%';  
set time_zone='+8:00';
select unix_timestamp(now());
select now();
CREATE DATABASE `flat_style_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


-- 管理员表
create table admins(
	`id` int(11) not null auto_increment key,
    `username` varchar(30) binary not null,
    `password` varchar(32) binary not null,
    `email` varchar(60) binary not null
);

alter table admin rename admins;

alter table admin change `email` `email` varchar(60) BINARY not null comment '管理员邮箱';

insert into admin(`username`,`password`,`email`) values('splendid','123456','lu_xiancan@163.com');


-- 文章表
create table `articles` (
	`id` int(11) not null auto_increment key comment '文章id',
	`title` varchar(255) not null comment '标题',
	`cat_name` tinyint not null comment '分类名称(1原创/2转载)',
	`content` text not null comment '内容',
	`summary` varchar(255) not null comment '摘要',
	`read_num` int(11) not null default '0' comment '浏览次数',
	`comment_num` int(11) not null default '0' comment '评论次数',
	`praise_num` int(11) not null default '0' comment '推荐次数',
	`status` tinyint not null default '1' comment '状态(1有效,2无效)',
	`author` varchar(50) not null comment '作者',
	`create_at` int(11) not null comment '创建时间',
	`updated_at` int(11) not null comment '更新时间'
);

alter table `articles` change `status` `status` tinyint not null default '1' comment '状态(1有效,2无效)';

insert into articles(`title`,`cat_name`,`content`,`summary`,`read_num`,`status`,`author`,`create_at`)
values
('从Java到Swift',1,'内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333内容333',
'摘要333摘要333摘要333摘要333摘要333摘要333摘要333摘要333摘要333摘要333摘要333',18,1,'总有人偷偷爱着你',unix_timestamp(now()));

alter table articles change `status` `status` tinyint not null comment '状态(1有效,2无效)';


-- 问题表
create table `questions` (
	`id` int(11) not null auto_increment key comment '问题id',
	`title` varchar(255) not null comment '标题',
	`content` text comment '内容',
	`read_num` int(11) not null default '0' comment '浏览次数',
	`answer_num` int(11) not null default '0' comment '回答次数',
    `follow_num` int(11) not null default '0' comment '关注次数',
	`status` tinyint not null default '1' comment '状态(1有效,2无效)',
	`author` varchar(50) not null comment '作者',
	`create_at` int(11) not null comment '发布时间',
    `update_at` int(11) not null comment '更新时间'
);

alter table `questions` add `updated_at` int(11) not null comment '更新时间' 
after `create_at`;

alter table `questions` change `updated_at` `update_at` int(11) not null comment '更新时间';

-- alter table questions change `content` `content` text not null comment '内容'

insert into questions(`title`,`content`,`answer_num`,`author`,`create_at`) 
values('for循环语句，，，','大佬们大佬们大佬们快出来啊，麻烦跟小弟说下',0,'烟花易冷',unix_timestamp(now()));


-- 标签表
create table `tags` (
	`id` int(11) not null auto_increment key comment '标签id',
    `class_name` varchar(255) not null comment '标签所属分类',
	`tag_name` varchar(255) not null comment '标签名称',
	`art_num` int(11) not null default '0' comment '关联文章数',
	`que_num` int(11) not null default '0' comment '关联问题数',
    `create_at` int(11) not null comment '创建时间',
	key `tag_name` (`tag_name`)
);

alter table `tags` change `tag_name` `tag_name` varchar(255) unique not null comment '标签名称';
alter table `tags` change `que_num` `que_num` int(11) not null default '0' comment '关联问题数';
alter table `tags` add `create_at` int(11) not null comment '创建时间';

insert into `tags`(`class_name`,`tag_name`,`create_at`) 
values
('移动开发','Android',unix_timestamp(now())),
('移动开发','iOS',unix_timestamp(now())),
('移动开发','Unity 3D',unix_timestamp(now())),
('移动开发','Cocos2d-x',unix_timestamp(now())),
('移动开发','游戏开发',unix_timestamp(now())),

('前端开发','HTML/CSS',unix_timestamp(now())),
('前端开发','JavaScript',unix_timestamp(now())),
('前端开发','jQuery',unix_timestamp(now())),
('前端开发','Bootstrap',unix_timestamp(now())),
('前端开发','Vue.js',unix_timestamp(now())),
('前端开发','WebApp',unix_timestamp(now())),
('前端开发','HTML5游戏',unix_timestamp(now())),

('后端开发','Java',unix_timestamp(now())),
('后端开发','C/C++',unix_timestamp(now())),
('后端开发','PHP',unix_timestamp(now())),
('后端开发','Node.js',unix_timestamp(now())),
('后端开发','JSP',unix_timestamp(now())),
('后端开发','ASP.NET',unix_timestamp(now())),
('后端开发','Ruby',unix_timestamp(now())),

('大数据','SAS',unix_timestamp(now())),
('大数据','Python',unix_timestamp(now())),
('大数据','R语言',unix_timestamp(now())),
('大数据','Hadoop',unix_timestamp(now())),
('大数据','Spark',unix_timestamp(now())),
('大数据','云计算',unix_timestamp(now())),

('数据库','MySQL',unix_timestamp(now())),
('数据库','SQL Server',unix_timestamp(now())),
('数据库','Oracle',unix_timestamp(now())),
('数据库','SQLite',unix_timestamp(now())),
('数据库','DB2',unix_timestamp(now())),
('数据库','MongoDB',unix_timestamp(now())),

('操作系统','Windows',unix_timestamp(now())),
('操作系统','Mac OS',unix_timestamp(now())),
('操作系统','Linux',unix_timestamp(now())),
('操作系统','运维/测试',unix_timestamp(now())),

('数据结构','数据结构',unix_timestamp(now())),
('数据结构','算法',unix_timestamp(now())),

('开发工具','Git/Github',unix_timestamp(now())),
('开发工具','Gulp',unix_timestamp(now())),
('开发工具','Grunt',unix_timestamp(now())),
('开发工具','VI',unix_timestamp(now())),
('开发工具','SVN',unix_timestamp(now()));



alter table tags drop column class_name;


-- 文章和标签关系表
create table `relation_article_tag`(
	`id` int(11) not null auto_increment key comment '自增id',
	`article_id` int(11) not null unique comment '文章id',
	`tag_name` varchar(255) not null comment '标签名称',
	key `tag_name` (`tag_name`)
);

alter table `relation_article_tag` change `article_id` `article_id` int(11) not null unique comment '文章id';

alter table `relation_article_tag` rename `relation_article_tag`; 

insert into `relation_article_tag`(`article_id`,`tag_name`) values (55,'Android'),(56,'Python'),(57,'C,C++'),(58,'JAVA'),(59,'iOS'),(60,'HTML,PHP,JS'),
(61,'JAVA'),(62,'iOS'),(63,'C,C++'),(64,'Android'),(65,'HTML,PHP,JS'),(66,'Android'),(67,'iOS'),(68,'C,C++'),(69,'Python'),(70,'JS,jQuery');


-- 问题和标签关系表
create table `relation_question_tag` (
	`id` int(11) not null auto_increment key comment '自增id',
	`question_id` int(11) not null unique comment '问题id',
	`tag_name` varchar(255) not null comment '标签名称',
	key `tag_name` (`tag_name`)
);
alter table `relation_question_tag` change `question_id` `question_id` int(11) not null unique comment '问题id';

insert into `relation_question_tag`(`question_id`,`tag_name`) values (5,'JAVA,MySQL'),(6,'Android'),(7,'C,C++'),(8,'HTML,JAVA,iOS'),(9,'Python')
,(10,'JS,jQuery'),(11,'HTML,CSS'),(12,'PHP,MySQL'),(13,'Linux'),(14,'MySQL');


-- 用户表
create table `users` (
  `id` int(11) not null auto_increment key comment '用户id',
  `username` varchar(50) binary not null unique comment '用户名区分大小写唯一',
  `auth_key` varchar(32) not null comment '自动登录key',
  `password` varchar(50) binary not null comment '密码区分大写',
  `password_reset_token` varchar(255) not null comment '重置密码token',
  `email_validate_token` varchar(255) not null comment '邮箱验证token',
  `email` varchar(255) binary not null comment '邮箱区分大小写',
  `phone_validate_token` varchar(255) not null comment '手机验证token',
  `phone` varchar(255) not null comment '手机',
  `job` varchar(50) not null comment '职位',
  `sex` tinyint not null default '0' comment '性别(0保密1男2女)',
  `signature` varchar(255) not null comment '个性签名',
  `avatar` varchar(255) not null comment '头像',
  `follower_num` int(11) not null default '0' comment '关注数量',
  `fans_num` int(11) not null default '0' comment '粉丝数量',
  `status` tinyint not null default '1' comment '状态(1有效,2无效)',
  `create_at` int(11) not null comment '创建时间',
  `update_at` int(11) not null comment '修改时间',
  `last_login_time` int(11) not null comment '最后登录时间'
);


alter table `users` change `created_at` `create_at` int(11) not null comment '创建时间';
alter table `users` add `last_login_time` int(11) not null comment '最后登录时间';

insert into `users` (`username`,`password`,`email`,`sex`,`create_at`)
values ('落花有意随流水','123456','lu_xiancan@163.com','1',unix_timestamp(now()));


create table `a_praise`(
	`id` int not null auto_increment key comment '自增id',
    `aid` int not null comment '文章id',
    `from_uid` int not null comment '推荐用户id',
    `praise_at` int not null comment '推荐时间'
);
alter table `a_praise` add `praise_at` int not null comment '推荐时间';

create table `a_collect`(
	`id` int not null auto_increment key comment '自增id',
    `aid` int not null comment '文章id',
    `from_uid` int not null comment '收藏用户id',
    `collect_at` int not null comment '收藏时间'
);


create table `a_comment`(
	`id` int not null auto_increment key comment '自增id',
    `aid` int not null comment '文章id',
    `from_uid` int not null comment '评论用户id',
    `content` text not null comment '评论内容',
    `comment_at` int not null comment '评论时间'
);

create table `a_reply`(
	`id` int not null auto_increment key comment '自增id',
    `comment_id` int not null comment '评论id',
    `reply_id` int not null comment '回复id',
    `reply_type` tinyint not null comment '回复类型(0:对评论的回复,1:对回复的回复)',
    `from_uid` int not null comment '回复用户id',
    `to_uid` int not null comment '目标用户id',
    `content` text not null comment '回复内容',
    `reply_at` int not null comment '回复时间'
);

create table `q_follow`(
	`id` int not null auto_increment key comment '自增id',
    `qid` int not null comment '问题id',
    `from_uid` int not null comment '关注用户id',
    `follow_at` int not null comment '关注时间'
);


create table `q_answer`(
	`id` int not null auto_increment key comment '自增id',
    `qid` int not null comment '问题id',
    `from_uid` int not null comment '回答用户id',
    `content` text not null comment '回答内容',
    `praise_num` int not null default '0' comment '点赞数',
    `answer_at` int not null comment '回答时间'
);

alter table `q_answer` change `praise_num` `praise_num` int not null default '0' comment '点赞数';

create table `q_reply`(
	`id` int not null auto_increment key comment '自增id',
    `answer_id` int not null comment '回答id',
    `reply_id` int not null comment '回复id',
    `reply_type` tinyint not null comment '回复类型(0:对回答的回复,1:对回复的回复)',
    `from_uid` int not null comment '回复用户id',
    `to_uid` int not null comment '目标用户id',
    `content` text not null comment '回复内容',
    `reply_at` int not null comment '回复时间'
);

create table `q_answer_agree`(
	`id` int not null auto_increment key comment '自增id',
    `answer_id` int not null comment '回答id',
    `from_uid` int not null comment '点赞用户id',
    `agree_at` int not null comment '点赞时间'
);
alter table `q_answer_agree` add `qid` int not null comment '问题id' after `id`;

update `articles` set `praise_num`=0 where `id`>1;

create table `user_relation`(
	`id` int not null auto_increment primary key comment '自增id',
	`uid` int not null comment '用户id',
    `fid` int not null comment '被关注者id',
	`type` tinyint not null  comment '关系类型（1粉丝，2被关注）',
    `time` int not null comment '关注时间',
    key (`uid`,`fid`)
);


create table `user_dynamic`(
	`id` int not null auto_increment primary key comment '自增id',
	`uid` int not null comment '用户id',
    `oid` int not null comment '具体被操作的id(aid,qid,uid...)',
	`type` tinyint not null comment '动态类型（1发表文章，2收藏文章，3推荐文章，4评论文章，5提问题，6回答问题，7关注问题，8关注用户）',
	`time` int not null comment '动态时间'
);





