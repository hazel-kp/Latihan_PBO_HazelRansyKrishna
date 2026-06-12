<?php
// tiket.php - Abstract class untuk Tiket Bioskop

abstract class Tiket {
    // Atribut terenkapsulasi (protected)
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $harga_dasar_tiket;
    protected $jenis_studio;
    
    // Atribut spesifik (protected - nullable)
    protected $tipe_audio;
    protected $lokasi_baris;
    protected $kacamata_3d_id;
    protected $efek_gerak_fitur;
    protected $bantal_selimut_pack;
    protected $layanan_butler;
    
    // Constructor
    public function __construct($id_tiket = null, $nama_film = null, $jadwal_tayang = null, 
                                $jumlah_kursi = null, $harga_dasar_tiket = null, $jenis_studio = null,
                                $tipe_audio = null, $lokasi_baris = null, $kacamata_3d_id = null,
                                $efek_gerak_fitur = null, $bantal_selimut_pack = null, $layanan_butler = null) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar_tiket = $harga_dasar_tiket;
        $this->jenis_studio = $jenis_studio;
        $this->tipe_audio = $tipe_audio;
        $this->lokasi_baris = $lokasi_baris;
        $this->kacamata_3d_id = $kacamata_3d_id;
        $this->efek_gerak_fitur = $efek_gerak_fitur;
        $this->bantal_selimut_pack = $bantal_selimut_pack;
        $this->layanan_butler = $layanan_butler;
    }
    
    // Abstract methods (wajib diimplementasikan oleh class anak)
    abstract public function hitungTotalHarga();
    abstract public function tampilkanInfoFasilitas();
    
    // Getter methods (untuk mengakses properti protected)
    public function getIdTiket() {
        return $this->id_tiket;
    }
    
    public function getNamaFilm() {
        return $this->nama_film;
    }
    
    public function getJadwalTayang() {
        return $this->jadwal_tayang;
    }
    
    public function getJumlahKursi() {
        return $this->jumlah_kursi;
    }
    
    public function getHargaDasarTiket() {
        return $this->harga_dasar_tiket;
    }
    
    public function getJenisStudio() {
        return $this->jenis_studio;
    }
    
    public function getTipeAudio() {
        return $this->tipe_audio;
    }
    
    public function getLokasiBaris() {
        return $this->lokasi_baris;
    }
    
    public function getKacamata3dId() {
        return $this->kacamata_3d_id;
    }
    
    public function getEfekGerakFitur() {
        return $this->efek_gerak_fitur;
    }
    
    public function getBantalSelimutPack() {
        return $this->bantal_selimut_pack;
    }
    
    public function getLayananButler() {
        return $this->layanan_butler;
    }
    
    // Setter methods (untuk mengubah properti protected)
    public function setIdTiket($id_tiket) {
        $this->id_tiket = $id_tiket;
    }
    
    public function setNamaFilm($nama_film) {
        $this->nama_film = $nama_film;
    }
    
    public function setJadwalTayang($jadwal_tayang) {
        $this->jadwal_tayang = $jadwal_tayang;
    }
    
    public function setJumlahKursi($jumlah_kursi) {
        $this->jumlah_kursi = $jumlah_kursi;
    }
    
    public function setHargaDasarTiket($harga_dasar_tiket) {
        $this->harga_dasar_tiket = $harga_dasar_tiket;
    }
    
    public function setJenisStudio($jenis_studio) {
        $this->jenis_studio = $jenis_studio;
    }
    
    public function setTipeAudio($tipe_audio) {
        $this->tipe_audio = $tipe_audio;
    }
    
    public function setLokasiBaris($lokasi_baris) {
        $this->lokasi_baris = $lokasi_baris;
    }
    
    public function setKacamata3dId($kacamata_3d_id) {
        $this->kacamata_3d_id = $kacamata_3d_id;
    }
    
    public function setEfekGerakFitur($efek_gerak_fitur) {
        $this->efek_gerak_fitur = $efek_gerak_fitur;
    }
    
    public function setBantalSelimutPack($bantal_selimut_pack) {
        $this->bantal_selimut_pack = $bantal_selimut_pack;
    }
    
    public function setLayananButler($layanan_butler) {
        $this->layanan_butler = $layanan_butler;
    }
    
    // Method non-abstract (sudah memiliki implementasi)
    public function tampilkanInfoDasar() {
        echo "<strong>ID Tiket:</strong> " . $this->id_tiket . "<br>";
        echo "<strong>Nama Film:</strong> " . $this->nama_film . "<br>";
        echo "<strong>Jadwal Tayang:</strong> " . $this->jadwal_tayang . "<br>";
        echo "<strong>Jumlah Kursi:</strong> " . $this->jumlah_kursi . "<br>";
        echo "<strong>Harga Dasar:</strong> Rp " . number_format($this->harga_dasar_tiket, 0, ',', '.') . "<br>";
        echo "<strong>Jenis Studio:</strong> " . $this->jenis_studio . "<br>";
        
        if ($this->tipe_audio) {
            echo "<strong>Tipe Audio:</strong> " . $this->tipe_audio . "<br>";
        }
    }
    
    // Method untuk menampilkan semua info (menggunakan abstract method)
    public function tampilkanSemuaInfo() {
        $this->tampilkanInfoDasar();
        echo "<strong>Total Harga:</strong> Rp " . number_format($this->hitungTotalHarga(), 0, ',', '.') . "<br>";
        echo "<strong>Fasilitas:</strong><br>";
        echo $this->tampilkanInfoFasilitas();
    }
}
?>