<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('travel_news')->get()->count()==0){
            DB::table('travel_news')->insert([
                [
                    'news_id' => 1,
                    'title' => "'Lưu gấp 1001 CÔNG THỨC CHỈNH ẢNH ĐẸP 2020 cực chất'",
                    'intro' => "'Chỉ phó nháy chất lượng thôi là chưa đủ. Để có một bức ảnh xinh để trang hoàng Facebook hay Instagram cần nhiều yếu tố. Trong đó yếu tố quan trọng nhất nhì chính là bước chỉnh màu ảnh'",
                    'category_id' => 1,
                    'images'=> 'https://img.freepik.com/free-vector/travel-tourism-illustration-with-resort-sightseeing-elements_1284-30189.jpg?size=626&ext=jpg',
                    'content' => "'Ấn tượng đầu tiên khi bạn đặt chân đến một quốc gia, một lãnh thổ đó chính là do những thiết kế sân bay đầy cảm hứng mang lại
                    Qua những chuyến du lịch và công tác, bạn biết đền một thành phố, hoặc một quốc gia nhiều hơn. Tuy nhiên khi lần đầu tiên đặt chân đến những nơi đó, điều đầu tiên thu hút ánh nhìn của bạn chính là những chi tiết nội và ngoại thất hiện đại của khu vực sân bay. Đặc biệt là những quốc gia sở hữu những sân bay đẹp nhất thế giới, chúng sẽ góp phần khiến cho chuyến đi của bạn thêm thú vị hơn.
                    Ngắm nhìn những vẻ đẹp hoành tráng đến kinh ngạc của 16 sân bay đẹp nhất thế giới dưới đây: Sân bay quốc tế Ashgabat (Turkmenistan)'",
                    'slug_search' => "'cong-thuc-chinh-anh-dep'",
                    'slug' => "'ngam-nhin-ve-dep-hoanh-trang-cua-16-san-bay-dep-nhat-the-gioi'",
                    'user_id' => 1,
                    'status' => 4,

                ],
                [
                    'news_id' => 2,
                    'title' => "'Ngắm nhìn vẻ đẹp hoành tráng của 16 sân bay đẹp nhất thế giới'",
                    'intro' => "'16 sân bay đẹp nhất thế giới với các phong cách thiết kế kiến trúc cực kỳ hoành tráng, đã trở thành một trong số những biểu tượng đáng nhớ của mỗi quốc gia.'",
                    'category_id' => 2,
                    'images'=> 'https://img.freepik.com/free-vector/travel-tourism-illustration-with-resort-sightseeing-elements_1284-30189.jpg?size=626&ext=jpg',
                    'content' => "'Gần đây, nhiều bạn trẻ đã sáng tạo biến phần ký ức đó thành một trend vẽ mây lên ảnh mới đầy thú vị. Không cần phải tưởng tượng như trước nữa, bạn hoàn toàn có thể “săn mây”. Sau đó tự vẽ lại hình thù các con vật qua ứng dụng vẽ của smartphone hay app chỉnh ảnh như Procreate. Những đám mây được biến hình thành những con vật siêu ngộ nghĩnh, đáng yêu theo trí tưởng tượng của bạn.xu-huong-chinh-anh-chup-anh-moi-8
                    xu-huong-chinh-anh-chup-anh-moi-9 xu-huong-chinh-anh-chup-anh-moi-10 Ảnh: Gladys, ST  2. Xu hướng chụp ảnh cây cỏ, hoa lá Team thích chụp ảnh thiên nhiên “bơi” hết vào đây nào. Dạo gần đây, các bức ảnh chụp ảnh cỏ cây, hoa lá với nền trời siêu “deep” đang là xu hướng được team xê dịch bắt trend nhiệt tình. Đặc biệt là trong thời gian “nghỉ Tết” siêu dài này, cộng đồng mạng sau một thời gian “du hí” tại gia đã khám phá ra nhiều ngóc ngách cực kỳ thú vị. Đúng là, chỉ cần ta để ý thì mọi thứ đều có nét đẹp riêng nhỉ?
                    Một số xu hướng chụp ảnh chỉnh ảnh mới với thiên nhiên, hoa lá siêu đáng yêu:'",
                   'slug_search' => "'cong-thuc-chinh-anh-dep'",
                   'slug' => "'cong-thuc-chinh-anh-dep'",
                    'user_id' => 2,
                    'status' => 4,

                ]
            ]);
        }
    }
}
