<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Form input two images.</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 ml-auto mr-auto bg-primary p-3">
            <div class="alert alert-success text-center" role="alert">
                <?php
                session_start();
                if (!empty($_GET['statusErr'])){
                    echo 'Please fill out status field.';
                }
                elseif (!empty($_GET['pic1Err'])){
                    if ($_GET['pic1Err'] = 1){
                        echo 'Please fill out first photo field.';
                    }
                    elseif ($_GET['pic1Err'] = 2){
                        echo 'Your first photo invalid file format!';
                    }
                    elseif ($_GET['pic1Err'] = 3){
                        echo 'Your first photo invalid file size!';
                    }
                }
                elseif (!empty($_GET['pic2Err'])){
                    if ($_GET['pic2Err'] = 1){
                        echo 'Please fill out second photo field.';
                    }
                    elseif ($_GET['pic2Err'] = 2){
                        echo 'Your second photo invalid file format!';
                    }
                    elseif ($_GET['pic2Err'] = 3){
                        echo 'Your second photo invalid file size!';
                    }
                }
                elseif (isset($_SESSION['success'])){
                    echo 'Images successfully uploaded!';
                    session_unset();
                }
                else{
                    echo 'Photo Upload';
                }
                ?>
            </div>
            <form action="post.php" method="post" enctype="multipart/form-data">
                <div class="form-group-lg mt-3">
                    <label class="text-warning">When does not upload photo.<i class="fas fa-smile-wink"></i></label>
                    <input type="text" name="noSubject" class="form-control">
                </div>
                <div class="form-group-lg mt-3">
                    <label>First photo</label>
                    <input type="file" name="pic1"  class="form-control">
                </div>
                <div class="form-group-lg mt-3">
                    <label>Second photo</label>
                    <input type="file" name="pic2"  class="form-control">
                </div>
                <div class="form-group-lg mt-3">
                    <button type="submit"  class="btn btn-success form-control">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>