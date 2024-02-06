<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'One Piece 100',
            'slug' => 'one-piece-100',
            'stock_init' => 5,
            'stock_now' => 5,
            'image' => 'book-image/onePiece.jpg',
            'category' => 'Komik',
            'genre' => 'Action, Adventure, Fantasy',
            'description' => 'Haoshoku. Para pemeran utama telah berkumpul di atap. Luffy dan kawan-kawan berhadapan menantang Kaido & Mom. Apa ada cara untuk menang menghadapi aliansi terkuat!? Seperti apa masa depan yang sedang menanti dalam duel ekstrem frontal ini!? Guncangan super dahsyat melanda Onigashima!! Simak kisah petualangan di lautan, One Piece!!'
        ]);

        Book::create([
            'title' => 'Detective Conan 100',
            'slug' => 'detective-conan-100',
            'stock_init' => 3,
            'stock_now' => 3,
            'image' => 'book-image/detectiveConan.jpg',
            'category' => 'Komik',
            'genre' => 'Mystery, Shounen, Thriller',
            'description' => 'Detektif Conan yang juga dikenal sebagai Case Closed dan Detective Conan, adalah seri manga detektif Jepang yang ditulis dan diilustrasikan oleh Gosho Aoyama. Serial ini diserialisasikan dalam majalah manga shōnen Weekly Shōnen Sunday yang diterbitkan oleh Shogakukan sejak Januari 1994, dengan bab-babnya dikumpulkan dalam beberapa volume tankōbon. Karena masalah hukum dengan nama Detective Conan, rilisan bahasa Inggris dari Funimation dan Viz diubah namanya menjadi Case Closed. Serial ini bercerita mengenai detektif SMA bernama Shinichi Kudo (atau Jimmy Kudo dalam beberapa terjemahan bahasa Inggris) yang tubuhnya menyusut menjadi kecil ketika menyelidiki sebuah organisasi misterius dan umumnya memecahkan banyak kasus dengan meniru suara dari ayah teman masa kecilnya dan berbagai karakter lain.

            Komik ini menceritakan seorang detektif SMA yang terkadang bekerja dengan polisi untuk memecahkan kasus tertentu bernama Shinichi Kudo. Selama penyelidikan, ia disergap dan dilumpuhkan oleh anggota sindikat kejahatan yang dikenal sebagai Organisasi Hitam. Dalam upaya untuk membunuh detektif muda itu, mereka menelan paksa obat percobaan yang berbahaya. Namun, obat tersebut mengubahnya menjadi anak-anak daripada membunuhnya. Mengadopsi nama samaran Conan Edogawa dan merahasiakan identitas aslinya, Kudo tinggal bersama teman masa kecilnya Ran Mouri dan ayahnya Kogoro Mouri, yang merupakan seorang detektif swasta. Sepanjang seri tersebut, ia ikut serta dalam kasus yang ditangani oleh Kogoro. Meskipun demikian, setelah Kudo berhasil memecahkan kasus tersebut, ia akan menggunakan jarum bius yang tersembunyi dalam peralatan Prof. Agasa untuk membius Kogoro dan kemudian menggunakan pengubah suara yang dapat menirukan suaranya untuk mengungkapkan pemecahan kasus. Ia juga bersekolah di sekolah dasar setempat di mana ia berteman dengan beberapa teman sekelas yang membentuk Grup Detektif Cilik.
            
            Komik ini memiliki beberapa seri, pada seri ke-100 menceritakan Yusaku dan Yukiko Kudo yang berpura-pura mengalami keracunan makanan agar dapat memancing keluar anggota Organisasi Baju Hitam. Mereka berdua menyusun sebuah rencana dengan FBI agar dapat mengelabui Organisasi Baju Hitam. Suatu ketika terdapat seseorang yang muncul dan mengaku sebagai Yukasu. Ia mengatakan jika kedatangannya untuk membantu karena Yukasi berhasil membersihkan nama Kid dalam kasus penipuan Museum. Akan tetapi Conan salah mengira dan menemukan fakta mengejutkan bahwa Yumekawa adalah pelaku pembunuhan di ruang tertutup.
            
            Pada kasus lain Conan menemukan seorang ID agen yang tewas dan melihat kode aneh pada ponsel agen tersebut. Melihat hal itu Conan segera mencoba memecahkan kode dan menjelaskan metode yang dilakukannya untuk memecahkan kode tersebut. Agar berhasil menangkap Organisasi Baju Hitam, Camel menyarankan untuk membuat kode lagi dan Jodie membuat kodenya sendiri. Selain itu Camel dan Mark berencana untuk pergi memancing Organisasi Baju Hitam namun sepertinya Organisasi Baju Hitam sudah bergerak agar bisa mendapatkan kode tersebut.
            Sinopsis
            Organisasi baju hitam lah yang berada di balik penemuan secara beruntun mayat tanpa identitas! Musuh kali ini terdiri dari Gin, Vodka, Chianti, Korn, Vermouth, Kir, dan Rum. Kecerdasan dan kecerdikan yang tiada duanya akhirnya membawa secercah sinar terang. Bagaimanakah akhir kisah dari komik Detektif Conan 100 ini?'
        ]);

        Book::create([
            'title' => 'Growing Up Mindful',
            'slug' => 'growing-up-mindful',
            'stock_init' => 2,
            'stock_now' => 2,
            'image' => 'book-image/growing up mindful.jpg',
            'category' => 'Panduan',
            'genre' => 'Parenting & Keluarga',
            'description' => 'Membentuk Anak yang Bahagia & Berkesadaran Pikiran Skill yang harus dimiliki anak-anak di masa depan adalah kecerdasan emosi, rasa ingin tahu tinggi, berani mengambil keputusan, dan berdaya juang. Salah satu cara untuk menyiapkannya adalah dengan melatih mindfulness pada mereka. Selama ini mungkin Anda berpikir bahwa mindfulness atau kesadaran pikiran hanyalah untuk orang dewasa, dan mengajarkan mindfulness pada anak adalah hal yang mustahil. Mungkin Anda juga mengira bahwa praktik mindfulness adalah duduk bersila dengan tenang selama berjam-jam. Semua anggapan itu dipatahkan oleh Dr. Christopher Willard, seorang praktisi mindfulness yang sudah berpengalaman lebih dari 20 tahun. Praktik mindfulness sangat bisa diterapkan oleh anak-anak dalam sebuah permainan, olahraga, jalan-jalan, dan setiap aktivitas sehari-hari. Di buku ini, Dr. Willard menuliskan lengkap panduan praktisnya. Semua bentuk latihan mindfulness bisa Anda lakukan bersama anak-anak baik di rumah, lingkungan bermain, maupun sekolah. Yuk, kita bantu anak-anak meningkatkan fokus dan kebahagiaan, serta mengurangi kecemasannya dengan mindfulness.'
        ]);

        Book::create([
            'title' => '111 Kode HTML Untuk Belajar Kilat',
            'slug' => '111-kode-html-untuk-belajar-kilat',
            'stock_init' => 1,
            'stock_now' => 1,
            'image' => 'book-image/111 kode html untuk belajar kilat.jpg',
            'category' => "Panduan",
            'genre' => 'Teknologi, Web, Programming',
            'description' => 'Teknik menguasai HTML secepat kilat untuk pemula yang ingin menjadi master HTML!

            Untuk menguasai pemrograman web, HTML adalah syarat mutlak yang harus dikuasai sebelum mempelajari bahasa pemrograman web lainnya. Untuk menguasai HTML bisa dikatakan gampang-gampang susah.
            
            Sebenarnya mudah untuk mempelajari HTML, namun banyaknya buku referensi yang tidak ringkas dan terlalu panjang justru membuat yang ingin belajar merasa lelah dan tidak mampu menguasai HTML seutuhnya.
            
            Diperlukan panduan ringkas namun dapat mencakup semua pembahasan. Oleh karena itu, hadirlah buku ini yang memuat 111 kode HTML untuk belajar HTML secara kilat. Diharapkan setelah mahir menguasai HTML, pembaca dapat menguasai pemrograman web lainnya dengan mudah.
            
            Pembahasan dalam buku mencakup:
            - Dasar-dasar HTML
            - HTML Styles
            - HTML Tabel
            - HTML Form
            - HTML Graphic
            - dan lain-lain.
            
            Mengingat pembahasannya yang ringkas dan mudah, buku 111 Kode HTML untuk Belajar Kilat sangat direkomendasikan untuk semua kalangan, baik itu pemula, mahasiswa jurusan Teknik Informatika, karyawan, atau ibu rumah tangga yang mau jadi master HTML! Anda tidak hanya akan memiliki keahlian baru, tetapi juga sumber penghasilan tambahan sebagai programmer ke depannya.'
        ]);
    }
}
