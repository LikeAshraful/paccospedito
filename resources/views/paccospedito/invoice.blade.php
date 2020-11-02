@extends('layouts.app')

@section('content')
<main class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h1>payment status</h1>
                </div>
            </div>
            <div class="col-lg-10">
                <table id="payment-status" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Invoice</th>
                            <th>Payment Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12 Sep 2020, 05:00 PM</td>
                            <td><span class="badge badge-info">Pending</span></td>
                            <td><a href="#">Invoice 01</a></td>
                            <td>
                                <a href="https://support.stripe.com/questions/send-customers-to-stripe-com-to-make-a-payment" target="_blank">Pay Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>12 Sep 2020, 05:00 PM</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td><a href="#">Invoice 02</a></td>
                            <td>
                                <a href="https://support.stripe.com/questions/send-customers-to-stripe-com-to-make-a-payment" target="_blank">Pay Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>12 Sep 2020, 05:00 PM</td>
                            <td><span class="badge badge-danger">Expired</span></td>
                            <td><a href="#">Invoice 03</a></td>
                            <td>
                                <a href="https://support.stripe.com/questions/send-customers-to-stripe-com-to-make-a-payment" target="_blank">Pay Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>12 Sep 2020, 05:00 PM</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td><a href="#">Invoice 03</a></td>
                            <td>
                                <a href="https://support.stripe.com/questions/send-customers-to-stripe-com-to-make-a-payment" target="_blank">Pay Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>12 Sep 2020, 05:00 PM</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td><a href="#">Invoice 04</a></td>
                            <td>
                                <a href="https://support.stripe.com/questions/send-customers-to-stripe-com-to-make-a-payment" target="_blank">Pay Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- page-content" -->
@endsection