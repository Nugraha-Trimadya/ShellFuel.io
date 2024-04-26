<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Bahan Bakar</title>
    <style>

    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #fbce07;
    margin: 0;
    padding: 0;
}

#isi {
    width: 50%;
    margin: 100px auto;
    background-color: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.logo img{
    width: 10%;
    display: flex;
    margin-left: 45%;
    }

h2 {
    color: #dd1d21;
    display: flex;
    justify-content: center;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="number"],
select {
    width: calc(100% - 10px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}


button {
    width: 100%;
    padding: 15px;
    margin-top: 30px;
    border: none;
    border-radius: 10px;
    background-color: #dd1d21;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #b30005;
}


        @media screen and (max-width: 600px) {
            hr {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <div id="isi">
        <div class="logo"><img src="logo.jpeg" alt=""></div>
        <h2>Shell Fuel</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
            <label for="jumlah">Jumlah Liter:</label>
            <input type="number" id="jumlah" name="jumlah" min="0" step="1" required>
            <br> <br>
            <label for="jenis">Jenis Bahan Bakar:</label>
            <select id="jenis" name="jenis">
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select>
            <button type="submit">Beli</button>
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
                    echo "<div class='transaksi' style='text-align: center;'>";
                    echo "<hr>";
                    echo "<p><strong>Anda membeli bahan bakar minyak dengan tipe </strong> " . $this->jenis . "</p>";
                    echo "<p><strong>Dengan jumlah :</strong> " . $this->jumlah . " Liter</p>";
                    echo "<p><strong>Total yang harus anda bayar:</strong> Rp " . number_format($total, 2, ',', '.') . "</p>";
                    echo "<hr>";
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
                echo "<p style='text-align: center;'>Jenis bahan bakar tidak valid.</p>";
            }
        }
        ?>

    </div>
</body>

</html>