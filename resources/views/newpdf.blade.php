<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippet - BBBootstrap</title>
    <style>
        @font-face {
            font-family: Arial !important;
            font-display: swap !important;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            margin: 0;
            font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: .8125rem;
            font-weight: 400;
            line-height: 1.5385;
            color: #333;
            text-align: left;
            background-color: #eee;
        }

        .mt-50 {

            margin-top: 50px;
        }

        .mb-50 {

            margin-bottom: 50px;
        }


        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .1875rem;
        }

        .card-img-actions {
            position: relative;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
            text-align: center;
        }

        .card-title {
            margin-top: 10px;
            font-size: 17px;
        }


        .invoice-color {
            color: red !important;
        }

        .card-header {
            padding: .9375rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .02);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }

        a {

            text-decoration: none !important;
        }


        .btn-light {
            color: #333;
            background-color: #fafafa;
            border-color: #ddd;
        }

        .header-elements-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        @media (min-width: 768px) {
            .wmin-md-400 {
                min-width: 400px !important;
            }
        }


        .btn-primary {
            color: #fff;
            background-color: #2196f3;
        }

        .btn-labeled > b {
            position: absolute;
            top: -1px;
            background-color: blue;
            display: block;
            line-height: 1;
            padding: .62503rem;
        }</style>
</head>
<body classname="snippet-body">
<div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">Sale invoice</h6>
                    <div class="header-elements">
                        <button type="button" class="btn btn-light btn-sm"><i class="fa fa-file mr-2"></i> Save</button>
                        <button type="button" class="btn btn-light btn-sm ml-3"><i class="fa fa-print mr-2"></i> Print
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4 pull-left">
                                <img style="width: 100px" src="{{asset('LOGO-1.png.webp')}}"/>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-4 ">
                                <div class="text-sm-right">
                                    <h4 class="invoice-color mb-2 mt-md-2">PO #{{$customerInfo->po_number ?? ''}}</h4>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Date: <span
                                                class="font-weight-semibold">{{$customerInfo->date ?? ''}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-flex flex-md-wrap">
                        <div class="mb-4 mb-md-2 text-left">
                            <ul class="list list-unstyled mb-0">
                                <li><h5 class="my-2">Buyer:{{$customerInfo->buyer_name ?? ''}}</h5></li>
                                <li><span class="font-weight-semibold">Contact:  {{$customerInfo->contact ?? ''}}</span>
                                </li>
                                <li>Address: {{$customerInfo->address ?? ''}}</li>
                                <li>Contact: {{$customerInfo->telephone ?? ''}}</li>
                                <li><a href="#" data-abc="true">Email:{{$customerInfo->email ?? ''}}</a></li>
                            </ul>
                        </div>

                        <div class="mb-2 ml-auto">
                            <div class="d-flex flex-wrap wmin-md-400">
                                <ul class="list list-unstyled mb-0 text-left">
                                    <li>City: {{$customerInfo->city ?? ''}}</li>
                                    <li>State: {{$customerInfo->state ?? ''}}</li>
                                    <li>ZIP: {{$customerInfo->zip ?? ''}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead style="background-color: #0c5460">
                        <tr>
                            <td class="text-white">Base Car</td>
                            <td class="text-white">VIN</td>
                            <td class="text-white">Exterior Color</td>
                            <td class="text-white">MB Code</td>
                            <td class="text-white">Interior Color</td>
                            <td class="text-white">REP</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$carInfo->base_car ?? ''}}</td>
                            <td>{{$carInfo->vin ?? ''}}</td>
                            <td>{{$carInfo->exterior_color ?? ''}}</td>
                            <td>{{$carInfo->mb_code ?? ''}}</td>
                            <td>{{$carInfo->interior_color ?? ''}}</td>
                            <td>{{$carInfo->rep ?? ''}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg">
                        <thead style="background-color: #0c5460">
                        <tr>
                            <th class="text-white">STANDARD EQUIPMENT SUBJECT TO CHANGE</th>
                            <th class="text-white">Rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $sum = 0;
                        @endphp
                        @foreach($chunked as $item)
                            <tr>
                                @foreach($item as $it)
                                    @php
                                        $sum += $it->price;
                                    @endphp
                                    <td>
                                        <h6 class="mb-0">{{$it->title ?? ''}}</h6>
                                    </td>
                                    <td>${{$it->price ?? ''}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td colspan="">${{$sum}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg">
                        <thead style="background-color: #0c5460">
                        <tr>
                            <th colspan="9" class="text-white">Additional Option</th>
                            <th class="text-white">Rate</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                        $sum = 0;
                        @endphp
                        @foreach($options as $option)
                            @php
                            $sum += $option->price ?? 0;
                            @endphp
                        <tr>
                            <td colspan="9">
                                <h6 class="mb-0">{{$option->title ?? ''}}</h6>
                             </td>
                            <td>${{$option->price ?? ''}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="9">
                            </td>
                            <td>Total : ${{$sum}}</td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:395pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="8" rowspan="13"><p class="s7"
                                                            style="padding-top: 2pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">
                                    Buyer Hereby certifies that</p>
                                <ol id="l28">
                                    <li data-list-text="(i)"><p class="s12"
                                                                style="padding-top: 4pt;padding-left: 1pt;padding-right: 1pt;text-indent: 0pt;line-height: 120%;text-align: left;">
                                            Buyer has read the printed matter of this Purchase Agreement, also includes
                                            all of the Terms
                                            and
                                            Conditions of this Purchase Agreement hereof and Buyer agrees to all of such
                                            terms as part
                                            of
                                            this agreement as if each were printed above Buyer&#39;s signature.</p>
                                        <p style="text-indent: 0pt;text-align: left;"><br/></p></li>
                                    <li data-list-text="(ii)"><p class="s12"
                                                                 style="padding-left: 1pt;padding-right: 13pt;text-indent: 0pt;line-height: 120%;text-align: left;">
                                            That this Agreement cancels or supersedes any prior Agreement or
                                            discussions, as of the date
                                            here of comprises the completed and exclusive statement of the terms and
                                            conditions of the
                                            Agreement relating to the subject matter here of and,</p>
                                        <p style="text-indent: 0pt;text-align: left;"><br/></p></li>
                                    <li data-list-text="(iii)"><p class="s12"
                                                                  style="padding-left: 1pt;padding-right: 10pt;text-indent: 0pt;line-height: 120%;text-align: left;">
                                            That in no event shall the Buyer be entitled to lost revenue or
                                            consequential damages. Climb
                                            Entertainment, LLC shall not be held responsible for any incidental damages
                                            for any default
                                            hereunder.</p></li>
                                </ol>
                                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                                <p class="s12"
                                   style="padding-left: 1pt;padding-right: 4pt;text-indent: 0pt;line-height: 120%;text-align: left;">
                                    UNTIL
                                    ACCEPTED BY THE SIGNATURE OF AN AUTHORIZED REPRESENTATIVE OF CLIMB ENTERTAINMENT LLC
                                    CORPORATE
                                    OFFICE.
                                    THIS CONTRACT CONTAINS A BINDING ARBITRATION PROVISION WHICH MAY BE ENFORCED BY THE
                                    PARTIES.</p>
                            </td>
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: right;">PRICE</p>
                            </td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-top: 2pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">${{$customerOptionsPrice ?? ''}}</p>
                            </td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:148pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:148pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s3"
                                   style="padding-top: 1pt;text-indent: 0pt;text-align: right;">{{$carInfo->base_car ?? ''}}</p></td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-top: 2pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">car
                                    price</p>
                            </td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:148pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s3" style="text-indent: 0pt;line-height: 8pt;text-align: right;">OPTIONS</p>
                            </td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-left: 3pt;text-indent: 0pt;line-height: 8pt;text-align: left;">${{$customerOptionsPrice ?? '0'}}</p>
                            </td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:148pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt;border-right-color:#538135">
                                <p class="s3"
                                   style="padding-right: 2pt;text-indent: 0pt;line-height: 8pt;text-align: right;">
                                    </p></td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-left-color:#538135;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:148pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:9pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s3" style="text-indent: 0pt;line-height: 8pt;text-align: right;">TOTAL
                                    MSRP</p></td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-left: 3pt;text-indent: 0pt;line-height: 8pt;text-align: left;">$
                                    166,787.00</p>
                            </td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: right;">DISCOUNT</p>
                            </td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-top: 2pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">$
                                    5,000.00</p>
                            </td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                bgcolor="#F0F4FC"><p class="s16" style="text-indent: 0pt;text-align: right;">TOTAL SALE
                                    PRICE</p></td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                bgcolor="#F0F4FC"><p class="s2"
                                                     style="padding-top: 2pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">
                                    $
                                    161,787.00</p></td>
                        </tr>
                        <tr style="height:14pt">
                            <td style="width:148pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:188pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt"
                                rowspan="3"><p class="s12"
                                               style="padding-top: 2pt;padding-right: 51pt;text-indent: 0pt;text-align: right;">
                                    BUILDER AUTHORIZED SIGNATURE:</p>
                                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                                <p class="s7" style="padding-right: 54pt;text-indent: 0pt;text-align: right;">Check
                                    payable to ONE
                                    HUNDRED
                                    NAMES LLC</p></td>
                            <td style="width:58pt;border-bottom-style:solid;border-bottom-width:1pt" colspan="4"
                                rowspan="3"><p
                                    style="text-indent: 0pt;text-align: left;"><br/></p></td>
                            <td style="width:149pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="3" rowspan="3"><p class="s12"
                                                           style="padding-top: 2pt;padding-left: 45pt;text-indent: 0pt;text-align: left;">
                                    ACCEPTANCE SIGNATURE</p>
                                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                                <p class="s2" style="padding-left: 28pt;text-indent: 0pt;text-align: left;">DATE:
                                    November 14, 2023</p>
                            </td>
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-top: 1pt;text-indent: 0pt;text-align: right;">DEPOSIT</p>
                            </td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-top: 2pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">$ -</p>
                            </td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-top: 1pt;text-indent: 0pt;text-align: right;">TRADE-IN</p>
                            </td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2"
                                   style="padding-top: 2pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">$ -</p>
                            </td>
                        </tr>
                        <tr style="height:13pt">
                            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                bgcolor="#F0F4FC"><p class="s16" style="text-indent: 0pt;text-align: right;">TOTAL
                                    BALANCE DUE</p></td>
                            <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                bgcolor="#F0F4FC"><p class="s3"
                                                     style="padding-top: 2pt;text-indent: 0pt;text-align: right;">
                                    $161,787.00</p>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="card-body">
                    <div class="d-md-flex flex-md-wrap">


                        <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                            <h6 class="mb-3 text-left">Total due</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th class="text-left">Subtotal:</th>
                                        <td class="text-right">$1,090</td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Tax: <span class="font-weight-normal">(25%)</span></th>
                                        <td class="text-right">$27</td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Total:</th>
                                        <td class="text-right text-primary"><h5 class="font-weight-semibold">$1,160</h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right mt-3">
                                <button type="button" class="btn btn-primary"><b><i
                                            class="fa fa-paper-plane-o mr-1"></i></b> Send invoice
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit</span>
                </div>
            </div>

        </div>


    </div>
</div>
<script type="text/javascript"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    var myLink = document.querySelectorAll('a[href="#"]');
    myLink.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
        });
    });
</script>

</body>
</html>
