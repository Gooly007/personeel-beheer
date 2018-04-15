@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Registratie Formulier')

@section('content')
<div class='wrapper wrapper-content'>
    <div class="row">
        <!--<div class="col-lg-12">-->
            <div class="col-lg-7">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        Registratie -&nbsp;
                    </h5>
                    <small> Nieuw personeel gegevens</small>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Achternaam</label>
                                <div class="col-sm-6"><input type="text" class="form-control" name="achternaam" ng-m></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Voornaam</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Meisjesnaam</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ID</label>
                                <div class="col-sm-3"><input type="number" class="form-control"></div>
                            </div>

                        </form>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
