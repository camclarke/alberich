@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <form>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Make:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Type the make of the product">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Model:</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Type the model of the product">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Description:</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Description if available">
                    </div>
                </div>
                <p>Basic configuration</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Wi-Fi 2.4GHz
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck1">
                        Wi-Fi 5GHz
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck1">
                        Bluetooth LE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck1">
                        Bluetooth EDR
                    </label>
                </div>

            </form>
        </div>
        <div class="col">
            <button type="button" class="btn btn-outline-secondary btn-sm">Add Make</button>
        </div>
    </div>
</div>

@endsection
