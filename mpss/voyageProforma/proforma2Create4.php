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
    <script src="./assets/js/proforma2CreateData2.js"></script>
    <script src="./assets/js/proforma2Create3.js"></script>
    <script src="./assets/js/proforma2Preview2.js"></script>
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
                                HEADER
                            </btn>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="proforma" class="col-form-label">Voyage Proforma Number</label>
                                        <input type="text" id="proforma" class="form-control" placeholder="JBSPJ001" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="service-code" class="col-form-label">Service Code</label>
                                        <input type="text" id="service-code" class="form-control" placeholder="JBSPJ" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="service-name" class="col-form-label">Service Name</label>
                                        <input type="text" id="service-name" class="form-control" placeholder="JKT-BPN-SRI-PTL-JKT" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="trv" class="col-form-label">TRV <b>#</b></label>
                                        <input type="text" id="trv" class="form-control" placeholder="14.0" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="butterfly" class="form-label mt-1">Butterfly <b>*</b></label>
                                        <select id="butterfly" class="form-select">
                                            <option selected>No</option>
                                            <option>Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label for="copy" class="form-label">Current Status</label>
                                        <br>
                                        <h5>
                                            <span class="badge rounded-pill text-bg-warning">Waiting for Approval</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="status" class="form-label mt-2">Change Status to</label>
                                        <select id="status" class="form-select">
                                            <option selected disabled>Select Status</option>
                                            <!-- <option>Draft</option> -->
                                            <!-- <option>Waiting for Approval</option> -->
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
                                    <div class="col-10 mt-4">
                                        <a class="btn m-1" role="btn" href="#" data="Save & Compute"></a>
                                        <btn type="button" class="btn m-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data="Preview"></btn>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content ms-3 me-3">
                    <!-- <nav class="nav flex-column mt-3 ms-1 me-1">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <btn class="nav-link flex-sm-fill active" id="nav-vesselInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-vesselInfo" type="button" role="tab" aria-controls="nav-vesselInfo" aria-selected="true"><b>Vessel Info</b></btn>
                            <btn class="nav-link flex-sm-fill" id="nav-proformaCreation-tab" data-bs-toggle="tab" data-bs-target="#nav-proformaCreation" type="button" role="tab" aria-controls="nav-proformaCreation" aria-selected="true"><b>Proforma Creation</b></btn>
                            <btn class="nav-link flex-sm-fill" id="nav-details-tab" data-bs-toggle="tab" data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-details" aria-selected="true"><b>Voyage Details & Stevedoring</b></btn>
                        </div>
                    </nav> -->
                    <ul class="nav nav-tabs nav-pills nav-justified" id="myTab" role="tablist">
                        <li class="nav-item m-3" role="presentation">
                            <btn class="nav-btn nav-link active" id="vesselInfo-tab" data-bs-toggle="tab" data-bs-target="#vesselInfo-tab-pane" type="button" role="tab"><b>Vessel Info</b></btn>
                        </li>
                        <li class="nav-item m-3" role="presentation">
                            <btn class="nav-btn nav-link" id="proformaCreation-tab" data-bs-toggle="tab" data-bs-target="#proformaCreation-tab-pane" type="button" role="tab"><b>Proforma Creation</b></btn>
                        </li>
                        <li class="nav-item m-3" role="presentation">
                            <btn class="nav-btn nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab"><b>Voyage Details & Stevedoring</b></btn>
                        </li>
                    </ul>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="vesselInfo-tab-pane" role="tabpanel" aria-labelledby="vesselInfo-tab" tabindex="-1">
                                    <div class="list m-3">
                                        <div class="vesselInfo-container m-3">
                                            <div id="vesselInfoContainer"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="proformaCreation-tab-pane" role="tabpanel" aria-labelledby="proformaCreation-tab" tabindex="0">
                                    <div class="list m-3">
                                        <div class="proformaCreation-container m-3">
                                            <div id="proformaCreationContainer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="1">
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <nav>
                    <div class="modal-header">

                        <h1 class="modal-title fs-5" id="exampleModalLabel">Preview</h1>
                        <btn type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></btn>


                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Preview</h1>
                                <btn type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></btn> -->
                    </div>
                    <div class="header-btn">
                        <div class="row me-2">
                            <!-- <div class="col-6">
                                    <a class="btn" role="btn" href="#" data="Save as Draft"></a>
                                </div> -->
                            <div class="col-12">
                                <a class="btn" role="btn" data="Export to Excel"></a>
                            </div>
                            <!-- <div class="col-2">
                                    <a class="btn" role="btn" href="proformaReport2.php" data="Confirm"></a>
                                </div> -->
                        </div>
                        <div class="row me-2">
                            <!-- <div class="col-6">
                                    <a class="btn" role="btn" href="#" data="Save as Draft"></a>
                                </div> -->
                            <div class="col-12">
                                <!-- <a class="btn" role="btn" href="proforma2Create4.php" data="Save & Submit"></a> -->
                            </div>
                            <!-- <div class="col-2">
                                    <a class="btn" role="btn" href="proformaReport2.php" data="Confirm"></a>
                                </div> -->
                        </div>

                    </div>
                </nav>
                <div class="modal-body">

                    <div class="card m-4">
                        <div class="card-body">
                            <div class=" row">
                                <label for="staticEmail" class="col-sm-2 col-form-label"><b>Service</b></label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" value="JBSPJ - JKT-BPN-SRI-PTL-JKT">
                                </div>
                                <!-- <div class="col-5"> -->
                                <label class="col-sm-2 m-2 form-label"><b>Current Status</b></label>
                                <!-- <br> -->
                                <div class="status col-sm-2 m-2">
                                    <h5>
                                        <span class="badge rounded-pill text-bg-warning">Waiting for Approval</span>
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