@extends('admin.layout')
@section('content')
<div class="console-content">
    <div class="page-header">
        <h2 id="nav">公众号列表</h2>
    </div>
    <div class="well bs-component">
        <table class="table table-wechat">
            <thead class="thead">
                <tr>
                    <td>公众号名称</td>
                    <td>微信号</td>
                    <td>类型</td>
                    <td>添加时间</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <td colspan="5"> 
                        <span class="empty_tips">暂无公众号，点击<a href="{{ admin_url('account/create') }}" >添加公众号</a></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection