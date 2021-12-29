CREATE TABLE `siswa`(
    `id` INT NOT NULL primary key AUTO_INCREMENT,
    `nama` VARCHAR(255) NOT NULL,
    `id_kelas` INT NOT NULL
);

CREATE TABLE `kelas`(
    `id` INT NOT NULL primary key AUTO_INCREMENT,
    `nama_kelas` VARCHAR(255) NOT NULL
);

CREATE TABLE `tabungan`(
    `id` INT NOT NULL primary key AUTO_INCREMENT,
    `id_siswa` INT NOT NULL,
    `balance` INT NOT NULL
);

CREATE TABLE `transaksi`(
    `id` INT NOT NULL primary key AUTO_INCREMENT,
    `id_tabungan` INT NOT NULL,
    `id_admin` INT NOT NULL,
    `nabung` INT NOT NULL,
    `ngambil` INT NOT NULL
);

CREATE TABLE `admin_sekolah`(
    `id` INT NOT NULL primary key AUTO_INCREMENT,
    `uname` VARCHAR(255) NOT NULL,
    `passw` VARCHAR(255) NOT NULL
);

ALTER TABLE
    `transaksi` ADD CONSTRAINT `transaksi_id_tabungan_foreign` FOREIGN KEY(`id_tabungan`) REFERENCES `tabungan`(`id`);
ALTER TABLE
    `siswa` ADD CONSTRAINT `siswa_id_kelas_foreign` FOREIGN KEY(`id_kelas`) REFERENCES `kelas`(`id`);
ALTER TABLE
    `tabungan` ADD CONSTRAINT `tabungan_id_siswa_foreign` FOREIGN KEY(`id_siswa`) REFERENCES `siswa`(`id`);
ALTER TABLE
    `transaksi` ADD CONSTRAINT `transaksi_id_admin_foreign` FOREIGN KEY(`id_admin`) REFERENCES `admin_sekolah`(`id`);