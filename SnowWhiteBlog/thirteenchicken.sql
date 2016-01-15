-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-01-12 23:32:16
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thirteenchicken`
--
CREATE DATABASE IF NOT EXISTS `thirteenchicken` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `thirteenchicken`;

-- --------------------------------------------------------

--
-- 表的结构 `articletype`
--

CREATE TABLE IF NOT EXISTS `articletype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `imagepath` varchar(50) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `sendtime` datetime DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `jointime` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `articletype_id` int(11) DEFAULT NULL,
  `pv` int(11) NOT NULL,
  `up` int(11) NOT NULL,
  `down` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `jointime`, `user_id`, `articletype_id`, `pv`, `up`, `down`) VALUES
(11, 'true love for an angel ', 'i am here, just be here\r<br/>这一刻，我想我是在享受时间\r<br/>既然生命是有限的，何不好好享受快乐，让所有不愉快都滚蛋\r<br/>true love 就是一种 feel ，浅浅的，但却是真实的\r<br/>when love comes , just say hello\r<br/>期待旅行，旅游鞋，相机，音乐，阳光，或是阴雨\r<br/>一个人的背包， 一个人路，一个人的心情\r<br/>享受不同的食物，生活节奏，城市，人\r<br/>可能会看到孩子的微笑，幸福的老人，甜蜜的情侣\r<br/>may be one day, one night, one moment\r<br/>触摸粗涩的墙壁，感受透过树林的 sunshine， 闻着带有土地气息的空气\r<br/>time stop at that moment\r<br/>我就是我，从不掩饰悲伤，也不必快乐给谁看\r<br/>can anyone hear me', '2015-12-28 23:30:16', 1, NULL, 1, 0, 0),
(12, '阳光 、', '高数课快下课时，看到一个女生坐在阳光里。\r<br/>冬日黑色大衣，白色的帽衫，温柔的阳光，倾洒在微棕颜色的头发上，很温暖，很舒服。\r<br/>想想，很久没好好晒晒太阳了吧。\r<br/> \r<br/>今年冬天天津没有下雪。\r<br/>好像在城市上空被罩上了一层透明的保护膜，把雨水都挡掉了。\r<br/>大连下了，北京下了，山东下了，河北下了。\r<br/> \r<br/>整个寒假，最多的就是窝在家里。\r<br/>每天从快中午醒过来，屋里很暖，简单的穿着睡衣，阳光经过落地窗四十五度照进来，照耀在皮肤上，很温暖。\r<br/>如果没有聚会，没有偶尔的小发神经，真的可以在楼上待整整一个星期，不曾接触大地的质感。\r<br/>用朋友话说，再浇点水，就可以长蘑菇了。\r<br/>不喜欢透过玻璃窗的阳光，感觉真正站立在冬日寒风中的阳光才更真实。\r<br/> \r<br/>三月，终于在昨天看到了我认为的冬日的第一场雪。\r<br/>虽然落到地上全化成了水，第二天清晨时也就不剩什么了。\r<br/>虽然整个冬天全是阳光，虽然天只是阴了昨天一天，但我仿佛感觉我的世界阴了好久好久。\r<br/>有一个世纪那么久。\r<br/> \r<br/>是该晒晒太阳了吧。\r<br/> \r<br/>于是，高数课后不再是不知为何的往宿舍赶，选择到图书馆选几本书。\r<br/> \r<br/>有那么一刻，想过会在图书馆遇上一个她。\r<br/>抱着一堆书，转角，偶遇，一地的书，两个人互相帮忙捡书，touch，对视，脸红，心跳。\r<br/>嘻嘻，想多了。\r<br/> \r<br/>最终看上了一本叫感受美国的日子，一本郭敬明的日记。\r<br/> \r<br/>一个人，在湖旁。\r<br/>阳光，微风，绿色的湖水。\r<br/>风吹过湖面，层层波澜，从湖的这边，被吹向了那边。\r<br/>阳光经过湖面反射，闪耀出点点亮光。\r<br/>随着风吹得方向，撒了整整一湖面。\r<br/> \r<br/>坐在木质长椅上，\r<br/>听着耳机中班得瑞的轻音乐，\r<br/>吹着初春略有寒冷的小风，\r<br/>沐浴在温暖的阳光下，\r<br/>看着闪耀在湖面的斑点，\r<br/>微微的有点恍惚。\r<br/> \r<br/>想到了十八岁。\r<br/>曾以为，十八岁很壮观，在那一刻，我会长大，会成人，变得强大。\r<br/>现在回望，他如同十四岁十五岁一样，只是悄悄地从我生命里划过。\r<br/>默默地，没有留下特殊的记忆。\r<br/> \r<br/>大一的一个上半学期，已经对大学生活失去了希望。\r<br/>想想从前拥有目标，虽然只是学习，虽然很累，但很充实，很快乐。\r<br/>现在，整天的无所事事，无所作为，浑浑噩噩，浪费生命。\r<br/>根本不知道自己得到了什么，想得到什么。\r<br/>想到最后，又是一无所有。\r<br/> \r<br/>轻踏在湖边的芦苇中，不知何时湖水已悄悄上涨。\r<br/>湖水漫过鞋底，涟漪环绕着鞋面，一层，又一层。\r<br/> \r<br/>不知为何，我可以这么淡然的面对死亡，曾经那个可以让我害怕，让我心生畏惧的字眼。', '2015-12-28 23:50:45', 1, NULL, 0, 0, 0),
(13, '韦草原', '大笨蛋大笨蛋\r<br/>我就是大笨蛋', '2015-12-29 18:29:07', 1, NULL, 11, 18, 0);

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `replytime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `reply`
--

INSERT INTO `reply` (`id`, `content`, `username`, `email`, `posts_id`, `replytime`) VALUES
(3, '真是个笨蛋', 'JarRy', 'llwcy8801@163.com', 13, '2015-12-29 18:14:21'),
(4, '我就是', 'Garden', 'wcy@163.com', 13, '2015-12-29 18:28:42');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jointime` datetime DEFAULT NULL,
  `instroduction` varchar(255) DEFAULT NULL,
  `adminlabel` bit(1) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `jointime`, `instroduction`, `adminlabel`, `imagepath`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
