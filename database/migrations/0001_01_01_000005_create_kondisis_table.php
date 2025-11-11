Schema::create('kondisis', function (Blueprint $table) {
    $table->id();
    $table->string('nama_kondisi');
    $table->timestamps();
});