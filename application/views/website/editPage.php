<?php
$customer_id = $_GET['id'];

?>

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

    <!-- Check if the user is the admin to update the fields -->

    <!-- Page starts -->

    <!-- Add Device -->
    <div id="addDevice" class="content-section mb-5">
        <div class="container">
            <h2 class="form-title">Customer Information</h2>
            <div class="btn btn-primary" id="enable">Edit</div>
            <form method="post" enctype="multipart/form-data" class="customer-form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Customer_Name">Customer Name</label>
                        <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" placeholder="Name" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Contact">Customer Mobile No.</label>
                        <input type="number" name="Contact" list="Customer_Number" class="form-control" id="Contact" placeholder="Contact No." disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Customer_Address">Customer Address</label>
                        <input type="text" name="Customer_Address" class="form-control" id="Customer_Address" placeholder="Address" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for "Model">Model</label>
                        <input type="text" name="Model" class="form-control" id="Model" placeholder="Model" disabled>
                    </div>
                </div>
                <!-- Additional fields -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Problem_Device">Problem in device</label>
                        <input type="text" name="Problem_Device" class="form-control" id="Problem_Device" placeholder="Describe the problem" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Repairing_Cost">Repairing Cost</label>
                        <input type="number" name="Repairing_Cost" class="form-control" id="Repairing_Cost" placeholder="Cost" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Advancement_Payment">Advancement Payment</label>
                        <input type="number" name="Advancement_Payment" class="form-control" id="Advancement_Payment" placeholder="Amount" disabled>
                    </div>
                </div>
                <!-- Repeat for additional pairs of fields as necessary -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Delivery_Date">Delivery Date</label>
                        <input type="date" name="Delivery_Date" class="form-control" id="Delivery_Date" placeholder="Delivery Date" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Received_By">Received By</label>
                        <input type="text" name="Received_By" class="form-control" id="Received_By" placeholder="Received By" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Assigned_Technician">Assigned Technician</label>
                        <input type="text" name="Assigned_Technician" class="form-control" id="Assigned_Technician" placeholder="Assigned Technician" disabled>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="IMEI">IMEI</label>
                        <input type="text" name="IMEI" class="form-control" id="IMEI" placeholder="IMEI" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Password">Password</label>
                        <input type="text" name="Password" class="form-control" id="Password" placeholder="Password" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Note">Note (Optional)</label><br>
                    <textarea type="text" class="form-control" id="Note" name="Note" rows="3" placeholder="Enter notes" disabled></textarea>
                    <br>
                    <input type="checkbox" name="SIM" value="SIM" class="form-checkbox" id="SIM" disabled>
                    <label for="SIM">SIM</label><br>

                    <input type="checkbox" name="SIM_Tray" value="SIM Tray" class="form-checkbox" id="SIM_Tray" disabled>
                    <label for="SIM_Tray">SIM Tray</label><br>

                    <input type="checkbox" name="Back_Panel" value="Back Panel" class="form-checkbox" id="Back_Panel" disabled>
                    <label for="Back_Panel">Back Panel</label>

                    <!-- image section -->
                    <div class="form-group">
                        <label for="customerImage1">Add Image:</label>
                        <input type="file" class="form-control-file" id="customerImage1" name="customerImage1" disabled>
                    </div>

                    <div id="additionalImages"></div>

                    <button type="button" class="btn btn-secondary" id="addAnotherImage" disabled>+</button>
                </div>
                <button type="submit" class="btn btn-primary" name="Add">Add</button>
            </form>
        </div>
    </div>


    <!-- Page Ends -->
    <?php $this->load->view("website/footer"); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

<script>
    var customer_id = "<?= $customer_id; ?>";

    if (customer_id == null || customer_id == "") {
        location.href = "<?= base_url(); ?>main";
    }
    console.log(customer_id);

    $.ajax({
        url: "<?= base_url() ?>/api/fetchCustomerById",
        method: "GET",
        data: {
            customer_id: customer_id
        },
        dataType: "json",
        success: function(data) {
            $("#Customer_Name").val(data.customer_name);
            $("#Contact").val(data.contact);
            $("#Customer_Address").val(data.customer_address);
            $("#Model").val(data.model);
            $("#Problem_Device").val(data.problem_device);
            $("#Repairing_Cost").val(data.repairing_cost);
            $("#Advancement_Payment").val(data.advancement_payment);
            $("#Delivery_Date").val(data.delivery_date);
            $("#Received_By").val(data.received_by);
            $("#Assigned_Technician").val(data.assigned_technician);
            $("#IMEI").val(data.imei);
            $("#Password").val(data.password);
            $("#Note").val(data.note);

            // Checkbox fields
            $("#SIM").prop('checked', data.sim === 'yes');
            $("#SIM_Tray").prop('checked', data.sim_tray === 'yes');
            $("#Back_Panel").prop('checked', data.back_panel === 'yes');


        }
    });


    $("#enable").click(function() {
        // Find all form elements and remove the "disabled" attribute
        $("form input, form textarea, form select").removeAttr("disabled");
    });

    $(".customer-form").on("submit", function(event) {
        // Prevent default form submit
        event.preventDefault();

        $("form input, form textarea, form select").removeAttr("disabled");

        // Create a FormData object to hold the form data
        var formData = new FormData(this);
        formData.append("customer_id",<?=$customer_id;?>)
        

        // Use jQuery's AJAX method to send the data
        $.ajax({
            url: "<?= base_url() ?>/api/updateProduct", // Replace with your server endpoint
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
</script>

</html>