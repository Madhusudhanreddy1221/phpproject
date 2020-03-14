
<!DOCTYPE html>
<html>
<head>
    <title>Company Review</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/Script.js"></script>
</head>
<body>

    <?php include 'includes/header.php';?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <h1>View all your review's</h1>
        
            <table class="table table-striped" border="1">
                <tr>
                    <th>Review Summary</th>
                    <th>Your Review</th>
                    <th>Pros</th>
                    <th>Cons</th>
                    <th>Job Title</th>
                    <th>Job Location</th>
                    <th>Company Rating</th>
                    <th colspan="2">Action</th>
                </tr>
                
                <?php
                foreach($datas as $data){
                ?>
                <tr>
                    <td><?= $data[1] ?></td>
                    <td><?= $data[2] ?></td>
                    <td><?= $data[3] ?></td>
                    <td><?= $data[4] ?></td>
                    <td><?= $data[5] ?></td>
                    <td><?= $data[6] ?></td>
                    <td><?= $data[7] ?></td>
                    <form action='editreview.php' method='post'>        
                    <td>
                        <input type="hidden" name="r_id" value="<?php echo $data[0] ?>" />
                        <input type="submit" name="Edit" value="Edit" />
                        
                    </td>
                    <td><input type="submit" name="delete" value="Delete" /></td>
                    </form>
                </tr>
                <?php
                }
                ?>
            </table>
        
                </div>
            </div>
        </div>
    </div>
        
    <?php include 'includes/footer.php';?>
</body>
</html>
