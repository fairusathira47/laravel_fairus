public function up()
{
    Schema::create('anggotas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim');
        $table->string('email');
        $table->string('prodi');
        $table->text('alasan');
        $table->timestamps();
    });
}