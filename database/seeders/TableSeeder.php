<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::statement('table_bukus')->truncate();

        \DB::table('table_bukus')->insert([
          [
            'id_publisher'=>'12345678910',
            'cover'=>"cover-hujan.jpg",
            'judul'=>"Hujan",
            'penerbit'=>"Gramedia Pustaka Utama",
            'pengarang'=>"Tere Liye",
            'Tahun_Terbit'=>"April,2016",
            'sinopsis'=>"Bercerita tentang seorang gadis bernama Lail yang hidup di tahun 2042.
                        Dia adalah seorang penyintas yang berhasil selamat dari bencana letusan gunung purba yang hampir memusnahkan seluruh umat manusa.
                        Di hari bencana itu dia masihlah seorang gadis kecil yang penakut. Dia kehilangan orangtuanya, tetapi di hari itu juga dia menemukan
                        sosok yang akan berharga baginya di masa depan nanti.
                        Esok, seorang anak kecil yang sedikit lebih tua dari Lail. Mereka sama-sama berjumpa
                        di gerbong kereta api disaat bencana itu tiba. Dia adalah sosok yang cerdas, optimis, dan bisa melihat sisi positif di setiap hal.
                        Buku ini akan menceritakan bagaimana sosok Lain yang dulunya penakut akan menjadi seorang wanita pemberani yang menyelamatkan orang-orang dari
                        bencana dan juga perasaannya yang berubah seiring waktu kepada Esok, sahabat kecilnya.",
            'toko'=>"https://ebooks.gramedia.com/id/buku/hujan-cover-baru",
          ]




        ]);
    }
}
