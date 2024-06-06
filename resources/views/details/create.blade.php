<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 400;
            background-image: url('https://img.freepik.com/free-vector/white-background-with-zigzag-pattern-design_1017-33197.jpg?t=st=1716555683~exp=1716559283~hmac=ddd149fe546b2dfc2f5310c9f735be03e2620c2e30a105bbef90f42dfa39502f&w=1060');
            background-color: rgba(255, 255, 255, 0.05);
            background-color: #ffffff;
            /* Fallback background color */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: navy;
            padding: 10px 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-family: 'Rubik', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #fff;
        }

        .navbar-brand sup {
            font-size: 12px;
            vertical-align: super;
        }

        .container-fluid {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            padding: 20px;
            background-color: white;
        }
    </style>
</head>

<body>

    <header>
        <div class="navbar">
            <div class="navbar-brand">
                Happy Fis
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h4>Create Agreement</h4>
                <hr>
            </div>
            <!-- <div class="col-md-6">
                    <a href="#" class="btn viewbtn float-right">Create Agreement</a>
                </div> -->
        </div>
        <form action="#" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <label for="city_name">City where the agreement is made</label>
                    <input type="text" name="city_name" id="city_name" class="form-control">
                    </input>
                </div>

            </div>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend style="color: #071548; font-size: 16px; margin-left:10px; padding: 5px;">Enter the day, month and year when this agreement is made</legend>
                <div class="row">
                    <div class="col-md-4">
                        <label for="day">Day</label>
                        <select type="text" name="day" id="day" class="form-control">
                            @for($i = 1; $i <= 31; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="Month">Month</label>
                        <select type="text" name="month" id="month" class="form-control">
                            @for($i = 1; $i <= 12; $i++) <option value="{{ $i }}">{{ \Carbon\Carbon::createFromFormat('m', $i)->monthName }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="Year">Year</label>
                        <input type="text" name="year" id="year" class="form-control" value="{{ \Carbon\Carbon::now()->year }}">
                    </div>
                </div>
            </fieldset>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend style="color: #071548; font-size: 16px; margin-left:10px; padding: 5px;">Enter the details of the lessor</legend>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="lessor_name">Enter Lessor Name</label>
                        <input type="text" name="lessor_name" id="lessor_name" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-6">
                        <label for="lessee_father_name">Enter Lessor Father Name</label>
                        <input type="text" name="lessor_father_name" id="lessee_name" class="form-control">
                        </input>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="lessee_address_line_1">Enter Lessor Address Line 1</label>
                        <input type="text" name="lesssor_address_line_1" id="lessee_address_line_1" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="lessee_address_line_2">Enter Lessor Address Line 2</label>
                        <input type="text" name="lessor_address_line_2" id="lessee_address_line_2" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="lessee_address_line_3">Enter Lessor Address Line 3</label>
                        <input type="text" name="lessor_address_line_3" id="lessee_address_line_3" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="district">District</label>
                        <input type="text" name="district" id="district" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="pincode">Pincode</label>
                        <input type="text" name="pincode" id="pincode" class="form-control">
                        </input>
                    </div>
                </div>
            </fieldset>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend style="color: #071548; font-size: 16px; margin-left:10px; padding: 5px;">Enter the details of the lessee</legend>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="lessor_name">Enter Lessor Name</label>
                        <input type="text" name="lessor_name" id="lessor_name" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-6">
                        <label for="lessee_father_name">Enter Lessor Father Name</label>
                        <input type="text" name="lessor_father_name" id="lessee_name" class="form-control">
                        </input>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="lessee_address_line_1">Enter Lessor Address Line 1</label>
                        <input type="text" name="lesssor_address_line_1" id="lessee_address_line_1" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="lessee_address_line_2">Enter Lessor Address Line 2</label>
                        <input type="text" name="lessor_address_line_2" id="lessee_address_line_2" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="lessee_address_line_3">Enter Lessor Address Line 3</label>
                        <input type="text" name="lessor_address_line_3" id="lessee_address_line_3" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="district">District</label>
                        <input type="text" name="district" id="district" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="pincode">Pincode</label>
                        <input type="text" name="pincode" id="pincode" class="form-control">
                        </input>
                    </div>
                </div>
            </fieldset>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend style="color: #071548; font-size: 16px; margin-left:10px; padding: 5px;">Enter the details of the Property</legend>
                <div class="row">
                    <div class="col-md-4">
                        <label for="property_area">Enter Property Area in Square Feet</label>
                        <input type="text" name="property_area" id="property_area" class="form-control">
                        </input>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="property_address_line_1">Enter Property Address Line 1</label>
                        <input type="text" name="property_address_line_1" id="property_address_line_1" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="property_address_line_2">Enter Property Address Line 2</label>
                        <input type="text" name="property_address_line_2" id="property_address_line_2" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="property_address_line_3">Enter Property Address Line 3</label>
                        <input type="text" name="property_address_line_3" id="property_address_line_3" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="district">District</label>
                        <input type="text" name="district" id="district" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="pincode">Pincode</label>
                        <input type="text" name="pincode" id="pincode" class="form-control">
                        </input>
                    </div>
                </div>
            </fieldset>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend style="color: #071548; font-size: 16px; margin-left:10px; padding: 5px;">Enter the details of the Lease</legend>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="property_area">Enter Lease Duration</label>
                        <input type="text" name="lease_term" id="property_area" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="property_address_line_1">Enter Lease Start Date</label>
                        <input type="date" name="lease_start_date" id="property_address_line_1" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="property_address_line_2">Enter Lease Signing Date</label>
                        <input type="date" name="lease_signing_date" id="property_address_line_2" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="property_address_line_3">Enter Lease Amount Per Month</label>
                        <input type="text" name="lease_amount_per_month" id="property_address_line_3" class="form-control">
                        </input>
                    </div>


                    <!-- <div class="col-md-4">
                        <label for="max_arrears">Enter max rent arrears month allowed</label>
                        <input type="text" name="max_arrears" id="max_arrears" class="form-control" value="two">
                        </input>
                    </div> -->
                    <div class="col-md-4">
                        <label for="property_address_line_2">Enter Lease End Date</label>
                        <input type="date" name="lease_end_date" id="property_address_line_2" class="form-control">
                        </input>
                    </div>
                </div>
            </fieldset>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend>Enter Witness 1 Details</legend>
                <div class=" row mt-4">
                    <div class="col-md-4">
                        <label for="witness name">Enter First Witness Name</label>
                        <input type="text" name="witness_1_name" id="witness_name" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_address_line_1">Enter First Witness Address Line 1</label>
                        <input type="text" name="witness_1_address_line_1" id="witness_address_line_1" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_address_line_2">Enter First Witness Address Line 2</label>
                        <input type="text" name="witness_1_address_line_2" id="witness_address_line_2" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_address_line_3">Enter First Witness Address Line 3</label>
                        <input type="text" name="witness_1_address_line_3" id="witness_address_line_3" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_city">Enter First Witness City</label>
                        <input type="text" name="witness_1_city" id="witness_city" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_state">Enter First Witness State</label>
                        <input type="text" name="witness_1_state" id="witness_state" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_pincode">Enter First Witness Pincode</label>
                        <input type="text" name="witness_1_pincode" id="witness_pincode" class="form-control"> </input>
                    </div>

                </div>
            </fieldset>
            <fieldset style="padding: 10px; border : 1px solid lightgrey; margin-top: 20px;">
                <legend>Enter Witness 2 Details</legend>
                <div class=" row mt-4">
                    <div class="col-md-4">
                        <label for="witness name">Enter Second Witness Name</label>
                        <input type="text" name="witness_2_name" id="witness_name" class="form-control">
                        </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_address_line_1">Enter Second Witness Address Line 1</label>
                        <input type="text" name="witness_2_address_line_1" id="witness_address_line_1" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_address_line_2">Enter Second Witness Address Line 2</label>
                        <input type="text" name="witness_2_address_line_2" id="witness_address_line_2" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_address_line_3">Enter Second Witness Address Line 3</label>
                        <input type="text" name="witness_2_address_line_3" id="witness_address_line_3" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_city">Enter Second Witness City</label>
                        <input type="text" name="witness_2_city" id="witness_city" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_state">Enter Second Witness State</label>
                        <input type="text" name="witness_2_state" id="witness_state" class="form-control"> </input>
                    </div>
                    <div class="col-md-4">
                        <label for="witness_pincode">Enter Second Witness Pincode</label>
                        <input type="text" name="witness_2_pincode" id="witness_pincode" class="form-control"> </input>
                    </div>
                </div>
            </fieldset>
            <div>
                <button type="submit" class="btn viewbtn my-3" style="background-color: #4CAF50">Submit</button>
            </div>
    </div>
    </form>
    </div>
</body>

</html>