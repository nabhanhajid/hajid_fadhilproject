Schema::create('mutasis', function (Blueprint $table) {
    $table->id();
    $table->foreignId('barang_id')->constrained();
    $table->foreignId('lab_asal_id')->constrained('labs');
    $table->foreignId('lab_tujuan_id')->constrained('labs');
    $table->date('tanggal_mutasi');
    $table->text('keterangan')->nullable();
    $table->timestamps();
});