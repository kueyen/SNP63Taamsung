<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::insert([
            //1
            [
                'name' => 'ข้าวกะเพราไก่',
                'description' => 'ไก่ผัดกับใบกะเพรา อร่อยเกินห้ามใจ ใครๆเขาก็กินกัน',
                'image_url' => '/images/foods/t.jpg',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะเพราหมูกรอบ',
                'description' => 'หมูกรอบที่กรอบจนฟันแทบหัก',
                'image_url' => '/images/foods/kapraomookrop.png',
                'is_recommend' => 1,
                'price' => 45.00,
                'discount' => 5,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะเพราเนื้อ',
                'description' => 'เนื้อชั้นดีเกรดพรีเมี่ยมผัดกับใบกะเพราคุณภาพดี',
                'image_url' => '/images/foods/kapronue.png',
                'is_recommend' => 1,
                'price' => 45.00,
                'discount' => 5,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะเพรากุ้ง',
                'description' => 'กุ้งชั้นดีเกรดพรีเมี่ยมผัดกับใบกะเพราคุณภาพดี',
                'image_url' => '/images/foods/kaprokung.png',
                'is_recommend' => 1,
                'price' => 50.00,
                'discount' => 5,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวไก่กระเทียม',
                'description' => 'ไก่จากยอดดอยอินทนนท์ที่เชือดในอากาศหนาว 3องศา และในเวลา 03:00',
                'image_url' => '/images/foods/kaikrateam.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวหมูกระเทียม',
                'description' => 'หมูจากประเทศสารขันธ์ที่มีประมุขเป็นเจ้าของฮาเร็ม',
                'image_url' => '/images/foods/mookrateam.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวหมูกรอบกระเทียม',
                'description' => 'หมูกรอบที่ทอดทั้งแต่เมื่อวานตอนเช้า รับประกันความกรอบระดับไส้ดือนดิน',
                'image_url' => '/images/foods/mookropkrateam.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวเนื้อกระเทียม',
                'description' => 'เนื้อที่นำเข้าจากประเทศอิตาลีและกระเทียมจากประเทศอินเดีย',
                'image_url' => '/images/foods/nuekrateam.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกุ้งกระเทียม',
                'description' => 'กุ้งจากแม่น้ำแยงซีเกีย',
                'image_url' => '/images/foods/krungkrateam.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกเผาไก่',
                'description' => 'ไก๊ ไก่ ไก๊ ไก่ ไก่ผัดพริกเผาก็อร่อยเหมือนนะเนี่ย',
                'image_url' => '/images/foods/prikpaokai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกเผาหมู',
                'description' => 'หมู หมึก กุ้ง เอามา อุ่น หุง ตุ๋น ต้ม นึ่ง',
                'image_url' => '/images/foods/prikpaomoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกเผาหมูกรอบ',
                'description' => 'หมูกรอบครอบจักวารเคี้ยววันนี้แถมฟรีฟันปลอม',
                'image_url' => '/images/foods/prikpaomookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกเผาเนื้อ',
                'description' => 'เนื้อที่นำเข้าจากประเทศอิตาลีและกระเทียมจากประเทศอินเดีย',
                'image_url' => '/images/foods/prikpaonue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกเผากุ้ง',
                'description' => 'กุ้งจากแม่น้ำแยงซีเกียนำมาผัดกับพริกเผา',
                'image_url' => '/images/foods/prikpaokung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกแกงไก่',
                'description' => 'ไก๊ ไก่ ไก๊ ไก่ ไก่ผัดพริกเผาก็อร่อยเหมือนนะเนี่ย',
                'image_url' => '/images/foods/prikkangkai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกแกงหมู',
                'description' => 'หมู หมึก กุ้ง เอามา อุ่น หุง ตุ๋น ต้ม นึ่ง',
                'image_url' => '/images/foods/prikkangmoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกแกงหมูกรอบ',
                'description' => 'หมูกรอบหมูกรอบครอบจักวารเคี้ยววันนี้แถมฟรีฟันปลอมนำมาผัดกับพริกนรกที่แม่บ้านชาวอีสารแนะนำ',
                'image_url' => '/images/foods/prikkangmookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกแกงเนื้อ',
                'description' => 'เนื้อเนื้อที่นำเข้าจากประเทศอิตาลีและกระเทียมจากประเทศอินเดียนำมาผัดกับพริกนรกที่แม่บ้านชาวอีสารแนะนำ',
                'image_url' => '/images/foods/prikkangnue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกแกงกุ้ง',
                'description' => 'กุ้งจากแม่น้ำแยงซีเกียนำมาผัดกับพริกแกงนรกที่แม่บ้านชาวอีสารแนะนำ',
                'image_url' => '/images/foods/prikkangkung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกสดไก่',
                'description' => 'ไก๊ ไก่ ไก๊ ไก่ ไก่ผัดพริกสดก็อร่อยเหมือนกันนะเนี่ย',
                'image_url' => '/images/foods/priksodkai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกสดหมู',
                'description' => 'หมู หมึก กุ้ง เอามา อุ่น หุง ตุ๋น ต้ม นึ่งแล้วเอามาผัดพริกสดนี่มันก็อร่อยเหมือนกันนะครับเนี่ย',
                'image_url' => '/images/foods/priksodmoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกสดหมูกรอบ',
                'description' => 'หมูกรอบหมูกรอบครอบจักวารเคี้ยววันนี้แถมฟรีฟันปลอมนำมาผัดกับพริกสดที่แม่บ้านชาวอีสารแนะนำ',
                'image_url' => '/images/foods/priksodmookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกสดเนื้อ',
                'description' => 'เนื้อที่นำเข้าจากประเทศอิตาลีและกระเทียมจากประเทศอินเดียนำมาผัดกับพริกสดที่แม่บ้านชาวอีสารแนะนำ',
                'image_url' => '/images/foods/priksodnue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพริกสดกุ้ง',
                'description' => 'กุ้งจากแม่น้ำแยงซีเกียนำมาผัดกับพริกแกงสดที่แม่บ้านชาวอีสารแนะนำ',
                'image_url' => '/images/foods/priksodkung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดไก่',
                'description' => 'ไก่จากแคนนาดาที่เลี้ยงมาในฟาร์มชั้นดีเปิดแอร์ให้ไก่ตลอด 24 ชม นำมาผัดกับข้าวหอมมะลิชั้นยอดจาก ประเทศไนจีเลีย ที่ปลูกบนยอดดอยในอุณหภูมิ 2 องศา',
                'image_url' => '/images/foods/kaopadkai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดหมู',
                'description' => 'หมู หมึก กุ้ง เอามา อุ่น หุง ตุ๋น ต้ม นึ่ง นำมาผัดกับข้าวหอมมะลิชั้นยอดจาก ประเทศไนจีเลีย ที่ปลูกบนยอดดอยในอุณหภูมิ 2 องศา',
                'image_url' => '/images/foods/kaopadmoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดหมูกรอบ',
                'description' => 'หมูกรอบหมูกรอบครอบจักวารเคี้ยววันนี้แถมฟรีฟันปลอมนำมาผัดกับข้าวหอมมะลิชั้นยอดจาก ประเทศไนจีเลีย ที่ปลูกบนยอดดอยในอุณหภูมิ 2 องศา',
                'image_url' => '/images/foods/kaopadmookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดเนื้อ',
                'description' => 'เนื้อที่นำเข้าจากประเทศอิตาลีนำมาผัดกับข้าวหอมมะลิชั้นยอดจาก ประเทศไนจีเลีย ที่ปลูกบนยอดดอยในอุณหภูมิ 2 องศา',
                'image_url' => '/images/foods/kaopadnue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดกุ้ง',
                'description' => 'กุ้งจากก้นมหาสมุทรแปซิฟิกที่ตายในท้องวาฬนานถึง 99 วัน สาธุๆ',
                'image_url' => '/images/foods/kaopadkung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวเขียวหวานไก่',
                'description' => 'ไก่จากประเทศอินโดนีเซียที่โตมาจากฟาร์มแถบชาญเมือง',
                'image_url' => '/images/foods/keowwankai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวเขียวหวานหมู',
                'description' => 'หมูเขียวหวานนี่มันก็อร่อยไม่ใช่เล่นๆเลยนะครับเนี่ย',
                'image_url' => '/images/foods/keowwanmoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวเขียวหวานหมูกรอบ',
                'description' => 'หมูกรอบที่ทอดตั้งแต่เมื่อวานตอนฝนตกพลัมๆ',
                'image_url' => '/images/foods/keowwanmookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวเขียวหวานเนื้อ',
                'description' => 'เนื้อเขียวหวานนี่มันก็อร่อยไม่ใช่เล่นๆเลยนะครับเนี่ย',
                'image_url' => '/images/foods/keowwannue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวเขียวหวานกุ้ง',
                'description' => 'กุ้งเขียวหวานนี่มันก็อร่อยไม่ใช่เล่นๆเลยนะครับเนี่ย',
                'image_url' => '/images/foods/keowwankung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพะแนงไก่',
                'description' => 'ไก่พะแนงที่อร่อยจนแขกจากประเทศอินเดียยกนิ้วให้',
                'image_url' => '/images/foods/panangkai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพะแนงหมู',
                'description' => 'หมูพะแนงที่อร่อยจนแขกจากประเทศอินเดียยกนิ้วให้',
                'image_url' => '/images/foods/panangmoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพะแนงหมูกรอบ',
                'description' => 'หมูกรอบพะแนงที่อร่อยจนแขกจากประเทศอินเดียยกนิ้วให้',
                'image_url' => '/images/foods/panangmookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพะแนงเนื้อ',
                'description' => 'เนื้อพะแนงที่อร่อยจนแขกจากประเทศอินเดียยกนิ้วให้',
                'image_url' => '/images/foods/panangnue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวพะแนงกุ้ง',
                'description' => 'กุ้งพะแนงที่อร่อยจนแขกจากประเทศอินเดียยกนิ้วให้',
                'image_url' => '/images/foods/panangkung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดขี้เมาไก่',
                'description' => 'ไก่ผัดขี้เมาที่เค้าก็ผัดไม่ค่อยจะเป็นเหมือนกันอะ',
                'image_url' => '/images/foods/keemaokai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดขี้เมาหมู',
                'description' => 'หมูผัดขี้เมาที่เค้าก็ผัดไม่ค่อยจะเป็นเหมือนกันอะ',
                'image_url' => '/images/foods/keemaomoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดขี้เมาหมูกรอบ',
                'description' => 'หมูกรอบผัดขี้เมาที่เค้าก็ผัดไม่ค่อยจะเป็นเหมือนกันอะ',
                'image_url' => '/images/foods/keemaomookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดขี้เมาเนื้อ',
                'description' => 'เนื้อผัดขี้เมาที่เค้าก็ผัดไม่ค่อยจะเป็นเหมือนกันอะ',
                'image_url' => '/images/foods/keemaonue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวผัดขี้เมากุ้ง',
                'description' => 'กุ้งผัดขี้เมาที่เค้าก็ผัดไม่ค่อยจะเป็นเหมือนกันอะ',
                'image_url' => '/images/foods/keemaokung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ผัดมาม่าไก่',
                'description' => 'ไก่ผัดมาม่าจากอากงที่มาจากประเทศจีนตอนใต้บนภูเขาสูง',
                'image_url' => '/images/foods/padmamakai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ผัดมาม่าหมู',
                'description' => 'หมูผัดมาม่าจากอากงที่มาจากประเทศจีนตอนใต้บนภูเขาสูง',
                'image_url' => '/images/foods/padmamamoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ผัดมาม่าหมูกรอบ',
                'description' => 'หมูกรอบผัดมาม่าจากอากงที่มาจากประเทศจีนตอนใต้บนภูเขาสูง',
                'image_url' => '/images/foods/padmamamookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ผัดมาม่าเนื้อ',
                'description' => 'เนื้อผัดมาม่าจากอากงที่มาจากประเทศจีนตอนใต้บนภูเขาสูง',
                'image_url' => '/images/foods/padmamanue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ผัดมาม่ากุ้ง',
                'description' => 'กุ้งผัดมาม่าจากอากงที่มาจากประเทศจีนตอนใต้บนภูเขาสูง',
                'image_url' => '/images/foods/padmamakung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะหรี่ไก่',
                'description' => 'ไก่กะหรี่ที่ไม่ใช่กะกรี่ไม่ต้องเสียตังถึง 1500 บาท แค่ 40 บาทก็อร่อยได้ เย้ๆ',
                'image_url' => '/images/foods/krareekai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะหรี่หมู',
                'description' => 'หมูกะหรี่ที่ไม่ใช่กะกรี่ไม่ต้องเสียตังถึง 1500 บาท แค่ 40 บาทก็อร่อยได้ เย้ๆ',
                'image_url' => '/images/foods/krareemoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะหรี่หมูกรอบ',
                'description' => 'หมูกรอบกะหรี่ที่ไม่ใช่กะกรี่ไม่ต้องเสียตังถึง 1500 บาท แค่ 40 บาทก็อร่อยได้ เย้ๆ',
                'image_url' => '/images/foods/krareemookrop.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะหรี่เนื้อ',
                'description' => 'เนื้อกะหรี่ที่ไม่ใช่กะกรี่ไม่ต้องเสียตังถึง 1500 บาท แค่ 40 บาทก็อร่อยได้ เย้ๆ',
                'image_url' => '/images/foods/krareenue.png',
                'is_recommend' => 0,
                'price' => 45.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ข้าวกะหรี่กุ้ง',
                'description' => 'กุ้งกะหรี่ที่ไม่ใช่กะกรี่ไม่ต้องเสียตังถึง 1500 บาท แค่ 40 บาทก็อร่อยได้ เย้ๆ',
                'image_url' => '/images/foods/krareekung.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 1,
            ],
            [
                'name' => 'ยำไข่ดาว',
                'description' => 'ไข่ดาวก็มีหัวใจนะยำกันอยู่ได้ ตัวๆไม่ได้หลอ ไข่ดาวรู้สึกว่าเสียเปลียบ',
                'image_url' => '/images/foods/yumkaidown.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 2,
            ],

            [
                'name' => 'ยำกุนเชียง',
                'description' => 'กุนเชียงดาวก็มีหัวใจนะยำกันอยู่ได้ ตัวๆไม่ได้หลอ กุนเชียงรู้สึกว่าเสียเปลียบ',
                'image_url' => '/images/foods/yumkuncheing.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 2,
            ],
            [
                'name' => 'ยำหมูมะนาว',
                'description' => 'หมูก็มีหัวใจนะยำกันอยู่ได้ ตัวๆไม่ได้หลอ หมูรู้สึกว่าเสียเปลียบ',
                'image_url' => '/images/foods/yummoomanow.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 2,
            ],
            [
                'name' => 'ยำหมูกรอบ',
                'description' => 'หมูกรอบก็มีหัวใจนะยำกันอยู่ได้ ตัวๆไม่ได้หลอ หมูกรอบรู้สึกว่าเสียเปลียบ',
                'image_url' => '/images/foods/yummookrop.png',
                'is_recommend' => 0,
                'price' => 50.00,
                'discount' => 0,
                'category_id' => 2,
            ],
            [
                'name' => 'ต้มยำไก่',
                'description' => 'ไก่ต้มเครื่องเทศที่นำเข้าจากประเทศอินเดีย',
                'image_url' => '/images/foods/tomyumkai.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 3,
            ],
            [
                'name' => 'ต้มยำกุ้ง',
                'description' => 'กุ้งต้มเครื่องเทศที่นำเข้าจากประเทศอินเดีย',
                'image_url' => '/images/foods/tomyumkung.png',
                'is_recommend' => 0,
                'price' => 60.00,
                'discount' => 0,
                'category_id' => 3,
            ],
            [
                'name' => 'ต้มยำหมู',
                'description' => 'หมูต้มเครื่องเทศที่นำเข้าจากประเทศอินเดีย',
                'image_url' => '/images/foods/tomyummoo.png',
                'is_recommend' => 0,
                'price' => 40.00,
                'discount' => 0,
                'category_id' => 3,
            ],
            [
                'name' => 'พิซซ่าค็อตโต้',
                'description' => 'พิซซ่าแฮม_มะกอกดำ_ไข่ต้ม_มะเขือเทศ_ชีส',
                'image_url' => '/images/foods/pizza_al_quattro.png',
                'is_recommend' => 0,
                'price' => 169.00,
                'discount' => 0,
                'category_id' => 5,
            ],
            [
                'name' => 'พิซซ่าคาลาซิงก้า',
                'description' => 'พิซซ่าซาลามี_หอมใหญ่_พริกใหญ่_มะเขือเทศ_ชีส',
                'image_url' => '/images/foods/pizza_casalinga.png',
                'is_recommend' => 0,
                'price' => 169.00,
                'discount' => 0,
                'category_id' => 5,
            ],
            [
                'name' => 'เสต็กเนื้อรสพริกไทย',
                'description' => 'เสต็ก_เนื้อ_พริกไทยดำ',
                'image_url' => '/images/foods/pepper_streak_breef.png',
                'is_recommend' => 0,
                'price' => 169.00,
                'discount' => 0,
                'category_id' => 6,
            ],
            [
                'name' => 'เสต็กสันในหมูพันเบคอน',
                'description' => 'เสต็ก_หมู_พันเบคอน',
                'image_url' => '/images/foods/fillet_mignon.png',
                'is_recommend' => 0,
                'price' => 149.00,
                'discount' => 0,
                'category_id' => 6,
            ],
            [
                'name' => 'สปาเก็ตตี้',
                'description' => 'สปาเก็ตตี้ซอสเนื้อ',
                'image_url' => '/images/foods/spaghetti_meatsauce.png',
                'is_recommend' => 0,
                'price' => 69.00,
                'discount' => 0,
                'category_id' => 7,
            ],
            [
                'name' => 'เพนเน่',
                'description' => 'เพนเน่ซอสเนื้อ',
                'image_url' => '/images/foods/penne_meatsauce.png',
                'is_recommend' => 0,
                'price' => 69.00,
                'discount' => 0,
                'category_id' => 7,
            ],
             [
                'name' => 'มันบด',
                'description' => 'มันที่เราพึ่งซื้อมาจากBigC เมื่อเช้านี้นำมาต้มและบดด้วยความปราณีต',
                'image_url' => '/images/foods/munbod.jpg',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],
            [
                'name' => 'สเต็กหมู',
                'description' => 'หมูชั้นดีจากบ้านข้างๆตัวกำลังอ้วนได้ที่ เลยอุ้มมาทำสเต็กสะเลย',
                'image_url' => '/images/foods/steakmoo.png',
                'is_recommend' => 1,
                'price' => 80.00,
                'discount' => 5,
                'category_id' => 8,
            ],
                       
            [
                'name' => 'สเต็กปลา',
                'description' => 'ปลาชั้นดีจากบ่อน้ำในพื้นที่ของเพื่อนบ้านข้างๆ เลี้ยงมาอย่างยาวนานและดูแลอย่างดี',
                'image_url' => '/images/foods/steakpla.png',
                'is_recommend' => 1,
                'price' => 80.00,
                'discount' => 5,
                'category_id' => 8,
            ],            
            [
                'name' => 'สเต็กไก่',
                'description' => 'ไก่บ้านตัวอ้วนๆสุดรักของลุงกำนัน',
                'image_url' => '/images/foods/steakkai.png',
                'is_recommend' => 1,
                'price' => 80.00,
                'discount' => 5,
                'category_id' => 8,
            ],
            [
                'name' => 'ต้มจืดหมู',
                'description' => 'ต้มจืดน้ำใส ใส่ใจทุกกระบวนการ แน่นอนหมูไม่เท่ากันสักถ้วย',
                'image_url' => '/images/foods/tomjuedmoo.png',
                'is_recommend' => 1,
                'price' => 60.00,
                'discount' => 5,
                'category_id' => 10,
            ],[
                'name' => 'หอมทอด',
                'description' => 'หัวหอมทอด เหลืองทองอย่างกะทองคำเปลว',
                'image_url' => '/images/foods/homtod.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'ทาโกะยากิ',
                'description' => 'ที่อื่นอาจจะให้ไส้น้อยร้านเราเน้นแป้งกินแล้วแบบอิ่มๆ จุกๆ ',
                'image_url' => '/images/foods/takoyaki.png',
                'is_recommend' => 1,
                'price' => 50.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'โค้ก',
                'description' => 'น้ำอัดลมกลิ่นโคล่า',
                'image_url' => '/images/foods/coke.png',
                'is_recommend' => 1,
                'price' => 15.00,
                'discount' => 0,
                'category_id' => 12,
            ],[
                'name' => 'สไปรท์',
                'description' => 'น้ำอัดลมกลิ่นเลม่อน',
                'image_url' => '/images/foods/sprite.png',
                'is_recommend' => 1,
                'price' => 15.00,
                'discount' => 0,
                'category_id' => 12,
            ],[
                'name' => 'เฟรนซ์ฟราย',
                'description' => 'มันฝรั่งโฮมเมดเราไม่ใช่เราซื้อจากร้านสะดวกซื้อเพื่อมาแบ่งขาย',
                'image_url' => '/images/foods/frenchfries.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'ขนมปังทาเนย',
                'description' => 'ขนมปังชั้นดีจากฝรั่งเศษเสริฟ เนยพม่า รสชาติเยี่ยม',
                'image_url' => '/images/foods/kanompuntanue.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'ขนมปังกระเทียม',
                'description' => 'ขนมปังชั้นดีจากฝรั่งเศษเสริฟพร้อมกับกระเทียมเวียดนามและ เนยพม่า รสชาติเยี่ยม',
                'image_url' => '/images/foods/kanompunkatem.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'ไส้กรอก',
                'description' => 'ไส้กรอกทอดง่ายๆทานง่ายๆ จ่ายตังง่ายๆ',
                'image_url' => '/images/foods/saikok.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'เกี๊ยวซ่า',
                'description' => 'รวมมิตรไส้หมู หมึก กุ้ง หุง อุ่น ตุ๋น ต้มน่ึง',
                'image_url' => '/images/foods/gieowsa.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'ข้าวเกรียบกุ้งพริกเผา',
                'description' => 'ข้าวเกรียบกุ้งปลอมแท้ร้อยเปอร์เซ็น',
                'image_url' => '/images/foods/kaogriapgungprikpao.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 9,
            ],[
                'name' => 'สเต็กไก่ทอด',
                'description' => 'จากไก่ชนคุณภาพสู่กระทะตั้งน้ำมันร้อนๆลงให้นังมีความกรอบกรุบ เคี้ยวยากมาแบบเต็มๆตัว',
                'image_url' => '/images/foods/steakkaitot.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 8,
            ],[
                'name' => 'เอ็นข้อไก่ทอด',
                'description' => 'จากไก่ชนคุณภาพสู่กระทะตั้งน้ำมันร้อนๆลงให้นังมีความกรอบกรุบ เคี้ยวยาก',
                'image_url' => '/images/foods/enkorkaitot.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'สลัดผัก',
                'description' => 'ผักคุณภาพจากหลังบ้าน',
                'image_url' => '/images/foods/salatpak.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 14,
            ],[
                'name' => 'สลัดไก่ทอด',
                'description' => 'จากไก่ชนคุณภาพสู่กระทะตั้งน้ำมันร้อนๆลงให้นังมีความกรอบกรุบ เคี้ยวยาก มาพร้อมสลัดออกกานิก เย้~~~',
                'image_url' => '/images/foods/salatkaitot.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 14,
            ],[
                'name' => 'สลัดไก่ย่าง',
                'description' => 'ไก่จากฟาร์มชั้นดีตีมาไม่เคยแพ้แต่แพ้ก็เลยนำมาย่างลงจาน มาพร้อมสลัดออกกานิก เย้~~~',
                'image_url' => '/images/foods/salatkaiyang.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 14,
            ],[
                'name' => 'สลัดหมูย่าง',
                'description' => 'หมูย่างสไตล์แอฟริกันย่างด้วยเตาหิน เสริฟมาพร้อมสลัดออกกานิก เย้~~~',
                'image_url' => '/images/foods/salatmooyang.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 14,
            ],[
                'name' => 'สลัดทูน่า',
                'description' => 'ทูน่าน้ำลึกคัดสรรเด็ดทุกกระป๋อง มาพร้อมสลัดออกกานิก เย้~~~',
                'image_url' => '/images/foods/salattoona.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 14,
            ],[
                'name' => 'สลัดเบคอน',
                'description' => 'เบคอนหมูจากเยอรมันผ่านการรมควันมาอย่างอย่างนานมาพร้อมสลัดออกกานิก เย้~~~ ',
                'image_url' => '/images/foods/salatbaykon.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 14,
            ],[
                'name' => 'ข้าวผัดมันกุ้ง',
                'description' => 'เราคัดมันกุ้งชั้นดีจากบ่อกุ้งที่มีสารตะกั่วน้ำหนักมันกุ้งจะสูง',
                'image_url' => '/images/foods/kaopatmangung.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวไข่ขยี้เบคอน',
                'description' => 'เบคอนจากหมูเยอรมันผ่านการรมควันมานานกว่าแรมปีมาพร้อมไข่ขยี้ที่ทำจาไข่ไก่ชั้นดีจากฟาร์มไก่ที่ชนะไก่ชนมาหลายสังเวียน',
                'image_url' => '/images/foods/kaokaikayebaykon.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวยำทูน่า',
                'description' => 'ทูน่าน้ำลึกคัดสรรเด็ดทุกกระป๋องเพื่อนำมายำ',
                'image_url' => '/images/foods/kaoyamtoona.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวยำแซลม่อน',
                'description' => 'แซลม่อน้ำตื้นที่ว่ายทวนน้ำขึ้นมาเพื่อวางไข่ หลังจากวางไข่เสร็จแล้วกล้ามเนื้อที่แข็งแรงดั่งแชมป์ยกน้ำหนักทีมชาติมากับน้ำยำสมุรไพรไทยครบเครื่อง',
                'image_url' => '/images/foods/kaoyamsaenmon.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวแกงเผ็ดเป็ดย่าง',
                'description' => 'เป็ดปักกิ่งสายพันธุ์ยูนาน เหนียวสู้ลิ้น มากับเครื่องแกงรสชาดจัดจ้าน',
                'image_url' => '/images/foods/kaogaengpetpedyang.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวหมูทงคัตซึ',
                'description' => 'หมูทอดระดับพรีเมี่ยม ราดซอสxoสูตรเด็ดของร้านข้างๆ',
                'image_url' => '/images/foods/kaomootongkatseu.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวไก่เทริยากิ',
                'description' => 'ไ่ก่ใส่ซอสญี่ปุ่นคัดสรร มาเพื่อให้ถูกปาก',
                'image_url' => '/images/foods/kaokaiteyriyaagi.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวปลาแซลม่อนทอดเกลือ',
                'description' => 'แซลม่อน้ำตื้นที่ว่ายทวนน้ำขึ้นมาเพื่อวางไข่ หลังจากวางไข่เสร็จแล้วกล้ามเนื้อที่แข็งแรงดั่งแชมป์ยกน้ำหนักทีมชาติ',
                'image_url' => '/images/foods/kaoplasaenmontotgleua.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ],[
                'name' => 'ข้าวไก่แชมป์',
                'description' => 'คัดสรร จากไก่สายพันธุ์ดี ตีชนะมาหลายสังเวียน',
                'image_url' => '/images/foods/kaokaichamp.png',
                'is_recommend' => 1,
                'price' => 40.00,
                'discount' => 5,
                'category_id' => 13,
            ]
        ]);
    }
}