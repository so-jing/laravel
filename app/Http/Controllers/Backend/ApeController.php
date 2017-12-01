<?php
/**
 * createTime: 2017/11/29 0006 下午 19:03
 * 猿问管理
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackendModels\HomeIssue; //模型
use App\Models\BackendModels\HomeIssueContent; //模型
use App\Models\BackendModels\HomeIssueReply; //模型

class ApeController extends Controller
{
    //猿问信息展示（猿问&用户）
    public function ape()
    {
        $data = HomeIssue::join('home_user', 'home_issue.issue_uid', '=', 'home_user.user_id')
            ->select('home_issue.*', 'home_user.user_name')
            ->paginate(3);
        return view('backend.ape.ape', ['data' => $data]);
    }

    //状态启用或禁用
    public function question(Request $request)
    {
        $num = $request->input('num');
        switch ($num) {
            case '0':
                $data = HomeIssue::where('home_issue.status', '=', 0)
                    ->join('home_user', 'home_issue.issue_uid', '=', 'home_user.user_id')
                    ->select('home_issue.*', 'home_user.user_name')
                    ->paginate(3);
                return json_encode($data);
                break;
            case '1':
                $data = HomeIssue::where('home_issue.status', '=', 1)
                    ->join('home_user', 'home_issue.issue_uid', '=', 'home_user.user_id')
                    ->select('home_issue.*', 'home_user.user_name')
                    ->paginate(3);
                return json_encode($data);
                break;
            default:
                $data = HomeIssue::join('home_user', 'home_issue.issue_uid', '=', 'home_user.user_id')
                    ->select('home_issue.*', 'home_user.user_name')
                    ->paginate(3);
                return json_encode($data);
                break;
        }
    }

    //修改猿问状态
    public function status(Request $request)
    {
        $status = $request->input('status');    //接收状态值
        $id = $request->input('id');    //接收id
        if ($status == 0) {
            $msg = HomeIssue::where('issue_id', $id)->update(['status' => 1]);
        } else {
            $msg = HomeIssue::where('issue_id', $id)->update(['status' => 0]);
        }
        return json_encode($msg);
    }

    //删除猿问
    public function delete(Request $request)
    {
        $id = $request->input('id');    //接收id
        HomeIssue::where('issue_id', $id)->delete();
        $data = HomeIssue::join('home_user', 'home_issue.issue_uid', '=', 'home_user.user_id')
            ->select('home_issue.*', 'home_user.user_name')
            ->paginate(3);
        return json_encode($data);
    }

    //猿问提问回复（问题&回复）
    public function reply($id)
    {
        $res = HomeIssueContent::where('content_iid', $id)
            ->join('home_issue', 'home_issue_content.content_iid', '=', 'home_issue.issue_id')
            ->select('home_issue_content.*', 'home_issue.issue_title', 'home_issue.issue_id')
            ->get();
        foreach ($res as $key => $value) {
            $content_id = $value['content_id'];
        }
        if (empty($content_id)) {
            $data = [];
            $res = HomeIssue::where('issue_id', $id)
                ->select('issue_title')
                ->get();
            return view('backend.ape.reply', ['data' => $data, 'res' => $res]);
        } else {
            $data = HomeIssueReply::where('reply_iid', $content_id)
                ->join('home_user', 'home_issue_reply.user_id', '=', 'home_user.user_id')
                ->select('home_issue_reply.*', 'home_user.user_name')
                ->get();
            return view('backend.ape.reply', ['data' => $data, 'res' => $res]);
        }
    }

    //删除回复信息
    public function amputate(Request $request)
    {
        $id = $request->input('id');    //接收id
        $con_id = $request->input('con_id');
        HomeIssueReply::where('reply_id', $id)->delete();
        $data = HomeIssueReply::where('reply_iid', $con_id)
            ->join('home_issue_content', 'home_issue_reply.reply_iid', '=', 'home_issue_content.content_iid')
            ->join('home_user', 'home_issue_reply.user_id', '=', 'home_user.user_id')
            ->select('home_issue_reply.*', 'home_user.user_name')
            ->paginate(3);
        return json_encode($data);
    }


}