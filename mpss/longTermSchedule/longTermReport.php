<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/ltsStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- KENDO UI SCRIPT -->
    <link href="https://kendo.cdn.telerik.com/2022.3.913/styles/kendo.default-ocean-blue.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.913/js/kendo.all.min.js"></script>
    <title>New Liner - Long Term Schedule</title>
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
                    <ul class="navbar-nav flex-column">
                        <?php include '../../nav-leftLTS2.php'; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <div class="page-title d-flex justify-content-between m-3">
                    <h3>Long Term Schedule Report and Approval</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">MPSS</li>
                            <li class="breadcrumb-item active">Long Term Schedule</li>
                        </ol>
                    </nav>
                </div>


                <div class="list m-3">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="tr-1">
                                    <th class="first-th" scope="col">LTS Number</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Effective Date</th>
                                    <th scope="col">Expiry Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Last Updated Date</th>
                                    <!-- <th scope="col">Last Updated by</th> -->
                                    <td class="last-th" style="position: sticky; right: 0;" scope="col">Select</td>
                                </tr>
                                <tr class="tr-2">
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <td scope="col">
                                        <select name="" id="">
                                            <option value="all">Select</option>
                                            <!-- <option>Draft</option> -->
                                            <!-- <option>Publish</option> -->
                                            <option>Waiting for Approval</option>
                                            <!-- <option>Final</option> -->
                                            <option>Confirmed</option>
                                            <option>Cancelled</option>
                                        </select>
                                    </td>

                                    <th class="th-1" scope="col"><input type="text" placeholder="Search"></th>
                                    <td scope="col" class="action-btn"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SBKTS30122201</td>
                                    <td>SBKTS</td>
                                    <td>Surabaya-Belawan-Kuala Tanjung-Surabaya</td>
                                    <td>01/06/2022</td>
                                    <td>30/12/2022</td>
                                    <td>Waiting Approval</td>
                                    <td>27/10/2022</td>
                                    <td class="action-btn bg-light text-center">
                                        <a href="longTermEdit.php" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="./assets/fluent-mdl2_entry-view (1).svg" alt=""></a>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>SBKTS30122202</td>
                                    <td>SBKTS</td>
                                    <td>Surabaya-Belawan-Kuala Tanjung-Surabaya</td>
                                    <td>01/06/2022</td>
                                    <td>30/12/2022</td>
                                    <td>Publish</td>
                                    <td>30/10/2022</td>
                                    <td class="action-btn bg-light text-center">
                                        <a href=""><img src="./assets/akar-icons_edit.svg" alt=""></a>
                                    </td>
                                </tr> -->


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL POPUP -->
    <div class="modal fade" id="exampleModal" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <!-- <div class="sticky-header" id="sticky-header"> -->
                <nav>
                    <div class="modal-header">

                        <h1 class="modal-title fs-5" id="exampleModalLabel">Long Term Schedule Report and Approval</h1>
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
                                <!-- <a class="btn" role="btn" href="proformaReport2.php" data="Confirm"></a> -->
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#confirmModal" data="Confirm">

                                </button>
                            </div>
                            <div class="col-6">
                                <!-- <a class="btn btn-reject" role="btn" href="proformaReport3.php" data="Reject"></a> -->
                                <button type="button" class="btn btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal" data="Reject">

                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="modal-body">

                    <div class="card m-4">
                        <div class="card-body">
                            <div class=" row">
                                <label class="col-sm-2 col-form-label"><b>Service</b></label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" value="Jakarta-Kidjang-Perawang-Jakarta">
                                </div>
                                <!-- <div class="col-5"> -->
                                <label class="col-sm-2 form-label mt-2"><b>Current Status</b></label>
                                <!-- <br> -->
                                <div class="status col-sm-2 mt-2">
                                    <h5>
                                        <span class="badge rounded-pill text-bg-warning">Waiting for Approval</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-2">
                                    <label for="datepicker"><b>Effective Date</b></label>
                                </div>
                                <div class="col-sm-3 me-5">
                                    <input id="ltsStart-datePicker" class="text-dark" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label for="datepicker"><b>Expiry Date</b></label>
                                </div>
                                <div class="col-sm-3">
                                    <input id="ltsEnd-datePicker" class="text-dark" readonly>
                                </div>
                            </div>

                        </div>
                    </div>

                    <section class="summary m-3">
                        <div class="details m-3">
                            <!-- <h5 style="margin-bottom: 20px">VOYAGE DETAILS & STEVEDORING</h5> -->
                            <table class="table table-bordered" style="margin: 0 !important">
                                <thead class="table-primary">
                                    <!-- <tr> -->
                                        <th>Vessel</th>
                                        <th>Operator</th>
                                        <th>Vessel Code</th>
                                        <th>Voyage</th>
                                        <th>IDJKT <br> ETA</th>
                                        <th>IDKID <br> ETA</th>
                                        <th>IDPWG <br> ETA</th>
                                        <th>IDJKT <br> ETA</th>
                                        <th>Remarks</th>
                                        <th>TRV / Length</th>
                                    <!-- </tr> -->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-primary">Meratus Kariangau</td>
                                        <td><b>MRT</b></td>
                                        <td><b>MKI</b></td>
                                        <td>KP018NS</td>
                                        <td>15/08/22 Mon</td>
                                        <td>19/08/22 Fri</td>
                                        <td>22/08/22 Mon</td>
                                        <td>29/08/22 Mon</td>
                                        <td></td>
                                        <td>14 days</td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Meratus Kariangau</td>
                                        <td><b>MRT</b></td>
                                        <td><b>MKI</b></td>
                                        <td>KP018NS</td>
                                        <td>15/08/22 Mon</td>
                                        <td>19/08/22 Fri</td>
                                        <td>22/08/22 Mon</td>
                                        <td>29/08/22 Mon</td>
                                        <td></td>
                                        <td>14 days</td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Meratus Kariangau</td>
                                        <td><b>MRT</b></td>
                                        <td><b>MKI</b></td>
                                        <td>KP018NS</td>
                                        <td>15/08/22 Mon</td>
                                        <td>19/08/22 Fri</td>
                                        <td>22/08/22 Mon</td>
                                        <td>29/08/22 Mon</td>
                                        <td></td>
                                        <td>14 days</td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Meratus Kariangau</td>
                                        <td><b>MRT</b></td>
                                        <td><b>MKI</b></td>
                                        <td>KP018NS</td>
                                        <td>15/08/22 Mon</td>
                                        <td>19/08/22 Fri</td>
                                        <td>22/08/22 Mon</td>
                                        <td>29/08/22 Mon</td>
                                        <td></td>
                                        <td>14 days</td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Meratus Kariangau</td>
                                        <td><b>MRT</b></td>
                                        <td><b>MKI</b></td>
                                        <td>KP018NS</td>
                                        <td>15/08/22 Mon</td>
                                        <td>19/08/22 Fri</td>
                                        <td>22/08/22 Mon</td>
                                        <td>29/08/22 Mon</td>
                                        <td></td>
                                        <td>14 days</td>
                                    </tr>
                                </tbody>
                            </table>
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

    <!-- MODAL CONFIRM -->

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmModalLabel">Confirm Long Term Schedule</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Are you sure you want to <b>confirm</b> this Long Term Schedule?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal" data="No"></button>
                    <!-- <button type="button" class="btn" data="Yes"></button> -->

                    <a class="btn" role="btn" href="longTermReport2.php" data="Yes"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL REJECT -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="rejectModalLabel">Reject Long Term Schedule</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Are you sure you want to <b>reject</b> this Long Term Schedule?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal" data="No"></button>
                    <!-- <button type="button" class="btn" data="Yes"></button> -->

                    <a class="btn" role="btn" href="longTermReport3.php" data="Yes"></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script>
        $("#ltsStart-datePicker").kendoDatePicker({
            value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#ltsEnd-datePicker").kendoDatePicker({
            value: new Date(2022, 11, 30),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
    </script>

</body>

</html>