@extends('admin.master')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="">Text</label>
                            <div class="controls">
                                <div class="input-append">
                                    <input id="text" size="16" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Auto complete </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                <p class="help-block">Start typing to activate auto complete!</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Date input</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError">Modern Select</label>
                            <div class="controls">
                                <select id="selectError" data-rel="chosen">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Checkboxes</label>
                            <div class="controls">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Option 1
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> Option 2
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> Option 3
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Radio buttons</label>
                            <div class="controls">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <div style="clear:both"></div>
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">File input</label>
                            <div class="controls">
                                <input class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection