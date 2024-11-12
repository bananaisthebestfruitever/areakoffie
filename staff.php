<?php
class Pegawai {
    public $gajiPokok;

    public function __construct($gajiPokok) {
        $this->gajiPokok = $gajiPokok;
    }

    public function hitungGaji() {
        return $this->gajiPokok;
    }

    public function tampilkanInfo() {
        echo "Gaji Pokok: " . $this->gajiPokok . "\n";
    }
}

class Manager extends Pegawai {
    public function __construct($gajiPokok) {
        parent::__construct($gajiPokok);
    }

    public function hitungGaji() {
        return $this->gajiPokok + 2000000; // Additional allowance
    }

    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Jabatan: Manager\n";
    }
}

class Staff extends Pegawai {
    public function __construct($gajiPokok) {
        parent::__construct($gajiPokok);
    }

    public function hitungGaji() {
        return $this->gajiPokok + 500000; // Additional allowance
    }

    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Jabatan: Staff\n";
    }
}

// Example usage
$manager = new Manager(5000000);
$staff = new Staff(3000000);

$manager->tampilkanInfo();
echo "Total Gaji Manager: " . $manager->hitungGaji() . "\n";
echo "<hr>\n";

$staff->tampilkanInfo();
echo "Total Gaji Staff: " . $staff->hitungGaji() . "\n";
echo "<hr>\n";
?>
