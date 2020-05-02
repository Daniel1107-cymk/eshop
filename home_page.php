<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <?php
include 'func/koneksi.php';
session_start();
?>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sop</a>

            <div>
                <ul class="navbar-nav mr-auto">
                    <?php
if ($_SESSION['login_type'] == "admin"){
echo "
<li class='nav-item'>
<a class='nav-link' href='admin_page.php?page=crud'>Add Product</a>
</li>
";
}
if ($_SESSION['login_type'] == "user"){
echo "
<li class='nav-item'>
<a class='nav-link' href='profile.php?page=crud'>Profile</a>
</li>
";
}
?>

                    <!-- <li class="nav-item">
<a class="nav-link" href="admin_page.php?page=crud">Add Movie</a>
</li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"> Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div>


        </div>
    </div>
</body>

</html>