/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1/localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : zqsystem

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2018-08-15 16:46:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for zq_department
-- ----------------------------
DROP TABLE IF EXISTS `zq_department`;
CREATE TABLE `zq_department` (
  `id` tinyint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '地区id',
  `name` varchar(255) NOT NULL COMMENT '地区名',
  `department` varchar(255) NOT NULL COMMENT '部门名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_department
-- ----------------------------
INSERT INTO `zq_department` VALUES ('1', '济南', '产品');
INSERT INTO `zq_department` VALUES ('2', '济宁', '58同城');
INSERT INTO `zq_department` VALUES ('3', '济南', '运营');
INSERT INTO `zq_department` VALUES ('4', '济南', '销售一部');

-- ----------------------------
-- Table structure for zq_grade
-- ----------------------------
DROP TABLE IF EXISTS `zq_grade`;
CREATE TABLE `zq_grade` (
  `gradeid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '职务id',
  `gradename` char(255) NOT NULL COMMENT '职务名',
  PRIMARY KEY (`gradeid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_grade
-- ----------------------------
INSERT INTO `zq_grade` VALUES ('1', '员工');
INSERT INTO `zq_grade` VALUES ('2', '经理');
INSERT INTO `zq_grade` VALUES ('3', '总监');
INSERT INTO `zq_grade` VALUES ('4', '副总裁');
INSERT INTO `zq_grade` VALUES ('5', '总裁');
INSERT INTO `zq_grade` VALUES ('6', 'CEO');
INSERT INTO `zq_grade` VALUES ('7', 'up');

-- ----------------------------
-- Table structure for zq_order
-- ----------------------------
DROP TABLE IF EXISTS `zq_order`;
CREATE TABLE `zq_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num` varchar(255) NOT NULL COMMENT '订单编号',
  `starttime` datetime NOT NULL COMMENT '下单时间',
  `price` int(255) DEFAULT NULL COMMENT '订单价格',
  `type` varchar(255) NOT NULL DEFAULT '' COMMENT '业务类型',
  `company_cname` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `remarke` tinytext COMMENT '订单备注',
  `liable_person` char(5) NOT NULL COMMENT '责任人',
  `staff_id` smallint(5) unsigned NOT NULL COMMENT '员工id',
  `department_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '地区id',
  `department_name` char(10) NOT NULL COMMENT '地区名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_order
-- ----------------------------
INSERT INTO `zq_order` VALUES ('1', 'JN201805220000123', '2018-05-15 00:00:00', '3000', '官网', '济南完美新娘', '备注信息', '李好好', '1', '2', '济南运营二部');
INSERT INTO `zq_order` VALUES ('2', 'GD20180522000124', '2018-05-22 00:00:00', '5000', '网站', '济南某某机械', '备注信息，尾款4000未结', '李坏坏', '1', '3', '济南销售一部');
INSERT INTO `zq_order` VALUES ('3', 'GD20180612132123', '2018-05-24 11:48:41', '9000', '服务包', '广东某某公司', '未', '李好坏', '1', '4', '济南销售二部');
INSERT INTO `zq_order` VALUES ('4', 'JN201812121231231', '2018-05-23 11:55:30', '120000', 'ERP', '济南某某', '无', '李坏好', '1', '1', '济南销售三部');
INSERT INTO `zq_order` VALUES ('5', 'JN201812121231232', '2018-05-24 16:01:49', '29999', '系统', '济南某某公司', '备注信息123', '张好好', '1', '4', '济南运营一部');
INSERT INTO `zq_order` VALUES ('6', 'JN201802021231232', '2018-05-25 09:10:14', '123', '加V', '某某济宁', '1231321321', '王宁宁', '2', '3', '济南运营三部');
INSERT INTO `zq_order` VALUES ('7', 'JN201812120292111', '2018-05-28 14:20:22', '21222', '服务包续费', '济南', '3242423423423423', '秘小马', '2', '3', '济南运营二部');
INSERT INTO `zq_order` VALUES ('8', 'JM201812120292111', '2018-05-31 09:42:33', '9000', '加V续费', '江门某某公司', '备注信息', '秘小凯', '1', '3', '济南销售一部');
INSERT INTO `zq_order` VALUES ('9', 'JM201812120212312', '2018-05-29 16:01:15', '35000', '资信', '江门某某某某公司', '备注信息', '李好好好二', '2', '2', '济南销售二部');
INSERT INTO `zq_order` VALUES ('10', 'JM201812120212311', '2018-05-29 19:01:15', '3000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '2', '2', '济南销售三部');
INSERT INTO `zq_order` VALUES ('11', 'JM201812120212311', '2018-05-30 09:01:15', '3000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '3', '3', '济南运营一部');
INSERT INTO `zq_order` VALUES ('12', 'JM201812120212311', '2018-05-30 09:01:15', '3000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '4', '5', '济南运营三部');
INSERT INTO `zq_order` VALUES ('13', 'JM201812120212311', '2018-05-30 10:17:21', '13000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '5', '2', '济南运营二部');
INSERT INTO `zq_order` VALUES ('14', 'JM201812120212312', '2018-05-30 14:17:21', '1000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '2', '1', '济南销售一部');
INSERT INTO `zq_order` VALUES ('15', 'JM201812120212311', '2018-05-29 19:01:15', '3000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '2', '2', '济南销售二部');
INSERT INTO `zq_order` VALUES ('16', 'JM201812120212311', '2018-05-30 09:01:15', '3000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '3', '3', '济南销售三部');
INSERT INTO `zq_order` VALUES ('17', 'JM201812120212311', '2018-05-30 09:01:15', '3000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '4', '5', '济南运营一部');
INSERT INTO `zq_order` VALUES ('18', 'JM201812120212311', '2018-05-30 10:17:21', '13000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '5', '2', '济南运营三部');
INSERT INTO `zq_order` VALUES ('19', 'JM201812120212312', '2018-05-30 14:17:21', '1000', '资信', '江门某某某某公司', '备注信息', '李好好好1', '2', '1', '济南运营二部');
INSERT INTO `zq_order` VALUES ('20', 'JN201805310000001', '2018-05-31 09:09:20', '2500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南销售一部');
INSERT INTO `zq_order` VALUES ('21', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南销售二部');
INSERT INTO `zq_order` VALUES ('22', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南销售三部');
INSERT INTO `zq_order` VALUES ('23', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南运营一部');
INSERT INTO `zq_order` VALUES ('24', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南运营三部');
INSERT INTO `zq_order` VALUES ('25', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南运营二部');
INSERT INTO `zq_order` VALUES ('26', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南销售一部');
INSERT INTO `zq_order` VALUES ('27', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '济南销售二部');
INSERT INTO `zq_order` VALUES ('28', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('29', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('30', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('31', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('32', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('33', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('34', 'JN201805310000001', '2018-05-31 04:09:20', '1100', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('35', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('36', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('37', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('38', 'JN201805310000001', '2018-05-31 09:47:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('39', 'JN201805310000001', '2018-05-31 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');
INSERT INTO `zq_order` VALUES ('40', 'JN201805310000001', '2018-06-13 04:09:20', '1500', '加V续费', '江门某某某某公司', '备注信息', '1', '1', '1', '');

-- ----------------------------
-- Table structure for zq_staff
-- ----------------------------
DROP TABLE IF EXISTS `zq_staff`;
CREATE TABLE `zq_staff` (
  `staff_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '员工ID',
  `staff_name` char(4) NOT NULL DEFAULT '' COMMENT '员工姓名',
  `contact_tel` char(11) DEFAULT NULL,
  `work_time` date DEFAULT NULL,
  `duty_level` tinyint(3) unsigned DEFAULT '0' COMMENT '职务等级',
  `department_id` tinyint(5) unsigned NOT NULL COMMENT '地区id',
  `department_name` varchar(255) NOT NULL DEFAULT '' COMMENT '部门名',
  PRIMARY KEY (`staff_id`),
  KEY `deparment_id` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_staff
-- ----------------------------
INSERT INTO `zq_staff` VALUES ('2', '朱好好', '15098889498', null, '1', '1', '济南运营二部');
INSERT INTO `zq_staff` VALUES ('3', '李好好', '15726167617', null, '2', '2', '济南产品部');
INSERT INTO `zq_staff` VALUES ('4', '王好好', '15169110950', null, '3', '1', '济南销售部');
INSERT INTO `zq_staff` VALUES ('1', '欧阳德', '12312312312', null, '6', '0', '总裁');
INSERT INTO `zq_staff` VALUES ('5', '王群', '13256151567', null, '3', '0', '济南销售一部');
INSERT INTO `zq_staff` VALUES ('6', 'asdf', '11012013012', null, '2', '0', '济南销售二部');

-- ----------------------------
-- Table structure for zq_staff_data
-- ----------------------------
DROP TABLE IF EXISTS `zq_staff_data`;
CREATE TABLE `zq_staff_data` (
  `staff_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned DEFAULT NULL COMMENT '登录ID',
  `staff_status` int(2) unsigned DEFAULT '0' COMMENT '员工状态(0禁止编辑,1可以编辑,2禁用)',
  `staff_name` char(5) NOT NULL COMMENT '姓名',
  `sex` enum('男','女') DEFAULT '男' COMMENT '性别',
  `age` int(3) unsigned DEFAULT NULL COMMENT '年龄',
  `email` varchar(255) NOT NULL COMMENT ' 邮箱',
  `worktime` date DEFAULT NULL COMMENT '入职时间',
  `birthday_mouth` char(7) DEFAULT NULL COMMENT '出生年月',
  `birthday` char(10) DEFAULT NULL COMMENT '生日',
  `mobile` int(11) unsigned NOT NULL COMMENT '手机号',
  `idcard` char(18) DEFAULT NULL COMMENT '身份证号',
  `per_address` varchar(255) DEFAULT NULL COMMENT '户籍地址',
  `now_address` varchar(255) DEFAULT NULL COMMENT '现居住地',
  `education` varchar(50) DEFAULT NULL COMMENT '学历',
  `subject` varchar(50) DEFAULT NULL COMMENT '专业，学科',
  `school` varchar(100) DEFAULT NULL COMMENT '学校',
  `marriage` char(4) DEFAULT '暂未填写' COMMENT '婚姻状况',
  `child` char(10) DEFAULT '暂未填写' COMMENT '生育状况',
  `deparment` varchar(255) NOT NULL COMMENT '部门',
  `hi` varchar(255) DEFAULT NULL COMMENT '百度hi',
  `qq` varchar(255) DEFAULT NULL COMMENT 'QQ',
  `post` varchar(255) DEFAULT NULL COMMENT '职务，职位',
  `seat` varchar(50) DEFAULT NULL COMMENT '座机',
  `urgent_tel` varchar(50) DEFAULT NULL COMMENT '紧急联系人电话',
  `bank_name` varchar(255) DEFAULT NULL COMMENT '银行卡开户行',
  `bank_num` int(100) unsigned DEFAULT NULL COMMENT '银行卡号',
  `card_user` varchar(255) DEFAULT NULL COMMENT '持卡人姓名',
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_staff_data
-- ----------------------------

-- ----------------------------
-- Table structure for zq_user
-- ----------------------------
DROP TABLE IF EXISTS `zq_user`;
CREATE TABLE `zq_user` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `salts` char(60) NOT NULL COMMENT '盐',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_user
-- ----------------------------
INSERT INTO `zq_user` VALUES ('1', 'zhanghao', '$2y$10$0pK0OgbZhZJ1E1yCsObdR.IsCqgc1vQ2w9fujA18iStlZ0udT86ZC', 'admin');
INSERT INTO `zq_user` VALUES ('2', 'admin', '$2y$10$0pK0OgbZhZJ1E1yCsObdR.IsCqgc1vQ2w9fujA18iStlZ0udT86ZC', 'admin');

-- ----------------------------
-- Table structure for zq_web
-- ----------------------------
DROP TABLE IF EXISTS `zq_web`;
CREATE TABLE `zq_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL COMMENT '产品类型',
  `company_name` varchar(50) NOT NULL COMMENT '公司名',
  `url` varchar(255) DEFAULT NULL COMMENT '网址',
  `username` char(50) DEFAULT NULL COMMENT '客户姓名',
  `tel` varchar(255) DEFAULT NULL COMMENT '联系方式',
  `price` decimal(14,2) NOT NULL COMMENT '价格',
  `person_id` int(11) NOT NULL COMMENT '负责人id',
  `department_id` int(11) NOT NULL COMMENT '部门ID',
  `start_t` date DEFAULT NULL COMMENT '服务开始时间',
  `end_t` date DEFAULT NULL COMMENT '服务结束时间',
  `email` varchar(255) DEFAULT NULL,
  `order_id` char(50) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zq_web
-- ----------------------------
INSERT INTO `zq_web` VALUES ('1', 'standard', '山东中齐信息技术有限公司', 'http://www.baidu.com', '秘', '15169110950', '3800.00', '2', '0', '2018-07-27', '2019-07-27', '', '', '0000-00-00 00:00:00', null, null);
INSERT INTO `zq_web` VALUES ('2', 'higher', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘', '15169110950', '5000.00', '2', '0', '2018-07-27', '2019-07-27', '', 'FWB22018072705385678', '2018-07-27 17:38:56', null, null);
INSERT INTO `zq_web` VALUES ('3', 'standard', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘', '15169110950', '5000.00', '1', '0', '2018-07-27', '2019-07-27', '', 'FWB22018072705385931', '2018-07-27 17:38:59', null, null);
INSERT INTO `zq_web` VALUES ('4', 'standard', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘', '15169110950', '5000.00', '1', '0', '2018-07-27', '2019-07-27', '', 'FWB12018072705392583', '2018-07-27 17:39:25', null, null);
INSERT INTO `zq_web` VALUES ('5', 'professional', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘\'', '15169110950', '5000.00', '1', '0', '2018-07-27', '2019-07-27', '', 'FWB12018072705403057', '2018-07-27 17:40:30', null, null);
INSERT INTO `zq_web` VALUES ('6', 'professional', '山东中齐信息技术有限公司', 'http://www.baidu.com', '秘', '15169110950', '4500.00', '1', '0', '2018-07-27', '2019-07-27', '', 'l22018072706145199', '2018-07-27 18:14:51', '2018-07-27 18:14:51', null);
INSERT INTO `zq_web` VALUES ('7', 'standard', '山东中齐信息技术有限公司', 'http://www.baidu.com', '秘', '15169110950', '4500.00', '2', '0', '2018-07-27', '2019-07-27', '', 'l22018072808360888', '2018-07-28 08:36:08', '2018-07-28 08:36:08', null);
INSERT INTO `zq_web` VALUES ('8', 'professional', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘\'', '15169110950', '5000.00', '2', '0', '2018-07-27', '2019-07-27', '', 'FWB12018072808451450', '2018-07-28 08:45:14', '2018-07-28 08:45:14', null);
INSERT INTO `zq_web` VALUES ('9', 'professional', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘\'', '15169110950', '5000.00', '2', '0', '2018-07-27', '2019-07-27', '', 'FWB12018072809044982', '2018-07-28 09:04:49', '2018-07-28 09:04:49', null);
INSERT INTO `zq_web` VALUES ('10', 'professional', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秘\'', '15169110950', '5000.00', '1', '0', '2018-07-27', '2019-07-27', '', 'FWB12018072809065432', '2018-07-28 09:06:54', '2018-07-28 09:06:54', null);
INSERT INTO `zq_web` VALUES ('11', 'higher', '山东某某有限公司', 'http://www.zonqe.com.cn', '李好坏', '123456132`', '3200.00', '1', '0', '2018-07-28', '2019-07-28', '', 'FWB22018072809080229', '2018-07-28 09:08:02', '2018-07-28 09:08:02', null);
INSERT INTO `zq_web` VALUES ('12', 'higher', '山东某某有限公司', 'http://www.zonqe.com.cn', '李好坏', '123456132`', '3200.00', '2', '0', '2018-07-28', '2019-07-28', '', 'FWB22018072809192736', '2018-07-28 09:19:27', '2018-07-28 09:19:27', null);
INSERT INTO `zq_web` VALUES ('13', 'higher', '山东某某有限公司', 'http://www.zonqe.com.cn', '李好坏', '123456132`', '3200.00', '1', '0', '2018-07-28', '2019-07-28', '', 'FWB22018072810342120', '2018-07-28 10:34:21', '2018-07-28 10:34:21', null);
INSERT INTO `zq_web` VALUES ('14', 'professional', '山东中齐信息技术有限公司', 'http://zonqe.com.cn', '王群', '13256151567', '15000000.00', '3', '0', '2018-07-28', '2019-07-03', '', 'FWB22018072810381447', '2018-07-28 10:38:14', '2018-07-28 10:38:14', null);
INSERT INTO `zq_web` VALUES ('15', 'standard', '山东中齐信息技术有限公司', 'http://www.zonqe.com.cn', '秒秒秒秘秘', '15169110950', '8000.00', '4', '0', '2018-07-28', '2019-07-28', '', 'FWB12018072811055553', '2018-07-28 11:05:55', '2018-07-28 11:05:55', null);
INSERT INTO `zq_web` VALUES ('16', 'professional', 'test', 'http://test.tes', 'dsffds', '1231321', '1122.00', '6', '0', '2018-07-28', '2019-07-28', '', 'FWB12018072811063140', '2018-07-28 11:06:31', '2018-07-28 11:06:31', null);
INSERT INTO `zq_web` VALUES ('17', 'standard', '1山东中齐信息技术有限公司', 'http://zonqe.com.cn', '王群', '13256151567', '15000000.00', '5', '0', '2018-08-01', '2019-08-01', '', 'standard2018080104395333', '2018-08-01 16:39:53', '2018-08-01 16:39:53', '网站是客户自己制作的，2018-12-09日到期。');
