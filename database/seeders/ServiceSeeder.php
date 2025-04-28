<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Darah Rutin',
            'slug'=> 'pemeriksaan-darah-rutin',
            'image'=> 'tes_darah.jpg',
            'harga'=>50000,
            'lama_periksa'=>'10 menit',
            'manfaat'=>'Pemeriksaan Darah Rutin merupakan penilaian dasar komponen eritrosit, leukosit, trombosit. Manfaat pemeriksaan ini untuk evaluasi anemia, leukemia, infeksi bakteri, virus parasit dan kemungkinan alergi, polisitemia, kemungkinan kelainan perdarahan',
            'persiapan'=>'Tidak Ada Persiapan Khusus',
            'deskripsi'=>'Pemeriksaan atau tes hematologi rutin merupakan penilaian dasar untuk beberapa komponen darah. Mulai dari komponen eritrosit (sel darah merah), leukosit (sel darah putih) hingga komponen trombosit (sel terkecil dari darah). Pemeriksaan ini dapat dilakukan untuk mengevaluasi atau mendeteksi berbagai kondisi medis. Contohnya seperti infeksi, leukemia (kanker sel darah putih), anemia (kekurangan sel darah merah sehat), polisitemia, hingga kemungkinan kelainan perdarahan'
        ]);
        Service::create([
            'jenis_tes'=> 'Hemoglobin',
            'slug'=> 'hemoglobin',
            'image'=> 'hemoglobin.jpeg',
            'harga'=>30000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Pemeriksaan kadar hemoglobin (Hb) memiliki beberapa manfaat penting, terutama dalam mendeteksi anemia dan memantau kondisi kesehatan secara umum. Pemeriksaan ini juga bisa membantu dalam mendiagnosis penyakit tertentu dan memantau efektivitas pengobatan',
            'persiapan'=>'Tidak Ada Persiapan Khusus',
            'deskripsi'=>'Hemoglobin merupakan komponen utama sel darah Hemoglobin merupakan kompenon utama sel darah merah dan berfungsi untuk transport oksigen. Kekurangan hemoglobin pada darah akan menyebabkan penyakit Anemia.</br>
            Anemia adalah suatu kondisi tubuh yang ditandai dengan hasil pemeriksaan kadar hemoglobin (Hb) dalam darah lebih rendah dari normal, yang bisa disebabkan jumlah sel darah merah yang kurang (contohnya pada perdarahan berat akibat kecelakaan, atau sebab lainnya), atau jumlah sel darah merah cukup tapi kandungan Hb didalam sel darah merah kurang.
            Batas nilau Hb adalah:
            <ul type="circle" class="text-gray-500" >
            <li>•	Ibu hamil anemia jika kadar Hb kurang dari 11 g/dL.  </li>
            <li>•	Anak 12 – 14 tahun dan Perempuan tidak hamil (usia lebih dari 15 tahun anemia jika kadar Hb kurang dari 12 g/dL </li>
            </ul>'
        ]);
        Service::create([
            'jenis_tes'=> 'Glukosa Darah Sewaktu',
            'slug'=> 'glukosa-darah-sewaktu',
            'image'=> 'glukosa_darah.jpg',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'
            <ul type="circle" class="text-gray-500" >
            <li>•	Deteksi Dini Diabetes, GDS dapat membantu mendeteksi diabetes jika kadar gula darah di atas 200 mg/dL </li>
            <li>•	Pemantauan Pengobatan: </br>
            Bagi penderita diabetes, GDS membantu memantau kadar gula darah harian dan menyesuaikan pengobatan serta pola makan </li>
            <li>•	Pengendalian Gula Darah Harian: </br>
            Pemeriksaan ini membantu individu dengan diabetes untuk mengontrol kadar gula darah mereka sehari-hari, yang penting untuk mencegah komplikas</li>
            <li>•	Identifikasi Hipoglikemia: </br>
            GDS juga dapat digunakan untuk mengidentifikasi kadar gula darah rendah (hipoglikemia), yang berbahaya bagi penderita diabetes </li>
            <li>•	Skrining Umum:</br>
            GDS sering digunakan sebagai skrining awal untuk memeriksa kadar gula darah seseorang </li>
            </ul>',
            'persiapan'=>'Tidak Ada Persiapan Khusus',
            'deskripsi'=>'Pemeriksaan gula darah sewaktu adalah pemeriksaan gula darah yang dapat dilakukan kapan saja tanpa perlu berpuasa terlebih dahulu. Pemeriksaan ini biasanya dilakukan untuk menilai kadar gula pada pasien diabetes atau pasien yang mengalami penurunan kesadaran.'
        ]);
        Service::create([
            'jenis_tes'=> 'Glukosa Darah Puasa',
            'slug'=> 'glukosa-darah-puasa',
            'image'=> 'glukosa_darah_puasa.jpg',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'
            <ul type="circle" class="text-gray-500" >
                <li>•	Mendeteksi kadar gula darah dalam keadaan puasa untuk mengidentifikasi potensi masalah seperti prediabetes atau diabetes </li>
                <li>•	Mengontrol Diabetes </li>
                <li>•	Mengidentifikasi Kadar Gula Darah yang Tinggi (Hiperglikemia) atau Rendah (Hipoglikemia) </li>
            </ul>',
            'persiapan'=>'Pasien diwajibkan untuk berpuasa 8-14 jam. (Boleh minum air putih)',
            'deskripsi'=>'Cek glukosa puasa adalah pemeriksaan untuk mengukur gula darah seseorang setelah puasa semalaman. kurang lebih selama 8–12 jam.
            Kadar gula darah puasa 99 mg/dL atau lebih rendah adalah normal, 100-125 mg/dL menunjukkan kamu memiliki pradiabetes, dan 126 mg/dL atau lebih tinggi menunjukkan kamu mengidap diabetes. Lamanya puasa yang dilakukan sebelum pemeriksaan gula darah puasa adalah 8–12 jam. Puasa melebihi waktu yang disarankan dapat memengaruhi hasil pemeriksaan kadar gula darah. Pada waktu puasa ini, Anda tidak boleh mengonsumsi apa pun kecuali air putih.'
        ]);
        Service::create([
            'jenis_tes'=> 'Kolesterol',
            'slug'=> 'kolesterol',
            'image'=> 'kolesterol.png',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Tujuan pemeriksaan kolesterol yakni untuk mengetahui  jumlah kadar komponen lemak dalam darah dan dapat mengetahui resiko terjadinya timbunan plak atau  penyumbatan di pembuluh darah yang dapat memicu berbagai penyakit kardiovaskuler, seperti serangan jantung, penyakit jantung coroner, hipertensi dan stroke',
            'persiapan'=>'Sebelum melakukan pemeriksaan kolesterol, pasien diwajibkan untuk berpuasa selama 12 jam sebelum pengambilan sampel darah. Selain itu, terdapat beberapa hal yang penting untuk diperhatikan sebelum menjalani tes kolesterol, di antaranya:
            <ul type="circle" class="text-gray-500" >
            <li>•	Tidak mengonsumsi obat-obatan atau suplemen yang dapat memengaruhi hasil pemeriksaan </li>
            <li>•	Menghindari konsumsi makanan yang mengandung lemak tinggi. </li>
            <li>•	Tidak mengonsumsi alkohol. </li>
            <li>•	Menghindari aktivitas fisik dan olahraga secara berlebihan. </li>
            </ul>
            ',
            'deskripsi'=>'Pemeriksaan kolesterol total merupakan pemeriksaan darah yang mengukur konsentrasi kolesterol total yang dibawa dalam darah oleh lipoprotein. Konsentrasi kolesterol yang tinggi dalam darah akan menyebabkan kolesterol menempel di dinding bagian dalam pembuluh darah arteri dan membentuk ateroma atau plak, sehingga pembuluh darah menyempit dan akhirnya menimbulkan serangan jantung jika menghambat pembuluh darah menuju jantung atau strokte jika menghambat pembuluh darah arteri yang menuju otak'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Asam Urat',
            'slug'=> 'pemeriksaan_asam_urat',
            'image'=> 'asam_urat.png',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Jika terlalu banyak asam urat di dalam tubuh, maka dapat membentuk kristal di persendian. Kondisi ini akan menimbulkan peradangan dan rasa nyeri di persendian jika dibiarkan begitu saja tanpa pemeriksaan dan pengobatan
            Bahkan, asam urat yang sudah parah dapat memicu penyakit lain seperti gagal ginjal dan batu ginjal. Oleh karena itu, penting menerapkan pola makan sehat untuk menghindari naiknya uric acid di dalam tubuh',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Asam urat adalah zat sisa hasil metabolisme purin yang sebagian besar disaring oleh ginjal dan dikeluarkan melalui urine. Jika tubuh memproduksi asam urat dalam jumlah yang berlebihan atau ginjal tidak mampu mengeluarkannya dengan efektif, kadar asam urat dalam darah meningkat. Kondisi ini disebut hiperurisemia yang dapat menyebabkan terbentuknya kristal asam urat tajam di sendi, jaringan, dan organ lainnya, menyebabkan peradangan dan nyeri. Kadar Asam Urat yang tinggi dapat menyebabkan penyakit asam urat dan harus menurunkannya agar tidak berbahaya bagi tubuh.
            Kadar asam urat dalam darah yang aman sebagai berikut:
            <ul type="circle" class="text-gray-500" >
            <li>•	Pada laki-laki: 3,4 – 7,0 mg/dL </li>
            <li>•	Pada perempuan: 2,4 – 6,0 mg/dL</li>
            <li>•	Pada kelompok anak-anak: 2,0 – 5,5 mg/dL </li>
            </ul>
            '
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan hCG',
            'slug'=> 'pemeriksaan_hcg',
            'image'=> 'kehamilan.png',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'
            <ul type="circle" class="text-gray-500" >
            <li>•	Memastikan apakah seseorang sedang hamil atau tidak.</li>
            <li>•	Menjadi bagian dari tes kelainan kehamilan, seperti kehamilan ektopik dan kehamilan molar.</li>
            <li>•	Memeriksa dan memantau kondisi pasien yang dicurigai mengalami keguguran.</li>
            <li>•	Memantau kondisi pasien setelah mengalami keguguran.</li>
            <li>•	Mendiagnosis kanker rahim (choriocarcinoma).</li>
            </ul> 
            ',
            'persiapan'=>'
            <ul type="circle" class="text-gray-500" >
            <li>•	Sampel urine yang digunakan sebaiknya berasal dari air kencing pertama pada pagi hari saat jadwal pemeriksaan</li>
            <li>•	Selain urine pagi, urine sewaktu juga dapat digunakan.</li>
            </ul>',
            'deskripsi'=>'hCG atau kepanjangan dari human chorionic gonadotropin adalah jenis hormon yang diproduksi oleh plasenta. Adanya hCG pada urine dan darah menjadi salah satu tanda kehamilan'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Hepatitis B/HBsAg',
            'slug'=> 'pemeriksaan_hepatitis_b',
            'image'=> 'hepatitis_b.png',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Pemeriksaan HBsAg adalah untuk deteksi dini serta diagnosis hepatitis B yang menyebabkan peradangan pada organ hati. Selain itu, prosedur pemeriksaan ini juga dapat digunakan untuk memantau perkembangan infeksi dan efektivitas pengobatan yang dijalani oleh penderita hepatitis B. Pemeriksaan hepatitis B tidak hanya dilakukan pada orang yang memiliki gejala. Orang yang sehat pun juga perlu melakukan skrining pemeriksaan hepatitis B, terutama mereka yang berisiko tinggi terpapar virus hepatitis B meliputi:  
            <ul type="circle" class="text-gray-500" >
            <li>•	Wanita yang sedang hamil.</li>
            <li>•	Orang yang belum divaksinasi Hepatitis B. </li>
            <li>•	Orang yang tinggal dengan penderita hepatitis B. </li>
            <li>•	Orang yang memiliki banyak pasangan seksual. </li>
            <li>•	Pernah melakukan hubungan seksual dengan seseorang yang memiliki hepatitis B.</li>
            <li>•	Pria yang berhubungan seks dengan pria (LSL).</li>
            <li>•	Memiliki riwayat penyakit menular seksual (PMS). </li>
            <li>•	Memiliki HIV atau hepatitis C. </li>
            <li>•	Minum obat yang menekan sistem kekebalan. </li>
            <li>•	Penyalahgunaan NAPZA suntik (penasun). </li>
            </ul>

            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Hepatitis B surface antigen atau dikenal dengan tes HBsAg adalah prosedur pemeriksaan untuk mendeteksi antigen permukaan virus hepatitis B (HBV) di dalam darah. Pemeriksaan ini penting dilakukan untuk deteksi dini hepatitis B yang memengaruhi fungsi organ hati.
            Hepatitis B adalah penyakit yang dapat menyebabkan peradangan pada organ hati. Antigen permukaan virus hepatitis B biasanya akan muncul apabila seseorang terinfeksi virus hepatitis B dan berpotensi untuk menularkan virus tersebut ke orang lain. Selain itu, HBsAg juga muncul sebagai  penanda dari infeksi jangka panjang (kronis).'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Hepatitis C',
            'slug'=> 'pemeriksaan_hepatitis_c',
            'image'=> 'hepatitis_c.png',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Pemeriksaan untuk deteksi anti-HCV dapat digunakan baik untuk skrining maupun untuk diagnosis infeksi HCV. Pemeriksaan anti-HCV tidak menunjukkan infeksi akut, kronik atau sudah sembuh
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Hepatitis C adalah penyakit infeksi yang disebabkan oleh virus hepatitis C (HCV) yang menyerang hati. Infeksi virus HCV dapat menyebabkan peradangan pada hati dan jika tidak diobati dengan tepat, dapat menyebabkan kerusakan hati jangka panjang, sirosis, bahkan kanker hati.
            Penyebab utama hepatitis C adalah infeksi virus hepatitis C. Virus ini ditularkan melalui kontak darah-ke-darah, seperti penggunaan jarum suntik yang terkontaminasi, transfusi darah yang tidak steril, atau tindakan medis yang melibatkan alat-alat yang tidak steril. Jarang terjadi penularan melalui hubungan seksual atau ibu ke bayi saat proses persalinan. Selain itu, penggunaan narkoba suntik, tato atau tindikan yang tidak steril, dan berbagi jarum dengan orang yang terinfeksi juga dapat meningkatkan risiko terkena hepatitis C.'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Anti HBS',
            'slug'=> 'pemeriksaan_anti_hbs',
            'image'=> 'anti_hbs.jpg',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'
            <ul type="circle" class="text-gray-500" >
            <li>•	Tes Anti-HBS (Antibodi Hepatitis B) kuantitatif bermanfaat untuk untuk menilai kekebalan tubuh (antibodi) yang dihasilkan sebagai respons terhadap paparan antigen virus Hepatitis B. Apabila pemeriksaan HBsAg dilakukan untuk mendeteksi infeksi Hepatitis B, maka kadar anti-HBs menilai kemampuan sistem imun tubuh untuk melindungi diri.</li>
            <li>•	Kadar anti-HBs bisa digunakan sebagai parameter untuk menilai kebutuhan seseorang untuk melakukan vaksinasi. Apabila kadar antibodi hepatitis B rendah atau nihil, maka vaksinasi perlu dilakukan sesegera mungkin.</li>
            </ul>
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Tes anti HBs (Antibodi Hepatitis B) adalah pemeriksaan untuk mendeteksi antibodi terhadap antigen permukaan virus hepatitis B atau HBV (Anti-Hbs). Tes ini memberikan penentuan Anti-HBs. “Antibodi permukaan” terbentuk sebagai respons terhadap virus hepatitis B.'
        ]);
        Service::create([
            'jenis_tes'=> 'Malaria',
            'slug'=> 'malaria',
            'image'=> 'malaria.png',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Digunakan untuk mendiagnosis malaria, gangguan parasit pada darah, menilai penyakit demam yang belum diketahui penyebabnya
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Malaria adalah penyakit infeksi menular yang disebabkan oleh parasit Plasmodium dan ditularkan melalui gigitan nyamuk betina Anopheles yang terinfeksi. Penyakit ini dapat menyebabkan demam, menggigil, sakit kepala, nyeri otot, dan gejala lainnya. Jika tidak diobati dengan tepat, malaria dapat menyebabkan komplikasi serius seperti gagal ginjal, kerusakan otak, dan kematian.
            
            Ada beberapa jenis parasit malaria yang menginfeksi manusia, yaitu:
            <ul type="circle" class="text-gray-500" >
            <li>•	Plasmodium Falciparum atau Malaria Tropika  </li>
            <li>•	P. Vivax atau Malaria Tertiana  </li>
            <li>•	P. Ovale atau Malaria Ovale  </li>
            <li>•	P. Malariae atau Malaria Quartana  </li>
            <li>•	Selain itu, P. Knowlesi, sejenis malaria yang secara alami menginfeksi kera di Asia Tenggara, juga bisa menginfeksi manusia dan menyebabkan penyakit ini menular dari hewan ke manusia (malaria zoonosis).   </li>
            </ul>
            '
        ]);
        Service::create([
            'jenis_tes'=> 'Demam Berdarah Dangue',
            'slug'=> 'demam_berdarah_dangue',
            'image'=> 'dbd.jpg',
            'harga'=>50000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Pemeriksaan DBD (Demam Berdarah Dengue) memiliki manfaat penting untuk mendiagnosis infeksi virus dengue, memantau perkembangan penyakit, dan mencegah komplikasi serius. Tes ini membantu memastikan diagnosis yang tepat dan memungkinkan dokter memberikan pengobatan yang tepat.
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Demam berdarah dengue merupakan kondisi medis yang disebabkan oleh virus dengue yang ditularkan oleh gigitan nyamuk bernama Aedes aegypti, dapat menimbulkan rasa nyeri pada tulang dan sendi, demam tinggi, sakit kepala, mual, dan muntah. Kondisi ini perlu diwaspadai karena berisiko menimbulkan komplikasi serius, seperti perdarahan yang terjadi saat pasien sudah di tahap dengue shock syndrome hingga gagal ginjal akut. Sebagai upaya mencegah terjadinya komplikasi, penting untuk melakukan cek demam berdarah agar pasien dapat memperoleh diagnosis serta penanganan medis yang cepat dan tepat. </br>
            Pemeriksaan DBD (Demam Berdarah Dengue) melibatkan pemeriksaan fisik dan pemeriksaan laboratorium darah untuk menegakkan diagnosis. Pemeriksaan fisik meliputi pemeriksaan tanda-tanda klinis seperti demam tinggi dan tanda kebocoran plasma. Pemeriksaan laboratorium darah meliputi tes darah lengkap, tes NS1 antigen, dan tes antibodi Dengue IgG dan IgM. 
            Pemeriksaan laboratorium darah meliputi, yaitu:
            <ul type="circle" class="text-gray-500" >
            <li>•	Darah Lengkap </li>
            <li>•	NS1 Antigen, Pengujian NS1 mendeteksi keberadaan antigen NS1 Virus Dengue pada periode infeksi awal 1-3 hari, setelah itu virus mungkin tidak terdeteksi </li>
            <li>•	Tes Antibodi Dengue IgG dan Ig, dengue IgM umumnya direkomendasikan 5 hari setelah gejala DBD muncul. Antibodi IgG biasanya terdeteksi lebih lambat daripada IgM, sehingga menjadi penanda penyakit DBD kronis. Tes anti-dengue IgG/IgM ini cukup efektif untuk memastikan diagnosis penyakit DBD karena antibodi tersebut hanya terbentuk 7–10 hari setelah tubuh terinfeksi oleh virus dengue. Oleh karenanya, jika tes anti-dengue IgG/IgM menunjukkan hasil positif, hal tersebut menandakan bahwa pasien mengalami infeksi virus dengue akut dan memerlukan penanganan medis dengan tepat dan segera. </li>
            </ul>
            '
        ]);
    }
}
