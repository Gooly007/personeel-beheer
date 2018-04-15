@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Main page')

@section('content')
<div class='wrapper wrapper-content'>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Title</h5>
                </div>

                 <div class="ibox-content">
                            <h2>
                                Validation Wizard Form
                            </h2>
                            <p>
                                This example show how to use Steps with jQuery Validation plugin.
                            </p>

                            <form id="form" action="#" class="wizard-big">
                                <h1>Algemeen Gegevens</h1>
                                <fieldset>
                                    <h2>Account Information</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Acternaam</label>
                                                <input id="achternaam" name="achternaam" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Meisjesnaam</label>
                                                <input id="meisjesnaam" name="meisjesnaam" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Voornaam</label>
                                                <input id="voornaam" name="voornaam" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input id="id" name="id" type="text" class="form-control required">
                                            </div>
                                            <p>Man/Vrouw</p>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="man" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Man </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="vrouw" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> Vrouw </label>
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
                                <h1>Profile</h1>
                                <fieldset>
                                    <h2>Profile Information</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>First name *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Last name *</label>
                                                <input id="surname" name="surname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label>Address *</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Warning</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>You did it Man :-)</h2>
                                    </div>
                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>

            </div>
        </div>
    </div>
</div>
@endsection
