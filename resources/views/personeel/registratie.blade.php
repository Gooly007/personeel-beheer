<!-- Extend the layout -->
@extends('layouts.algemeen')

<!-- Assign page title -->
@section('title', 'Registratie')

@section('header')
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/steps/jquery.steps.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
<!-- Content -->            
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>
                        Nieuw Registratie
                    </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                                <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                                </ul>
                                <a class="close-link">
                                <i class="fa fa-times"></i>
                                </a>
                        </div>
                </div>
                <div class="ibox-content">
                    <h2>
                    Personeel Gegevens
                    </h2>
                    <p>
                    Registratie formulier van nieuw personeel gegevens.
                    </p>
                        <form id="form" action="#" class="wizard-big">
                                <h1>Personalia</h1>
                                <fieldset>
                                    <h2>Naam:</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Achternaam *</label>
                                                <input id="achternaam" name="achternaam" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Meisjesnaam</label>
                                                <input id="meisjesnaam" name="meisjesnaam" type="text"class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Voornaam *</label>
                                                <input id="voornaam" name="voornaam" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Data</h1>
                                <fieldset>
                                    <h2>Algemeen Gegevens</h2>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-3">Sedula ID *</label>
                                                <input id="sedula" name="sedula" type="number" class="form-control required digits">
                                            </div>
                                            <div class="form-group">
                                            <label>Man / Vrouw *</label><br>
                                            <div class="radio radio-inline">
                                                <div><label><input type="radio" id="vrouw" value="vrouw" name="mv">Vrouw</label></div>
                                                <div><label><input type="radio" id="man" value="man" name="mv">Man</label></div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Burgelijkestaat *</label>
                                                <!-- <div class="col-sm-6"> -->
                                                    <select class="form-control m-b-n-sm" name="burgerlijkestaat">
                                                        <option>Ongehuwd</option>
                                                        <option>Gehuwd</option>
                                                    </select>
                                                <!-- </div> -->
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Telefoon Thuis</label>
                                                <div class="col-sm-6">
                                                <input id="telefoon-t" name="telefoon-t" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Geboorte Plaats *</label>
                                                <input id="g-plaats" name="g-plaats" type="text" class="form-control required" value="Curacao">
                                            </div>
                                            <div class="form-group">
                                                <label>Nationaliteit *</label>
                                                <input id="nationaliteit" name="nationaliteit" type="text" class="form-control required" value="Nederlands">
                                            </div>
                                            <div class="form-group">
                                                <label>Adres *</label>
                                                <input id="adres" name="adres" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Telefoon Mobiel</label>
                                                <input id="telefoon-m" name="telefoon-m" type="text" class="form-control">
                                            </div>
                                        </div>
                                    
                                    </div>
                                </fieldset>

                                <h1>Data</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>Aditioneel data</h2>
                                    </div>
                                </fieldset>

                                <h1>Verificatie</h1>
                                <fieldset>
                                    <h2>Verificatie van ingevuld data</h2>
                                    
                                </fieldset>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <!-- Steps -->
    <script src="{{ asset('js/plugins/steps/jquery.steps.min.js') }}"></script>
 
    <!-- Jquery Validate -->
    <script src="{{ asset('js/plugins/validate/jquery.validate.min.js') }}"></script>
    
    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("volgende");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("terug");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
                    errorPlacement: function (error, element)
                    {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
   });
</script>
@endsection