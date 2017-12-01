@extends('layouts')

@section('content')

    <!--main content start-->
    <h3><i class="fa fa-angle-right"></i> 猿问管理</h3>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <p>
                    <h4><i class="fa fa-angle-right"></i> 猿问
                        <select name="select" id="sel">
                            <option value="2">全部</option>
                            <option value="1">启用</option>
                            <option value="0">未启用</option>
                        </select>
                    </h4>
                    </p>
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> ID</th>
                        <th><i class="fa fa-bullhorn"></i> 提问标题</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> 问题类型</th>
                        <th><i class="fa fa-bookmark"></i> 点赞数</th>
                        <th><i class=" fa fa-edit"></i> 添加时间</th>
                        <th><i class="fa fa-bookmark"></i> 浏览量</th>
                        </th>
                        <th><i class=" fa fa-edit"></i> 提问人</th>
                        </th>
                        <th><i class="fa fa-bullhorn"></i> 状态</th>
                        </th>
                        <th><i class="fa fa-bullhorn"></i> 当前状态</th>
                        </th>
                        <th><i class="fa fa-bullhorn"></i> 操作</th>
                        </th>
                    </tr>
                    </thead>

                    <tbody id="mybox">
                    @foreach ($data as $key => $val)
                        <tr>
                            <td><span class="label label-info label-mini">{{ $val->issue_id }}</span></td>
                            <td><a href="javascript:void(0)"
                                   onclick="message({{ $val->issue_id }})">{{ $val->issue_title }}</a></td>
                            <td><span class="label label-info label-mini">{{ $val->issue_type }}</span></td>
                            <td><span class="label label-info label-mini">{{ $val->issue_number }}</span></td>
                            <td>
                                <span class="label label-info label-mini">{{ date('Y-m-d H:i:s',$val->issue_add_time)}}</span>
                            </td>
                            <td><span class="label label-info label-mini">{{ $val->issue_brower}}</span></td>
                            <td><span class="label label-info label-mini" id="cd">{{ $val->user_name}}</span></td>
                            @if($val->status == 0)
                                <td value="{{$val->issue_id}}" style="cursor: pointer;"><span
                                            class="label label-info label-mini point" data-val='0'>×</span></td>
                            @else
                                <td value="{{$val->issue_id}}" style="cursor: pointer;"><span
                                            class="label label-info label-mini point" data-val='1'>√</span></td>
                            @endif

                            @if ($val->issue_types == 1)
                                <td><span class="label label-info label-mini">等待回复</span></td>
                            @elseif($val->issue_types == 2)
                                <td><span class="label label-info label-mini">最新</span></td>
                            @else
                                <td><span class="label label-info label-mini">推荐</span></td>
                            @endif

                            <td>
                                <button class="btn btn-danger btn-xs del" value="{{$val->issue_id}}"><i
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
    {!! $data->links() !!}  <!-- 分页 -->
@stop

@section('footer')
    <script>
        //修改猿问状态
        $('.point').click(function () {
            var status = $(this).data('val'); //获取要修改状态的值
            var id = $(this).parent().attr('value'); //获取要修改状态的id
            var _token = "{{ csrf_token() }}";
            var obj = $(this);
            $.ajax({
                type: 'post',
                data: {id: id, status: status, _token: _token},
                url: 'status',
                dataType: 'json',
                success: function (msg) {
                    if (msg == 0) {
                        obj.html('<span data-val="0">×</span>')
                    } else {
                        obj.html('<span data-val="1">√</span>')
                    }

                }
            })

        });

        //猿问启禁状态
        $(document).on('change', '#sel', function () {
            var num = $("#sel").val();
            var _token = "{{ csrf_token() }}";
            $.ajax({
                type: 'POST',
                url: 'question',
                data: {num: num, _token: _token},
                dataType: 'json',
                success: function (data) {
                    loop(data);
                }
            })
        })

        //删除
        $(document).on('click', '.del', function () {
            var id = $(this).attr('value');
            var _token = "{{ csrf_token() }}";
            $.ajax({
                url: 'delete',
                type: 'POST',
                data: {id: id, _token: _token},
                dataType: 'json',
                success: function (msg) {
                    loop(msg);
                }
            })
        })

        //循环数据
        function loop(data) {
            var str = '';
            $.each(data.data, function (key, va) {
                str += " <tr>";
                str += "<td><span class='label label-info label-mini'>" + va.issue_id + "</span></td>";
                str += "<td><a href='javascript:void(0)' onclick='message(" + va.issue_id + "'>" + va.issue_title + "</a></td>";
                str += "<td><span class='label label-info label-mini'>" + va.issue_type + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + va.issue_number + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + getLocalTime(va.issue_add_time) + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + va.issue_brower + "</span></td>";
                str += "<td><span class='label label-info label-mini'>" + va.user_name + "</span></td>";
                if (va.status == 0) {
                    str += "<td value='+va.issue_id+' style='cursor: pointer;'><span class='label label-info label-mini point' data-val='0'>×</span></td>";
                } else {
                    str += "<td value='+val->issue_id+' style='cursor: pointer;'><span class='label label-info label-mini point' data-val='1'>√</span></td>";
                }
                if (va.issue_types == 1) {
                    str += "<td><span class='label label-info label-mini'>等待回复</span></td>";
                } else if (va.issue_types == 2) {
                    str += "<td><span class='label label-info label-mini'>最新</span></td>";
                } else {
                    str += "<td><span class='label label-info label-mini'>推荐</span></td>";
                }
                str += "<td>";
                str += "<button class='btn btn-danger btn-xs del' value='" + va.issue_id + "'><i class='fa fa-trash-o '></i></button>";
                str += "</td>";
                str += "</tr>";
            })
            $('#mybox').html(str);
        }

        //a 标签跳转方法（标题）
        function message(id) {
            window.location.href = window.location.href = '/ape/reply/' + id;
        }

        //时间戳转换日期格式
        function getLocalTime(nS) {
            return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:d{1,2}$/, ' ');
        }

    </script>
@stop