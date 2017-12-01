@extends('layouts')

@section('header')
    @parent
@stop

@section('sidebar')
    @parent
@stop

@section('content')

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Calendar</h3>
            <!-- page start-->
            <div class="row mt">
                <aside class="col-lg-3 mt">
                    <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>
                    <div id="external-events">
                        <div class="external-event label label-theme">My Event 1</div>
                        <div class="external-event label label-success">My Event 2</div>
                        <div class="external-event label label-info">My Event 3</div>
                        <div class="external-event label label-warning">My Event 4</div>
                        <div class="external-event label label-danger">My Event 5</div>
                        <div class="external-event label label-default">My Event 6</div>
                        <div class="external-event label label-theme">My Event 7</div>
                        <div class="external-event label label-info">My Event 8</div>
                        <div class="external-event label label-success">My Event 9</div>
                        <p class="drop-after">
                            <input type="checkbox" id="drop-remove">
                            Remove After Drop
                        </p>
                    </div>
                </aside>
                <aside class="col-lg-9 mt">
                    <section class="panel">
                        <div class="panel-body">
                            <div id="calendar" class="has-toolbar"></div>
                        </div>
                    </section>
                </aside>
            </div>
            <!-- page end-->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
            <a href="calendar.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>


@stop

@section('footer')
    @parent
@stop
