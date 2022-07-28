<?php

use yii\db\Migration;

/**
 * Class m220728_135239_foreignkeys_for_above_FIVE_migration_files
 */
class m220728_135239_foreignkeys_for_above_FIVE_migration_files extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query = <<<EOF
ALTER TABLE `studying_branch_name` ADD FOREIGN KEY (`field_id`) REFERENCES `studying_field_name`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `studying_branch_name` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `studying_field_name` ADD FOREIGN KEY (`university_id`) REFERENCES `studying_university_name`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `studying_field_name` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `studying_type` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `studying_university_name` ADD FOREIGN KEY (`type_id`) REFERENCES `studying_type`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `studying_university_name` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `user_current_education` ADD FOREIGN KEY (`education_type_id`) REFERENCES `studying_type`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `user_current_education` ADD FOREIGN KEY (`university_id`) REFERENCES `studying_university_name`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `user_current_education` ADD FOREIGN KEY (`studying_field_id`) REFERENCES `studying_field_name`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `user_current_education` ADD FOREIGN KEY (`studying_branch_id`) REFERENCES `studying_branch_name`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `user_current_education` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220728_135239_foreignkeys_for_above_FIVE_migration_files cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220728_135239_foreignkeys_for_above_FIVE_migration_files cannot be reverted.\n";

        return false;
    }
    */
}
