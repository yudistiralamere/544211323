<?php
use	Illuminate\Support\Facades\Schema;
use	Illuminate\Database\Schema\Blueprint;
use	Illuminate\Database\Migrations\Migration;
class BuatTabelProduk1 extends Migration
{
public	function up()
{
//untuk	membuat	tabel,	kolom,	index	pada	database
Schema::create('produk',	function(Blueprint	$table)	{
$table->increments('id_produk');
$table->string('nama_produk');
$table->integer('harga_beli');
$table->integer('harga_jual');
$table->timestamps();
});
}
public	function	down()
{
Schema::drop('produk');
}
}