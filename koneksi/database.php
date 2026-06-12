<?php
// database.php - Koneksi database dengan prinsip OOP

class Database {
    // Properti koneksi (enkapsulasi)
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_latihan_pbo_trpl1a_hazel_ransy_krishna";
    private $connection;
    
    // Constructor - koneksi otomatis saat objek dibuat
    public function __construct() {
        $this->connect();
    }
    
    // Method untuk koneksi ke database
    private function connect() {
        // Membuat koneksi menggunakan MySQLi OOP
        $this->connection = new mysqli(
            $this->host, 
            $this->username, 
            $this->password, 
            $this->database
        );
        
        // Cek koneksi
        if ($this->connection->connect_error) {
            // Hentikan script jika koneksi gagal
            die("Koneksi database gagal: " . $this->connection->connect_error);
        }
        
        // Set charset ke UTF-8
        $this->connection->set_charset("utf8mb4");
        
        // Optional: uncomment untuk melihat pesan sukses
        // echo "Koneksi database berhasil!";
    }
    
    // Method untuk mendapatkan objek koneksi
    public function getConnection() {
        return $this->connection;
    }
    
    // Method untuk menjalankan query
    public function query($sql) {
        $result = $this->connection->query($sql);
        
        if (!$result) {
            die("Query error: " . $this->connection->error);
        }
        
        return $result;
    }
    
    // Method untuk mengambil semua data (array asosiatif)
    public function fetchAll($sql) {
        $result = $this->query($sql);
        $data = [];
        
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        
        return $data;
    }
    
    // Method untuk mengambil satu baris data
    public function fetchOne($sql) {
        $result = $this->query($sql);
        return $result->fetch_assoc();
    }
    
    // Method untuk INSERT (mengembalikan ID terakhir)
    public function insert($table, $data) {
        $fields = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_map([$this, 'escapeString'], array_values($data))) . "'";
        
        $sql = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";
        
        if ($this->query($sql)) {
            return $this->connection->insert_id;
        }
        
        return false;
    }
    
    // Method untuk UPDATE
    public function update($table, $data, $where) {
        $setValues = [];
        
        foreach ($data as $key => $value) {
            $setValues[] = "{$key} = '" . $this->escapeString($value) . "'";
        }
        
        $setClause = implode(", ", $setValues);
        $sql = "UPDATE {$table} SET {$setClause} WHERE {$where}";
        
        return $this->query($sql);
    }
    
    // Method untuk DELETE
    public function delete($table, $where) {
        $sql = "DELETE FROM {$table} WHERE {$where}";
        return $this->query($sql);
    }
    
    // Method untuk escape string (mencegah SQL injection)
    public function escapeString($string) {
        return $this->connection->real_escape_string($string);
    }
    
    // Method untuk mendapatkan jumlah baris yang terpengaruh
    public function affectedRows() {
        return $this->connection->affected_rows;
    }
    
    // Method untuk menutup koneksi
    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
    
    // Destructor - tutup koneksi otomatis
    public function __destruct() {
        $this->closeConnection();
    }
}

// Contoh penggunaan (bisa di-comment atau dihapus)
/*
// Membuat objek database
$db = new Database();

// Contoh SELECT semua data
$tiket = $db->fetchAll("SELECT * FROM tabel_tiket");
echo "<pre>";
print_r($tiket);
echo "</pre>";

// Contoh SELECT satu data
$detail = $db->fetchOne("SELECT * FROM tabel_tiket WHERE id_tiket = 1");
print_r($detail);

// Contoh INSERT
$dataBaru = [
    'nama_film' => 'Test Film',
    'jadwal_tayang' => '2026-06-20 15:00:00',
    'jumlah_kursi' => 2,
    'harga_dasar_tiket' => 50000,
    'jenis_studio' => 'Regular',
    'tipe_audio' => 'Dolby Digital'
];
$idBaru = $db->insert('tabel_tiket', $dataBaru);
echo "ID tiket baru: " . $idBaru;

// Contoh UPDATE
$db->update('tabel_tiket', ['jumlah_kursi' => 3], "id_tiket = 1");

// Contoh DELETE
$db->delete('tabel_tiket', "id_tiket = 5");
*/
?>