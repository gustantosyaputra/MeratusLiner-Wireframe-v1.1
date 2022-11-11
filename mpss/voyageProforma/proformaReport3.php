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
    <script src="./assets/js/proforma2EditData2.js"></script>
    <script src="./assets/js/proforma2Preview2.js"></script>
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
                    <h3>Voyage Proforma Report and Approval</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">MPSS</li>
                            <li class="breadcrumb-item active">Voyage Proforma</li>
                        </ol>
                    </nav>
                </div>
                <div class="list m-3">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>

                                <tr class="tr-1">
                                    <th class="first-th" scope="col">Service Code</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Voyage Proforma Number</th>
                                    <th scope="col">TRV</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Effective Date</th>
                                    <th scope="col">Expiry Date</th>
                                    <th scope="col">Last Updated Date</th>
                                    <th scope="col">Last Updated by</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Created by</th>
                                    <td class="last-th" scope="col"></td>
                                </tr>
                                <tr class="tr-2">
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <td scope="col">
                                        <select name="" id="">
                                            <option value="all">Select</option>
                                            <option>Waiting for Approval</option>
                                            <option>Confirmed</option>
                                            <option>Rejected</option>
                                        </select>
                                    </td>

                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <td scope="col"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>JBSPJ</td>
                                    <td>JKT-BPN-SRI-PTL-JKT</td>
                                    <td>JBSPJ001</td>
                                    <td>14,0 days</td>
                                    <td>Rejected</td>
                                    <td></td>
                                    <td></td>
                                    <td>25-Sep-22</td>
                                    <td>Jonan</td>
                                    <td>01-Sep-22</td>
                                    <td>Jonan</td>
                                    <td class="action-btn bg-light">
                                        <btn type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none; background: none;"><img src="./assets/fluent-mdl2_entry-view (1).svg"></btn>
                                    </td>
                                </tr>
                                <tr>
                                    <td>JBSPS</td>
                                    <td>JKT-BPN-SRI-PTL-SBY</td>
                                    <td>JBSPS002</td>
                                    <td>13,0 days</td>
                                    <td>Waiting for Approval</td>
                                    <td></td>
                                    <td></td>
                                    <td>27-Oct-22</td>
                                    <td>Konan</td>
                                    <td>01-Sep-22</td>
                                    <td>Faril</td>
                                    <td class="action-btn bg-light">
                                        <btn type="button" style="border: none;  background: none;"><img src="./assets/fluent-mdl2_entry-view (1).svg"></btn>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


        <!-- MODAL POPUP -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <!-- <div class="sticky-header" id="sticky-header"> -->
                    <nav>
                        <div class="modal-header">

                            <h1 class="modal-title fs-5" id="exampleModalLabel">Voyage Proforma Report and Approval</h1>
                            <btn type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></btn>


                            <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Preview</h1>
                                <btn type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></btn> -->
                        </div>
                        <div class="header-btn">
                            <div class="row me-2">
                                <div class="col-4">
                                    <!-- <a class="btn" role="btn" href="#" data="Print"></a> -->
                                </div>
                                <div class="col-8">
                                    <!-- <a class="btn" role="btn" href="#" data="Export to PDF"></a> -->
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn disabled" role="btn" href="#" data="Confirm"></a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-reject disabled" role="btn" href="#" data="Reject"></a>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-3">
                                    <a class="btn" role="btn" href="#" data="Print"></a>
                                </div>
                                <div class="col-5">
                                    <a class="btn" role="btn" href="#" data="Export to PDF"></a>
                                </div>
                                <div class="col-2">
                                    <a class="btn disabled" role="btn" href="#" data="Confirm" disabled></a>
                                </div>

                            </div> -->
                        </div>
                    </nav>
                    <div class="modal-body">

                        <div class="card m-4">
                            <div class="card-body">
                                <div class=" row">
                                    <label class="col-sm-1 col-form-label"><b>Service</b></label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" value="JBSPJ - JKT-BPN-SRI-PTL-JKT">
                                    </div>
                                    <label class="col-sm-1 col-form-label"><b>TRV</b></label>
                                    <div class="col-sm-2">
                                        <input type="text" readonly class="form-control-plaintext" value="14,0 days">
                                    </div>
                                    <!-- <div class="col-5"> -->
                                    <label class="col-sm-2 form-label mt-2"><b>Current Status</b></label>
                                    <!-- <br> -->
                                    <div class="status col-sm-2 mt-2">
                                        <h5>
                                            <span class="badge rounded-pill text-bg-danger">Rejected</span>
                                        </h5>
                                    </div>
                                    <!-- </div> -->

                                </div>

                            </div>
                        </div>


                        <div class="list m-3">
                            <div class="vesselInfo-container m-3">
                                <h5 style="margin-bottom: 20px">VESSEL INFO</h5>
                                <div id="vesselInfoPreviewContainer"></div>
                            </div>
                        </div>
                        <div class="list m-3">
                            <div class="proformaCreation-container m-3">
                                <h5 style="margin-bottom: 20px">PROFORMA CREATION</h5>
                                <div id="proformaCreationPreviewContainer"></div>
                            </div>
                        </div>
                        <section class="summary m-3">
                            <div class="details m-3">
                                <h5 style="margin-bottom: 20px">VOYAGE DETAILS & STEVEDORING</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Voyage Details
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-light">
                                                    <thead>
                                                        <tr class="table-light">
                                                            <th scope="col">Voyage #</th>
                                                            <td></td>
                                                            <td></td>
                                                            <td scope="col"><b>335.12</b></td>
                                                            <td scope="col">hours</td>
                                                            <td scope="col">or</td>
                                                            <td scope="col"><b>14.0</b></td>
                                                            <td scope="col">days</td>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <btn class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" disabled>
                                                                More details
                                                            </btn>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive">
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
                                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="9.5" disabled></td>
                                                                            <td scope="col"><b>4.8</b></td>
                                                                            <td scope="col">hours</td>
                                                                            <td scope="col">or</td>
                                                                            <td scope="col"><b>0.2</b></td>
                                                                            <td scope="col">days</td>
                                                                        </tr>
                                                                        <tr class="table-light">
                                                                            <th scope="col"></th>
                                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="10" disabled></td>
                                                                            <td scope="col"><b>9.0</b></td>
                                                                            <td scope="col">hours</td>
                                                                            <td scope="col">or</td>
                                                                            <td scope="col"><b>0.4</b></td>
                                                                            <td scope="col">days</td>
                                                                        </tr>
                                                                        <tr class="table-light">
                                                                            <th scope="col"></th>
                                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="10.5" disabled></td>
                                                                            <td scope="col"><b>12.8</b></td>
                                                                            <td scope="col">hours</td>
                                                                            <td scope="col">or</td>
                                                                            <td scope="col"><b>0.5</b></td>
                                                                            <td scope="col">days</td>
                                                                        </tr>
                                                                        <tr class="table-light">
                                                                            <th scope="col"></th>
                                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="11.5" disabled></td>
                                                                            <td scope="col"><b>19.3</b></td>
                                                                            <td scope="col">hours</td>
                                                                            <td scope="col">or</td>
                                                                            <td scope="col"><b>0.8</b></td>
                                                                            <td scope="col">days</td>
                                                                        </tr>
                                                                        <tr class="table-light">
                                                                            <th scope="col"></th>
                                                                            <td scope="col"><input style="text-align: right; padding: 6px 6px; border: 0.1px solid #c8c8c8; border-radius: 0.375rem; background: white;" placeholder="12" disabled></td>
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
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Stevedoring
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-light">
                                                    <thead>
                                                        <tr class="table-light">
                                                            <th scope="col">Moves #</th>
                                                            <th scope="col">1590.0</th>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-light">
                                                            <th scope="col">Ops prod #</th>
                                                            <th scope="col">26.9</th>
                                                        </tr>
                                                        <tr class="table-light">
                                                            <th scope="col">Berth prod #</th>
                                                            <th scope="col">19.4</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="modal-footer">
                        <btn type="button" class="btn" data-bs-dismiss="modal" data="Close"></btn>
                        <!-- <a class="btn" role="btn" href="proformaEdit2.php" data="Apply"></a> -->
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>