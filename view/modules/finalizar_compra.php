<?php require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="stylesheet" href="estilos.css">
    <?php require_once("../../view/modules/head.php") ?>
    <!-- RemixIcon CSS -->


</head>

<body>
    <?php require_once("../../view/modules/header.php") ?>
    <header>
        <h1>Carrito de compras</h1>
    </header>

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Checkout</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body checkout-tab">

                            <form action="#">
                                <div class="step-arrow-nav mt-n3 mx-n3 mb-3">

                                    <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3 active" id="pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-info" type="button" role="tab" aria-controls="pills-bill-info" aria-selected="true" data-position="0">
                                                <i class="ri-user-2-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Personal Info
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-address" type="button" role="tab" aria-controls="pills-bill-address" aria-selected="false" data-position="1">
                                                <i class="ri-truck-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Shipping Info
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false" data-position="2">
                                                <i class="ri-bank-card-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Payment Info
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-15 p-3" id="pills-finish-tab" data-bs-toggle="pill" data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-finish" aria-selected="false" data-position="3">
                                                <i class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Finish
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-bill-info" role="tabpanel" aria-labelledby="pills-bill-info-tab">
                                        <div>
                                            <h5 class="mb-1">Billing Information</h5>
                                            <p class="text-muted mb-4">Please fill all information below</p>
                                        </div>

                                        <div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="billinginfo-firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="billinginfo-firstName" placeholder="Enter first name" value="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="billinginfo-lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="billinginfo-lastName" placeholder="Enter last name" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="billinginfo-email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                                        <input type="email" class="form-control" id="billinginfo-email" placeholder="Enter email">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="billinginfo-phone" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" id="billinginfo-phone" placeholder="Enter phone no.">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="billinginfo-address" class="form-label">Address</label>
                                                <textarea class="form-control" id="billinginfo-address" placeholder="Enter address" rows="3"></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="country" class="form-label">Country</label>
                                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                            <div class="choices__inner"><select class="form-select choices__input" id="country" data-plugin="choices" hidden="" tabindex="-1" data-choice="active">
                                                                    <option value="United States" data-custom-properties="[object Object]">United States</option>
                                                                </select>
                                                                <div class="choices__list choices__list--single">
                                                                    <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="United States" data-custom-properties="[object Object]" aria-selected="true">United States</div>
                                                                </div>
                                                            </div>
                                                            <div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Select Country..." placeholder="Search results here">
                                                                <div class="choices__list" role="listbox">
                                                                    <div id="choices--country-item-choice-1" class="choices__item choices__item--choice choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Country...</div>
                                                                    <div id="choices--country-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="United States" data-select-text="Press to select" data-choice-selectable="">United States</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="state" class="form-label">State</label>
                                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                            <div class="choices__inner"><select class="form-select choices__input" id="state" data-plugin="choices" hidden="" tabindex="-1" data-choice="active">
                                                                    <option value="California" data-custom-properties="[object Object]">California</option>
                                                                </select>
                                                                <div class="choices__list choices__list--single">
                                                                    <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="California" data-custom-properties="[object Object]" aria-selected="true">California</div>
                                                                </div>
                                                            </div>
                                                            <div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Select State..." placeholder="Search results here">
                                                                <div class="choices__list" role="listbox">
                                                                    <div id="choices--state-item-choice-19" class="choices__item choices__item--choice choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="19" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select State...</div>
                                                                    <div id="choices--state-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Alabama" data-select-text="Press to select" data-choice-selectable="">Alabama</div>
                                                                    <div id="choices--state-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Alaska" data-select-text="Press to select" data-choice-selectable="">Alaska</div>
                                                                    <div id="choices--state-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="American Samoa" data-select-text="Press to select" data-choice-selectable="">American Samoa</div>
                                                                    <div id="choices--state-item-choice-4" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="4" data-value="California" data-select-text="Press to select" data-choice-selectable="">California</div>
                                                                    <div id="choices--state-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Colorado" data-select-text="Press to select" data-choice-selectable="">Colorado</div>
                                                                    <div id="choices--state-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="District Of Columbia" data-select-text="Press to select" data-choice-selectable="">District Of Columbia</div>
                                                                    <div id="choices--state-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Florida" data-select-text="Press to select" data-choice-selectable="">Florida</div>
                                                                    <div id="choices--state-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="Georgia" data-select-text="Press to select" data-choice-selectable="">Georgia</div>
                                                                    <div id="choices--state-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="Guam" data-select-text="Press to select" data-choice-selectable="">Guam</div>
                                                                    <div id="choices--state-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="Hawaii" data-select-text="Press to select" data-choice-selectable="">Hawaii</div>
                                                                    <div id="choices--state-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="Idaho" data-select-text="Press to select" data-choice-selectable="">Idaho</div>
                                                                    <div id="choices--state-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="Kansas" data-select-text="Press to select" data-choice-selectable="">Kansas</div>
                                                                    <div id="choices--state-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="Louisiana" data-select-text="Press to select" data-choice-selectable="">Louisiana</div>
                                                                    <div id="choices--state-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="Montana" data-select-text="Press to select" data-choice-selectable="">Montana</div>
                                                                    <div id="choices--state-item-choice-15" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="15" data-value="Nevada" data-select-text="Press to select" data-choice-selectable="">Nevada</div>
                                                                    <div id="choices--state-item-choice-16" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="16" data-value="New Jersey" data-select-text="Press to select" data-choice-selectable="">New Jersey</div>
                                                                    <div id="choices--state-item-choice-17" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="17" data-value="New Mexico" data-select-text="Press to select" data-choice-selectable="">New Mexico</div>
                                                                    <div id="choices--state-item-choice-18" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="18" data-value="New York" data-select-text="Press to select" data-choice-selectable="">New York</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="zip" class="form-label">Zip Code</label>
                                                        <input type="text" class="form-control" id="zip" placeholder="Enter zip code">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start gap-3 mt-3">
                                                <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-bill-address-tab">
                                                    <i class="ri-truck-line label-icon align-middle fs-16 ms-2"></i>Proceed to Shipping
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane fade" id="pills-bill-address" role="tabpanel" aria-labelledby="pills-bill-address-tab">
                                        <div>
                                            <h5 class="mb-1">Shipping Information</h5>
                                            <p class="text-muted mb-4">Please fill all information below</p>
                                        </div>

                                        <div class="mt-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Saved Address</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                        Add Address
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row gy-3">
                                                <div class="col-lg-4 col-sm-6">
                                                    <div class="form-check card-radio">
                                                        <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked="">
                                                        <label class="form-check-label" for="shippingAddress01">
                                                            <span class="mb-4 fw-semibold d-block text-muted text-uppercase">Home Address</span>

                                                            <span class="fs-14 mb-2 d-block">Marcus Alfaro</span>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">4739 Bubby Drive Austin, TX 78729</span>
                                                            <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                        <div>
                                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6">
                                                    <div class="form-check card-radio">
                                                        <input id="shippingAddress02" name="shippingAddress" type="radio" class="form-check-input">
                                                        <label class="form-check-label" for="shippingAddress02">
                                                            <span class="mb-4 fw-semibold d-block text-muted text-uppercase">Office Address</span>

                                                            <span class="fs-14 mb-2 d-block">James Honda</span>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">1246 Virgil Street Pensacola, FL 32501</span>
                                                            <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                        <div>
                                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <h5 class="fs-14 mb-3">Shipping Method</h5>

                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-check card-radio">
                                                            <input id="shippingMethod01" name="shippingMethod" type="radio" class="form-check-input" checked="">
                                                            <label class="form-check-label" for="shippingMethod01">
                                                                <span class="fs-20 float-end mt-2 text-wrap d-block fw-semibold">Free</span>
                                                                <span class="fs-14 mb-1 text-wrap d-block">Free Delivery</span>
                                                                <span class="text-muted fw-normal text-wrap d-block">Expected Delivery 3 to 5 Days</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check card-radio">
                                                            <input id="shippingMethod02" name="shippingMethod" type="radio" class="form-check-input" checked="">
                                                            <label class="form-check-label" for="shippingMethod02">
                                                                <span class="fs-20 float-end mt-2 text-wrap d-block fw-semibold">$24.99</span>
                                                                <span class="fs-14 mb-1 text-wrap d-block">Express Delivery</span>
                                                                <span class="text-muted fw-normal text-wrap d-block">Delivery within 24hrs.</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Personal Info</button>
                                            <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-payment-tab"><i class="ri-bank-card-line label-icon align-middle fs-16 ms-2"></i>Continue to Payment</button>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                        <div>
                                            <h5 class="mb-1">Payment Selection</h5>
                                            <p class="text-muted mb-4">Please select and enter your billing information</p>
                                        </div>

                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod01" name="paymentMethod" type="radio" class="form-check-input">
                                                        <label class="form-check-label" for="paymentMethod01">
                                                            <span class="fs-16 text-muted me-2"><i class="ri-paypal-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Paypal</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse" aria-expanded="true" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod02" name="paymentMethod" type="radio" class="form-check-input" checked="">
                                                        <label class="form-check-label" for="paymentMethod02">
                                                            <span class="fs-16 text-muted me-2"><i class="ri-bank-card-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Credit / Debit Card</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod03" name="paymentMethod" type="radio" class="form-check-input">
                                                        <label class="form-check-label" for="paymentMethod03">
                                                            <span class="fs-16 text-muted me-2"><i class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Cash on Delivery</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="collapse show" id="paymentmethodCollapse">
                                            <div class="card p-4 border shadow-none mb-0 mt-4">
                                                <div class="row gy-3">
                                                    <div class="col-md-12">
                                                        <label for="cc-name" class="form-label">Name on card</label>
                                                        <input type="text" class="form-control" id="cc-name" placeholder="Enter name">
                                                        <small class="text-muted">Full name as displayed on card</small>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="cc-number" class="form-label">Credit card number</label>
                                                        <input type="text" class="form-control" id="cc-number" placeholder="xxxx xxxx xxxx xxxx">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                                        <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="cc-cvv" class="form-label">CVV</label>
                                                        <input type="text" class="form-control" id="cc-cvv" placeholder="xxx">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted mt-2 fst-italic">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock text-muted icon-xs">
                                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg> Your transaction is secured with SSL encryption
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Shipping</button>
                                            <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-finish-tab"><i class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Complete Order</button>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
                                        <div class="text-center py-5">

                                            <div class="mb-4">
                                                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                            </div>
                                            <h5>Thank you ! Your Order is Completed !</h5>
                                            <p class="text-muted">You will receive an order confirmation email with details of your order.</p>

                                            <h3 class="fw-semibold">Order ID: <a href="apps-ecommerce-order-details.html" class="text-decoration-underline">VZ2451</a></h3>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Order Summary</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless align-middle mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th style="width: 90px;" scope="col">Product</th>
                                            <th scope="col">Product Info</th>
                                            <th scope="col" class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="avatar-md bg-light rounded p-1">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">Sweatshirt for Men (Pink)</a></h5>
                                                <p class="text-muted mb-0">$ 119.99 x 2</p>
                                            </td>
                                            <td class="text-end">$ 239.98</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md bg-light rounded p-1">
                                                    <img src="assets/images/products/img-7.png" alt="" class="img-fluid d-block">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">Noise Evolve Smartwatch</a></h5>
                                                <p class="text-muted mb-0">$ 94.99 x 1</p>
                                            </td>
                                            <td class="text-end">$ 94.99</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md bg-light rounded p-1">
                                                    <img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">350 ml Glass Grocery Container</a></h5>
                                                <p class="text-muted mb-0">$ 24.99 x 1</p>
                                            </td>
                                            <td class="text-end">$ 24.99</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold" colspan="2">Sub Total :</td>
                                            <td class="fw-semibold text-end">$ 359.96</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Discount <span class="text-muted">(VELZON15)</span> : </td>
                                            <td class="text-end">- $ 50.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Shipping Charge :</td>
                                            <td class="text-end">$ 24.99</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Estimated Tax (12%): </td>
                                            <td class="text-end">$ 18.20</td>
                                        </tr>
                                        <tr class="table-active">
                                            <th colspan="2">Total (USD) :</th>
                                            <td class="text-end">
                                                <span class="fw-semibold">
                                                    $353.15
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>

</body>

</html>

<style>
    /* Estilos para el contenedor de Choices */
.choices {
    position: relative;
    margin-bottom: 1rem;
}

/* Estilos para la lista interna de Choices */
.choices__inner {
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    background-color: #fff;
    cursor: pointer;
}

/* Estilos para el elemento seleccionado */
.choices__item--selectable {
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
    transition: background-color 0.2s ease;
}

/* Estilos para el último elemento seleccionado */
.choices__item--selectable:last-child {
    border-bottom: none;
}

/* Estilos para el estado de resaltado */
.choices__item--selectable.is-highlighted {
    background-color: #007bff;
    color: #fff;
}

/* Estilos para la lista desplegable */
.choices__list--dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 1000;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    background-color: #fff;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    max-height: 15rem;
    overflow-y: auto;
    display: none; /* Ocultar la lista por defecto */
}

/* Mostrar la lista cuando esté expandida */
.choices[aria-expanded="true"] .choices__list--dropdown {
    display: block;
}

/* Estilos para el input de búsqueda */
.choices__input--cloned {
    padding: 0.5rem 1rem;
    border: none;
    outline: none;
    width: 100%;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const countryElement = document.getElementById('country');
    const stateElement = document.getElementById('state');

    const countryChoices = new Choices(countryElement, {
        searchEnabled: true,
        placeholder: true,
        placeholderValue: 'Select Country...',
        shouldSort: false
    });

    const stateChoices = new Choices(stateElement, {
        searchEnabled: true,
        placeholder: true,
        placeholderValue: 'Select State...',
        shouldSort: false
    });
});
</script>
