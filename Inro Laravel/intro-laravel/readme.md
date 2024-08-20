Masih ingat dengan challenge hari pertama materi HTML?hari ini kita akan pakai halaman tersebut di project laravel.kamu diminta untuk membuat sebuah project laravel.di dalam project tersebut terdapat 3 route yaitu:Home,Register,dan Welcome.

langkah-langkahnya adalah:
buatlah route terlebih dahulu untuk setiap halaman yang ingin dibuat.
buatlah halaman blade untuk masing masing route yang ingin dibuat.simpanlah di folder resources/views
buat dua controller:HomeController dan AuthController.
Route Home diatur oleh HomeController,sedangkan route Register dan Welcome diatur oleh AuthController
alur program:dimulai dari halaman home(route:&39;/') terdapat link menuju route register(route:&39;/register').dihalaman register terdapat form untuk mengisi nama depan,nama belakang,dan isian lainnya.ketika disubmit di  halaman register,form diarahkan kehalaman welcome(route:&39;/welcome')dengan membawa data nama depan dan nama belakang yang akan ditampilkan di halaman welcome tersebut.
