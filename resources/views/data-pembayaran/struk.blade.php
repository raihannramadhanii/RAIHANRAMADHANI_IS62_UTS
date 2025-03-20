<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .receipt {
            background-color: white; /* Warna latar belakang struk */
            padding: 40px;
            border-radius: 8px;
            border: 2px solid black; /* Garis pinggir berwarna hitam */
        }
        .header {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 30px;
        }
        .footer {
            margin-top: 20px;
            font-weight: bold;
        }
        .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="receipt">
            <div class="header text-center">
                Struk Pembayaran <br>
                <span style="font-size: 18px;">No.001</span>
            </div>

            <hr style="border: 1px solid black; margin: 20px 0;">

            <div class="row mb-2">
                <div class="col-6"><strong>Kode Pembayaran</strong></div>
                <div class="col-6"><strong>: 006768</strong></div>
            </div>
            <div class="row mb-2">
                <div class="col-6"><strong>Kode Penjualan</strong></div>
                <div class="col-6"><strong>: R20</strong></div>
            </div>
            <div class="row mb-2">
                <div class="col-6"><strong>Sudah terima dari</strong></div>
                <div class="col-6"><strong>: Rara Chantika Aula Putri</strong></div>
            </div>
            <div class="row mb-2">
                <div class="col-6"><strong>Uang sebesar</strong></div>
                <div class="col-6"><strong>: Enam Belas Ribu Rupiah</strong></div>
            </div>
            <div class="row mb-2">
                <div class="col-6"><strong>Untuk pembayaran</strong></div>
                <div class="col-6"><strong>: Kue Basah Yang dititipkan (Risol Beef Mayo)</strong></div>
            </div>
            <div class="text-right" style="margin-right: 100px; margin-top: 35px;">
                <b> Banda Aceh, 27 Februari 2024 </b>
            </div>

            <div class="footer text-left" style="padding-left: 60px; border: 1px solid #000; padding: 10px; border-radius: 10px; background-color: white; text-align: center; display: inline-block;">
                Rp. 16.000,-
            </div>
        </div>
    </div>

    <button class="back-button" onclick="window.history.back();">Kembali</button>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
