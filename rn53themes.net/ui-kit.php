<!DOCTYPE html>
<html lang="en">


<!--  /ui-kit   24   -->
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
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Select Input Boxes</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn select-pos">
                                    <form>
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                            <label>Materialize Select</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <select multiple>
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                            <label>Materialize Multiple Select</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <select multiple>
                                                <optgroup label="team 1">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </optgroup>
                                                <optgroup label="team 2">
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                </optgroup>
                                            </select>
                                            <label>Optgroups</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <select class="icons">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="" data-icon="images/user/4.png" class="circle">example 1</option>
                                                <option value="" data-icon="images/user/5.png" class="circle">example 2</option>
                                                <option value="" data-icon="images/user/6.png" class="circle">example 3</option>
                                            </select>
                                            <label>Images in select</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select class="icons">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="" data-icon="images/user/4.png" class="circle">example 1</option>
                                                <option value="" data-icon="images/user/5.png" class="circle">example 2</option>
                                                <option value="" data-icon="images/user/6.png" class="circle">example 3</option>
                                            </select>
                                            <label>Images in select</label>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>Radio Input Buttons</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="#">
                                        <p>
                                            <input name="group1" type="radio" id="test1" />
                                            <label for="test1">Red</label>
                                        </p>
                                        <p>
                                            <input name="group1" type="radio" id="test2" />
                                            <label for="test2">Yellow</label>
                                        </p>
                                        <p>
                                            <input class="with-gap" name="group1" type="radio" id="test3" />
                                            <label for="test3">Green</label>
                                        </p>
                                        <p>
                                            <input name="group1" type="radio" id="test4" disabled="disabled" />
                                            <label for="test4">Brown</label>
                                        </p>
                                    </form>
                                </div>
                            </div>

                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>Date Pickers</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="#">
                                        <p>
                                            <label for="date-picker">Red</label>
                                            <input type="date" id="date-picker" class="datepicker">
                                        </p>
                                    </form>
                                </div>
                            </div>

                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>Chips</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="chips"></div>
                                    <div class="chips chips-initial"></div>
                                    <div class="chips chips-placeholder"></div>
                                    <div class="chips chips-autocomplete"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 sp-top-30">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Checkboxes</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="#">
                                        <p>
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Red</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="test6" checked="checked" />
                                            <label for="test6">Yellow</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                            <label for="filled-in-box">Filled in</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="indeterminate-checkbox" />
                                            <label for="indeterminate-checkbox">Indeterminate Style</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                                            <label for="test7">Green</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="test8" disabled="disabled" />
                                            <label for="test8">Brown</label>
                                        </p>
                                    </form>
                                </div>
                            </div>

                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>Switches</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <!-- Switch -->
                                    <div class="switch mar-bot-20">
                                        <label>
                                            Off
                                            <input type="checkbox">
                                            <span class="lever"></span> On
                                        </label>
                                    </div>

                                    <!-- Disabled Switch -->
                                    <div class="switch">
                                        <label>
                                            Off
                                            <input disabled type="checkbox">
                                            <span class="lever"></span> On
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>File Uploads & File Input</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>Uploads Multiple files</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="box-inn-sp box-second-inn">
                                <div class="inn-title">
                                    <h4>Range Filter</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="#">
                                        <p class="range-field">
                                            <input type="range" id="test9" min="0" max="100" />
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
     

    <!--======== SCRIPT FILES =========-->
    <?php include('footer_links.php')?>
</body>


<!--  /ui-kit   24   -->
</html>