<div class="choose-type-ticket">
    <table class="table table-hover table-bordered table-striped table-sm">
        <tbody>
        <tr>
            <td>Add Test Case</td>
        </tr>
        </tbody>
    </table>
</div>

<div class="popup">
    <div class="modal fade" id="ticketModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="modal-title">Add test case</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {{ Form::open(array('url'=> route("test_cases.store", $tickets))) }}
                    {{ Form::label('Title', 'Title', array('class' => 'instruction')) }}
                    {{ Form::text('title','',array('id'=>'namePrefix','class'=>'form-control')) }}
                    {{ Form::label('test_step', 'Test Step', array('class' => 'instruction')) }}
                    {{ Form::text('test_step','',array('id'=>'namePrefix','class'=>'form-control')) }}
                    {{ Form::label('expected_result', 'Expected result', array('class' => 'instruction')) }}
                    {{ Form::text('expected_result','',array('id'=>'namePrefix','class'=>'form-control')) }}
                    {{ Form::label('actual_result', 'Actual result', array('class' => 'instruction')) }}
                    {{ Form::text('actual_result','',array('id'=>'namePrefix','class'=>'form-control')) }}
                    {{ Form::label('notes', 'Note', array('class' => 'instruction')) }}
                    {{ Form::text('notes','',array('id'=>'namePrefix','class'=>'form-control')) }}
                    {{ Form::submit('New Test Case',array('id'=>'','class'=>'btn btn-primary')) }}
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>