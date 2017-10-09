<?php

use yii\db\Migration;

class m171009_063249_add_base_question_table extends Migration
{
    public function safeUp()
    {
      $this->execute("
          CREATE TABLE `hot_question` (
            `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
            `text` varchar(255) NOT NULL,
            `answer_1` varchar(50) NOT NULL,
            `answer_2` varchar(50) NOT NULL,
            `answer_3` varchar(50) NOT NULL,
            `answer_4` varchar(50) NOT NULL,
            `correct` tinyint(1) NOT NULL DEFAULT '0',
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
      ");

    }

    public function safeDown()
    {
    }

}
