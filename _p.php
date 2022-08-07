<?php
include('config/db_config.php');
include('config/constant.php');
$sql = "SELECT * FROM book";
$aResult = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
$ad = '';
if (file_exists('info/a.txt')) {
    $ad = file_get_contents("info/a.txt");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core Css -->
    <link href="<?php echo HTTP_ASSETS ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>j</title>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>QR</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($aResult as $k => $v) :
            ?>
                <tr>
                    <td><?php echo $v["name"] ?></td>
                    <td><?php echo $v["qr_code"] ?></td>
                    <td><?php echo $v["author"] ?></td>
                    <td><?php echo $v["edition"] ?></td>
                    <td>
                        <button data-id="<?php echo $ad == $v["id"] ? "" : $v["id"] ?>" class="btn" type="button"><?php echo $ad == $v["id"] ? "In-activate" : "Active" ?></button>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
    <!-- Jquery Core Js -->
    <script src="<?php echo HTTP_ASSETS ?>plugins/jquery/jquery.min.js"></script>
    <script>
        $(document).on('click', '.btn', function(e) {
            let self = $(this);
            $.ajax({
                type: 'POST',
                url: api_url + 'Pu.php',
                dataType: 'json',
                data: {
                    id: self.attr("data-id"),
                    req: '_j'
                },
                success: function(r) {
                    window.location.reload();
                }
            });
        });
    </script>
</body>

</html>