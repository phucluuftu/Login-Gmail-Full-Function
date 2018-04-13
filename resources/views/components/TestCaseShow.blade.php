<?php
$test_cases = \App\test_case::where('ticket_id',$tickets->id)->get();
?>

<div class="form-group">
    <table class="table table-hover table-bordered table-striped table-sm">
        <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Test Step</td>
            <td>Expected result</td>
            <td>Actual result</td>
            <td>Status</td>
            <td>Raiser</td>
            <td>Note</td>
            <td>Update Status</td>
        </tr>
        </thead>
        <tbody>
        @foreach($test_cases  as $test_case)
        <tr>
            {{ Form::open(array('url'=> route("test_cases.update", $test_case->id),'method' => 'PATCH')) }}
            <td>{{ $test_case->id }}</td>
            <td>{{ Form::text('title',$test_case->title,array('id'=>'','class'=>'')) }}</td>
            <td>{{ Form::text('test_step',$test_case->test_step,array('id'=>'','class'=>'')) }}</td>
            <td>{{ Form::text('expected_result',$test_case->expected_result,array('id'=>'','class'=>'')) }}</td>
            <td>{{ Form::text('actual_result',$test_case->actual_result,array('id'=>'','class'=>'')) }}</td>
            <td>{{ Form::select('status', ['1' => 'New','2' => 'Pass','3' => 'Fail'], $test_case->status ,array('id'=>'','class'=>'')) }}</td>
            <td><?php
                $id= $test_case->user_id;
                $user = \App\User::find($id);
                echo $user->name;
                ?></td>
            <td>{{ Form::text('notes',$test_case->notes,array('id'=>'','class'=>'')) }}</td>
            <td>
                {{ Form::submit('Update',array('id'=>'','class'=>'btn btn-primary')) }}
            </td>
            {{ Form::close() }}

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
