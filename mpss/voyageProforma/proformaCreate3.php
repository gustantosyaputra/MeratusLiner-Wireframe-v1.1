<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/22.1.5/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/22.1.5/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/22.1.5/js/dx.all.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/proformaEditStyle.css" />
    <script src="./assets/js/proformaCreateData.js"></script>
    <script src="./assets/js/proformaCreate2.js"></script>
    <link rel="shortcut icon" href="your_image_path_and_name.ico" />
    <title>New Liner - Voyage Proforma</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./assets/Logo.svg" alt=""> MERATUS <b> LINER</b></a>
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
                        <?php include '../../nav-leftProforma.php'; ?>
                    </ul>
                    <!-- <a class="nav-link" href="#"><img src="./assets/element-2 1.svg" alt=""> Voyage Proforma</a> -->
                </nav>
            </div>
            <div class="col-10">
                <div class="page-title d-flex justify-content-between m-3">
                    <h3>Voyage Proforma</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">MPSS</li>
                            <li class="breadcrumb-item active">Voyage Proforma</li>
                        </ol>
                    </nav>
                </div>

                <div class="accordion m-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <btn class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                EDIT PROFORMA
                            </btn>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="proforma" class="disabled-label col-form-label">Voyage Proforma Number</label>
                                        <input type="text" id="proforma" class="form-control" placeholder="JBSPJ001" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="service-code" class="disabled-label col-form-label">Service Code</label>
                                        <input type="text" id="service-code" class="form-control" placeholder="JBSPJ" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="service-name" class="disabled-label col-form-label">Service Name</label>
                                        <input type="text" id="service-name" class="form-control" placeholder="JKT-BPN-SRI-PTL-JKT" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="trv" class="disabled-label col-form-label">TRV <b>#</b></label>
                                        <input type="text" id="trv" class="form-control" placeholder="14.0" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="butterfly" class="form-label mt-2">Butterfly <b>*</b></label>
                                        <select id="butterfly" class="form-select">
                                            <option selected>No</option>
                                            <option>Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label for="copy" class="form-label">Current Status</label>
                                        <br>
                                        <h5>
                                            <span class="badge rounded-pill text-bg-secondary">Draft</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="status" class="form-label mt-2">Change Status to</label>
                                        <select id="status" class="form-select">
                                            <option selected disabled>Select Status</option>
                                            <!-- <option>Draft</option> -->
                                            <option>Waiting for Approval</option>
                                            <!-- <option>Final</option>
                                            <option>Used</option> -->
                                            <option>Cancelled</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <b>Notes:</b>
                                        <br>
                                        * Mandatory Fields
                                        <br>
                                        # Computed Fields
                                    </div>
                                    <div class="col-3">
                                        <a class="btn btn-success m-3" role="btn" href="proformaEdit2.php" data="Save & Compute"></a>
                                        <!-- <a class="btn btn-primary" role="btn" href="proformaEdit2.php"><img src="./assets/ic_outline-calculate.svg"> Compute</a> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <btn class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                VESSEL INFO
                            </btn>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <div class="list m-3">
                                    <div class="vesselInfo-container">
                                        <div id="vesselInfoContainer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <btn class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                PROFORMA CREATION
                            </btn>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <div class="list m-3">
                                    <div class="proformaCreation-container">
                                        <div id="proformaCreationContainer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="summary">
                        <h5 style="margin-bottom: 20px">VOYAGE DETAILS & STEVEDORING</h5>
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-header">
                                        Voyage Details
                                    </div>
                                    <!-- <div class="card-body">
                                    <table class="table table-light">
                                        <thead>
                                            <tr class="table-light">
                                                <th scope="col">Voyage #</th>
                                                <td></td>
                                                <td scope="col"><b>335.12</b></td>
                                                <td scope="col">hours</td>
                                                <td scope="col">or</td>
                                                <td scope="col"><b>14.0</b></td>
                                                <td scope="col">days</td>
                                            </tr>
                                        </thead>
                                    </table>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <btn class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                More details
                                            </btn>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                                            <div class="accordion-body" style="padding:0 !important">
                                                <table class="table table-light" style="margin: 0 !important">
                                                    <tbody>
                                                        <tr class="table-light">
                                                            <th scope="col">Berth #</th>
                                                            <td></td>
                                                            <td scope="col"><b>82</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>3.4</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Man time #</th>
                                                            <td></td>
                                                            <td scope="col"><b>22</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.9</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">At sea #</th>
                                                            <td></td>
                                                            <td scope="col"><b>231.0</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>9.6</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Canal #</th>
                                                            <td></td>
                                                            <td scope="col"><b>0</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.0</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Idle #</th>
                                                            <td></td>
                                                            <td scope="col"><b>23.0</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>1.0</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Distance #</th>
                                                            <td></td>
                                                            <td scope="col"><b>2104</b></td>
                                                            <td scope="col">hours</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Man dist #</th>
                                                            <td></td>
                                                            <td scope="col"><b>0</b></td>
                                                            <td scope="col">miles</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Canal dist #</th>
                                                            <td></td>
                                                            <td scope="col"><b>0</b></td>
                                                            <td scope="col">miles</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Sea speed #</th>
                                                            <td></td>
                                                            <td scope="col"><b>9.1</b></td>
                                                            <td scope="col">Knots</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Reserve at #</th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="9.5"></td>
                                                            <td scope="col"><b>4.8</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.2</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="10"></td>
                                                            <td scope="col"><b>9.0</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.4</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="10.5"></td>
                                                            <td scope="col"><b>12.8</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.5</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="11.5"></td>
                                                            <td scope="col"><b>19.3</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.8</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="12"></td>
                                                            <td scope="col"><b>22.2</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>0.9</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                    <div class="card-body">
                                        <table class="table table-light">
                                            <thead>
                                                <tr class="table-light">
                                                    <th width="30%" class="reserve text-center" scope="col">Reserve at</th>
                                                    <td width="40%" scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="9.5"></td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="col"></th>
                                                    <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="10"></td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="col"></th>
                                                    <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="10.5"></td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="col"></th>
                                                    <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="11.5"></td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="col"></th>
                                                    <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="12"></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-header">
                                        Stevedoring
                                    </div>
                                    <div class="card-body">
                                        <strong>No Data</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <btn class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                VOYAGE DETAILS & STEVEDORING
                            </btn>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                            <div class="accordion-body m-3">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Voyage Details
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-light">
                                                    <thead>
                                                        <tr class="table-light">
                                                            <th width="30%" class="reserve text-center" scope="col">Reserve at *</th>
                                                            <td width="40%" scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;"></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;"></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;"></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;"></td>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col"></th>
                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;"></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Stevedoring
                                            </div>
                                            <div class="card-body">
                                                <strong>No Data</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>