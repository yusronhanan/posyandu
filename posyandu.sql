-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 04:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `written_by` varchar(200) NOT NULL,
  `img` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `title`, `content`, `written_by`, `img`, `date`) VALUES
(1, 'Pengertian Campak', '<p>\r\nCampak merupakan penyakit yang disebabkan oleh virus dan sangat mudah menular (ditularkan melalui batuk dan bersin). Gejala penyakit campak adalah demam tinggi, bercak kemerahan pada kulit (rash) disertai dengan batuk dan/atau pilek dan/atau konjungtivitis yang dapat berujung pada komplikasi berupa pneumonia, diare, meningitis dan bahkan dapat menyebabkan kematian.\r\nKetika seseorang terkena campak, 90 persen orang yang berinteraksi erat dengan penderita dapat tertular jika mereka belum memiliki kekebalan terhadap campak. Kekebalan terbentuk jika telah diimunisasi atau pernah terinfeksi virus campak sebelumnya.\r\nKomplikasi dari campak yang dapat menyebabkan kematian adalah Pneumonia (radang paru) dan ensefalitis (radang otak). Sekitar 1 dari 20 penderita campak akan mengalami komplikasi radang paru dan 1 dari 1.000 penderita akan mengalami komplikasi radang otak. Selain itu, komplikasi lain adalah infeksi telinga yang berujung tuli (1 dari 10 penderita), diare (1 dari 10 penderita) yang menyebabkan penderita butuh perawatan di RS\r\n</p>', 'Jawapos', '1.jpg', '2020-03-23'),
(2, 'Mengenal Penyakit Campak dan Rubella', '<p>\r\nRubella adalah penyakit akut dan ringan yang sering menginfeksi anak dan dewasa muda yang rentan dengan gejala yang tidak spesifik (tidak jelas) dan juga mudah menular. Hal yang menjadi perhatian bidang kesehatan adalah efek teratogenik apabila virus Rubella menginfeksi anak yang berada dekat dengan wanita hamil, dan menularkan virus tersebut terutama pada masa awal kehamilan (pembentukan janin).\r\n\r\nInfeksi Rubella pada ibu hamil dapat menyebabkan keguguran atau kecacatan permanen pada bayi yang dilahirkan atau dikenal dengan Congenital Rubella Syndrome (CRS) yang bisa berupa ketulian, gangguan penglihatan bahkan kebutaan, hingga kelainan jantung, bahkan otaknya bisa mengecil.\r\n\r\nData dari 12 rumah sakit yang menjadi sentinel pemantauan kasus CRS selama lima tahun terakhir sampai Juli 2018 telah menemukan 1.660 kasus suspek CRS. Penyakit campak dan Rubella bisa menyerang siapa saja baik lelaki maupun perempuan. Hingga saat ini, belum ada satupun pengobatan yang ditemukan yang dapat mematikan virus Rubella yang masuk ke dalam tubuh seseorang. Imunisasi merupakan satu-satunya upaya yang dapat kita lakukan yang paling efektif sebagai langkah pencegahan\r\n\r\n</p>', 'Jawapos', '2.jpg', '2020-03-22'),
(3, 'Penjelasan Vaksin', 'Vaksin adalah produk yang diberikan melalui suntikan, oral, atau pun semprot untuk menghasilkan kekebalan terhadap penyakit tertentu. Tetapi, banyak orang belum memahami apa yang sebenarnya menjadi kandungan di dalam vaksin tersebut.\r\nPada saat baru lahir, bayi memiliki kekebalan terhadap kuman tertentu melalui antibodi atau zat kekebalan tubuh yang didapat dari ibu saat bayi masih berada di dalam kandungan. Beberapa waktu setelah lahir, zat kekebalan tubuh ini akan hilang secara alami karena bayi sudah tidak berada di dalam kandungan ibu. Oleh karena itu, untuk mendapatkan perlindungan terhadap bakteri atau virus tertentu yang dapat menyebabkan penyakit, perlu diberikan vaksin.\r\nVaksin adalah antigen yang mengandung bakteri, racun, atau pun virus penyebab penyakit yang “hidup” atau pun yang sudah dimatikan.  Vaksin hidup atau mati ini bekerja untuk merangsang sistem kekebalan tubuh manusia, sehingga tubuh mengira bahwa ia sedang diserang kuman aktif. Proses ini kemudian direspons tubuh dengan memproduksi antibodi yang diam dalam tubuh dan akan melindungi tubuh di masa yang akan datang. Proses pembentukan antibodi inilah yang disebut imunisasi.\r\n', 'Alodokter.com', '3.jpg', '2020-03-17'),
(4, 'Memahami Vaksin Berdasarkan Kandungannya', '<p>\r\nBerikut ini adalah beberapa jenis vaksin berdasarkan kandungan yang terdapat di dalamnya.\r\nVaksin Mati\r\nVaksin mati atau disebut juga vaksin tidak aktif mengandung virus atau bakteri yang sudah dihancurkan dengan suhu panas, radiasi, atau bahan kimia, sehingga mati atau tidak aktif. Proses ini membuat virus tetap utuh, tetapi tidak dapat berkembangbiak dan menyebabkan penyakit dalam tubuh. Melainkan membuat tubuh menciptakan reaksi kekebalan. Meski demikian, vaksin mati sering membutuhkan beberapa dosis untuk meningkatkan sistem kekebalan tubuh, karena vaksin mati ini umumnya memproduksi respons imun yang lebih rendah daripada vaksin hidup. Vaksin polio, DPT, dan vaksin flu adalah beberapa contoh vaksin mati. Vaksin mati ini memang berpotensi menyebabkan ruam atau demam setelah disuntikkan, tapi efek samping ini merupakan situasi normal dan tidak berbahaya. Karena efek kekebalan yang dihasilkan vaksin ini lebih lemah, maka vaksin jenis ini seringkali membutuhkan dosis pemberian ulang atau booster.\r\n<br>\r\nVaksin Hidup\r\nVaksin hidup adalah vaksin yang dilemahkan di laboratorium, tapi bukan dihancurkan. Virus atau bakteri yang disuntikkan tidak akan menyebabkan sakit, tapi dapat berkembangbiak untuk memunculkan respons sistem imun. Vaksin hidup ini mendatangkan kekebalan yang lebih kuat dan bisa memberikan perlindungan seumur hidup meskipun hanya diberikan satu atau dua kali. Namun, vaksin ini tidak dapat diberikan pada mereka yang mengalami gangguan sistem kekebalan tubuh, seperti ODHA atau yang sedang menjalani kemoterapi, karena kekebalan tubuh yang lemah justru dapat berisiko memicu penyakit yang ingin dicegah. Contoh dari vaksin hidup adalah vaksin MMR, BCG, cacar air, dan vaksin flu semprot. Sebelum diberikan, vaksin-vaksin ini perlu disimpan di dalam lemari pendingin khusus agar tetap hidup. Hal ini dapat menjadi kendala jika vaksin akan dikirim atau disimpan di daerah dengan infrastruktur yang masih bermasalah seperti seringnya mati lampu. Suhu yang tidak sesuai untuk penyimpanan vaksin akan memengaruhi kualitas vaksin sehingga imunitas yang terbentuk tidak optimal.\r\n<br>\r\nVaksin Toksoid\r\nVaksin ini berguna untuk menghasilkan kekebalan tubuh guna menghalau dampak buruk dari racun atau toksin yang dihasilkan oleh bakteri tertentu. Para ahli menemukan bahwa racun yang dihasilkan oleh bakteri tertentu ketika menginfeksi seseorang dapat dinetralisir dengan formalin atau zat kimia lainnya. Dengan menghasilkan zat mirip racun yang telah diolah secara khusus tersebut, maka vaksin jenis ini dapat diberikan untuk merangsang tubuh dalam membentuk sistem kekebalan guna melawan efek buruk racun yang dihasilkan oleh kuman. Contoh vaksin jenis toksoid ini diantaranya tetanus toxoid  dan difteri.\r\n<br>\r\nVaksin Biosintetik\r\nJenis vaksin ini memiliki kandungan antigen yang diproduksi secara khusus hingga menyerupai struktur protein dari bagian tertentu pada virus atau bakteri untuk menghasilkan kekebalan tubuh. Pada bayi, ketika vaksin jenis ini diberikan saat sistem kekebalan tubuh masih berkembang, vaksin ini dapat membantu agar sistem kekebalan tubuhnya mengenali bakteri atau virus berbahaya yang akan masuk ke dalam tubuhnya di kemudian hari. Contoh vaksin jenis ini adalah vaksin Hib.\r\nAgar dapat efektif, vaksin perlu mengandung bahan-bahan lain yang aman, tahan lama, sekaligus mendatangkan manfaat. Bahan tersebut antara lain adalah thiomersal (merkuri) yang merupakan bahan pengawet vaksin, serum albumin, formalin, gelatin, dan antibiotik.\r\n<br>\r\nKandungan utama vaksin ini terdiri dari bahan pelancar untuk membuat vaksin bekerja lebih efektif, penstabil untuk menjaga agar kandungan vaksin tidak berubah saat terpapar faktor lingkungan seperti suhu dan cahaya, serta pengawet agar masa simpannya tahan lama. Tidak semua bahan kandungan yang tertulis sebagai bahan vaksin benar-benar terkandung di dalamnya. Sebagian besar bahan hanya digunakan dalam proses produksi, sehingga sudah dihilangkan di hasil akhir, misalnya gelatin.\r\nBanyak orang meragukan manfaat vaksin karena kekhawatiran akan dampak buruk yang bisa terjadi jika seseorang diberikan vaksin, seperti pada beberapa waktu lalu di mana sempat muncul kekhawatiran bahwa vaksinasi dapat menimbulkan efek samping yang tidak diinginkan seperti autisme. Dari berbagai penelitian didapatkan fakta bahwa ternyata vaksin, khususnya vaksin MMR, tidak berkaitan dengan autisme. Untuk mencegah penyakit campak dan rubella, kini pemerintah sedang mendukung program pemberian vaksin MR menggantikan vaksin MMR sebelumnya. Tetapi apabila sudah mendapatkan vaksin MMR, Anda tidak perlu khawatir, karena kedua vaksin tersebut memberi perlindungan untuk penyakit yang sama.\r\nSetelah melakukan berbagai penelitian, para ahli dan pakar kesehatan dari berbagai institut kesehatan menyepakati bahwa pemberian vaksin aman dan bermanfaat. Vaksinasi dapat memberikan perlindungan terhadap penyakit, sehingga komplikasi fatal dan dampak buruk akibat penyakit dapat tercegah. Vaksin memang memiliki beberapa efek samping, seperti bengkak dan kemerahan pada kulit di daerah suntikan, demam, dan bayi atau anak bisa menjadi rewel setelah diberi vaksin. Namun, berbagai efek samping vaksin ini akan membaik dalam beberapa hari.\r\n<br>\r\nPastikan Anda dan keluarga mendapatkan vaksin, terutama vaksin wajib yang direkomendasikan oleh pemerintah, agar terhindar dari penyakit-penyakit berbahaya. Karena vaksin dan imunisasi sangat efektif dalam mencegah banyak penyakit menular dan juga penyakit kronis yang disebabkan oleh agen penyebar infeksi.\r\n\r\n</p>', 'dr. Kevin Adrian in Alodokter', '4.jpg', '2020-03-16'),
(5, 'Mengenal Imunisasi Polio Lebih Jauh', 'Polio merupakan penyakit menular yang disebabkan oleh virus yang ada di dalam saluran pencernaan dan tenggorokan. Mencegah polio dapat dilakukan dengan imunisasi, terutama pada anak usia bawah lima tahun (balita), melalui  imunisasi polio tetes maupun imunisasi polio suntik.  \r\nPada kondisi tertentu, seseorang yang terinfeksi polio dapat mengalami kelumpuhan permanen, bahkan sampai menyebabkan kematian. Polio bisa muncul tanpa gejala apapun. Penyakit ini juga bisa menular melalui kontak dengan cairan yang keluar dari hidung, mulut, dan tinja seseorang yang sudah terinfeksi polio.\r\nImunisasi polio merupakan vaksin yang digunakan untuk melindungi tubuh dari gangguan poliomyelitis atau infeksi polio. Vaksin polio ini sangat penting untuk upaya mencegah penularan. Sebab jika dibiarkan tanpa penanganan, polio dapat membahayakan dan mengancam nyawa penderitanya.\r\nAda dua jenis imunisasi polio yang wajib diberikan kepada anak. Pertama, imunisasi polio oral atau oral polio vaccine (OPV) yang merupakan poliovirus yang sudah dilemahkan. Kedua, imunisasi polio suntik atau inactivated polio vaccine (IPV) yang menggunakan poliovirus yang sudah dinonaktifkan, kemudian diberikan melalui suntikan.\r\n\r\nVaksin polio diberikan empat kali, yakni saat bayi baru lahir, kemudian dilanjutkan pada bulan ke 2, 3, dan 4. Dosis penguat (booster) diberikan saat mencapai usia 18 bulan. Bayi baru lahir diberikan OPV, kemudian untuk vaksinasi polio berikutnya dapat diberikan IPV maupun OPV. Hanya saja, setiap anak setidaknya harus mendapat satu dosis IPV.\r\n', 'dr. Allert Benedicto Ieuan Noya in Alodokter', '5.jpg', '2020-03-17'),
(6, 'Kenali Efek Samping Setelah Imunisasi Polio', 'Ada beberapa efek samping yang mungkin dapat dirasakan anak setelah mendapatkan imunisasi polio, baik IPV maupun OPV. Setelah IPV, dapat timbul kemerahan pada bagian yang disuntik. Anak juga dapat mengalami demam ringan. Demam ini dapat diatasi dengan memberikan paracetamol dengan dosis rendah, sesuai anjuran dokter.\r\n\r\nMeski jarang terjadi, OPV yang diberikan melalui tetes mulut, dapat menyebabkan diare ringan tanpa demam. Agar aman dan tidak menyebabkan efek samping yang membahayakan, sebaiknya berkonsultasi dengan dokter sebelum imunisasi dilakukan.\r\n\r\nHal yang Harus Perhatikan Sebelum Imunisasi Polio\r\nSeperti yang sudah dijelaskan di atas, imunisasi polio merupakan salah satu imunisasi yang wajib dilakukan jika Anda tidak ingin anak terkena polio. Sebelum melakukan imunisasi, sebaiknya Anda memperhatikan beberapa hal di bawah ini:\r\n\r\nPerhatikan reaksi alergi pada anak\r\nJika anak Anda mengalami reaksi alergi yang parah terhadap imunisasi polio suntik, maka dianjurkan untuk tidak melakukan imunisasi polio suntik lagi. Selain itu, anak yang alergi terhadap kandungan polymyxin B, streptomycin, atau neomycin, juga disarankan tidak menerima imunisasi polio.\r\nTunda imunisasi ketika anak sedang sakit\r\nBagi anak yang sedang sakit yang cukup parah atau sedang, Anda perlu menunda pemberian imunisasi hingga anak benar-benar sembuh. Namun jika anak Anda hanya sakit ringan, seperti seperti batuk dan pilek tanpa adanya demam, anak tetap boleh menerima vaksinasi.\r\nImunisasi IPV atau OPV sebenarnya aman untuk dilakukan. Meski demikian, sebaiknya konsultasi dokter untuk mengetahui lebih lanjut risiko efek samping serta penanganan yang tepat. Jangan lewatkan imunisasi polio dan perhatikan kapan jadwal imunisasi anak Anda, agar dapat terhindar dari penyakit ini.\r\n', 'dr. Allert Benedicto Ieuan Noya in Alodokter', '6.jpg', '2020-03-17'),
(7, 'Imunisasi DPT: Manfaat dan Efek Sampingnya', 'DPT adalah singkatan dari difteri, pertusis, dan tetanus. Imunisasi DPT adalah salah satu vaksinasi yang wajib diberikan kepada balita.\r\nPenyakit difteri, pertusis, dan tetanus adalah tiga penyakit berbeda yang masing-masing memiliki risiko tinggi dan bahkan bisa menyebabkan kematian. Ketiga penyakit ini adalah penyakit serius yang disebabkan oleh bakteri. Oleh karena itu, pemberian imunisasi DPT sebaiknya tidak dilewatkan.\r\nPenyakit yang Dapat Dicegah\r\nSebelum memberikan imunisasi ini kepada anak Anda, sebaiknya cari tahu lebih dulu informasi seputar pemberian imunisasi dan efek sampingnya.\r\nDifteri merupakan penyakit infeksi bakteri yang menyerang selaput lendir pada hidung serta tenggorokan. Penyakit ini membentuk lapisan tebal berwarna abu-abu pada tenggorokan, yang dapat membuat anak sulit makan dan bernapas. Bila infeksi dibiarkan dan tidak diobati, racun yang dihasilkan oleh bakteri bisa menyebabkan kerusakan saraf, ginjal, dan jantung.\r\nDifteri adalah penyakit yang mewabah pada tahun 2017. Menurut data Kementrian Kesehatan Republik Indonesia, selama tahun 2017 ada 954 kasus difteri yang terlapor dari seluruh provinsi, dengan angka kematian sebanyak 44 kasus di seluruh Indonesia.\r\nSedangkan pertusis yang lebih dikenal dengan sebutan batuk rejan adalah penyakit infeksi bakteri yang menyerang sistem pernapasan dan menyebabkan batuk parah. Jika anak di bawah satu tahun terkena penyakit ini, kemungkinan dapat mengalami pneumonia, kerusakan otak, kejang, bahkan kematian.\r\nSementara tetanus, merupakan penyakit yang dapat menyebabkan  kekakuan otot parah, kelumpuhan, dan kejang otot. Penyakit ini juga disebabkan oleh bakteri. Berbeda dengan difteri dan pertusis yang menular, tetanus tidak ditularkan dari orang ke orang, tetapi dari luka yang kotor dan terpapar tanah.\r\nPemberian Imunisasi DPT\r\nImunisasi DPT pada anak-anak diberikan sebanyak lima kali, sejak anak berusia 2 bulan hingga 6 tahun. Tiga pemberian pertama pada usia 2 bulan, 3 bulan, dan 4 bulan. Pemberian yang ke-4 adalah pada usia 18 bulan, dan pemberian yang terakhir pada usia 5 tahun. Dosis yang diberikan yakni satu kali suntikan setiap jadwal imunisasi. Setelahnya, dianjurkan untuk melakukan booster Tdap (imunisasi ulang Tetanus Difteri dan Pertusis) tiap 10 tahun.\r\n\r\nPerhatikan kondisi anak sebelum memberikan imunisasi. Jika anak Anda mengalami sakit parah pada saat tiba jadwal imunisasi, maka sebaiknya tunggu hingga keadaan anak membaik baru dilakukan imunisasi.\r\nJangan berikan imunisasi lanjutan jika anak Anda mengalami:\r\nGangguan pada sistem saraf atau otak, dalam waktu 7 hari setelah mendapatkan suntikan imunisasi.\r\nReaksi alergi berat yang dapat mengancam nyawa, setelah anak mendapatkan imunisasi.\r\nSegera periksakan ke dokter bila setelah imunisasi, anak Anda mengalami:\r\nDemam di atas 40 derajat Celcius.\r\nAnak tidak berhenti menangis setidaknya selama 3 jam.\r\nAnak mengalami kejang atau pingsan.\r\n', 'dr. Kevin Adrian in Alodokter', '7.jpg', '2020-03-21'),
(8, 'Efek Samping DPT', 'Efek samping dari imunisasi DPT yang dapat muncul, antara lain:\r\n\r\nDemam ringan\r\nBengkak pada bagian suntikan\r\nKulit pada bagian suntikan menjadi merah dan sakit\r\nAnak terlihat lelah\r\nAnak menjadi rewel\r\nEfek samping tersebut biasanya akan terjadi dalam satu hingga tiga hari setelah pemberian vaksin. Anda bisa memberikan obat paracetamol untuk meredakan demam dan nyeri anak Anda. Hindari obat yang mengandung aspirin, karena dapat menyebabkan gangguan kesehatan yang bisa mengancam nyawa anak, yaitu kerusakan hati dan otak. Walau sangat jarang terjadi, pemberian vaksinasi DPT dapat menimbulkan gangguan pada otak.\r\n\r\nDengan memberikan imunisasi yang lengkap pada anak maka Anda telah memberikan perlindungan kepada anak terhadap beberapa penyakit berbahaya. Ingat baik-baik kapan jadwal imunisasi anak Anda dan konsultasikan kepada dokter jika anak Anda menunjukkan gejala yang mengkhawatirkan setelah pemberian imunisasi.\r\n', 'dr. Kevin Adrian in Alodokter', '8.jpg', '2020-03-21'),
(9, 'Pentingnya Vaksin PCV Mencegah Meningitis dan Penyakit Berbahaya Lain', 'Sesuai namanya, vaksin PCV atau vaksin pneumokokus melindungi tubuh dari infeksi bakteri pneumokokus. Infeksi yang disebabkan bakteri Streptococcus pneumoniae ini dapat mengakibatkan meningitis, pneumonia, dan septikemia (infeksi berat). Kerusakan permanen pada otak, bahkan kematian dapat terjadi pada kasus-kasus tertentu yang sangat parah.\r\nBakteri Streptococcus pneumoniae tinggal pada dinding hidung dan bagian belakang tenggorokan, yang dalam jumlah banyak dapat menyebabkan infeksi saluran telinga tengah, saluran pernapasan, meningitis, serta infeksi rongga sinus. Tiga puluh persen bakteri tersebut resisten terhadap antibiotik dan dapat tersebar melalui kontak fisik, bersin, dan batuk. Saat ini para peneliti telah mengidentifikasi lebih dari 90 jenis bakteri pneumokokus, dan 8 hingga 10 diantaranya adalah bakteri pneumokokus yang dapat menyebabkan penyakit pada manusia.\r\nWalaupun infeksi pneumokokus dapat terjadi pada siapapun, tetapi bayi, lansia berusia 65 tahun atau lebih, dan penderita gangguan kesehatan kronis lebih berisiko mengalaminya. Penyakit berbahaya ini umumnya menyerang balita yang dapat menyebabkan infeksi darah, meningitis, dan infeksi telinga.\r\nInfeksi bakteri pneumokokus ini tidak boleh dianggap enteng. Salah satu penyakit berat yang dapat terjadi karena infeksi bakteri ini adalah meningitis , yang memiliki tingkat kematian dan kecacatan yang cukup tinggi. Gejala meningitis bisa berupa nyeri kepala berat, demam tinggi mendadak, mual muntah, terdapat kekakuan leher, dan penurunan kesadaran. Pada bayi atau anak, juga dapat disertai dengan sulit atau tidak mau minum, lemas, hingga kejang. Jika Anda atau Anak mengalami gejala tersebut, Anda harus segera berobat ke dokter untuk mendapatkan pengobatan yang tepat.\r\nKasus infeksi berat ini diperkirakan lebih tinggi di negara-negara berkembang, termasuk Indonesia. Cakupan pemberian vaksin PCV di seluruh dunia masih terbilang rendah yaitu 42%. Oleh karena itu, untuk mencegah kematian dan kecacatan akibat infeksi pneumokokus, Departemen Kesehatan Indonesia dan Badan Kesehatan Dunia (WHO) menganjurkan pemberian vaksin PCV.\r\n\r\n', 'dr. Kevin Adrian in Alodokter', '9.jpg', '2020-03-23'),
(10, 'Jenis Vaksin HPV dan Efek Sampingnya', 'Terdapat dua jenis vaksin yang dapat memberi perlindungan terhadap penyakit akibat infeksi pnemokokus yaitu: Pneumococcal Conjugate Vaccine (PCV) dan Pneumococcal Polysaccharide Vaccine (PPV). Vaksin PCV yang dapat melindungi anak dari 13 jenis bakteri pneumokokus ini direkomendasikan untuk:\r\n\r\nBayi kurang dari 2 tahun perlu mendapat 4 dosis. Empat dosis yang masing-masing disarankan diberikan pada: bayi 2 bulan, 4 bulan, 6 bulan, serta booster antara 12–15 bulan.\r\nJika belum mendapat vaksin tepat waktu, mereka tetap harus mendapatkannya selama kurun usia tersebut. Konsultasikan ke dokter lebih dulu jika Anda terlambat atau melewatkan satu dosis vaksin PCV, terutama pada anak.\r\nAnak sehat di usia 2-4 tahun yang belum mendapat vaksin PCV lengkap perlu mendapat satu dosis vaksin.\r\nSelain itu, terdapat juga vaksin pneumokokus untuk dewasa yang disebut vaksin PPV yang melindungi dari 23 jenis bakteri pneumokokus. Baik vaksin PCV dan PPV adalah jenis vaksin mati dan tidak mengandung bakteri patogen hidup.\r\n\r\nLansia berusia lebih dari 65 tahun perlu satu vaksin PPV yang akan melindunginya seumur hidup. Sementara, penderita gangguan kesehatan kronis perlu mendapat vaksin PPV lima tahunan atau sekali saja, tergantung pada jenis gangguan yang dimiliki. Orang dewasa berusia 19 hingga 64 tahun yang perokok juga disarankan mendapatkan vaksin PPV. Orang dewasa yang akan menerima vaksin pneumokokus dianjurkan tidak sedang hamil dan menyusui. Anda dapat berkonsultasi dengan dokter sebelum memutuskan untuk mendapatkan vaksin.\r\n\r\nSeperti vaksin lain, vaksin PCV juga dapat menimbulkan efek samping sebagai berikut:\r\n\r\nMengalami ketidaknyamanan dan kemerahan pada bagian kulit yang disuntik.\r\nNyeri berat di daerah suntikan pasca pemberian vaksin, namun kasus ini sangat jarang.\r\nSebagian anak mengaku merasa mengantuk setelah disuntik.\r\nSekitar 30% anak mengalami bengkak pada bagian yang disuntik.\r\nSatu dari tiga anak mengalami demam ringan, dan 5% anak mengalami demam tinggi.\r\nReaksi alergi parah dapat terjadi, tetapi hal ini sangat jarang terjadi.\r\nHal yang perlu diingat lagi adalah anak-anak yang mengalami reaksi alergi parah terhadap vaksin PCV sebelumnya disarankan tidak  mendapatkan vaksin ini kembali. Gejala alergi parah tersebut yaitu sesak nafas, suara serak, mengi, pucat, pusing, ruam pada kulit, nadi cepat, dan penurunan kesadaran. Meskipun sangat jarang terjadi, kondisi tersebut adalah kondisi kegawatan pasca imunisasi. Jika terdapat gejala-gejala di atas pasca pemberian vaksin, Anda harus segera membawa si Kecil ke UGD terdekat untuk mendapat penanganan yang tepat.\r\n\r\nSelain itu, mereka yang mengalami demam atau sakit parah, seperti pneumonia, perlu menunda penerimaan vaksin hingga kesehatannya pulih. Di samping itu, jika anak Anda atau bahkan Anda sendiri sedang sakit parah, pemberian vaksin PCV dianjurkan ditunda hingga pulih\r\n', 'dr. Kevin Adrian in Alodokter', '10.jpg', '2020-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `name_schedule` varchar(200) NOT NULL,
  `age_inMonth` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `name_schedule`, `age_inMonth`, `date`) VALUES
(1, 'Hepatitis B', 1, '2020-03-27'),
(2, 'Polio-0', 1, '2020-03-30'),
(3, 'DPT-HB-Hib-1', 2, '2020-03-27'),
(4, 'DPT-HB-Hib-2', 3, '0000-00-00'),
(5, 'BCG', 2, '0000-00-00'),
(6, 'Polio-1', 3, '2020-03-28'),
(7, 'Polio-1', 2, '2020-03-28'),
(8, 'PCV', 2, '2020-03-30'),
(9, 'Rotavirus', 2, '2020-03-30'),
(10, 'Polio-3', 4, '2020-03-31'),
(11, 'PCV', 4, '2020-03-31'),
(12, 'PCV', 6, '2020-03-30'),
(13, 'Rotavirus', 6, '2020-04-02'),
(14, 'DPT-HB-Hib-3', 4, '2020-03-31'),
(15, 'Rotavirus', 4, '2020-04-02'),
(16, 'Campak', 9, '2020-03-31'),
(17, 'Japanese Encephalitis', 12, '2020-04-02'),
(18, 'PCV', 12, '2020-04-01'),
(19, 'Hib', 15, '2020-04-01'),
(20, 'MMR', 15, '2020-03-27'),
(21, 'Japanese Encephalitis', 24, '2020-04-01'),
(22, 'Polio', 18, '2020-03-29'),
(23, 'DPT-Hib', 18, '2020-03-30'),
(24, 'Campak', 18, '2020-03-31'),
(25, 'DPT', 60, '2020-03-31'),
(26, 'MMR', 60, '0000-00-00'),
(27, 'Tifoid', 60, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
