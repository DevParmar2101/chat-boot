<?php

use yii\db\Migration;

/**
 * Class m220823_191826_add_new_user_current_education_details_table
 */
class m220823_191826_add_new_user_current_education_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query = <<<EOF
INSERT INTO `user_current_education` (`id`, `education_type_id`, `university_id`, `studying_field_id`, `studying_branch_id`, `last_year_percentage`, `user_id`, `created_at`, `first_name`, `last_name`, `mobile_number`) VALUES
(1, 4, 4, 4, 16, '82.5', 2, '2022-08-22 18:30:00', 'User', 'Name', '9876543210'),
(2, 5, 5, 8, 11, '99.99', 3, '2022-08-22 18:30:00', 'Dev', 'Parmar', '6261565820'),
(3, 6, 13, 23, 48, '55', 4, '2022-08-22 18:30:00', 'Jack', 'Thane Vala', '8572946321'),
(4, 8, 14, 21, 44, '67.8', 5, '2022-08-22 18:30:00', 'Gulwinder', 'Singh', '626156582'),
(5, 7, 11, 18, 42, '85', 6, '2022-08-22 18:30:00', 'Sam ', 'Wilson', '9376926081'),
(6, 7, 11, 19, 46, '74', 7, '2022-08-22 18:30:00', 'Robert', 'Downey', '5432167890'),
(7, 5, 7, 16, 40, '84', 8, '2022-08-22 18:30:00', 'Mi', 'Tyson', '9876542251'),
(8, 3, 3, 26, 49, '87.26', 9, '2022-08-22 18:30:00', 'sunny', 'Deol', '9875542121'),
(9, 8, 14, 21, 44, '94.82', 10, '2022-08-22 18:30:00', 'Viyanka', 'Parmar', '876425321'),
(10, 7, 11, 19, 46, '69.69', 11, '2022-08-22 18:30:00', 'jamaliya', 'Saaf', '7892456310'),
(11, 1, 1, 25, 50, '55', 12, '2022-08-22 18:30:00', 'Jenifer', 'Waltors', '7788994455'),
(12, 2, 2, 24, 51, '61', 13, '2022-08-22 18:30:00', 'Steve', 'Rufalo', '6655443322'),
(13, 6, 13, 23, 48, '76', 14, '2022-08-22 18:30:00', 'Bucky', 'Banns', '9988776655'),
(14, 7, 11, 20, 53, '88.08', 15, '2022-08-22 18:30:00', 'Natasha', 'Tylor', '1122334455');
COMMIT;
EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220823_191826_add_new_user_current_education_details_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220823_191826_add_new_user_current_education_details_table cannot be reverted.\n";

        return false;
    }
    */
}
