/*
 Navicat Premium Data Transfer

 Source Server         : localhost_8889
 Source Server Type    : MySQL
 Source Server Version : 50725
 Source Host           : localhost:8889
 Source Schema         : zhou4db23

 Target Server Type    : MySQL
 Target Server Version : 50725
 File Encoding         : 65001

 Date: 07/06/2019 13:37:52
*/
DROP TABLE IF EXISTS `zhou4db23`;
CREATE DATABASE zhou4db23;
USE zhou4db23;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `admin_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('kShines', '123', 'kShines');
INSERT INTO `admin` VALUES ('admin1', '123456', 'admin1');
COMMIT;

-- ----------------------------
-- Table structure for introduce
-- ----------------------------
DROP TABLE IF EXISTS `introduce`;
CREATE TABLE `introduce` (
  `introduce_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `text` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`introduce_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of introduce
-- ----------------------------
BEGIN;
INSERT INTO `introduce` VALUES ('0', '总所周知，xjn是我们的好朋友');
INSERT INTO `introduce` VALUES ('1', '啊啊啊啊');
INSERT INTO `introduce` VALUES ('2', '总所周知，xjn是我们的好朋友');
INSERT INTO `introduce` VALUES ('3', '总所周知，xjn是我们的好朋友');
INSERT INTO `introduce` VALUES ('4', '总所周知，xjn是我们的好朋友');
INSERT INTO `introduce` VALUES ('5', '哈哈哈');
INSERT INTO `introduce` VALUES ('6', '总所周知，xjn是我们的好朋友');
INSERT INTO `introduce` VALUES ('7', '总所周知，xjn是我们的好朋友');
INSERT INTO `introduce` VALUES ('8', '总所周知，xjn是我们的好朋友');
COMMIT;

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_type` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `text` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`notice_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of notice
-- ----------------------------
BEGIN;
INSERT INTO `notice` VALUES (1, '南昌邀请赛比赛通知', '2019-06-04', '比赛通知', '2019年6月4日举行南昌邀请赛，特邀贵校三支队伍参加');
INSERT INTO `notice` VALUES (2, '西安邀请赛比赛通知', '2019-05-01', '比赛通知', '2019年6月4日举行西安邀请赛，特邀贵校三支队伍参加');
INSERT INTO `notice` VALUES (3, '实验室聚餐', '2019-06-01', '活动通知', '为庆祝六一儿童节，徐佳男将请wdf和ysk吃饭');
COMMIT;

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `plan_id` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '公告标号',
  `plan_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '计划名',
  `plan_date` date DEFAULT NULL COMMENT '比赛日期',
  `plan_type` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '类别 1比赛 2通知',
  `text` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '文本内容',
  `team_id` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '团队号',
  PRIMARY KEY (`plan_id`) USING BTREE,
  KEY `team_id` (`team_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of plan
-- ----------------------------
BEGIN;
INSERT INTO `plan` VALUES ('1', '南昌邀请赛', '2019-06-07', '比赛安排', '马上要举行南昌邀请赛了', '1');
INSERT INTO `plan` VALUES ('2', '聚会', '2019-04-02', '活动安排', '最近一起吃个饭？', '1');
COMMIT;

-- ----------------------------
-- Table structure for stu
-- ----------------------------
DROP TABLE IF EXISTS `stu`;
CREATE TABLE `stu` (
  `stu_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `sex` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `team_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '级段',
  `stu_dept` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `introduce_id` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `isok` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '审核通过',
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`stu_id`) USING BTREE,
  KEY `team_id` (`team_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of stu
-- ----------------------------
BEGIN;
INSERT INTO `stu` VALUES ('黄鹂', 'S20120004', 'Female', '1', '大二', '计算机科学与技术', '5', '1', '1234');
INSERT INTO `stu` VALUES ('users1', 'S20170000', 'Male', '0', '大二', '软件工程', '0', '0', '123456');
INSERT INTO `stu` VALUES ('虚假男', 'S20170001', 'Male', '2', '大二', '计算机科学与技术', '3', '1', '123');
INSERT INTO `stu` VALUES ('预赛抗', 'S20170002', 'Male', '1', '大二', '计算机科学与技术', '4', '1', '123');
INSERT INTO `stu` VALUES ('温蒂斐', 'S20170003', 'Female', '2', '大二', '软件工程', '1', '1', '123');
INSERT INTO `stu` VALUES ('落威冰', 'S20170020', 'Male', '0', '大一', '软件工程', '7', '0', 'QQQ111');
INSERT INTO `stu` VALUES ('落威冰', 'S20170056', 'Male', '0', '大一', '软件工程', '0', '0', 'ysk111');
INSERT INTO `stu` VALUES ('落威冰', 'S20170273', 'Male', '1', '大一', '软件工程', '0', '0', 'qqq111');
INSERT INTO `stu` VALUES ('落威冰', 'S20171111', 'Male', '0', '大一', '软件工程', '6', '0', 'QQQ111');
COMMIT;

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacher_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `sex` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `team_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `teacher_dept` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `introduce_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `isok` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`teacher_id`) USING BTREE,
  KEY `team_id` (`team_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of teacher
-- ----------------------------
BEGIN;
INSERT INTO `teacher` VALUES ('shanzhenyu', 'Tszy00001', 'man', '1', '计算机金融', '8', '1', '123');
INSERT INTO `teacher` VALUES ('zjvivi', 'Tzjvivi001', 'woman', '2', '计算机科学', '0', '1', '123');
COMMIT;

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `team_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `team_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_no` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '学生负责人',
  `teacher_no` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '辅导老师',
  `introduce_id` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '简介',
  PRIMARY KEY (`team_id`) USING BTREE,
  KEY `team_id` (`team_id`) USING BTREE,
  KEY `team_id_2` (`team_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of team
-- ----------------------------
BEGIN;
INSERT INTO `team` VALUES ('1', 'Tree-AC', 'S20170001', 'Tzjvivi001', '0');
INSERT INTO `team` VALUES ('2', '两个黄鹂鸣翠柳', 'S20170002', 'Tszy00001', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
