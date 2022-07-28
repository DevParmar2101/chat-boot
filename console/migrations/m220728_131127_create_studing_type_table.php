<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studing_type}}`.
 */
class m220728_131127_create_studing_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studing_type}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%studing_type}}');
    }
}
