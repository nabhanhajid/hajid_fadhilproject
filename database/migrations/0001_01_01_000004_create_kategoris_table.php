Schema::create('kategoris', function (Blueprint $table) {
    $table->id();
    $table->string('nama_kategori');
    $table->timestamps();
});