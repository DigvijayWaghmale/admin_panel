<!DOCTYPE html>
<html lang="en">


<!--  /hotel-room-type-edit   27   -->

<head>
    <?php include('header_links.php') ?>

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <?php include('header.php') ?>


    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <?php include('sidebar.php') ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Edit Room Type</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Edit Room Type</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="list-title" type="text" value="" class="validate">
                                <label for="list-title">Enter Room Type</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
     

    <!--======== SCRIPT FILES =========-->
    <?php include('footer_links.php') ?>
</body>


<!--  /hotel-room-type-edit   27   -->

</html>