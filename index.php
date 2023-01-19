<?php
$dydis=0;

if (isset($_GET['dydis'])) {
    $dydis = $_GET['dydis'];
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form method="get">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div>
                            <input type="radio" name="dydis" value=5 checked>
                            <label>Nuo 1 iki 5</label>
                        </div>
                        <div>
                            <input type="radio" name="dydis" value=10>
                            <label>Nuo 1 iki 10</label>
                        </div>
                        <div>
                            <input type="radio" name="dydis" value=12>
                            <label>Nuo 1 iki 12</label>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-5 mt-4">

                <table class="table">
                    <?php for ($i = 1; $i <= $dydis; $i++) { ?>
                        <tr> <?php for ($y = 1; $y <= $dydis; $y++) { ?>
                            <td class="<?=($i==1 || $y==1  )?'bg-info':''?> ">

                                <?=$i*$y?>

                                <!--  <?php //=(rand(0, 100) <50 )? $i*$y :""?>-->

                            </td>
                        <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
        </div>

    </div>

</body>
</html>
