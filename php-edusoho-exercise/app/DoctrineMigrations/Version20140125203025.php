<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20140125203025 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->addSql("ALTER TABLE  `question` CHANGE  `targetId`  `targetId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '从属于'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `targetType`  `targetType` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '' COMMENT '从属类型：课时、课程、科目'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `score`  `score` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '总分'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `endTime`  `endTime` INT UNSIGNED ZEROFILL NOT NULL DEFAULT  '0' COMMENT  '结束时间'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `checkTeacherId`  `checkTeacherId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `userId`  `userId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '用户id'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `createdTime`  `createdTime` INT( 10 ) UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '创建时间'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `answer`  `answer` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT  '参考答案'");  
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `targetType`  `targetType` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '从属课程、科目'");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `createdTime`  `createdTime` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '创建时间'");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `updatedTime`  `updatedTime` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '更新时间'");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `seq`  `seq` INT( 10 ) UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `targetType`  `targetType` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '' COMMENT  '从属课程、科目'");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `targetId`  `targetId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '从属课程、科目id'");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `userId`  `userId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '操作用户'");
        $this->addSql("ALTER TABLE  `question_favorite` CHANGE  `questionId`  `questionId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `question_favorite` CHANGE  `targetId`  `targetId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `question_favorite` CHANGE  `userId`  `userId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `question_favorite` CHANGE  `createdTime`  `createdTime` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `targetId`  `targetId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '试卷从属'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `targetType`  `targetType` CHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '' COMMENT  '从属类别'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `createdUserId`  `createdUserId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '创建人'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `createdTime`  `createdTime` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '创建时间'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `updatedUserId`  `updatedUserId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '修改人'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `updatedTime`  `updatedTime` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '修改时间'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `metas`  `metas` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT  '题型排序'");
        $this->addSql("ALTER TABLE  `testpaper_item` CHANGE  `testId`  `testId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '所属试卷'");
        $this->addSql("ALTER TABLE  `testpaper_item` CHANGE  `questionId`  `questionId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '题目id'");
        $this->addSql("ALTER TABLE  `testpaper_item` CHANGE  `questionType`  `questionType` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '' COMMENT  '题目类别'");
        $this->addSql("ALTER TABLE  `testpaper_item` CHANGE  `parentId`  `parentId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_item` CHANGE  `score`  `score` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '分值'");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `itemId`  `itemId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '试卷题目id'");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `testId`  `testId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `testPaperResultId`  `testPaperResultId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `userId`  `userId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `questionId`  `questionId` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `answer`  `answer` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL");
        $this->addSql("ALTER TABLE  `testpaper_item_result` CHANGE  `teacherSay`  `teacherSay` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT  'id'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `paperName`  `paperName` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  ''");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `testId`  `testId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  'testId'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `userId`  `userId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  'UserId'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `score`  `score` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '分数'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `objectiveScore`  `objectiveScore` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `subjectiveScore`  `subjectiveScore` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `teacherSay`  `teacherSay` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `rightItemCount`  `rightItemCount` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `limitedTime`  `limitedTime` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '试卷限制时间(秒)'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `beginTime`  `beginTime` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '开始时间'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `endTime`  `endTime` INT( 10 ) UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '结束时间'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `updateTime`  `updateTime` INT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_result` CHANGE  `active`  `active` TINYINT UNSIGNED NOT NULL DEFAULT  '0'");
        $this->addSql("ALTER TABLE  `testpaper_item` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT  '题目'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT  'id'");
        $this->addSql("ALTER TABLE  `testpaper` CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '' COMMENT  '试卷名称'");
        $this->addSql("ALTER TABLE  `question_favorite` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT");
        $this->addSql("ALTER TABLE  `question_category` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT");
        $this->addSql("ALTER TABLE  `question` CHANGE  `id`  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT");
        $this->addSql("ALTER TABLE  `question` CHANGE  `type`  `type` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  ''");
        $this->addSql("ALTER TABLE  `question` CHANGE  `stem`  `stem` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT  '题干'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `categoryId`  `categoryId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '类别'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `finishedTimes`  `finishedTimes` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '完成次数'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `passedTimes`  `passedTimes` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '成功次数'");
        $this->addSql("ALTER TABLE  `question` CHANGE  `difficulty`  `difficulty` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  'normal'");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs

    }
}
