<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mandiri Sesi 04</title>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #4a44f2;
        }

        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #4a44f2;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }

        form {
            background-color: #9f9dd1;
            margin: 10px;
            padding: 25px;
        }
    </style>
</head>
<body>
     <!-- heading hello -->
     <h1>Latihan Mandiri Sesi 04</h1>

<!-- luas keliling dan lingkaran -->
<h1>Menghitung luas dan keliling lingkaran</h1>
<form>
    <p>Jari-jari: <input type="text" id="jari2"></p>
    <p><input type="button" value="Hitung" onclick="hitungLuasKeliling()"> </p>
    <p>Luas: <input type="text" id="luas"></p>
    <p>Keliling: <input type="text" id="keliling"></p>
</form>

<script>
    // console log algoritma
    console.log("Hello Algoritma")

    // function hitung luas keliling
    function hitungLuasKeliling() {
        var jari2, Keliling, Luas
        var phi=3.14
        jari2 = parseInt(document.getElementById("jari2").value)
        Keliling = 2 * phi * jari2
        Luas = phi * jari2 * jari2
        document.getElementById("keliling").value = Keliling
        document.getElementById("luas").value = Luas
    }
</script>
</body>
</html>