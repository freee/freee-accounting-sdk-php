@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            <div class="card">
                <div class="card-header">User information</div>

                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3 mb-2 text-muted">
                        Email
                      </div>
                      <div class="col-md-auto">
                        {{ $user->email }}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-2 text-muted">
                        Last name
                      </div>
                      <div class="col-md-auto">
                        {{ $user->last_name }}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-2 text-muted">
                        First name
                      </div>
                      <div class="col-md-auto">
                        {{ $user->first_name }}
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            <div class="card">
              <div class="card-header">Deals</div>

              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Type</th>
                      <th scope="col">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($deals as $i => $deal)
                    <tr>
                      <th scope="row">{{ $i }}</th>
                      <td>{{ $deal->getIssueDate() }}</td>
                      <td>{{ $deal->getType() }}</td>
                      <td>{{ $deal->getAmount() }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            <div class="card">
              <div class="card-header">Invoices</div>

              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Issue date</th>
                      <th scope="col">Invoicde status</th>
                      <th scope="col">Total amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($invoices as $i => $invoice)
                    <tr>
                      <th scope="row">{{ $invoice->getInvoiceNumber() }}</th>
                      <td>{{ $invoice->getIssueDate() }}</td>
                      <td>{{ $invoice->getInvoiceStatus() }}</td>
                      <td>{{ $invoice->getTotalAmount() }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>

</div>
@endsection
