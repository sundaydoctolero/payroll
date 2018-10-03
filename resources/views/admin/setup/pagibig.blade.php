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

@section('pagibig_template')
    <div class="container-fluid">
    <h1>PAGIBIG</h1>
        
        <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Monthly Compensations From</th>
            <th scope="col">Monthly Compensations To</th>
            <th scope="col">Employee Share</th>
            <th scope="col">Employer Share</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>0</td>
            <td>1,500</td>
            <td>100</td>
            <td>1%</td> 
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>1,500</td>
            <td>1,000,000</td>
            <td>100</td>
            <td>1%</td>
          </tr>
        
        </tbody>
        </table>
    </div>
@endsection

@section('script')
    
@endsection