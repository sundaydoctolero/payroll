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
    <h1>PHILHEALTH</h1>
        
        <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Monthly Basic Salary From</th>
            <th scope="col">Monthly Basic Salary To</th>
            <th scope="col">Fixed Amount</th>
            <th scope="col">Percentage</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>12,000</td>
            <td>150</td>
            <td>10%</td> 
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>12,001</td>
            <td>100,000.00</td>
            <td>150</td>
            <td>20%</td>
          </tr>
        
        </tbody>
        </table>
    </div>
@endsection
@section('script')
    
@endsection