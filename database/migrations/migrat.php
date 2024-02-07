Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('notelp');
            $table->timestamps();
        });
        
        Schema::create('klien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('nama_klien');
            $table->string('email_klien')->unique();
            $table->string('notelp_klien');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

        });

        Schema::create('referensi_bahasa', function (Blueprint $table) {
            $table->id('id');
            $table->integer('klien_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('bahasa');
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        Schema::create('referensi_perusahaan', function (Blueprint $table) {
            $table->id('id');
            $table->integer('klien_id')->unsigned()->nullable();
            $table->string('email_perusahaan')->unique()->nullable();
            $table->string('akun_bank')->nullable();
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });

        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('nama_pekerjaan')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        Schema::create('tipe_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pekerjaan_id')->unsigned()->nullable();
            $table->string('jenis_pekerjaan')->nullable();
            $table->timestamps();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
        });

        Schema::create('proyek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('nama_proyek')->nullable();
            $table->string('jenis_proyek')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        Schema::create('penawaran_jasa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('nama_penawaran_jasa');
            $table->integer('harga_penawaran_jasa');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        Schema::create('permintaan_jasa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penawaran_jasa_id')->unsigned()->nullable();
            $table->integer('klien_id')->unsigned()->nullable();
            $table->string('nama_permintaan_jasa');
            $table->integer('harga_permintaan_jasa');
            $table->timestamps();
            $table->foreign('penawaran_jasa_id')->references('id')->on('penawaran_jasa')->onDelete('cascade');
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });

        Schema::create('tagihan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('klien_id');
            $table->integer('biaya_admin');
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });

        Schema::create('pembayaran_atas_pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klien_id')->unsigned()->nullable();
            $table->string('sudah_dibayar');
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });

        Schema::create('pesanan_pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('klien_id');
            $table->string('nama_pesanan');
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');

        });