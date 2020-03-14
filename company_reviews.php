
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
                    <form method="post" action="#">
                        <h1>Company Reviews</h1>
                        <fieldset>
                            <legend>Rate this company</legend>
                            <div><label>Overall rating</label></div>
                            <div>
                                <input type="radio" name="rate" value="1" /><label>1</label>
                                <input type="radio" name="rate" value="2" /><label>2</label>
                                <input type="radio" name="rate" value="3" /><label>3</label>
                                <input type="radio" name="rate" value="4" /><label>4</label>
                                <input type="radio" name="rate" value="5" /><label>5</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Write your review</legend>

                            <table>
                                <tr>
                                    <td><label>Review Summary</label></td>
                                    <td><input type="text" name="reviewsummary" /></td>
                                </tr>
                                <tr>
                                    <td><label>Write your review</label></td>
                                    <td><textarea name="review" cols="20" rows="5" ></textarea></td>
                                </tr>
                                <tr>
                                    <td><label>Pros</label></td>
                                    <td><input type="text" name="pros"/></td>
                                </tr>
                                <tr>
                                    <td><label>Cons</label></td>
                                    <td><input type="text" name="cons"/></td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Tell us about yourself</legend>
                            <table>
                                <tr>
                                    <td><label>Job title</label></td>
                                    <td><input type="text" name="jobtitle"/></td>
                                </tr>
                                <tr>
                                    <td><label>Location</label></td>
                                    <td><input type="text" name="joblocation"/></td>
                                </tr>
                            </table>
                        </fieldset>
                        <div><input type="submit" name="submit" value="Submit Review" /></div>
                        <a href="viewreview.php">View all your review</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    <?php include 'includes/footer.php';?>
</body>
</html>