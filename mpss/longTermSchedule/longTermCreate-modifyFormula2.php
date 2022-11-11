<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/ltsStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- SYNCFUSION SCRIPT -->
    <link href="http://cdn.syncfusion.com/20.3.0.47/js/web/flat-azure/ej.web.all.min.css" rel="stylesheet" />

    <!--scripts-->

    <script src="http://cdn.syncfusion.com/js/assets/external/jquery-1.11.3.min.js"></script>

    <script src="http://cdn.syncfusion.com/20.3.0.47/js/web/ej.web.all.min.js"></script>
    <title>New Liner - Long Term Schedule</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./assets/Logo.svg" alt=""> MERATUS <b>LINER</b></a>
            <btn class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </btn>
            <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="btn" data-bs-toggle="dropdown">
                            Agency
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Agency Jakarta</a></li>
                            <li><a class="dropdown-item" href="#">Agency Surabaya</a></li>
                            <li><a class="dropdown-item" href="#">Agency Bandung</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="btn" data-bs-toggle="dropdown">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item " href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row w-100">
            <div class="nav-left col-2">
                <nav class="nav flex-column vh-100 d-flex">
                    <!-- <div id="treeview"></div> -->
                    <ul class="navbar-nav flex-column">
                        <?php include '../../nav-leftLTS2.php'; ?>
                    </ul>
                    <!-- <a class="nav-link" href="#"><img src="./assets/element-2 1.svg" alt=""> Voyage Proforma</a> -->
                </nav>
            </div>
            <div class="col-10">
                <div class="page-title d-flex justify-content-between m-3">
                    <h3>Long Term Schedule</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">MPSS</li>
                            <li class="breadcrumb-item active">Long Term Schedule</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="text lts-form-container m-3"> -->
                <div class="row g-3 align-items-center m-3">
                    <div class="col-auto">
                        <label for="expression" class="col-form-label"><b>Expression</b></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="expression" class="form-control" disabled>
                    </div>
                </div>
                <div class="cancel-button m-3">
                    <a href="longTermCreate-InsertCall.php" class="btn btn-modify">Cancel</a>
                </div>
                <div class="row g-3 m-3">
                    <!-- <div class="col-10"> -->
                    <div class="card">
                        <div class="card-header">
                            <label for=""><b>Variables</b></label>
                        </div>
                        <div class="card-body d-flex">
                            <div class="form-check me-4">
                                <label class="form-check-label">D</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">S1</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">S2</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">S3</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">S4</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">S5</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">Y1</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">Y2</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">Y3</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">Y4</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">M1</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">M2</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">W1</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                            <div class="form-check me-4">
                                <label class="form-check-label">W2</label>
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="card-footer">
                            Legend : D = direction, S = sequence no, Y = Year, M = Month, W = Week
                        </div>
                    </div>

                    <!-- </div> -->
                </div>
                <div class="row g-3 m-3">
                    <div class="card">
                        <div class="card-header">
                            <b>Constanta</b>
                        </div>
                        <div class="card-body">
                            <div class="row-constanta d-flex">
                                <div class="form-check me-4">
                                    <label class="form-check-label">0</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">1</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">2</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">3</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">4</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">5</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">6</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">7</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">8</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">9</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="row-constanta d-flex mt-3">
                                <div class="form-check me-4">
                                    <label class="form-check-label">A</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">B</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">C</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">D</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">E</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">F</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">G</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">H</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">I</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">J</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="row-constanta d-flex mt-3">
                                <div class="form-check me-4">
                                    <label class="form-check-label">K</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">L</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">M</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">N</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">O</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">P</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">Q</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">R</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">S</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">T</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="row-constanta d-flex mt-3">
                                <div class="form-check me-4">
                                    <label class="form-check-label">U</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">V</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">W</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">X</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">Y</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">Z</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">-</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">@</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">/</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="form-check me-4">
                                    <label class="form-check-label">\</label>
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row g-3 m-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row-last d-flex mt-3">
                                <div class="col-2">
                                    <label class="form-check-label"><b>Service Prefix Code</b></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-control" type="text" disabled>
                                </div>
                            </div>
                            <div class="row-last d-flex mt-4">
                                <div class="d-block me-3">
                                    <b>Choose Increment Method:</b>
                                </div>
                                <div class="col-3 me-3">
                                    <div class="form-check me-4">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Increment at home base
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    </div>
                                    <div class="form-check me-4">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Increment at turn port
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    </div>
                                    <div class="form-check me-4">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Increment at each port of cal
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    </div>
                                </div>
                                <div class="col-2 mt-2">
                                    <label for=""><b>Increment Value</b></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 d-flex justify-content-end m-5">
                    <a href="longTermCreate-InsertCall.php" class="btn me-4" data="Save"></a>
                    <a href="longTermCreate-InsertCall.php" class="btn btn-modify">Save as default</a>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</body>

</html>