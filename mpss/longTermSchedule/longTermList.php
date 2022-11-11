<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/ltsStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <div class="col-12 m-3">
                    <a class="btn btn-primary" role="btn" href="longTermCreate1.php" data="New"></a>
                    <!-- <btn type="submit" class="btn btn-secondary m-1"><img src="./assets/bi_search.svg" alt=""> Search</btn> -->
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
                                    <td class="last-th" style="position: sticky; right: 0;" scope="col">Modify</td>
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
                                            <option>Draft</option>
                                            <option>Published</option>
                                            <option>Waiting for Approval</option>
                                            <option>Confirmed</option>
                                            <option>Cancelled</option>
                                            <option>Rejected</option>
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
                                    <td>Draft</td>
                                    <td>27/10/2022</td>
                                    <td class="action-btn bg-light text-center">
                                        <a href="longTermEdit.php"><img src="./assets/akar-icons_edit.svg" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
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
                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>