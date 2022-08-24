<?php

use yii\db\Migration;

/**
 * Class m220823_191755_add_new_user_in_user_table
 */
class m220823_191755_add_new_user_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query = <<<EOF
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `first_name`, `last_name`, `gender`, `age`, `profile_image`) VALUES
(3, 'DevParmar2101', 'A9cJipxmwaBF43bTq_UCQtFd-q3MOh3q', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'devp2101@yopmail.com', 10, 1661244459, 1661317822, '7ncQB2bKvJQ5tbi053zOOHqjMPjqSiAJ_1661244459', 'Dev ', 'Parmar', 1, 22, 'Spider-Man_Into_the_Spider-Verse_posterPvzPi9innZ7RWwbI.png'),
(4, 'jack', 'pat1FRk76qCWSXHEf7vdCRRY-UC7u6m9', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'jack992010@yopmail.com', 10, 1661244532, 1661319233, 'kFg1kzgKdKjpwT2Ka0jEocOEEUHph2wD_1661244532', 'Jack', 'Rayan', 1, 34, 'iron_man_minimal_artwork_4k_8k-540x960k1UGnluBk2N5Az5w.jpg'),
(5, 'singh007@', 'only1Sl3ipQGu9WkSQQX0xtqCdOV2T7M', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'singh23ss@yopmail.com', 10, 1661244621, 1661319288, 'jlieWcsq-deIvsKZNC7703wTra0gBDA0_1661244621', 'Happy', 'Singh', 2, 20, 'ironman-art4A_4Xe0YnC1FLqAi.jpg'),
(6, 'sam', '9Wrvoq-JRsraRF4qb1lqEF7DwbrCi4mi', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'ryanSam@yopmail.com', 10, 1661244655, 1661319318, 'QAs60K5ONC8I8ZzfmrWbQ2ukwp8Iqgu2_1661244655', 'Sam', 'Ryan', 1, 21, 'wallpapersden.com_iron-man-hd-minimal-cool-art_2560x1440Q53u2vsptk79gLtB.jpg'),
(7, 'downey', '5MAyVMYaeyrMTsKy_IDJPWQnNWFTwYbr', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'rdoobwenreyt@yopmail.com', 10, 1661244740, 1661319347, 'Brx7dG_4YktkZ-9sNTgRzPqyj9kc58SI_1661244740', 'Robert', 'Downey', 1, 22, 'iron_man_minimal_artwork_4k_8k-540x960PwItocRQpm3VhdaA.jpg'),
(8, 'mike', '_ob5Qn_NOokQofnctao1EqhuV2UxfFJd', '$2y$13$/6BU93G99Symwl.Bk.ZQ1OyDJwzKvHAp3jlI/Sl2GYtbeSA6QSP3y', NULL, 'tyson2231@yopmail.com', 10, 1661245167, 1661319597, 'w5tKTdzQyLmox9x7MijvrF1T415aMDyG_1661245167', 'Mike', 'Tyson', 1, 23, 'narutooohC3F0aE6acyYQI5d8.jpg'),
(9, 'sunny', 'Y8nuLVI3p2_Yen-A5Zp3EY5hZyrpCGBd', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'sunny6969@yopmail.com', 10, 1661245219, 1661319625, 'RTJ1AQp_pjngi5a2vJo-92-So5iTVxM9_1661245219', 'Sunny ', 'Deol', 2, 24, 'https __hypebeast.com_image_2022_04_naruto-fan-edit-out-anime-filler-oceaniz-directors-cut-info-twQCbT0HsTZ1aHs4nq.jpg'),
(10, 'Bhoot_Viyanka', 'S50bGVGMY7dvSuaNWroVvpe02l8Ujp7v', '$2y$13$6s1gcrct8YsNmgKlltCCaOFnifCVPRT19OMrPCCHS2INbE./YIm6q', NULL, 'viyanka345@yopmail.com', 10, 1661245304, 1661319660, '4RQNdqlq4lGIX8E0yS2OSJhcZvo0HYJe_1661245304', 'Viyanka', 'Bhoot', 2, 5, 'naruto.0pSsvZZD0KXr_M1aY.jpg'),
(11, 'jamaliya', '4SZAb-XbA1sccImpJbOldh8kBwLNP_u9', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'jamaliyasaaf@yopmail.com', 10, 1661245448, 1661319690, 'zkAYLx2_Cm6jcnFfLkTvB7Bi149EE4aI_1661245448', 'jamaliya', 'Saaf', 4, 25, '18br-headband-cosmetics-naruto-toast-400x400-5228564ee685MpYxJ1KK_FJ-SVs2.jpg'),
(12, 'jenifers2201', 'aFp2QPykLZ2HA5XUvUx_5VceI77nEVxf', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'jenifers@yopmail.com', 10, 1661281309, 1661319824, 'nrWCEd_2NcxrmIC4XZBewu3VYvEWuuRA_1661281309', 'Jenifer', 'Walter', 2, 20, 'imagesuT-X2R6KzcI_CaK3.jpeg'),
(13, 'steve', 'IgCTLNZP5ngjbghafoqJ7KK-85IuWcAA', '$2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'steves@yopmail.com', 10, 1661281351, 1661319863, 'PyJSCpG_NpsC6r0E_y03RPLGyfZX1IEv_1661281351', 'Steve', 'Rufalo', 1, 19, 'imagesskSnNiu4MHJHoUUw.jpeg'),
(14, 'bucky', 't9PVn4JGcJ75uBlLMRHDHaAovUKQXcjv', '$2y$13$9qWnjpKZ6UghLWbNXVI8TOqSQIaaNNCjxGeSM6sRTSerPLxvEMbeO', NULL, 'bannsBucky@gmail.com', 10, 1661281402, 1661319902, 'tR1bUtnz4SVwgTPEiBPJuXNguanBgp7i_1661281402', 'Bucky', 'Banns', 1, 18, '259-2596757_iphone-xr-the-avengers-wallpaper-thor-god-ofS9VQUvW8I-WInDpz.jpg'),
(15, 'natasha42', 'by63nmCndV77tKty8Fft0JR1Zo6im7Df', '$2y$13$4gsM2EVh8q11MAd7p3bMqOq9sEAH0gx1uLP9N4UBW8bA5eo2zanBG', NULL, 'natasha42tylor@yopmail.com', 10, 1661282004, 1661320091, 'RnNsrRWh0WlNnqAOUOLUW-yIuPMKIGpd_1661282004', 'Natasha', 'Tylor', 2, 20, 'indexX5DvAQAD7XsMt2NO.jpeg'),
(16, 'samual', 'gGOtEro1yNfxcLpdfwRRjVxaVvOnbaP6', '2y$13$3wjbxWm.95c/Mu2aqhKequHb.bLmoqTf8MDfXitDfsdAYpOK.7Wnq', NULL, 'jackson005samual@yopmail.com', 10, 1661317092, 1661320126, 'WJxK2ZJbwSvSfNfbDX_5_4wVo3n3Nobq_1661317092', 'Samual', 'Jackson', 1, 22, 'testersGa_8yjo46E2amFW1.jpg');

EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220823_191755_add_new_user_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220823_191755_add_new_user_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
