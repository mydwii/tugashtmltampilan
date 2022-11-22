<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>DAFTAR</title>
</head>
<body>
    <div class="card" style="width: 100rem;">
    <div class="card-body">
    <form action="" method="get" class="col-md-4 mx-auto">
        <h1>Daftar</h1>
        <p>Ini cepat dan mudah.</p>
        <div class="container">
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Nama depan" aria-label="Nama depan" name="Namadepan">
            </div>
            
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Nama belakang" aria-label="Nama belakang" name="Namabelakang">
            </div>
        </div>
        <br>
        <div class="col-12">
            <input type="text" class="form-control" id="inputAddress" placeholder="nomor telepon atau email" name="nomortelepon">
        </div>
        <br>
        <div class="col-12">
            <input type="password" class="form-control" id="inputAddress" placeholder="kata sandi baru" name="katasandibaru">
        </div>
        <br>
        <p>Tanggal Lahir</p>
        <div class="row">
            <div class="col-4">
                <label class="visually-hidden" for="inlineFormSelectPref">Tanggal Lahir</label>
                <select class="form-select" id="inlineFormSelectPref">
                <option selected>tanggal lahir...</option>
                    <!-- kalau ikut ikut fachrel slh lo . -->
                <?php
                    for ($x=1; $x<=31; $x++){
                        echo "<option value= '$x'>$x</option>";
                    }
                ?>
                </select>
            </div>   
            <div class="col-4">
                <label class="visually-hidden" for="inlineFormSelectPref"></label>
                <select class="form-select" id="inlineFormSelectPref">
                <option selected>bulan...</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</eoption>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
                </select>
            </div>
    
            <div class="col-4">
                <label class="visually-hidden" for="inlineFormSelectPref">Tahun</label>
                <select class="form-select" id="inlineFormSelectPref">
                <option selected>tahun...</option>
                    <!-- kalau ikut ikut fachrel slh lo . -->
                <?php
                    for ($x=1945; $x<=2022; $x++){
                        echo "<option value= '$x'>$x</option>";
                    }
                ?>
            </div>
                </select>
        <br>  
        </div>   
        <p>Jenis Kelamin</p>
        <div class="row">
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-Laki
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Lainnya
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum amet sequi officiis esse sint neque, adipisci doloremque eos eveniet?</p>
        <div class="col-3 mx-auto">
            <button type="submit" class="btn btn-success form-control">Daftar</button>
        </div>
        </div>
    <form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    
</body>
</html>

<?php
 var_dump($_GET);
?>