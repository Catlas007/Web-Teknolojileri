<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit=no">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1922f4bd30.js" crossorigin="anonymous"></script>

</head>

<body id="anasayfa1">


    <div class="admin">
        <div class="row">
            <div class="col adminIletisimTablo">
                <?php if ($_POST["name"] == "b221210371@sakarya.edu.tr" && $_POST["password"] == "b221210371") {
                    echo "HOŞGELDİN! ";
                    echo "<br>GİRİŞ BAŞARILI";
                } else {
                    echo "E-postası veya şifre hatalı";
                    header("refresh:2; login.html");
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="py-3 text-white   text-center clr">
        <p>Web-Teknolojileri | Aybüke Gökçe Yavaş</p>
        <p>
            <a href="https://github.com/Catlas007?tab=repositories" class="Link"><i class="fab fa-github" id="icon1"></i>Github</a>
            <a href="https://www.instagram.com/aybkgokce/" class="Link"><i class="fa-brands fa-instagram" id="icon1"></i>İnstagram</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>


    <script src="css/boostrap.js"></script>
</body>

</html>