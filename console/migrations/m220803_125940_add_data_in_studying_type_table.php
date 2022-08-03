<?php

use yii\db\Migration;

/**
 * Class m220803_125940_add_data_in_studying_type_table
 */
class m220803_125940_add_data_in_studying_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query =<<<EOF

INSERT INTO `studying_type` (`id`, `studying_type_name`, `user_id`, `status`, `created_at`) VALUES
(1, '10th Class', 1, 10, '2022-07-29 17:48:18'),
(2, '11th Class', 1, 10, '2022-07-29 17:54:11'),
(3, '12th CLass', 1, 10, '2022-07-29 17:54:19'),
(4, 'Undergraduate', 1, 10, '2022-07-29 17:55:42'),
(5, 'Postgraduate', 1, 10, '2022-07-29 17:55:57'),
(6, 'Doing PHD', 1, 10, '2022-07-29 17:56:18'),
(7, 'Diploma', 1, 10, '2022-07-29 17:56:28'),
(8, 'ITI (Industrial Training Institute)', 1, 10, '2022-07-29 17:57:26'),
(9, 'Others', 1, 10, '2022-07-29 17:57:37');

EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220803_125940_add_data_in_studying_type_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220803_125940_add_data_in_studying_type_table cannot be reverted.\n";

        return false;
    }
    */
}
