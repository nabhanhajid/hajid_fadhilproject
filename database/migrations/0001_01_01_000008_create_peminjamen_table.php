Schema::create('peminjamen', function (Blueprint $table) {
    $table->id();
    $table->foreignId('barang_id')->constrained();
    $table->string('nama_peminjam');
    $table->enum('tipe_peminjam', ['guru', 'siswa']);
    $table->date('tanggal_pinjam');
    $table->date('tanggal_kembali')->nullable();
    $table->enum('status', ['dipinjam', 'dikembalikan'])->default('dipinjam');
    $table->timestamps();
});