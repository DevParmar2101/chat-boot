<?php

use yii\db\Migration;

/**
 * Class m220803_125957_add_data_in_studying_university_table
 */
class m220803_125957_add_data_in_studying_university_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query =<<<EOF

INSERT INTO `studying_university_name` (`id`, `type_id`, `university_name`, `status`, `user_id`, `created_at`) VALUES
(1, 1, 'Gujarat Secondary and Higher Secondary Education Board(GSEB)', 10, NULL, '2022-07-30 10:22:10'),
(2, 2, 'Gujarat Secondary and Higher Secondary Education Board(GHEB)', 10, NULL, '2022-07-30 10:44:54'),
(3, 3, 'Gujarat Secondary and Higher Secondary Education Board(GSHEB)', 10, NULL, '2022-07-30 10:45:32'),
(4, 4, 'Gujarat Technological University(GTU)', 10, NULL, '2022-07-30 10:46:27'),
(5, 5, 'Gujarat Technological University(GTU)', 10, NULL, '2022-07-30 10:46:45'),
(6, 4, 'Gujarat University (GU)', 10, NULL, '2022-08-01 09:20:13'),
(7, 5, 'Gujarat University (GU)', 10, NULL, '2022-07-30 10:47:25'),
(8, 4, 'Sliver oak University', 10, NULL, '2022-08-01 07:25:59'),
(9, 5, 'Sliver oak University', 10, NULL, '2022-08-01 07:26:09'),
(10, 4, 'Maharashtra University', 10, NULL, '2022-08-01 07:26:30'),
(11, 7, 'Gujarat Technological University - Diploma(GTU)', 10, NULL, '2022-08-01 07:27:15'),
(12, 4, 'Sliver Oak University Diploma', NULL, NULL, '2022-08-01 07:27:40'),
(13, 6, 'Gujarat Technological University For PHD(GTU)', 10, NULL, '2022-08-01 08:49:31'),
(14, 8, 'Industrial Training Institute (ITI) ', 10, NULL, '2022-08-01 08:50:33');

EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220803_125957_add_data_in_studying_university_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220803_125957_add_data_in_studying_university_table cannot be reverted.\n";

        return false;
    }
    */
}
