<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Memproses Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" name="nama" type="text" placeholder="nama pegawai" data-sb-validations="required" />
                <label for="namaPegawai">nama pegawai</label>
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">nama pegawai is required.</div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="agama" aria-label="Agama">
                    <option value="Islam">Islam</option>
                    <option value="katolik">katolik</option>
                    <option value="kristen">kristen</option>
                    <option value="konghuchu">konghuchu</option>
                    <option value="hindu">hindu</option>
                    <option value="budha">budha</option>
                </select>
                <label for="agama">Agama</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="manager" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="asisten" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="kabag" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="staff" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="menikah" type="radio" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="belumMenikah" type="radio" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="belumMeniikah">Belum Meniikah</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="jumlahanak" type="text" placeholder="jumlah anak" data-sb-validations="required" />
                <label for="jumlahAnak">jumlah anak</label>
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">jumlah anak is required.</div>
            </div>

            <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>

        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <?php
    //tangkap request
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jmlhank = $_POST['jumlahanak'];

    $tombol = $_POST['proses'];


    switch ($jabatan) {
        case 'manager':
            $gajipokok = 20000000;
            break;
        case 'asisten':
            $gajipokok = 15000000;
            break;
        case 'kabag':
            $gajipokok = 10000000;
            break;
        case 'staff':
            $gajipokok = 4000000;
            break;
        default:
            $gajipokok = '';
    }



    if ($status == 'belumMenikah' && $jmlhank == 0) $tnjngnklrg = 0;
    else if ($status == 'menikah' && $jmlhank == 2) $tnjngnklrg = 5 * $gajipokok / 100;
    else if ($status == 'menikah' && $jmlhank >= 3) $tnjngnklrg = 10 * $gajipokok / 100;
    else if ($status == 'menikah' && $jmlhank >= 5) $tnjngnklrg = 15 * $gajipokok / 100;
    else $tnjngnklrg = '';

    $tunjanganjabatan = 20 * $gajipokok / 100;
    $gajikotor = $gajipokok + $tunjanganjabatan + $tnjngnklrg;
    $zakat = ($agama == 'Islam' && $gajikotor >= 6000000) ? 2.5 * $gajikotor / 100 : 0;
    $take_home_pay = $gajikotor - $zakat;

    if (isset($tombol)) { ?>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">Agama</th>
                    <th scope="col">jabatan</th>
                    <th scope="col">status</th>
                    <th scope="col">jumlahAnak</th>
                    <th scope="col">gajipokok</th>
                    <th scope="col">tunjangn jabatan</th>
                    <th scope="col">tunjagan keluarga</th>
                    <th scope="col">gajipokok</th>
                    <th scope="col">zakat</th>
                    <th scope="col">total</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> <?= $nama ?></td>
                    <td><?= $agama ?></td>
                    <td><?= $jabatan ?></td>
                    <td><?= $status ?></td>
                    <td><?= $jmlhank ?></td>
                    <td><?= number_format($gajipokok, 2, ',', ',');?></td>
                    <td><?= number_format($tunjanganjabatan, 2, ',', ',');?></td>
                    <td><?= number_format($tnjngnklrg, 2, ',', ',');?></td>
                    <td><?= number_format($gajikotor, 2, ',', ',');?></td>
                    <td><?= number_format($zakat, 2, ',', ',');?></td>
                    <td><?= number_format($take_home_pay, 2, ',', ',');?></td>
  
                    
                </tr>
            <?php } ?>
            <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
            </script>
</body>

</html>
