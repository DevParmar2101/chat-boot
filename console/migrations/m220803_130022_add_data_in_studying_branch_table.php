<?php

use yii\db\Migration;

/**
 * Class m220803_130022_add_data_in_studying_branch_table
 */
class m220803_130022_add_data_in_studying_branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query =<<<EOF

INSERT INTO `studying_branch_name` (`id`, `field_id`, `branch_name`, `user_id`, `status`, `created_at`) VALUES
(1, 1, 'B.com in Bussiness', NULL, 10, '2022-08-03 10:41:55'),
(2, 1, 'BCA', 1, 10, '2022-08-03 10:41:12'),
(3, 1, 'Hotel Management', 1, 10, '2022-08-03 10:47:59'),
(4, 6, 'BE-IT', 1, 10, '2022-08-03 10:50:27'),
(5, 6, 'BE-CE', 1, 10, '2022-08-03 10:50:44'),
(6, 6, 'BE-CSE', 1, 10, '2022-08-03 10:51:05'),
(7, 6, 'BE-Civil Engineering', 1, 10, '2022-08-03 10:51:52'),
(8, 6, 'BE- Mechnical Engineering', 1, 10, '2022-08-03 10:54:24'),
(9, 6, 'BE-Electrical Engineering', 1, 10, '2022-08-03 10:56:09'),
(10, 6, 'Aerospace/aeronautical engineering.', 1, 10, '2022-08-03 10:56:35'),
(11, 8, 'ME-CE', 1, 10, '2022-08-03 10:58:39'),
(12, 8, 'ME-CSE', 1, 10, '2022-08-03 10:58:24'),
(13, 8, 'ME Civil Engineering', 1, 10, '2022-08-03 10:58:14'),
(14, 8, 'ME-Mechnical Engineering', 1, 10, '2022-08-03 10:59:03'),
(15, 8, 'ME-Electrical Engineering', 1, 10, '2022-08-03 10:59:28'),
(16, 4, 'BE- Architecture Engineering', 1, 10, '2022-08-03 11:00:06'),
(17, 10, 'ME- Architecture Engineering', 1, 10, '2022-08-03 11:02:01'),
(18, 2, 'Bachelor in Drama', 1, 10, '2022-08-03 11:02:42'),
(19, 3, 'Bachelor in Physics', 1, 10, '2022-08-03 11:03:07'),
(20, 13, 'Masters in Physics', 1, 10, '2022-08-03 11:06:17'),
(21, 3, 'Bachelor in Chemistery', 1, 10, '2022-08-03 11:06:49'),
(22, 13, 'Masters in Chemistry', 1, 10, '2022-08-03 11:07:10'),
(23, 7, 'BE- Medical', 1, 10, '2022-08-03 11:07:39'),
(24, 9, 'ME- Medical', 1, 10, '2022-08-03 11:08:39'),
(25, 14, 'BTech Information Technology', 1, 10, '2022-08-03 11:13:42'),
(26, 14, 'BTech Computer Engineering', 1, 10, '2022-08-03 11:15:59'),
(28, 14, 'BTech CSE', 1, 10, '2022-08-03 12:43:27'),
(29, 14, 'BTech Civil Engineering', 1, 10, '2022-08-03 12:43:46'),
(30, 14, 'BTech Mechinical Engineering', 1, 10, '2022-08-03 12:44:22'),
(31, 14, 'BTech -Electrical Engineering', 1, 10, '2022-08-03 12:44:17'),
(32, 14, 'BTech Architecture Engineering', 1, 10, '2022-08-03 12:44:12'),
(33, 16, 'MTech Information Technology', 1, 10, '2022-08-03 12:45:15'),
(34, 16, 'MTech Computer Engineering', 1, 10, '2022-08-03 12:45:33'),
(35, 16, 'MTech CSE', 1, 10, '2022-08-03 12:45:58'),
(36, 16, 'MTech Civil Engineering', 1, 10, '2022-08-03 12:46:17'),
(37, 16, 'MTech Mechinical Engineering', 1, 10, '2022-08-03 12:46:44'),
(38, 16, 'MTech -Electrical Engineering', 1, 10, '2022-08-03 12:47:14'),
(39, 16, 'MTech Architecture Engineering', 1, 10, '2022-08-03 12:49:29'),
(40, 16, 'MTech Architecture Engineering', 1, 10, '2022-08-03 12:49:30'),
(41, 18, 'Diploma in Information Technology', 1, 10, '2022-08-03 12:49:57'),
(42, 18, 'Diploma in Computer Engineering', 1, 10, '2022-08-03 12:50:20'),
(43, 18, 'Diploma in Civil Engineering', 1, 10, '2022-08-03 12:50:38'),
(44, 21, 'ITI in AutoMobile', 1, 10, '2022-08-03 12:52:37'),
(45, 22, 'ITI in Mechinical', 1, 10, '2022-08-03 12:53:04'),
(46, 19, 'Diploma in Architecture', 1, 10, '2022-08-03 12:53:30');

EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220803_130022_add_data_in_studying_branch_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220803_130022_add_data_in_studying_branch_table cannot be reverted.\n";

        return false;
    }
    */
}
