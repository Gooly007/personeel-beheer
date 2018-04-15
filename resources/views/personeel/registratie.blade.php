<!-- Extend the layout -->
@extends('layouts.registration_layout')

<!-- Assign page title -->
@section('title', 'Registratie')

<!-- Content of page -->
@section('content')

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">
        
        <!-- Content -->            
        <div class="wrapper wrapper-content animated fadeInRight">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Nieuw Registratie</h5>
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
                                                <input id="achternaam" name="achternaam" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Meisjesnaam</label>
                                                <input id="meisjesnaam" name="meisjesnaam" type="text"class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Voornaam *</label>
                                                <input id="voornaam" name="voornaam" type="text" class="form-control">
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
                                                <label>Sedula ID *</label>
                                                <input id="sedula" name="sedula" type="number" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                            <label>Man / Vrouw *</label><br>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="man" name="man" value="man">
                                                <label for="man"> Man </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="vrouw" value="vrouw" name="mv">
                                                <label for="vrouw"> Vrouw </label>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Burgelijkestaat *</label>
                                                <input id="burgelijkestaat" name="burgelijkestaat" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Telefoon Thuis</label>
                                                <input id="telefoon-t" name="telefoon-t" type="text" class="form-control">
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
    </div>
    </div>
  @endsection
