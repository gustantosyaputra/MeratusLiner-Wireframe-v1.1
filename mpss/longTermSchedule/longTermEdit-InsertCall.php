<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/ltsStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://kendo.cdn.telerik.com/2022.3.913/styles/kendo.default-ocean-blue.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.913/js/kendo.all.min.js"></script>

    <title>New Liner - Long Term Schedule</title>
    <title>Document</title>
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
            <div class="add-vessel-table-lts m-3 pb-5 d-flex">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <b>Insert Call</b>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody id="table_body" style="position: relative; display: flex;">
                                    <tr style="border: 2px solid #F2F2F2; border-radius: 10px; margin:2px;">
                                        <td class="td-1 d-flex m-3">
                                            <div class="left-td w-100">
                                                <label><b>Proforma Number</b></label>
                                            </div>
                                            <div class="right-td w-100">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="td-1 d-flex m-3">
                                            <div class="left-td w-100">
                                                <label for=""><b>Vessel Code</b></label>
                                            </div>
                                            <div class="right-td w-100 d-flex">
                                                <input type="text" class="form-control" id="vesselCode">
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
                                                <input id="vStart-datePicker" class="lts-start-end">
                                            </div>
                                        </td>
                                        <!-- <td class="td-1 d-flex m-3">
                                            <div class="left-td w-100 me-5">
                                                <label for=""><b>Vessel Expiry Date</b></label>
                                            </div>
                                            <div class="lts-start-end w-100">
                                                <input id="end-date">
                                            </div>
                                        </td> -->
                                        <td class="td-1 d-flex m-3">
                                            <div class="left-td w-100">
                                                <label for=""><b>Start Voy. Number</b></label>
                                            </div>
                                            <div class="right-td w-100">
                                                <input type="number" class="form-control" id="start-voy-num">
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
                                            <div class="right-td w-100" style="width: 50%;">
                                               <span style="display:inline-flex; align-items: center;">
                                                            <label class="me-3">Default</label>
                                                            <input onclick="disableBtn('defaultCB')" type="checkbox" value="" id="defaultCB" class="me-3" checked>
                                                        </span>
                                                <a href="longTermEdit-modifyFormula2.php" type="button" class="btn btn-modify disabled mt-3" id="modifyBtn">Modify</a>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- <button onclick="remove_tr(this)" id="deleteBtn" class="btn btn-reject m-3" data="Delete"></button> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <a href="longTermEdit.php" type="button" class="btn w-100" data="Deploy"></a>
                        </div>
                </div>



            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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

        <script>
           $("#vStart-datePicker").kendoDatePicker({
            // value: new Date(2022, 10, 12),
            format: "dd/MM/yyyy" //format is used to format the value of the widget and to parse the input.
        });
        </script>
</body>

</html>