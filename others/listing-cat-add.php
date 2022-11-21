<!DOCTYPE html>
<html lang="en">


<!--  /listing-cat-add   22   -->
<head>
    <?php include('header_links.php')?>

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <?php include('header.php')?>


    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
        <?php include('sidebar.php')?>
<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add New listing Categories</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New listing Categories</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="list-title" type="text" value="" class="validate">
                                <label for="list-title">Enter Listing Category</label>
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
    <?php include('footer_links.php')?>
</body>


<!--  /listing-cat-add   23   -->
</html>