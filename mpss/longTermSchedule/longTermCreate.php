<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://kendo.cdn.telerik.com/2022.3.913/styles/kendo.default-main.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.913/js/kendo.all.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <script src="./assets/js/longTermCreateData.js"></script>
    <script src="./assets/js/longTermCreateForm.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/lts.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="shortcut icon" href="your_image_path_and_name.ico" />
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
                <div class="text lts-form-container m-3">
                    <h3>Create Long Term Schedule</h3>
                    <!-- CODE HERE -->
                    <div id="validation-success"></div>

                    <form id="lts-form1"></form>

            
                </div>
                <div class="m-3" id="ordersGrid"></div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<!-- <form class="row g-3">
    <div class="col-md-2">
        <label for="lane-code" class="col-form-label">Lane Code</label>
        <input type="text" id="lane-code" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="end-quarter" class="col-form-label">End Quarter</label>
        <input type="number" id="end-quarter" class="form-control">
    </div>
    <div class="col-md-1">
        <label class="visually-hidden" for="inlineFormSelectPref">Quarter</label>
        <select class="form-select" id="inlineFormSelectPref">
            <option selected>Choose...</option>
            <option value="1Q">1Q</option>
            <option value="2Q">2Q</option>
            <option value="3Q">3Q</option>
            <option value="4Q">4Q</option>
        </select>
    </div>
