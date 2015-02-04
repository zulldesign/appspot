<?php
$translations = array(
	// label for database system selection (MySQL, SQLite, ...)
	'System' => 'Sistem',
	'Server' => 'Server',
	'Username' => 'Pengguna',
	'Password' => 'Sandi',
	'Permanent login' => 'Masuk permanen',
	'Login' => 'Masuk',
	'Logout' => 'Keluar',
	'Logged as: %s' => 'Masuk sebagai: %s',
	'Logout successful.' => 'Berhasil keluar.',
	'Invalid credentials.' => 'Akses invalid.',
	'Language' => 'Bahasa',
	'Invalid CSRF token. Send the form again.' => 'Token CSRF invalid. Kirim ulang formulir.',
	'No extension' => 'Ekstensi tidak tersedia',
	'None of the supported PHP extensions (%s) are available.' => 'Ekstensi PHP yang didukung (%s) tidak tersedia.',
	'Session support must be enabled.' => 'Dukungan sesi harus aktif.',
	'Session expired, please login again.' => 'Sesi habis, silakan masuk lagi.',
	'%s version: %s through PHP extension %s' => 'Versi %s: %s dengan ekstensi PHP %s',
	'Refresh' => 'Segarkan',

	// text direction - 'ltr' or 'rtl'
	'ltr' => 'ltr',

	'Privileges' => 'Privilese',
	'Create user' => 'Buat pengguna',
	'User has been dropped.' => 'Pengguna berhasil dihapus.',
	'User has been altered.' => 'Pengguna berhasil diubah.',
	'User has been created.' => 'Pengguna berhasil dibuat.',
	'Hashed' => 'Hashed*',
	'Column' => 'Kolom',
	'Routine' => 'Rutin',
	'Grant' => 'Beri',
	'Revoke' => 'Tarik',

	'Process list' => 'Daftar proses',
	'%d process(es) have been killed.' => '%d proses berhasil dihentikan.',
	'Kill' => 'Hentikan',

	'Variables' => 'Variabel',
	'Status' => 'Status',

	'SQL command' => 'Perintah SQL',
	'%d query(s) executed OK.' => '%d kueri berhasil dijalankan.',
	'Query executed OK, %d row(s) affected.' => 'Kueri berhasil, %d baris terpengaruh.',
	'No commands to execute.' => 'Tiada perintah untuk dijalankan.',
	'Error in query' => 'Kesalahan dalam kueri',
	'Execute' => 'Jalankan',
	'Stop on error' => 'Hentikan pada kesalahan',
	'Show only errors' => 'Hanya tampilkan kesalahan',
	// sprintf() format for time of the command
	'%.3f s' => '%.3f s',
	'History' => 'Riwayat',
	'Clear' => 'Bersihkan',
	'Edit all' => 'Edit semua',

	'File upload' => 'Unggah berkas',
	'From server' => 'Dari server',
	'Webserver file %s' => 'Berkas server web %s',
	'Run file' => 'Jalankan berkas',
	'File does not exist.' => 'Berkas tidak ditemukan.',
	'File uploads are disabled.' => 'Pengunggahan berkas dimatikan.',
	'Unable to upload a file.' => 'Tidak dapat mengunggah berkas.',
	'Maximum allowed file size is %sB.' => 'Besar berkas yang diizinkan adalah %s bita.',
	'Too big POST data. Reduce the data or increase the %s configuration directive.' => 'Data POST terlalu besar. Kurangi data atau perbesar pengarah konfigurasi %s.',

	'Export' => 'Ekspor',
	'Dump' => 'Ekspor',
	'Output' => 'Hasil',
	'open' => 'buka',
	'save' => 'simpan',
	'Format' => 'Format',
	'Data' => 'Data',

	'Database' => 'Basis data',
	'database' => 'basis data',
	'Use' => 'Gunakan',
	'Select database' => 'Pilih basis data',
	'Invalid database.' => 'Basis data invalid.',
	'Create new database' => 'Buat basis data baru',
	'Database has been dropped.' => 'Basis data berhasil dihapus.',
	'Databases have been dropped.' => 'Basis data berhasil dihapus.',
	'Database has been created.' => 'Basis data berhasil dibuat.',
	'Database has been renamed.' => 'Basis data berhasil diganti nama.',
	'Database has been altered.' => 'Basis data berhasil diubah.',
	'Alter database' => 'Ubah basis data',
	'Create database' => 'Buat basis data',
	'Database schema' => 'Skema basis data',

	// link to current database schema layout
	'Permanent link' => 'Tautan permanen',

	// thousands separator - must contain single byte
	',' => '.',
	'0123456789' => '0123456789',
	'Engine' => 'Mesin',
	'Collation' => 'Kolasi',
	'Data Length' => 'Panjang Data',
	'Index Length' => 'Panjang Indeks',
	'Data Free' => 'Data Bebas',
	'Rows' => 'Baris',
	'%d in total' => '%d total',
	'Analyze' => 'Analisis',
	'Optimize' => 'Optimalkan',
	'Check' => 'Periksa',
	'Repair' => 'Perbaiki',
	'Truncate' => 'Kosongkan',
	'Tables have been truncated.' => 'Tabel berhasil dikosongkan.',
	'Move to other database' => 'Pindahkan ke basis data lain',
	'Move' => 'Pindahkan',
	'Tables have been moved.' => 'Tabel berhasil dipindahkan.',
	'Copy' => 'Salin',
	'Tables have been copied.' => 'Tabel berhasil disalin.',

	'Routines' => 'Rutin',
	'Routine has been called, %d row(s) affected.' => array('Rutin telah dipanggil, %d baris terpengaruh.', 'Rutin telah dipanggil, %d baris terpengaruh'),
	'Call' => 'Panggilan',
	'Parameter name' => 'Nama paramater',
	'Create procedure' => 'Buat prosedur',
	'Create function' => 'Buat fungsi',
	'Routine has been dropped.' => 'Rutin berhasil dihapus.',
	'Routine has been altered.' => 'Rutin berhasil diubah.',
	'Routine has been created.' => 'Rutin berhasil dibuat.',
	'Alter function' => 'Ubah fungsi',
	'Alter procedure' => 'Ubah prosedur',
	'Return type' => 'Jenis balikan',

	'Events' => 'Peristiwa',
	'Event has been dropped.' => 'Peristiwa berhasil dihapus.',
	'Event has been altered.' => 'Peristiwa berhasil diubah.',
	'Event has been created.' => 'Peristiwa berhasil dibuat.',
	'Alter event' => 'Ubah peristiwa',
	'Create event' => 'Buat peristiwa',
	'At given time' => 'Pada waktu tertentu',
	'Every' => 'Setiap',
	'Schedule' => 'Jadwal',
	'Start' => 'Mulai',
	'End' => 'Selesai',
	'On completion preserve' => 'Pertahankan saat selesai',

	'Tables' => 'Tabel',
	'Tables and views' => 'Tabel dan tampilan',
	'Table' => 'Tabel',
	'No tables.' => 'Tiada tabel.',
	'Alter table' => 'Ubah tabel',
	'Create table' => 'Buat tabel',
	'Table has been dropped.' => 'Tabel berhasil dihapus.',
	'Tables have been dropped.' => 'Tabel berhasil dihapus.',
	'Tables have been optimized.' => 'Tabel berhasil dioptimalkan.',
	'Table has been altered.' => 'Tabel berhasil diubah.',
	'Table has been created.' => 'Tabel berhasil dibuat.',
	'Table name' => 'Nama tabel',
	'Show structure' => 'Lihat struktur',
	'engine' => 'mesin',
	'collation' => 'kolasi',
	'Column name' => 'Nama kolom',
	'Type' => 'Jenis',
	'Length' => 'Panjang',
	'Auto Increment' => 'Kenaikan Otomatis',
	'Options' => 'Opsi',
	'Comment' => 'Komentar',
	'Default values' => 'Nilai bawaan',
	'Drop' => 'Hapus',
	'Are you sure?' => 'Anda yakin',
	'Move up' => 'Naik',
	'Move down' => 'Turun',
	'Remove' => 'Hapus',
	'Maximum number of allowed fields exceeded. Please increase %s.' => 'Jumlah ruas maksimum yang diizinkan dilewati. Harap naikkan %s.',

	'Partition by' => 'Partisi menurut',
	'Partitions' => 'Partisi',
	'Partition name' => 'Nama partisi',
	'Values' => 'Nilai',

	'View' => 'Tampilan',
	'View has been dropped.' => 'Tampilan berhasil dihapus.',
	'View has been altered.' => 'Tampilan berhasil diubah.',
	'View has been created.' => 'Tampilan berhasil dibuat.',
	'Alter view' => 'Ubah tampilan',
	'Create view' => 'Buat tampilan',

	'Indexes' => 'Indeks',
	'Indexes have been altered.' => 'Indeks berhasil diubah.',
	'Alter indexes' => 'Ubah indeks',
	'Add next' => 'Tambah setelahnya',
	'Index Type' => 'Jenis Indeks',
	'Column (length)' => 'Kolom (panjang)',

	'Foreign keys' => 'Kunci asing',
	'Foreign key' => 'Kunci asing',
	'Foreign key has been dropped.' => 'Kunci asing berhasil dihapus.',
	'Foreign key has been altered.' => 'Kunci asing berhasil diubah.',
	'Foreign key has been created.' => 'Kunci asing berhasil dibuat.',
	'Target table' => 'Tabel sasaran',
	'Change' => 'Ubah',
	'Source' => 'Sumber',
	'Target' => 'Sasaran',
	'Add column' => 'Tambah kolom',
	'Alter' => 'Ubah',
	'Add foreign key' => 'Tambah kunci asing',
	'ON DELETE' => 'ON DELETE',
	'ON UPDATE' => 'ON UPDATE',
	'Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.' => 'Kolom sumber dan sasaran harus memiliki jenis data yang sama. Kolom sasaran harus memiliki indeks dan data rujukan harus ada.',

	'Triggers' => 'Picu',
	'Add trigger' => 'Tambah picu',
	'Trigger has been dropped.' => 'Picu berhasil dihapus.',
	'Trigger has been altered.' => 'Picu berhasil diubah.',
	'Trigger has been created.' => 'Picu berhasil dibuat.',
	'Alter trigger' => 'Ubah picu',
	'Create trigger' => 'Buat picu',
	'Time' => 'Waktu',
	'Event' => 'Peristiwa',
	'Name' => 'Nama',

	'select' => 'pilih',
	'Select' => 'Pilih',
	'Select data' => 'Pilih data',
	'Functions' => 'Fungsi',
	'Aggregation' => 'Agregasi',
	'Search' => 'Cari',
	'anywhere' => 'di mana pun',
	'Search data in tables' => 'Cari data dalam tabel',
	'Sort' => 'Urutan',
	'descending' => 'menurun',
	'Limit' => 'Limit',
	'Text length' => 'Panjang teks',
	'Action' => 'Tindakan',
	'Full table scan' => 'Pindai tabel lengkap',
	'Unable to select the table' => 'Gagal memilih tabel',
	'No rows.' => 'Tiada baris.',
	'%d row(s)' => '%d baris',
	'Page' => 'Halaman',
	'last' => 'terakhir',
	'whole result' => 'Seluruh hasil',
	'%d byte(s)' => '%d bita',

	'Import' => 'Impor',
	'%d row(s) have been imported.' => '%d baris berhasil diimpor.',

	// in-place editing in select
	'Use edit link to modify this value.' => 'Gunakan tautan edit untuk mengubah nilai ini.',

	// %s can contain auto-increment value
	'Item%s has been inserted.' => 'Entri%s berhasil disisipkan.',
	'Item has been deleted.' => 'Entri berhasil dihapus.',
	'Item has been updated.' => 'Entri berhasil diperbarui.',
	'%d item(s) have been affected.' => '%d entri terpengaruh.',
	'New item' => 'Entri baru',
	'original' => 'orisinal',
	// label for value '' in enum data type
	'empty' => 'kosong',
	'edit' => 'edit',
	'Edit' => 'Edit',
	'Insert' => 'Sisipkan',
	'Save' => 'Simpan',
	'Save and continue edit' => 'Simpan dan terus mengedit',
	'Save and insert next' => 'Simpan dan sisipkan yang lain',
	'Clone' => 'Gandakan',
	'Delete' => 'Hapus',

	'E-mail' => 'Surel',
	'From' => 'Dari',
	'Subject' => 'Subjek',
	'Attachments' => 'Lampiran',
	'Send' => 'Kirim',
	'%d e-mail(s) have been sent.' => array('%d surel berhasil dikirim.', '%d surel berhasil dikirim'),

	// data type descriptions
	'Numbers' => 'Angka',
	'Date and time' => 'Tanggal dan waktu',
	'Strings' => 'String',
	'Binary' => 'Biner',
	'Lists' => 'Daftar',
	'Network' => 'Jaringan',
	'Geometry' => 'Geometri',
	'Relations' => 'Relasi',

	'Editor' => 'Editor',
	// date format in Editor: $1 yyyy, $2 yy, $3 mm, $4 m, $5 dd, $6 d
	'$1-$3-$5' => '$1-$3-$5',
	// hint for date format - use language equivalents for day, month and year shortcuts
	'[yyyy]-mm-dd' => '[yyyy]-mm-dd',
	// hint for time format - use language equivalents for hour, minute and second shortcuts
	'HH:MM:SS' => 'HH:MM:SS',
	'now' => 'now',
	'yes' => 'yes',
	'no' => 'no',

	// general SQLite error in create, drop or rename database
	'File exists.' => 'Berkas sudah ada.',
	'Please use one of the extensions %s.' => 'Harap gunakan salah satu ekstensi %s.',

	// PostgreSQL and MS SQL schema support
	'Alter schema' => 'Ubah skema',
	'Create schema' => 'Buat skema',
	'Schema has been dropped.' => 'Skema berhasil dihapus.',
	'Schema has been created.' => 'Skema berhasil dibuat.',
	'Schema has been altered.' => 'Skema berhasil diubah.',
	'Schema' => 'Skema',
	'Invalid schema.' => 'Skema invalid.',

	// PostgreSQL sequences support
	'Sequences' => 'Deret',
	'Create sequence' => 'Buat deret',
	'Sequence has been dropped.' => 'Deret berhasil dihapus.',
	'Sequence has been created.' => 'Deret berhasil dibuat.',
	'Sequence has been altered.' => 'Deret berhasil diubah.',
	'Alter sequence' => 'Ubah deret',

	// PostgreSQL user types support
	'User types' => 'Jenis pengguna',
	'Create type' => 'Buat jenis',
	'Type has been dropped.' => 'Jenis berhasil dihapus.',
	'Type has been created.' => 'Jenis berhasil dibuat.',
	'Alter type' => 'Ubah jenis',
);
