/*
Navicat MySQL Data Transfer

Source Server         : 123
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : tp_new

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2018-06-23 21:05:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `think_manager`
-- ----------------------------
DROP TABLE IF EXISTS `think_manager`;
CREATE TABLE `think_manager` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) DEFAULT NULL,
  `psd` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_manager
-- ----------------------------
INSERT INTO `think_manager` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for `think_news`
-- ----------------------------
DROP TABLE IF EXISTS `think_news`;
CREATE TABLE `think_news` (
  `news_id` int(4) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(50) NOT NULL,
  `news_author` varchar(50) DEFAULT NULL,
  `news_content` text,
  `news_date` date DEFAULT NULL,
  `news_hits` int(4) DEFAULT '1',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_news
-- ----------------------------
INSERT INTO `think_news` VALUES ('24', '《祖宗十九代》曝特辑 岳云鹏遭林志玲', '华软', '由郭德纲导演，汇聚岳云鹏、吴京、吴秀波、井柏然、林志玲、王宝强、大鹏、吴君如、李晨、杜淳、郑恺、欧弟、张国立、贾乃亮、张俪、马苏、萧敬腾、汪东城、贾玲、孙艺洲、谢依霖等演员的奇幻喜剧《祖宗十九代》，将于2018年2月16日大年初一与全国观众见面。', '2018-06-23', '36');
INSERT INTO `think_news` VALUES ('30', 'thinkphp3.2.3验证码功能', '华软', 'thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,thinkphp3.2，tp3.2验证码verify,QQ:1023507448', '2017-06-23', '5');
INSERT INTO `think_news` VALUES ('31', 'thinkphp3.2.3自动验证和自动完成功能', '华软', 'thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能,thinkphp3.2，tp3.2自动验证和自动完成功能\r\nQQ:1023507448', '2017-06-23', '1');
INSERT INTO `think_news` VALUES ('32', 'thinkphp3.2.3分页功能', '华软', 'thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，thinkphp3.2，tp3.2分页功能，\r\nQQ:1023507448', '2018-06-23', '1');
INSERT INTO `think_news` VALUES ('33', 'thinkphp3.2.3增删改查', '华软', 'thinkphp3.2.3增删改查，thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查thinkphp3.2.3增删改查.QQ:1023507448', '2018-06-23', '5');
INSERT INTO `think_news` VALUES ('35', '男子恨母亲心疼钱不给自己看病 当街杀死63岁老妈', '网易新闻', '法制晚报·看法新闻 车祸受伤后总认为自己身体未恢复但63岁的母亲心疼钱不给他看病，41岁的男子陈某为此当街将母亲杀死。日前，山东省济南市中级法院一故意杀人罪判处陈某有期徒刑15年。\r\n\r\n2007年，陈某出车祸头部受伤后，长年感觉身体不适，但未查出其他疾病。但他总认为母亲心疼钱不给自己看病，产生了杀死母亲的念头。\r\n\r\n2017年10月18日，陈某在济南街头用电动三轮车撞击母亲，后持尖刀朝母亲捅刺。\r\n\r\n陈某母亲之被送往医院后抢救无效，于案发当日死亡。经鉴定，郑淑珍系肝破裂致大失血死亡。\r\n\r\n陈某作案后，仍在滞留在现场，当公安人员到来后如实供述了犯罪事实。经鉴定，陈家玉案发时有精神障碍，具有限定刑事责任能力。', '2018-06-23', '11');
INSERT INTO `think_news` VALUES ('37', '男子持土枪射杀侄子 潜逃31年后落网', '凤凰新闻', '6月23日报道，男子因琐事持土枪射伤侄子后，又用杀猪刀连砍数刀，致侄子当场死亡。31年后，陕西省商洛市山阳警方将其抓获。据山阳警方介绍，今年64岁的李某家住山阳县照川镇上河村，1972年因与侄子李某某发生纠纷遂怀恨在心，伺机杀死李某某却一直没机会。1987年初，李某谎称因其他用途在本村贷款后，于湖北省郧西县购买一支土枪带回家，多次练习射击。同年6月26日22时许，李某持土枪射伤李某某后，又用杀猪刀在李某某身上、头上连砍数刀，致李某某当场死亡。逃离过程中，李某砸毁并扔掉作案工具。为躲避追捕，李某先后逃往河南、江苏、上海、四川等地，以收废品、打零工为生。近年来逃至离家较近的湖北郧西县做木工，居无定所。来源：华商网', '2018-06-23', '10');
INSERT INTO `think_news` VALUES ('38', '美国部分非法移民戴脚铐出席听证会', '网易新闻', '当地时间2018年6月22日，美国得克萨斯州麦卡伦，一批中美洲移民被海关和边境保护局释放。这些移民家庭一旦被释放并安排庭审日期后，将被带到天主教慈善机构休整。', '2018-06-23', '3');
INSERT INTO `think_news` VALUES ('39', '一个中小主播月薪就有20万？许阿姨的聊天记录引起网友热议！', '电竞一条龙', '许阿姨：您不说我就不问了，我在斗鱼播很久了，我的观众也都在这里，每个月的工资够花，主要是有感情了，离不开了，斗鱼超棒，也欢迎你加入斗鱼。\r\n\r\n其他平台负责人：因为这边并不了解你在斗鱼的薪资状况，目前初步的话，可以提供给你20W起的底薪，我明白你的想法，斗鱼虽然是大平台但是资源方面平分给主播的并不多，如果想按长远发展的话，如果有更好的机会，也是可以尝试一下的嘛。\r\n\r\n许阿姨：月薪底薪20万，是时长薪资么。\r\n\r\n其他平台负责人：恩，对你来说就是纯时长薪资。\r\n\r\n许阿姨：我现在也还在成长，想把更多的心思放在如何做好直播上。暂时不想把经历浪费在这些琐事上，感谢触手这么看重我出这么高的价钱，我的能力不足以支撑起来，革命尚未成功，许阿姨仍需努力，也祝您工作顺利。', '2018-06-23', '10');
INSERT INTO `think_news` VALUES ('40', '王者荣耀天美对这些皮肤一点不上心 确定不是骗钱的？你后悔了吗', '超神电竞路', '在王者荣耀中皮肤是每一个玩家都想得到的，但是皮肤是需要花费点券进行购买的，所以很多人只能够选择放弃了。在王者荣耀当中皮肤种类五花八门，价格也是不等，做工也不相同。其实在王者荣耀中有些便宜的皮肤做工反而优良，而有些价格很贵的皮肤，做工反而很差。', '2018-06-23', '27');
