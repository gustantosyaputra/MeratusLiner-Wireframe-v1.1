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
            <div class="m-3 pb-5">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <b>Change Sea Time and Omit Port</b>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr class="tr-1">
                                        <th class="first-th">From Port</th>
                                        <th>To Port</th>
                                        <th>Q/Q Miles</th>
                                        <th>Speed</th>
                                        <th class="last-th">Sea Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IDSUB</td>
                                        <td>IDKTJ</td>
                                        <td>615</td>
                                        <td class="td-1" style="width: 10%;"><input type="number" class="form-control" value="10.25"></td>
                                        <td>60.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="#" type="button" class="btn btn-modify me-5">Calculate</a>
                        <a href="longTermEdit.php" type="button" class="btn me-2" data="Confirm"></a>
                        <a href="longTermEdit.php" type="button" class="btn btn-reject" data="Cancel"></a>
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
            $(function() {

                // create DatePicker from input with current date value.

                $("#lts-start").ejDatePicker({

                    // value: new Date(), // sets the current date

                    dateFormat: "dd/MM/yyyy" // sets the date format

                });
                $("#lts-end").ejDatePicker({

                    // value: new Date(), // sets the current date

                    dateFormat: "dd/MM/yyyy" // sets the date format

                });
                $("#start-date").ejDatePicker({

                    // value: new Date(), // sets the current date

                    dateFormat: "dd/MM/yyyy" // sets the date format

                });
                $("#end-date").ejDatePicker({

                    // value: new Date(), // sets the current date

                    dateFormat: "dd/MM/yyyy" // sets the date format

                });

            });
        </script>
</body>

</html>