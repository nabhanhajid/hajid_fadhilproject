Schema::table('users', function (Blueprint $table) {
    $table->string('avatar')->nullable()->after('email');
});