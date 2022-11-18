<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum Pertemuan 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="opsi">
        <form id="form_mahasiswa">
            <label for="prodi">
                <h3>Prodi :</h3>
            </label>
            <select name="prodi" id="prodi">
                <option value="" disabled="" selected=""> Pilih Program Studi </option>
                <option value="IF"> Teknik Informatika </option>
                <option value="EL"> Teknik Elektro </option>
                <option value="SI"> Teknik Sipil </option>
                <option value="TA"> Teknik Pertambangan </option>
                <option value="TF"> Teknik Fisika</option>
            </select>
        </form>
    </div>
    <br>
    <div id="tampil_data"><?php include 'tabel.php'; ?></div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $("#prodi").change(function() {
                var value = $(this).val();
                $.ajax({
                    url: "tampil.php",
                    type: "POST",
                    data: "request=" + value,
                    beforeSend: function() {
                        $("#tampil_data").html("<div> loading... </div>");
                    },
                    success: function(data) {
                        $("#tampil_data").html(data);
                    }
                })
            });
        });
    </script>
</body>

</html>