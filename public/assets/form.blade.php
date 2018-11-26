@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="input-default">Default Input</label>
                <input type="text" class="form-control" id="input-default" placeholder="Your placeholder text...">
            </div>
            <div class="form-group">
                <label class="control-label" for="input-default-2">Disabled Input</label>
                <input type="text" class="form-control" id="input-default-2" placeholder="Your placeholder text..."
                       disabled="disabled">
            </div>
            <div class="form-group"><label class="control-label" for="select-default">Select Input</label> <select
                        name="select-default" id="select-default" class="form-control">
                    <option value="Canada">Canada</option>
                    <option value="Italy">Italy</option>
                    <option value="Spain">Spain</option>
                    <option value="Greece">Greece</option>
                </select></div>
        </div>

        <div class="col-md-4">
            <div class="form-group has-success"><label class="control-label" for="input-default-3">Success input</label>
                <input type="text" class="form-control" id="input-default-3" placeholder="Your placeholder text...">
            </div>
            <div class="form-group has-warning"><label class="control-label" for="input-default-4">Warning input</label>
                <input type="text" class="form-control" id="input-default-4" placeholder="Your placeholder text...">
            </div>
            <div class="form-group has-error"><label class="control-label" for="input-default-5">Error input</label>
                <input type="text" class="form-control" id="input-default-5" placeholder="Your placeholder text...">
            </div>
        </div>

        <div class="col-md-4"><h6>Checkboxes</h6>
            <div class="form-group">
                <label class="checkbox checkbox-inline mr-2">
                    <input type="checkbox" id="inlineCheckbox1" value="option1" checked="checked"> Checked <span
                            class="checkbox-indicator"></span></label>
                <label class="checkbox checkbox-inline mr-2">
                    <input type="checkbox" id="inlineCheckbox2" value="option2"> Unchecked <span
                            class="checkbox-indicator"></span></label>
                <label class="checkbox checkbox-inline mr-2 disabled">
                    <input type="checkbox" id="inlineCheckbox3" value="option3" disabled="disabled"> Disabled <span
                            class="checkbox-indicator"></span>
                </label>
            </div>

            <h6>Radio Buttons</h6>
            <div class="form-group">
                <label class="radio radio-inline mr-2">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked"> Selected <span
                            class="radio-indicator"></span>
                </label>
                <label class="radio radio-inline mr-2">
                    <input  type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Unselected <span
                            class="radio-indicator"></span>
                </label>
                <label class="radio radio-inline mr-2 disabled">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled="disabled"> Disabled <span
                            class="radio-indicator"></span></label></div>
        </div>
    </div>
@endsection