Schema::create('barangs', function (Blueprint $table) {
    $table->id();
    $table->string('kode_barang')->unique();
    $table->string('nama_barang');
    $table->foreignId('kategori_id')->constrained();
    $table->foreignId('kondisi_id')->constrained();
    $table->foreignId('lab_id')->constrained('labs');
    $table->date('tanggal_pembelian');
    $table->decimal('harga', 12, 2);
    $table->integer('stok')->default(0);
    $table->string('foto')->nullable();
    $table->timestamps();
});