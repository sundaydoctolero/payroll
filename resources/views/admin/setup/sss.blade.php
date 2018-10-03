@extends('layouts.admin.master');

@section('css')
    <style>
        h1{
            color: red;
        }
    </style>
@endsection

@section('sss_template')
    <div class="container-fluid">
    <h1>SSS</h1>
        
        <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Range Of Compensation From</th>
            <th scope="col">Range of Compensation To</th>
            <th scope="col">Salary Credit</th>
            <th scope="col">Employer Share</th>
            <th scope="col">Employee Share</th>
            <th scope="col">Social Security Total</th>
            <th scope="col">Employer EC Share</th>
            <th scope="col">Employer Share Total</th>
            <th scope="col">Employee Share Total</th>
            <th scope="col">Total Contributions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1,000</td>
            <td>1,249.99</td>
            <td>1,000</td>
            <td>73.70</td>
            <td>36.30</td>
            <td>110.00</td>
            <td>10.00</td>
            <td>83.70</td>
            <td>36.30</td>
            <td>120.00</td>
            
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>1,250</td>
            <td>1,749.99</td>
            <td>1,500</td>
            <td>110.50</td>
            <td>54.50</td>
            <td>165.00</td>
            <td>10.00</td>
            <td>120.50</td>
            <td>54.50</td>
            <td>175.00</td>
        </tr>
        
        </tbody>
        </table>
    </div>
@endsection


@section('script')
    
@endsection