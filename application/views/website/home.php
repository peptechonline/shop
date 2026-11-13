<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Repairing</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        .custom-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f5f5f5;
            color: #333;
        }

        .custom-card-body {
            padding: 20px;
        }

        .custom-card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .custom-card-text {
            font-size: 36px;
            color: #17a2b8;
        }

        .card-1 {
            box-shadow: 2px 2px 10px 0px rgb(190, 108, 170);
        }

        hr {
            background-color: rgba(248, 248, 248, 0.667);
        }


        .bold {
            font-weight: 500;
        }

        .change-color {
            color: #AB47BC !important;
        }

        .card-2 {
            box-shadow: 1px 1px 3px 0px rgb(112, 115, 139);

        }

        .fa-circle.active {
            font-size: 8px;
            color: #AB47BC;
        }

        .fa-circle {
            font-size: 8px;
            color: #aaa;
        }

        .rounded {
            border-radius: 2.25rem !important;
        }


        .progress-bar {
            background-color: #AB47BC !important;
        }


        .progress {
            height: 5px !important;
            margin-bottom: 0;
        }

        .invoice {
            position: relative;
            top: -70px;
        }

        .Glasses {
            position: relative;
            top: -12px !important;
        }

        .card-footer {
            background-color: #AB47BC;
            color: #fff;
        }



        .display-3 {
            font-weight: 500 !important;
        }

        .badge {
            margin: 3px;
        }

        .search-container {
            display: flex;
            justify-content: end;
            align-items: center;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .search-box {
            flex: 1;
            margin-right: 10px;
        }

       

        @media (max-width: 479px) {
            .invoice {
                position: relative;
                top: 7px;
            }

            .border-line {
                border-right: 0px solid rgb(226, 206, 226) !important;
            }

        }

        @media (max-width: 700px) {


            .display-3 {
                font-size: 28px;
                font-weight: 500 !important;
            }
        }

        .card-footer small {
            letter-spacing: 7px !important;
            font-size: 12px;
        }

        .border-line {
            border-right: 1px solid rgb(226, 206, 226)
        }
    </style>
</head>

<body>
    <?php $this->load->view("website/header"); ?>

    <!--Start Check Login -->
    <script>
        var base_url = "<?php echo base_url(); ?>";
    </script>
    <script src="<?= base_url(); ?>/assets/js/checkLogin.js"></script>
    <!-- End check Login -->


    <div class="container-fluid h-100 main-section">
        <div class="row h-100">

            <!-- Left-side Navigation Panel -->
            <div class="col-md-3 bg-light p-4">
                <div class="mb-4 d-flex ">
                    <img src="https://cryptologos.cc/logos/basic-attention-token-bat-logo.png" alt="Shop Logo" width="50">
                    <h3 class="mt-3 ml-3">Shop</h3>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" id="goto-dashboard" href="#" data-target="#dashboard">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="#addDevice">Add Device</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="goto-transaction" href="#" data-target="#transactions">Transactions</a>
                    </li>

                </ul>
            </div>

            <!-- Content Area -->
            <div class="col-md-9">
                <div id="dashboard" class="content-section">
                    <h1>Welcome to the Dashboard</h1>

                    <div class="row">
                        <div class="col">
                            <select class="form-control mb-3 float-right" id="dashboard_date_range" style="width: auto;">
                                <option value="all-time">All Time</option>
                                <option value="this-month">This Month</option>
                                <option value="today">Today</option>
                            </select>
                        </div>
                    </div>


                    <!-- Cards Starts -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><i class='fa-solid fa-mobile'></i> Old Mobiles</h5>
                                    <p class="card-text" id="oldmobile-value-dashboard">-0</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><i class='fa fa-screwdriver-wrench'></i> Total Repairing</h5>
                                    <p class="card-text" id="totalrepairing-value-dashboard">-0</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><i class="fa fa-clock-rotate-left"></i> Pending Repairing</h5>
                                    <p class="card-text" id="pendingrepairing-value-dashboard">-0</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><i class="fa fa-clock-rotate-left"></i> Pending deliveries</h5>
                                    <p class="card-text" id="pendingdelivery-value-dashboard">-0</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                            <div class="card custom-card text-center">
                                <div class="card-body custom-card-body">
                                    <h5 class="card-title custom-card-title">Total Earnings</h5>
                                    <h2 class="card-text custom-card-text">₹<span id="total-amount-dashboard">0</span></h2>
                                </div>
                            </div>

                        </div>
                    </div>





                    <!-- Cards ends -->
                </div>

                <!-- Add Party -->
                <div id="addParty" class="content-section d-none">
                    <h1>Add Customer</h1>
                    <form id="addCustomerForm">

                        <div class="form-group">
                            <label for="customerName">Customer Name:</label>
                            <input type="text" class="form-control" id="customerName" placeholder="Enter customer name">
                        </div>

                        <div class="form-group">
                            <label for="customerMobile">Customer Mobile No.:</label>
                            <input type="tel" class="form-control" id="customerMobile" placeholder="Enter mobile number">
                        </div>

                        <div class="form-group">
                            <label for="customerAddress">Customer Address:</label>
                            <textarea class="form-control" id="customerAddress" rows="3" placeholder="Enter address"></textarea>
                        </div>

                        <!-- <div class="form-group">
                            <label for="customerImage1">Add Image:</label>
                            <input type="file" class="form-control-file" id="customerImage1">
                        </div> -->

                        <!-- <div id="additionalImages"></div> -->

                        <!-- <button type="button" class="btn btn-secondary" id="addAnotherImage">+</button> -->
                        <br>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>

                    </form>


                </div>

                <!-- Add Device -->
                <div id="addDevice" class="content-section d-none mb-5">
                    <div class="container">
                        <h2 class="form-title">Customer Information</h2>
                        <form method="post" enctype="multipart/form-data" class="customer-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Customer_Name">Customer Name</label>
                                    <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Contact">Customer Mobile No.</label>
                                    <input type="number" name="Contact" list="Customer_Number" class="form-control" id="Contact" placeholder="Contact No.">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Customer_Address">Customer Address</label>
                                    <input type="text" name="Customer_Address" class="form-control" id="Customer_Address" placeholder="Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Model">Model</label>
                                    <input type="text" name="Model" class="form-control" id="Model" placeholder="Model">
                                </div>
                            </div>
                            <!-- Additional fields -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Problem_Device">Problem in device</label>
                                    <input type="text" name="Problem_Device" class="form-control" id="Problem_Device" placeholder="Describe the problem">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Repairing_Cost">Repairing Cost</label>
                                    <input type="number" name="Repairing_Cost" class="form-control" id="Repairing_Cost" placeholder="Cost">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Advancement_Payment">Advancement Payment</label>
                                    <input type="number" name="Advancement_Payment" class="form-control" id="Advancement_Payment" placeholder="Amount">
                                </div>
                            </div>
                            <!-- Repeat for additional pairs of fields as necessary -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Delivery_Date">Delivery Date</label>
                                    <input type="date" name="Delivery_Date" class="form-control" id="Delivery_Date" placeholder="Delivery Date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Received_By">Received By</label>
                                    <input type="text" name="Received_By" class="form-control" id="Received_By" placeholder="Received By">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Assigned_Technician">Assigned Technician</label>
                                    <input type="text" name="Assigned_Technician" class="form-control" id="Assigned_Technician" placeholder="Assigned Technician">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="IMEI">IMEI</label>
                                    <input type="text" name="IMEI" class="form-control" id="IMEI" placeholder="IMEI">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Password">Password</label>
                                    <input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Note">Note (Optional)</label><br>
                                <textarea type="text" class="form-control" id="Note" name="Note" rows="3" placeholder="Enter notes"></textarea>
                                <br>
                                <input type="checkbox" name="SIM" value="SIM" class="form-checkbox" id="SIM">
                                <label for="SIM">SIM</label><br>

                                <input type="checkbox" name="SIM_Tray" value="SIM Tray" class="form-checkbox" id="SIM_Tray">
                                <label for="SIM_Tray">SIM Tray</label><br>

                                <input type="checkbox" name="Back_Panel" value="Back Panel" class="form-checkbox" id="Back_Panel">
                                <label for="Back_Panel">Back Panel</label>

                                <!-- image section -->
                                <div class="form-group">
                                    <label for="customerImage1">Add Image:</label>
                                    <input type="file" class="form-control-file" id="customerImage1" name="customerImage1">
                                </div>

                                <div id="additionalImages"></div>

                                <button type="button" class="btn btn-secondary" id="addAnotherImage">+</button>
                            </div>
                            <button type="submit" class="btn btn-primary" name="Add">Add</button>
                        </form>

                    </div>

                </div>

                <!-- Transaction -->
                <div id="transactions" class="content-section d-none">
                    <h1>Transactions</h1>
                    <!-- ---------------------------------------------------------------- -->
                    <!-- ---------------------------------------------------------------- -->
                    <!-- ---------------------------------------------------------------- -->
                    <!-- ---------------------------------------------------------------- -->

                    <div class="container-fluid my-5  d-flex  justify-content-center">
                        <div class="card card-1">
                            <div class="card-header bg-white">
                                <!-- <div class="media flex-sm-row flex-column-reverse justify-content-between  ">
                                    <div class="col my-auto">
                                        <h4 class="mb-0">Thanks for your Order,<span class="change-color">Anjali</span> !</h4>
                                    </div>
                                    <div class="col-auto text-center  my-auto pl-0 pt-sm-4"> <img class="img-fluid my-auto align-items-center mb-0 pt-3" src="https://i.imgur.com/7q7gIzR.png" width="115" height="115">
                                        <p class="mb-4 pt-0 Glasses">Glasses For Everyone</p>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col">
                                        <div class="search-container">
                                            <div class="row d-flex justify-content-end">
                                                <div class="col p-0">
                                                    <div class="search-box">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control mr-2" placeholder="Search...">
                                                            <button class="btn btn-secondary" type="button">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="sort-dropdown input-group search-box">
                                                        <select class="form-select form-control">
                                                            <option value="date">Sort by Date</option>
                                                            <option value="name">Sort by Name</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- <div class="row justify-content-between mb-3">
                                    <div class="col-auto">
                                        <h6 class="color-1 mb-0 change-color">Receipt</h6>
                                    </div>
                                    <div class="col-auto  "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
                                </div> -->
                                <div id="transaction_list">

                                </div>
                                <!-- <div class="row">
                                    <div class="col">
                                        <div class="card card-2">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="https://i.imgur.com/RJOW4BL.jpg" width="135" height="135" /> </div>
                                                    <div class="media-body my-auto text-right">
                                                        <div class="row  my-auto flex-column flex-md-row">
                                                            <div class="col my-auto">
                                                                <h6 class="mb-0"> Jack Jacs</h6>
                                                            </div>
                                                            <div class="col-auto my-auto"> <small>Golden Rim </small></div>
                                                            <div class="col my-auto"> <small>Size : M</small></div>
                                                            <div class="col my-auto"> <small>Qty : 1</small></div>
                                                            <div class="col my-auto">
                                                                <h6 class="mb-0">&#8377;3,600.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-3 ">
                                                <div class="row">
                                                    <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                                    <div class="col mt-auto">
                                                        <div class="progress my-auto">
                                                            <div class="progress-bar progress-bar  rounded" style="width: 62%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="media row justify-content-between ">
                                                            <div class="col-auto text-right"><span> <small class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                                            <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                                            <div class="col-auto flex-col-auto"><small class="text-right mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="card card-2">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="https://i.imgur.com/fUWWpRS.jpg" width="135" height="135" /> </div>
                                                    <div class="media-body my-auto text-right">
                                                        <div class="row  my-auto flex-column flex-md-row">
                                                            <div class="col-auto my-auto ">
                                                                <h6 class="mb-0"> Michel Mark</h6>
                                                            </div>
                                                            <div class="col my-auto  "> <small>Black Rim </small></div>
                                                            <div class="col my-auto  "> <small>Size : L</small></div>
                                                            <div class="col my-auto  "> <small>Qty : 1</small></div>
                                                            <div class="col my-auto ">
                                                                <h6 class="mb-0">&#8377;1,235.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-3 ">
                                                <div class="row ">
                                                    <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                                    <div class="col mt-auto">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar  rounded" style="width: 18%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="media row justify-content-between ">
                                                            <div class="col-auto text-right"><span> <small class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                                            <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle"></i></span></div>
                                                            <div class="col-auto flex-col-auto"><smallclass="text-right mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <p class="mb-1 text-dark"><b>Order Details</b></p>
                                            </div>
                                            <div class="flex-sm-col text-right col">
                                                <p class="mb-1"><b>Total</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1">&#8377;4,835</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="flex-sm-col text-right col">
                                                <p class="mb-1"> <b>Discount</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1">&#8377;150</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="flex-sm-col text-right col">
                                                <p class="mb-1"><b>GST 18%</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1">843</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="flex-sm-col text-right col">
                                                <p class="mb-1"><b>Delivery Charges</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1">Free</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row invoice ">
                                    <div class="col">
                                        <p class="mb-1"> Invoice Number : 788152</p>
                                        <p class="mb-1">Invoice Date : 22 Dec,2019</p>
                                        <p class="mb-1">Recepits Voucher:18KU-62IIK</p>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="card-footer">
                                <div class="jumbotron-fluid">
                                    <div class="row justify-content-between ">
                                        <div class="col-sm-auto col-auto my-auto"><img class="img-fluid my-auto align-self-center " src="https://i.imgur.com/7q7gIzR.png" width="115" height="115"></div>
                                        <div class="col-auto my-auto ">
                                            <h2 class="mb-0 font-weight-bold">TOTAL PAID</h2>
                                        </div>
                                        <div class="col-auto my-auto ml-auto">
                                            <h1 class="display-3 ">&#8377; 5,528</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-3 mt-md-0">
                                        <div class="col-auto border-line"> <small class="text-white">PAN:AA02hDW7E</small></div>
                                        <div class="col-auto border-line"> <small class="text-white">CIN:UMMC20PTC </small></div>
                                        <div class="col-auto "><small class="text-white">GSTN:268FD07EXX </small> </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>












                    <!-- ---------------------------------------------------------------- -->
                    <!-- ---------------------------------------------------------------- -->
                    <!-- ---------------------------------------------------------------- -->
                    <!-- ---------------------------------------------------------------- -->
                </div>
            </div>

        </div>
    </div>
    <?php $this->load->view("website/footer"); ?>
    <script src="<?= base_url(); ?>/assets/js/home.js"></script>



</body>

<script type="text/javascript">
    $(document).ready(function() {

        $(".customer-form").on("submit", function(event) {
            event.preventDefault();

            var formData = new FormData(this);
            formData.append("user_id", user_id_data);

            $.ajax({
                url: "<?= base_url() ?>/api/addProduct", // Replace with your server endpoint
                type: 'POST',
                data: formData,
                processData: false, // Important: tell jQuery not to process the data
                contentType: false, // Important: tell jQuery not to set contentType
                success: function(response) {
                    // Handle success
                    console.log(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle error
                    console.error('Error:', textStatus, errorThrown);
                }
            });
        });

        // Handle the add another image button
        $("#addAnotherImage").on("click", function() {
            var newImageInput = $('<input type="file" class="form-control-file" name="additionalImages[]">');
            $("#additionalImages").append(newImageInput);
        });


        //Get user detail based on Phone no
        $('#Contact').on('input', function() {
            var phoneNumber = $(this).val();

            if (phoneNumber.length >= 10) { // Only trigger when phone number has a certain length, like 10 digits
                $.ajax({
                    url: "<?= base_url() ?>/api/fetchCustomer",
                    method: "GET",
                    data: {
                        contact: phoneNumber
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            $('#Customer_Name').val(data.customer_name);
                            $('#Customer_Address').val(data.customer_address);
                        }
                    }
                });
            }
        });

        $("#goto-transaction").click(function() {
            console.log("clicked transaction");
            var admin_id = user_id_data;
            $.ajax({
                url: "<?= base_url() ?>/api/viewTransactions",
                method: "GET",
                data: {
                    admin_id: admin_id
                },
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    let trans_data = "";
                    $(data.transactions).each(function(key, val) {
                        let remainingAmount = val.repairing_cost - val.advancement_payment;
                        console.log(val);
                        trans_data += `<div class="row mt-4">
                                        <div class="col">
                                            <div class="card card-2">
                                                <div class="card-body">
                                                
                                                <div class="row justify-content-between">
                                                <div class="col-auto my-auto"> <small>Invoice No: </small>` + val.invoice_no + `</div>
                                                <div class="col-auto">
                                                    <div class="row">
                                                        <div class="badge badge-primary">Cost: ` + val.repairing_cost + `/-</div>
                                                        <div class="badge badge-secondary">Due: ` + remainingAmount + `/-</div>
                                                        <div class="badge badge-warning">` + val.status + `</div>
                                                       <!-- <div class="badge badge-warning">Not Delivered</div> -->
                                                    </div>
                                                </div>
                                                                
                                                </div>
                                                <hr class="my-3">
                                                    <div class="media">
                                                     <!-- <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="https://i.imgur.com/RJOW4BL.jpg" width="135" height="135" /> </div>-->
                                                        <div class="media-body my-auto">
                                                            <div class="row  my-auto flex-column flex-md-row">
                                                            
                                                                <div class="col my-auto">
                                                                    <h6 class="mb-0"> <small>Name: </small><br>` + val.customer_name + `</h6>
                                                                </div>
                                                                <div class="col-auto my-auto"> <small>Contact: </small><br>` + val.contact + `</div>
                                                                <div class="col my-auto"> <small>Modal: </small>` + val.model + `</div>
                                                                <div class="col my-auto"> <small>Problem: <br>` + val.problem_device + `</small></div>
                                                                <div class="col my-auto"> <small>Issue Date: <br>` + val.issue_data + `</small></div>
                                                                <div class="col my-auto"> <small>Due Date: <br>` + val.delivery_date + `</small></div>
                                                                <div class="col my-auto">
                                                                    <h6 class="mb-0">&#8377;3,600.00</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr class="my-3 ">
                                                    <div class="row ">
                                                        <div class="col mt-auto">
                                                            <div class="media row justify-content-end ">
                                                                <div class="col-auto">
                                                                    <a href="<?= base_url("main/edit?id="); ?>` + val.customer_id + `" class="btn btn-secondary"><i class="fa fa-eye"></i> Edit</a>
                                                                    <div class="btn btn-warning"><i class="fas fa-file-invoice"></i> invoice</div>
                                                                </div>

                                                               <!-- 
                                                                <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle"></i></span></div>
                                                                <div class="col-auto flex-col-auto"><smallclass="text-right mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;

                        // console.log(val);
                    });
                    $("#transaction_list").html(trans_data);
                }
            });
        });


        function fetchDashboardData() {

            var currentDate = new Date();
            var startDate = currentDate.toISOString().slice(0, 10);

            let dashboard_date_range = $("#dashboard_date_range").val();

            if (dashboard_date_range == "this-month") {
                currentDate.setDate(2);
                startDate = currentDate.toISOString().slice(0, 10);

            } else if (dashboard_date_range == "all-time") {
                currentDate.setYear(currentDate.getYear() - 100);
                startDate = currentDate.toISOString().slice(0, 10);
            }


            // Calculate the date one month ago

            console.log(startDate);

            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/api/getDashboardData', // Replace with the correct URL
                data: {
                    start_date: startDate, // Replace with your desired start date
                    user_id: user_id_data, // Replace with the user's ID
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    // Update the dashboard with the fetched data
                    $('#totalrepairing-value-dashboard').text(data.total_repairing);
                    $('#pendingrepairing-value-dashboard').text(data.pending_repairing);
                    $('#pendingdelivery-value-dashboard').text(data.pending_delivery);
                    $('#total-amount-dashboard').text(data.total_amount_earned > 0 ? data.total_amount_earned : 0);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching dashboard data: " + error);
                }
            });
        }

        fetchDashboardData();
        $("#goto-dashboard").click(function() {
            fetchDashboardData();
        });

        $("#dashboard_date_range").change(function() {
            fetchDashboardData();
        });



    });
</script>

</html>