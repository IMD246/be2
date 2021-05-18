<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAuthor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();

           DB::table('Author')->insert([
                'publishedBooks' => 8,
                'nameAuthor' => "Tom Robbins",
                'Description' => 'Tom Robbins , tên đầy đủ là Thomas Eugene Robbins , (sinh ngày 22 tháng 7 năm 1932, Blowing Rock, North Carolina , Hoa Kỳ), tiểu thuyết gia người Mỹ nổi tiếng với những nhân vật lập dị , lạc quan vui tươi và cách chơi chữ tự giác.
                Robbins được đào tạo tại Đại học Washington and Lee , Viện Chuyên nghiệp Richmond và Đại học Washington . Ông phục vụ trong Lực lượng Không quân Hoa Kỳ , đi nhờ xe trên khắp Hoa Kỳ, làm nhà báo và nhà phê bình nghệ thuật. Hai cuốn tiểu thuyết đầu tiên của ông chỉ trở nên nổi tiếng khi chúng được phát hành dưới dạng ấn bản bìa mềm.Another Roadside Attraction (1971), dựa trên nghiên cứu sâu rộng về Cơ đốc giáo ban đầu, kể về một người dân vùng nông thôn Washington, người đã đánh cắp xác ướp của Chúa Giê-su Christ .Even Cowgirls Get the Blues (1976; quay 1994) là câu chuyện về một phụ nữ đi nhờ xe ôm có ngón tay cái khổng lồ đến thăm spa của một phụ nữ ở Nam Dakota .
                Các tiểu thuyết sau này của Robbins bao gồm Tĩnh vật với chim gõ kiến (1980);Jitterbug Perfume (1984), xoay quanh một vị vua thời Trung cổ sống 1.000 năm trước khi trở thành người gác cổng trong phòng thí nghiệm của Albert Einstein ;Skinny Legs and All (1990), một cuốn tiểu thuyết kỳ ảo kể về năm đồ vật vô tri vô giác trong hành trình đến Jerusalem trong khi khám phá xung đột Ả Rập-Israel và chủ nghĩa chính thống tôn giáo, cùng các chủ đề chính trị khác;Half Asleep in Frog Pyjamas (1994);Ngôi nhà thương binh khốc liệt từ vùng khí hậu nóng (2000), câu chuyện về một đặc vụ CIA theo chủ nghĩa khoái lạc bị một pháp sư người Peru nguyền rủa để mãi mãi giữ chân anh ta khỏi mặt đất nếu không anh ta chết; và Villa Incognito (2003). Wild Ducks Flying Backward (2005) là một bộ sưu tập các bài viết bao gồm các bài tiểu luận, truyện du ký và thơ. các cuốn hồi ký Bánh đào Tây Tạng: Lời kể có thật về một cuộc sống giàu trí tưởng tượng được xuất bản vào năm 2014.',
                'image' => "imag-21.jpg",
                'facebook' => "https://www.facebook.com/TonyRobbins/",
                'Twitter' => "https://twitter.com/tonyrobbins",
            ]);
            DB::table('Author')->insert([
                'publishedBooks' => 10,
                'nameAuthor' => "CamBridge",
                'Description' => "Byone sinh nam 1950 nguoi nuoc anh",
                'image' => "imag-25.jpg",
                'facebook' => "#",
                'Twitter' => "#",
            ]);
            DB::table('Author')->insert([
                'publishedBooks' => 30,
                'nameAuthor' => "Deborah ChanceLLor",
                'Description' => "",
                'image' => "imag-23.jpg",
                'facebook' => "#",
                'Twitter' => "#",
            ]);
            DB::table('Author')->insert([
                'publishedBooks' => "",
                'nameAuthor' => "Red Whittaker",
                'Description' => "",
                'image' =>"imag-26.jpg",
                'facebook' => "#",
                'Twitter' => "#",
            ]);
            DB::table('Author')->insert([
                'publishedBooks' => "",
                'nameAuthor' => "Jim Smith",
                'Description' => "",
                'image' => "imag-24.jpg",
                'facebook' => "#",
                'Twitter' => "#",
            ]);
    }
}
