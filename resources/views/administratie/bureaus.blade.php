<!-- Extend the layout -->
@extends('layouts.algemeen')

<!-- Assign page title -->
@section('title', 'Bureaus')

@section('header')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bureaus Overzicht - &nbsp;
                            <small>Lijst en administratie</small>
                        </h5>
                    </div>
                    
                    <div class="ibox-content">
                        <form action="{{action('bureausController@store')}}" method="post">
                        {{csrf_field()}}
                        <table>
                            <tr>
                                <td>Naam</td>
                                <td><input type="text" name="bureau"/></td>
                            </tr>
                            <tr>
                                <td>Omschrijving</td>
                                <td><input type="text" name="omschrijving"/></td>
                            </tr>
                        </table>
                        <input class="btn btn-primary" type="submit" value="Add Bureau"/>
                        
                        </form>
                    </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordere table-hoverd dataTables-example">
                    <thead>
                        <tr>
                            <th>Bureau</th>
                            <th>Omschrijving</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bureaus as $blijst)
                        <tr>
                            <td>{{ $blijst->bureau }}</td>
                            <td>{{ $blijst->omschrijving }}</td>
                            <td><a href="#" class="btn btn-warning btn-xs">Edit</a></td>
                            <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            
                </div>
            </div>
          </div>
          </div>
            
        </div>
    </div>

@endsection

@section('scripts')

<link src="{{ asset('js/plugins/peity/angular-peity.js') }}">

<!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                paging: false,
                searching: false,
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'BureausLijst'},
                    {extend: 'pdf', title: 'BureausLijst', pageSize: 'A4'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

@endsection