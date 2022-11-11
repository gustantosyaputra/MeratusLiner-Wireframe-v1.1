<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                    <h3>Long Term Schedule</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">MPSS</li>
                            <li class="breadcrumb-item active">Long Term Schedule</li>
                        </ol>
                    </nav>
                </div>
                <div class="edit-lts m-3 py-3">
                    <div class="card">
                        <div class="card-header" style="color: dodgerblue;"><b>Edit Long Term Schedule</b></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <label for="lts-no" class="col-form-label">LTS Number</label>
                                    <input type="text" id="lts-no" class="form-control" value="SBKTS30122201">
                                </div>
                                <div class="col-3">
                                    <label for="serv-code" class="col-form-label">Service Code</label>
                                    <!-- <div class="d-flex"> -->
                                    <input type="text" id="serv-code" class="form-control me-3" value="SBKTS">
                                    <!-- </div> -->
                                </div>
                                <div class="col-4">
                                    <label for="serv-name" class="col-form-label disabled-label">Service Name</label>
                                    <input type="text" readonly class="form-control" value="Surabaya-Belawan-Kuala Tanjung-Surabaya" disabled>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="lts-start-end col-3">
                                    <label for="lts-start" class="col-form-label">LTS Effective Date</label>
                                    <!-- <input id="lts-start"> -->
                                    <input id="ltsStart-datePicker" disabled>
                                    <input id="mdssEnd-datePicker">
                                </div>
                                <div class="lts-start-end col-3">
                                    <label for="lts-end" class="col-form-label">LTS Expiry Date</label>
                                    <!-- <input id="lts-end"> -->
                                    <input id="ltsEnd-datePicker">
                                </div>
                                <div class="mdss-start-end col-3">
                                    <label for="mdss-start" class="col-form-label">Last MDSS Effective Date</label>
                                    <!-- <input id="lts-end"> -->
                                    <input id="mdssStart-datePicker">
                                </div>
                                <div class="mdss-start-end col-3">
                                    <label for="mdss-end" class="col-form-label">Last MDSS Expiry Date</label>
                                    <!-- <input id="lts-end"> -->
                                    <input id="mdssEnd2-datePicker">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-3 ms-1 mt-4 py-1">
                                        <a href="#" type="button" class="btn w-50" data="Submit"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="add-vessel-table-lts mt-5 d-flex">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody id="table_body" style="position: relative; display: flex;">
                                            <tr style="border: 2px solid #F2F2F2; border-radius: 10px; margin:2px;">
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100">
                                                        <label><b>Proforma Number</b></label>
                                                    </div>
                                                    <div class="right-td w-100">
                                                        <input type="text" value="SBKTS01" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100">
                                                        <label for=""><b>Vessel Code</b></label>
                                                    </div>
                                                    <div class="right-td w-100 d-flex">
                                                        <input type="text" value="MRO" class="form-control" id="vesselCode">
                                                        <span style="display: inline-flex; margin-left: 20px;">
                                                            <input onclick="disableTBC('disableTBC')" type="checkbox" value="" id="disableTBC">
                                                            <label class="ms-2 mt-2">TBC</label>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100 me-5">
                                                        <label for=""><b>Vessel Effective Date</b></label>
                                                    </div>
                                                    <div class="lts-start-end w-100">
                                                        <!-- <input id="start-date"> -->
                                                        <input id="vStart-datePicker">
                                                    </div>
                                                </td>
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100 me-5">
                                                        <label for=""><b>Vessel Expiry Date</b></label>
                                                    </div>
                                                    <div class="lts-start-end w-100">
                                                        <input id="vEnd-datePicker">
                                                    </div>
                                                </td>
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100">
                                                        <label for=""><b>Start Voy. Number</b></label>
                                                    </div>
                                                    <div class="right-td w-100">
                                                        <input type="number" value="27" class="form-control" id="start-voy-num">
                                                    </div>
                                                </td>
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100">
                                                        <label for="" class="me-2"><b>Voyage Format</b></label>
                                                    </div>
                                                    <div class="right-td w-100">
                                                        <select class="form-select" name="" id="">
                                                            <option value="" disabled selected>Select</option>
                                                            <option value="">Sequence</option>
                                                            <option value="">Normal</option>
                                                            <option value="">Random</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="td-1 d-flex m-3">
                                                    <div class="left-td w-100 me-5" style="width: 50%;">
                                                        <b>Voyage Formula</b>
                                                    </div>
                                                    <div class="right-td w-100 d-flex" style="width: 50%;">
                                                        <span style="display:inline-flex; align-items: center;">
                                                            <label class="me-3">Default</label>
                                                            <input onclick="disableBtn('defaultCB')" type="checkbox" value="" id="defaultCB" class="me-3" checked>
                                                        </span>
                                                        <a href="longTermCreate-modifyFormula.php" type="button" class="btn btn-modify disabled" id="modifyBtn">Modify</a>
                                                    </div>
                                                </td>
                                                <td class="justify-content-end">
                                                    <button onclick="remove_tr(this)" id="deleteBtn" class="btn btn-reject m-3" data="Delete"></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <button onclick="create_tr('table_body')" class="btn btn-add m-3" data="Add Vessel"></button>
                            <a href="#" type="button" class="btn me-3" data="Deploy"></a>
                        </div>
                    </div>



                </div>

                <div class="lts-table m-3 pb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="tr-1 text-center">
                                            <th class="first-th" scope="col" rowspan="2">Call Select</th>
                                            <th scope="col" rowspan="2">Vessel</th>
                                            <th scope="col" rowspan="2">Voyage</th>
                                            <th scope="col" colspan="3">IDSUB</th>
                                            <th scope="col" rowspan="2">Port Select</th>
                                            <th scope="col" rowspan="2">Sea Time</th>
                                            <th scope="col" rowspan="2">Voyage</th>
                                            <th scope="col" colspan="3">IDBLW</th>
                                            <th scope="col" rowspan="2">Port Select</th>
                                            <th scope="col" rowspan="2">Sea Time</th>
                                            <th scope="col" rowspan="2">Voyage</th>
                                            <th scope="col" colspan="3">IDKTJ</th>
                                            <th scope="col" rowspan="2">Port Select</th>
                                            <th scope="col" rowspan="2">Sea Time</th>
                                            <th scope="col" colspan="1">IDSUB</th>
                                            <!-- <th scope="col">Last Updated by</th> -->
                                            <th class="last-th" scope="col" rowspan="2">Link/Unlink</th>
                                        </tr>
                                        <tr class="tr-1 text-center">
                                            <th class="eta">ETA</th>
                                            <th>ETB</th>
                                            <th>ETD</th>
                                            <th>ETA</th>
                                            <th>ETB</th>
                                            <th>ETD</th>
                                            <th>ETA</th>
                                            <th>ETB</th>
                                            <th>ETD</th>
                                            <th>ETA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-disabled">
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class="me-3" data-bs-toggle="tooltip" data-bs-title="Phase Out/Delete Call"><img src="./assets/carbon_row-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertCall.php" data-bs-toggle="tooltip" data-bs-title="Insert Call"><img src="./assets/carbon_row-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>MRO</td>
                                            <td>SB027N</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>12-10 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>13-10 0:00 Thu</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>15-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        72
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB027S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>18-10 0:00 Tue</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>19-10 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>21-10 0:00 Fri</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        24
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB027S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="eta-left" style="width: 100px;"></div>
                                                <p>22-10 0:00 Sat</p>
                                            </td>
                                            <td>SB029N</td>
                                        </tr>
                                        <tr class="tr-disabled">
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class="me-3" data-bs-toggle="tooltip" data-bs-title="Phase Out/Delete Call"><img src="./assets/carbon_row-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertCall.php" data-bs-toggle="tooltip" data-bs-title="Insert Call"><img src="./assets/carbon_row-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>TBC</td>
                                            <td>SB028N</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>20-10 0:00 Thu</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>20-10 0:00 Thu</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>21-10 0:00 Fri</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB028S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>26-10 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>26-10 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>29-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <div class="eta-left" style="width: 100px;"></div>
                                                <p>2-11 0:00 Wed</p>
                                            </td>
                                            <td>SB030N</td>
                                        </tr>
                                      
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class="me-3" data-bs-toggle="tooltip" data-bs-title="Phase Out/Delete Call"><img src="./assets/carbon_row-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertCall.php" data-bs-toggle="tooltip" data-bs-title="Insert Call"><img src="./assets/carbon_row-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>MRO</td>
                                            <td>SB029N</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>26-10 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>26-10 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>28-10 0:00 Fri</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB029S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>2-11 0:00 Wed
                                                        </p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>2-11 0:00 Wed
                                                        </p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>3-11 0:00 Thu</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        24
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB029S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>4-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>4-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>4-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="eta-left" style="width: 100px;"></div>
                                                <p>9-11 0:00 Wed</p>
                                            </td>
                                            <td>SB031N</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-primary text-primary">27-10 3:00 Thu</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class="me-3" data-bs-toggle="tooltip" data-bs-title="Phase Out/Delete Call"><img src="./assets/carbon_row-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertCall.php" data-bs-toggle="tooltip" data-bs-title="Insert Call"><img src="./assets/carbon_row-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>TBC</td>
                                            <td>SB030N</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>2-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>2-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>4-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB030S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>9-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>9-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>12-11 0:00 Sat</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <div class="eta-left" style="width: 100px;"></div>
                                                <p>16-11 0:00 Wed</p>
                                            </td>
                                            <td>SB032N</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-primary text-primary">4-11 1:00 Fri</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class="me-3" data-bs-toggle="tooltip" data-bs-title="Phase Out/Delete Call"><img src="./assets/carbon_row-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertCall.php" data-bs-toggle="tooltip" data-bs-title="Insert Call"><img src="./assets/carbon_row-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>MRO</td>
                                            <td>SB031N</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>9-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>9-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>11-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB031S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>16-11 0:00 Wed
                                                        </p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>16-11 0:00 Wed
                                                        </p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>17-11 0:00 Thu
                                                        </p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        24
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB031S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>18-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>18-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>18-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="eta-left" style="width: 100px;"></div>
                                                <p>9-11 0:00 Wed</p> -->
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class="me-3" data-bs-toggle="tooltip" data-bs-title="Phase Out/Delete Call"><img src="./assets/carbon_row-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertCall.php" data-bs-toggle="tooltip" data-bs-title="Insert Call"><img src="./assets/carbon_row-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>TBC</td>
                                            <td>SB032N</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>16-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>16-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>18-11 0:00 Fri</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        120
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SB032S</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>23-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etb-left" style="width: 100px;">
                                                        <p>23-11 0:00 Wed</p>
                                                    </div>
                                                    <div class="etb-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etb">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="etd-left" style="width: 100px;">
                                                        <p>26-11 0:00 Sat</p>
                                                    </div>
                                                    <div class="etd-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#etd">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td></td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="eta-left" style="width: 100px;">
                                                        <p>22-10 0:00 Sat</p>
                                                    </div>
                                                    <div class="eta-right">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#eta">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <a href="longTermEdit-ChangeSeaTime-OmitPort.php" class="me-3" data-bs-toggle="tooltip" data-bs-title="Omit Port"><img src="./assets/carbon_column-delete.svg" alt=""></a>
                                                    <a href="longTermEdit-InsertPort.php" data-bs-toggle="tooltip" data-bs-title="Insert Port"><img src="./assets/carbon_column-insert.svg" alt=""></a>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="d-flex">
                                                    <div class="sea-time-left me-2">
                                                        96
                                                    </div>
                                                    <div class="sea-time-right">
                                                        <a href="longTermEdit-ChangeSeaTime-OmitPort.php">
                                                            <img src="./assets/carbon_add-alt.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <!-- <div class="eta-left" style="width: 100px;"></div>
                                                <p>16-11 0:00 Wed</p> -->
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>



                <!-- <script>
                    function addVessel() {
                        var table = document.getElementById("myTable");
                        var row = table.insertRow(-1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                        var cell7 = row.insertCell(6);
                        cell1.outerHTML = `<th class="th-1 d-flex m-3"><label for="" class="me-2">Proforma Number</label><input type="text" value="SBKTS01" class="form-control"></th>`;
                        cell2.outerHTML = `<th class="th-1 d-flex m-3"><label for="" class="me-2">Vessel Code</label><input type="text" value="MRO" class="form-control"></th>`;
                        cell3.outerHTML = `<th class="th-1 d-flex m-3"><label for="" class="me-2">Effective Date</label><input id="start-date"></th>`;
                        cell4.outerHTML = `<th class="th-1 d-flex m-3"><label for="" class="me-2">Expiry Date</label><input id="end-date"></th>`;
                        cell5.outerHTML = `<th class="th-1 d-flex m-3"><label for="" class="me-2">Start Voy. Number</label><input type="number" value="27" class="form-control"></th>`;
                        cell6.outerHTML = `<th class="th-1 d-flex m-3"><label for="" class="me-2">Voyage Format</label><select class="form-select" name="" id="">
                                    <option value="">Sequence</option>
                                    <option value="">Normal</option>
                                    <option value="">Random</option>
                                </select></th>`;
                        cell7.outerHTML = `<td class="th-1 d-flex m-3"><label for="" class="me-2"><b>Voyage Formula</b></label><label for="defaultCheck1" class="me-2">Default</label>
                                <input class="me-2" type="checkbox" id="defaultCheck1" checked>
                                <button disabled>Modify</button>
                            </td>`;
                    }

                    function deleteVessel() {
                        document.getElementById("myTable").deleteRow(-1);
                    }
                </script> -->
                <!-- </div> -->


            </div>
        </div>
    </div>

    <!-- MODAL ETA ETB ETD -->
    <div class="modal fade" id="eta" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update ETA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <div class="lts-start-end d-flex">
                        <label for="eta-etb-etd-date" class="me-3 mt-1">ETA</label>
                        <input id="eta-dateTimePicker">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data="Apply"></button>
                    <button type="button" class="btn btn-modify" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="etb" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update ETB</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <div class="lts-start-end d-flex">
                        <label for="eta-etb-etd-date" class="me-3 mt-1">ETB</label>
                        <input id="etb-dateTimePicker">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data="Apply"></button>
                    <button type="button" class="btn btn-modify" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="etd" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update ETD</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <div class="lts-start-end d-flex">
                        <label for="eta-etb-etd-date" class="me-3 mt-1">ETD</label>
                        <input id="etd-dateTimePicker">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data="Apply"></button>
                    <button type="button" class="btn btn-modify" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Warning</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    The changes will update the next sequence schedule.
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-add" data="Yes" data-bs-dismiss="modal"></a>
                    <button type="button" class="btn btn-reject" data-bs-dismiss="modal" data="No"></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script>
        $(".tr-disabled .d-flex a").attr('disabled');
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <script>
        $("#ltsStart-datePicker").kendoDatePicker({
            value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#ltsEnd-datePicker").kendoDatePicker({
            value: new Date(2022, 11, 30),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#mdssStart-datePicker").kendoDatePicker({
            value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#mdssEnd-datePicker").kendoDatePicker({
            value: new Date(2022, 10, 26),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#mdssEnd2-datePicker").kendoDatePicker({
            value: new Date(2022, 10, 26),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#vStart-datePicker").kendoDatePicker({
            value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#vEnd-datePicker").kendoDatePicker({
            value: new Date(2022, 11, 30),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        $("#eta-dateTimePicker").kendoDateTimePicker({
            // value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy hh:mm tt" //format is used to format the value of the widget and to parse the input.
        });
        $("#etb-dateTimePicker").kendoDateTimePicker({
            // value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy hh:mm tt" //format is used to format the value of the widget and to parse the input.
        });
        $("#etd-dateTimePicker").kendoDateTimePicker({
            // value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy hh:mm tt" //format is used to format the value of the widget and to parse the input.
        });
    </script>
    <script>
        function create_tr(table_id) {
            let table_body = document.getElementById(table_id),
                first_tr = table_body.firstElementChild
            tr_clone = first_tr.cloneNode(true);

            table_body.append(tr_clone);

            clean_first_tr(table_body.firstElementChild);
        }

        function clean_first_tr(firstTr) {
            let children = firstTr.children;

            children = Array.isArray(children) ? children : Object.values(children);
            children.forEach(x => {
                if (x !== firstTr.lastElementChild) {
                    x.firstElementChild.value = '';
                }
            });
        }

        function remove_tr(This) {
            if (This.closest('tbody').childElementCount == 1) {
                alert("Last Vessel Can't be Deleted.");

                // $("#deleteBtn").addClass('disabled');
            } else {
                This.closest('tr').remove();
                // $("#deleteBtn").removeClass('disabled');
            }
        }

        function disableBtn() {
            if ($('#defaultCB').is(':checked')) {
                // $('#modifyBtn').attr('disabled', true); //disable input
                $("#modifyBtn").addClass('disabled');
            } else {
                // $('#modifyBtn').removeAttr('disabled'); //enable input
                $("#modifyBtn").removeClass('disabled');
            }
        }

        function disableTBC() {
            if ($('#disableTBC').is(':checked')) {
                $('#vesselCode').attr('disabled', true); //disable inpu
                $('#start-voy-num').attr('disabled', true); //disable inpu
                // $("#vesselCode").removeClass('disabled');
            } else {
                $('#vesselCode').removeAttr('disabled'); //enable input
                $('#start-voy-num').removeAttr('disabled'); //enable input
                // $("#vesselCode").addClass('disabled');
            }
        }
    </script>

</body>

</html>