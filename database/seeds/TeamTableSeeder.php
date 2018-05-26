<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teams')->truncate();
        DB::table('teams')->insert([
            ['prefecture' => '北北海道', 'name' => '滝川西', ],
            ['prefecture' => '南北海道', 'name' => '北海', ],
            ['prefecture' => '青森', 'name' => '青森山田', ],
            ['prefecture' => '岩手', 'name' => '盛岡大付', ],
            ['prefecture' => '秋田', 'name' => '明桜', ],
            ['prefecture' => '山形', 'name' => '日大山形', ],
            ['prefecture' => '宮城', 'name' => '仙台育英', ],
            ['prefecture' => '福島', 'name' => '聖光学院', ],
            ['prefecture' => '茨城', 'name' => '土浦日大', ],
            ['prefecture' => '栃木', 'name' => '作新学院', ],
            ['prefecture' => '群馬', 'name' => '前橋育英', ],
            ['prefecture' => '埼玉', 'name' => '花咲徳栄', ],
            ['prefecture' => '千葉', 'name' => '木更津総合', ],
            ['prefecture' => '東東京', 'name' => '二松学舎大付', ],
            ['prefecture' => '西東京', 'name' => '東海大菅生', ],
            ['prefecture' => '神奈川', 'name' => '横浜', ],
            ['prefecture' => '新潟', 'name' => '日本文理', ],
            ['prefecture' => '長野', 'name' => '松商学園', ],
            ['prefecture' => '山梨', 'name' => '山梨学院', ],
            ['prefecture' => '静岡', 'name' => '藤枝明誠', ],
            ['prefecture' => '愛知', 'name' => '中京大中京', ],
            ['prefecture' => '岐阜', 'name' => '大垣日大', ],
            ['prefecture' => '三重', 'name' => '津田学園', ],
            ['prefecture' => '富山', 'name' => '高岡商', ],
            ['prefecture' => '石川', 'name' => '日本航空石川', ],
            ['prefecture' => '福井', 'name' => '坂井', ],
            ['prefecture' => '滋賀', 'name' => '彦根東', ],
            ['prefecture' => '京都', 'name' => '京都成章', ],
            ['prefecture' => '大阪', 'name' => '大阪桐蔭', ],
            ['prefecture' => '兵庫', 'name' => '神戸国際大付', ],
            ['prefecture' => '奈良', 'name' => '天理', ],
            ['prefecture' => '和歌山', 'name' => '智弁和歌山', ],
            ['prefecture' => '岡山', 'name' => 'おかやま山陽', ],
            ['prefecture' => '広島', 'name' => '広陵', ],
            ['prefecture' => '鳥取', 'name' => '米子松蔭', ],
            ['prefecture' => '島根', 'name' => '開星', ],
            ['prefecture' => '山口', 'name' => '下関国際', ],
            ['prefecture' => '香川', 'name' => '三本松', ],
            ['prefecture' => '徳島', 'name' => '鳴門渦潮', ],
            ['prefecture' => '愛媛', 'name' => '済美', ],
            ['prefecture' => '高知', 'name' => '明徳義塾', ],
            ['prefecture' => '福岡', 'name' => '東筑', ],
            ['prefecture' => '佐賀', 'name' => '早稲田佐賀', ],
            ['prefecture' => '長崎', 'name' => '波佐見', ],
            ['prefecture' => '熊本', 'name' => '秀岳館', ],
            ['prefecture' => '大分', 'name' => '明豊', ],
            ['prefecture' => '宮崎', 'name' => '聖心ウルスラ学園', ],
            ['prefecture' => '鹿児島', 'name' => '神村学園', ],
            ['prefecture' => '沖縄', 'name' => '興南', ],
        ]);
    }
}
