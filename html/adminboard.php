<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Board</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .admin-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .admin-header .admin-info {
            display: flex;
            align-items: center;
        }

        .admin-header .admin-info img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1;
        }

        .action-buttons,
        .table-buttons,
        .field-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .btn-group-vertical .btn {
            margin-bottom: 10px;
        }

        .action-buttons button,
        .table-buttons button,
        .field-buttons button {
            flex: 1 1 calc(25% - 10px);
            max-width: calc(25% - 10px);
            margin-bottom: 10px;
        }

        .action-buttons {
            margin-bottom: 30px;
        }

        .btn-group-vertical .btn {
            width: 100%;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1 1 100%;
        }

        .img-fluid {
            margin-top: 20px;
            margin-bottom: 10px;
            max-width: 20%;
            height: auto;
        }

        .selected {
            background-color: #007bff;
            color: white;
            /* Mengubah warna teks menjadi putih */
            pointer-events: none;
            /* Menonaktifkan event pointer agar tombol tidak bisa diklik lagi */
        }

                .radio-btn-wrapper {
            display: inline-block;
            position: relative;
        }

        .radio-btn-wrapper input[type="radio"] {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .btn-outline-danger {
            display: inline-block;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            color: #dc3545;
            background-color: transparent;
            background-image: none;
            border: 1px solid #dc3545;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .radio-btn-wrapper input[type="radio"]:checked + .btn-outline-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="admin-header">
            <h1>ADMIN BOARD</h1>
            <div class="admin-info">
                <span>ADMIN</span>
                <strong>MBAK BELINDA</strong>
            </div>
        </div>
        <div class="card-container">
            <div class="logo-container">
                <img src="../img/logoAdmin.png" alt="Sport Center Logo" class="img-fluid">
            </div>
            <div class="custom-form">
                <h3 class="text-center">DATA DITEMUKAN</h3>
                <form>
                    <div class="form-group">
                        <label for="pin">KODE PIN :</label>
                        <input type="text" id="pin" class="form-control" value="123Xpo0100PLK" disabled>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Pemesan :</label>
                        <input type="text" id="name" class="form-control" value="ARIL TAPI BUKNAN NOAH" disabled>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Aktif (whatsapp) :</label>
                        <input type="text" id="phone" class="form-control" value="0811158796" disabled>
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal Pemesanan :</label>
                        <input type="text" id="date" class="form-control" value="12/06/2024" disabled>
                    </div>
                    <div class="form-group">
                        <label for="date">Pilih Arena Bermain :</label>
                        <input type="text" id="area" class="form-control" value="Meja 1 | Lapangan1" disabled>
                    </div>
                    <div class="form-group">
                        <label for="duration">Durasi Digunakan :</label>
                        <select id="duration" class="form-control">
                            <option selected>1 jam</option>
                            <option selected>2 jam</option>
                            <option selected>3 jam</option>
                            <option selected>4 jam</option>
                            <option selected>Open Table</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Keterangan :</label>
                        <select id="status" class="form-control">
                            <option selected>VERIFIKASI</option>
                            <option selected>Dibatalkan</option>
                            <option selected>Proses</option>
                            <option selected>Bermain</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Simpan</button>
                    </div>
                </form>

            </div>
            <div class="custom-form">
                <h3 class="text-center">PIN reservasi</h3>
                <form class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="123Xpo0100PLK">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Cari</button>
                        </div>
                    </div>
                </form>
                <div class="action-buttons">
                    <button type="button" class="btn btn-success" onclick="selectButton(this)">VERIFIKASI</button>
                    <button type="button" class="btn btn-primary" onclick="selectButton(this)">PROSES</button>
                    <button type="button" class="btn btn-danger" onclick="selectButton(this)">BATALKAN</button>
                    <button type="button" class="btn btn-warning" onclick="selectButton(this)">BERMAIN</button>
                </div>
                <h5>PILIH ARENA MEJA BILLIARD</h5>
                <div class="table-buttons radio-btn-wrapper">
        <input type="radio" id="danger-outlined-1" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-1">1</label>

        <input type="radio" id="danger-outlined-2" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-2">2</label>

        <input type="radio" id="danger-outlined-3" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-3">3</label>

        <input type="radio" id="danger-outlined-4" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-4">4</label>

        <input type="radio" id="danger-outlined-5" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-5">5</label>

        <input type="radio" id="danger-outlined-6" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-6">6</label>

        <input type="radio" id="danger-outlined-7" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-7">7</label>

        <input type="radio" id="danger-outlined-8" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-8">8</label>

        <input type="radio" id="danger-outlined-9" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-9">9</label>

        <input type="radio" id="danger-outlined-10" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-10">10</label>

        <input type="radio" id="danger-outlined-11" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-11">11</label>

        <input type="radio" id="danger-outlined-12" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-12">12</label>

        <input type="radio" id="danger-outlined-13" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-13">13</label>

        <input type="radio" id="danger-outlined-14" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-14">14</label>

        <input type="radio" id="danger-outlined-15" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-15">15</label>

        <input type="radio" id="danger-outlined-16" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-16">16</label>

        <input type="radio" id="danger-outlined-17" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-17">17</label>

        <input type="radio" id="danger-outlined-18" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-18">18</label>

        <input type="radio" id="danger-outlined-19" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-19">19</label>

        <input type="radio" id="danger-outlined-20" name="radio-group">
        <label class="btn btn-outline-danger" for="danger-outlined-20">20</label>
    </div>
                <h5>PILIH ARENA LAPANGAN</h5>
                <div class="field-buttons">
                    <button type="button" class="btn btn-secondary" onclick="selectButton(this)">1</button>
                    <button type="button" class="btn btn-secondary" onclick="selectButton(this)">2</button>
                    <button type="button" class="btn btn-secondary" onclick="selectButton(this)">3</button>
                    <button type="button" class="btn btn-secondary" onclick="selectButton(this)">4</button>
                    <button type="button" class="btn btn-secondary" onclick="selectButton(this)">5</button>
                    <button type="button" class="btn btn-secondary" onclick="selectButton(this)">6</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectButton(button) {
            button.classList.add('selected');
            button.setAttribute('disabled', 'true');
        }
    </script>

</body>

</html>