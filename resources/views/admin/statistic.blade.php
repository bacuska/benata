@extends('admin.master')
@section('content')
    <div class="row-fluid">

        <div class="box">
            <div class="box-header">
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Chart with points</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="sincos"  class="center" style="height:300px;" ></div>
                <p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Stack Example</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="stackchart" class="center" style="height:300px;"></div>

                <p class="stackControls center">
                    <input class="btn" type="button" value="With stacking">
                    <input class="btn" type="button" value="Without stacking">
                </p>

                <p class="graphControls center">
                    <input class="btn-primary" type="button" value="Bars">
                    <input class="btn-primary" type="button" value="Lines">
                    <input class="btn-primary" type="button" value="Lines with steps">
                </p>
            </div>
        </div>
    </div><!--/row-->
    <div class="row-fluid sortable">
        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Pie</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="piechart" style="height:300px"></div>
            </div>
        </div>

        <div class="box span6">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Donut</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="donutchart" style="height: 300px;"></div>
            </div>
        </div>

    </div><!--/row-->
@endsection