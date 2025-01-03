<!doctype html>
<html lang="en" data-bs-theme="light">
<?php include('include/headjs.php'); ?>

<body>

    <!--start header-->
    <?php include('include/header.php'); ?>
    <!--end top header-->

    <!--start sidebar-->
    <?php include('include/sidebar.php'); ?>
    <!--end sidebar-->

    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Single Shipments</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <!-- start multistep form single shipment -->
            <div id="stepper1" class="bs-stepper">
            </div>
            <!--end stepper one-->

            <!--start stepper two-->
            <div id="stepper2" class="bs-stepper">
                <div class="card">
                    <div class="card-header">
                        <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between"
                            role="tablist">
                            <div class="step" data-target="#test-nl-1">
                                <div class="step-trigger" role="tab" id="stepper2trigger1" aria-controls="test-nl-1">
                                    <div class="bs-stepper-circle">
                                        <i class="material-icons-outlined">account_circle</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Consignee Details</h5>
                                        <p class="mb-0 steper-sub-title">Enter Your Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-nl-2">
                                <div class="step-trigger" role="tab" id="stepper2trigger2" aria-controls="test-nl-2">
                                    <div class="bs-stepper-circle">
                                        <i class="material-icons-outlined">contact_page</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Pickup Details</h5>
                                        <p class="mb-0 steper-sub-title">Setup Pickup Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-nl-3">
                                <div class="step-trigger" role="tab" id="stepper2trigger3" aria-controls="test-nl-3">
                                    <div class="bs-stepper-circle">
                                        <i class="material-icons-outlined">school</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Order Details</h5>
                                        <p class="mb-0 steper-sub-title">Setup Order Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-nl-4">
                                <div class="step-trigger" role="tab" id="stepper2trigger4" aria-controls="test-nl-4">
                                    <div class="bs-stepper-circle">
                                        <i class="material-icons-outlined">sentiment_satisfied</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Package Details</h5>
                                        <p class="mb-0 steper-sub-title">Setup Package Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bs-stepper-content">
                            <form onSubmit="return false">
                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper2trigger1">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Consignee Name</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="Number" class="form-control" placeholder="Mobile Numbr">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Full Address</label>
                                            <input type="text" class="form-control" placeholder="Enter address">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control" placeholder="Enter pincode">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" placeholder="Enter city">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">state</label>
                                            <input type="text" class="form-control" placeholder="Enter state">
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <button class="btn btn-outline-success px-4"
                                                onclick="stepper2.next()">Next</button>
                                        </div>
                                    </div>
                                    <!---end row-->
                                </div>

                                <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper2trigger2">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="Number" class="form-control" placeholder="Mobile Numbr">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Complete Address</label>
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control" placeholder="Enter pincode">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" placeholder="Enter city">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">state</label>
                                            <input type="text" class="form-control" value="india">
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-outline-warning px-4"
                                                    onclick="stepper2.previous()">Back</button>
                                                <button class="btn btn-outline-success px-4"
                                                    onclick="stepper2.next()">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!---end row-->
                                </div>

                                <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper2trigger3">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Order ID</label>
                                            <input type="text" class="form-control" placeholder="Enter Order ID">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Payment Mode</label>
                                            <select class="form-select">
                                                <option selected="">Select Mode</option>
                                                <option value="1">COD</option>
                                                <option value="2">Prepaid</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="form-row row my-3">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Product Name</label>
                                                <input type="text" name="prd_name[]" class="form-control"
                                                    placeholder="Enter name">
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" name="prd_desc[]" class="form-control"
                                                    placeholder="Enter Description">
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <label class="form-label">Unit Price</label>
                                                <input type="text" name="prd_unit[]" class="form-control">
                                            </div>
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Category</label>
                                                <input type="text" name="prd_hsn[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="add-product"></div>
                                        <div class="col-3">
                                            <button type="button" id="add-more" class="btn btn-inverse-success">+ Add
                                                More Product</button>
                                        </div>
                                        <div class="form-row row mt-5">
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Total Amount</label>
                                                <input type="text" name="total_amount" class="form-control"
                                                    placeholder="Enter Quantity">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">CGST</label>
                                                <input type="text" name="total_cgst" class="form-control"
                                                    placeholder="Enter CGST">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-outline-warning px-4"
                                                    onclick="stepper2.previous()">Back</button>
                                                <button class="btn btn-outline-success px-4"
                                                    onclick="stepper2.next()">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!---end row-->
                                </div>

                                <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper2trigger4">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-3">
                                            <label class="form-label">Dead Weight</label>
                                            <input type="text" class="form-control" placeholder="Enter Weight" />
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <label class="form-label">Length</label>
                                            <input type="text" class="form-control" placeholder="Enter length" />
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <label class="form-label">Width</label>
                                            <input type="text" class="form-control" placeholder="Enter width" />
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <label class="form-label">Height</label>
                                            <input type="text" class="form-control" placeholder="Enter height" />
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-outline-warning px-4"
                                                    onclick="stepper2.previous()">Back</button>
                                                <button class="btn btn-outline-success px-4"
                                                    onclick="stepper2.next()">Process Order</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!---end row-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end stepper two-->
            <!-- start multistep form single shipment -->
        </div>
    </main>
    <!--end main wrapper-->
    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    <!--start footer-->
    <?php include('include/footer.php') ?>
    <!--end footer-->
    <?php include('include/scriptjs.php'); ?>
    <script>
    $(document).ready(function() {
        let rowCount = 1;

        // Add new product row
        $("#add-more").click(function() {
            let productRowHTML = `
                    <div class="form-row row my-3" data-row-id="${rowCount}">
                        <div class="col-12 col-lg-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="prd_name[]" class="form-control" placeholder="Enter product name">
                        </div>
                        <div class="col-12 col-lg-2">
                            <label class="form-label">Quantity</label>
                            <input type="text" name="prd_desc[]" class="form-control" placeholder="Enter quantity">
                        </div>
                        <div class="col-12 col-lg-2">
                            <label class="form-label">Unit Price</label>
                            <input type="text" name="prd_unit[]" class="form-control">
                        </div>
                        <div class="col-12 col-lg-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="prd_hsn[]" class="form-control" placeholder="Enter category">
                        </div>
                        <div class="col-12 col-lg-2">
                            <button type="button " data-row-id="${rowCount}" class=" remove-product btn btn-danger raised d-flex gap-2 mt-4"><i class="material-icons-outlined">delete</i></button>
                        </div>
                    </div>
                `;

            $('.add-product').append(productRowHTML);

            rowCount++;
        });

        // Remove a product row
        $(document).on('click', '.remove-product', function() {
            var rowId = $(this).data('row-id');

            $(this).closest('.form-row').remove();
        });
    });
    </script>
</body>

</html>