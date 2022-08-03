<?php

use yii\db\Migration;

/**
 * Class m220803_130011_add_data_in_studying_field_table
 */
class m220803_130011_add_data_in_studying_field_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query =<<<EOF

INSERT INTO `studying_field_name` (`id`, `university_id`, `field_name`, `user_id`, `status`, `created_at`) VALUES
(1, 6, 'Bachelor of Business Administration', 1, 10, '2022-08-01 09:36:59'),
(2, 6, 'Bachelor of Drama', 1, 10, '2022-08-01 09:37:05'),
(3, 4, 'Bachelor of Science', 1, 10, '2022-08-01 12:36:45'),
(4, 4, 'Bachelor of Architecture', 1, 10, '2022-08-01 12:15:23'),
(6, 4, 'Bachelor of Engineering', 1, 10, '2022-08-01 12:35:26'),
(7, 4, 'Bachelor of Medical Engineering', 1, 10, '2022-08-01 12:35:35'),
(8, 5, 'Masters of Engineering', 1, 10, '2022-08-01 12:40:30'),
(9, 5, 'Masters of Medical Engineering', 1, 10, '2022-08-01 12:40:18'),
(10, 5, 'Masters of Architecture', 1, 10, '2022-08-01 12:40:02'),
(11, 7, 'Masters of Business Administration', 1, 10, '2022-08-01 12:39:46'),
(12, 7, 'Masters in Drama', 1, 10, '2022-08-01 12:39:22'),
(13, 5, 'Masters in Science', 1, 10, '2022-08-01 12:39:09'),
(14, 8, 'Bachelor of Technology', 1, 10, '2022-08-01 12:37:15'),
(15, 8, 'Bachelor in Management', 1, 10, '2022-08-01 12:37:45'),
(16, 7, 'Masters in Technology', 1, 10, '2022-08-01 12:38:42'),
(17, 9, 'Masters in Management', 1, 10, '2022-08-01 12:39:00'),
(18, 11, 'Diploma Engineering', 1, 10, '2022-08-01 12:41:13'),
(19, 11, 'Diploma in Architecture', 1, 10, '2022-08-01 12:41:27'),
(20, 11, 'Diploma in Medical Engineering', 1, 10, '2022-08-01 12:42:03'),
(21, 14, 'ITI in Electical', 1, 10, '2022-08-01 12:42:20'),
(22, 14, 'ITI in Engineering', 1, 10, '2022-08-01 12:42:41'),
(23, 13, 'PHD in Literature', 1, 10, '2022-08-01 12:44:27'),
(24, 2, 'Education Courses', 1, 10, '2022-08-03 10:49:11'),
(25, 1, 'Education Courses', 1, 10, '2022-08-03 10:49:20'),
(26, 3, 'Education Courses', 1, 10, '2022-08-03 10:49:52');

EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220803_130011_add_data_in_studying_field_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220803_130011_add_data_in_studying_field_table cannot be reverted.\n";

        return false;
    }
    */
}
