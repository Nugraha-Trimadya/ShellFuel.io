<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Bahan Bakar</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #fbce07 0%, #dd1d21 100%);
        margin: 0;
        padding: 20px;
        min-height: 100vh;
    }

    #isi {
        width: 50%;
        margin: 50px auto;
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .logo img {
        width: 120px;
        display: block;
        margin: 0 auto 20px;
        transition: transform 0.3s ease;
    }

    .logo img:hover {
        transform: scale(1.1);
    }

    h2 {
        color: #dd1d21;
        text-align: center;
        font-size: 2.2em;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        font-weight: 600;
        font-size: 1.1em;
    }

    input[type="number"],
    select {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 10px;
        font-size: 1em;
        transition: all 0.3s ease;
        margin-bottom: 20px;
    }

    input[type="number"]:focus,
    select:focus {
        border-color: #fbce07;
        box-shadow: 0 0 8px rgba(251, 206, 7, 0.4);
        outline: none;
    }

    .tombol-print {
        width: 30%;
        margin: 20px auto;
        display: block;
    }

    button {
        width: 100%;
        padding: 15px;
        margin-top: 20px;
        border: none;
        border-radius: 10px;
        background: linear-gradient(45deg, #dd1d21, #fb383c);
        color: #fff;
        font-size: 1.1em;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    button:hover {
        background: linear-gradient(45deg, #b30005, #dd1d21);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(221, 29, 33, 0.3);
    }

    .Transaksi {
        margin-top: 30px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 15px;
        border: 2px solid #fbce07;
    }

    .Transaksi p {
        margin: 10px 0;
        font-size: 1.1em;
        color: #333;
    }

    .Transaksi strong {
        color: #dd1d21;
    }

    hr {
        border: none;
        height: 2px;
        background: linear-gradient(to right, #fbce07, #dd1d21);
        margin: 20px 0;
    }

    @media print {
        .transaksi {
            display: none;
            visibility: visible;
        }

        form {
            display: none;
        }

        .tombol-print {
            display: none;
        }
    }

    @media screen and (max-width: 900px) {
        #isi {
            width: 70%;
        }
    }

    @media screen and (max-width: 600px) {
        #isi {
            width: 90%;
            padding: 20px;
        }
        
        hr {
            width: 50%;
        }
        
        .tombol-print {
            width: 80%;
        }
        
        h2 {
            font-size: 1.8em;
        }
    }
    </style>
</head>

<body>
    <div id="isi">
        <div class="logo"><img src="logo.jpeg" alt="Shell Logo"></div>
        <h2>Shell Fuel</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="jumlah">Jumlah Liter:</label>
            <input type="number" id="jumlah" name="jumlah" min="0" step="1" required placeholder="Masukkan jumlah liter">
            
            <label for="jenis">Jenis Bahan Bakar:</label>
            <select id="jenis" name="jenis">
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select>
            <button type="submit">Beli Sekarang</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            class Shell
            {
                protected $jenis;
                protected $harga;
                protected $jumlah;
                protected $ppn;

                public function __construct($jenis, $harga, $jumlah)
                {
                    $this->jenis = $jenis;
                    $this->harga = $harga;
                    $this->jumlah = $jumlah;
                    $this->ppn = 10;
                }

                public function getJenis()
                {
                    return $this->jenis;
                }

                public function getHarga()
                {
                    return $this->harga;
                }

                public function getJumlah()
                {
                    return $this->jumlah;
                }

                public function getPpn()
                {
                    return $this->ppn;
                }
            }

            class Beli extends Shell
            {
                public function Total()
                {
                    $total = $this->harga * $this->jumlah;
                    $total += $total * $this->ppn / 100;
                    return $total;
                }

                public function buktiTransaksi()
                {
                    $total = $this->Total();
                    echo "<div class='Transaksi'>";
                    echo "<h3 style='text-align: center; color: #dd1d21;'>Bukti Transaksi</h3>";
                    echo "<hr>";
                    echo "<p><strong>Jenis Bahan Bakar:</strong> " . $this->jenis . "</p>";
                    echo "<p><strong>Jumlah Pembelian:</strong> " . $this->jumlah . " Liter</p>";
                    echo "<p><strong>Harga per Liter:</strong> Rp " . number_format($this->harga, 2, ',', '.') . "</p>";
                    echo "<p><strong>PPN:</strong> " . $this->ppn . "%</p>";
                    echo "<p><strong>Total Pembayaran:</strong> Rp " . number_format($total, 2, ',', '.') . "</p>";
                    echo "<hr>";
                    echo "<button onclick='printTransaksi()' class='tombol-print'>Cetak Transaksi</button>";
                    echo "</div>";
                }
            }

            $hargaBahanBakar = [
                "Shell Super" => 15420.00,
                "Shell V-Power" => 16130.00,
                "Shell V-Power Diesel" => 18310.00,
                "Shell V-Power Nitro" => 16510.00,
            ];

            $jenis = $_POST["jenis"];
            $jumlah = $_POST["jumlah"];

            if (array_key_exists($jenis, $hargaBahanBakar)) {
                $harga = $hargaBahanBakar[$jenis];
                $beli = new Beli($jenis, $harga, $jumlah);
                $beli->buktiTransaksi();
            } else {
                echo "<div class='Transaksi'><p style='text-align: center; color: #dd1d21;'>Jenis bahan bakar tidak valid.</p></div>";
            }
        }
        ?>

        <script>
            function printTransaksi() {
                window.print();
            }
        </script>
    </div>
</body>

</html>