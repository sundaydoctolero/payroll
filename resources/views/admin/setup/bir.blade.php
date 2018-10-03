@extends('layouts.admin.master');

@section('template')
   <h1>SSS</h1>
@endsection

@section('css')
    <style>
        h1{
            color: red;
        }
    </style>
@endsection

@section('bir_template')
    <div class="container-fluid">
    <h1>BIR</h1>
        
        <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Salary Type</th>
            <th scope="col">Compensation Range From</th>
            <th scope="col">Compensation Range To</th>
            <th scope="col">Fixed Tax</th>
            <th scope="col">Percentage</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Cash</td>
            <td>1,000</td>
            <td>15,000</td>
            <td>1,250.00</td>
            <td>30%</td> 
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Check</td>
            <td>16,000</td>
            <td>80,000</td>
            <td>5,000.00</td>
            <td>30%</td>
          </tr>
        
        </tbody>
        </table>
    </div>
@endsection

@section('script')
    
@endsection