1. **Manajemen Proyek**
   - CRUD Project: Buat, daftar, edit, dan hapus proyek.
   - Field: name (string), description (text).

2. **Manajemen Tugas**
   - CRUD Task: Assign ke user, pilih status (To Do, In Progress, Done), set deadline.
   - Relasi: Task belongsTo Project & User.

3. **Laporan Progres**
   - Halaman Report menampilkan agregasi:
     - Jumlah tugas per status di tiap project.
     - Jumlah tugas per status di tiap user.

4. **Role-Based Access Control**
   - Admin: full akses CRUD & laporan.
   - Manager: lihat & export laporan.
   - Staff: lihat & update status task.