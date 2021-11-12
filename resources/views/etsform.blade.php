<!DOCTYPE html>
<html>

<head>
    <title>ETS PWEB A Kode C </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    #borderform {
        border-bottom: 2px solid rgb(0, 0, 0);
        border-top: 2px solid rgb(0, 0, 0);
        border-right: 2px solid rgb(0, 0, 0);
        border-left: 2px solid rgb(0, 0, 0);
        background-color: white;
    }

    .container {
        padding-top: 100px;
        padding-bottom: 70px;
    }

    #background {
        background-image: url("https://www.onlygfx.com/wp-content/uploads/2021/04/white-triangle-pattern-seamless-background-1.jpg");
        background-size: cover;
    }

    h5 {
        padding-left: 40px;
        font-size: 19px;
        line-height: 15px;
    }

    p, label {
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
    }
    #submit {
        background-color: #3c43e1;
        color:rgb(255, 255, 255);
    }
    #reset {
        background-color: #2aff17;
            color: rgb(0, 0, 0);
    }


</style>
<script>
    function formvalidate(){
        var judul = document.forms["formega"]["judulbuku"];
        var nobuku = document.forms["formega"]["nobuku"];
        var jenis = document.forms["formega"]["jenis"];
        var tanggal = document.forms["formega"]["tanggal"];

        if(judul.value == ""){
            alert("Tolong isi judul ini dengan tepat!")
            judul.focus();
            return false
        }
        if(nobuku.value == ""){
            alert("Tolong isi nomor buku ini dengan tepat!")
            nobuku.focus();
            return false
        }
        if(jenis.value == 0) {
            alert("Tolong isi kolom jenis peminjaman dengan tepat!")
            jenis.focus();
            return false;
        }
        if(tanggal.value == ""){
            alert("Tolong isi kolom tanggal ini dengan tepat!")
            tanggal.focus();
            return false;
        }

    }
</script>
<body>
    <div class="container-fluid" id="background">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-7" id="borderform">
                    <br>
                    <h5>Ega Fernanda Putra</h5>
                    <h5>Ega</h5>
                    <h5>5026201073</h5>
                    <br><br>
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="text-center">Form Input Peminjaman Buku</h4>
                            <br><br>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-11">
                            <form name = "formega" action = "https://www.instagram.com/egafernanda_/" onsubmit = "return formvalidate()">
                                @csrf
                                <div class="form-group row">
                                    <label for="judulbuku">&nbsp;Judul
                                        Buku&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="judulbuku" placeholder="Judul buku" name = "judulbuku" pattern = .{10,} title = "Minimal 10 karakter ya :)" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nobuku">&nbsp;No Buku
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="nobuku" placeholder="No Buku" name = "nobuku " pattern = "[0-9]{5}" title = "Hanya angka dan 5 digit yaaa :)" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis">&nbsp;Jenis
                                        Peminjaman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" type="text" id="jenis" name="jenis">
                                            <option value="0">Jenis Peminjaman</option>
                                            <option value="1">Biasa</option>
                                            <option value="2">Kilat</option>
                                            <option value="3">Lama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglpinjam">&nbsp;Tanggal
                                        Peminjaman &nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" id="tglpinjam"
                                            placeholder="Tanggal Peminjaman" name = "tanggal" autocomplete="off">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-5 " >
                                        <button type="submit" class="btn btn-primary btn-block pt-0 " id ="simpan">Simpan</button>
                                    </div>
                                    <div class="col-sm-5">
                                        <button type="reset" class="btn btn-success btn-block pt-0" id = "reset"><b>Reset</b></button>
                                        <br><br><br><br>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <br><br><br>
        </div>
    </div>

</body>

</html>
