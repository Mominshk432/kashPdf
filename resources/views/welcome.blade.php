<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wizard-v6</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/opensans-font.css')}}">
    <link rel="stylesheet" type="text/css"
          href="fonts/material-design-iconic-font/{{asset('css/material-design-iconic-font.min.css')}}">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
    <!-- Main Style Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>


</head>
<body>
<div class="page-content">
    <div class="wizard-heading">Form Booking Wizard</div>
    <div class="wizard-v6-content w-75">
        <div class="wizard-form">
            <form class="form-register" method="post" action="{{route('form.store')}}" id="form-register">
                @csrf
                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2>
                        <p class="step-icon"><span>1</span></p>
                        <span class="step-text">Customer Information</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="form-heading">
                                <h3>Customer Information</h3>
                                <span>1/3</span>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="date" class="form-control" id="date" name="date"
                                               required>
                                        <span class="label"></span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="buyer_name" name="buyer_name"
                                               required>
                                        <span class="label">BUYER</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="po_number" name="po_number"
                                               required>
                                        <span class="label">P.O.#</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="contact" name="contact"
                                               required>
                                        <span class="label">Contact</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="invoice_number"
                                               name="invoice_number" required>
                                        <span class="label">Invoice Number</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" name="address" id="address" class="form-control"
                                               required>
                                        <span class="label">Address</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="city" name="city" required>
                                        <span class="label">City</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="state" name="state" required>
                                        <span class="label">State</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="zip" name="zip" required>
                                        <span class="label">Zip</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" class="form-control" id="telephone" name="telephone"
                                               required>
                                        <span class="label">Telephone</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="email" name="email" id="address" class="form-control"
                                               required>
                                        <span class="label">Email</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 2 -->
                    <h2>
                        <p class="step-icon"><span>2</span></p>
                        <span class="step-text">Car Information</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="form-heading">
                                <h3>Car Information</h3>
                                <span>2/3</span>
                            </div>

                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" name="base_car" id="base_car" class="form-control"
                                               required>
                                        <span class="label">Base Car</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" name="vin" id="vin" class="form-control"
                                               required>
                                        <span class="label">VIN #</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" name="exterior_color" id="exterior_color"
                                               class="form-control"
                                               required>
                                        <span class="label">Exterior Color</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" name="interior_color" id="interior_color"
                                               class="form-control"
                                               required>
                                        <span class="label">Interior Color</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="email" name="mb_code" id="mb_code"
                                               class="form-control"
                                               required>
                                        <span class="label">MB Code</span>
                                    </label>
                                </div>
                                <div class="form-holder">
                                    <label class="form-row-inner w-100">
                                        <input type="text" name="rep" id="red"
                                               class="form-control"
                                               required>
                                        <span class="label">REP</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <p class="step-icon"><span>3</span></p>
                        <span class="step-text">Standard Equipment Subject To Change</span>
                    </h2>
                    <section>
                        @php
                            $equipments = \App\Models\Equipment::latest()->get();
                        @endphp
                        <div class="inner">
                            <div class="form-heading">
                                <h3>Standard Equipment Subject To Change</h3>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#add_equipment_modal"
                                        class=" btn btn-primary h-100">Add Equipment
                                </button>
                            </div>
                            <div class="form-group">
                                <label class="text-white" for=""><b>Select Equipment</b></label>
                                <br>
                                <select id="tagsSelect" multiple="multiple" name="equipments[]" id="">
                                    @foreach($equipments as $equipment)
                                        <option value="{{ $equipment->id }}">{{ $equipment->title ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 4 -->
                    <h2>
                        <p class="step-icon"><span>4</span></p>
                        <span class="step-text">Additional Options</span>
                    </h2>
                    <section>
                        @php
                            $Options = \App\Models\Options::latest()->get();
                        @endphp
                        <div class="inner">
                            <div class="form-heading">
                                <h3>Additional Options</h3>
                                <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#add_additional_options_modal"
                                        class=" btn btn-primary h-100">Add Options
                                </button>
                            </div>
                            <div class="form-group">
                                <label class="text-white" for=""><b>Select Equipment</b></label>
                                <br>
                                <select id="tagsSelect2" multiple="multiple" name="options[]" id="">
                                    @foreach($Options as $option)
                                        <option value="{{ $option->id }}">{{ $option->title ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </section>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add_equipment_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Equipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addEquipmentForm">
                @csrf
                <div class="modal-body">
                    <div id="append_equipment">
                        <div class="prompt"></div>
                        <div class="d-flex gap-3 align-items-end mb-3">
                            <div class="form-group">
                                <label for=""><b>Title</b></label>
                                <input required autocomplete="off" class="form-control" type="text"
                                       name="equipment_name[]">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Price</b></label>
                                <input required autocomplete="off" class="form-control" type="number"
                                       name="equipment_price[]">
                            </div>
                            <button onclick="addMoreEquipment()" type="button" class="btn btn-success">+</button>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="add_additional_options_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addOptionsForm">
                @csrf
                <div class="modal-body">
                    <div id="append_equipment">
                        <div class="prompt"></div>
                        <div class="d-flex gap-3 align-items-end mb-3">
                            <div class="form-group">
                                <label for=""><b>Title</b></label>
                                <input required autocomplete="off" class="form-control" type="text"
                                       name="option_name[]">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Price</b></label>
                                <input required autocomplete="off" class="form-control" type="number"
                                       name="option_price[]">
                            </div>
                            <button onclick="addMoreEquipment()" type="button" class="btn btn-success">+</button>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('js/jquery.steps.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    function addMoreEquipment() {
        $('#append_equipment').append(`
        <div class="d-flex gap-3 align-items-end mb-3">
                    <div class="form-group">
                        <label for=""><b>Title</b></label>
                        <input required autocomplete="off" class="form-control" type="text" name="equipment_name[]">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Price</b></label>
                        <input required autocomplete="off" class="form-control" type="number" name="equipment_price[]">
                    </div>
                    <button onclick="$(this).parent().remove()" type="button" class="btn btn-danger">-</button>
                </div>
        `);
    }

    $("#addEquipmentForm").on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($("#addEquipmentForm")[0]);
        $.ajax({
            type: "POST",
            url: "{{ route('equipment.store') }}",
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            data: formData,
            beforeSend: function () {

            },
            success: function (res) {
                if (res.Error === true) {
                    $('.prompt').html(
                        '<div class="alert alert-danger" style="text-align:left !important"><i class="fa fa-times" style="margin-right:10px;"></i>' +
                        res.Message + '</div>');
                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                    }, 2000);

                } else {
                    $('.prompt').html(
                        '<div class="alert alert-success" style="text-align:left !important"><i class="fa fa-check" style="margin-right:10px;"></i>' +
                        res.Message + '</div>');
                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);
                }
            },
            error: function (e) {

            }

        });
    });
    $("#addOptionsForm").on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($("#addOptionsForm")[0]);
        $.ajax({
            type: "POST",
            url: "{{ route('option.store') }}",
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            data: formData,
            beforeSend: function () {

            },
            success: function (res) {
                if (res.Error === true) {
                    $('.prompt').html(
                        '<div class="alert alert-danger" style="text-align:left !important"><i class="fa fa-times" style="margin-right:10px;"></i>' +
                        res.Message + '</div>');
                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                    }, 2000);

                } else {
                    $('.prompt').html(
                        '<div class="alert alert-success" style="text-align:left !important"><i class="fa fa-check" style="margin-right:10px;"></i>' +
                        res.Message + '</div>');
                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);
                }
            },
            error: function (e) {

            }

        });
    });
    $(document).ready(function () {
        $('#tagsSelect').select2({
            tags: true,
            tokenSeparators: [',', ' '],
            theme: "classic",

        });
    });
    $(document).ready(function () {
        $('#tagsSelect2').select2({
            tags: true,
            tokenSeparators: [',', ' '],
            theme: "classic",

        });
        var specificLinks = $('a[href="#finish"]');
        console.log(specificLinks);
        $(specificLinks[0]).on("click", function () {
            console.log('finish');
            $('#form-register').submit();
        });
    });


</script>
</body>
</html>
