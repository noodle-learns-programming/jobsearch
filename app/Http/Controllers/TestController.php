<?php

namespace App\Http\Controllers;

use App\User;
use App\Page;
use App\Character;
use App\Skill;
use DB;

class TestController extends Controller {

    public function __construct() {
        //$this->middleware('auth.basic', ['only' => 'store']);
//        $this->middleware('jwt.auth');
    }

    public function angular() {
        return view('angular');
    }

    
    public function neo() {
        $this->createPage();
        $this->createUser();
        $this->createCharacter();
        $this->createSkill();
    }
    
    private function createPage() {
        Page::create(["id_social" => "100048249004", "name" => "Câu lạc bộ những người thích đánh rắm"]);
        Page::create(["id_social" => "100100686804995", "name" => "Ngắm Gái Là Một Sở Thích :X"]);
        Page::create(["id_social" => "100100876814281", "name" => "Điện thoại HongKong"]);
        Page::create(["id_social" => "100100876814752", "name" => "Bảo mẫu"]);
        Page::create(["id_social" => "100101163418605", "name" => "*Let's go*"]);
//        Page::create(["id_social" => "100102266708743", "name" => "Ngoai ngu"]);
//        Page::create(["id_social" => "100102513452194", "name" => "Nàng Chuột"]);
//        Page::create(["id_social" => "100102773384393", "name" => "Vietnam Panpages"]);
//        Page::create(["id_social" => "100103066701236", "name" => "Những người hay ngáp"]);
//        Page::create(["id_social" => "100103423403375", "name" => "Hội những nhóc thíc sửa thông tin trên wiki"]);
//        Page::create(["id_social" => "100103626794811", "name" => "Sim Mobifone - Mọi Lúc Mọi Nơi"]);
//        Page::create(["id_social" => "100103710082097", "name" => "Le bao Trinh"]);
//        Page::create(["id_social" => "100104936751324", "name" => "Hội những người ghét cay ghét đắng hối lộ"]);
//        Page::create(["id_social" => "100104993409494", "name" => "Hội những người thích nhắn tin"]);
//        Page::create(["id_social" => "100105310073178", "name" => "Sinh tố Võ Văn Tần"]);
//        Page::create(["id_social" => "100105470135358", "name" => "Hiệp hội NLP Việt Nam"]);
//        Page::create(["id_social" => "100105536806946", "name" => "Buổi chiều và những mảnh vỡ"]);
//        Page::create(["id_social" => "100106640073991", "name" => "Hội những người phát cuồng vì muối, rau và TCFC"]);
//        Page::create(["id_social" => "100106903389042", "name" => "Chuyên Viên Chém Gió"]);
//        Page::create(["id_social" => "100106923473503", "name" => "Dress for lady"]);
//        Page::create(["id_social" => "100107040111248", "name" => "Hẹn gặp a vào một ngày khác =\">"]);
//        Page::create(["id_social" => "100107846811768", "name" => "Hoài Ann. Quỳnh Anhh. Mẫn Tiênn."]);
//        Page::create(["id_social" => "100108300106850", "name" => "Hội những người thích hát Kraoke"]);
//        Page::create(["id_social" => "100109153474704", "name" => "Công Ty Cổ Phần Trung Tâm Công Nghệ Phần Mềm TSP"]);
//        Page::create(["id_social" => "100110870138975", "name" => "BÁT Tràng -Con đường gốm sứ"]);
//        Page::create(["id_social" => "100111186804341", "name" => "Andoford"]);
//        Page::create(["id_social" => "100112733426186", "name" => "Tonkin Coffee"]);
//        Page::create(["id_social" => "100112796782168", "name" => "Đặc Sản Chợ Hàn"]);
//        Page::create(["id_social" => "100112906774454", "name" => "TrangHanchi"]);
//        Page::create(["id_social" => "100112956803212", "name" => "HOA MAT TROI"]);
//        Page::create(["id_social" => "100113003481219", "name" => "Quả Táo Độc"]);
//        Page::create(["id_social" => "100113256804065", "name" => "Salon Tóc Xinh Thanh Hằng"]);
//        Page::create(["id_social" => "100113626751600", "name" => "THPT Lý Nhân Tông"]);
//        Page::create(["id_social" => "100114456766312", "name" => "Kỉ Niệm"]);
//        Page::create(["id_social" => "100115356786157", "name" => "Công ty CPXD Quang Hưng Phát"]);
//        Page::create(["id_social" => "100115523470799", "name" => "IpCase"]);
//        Page::create(["id_social" => "100116446770967", "name" => "GIÓ"]);
//        Page::create(["id_social" => "100117096764450", "name" => "Hội Những người Thích Đủ Thứ Nhưng không bao giờ có tiền mua"]);
//        Page::create(["id_social" => "100118743468770", "name" => "Thời trang_Giới trẻ"]);
//        Page::create(["id_social" => "100120780113641", "name" => "Kỉ Băng Hà"]);
//        Page::create(["id_social" => "100121036798362", "name" => "THPT Tĩnh Gia II"]);
//        Page::create(["id_social" => "100121383471681", "name" => "Anh - Tùng Sommelier club"]);
//        Page::create(["id_social" => "100122150134846", "name" => "MV HD"]);
//        Page::create(["id_social" => "100122493476439", "name" => "Ngọt Ngào s2 甜心"]);
//        Page::create(["id_social" => "100124306731163", "name" => "Hội những người thích ăn ngô trừ bữa :xxxxxxxxxxxxxxxxxx"]);
//        Page::create(["id_social" => "100124646739919", "name" => "Hanoi Tower"]);
//        Page::create(["id_social" => "100125416804371", "name" => "Phát Khùng với bọn tín đồ HKT"]);
//        Page::create(["id_social" => "100126540104207", "name" => "Hội những người phát cuồng vì Nguyen Steven"]);
//        Page::create(["id_social" => "100128483427232", "name" => "HỘI ĂN CHƠI KHÔNG SỢ CON RƠI"]);
//        Page::create(["id_social" => "100129916733686", "name" => "Toán 1 (2000 - 2003)  Lương Văn Chánh - Phú Yên"]);
    }

    private function createUser() {
        User::create(["identity" => "100005965563483", "username" => "ck.mua.3", "fullname" => "Pi's Pôlyme's", "gender" => "MALE", "current_city" => "Tây Ninh", "hometown" => "Tây Ninh"]);
        User::create(["identity" => "100001034249186", "username" => "xnohat", "fullname" => "Hong Phuc Nguyen", "gender" => "MALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
        User::create(["identity" => "100000001339582", "username" => "Singer.VanMaiHuong", "fullname" => "Văn Mai Hương", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Hanoi, Vietnam"]);
        User::create(["identity" => "1140177709", "username" => "1140177709", "fullname" => "Duy Nguyễn", "gender" => "MALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
        User::create(["identity" => "100001349889094", "username" => "kimdungdao85", "fullname" => "Đào Kim Dung", "gender" => "FEMALE", "current_city" => "Hanoi, Vietnam", "hometown" => "Ha-Nam, Hà Nam, Vietnam"]);
//        User::create(["identity" => "709234645", "username" => "traanf", "fullname" => "Tran Tuan Anh", "gender" => "MALE", "current_city" => "Hanoi, Vietnam"]);
//        User::create(["identity" => "100004744954014", "username" => "chi1bro", "fullname" => "Huyen Chip", "gender" => "FEMALE", "birthday" => "1990", "current_city" => "Hanoi, Vietnam", "hometown" => "Hai Hau"]);
//        User::create(["identity" => "100004227851982", "username" => "kenbihoang.vtv", "fullname" => "Hoàng Trung Hiếu", "gender" => "MALE"]);
//        User::create(["identity" => "728839386", "username" => "long.huynh.16144", "fullname" => "Long Huynh", "gender" => "MALE", "current_city" => "Thành phố Hồ Chí Minh", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100000315701660", "username" => "daudatchaybangpin", "fullname" => "Tan Nguyen Van", "gender" => "MALE", "current_city" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100000024527037", "username" => "giaplee", "fullname" => "Giap Le Van", "gender" => "MALE", "current_city" => "Hanoi, Vietnam"]);
//        User::create(["identity" => "100000366174004", "username" => "aaron.phucdang", "fullname" => "Phuc Dang", "gender" => "MALE", "birthday" => "1990", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100000271946723", "username" => "thunga.nguyen.75", "fullname" => "Thu Nga Nguyen", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100003268127535", "username" => "Tom.va.rerry", "fullname" => "Đinh Hà", "gender" => "FEMALE", "current_city" => "Hanoi, Vietnam", "hometown" => "Hanoi, Vietnam"]);
//        User::create(["identity" => "1318750198", "username" => "rayvo", "fullname" => "Quoc Duy Vo", "gender" => "MALE", "current_city" => "Incheon, South Korea"]);
//        User::create(["identity" => "1243468108", "username" => "nguyen.n.duy.14", "fullname" => "Nguyen Ngoc Duy", "gender" => "MALE", "birthday" => "1984", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Phan Thiet"]);
//        User::create(["identity" => "1580406014", "username" => "sonoko.truong", "fullname" => "Sonoko Trương", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Da Lat"]);
//        User::create(["identity" => "100005098691694", "username" => "yumi0185", "fullname" => "Yumi Vu", "gender" => "FEMALE", "birthday" => "1984", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Binh Dinh, Nghia Binh, Vietnam"]);
//        User::create(["identity" => "100004237386927", "username" => "katie.kieu.3", "fullname" => "Lê Thị Thuý Kiều", "gender" => "FEMALE", "birthday" => "1986", "current_city" => "Thành phố Hồ Chí Minh, Hồ Chí Minh, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100000001126549", "username" => "hien.do.9022", "fullname" => "Hien Do", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Thái Bình"]);
//        User::create(["identity" => "1810181763", "username" => "mthuy232", "fullname" => "Minh Thúy Nguyễn", "gender" => "FEMALE", "birthday" => "1989", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100004507470778", "username" => "lucy.nguyen.5680", "fullname" => "Hien Nguyen Ngoc", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Phu Nhuan, Hồ Chí Minh, Vietnam"]);
//        User::create(["identity" => "100001528376207", "username" => "trang.vole", "fullname" => "Trang Vo Le", "gender" => "FEMALE", "birthday" => "1977", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Nha Trang, Vietnam"]);
//        User::create(["identity" => "1015572957", "username" => "sieutraubo", "fullname" => "Nguyễn Phương Thảo", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Athens, Greece"]);
//        User::create(["identity" => "737522356", "username" => "pham.duong", "fullname" => "Pham An Duong", "gender" => "MALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100003242027429", "username" => "vienha.nguyenthuy", "fullname" => "Nguyễn Thụy Viễn Hạ", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Lái Thiêu"]);
//        User::create(["identity" => "100005474493537", "username" => "nguyenphuong.thuy.798", "fullname" => "Thúy Nguyễn", "gender" => "FEMALE", "current_city" => "Ninh Bình", "hometown" => "Ninh Bình"]);
//        User::create(["identity" => "100002328571138", "username" => "thaimeo0705", "fullname" => "Thái Mèo", "gender" => "MALE", "current_city" => "Thanh Hóa", "hometown" => "Thanh Hóa"]);
//        User::create(["identity" => "100004699361218", "username" => "99c100880", "fullname" => "Đình Khôi", "gender" => "MALE", "birthday" => "1991", "current_city" => "Bac Ninh"]);
//        User::create(["identity" => "100004943444187", "username" => "thangpro.xeroxy92", "fullname" => "Huỳnh Quang Thắng", "gender" => "MALE", "birthday" => "1992", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Binh Dinh, Nghia Binh, Vietnam"]);
//        User::create(["identity" => "1205312178", "username" => "Willie.be.nho", "fullname" => "Phung Dan Truong", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "1589070142", "username" => "Ms.Phuong", "fullname" => "Thùy Phương", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Tuy Hòa"]);
//        User::create(["identity" => "100001735773766", "username" => "thuongthuong.iuiu", "fullname" => "Nguyễn Hoài Thương", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Bak Nin, Bắc Ninh, Vietnam"]);
//        User::create(["identity" => "100002076653869", "username" => "jason.redfield.902", "fullname" => "Đỗ Ngân Sơn", "gender" => "MALE"]);
//        User::create(["identity" => "100004087537304", "username" => "ngoclam.tran.79", "fullname" => "Ngoc Lam Tran", "gender" => "MALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Quang Ngai"]);
//        User::create(["identity" => "100004510534129", "username" => "trang.vo.3705157", "fullname" => "Trang Võ", "gender" => "FEMALE", "birthday" => "1984", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100000106878122", "username" => "lehongvan9183", "fullname" => "Vân Lê Hồng", "gender" => "FEMALE", "birthday" => "1983", "current_city" => "Kim Mã, Ha Noi, Vietnam", "hometown" => "Hoài Nhon, Bình Ðịnh, Vietnam"]);
//        User::create(["identity" => "100000786663511", "username" => "anh.vy.9", "fullname" => "Anh Vy", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100001222503493", "username" => "hai.duong.37", "fullname" => "Hai Duong", "gender" => "MALE", "hometown" => "Da Nang, Vietnam"]);
//        User::create(["identity" => "100000339207179", "username" => "vy.le.96995", "fullname" => "Vy Vy Le", "gender" => "FEMALE", "birthday" => "1982", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100000334878230", "username" => "vu.huyen.1614", "fullname" => "Vũ Huyền", "gender" => "FEMALE", "current_city" => "Hanoi, Vietnam", "hometown" => "Bac Ninh"]);
//        User::create(["identity" => "1017051403", "username" => "moon.hang.351", "fullname" => "Giang Khánh Hằng", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100004348592942", "username" => "100004348592942", "fullname" => "Đỗ Quyên Trắng", "gender" => "FEMALE", "current_city" => "Hanoi, Vietnam", "hometown" => "Hanoi, Vietnam"]);
//        User::create(["identity" => "100001639971665", "username" => "100001639971665", "fullname" => "Lien Tran", "gender" => "FEMALE", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "725112966", "username" => "725112966", "fullname" => "Đoàn Tiến Đạt", "gender" => "MALE", "current_city" => "Thành phố Hồ Chí Minh, Hồ Chí Minh, Vietnam", "hometown" => "Nam Dinâ?, Ha Nam Ninh, Vietnam"]);
//        User::create(["identity" => "1131143118", "username" => "oc.thanhvan", "fullname" => "Phạm Thị Thanh Vân", "gender" => "FEMALE", "birthday" => "1984", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Hai Phong, Vietnam"]);
//        User::create(["identity" => "746050202", "username" => "X.Nicky", "fullname" => "Vu Le Quoc", "gender" => "MALE", "birthday" => "1985", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100003382890020", "username" => "perla.thai", "fullname" => "Ngoc Thai", "gender" => "FEMALE", "current_city" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "717678376", "username" => "thanhthaomc", "fullname" => "Nguyễn Ngọc Thanh Thảo", "gender" => "FEMALE", "birthday" => "1981", "current_city" => "Ho Chi Minh City, Vietnam", "hometown" => "Ho Chi Minh City, Vietnam"]);
//        User::create(["identity" => "100006312420097", "username" => "giangphongdan87", "fullname" => "Nguyen Thi Nhan", "gender" => "FEMALE", "birthday" => "1987", "hometown" => "Nam Dinâ?, Ha Nam Ninh, Vietnam"]);
    }

    private function createCharacter() {
        Character::create(["name" => "Positive"]);
        Character::create(["name" => "Teamwork"]);
        Character::create(["name" => "Open"]);
    }

    private function createSkill() {
        Skill::create(["name" => "PHP"]);
        Skill::create(["name" => "Javascript"]);
        Skill::create(["name" => "MySQL"]);
    }

    public function cypher()
    {
        $rowset = DB::select('MATCH (n:User) RETURN n LIMIT 25');
        $result = [];
        foreach($rowset as $row)
        {
            $result[] = $row['n']->getProperties();
        }
        return $result;
    }


    
}