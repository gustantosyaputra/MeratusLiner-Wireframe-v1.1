<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/22.1.5/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/22.1.5/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/22.1.5/js/dx.all.js"></script>
    <!-- <script src="./assets/js/proformaEditData.js"></script> -->
    <link rel="stylesheet" type="text/css" href="./assets/css/proformaEditStyle.css" />
    <!-- <script src="./assets/js/proformaEdit.js"></script> -->
    <link rel="shortcut icon" href="your_image_path_and_name.ico" />
    <title>New Liner - Voyage Proforma</title>
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
                                CREATE PROFORMA
                            </btn>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="proforma" class="col-form-label">Voyage Proforma Number</label>
                                        <input type="text" id="proforma" class="form-control" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="service" class="col-form-label">Service *</label>
                                        <select name="service" id="service" class="form-select">
                                            <option value="" selected disabled>Select Service</option>
                                            <option value="">JBSPJ - JKT-BPN-SRI-PTL-JKT</option>
                                            <option value="">JBSPS - JKT-BPN-SRI-PTL-SBY</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label for="status" class="form-label">Current Status</label>
                                        <br>
                                        <h5>
                                        <span class="badge badge-pill badge-warning">Draft</span>
                                        </h5>
                                    </div>
                                    <div class="col-2">
                                        <b>Notes:</b>
                                        <br>
                                        * Mandatory Fields
                                        <br>
                                        # Computed Fields
                                    </div>
                                    <div class="col-10">
                                        <a class="btn" role="btn" href="proforma2Create2.php" data="Create New Proforma"></a>
                                        <btn type="button" class="btn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data="Create from Existing Proforma"></btn>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="max-width: 1520px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create from Existing Voyage Proforma</h1>
                    <btn type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></btn>
                </div>
                <div class="modal-body">
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
                                        <th scope="col">Last Updated Date</th>
                                        <th scope="col">Last Updated by</th>
                                        <th scope="col">Effective Date</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Created by</th>
                                        <th scope="col">Created Date</th>
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
                                                <option>Draft</option>
                                                <option>Waiting for Approval</option>
                                                <option>Final</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
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
                                        <td>Draft</td>
                                        <td></td>
                                        <td></td>
                                        <td>25-Sep-22</td>
                                        <td>Jonan</td>
                                        <td>01-Sep-22</td>
                                        <td>Jonan</td>
                                        <td class="action-btn bg-light">
                                            <div class="input-container">
                                                <input onclick="undisable()" type="radio" name="radio" id="select1">
                                                <div class="radio-tile">
                                                    <label for="select1">Select</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JBSPS</td>
                                        <td>JKT-BPN-SRI-PTL-SBY</td>
                                        <td>JBSPS002</td>
                                        <td>13,0 days</td>
                                        <td>Draft</td>
                                        <td></td>
                                        <td></td>
                                        <td>27-Oct-22</td>
                                        <td>Konan</td>
                                        <td>01-Sep-22</td>
                                        <td>Faril</td>
                                        <td class="action-btn bg-light">
                                            <div class="input-container">
                                                <input onclick="undisable()" type="radio" name="radio" id="select2">
                                                <div class="radio-tile">
                                                    <label for="select2">Select</label>
                                                </div>
                                            </div>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <btn type="button" class="btn" data-bs-dismiss="modal" data="Close"></btn>
                    <!-- <button class="btn" data="Apply" id="applyBtn" disabled> -->
                    <a class="btn disabled" href="proforma2Edit2.php" id="applyBtn" data="Apply"></a>
                    <!-- </button> -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function undisable() {
            // let btn = document.querySelectorAll(".btn")
            // btn.setAttribute('aria-disabled', 'false');
            $("#applyBtn").removeClass('disabled');

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>