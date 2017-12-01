@extends('layouts')

@section('content')

    <!--main content start-->
    <h3><i class="fa fa-angle-right"></i> 猿问管理</h3>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    @foreach ($res as $key => $val)
                        <h4 data-id="{{ $val->issue_id }}"><i class="fa fa-angle-right"></i>
                            <b>{{ $val->issue_title }}</b></h4>
                    @endforeach
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> ID</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> 回复人</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> 回复内容</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> 回复时间</th>
                        <th><i class="fa fa-bookmark"></i> 点赞数</th>
                        <th><i class="fa fa-bullhorn"></i> 操作</th>
                        </th>
                    </tr>
                    </thead>

                    <tbody id="mybox">
                    @foreach ($data as $key => $val)
                        <tr>
                            <td><span class="label label-info label-mini">{{ $val->reply_id }}</span></td>
                            <td><span class="label label-info label-mini">{{ $val->user_name }}</span></td>
                            <td><span class="label label-info label-mini">{{ $val->reply_content }}</span></td>
                            <td>
                                <span class="label label-info label-mini">{{ date('Y-m-d H:i:s',$val->reply_time)}}</span>
                            </td>
                            <td><span class="label label-info label-mini">{{ $val->reply_number }}</span></td>

                            <td>
                                <button class="btn btn-danger btn-xs fff" value="{{$val->reply_id}}"><i
                                            class="fa fa-trash-o "></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
    </div><!-- /row -->
    <!--main content end-->
@stop

@section('footer')

    <script>

        //删除
        $(document).on('click', '.fff', function () {
            var id = $(this).attr('value');
            var con_id = $("h4").data('id');
            var _token = "{{ csrf_token() }}";
            $.ajax({
                url: 'amputate',
                type: 'POST',
                data: {id: id, con_id: con_id, _token: _token},
                dataType: 'json',
                success: function (msg) {
                    loop(msg)
                }
            })
        })

        //循环数据
        function loop(data) {
            var str = '';
            $.each(data.data, function (key, va) {
                str += " <tr>";
                str += "<td><span class='label label-info label-mini'>" + va.reply_id + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + va.user_name + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + va.reply_content + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + getLocalTime(va.issue_add_time) + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + va.reply_number + "</span></td>";
                str += "<td>";
                str += "<button class='btn btn-danger btn-xs del' value='" + va.reply_id + "'><i class='fa fa-trash-o '></i></button>";
                str += "</td>";
                str += "</tr>";
            })
            $('#mybox').html(str);
        }

        //时间戳转换日期格式
        function getLocalTime(nS) {
            return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:d{1,2}$/, ' ');
        }
    </script>

@stop
