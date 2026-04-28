public function up()
{
    Schema::create('aspirasis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->text('isi');
        $table->timestamps();
    });
}