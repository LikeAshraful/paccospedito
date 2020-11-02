@extends('layouts.app')

@section('content')
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    	<div class="page-title">
                    		<h1>Spedizione LDV</h1>
                            <p style="text-align:center;font-weight:bold;padding-top: 1rem;margin-bottom: 0">Fill up the form or upload CSV</p>
                    	</div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="sender-tab" data-toggle="pill" href="#pills-sender" role="tab" aria-controls="pills-sender" aria-selected="true">sender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="recipient-tab" data-toggle="pill" href="#pills-recipient" role="tab" aria-controls="pills-recipient" aria-selected="false">recipient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="shipment-data-tab" data-toggle="pill" href="#pills-shipment-data" role="tab" aria-controls="pills-shipment-data" aria-selected="false">shipment data</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-sender" role="tabpanel" aria-labelledby="sender-tab">
                                <form class="form-inline" style="padding: 1.5rem 1rem">
                                    <select class="search-sender" style="width: 60%">
                                        <option></option>
                                        <option>GLOTT ELETRONIC STORE S.R.L.</option>
                                        <option>GLOTT ELETRONIC STORE S.R.L.</option>
                                        <option>GLOTT ELETRONIC STORE S.R.L.</option>
                                    </select>
                                    <button type="submit" class="btn btn-common ml-3">Add</button>
                                </form>
                                <form>
                                    <div class="contact-details">
                                        <h2>recapito</h2>
                                        <div>
                                            <input type="text" class="form-control mb-2" value="Italy" readonly="true">
                                            <input type="text" class="form-control mb-2" placeholder="Province">
                                            <div class="form-inline" style="padding: 0;padding-bottom: 0.5rem">
                                                <input type="text" class="form-control" placeholder="Cap">
                                            </div>
                                            <input type="text" class="form-control mb-2" placeholder="Location">
                                            <textarea class="form-control" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="reference">
                                        <h2>referance</h2>
                                        <input type="text" class="form-control" placeholder="Telephone">
                                    </div>
                                    <button class="btn btn-common mr-5" style="float: right;">next</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-recipient" role="tabpanel" aria-labelledby="recipient-tab">
                                <form>
                                    <div class="contact-details">
                                        <h2>recapito</h2>
                                        <div>
                                            <input type="text" class="form-control mb-2" placeholder="Recipient">
                                            <input type="text" class="form-control mb-2" value="Italy" readonly="true">
                                            <input type="text" class="form-control mb-2" placeholder="Province">
                                            <div class="form-inline" style="padding: 0;padding-bottom: 0.5rem">
                                                <input type="text" class="form-control" placeholder="Cap">
                                            </div>
                                            <input type="text" class="form-control mb-2" placeholder="Location">
                                            <textarea class="form-control" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="reference">
                                        <h2>riferimenti</h2>
                                        <input type="text" class="form-control" placeholder="Telephone">
                                    </div>
                                    <button class="btn btn-common ml-5">prev</button>
                                    <button class="btn btn-common mr-5" style="float: right">next</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-shipment-data" role="tabpanel" aria-labelledby="shipment-data-tab">
                                <form>
                                    <div class="contact-details">
                                        <h2>shipment detail</h2>
                                        <div>
                                            <select class="form-control mb-2">
                                                <option>Standard</option>
                                                <option>Express</option>
                                            </select>
                                            <input type="text" class="form-control mb-2" placeholder="Note">
                                            <div class="form-inline" style="padding: 0;padding-bottom: 0.5rem">
                                                <input type="text" class="form-control" placeholder="Weight">
                                                <small class="ml-3">Max 30 kg</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="weight">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Envelopes</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Parcels</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Height">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Width">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Depth">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <button class="btn btn-common ml-5">prev</button>
                                    <button class="btn btn-common float-right mr-5">sent</button>
                                    <button class="btn btn-common float-right mr-2">save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="upload-csv">
                            <h2>Upload File</h2>
                            <form class="pt-5 pb-5 pl-3 pr-3">
                                <div class="file-upload-wrapper" data-text="Select your file!">
                                    <input name="file-upload-field" type="file" class="file-upload-field" value="">
                                </div>
                                <button type="submit" class="btn btn-common">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="parcel-que mt-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Sender</th>
                                        <th scope="col">Receiver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->
      
@endsection
