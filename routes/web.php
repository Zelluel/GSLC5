<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zmcs', function () {
    $ArrCloth = ['Taxedo', 'Rampi', 'Jiket', 'Kameja pandek'];
    $PicPath = ['https://cdn.idntimes.com/content-images/post/20220527/benjamin-rascoe-szotel1y4qc-unsplash-fdff9d868f79310b8ff2ac795e71ed52.png','https://www.koalahero.com/wp-content/uploads/2019/06/image-2.-Rompi-Pria.jpg', 'https://s4.bukalapak.com/img/44803501842/s-330-330/data.jpeg.webp', 'https://www.koalahero.com/wp-content/uploads/2019/06/image-4.-Kemeja-Lengan-Pendek.jpg'];
    $Desc = ['Taxedo cocok untuk acara pernikahan sehingga pancaran mempelai pria akan elegan dan tangguh.','Rampi merupakan aksesoris yang melengkapi penampilan agar semakin menarik.','Jiket merupakan karakteristik yang tidak lepas dari pria untuk styling dan melindungi dari udara dingin.', 'Kameja pandek merupakan pakaian yang disukai bagi penyuka gaya santai namun ingin terlihat lebih serius.'];
    $Stock = ['0','10', '30', '50'];
    return view('zmcs')
    ->with('cloth', $ArrCloth)
    ->with('photo', $PicPath)
    ->with('desc', $Desc)
    ->with('stok', $Stock);
}); 