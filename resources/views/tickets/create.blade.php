@extends('layouts.app')
@section('content')
    <div class="work">

        <div class="choose-type-ticket">
            <h2>Create Ticket</h2>
            <table class="table table-hover table-bordered table-striped table-sm">
                <tbody>
                <tr>
                    <td>New</td>
                    <td>Apply for CDN Accesst</td>
                </tr>
                <tr>
                    <td>Update</td>
                    <td>Request to create JIRA and Confluence accounts.</td>
                </tr>
                <tr>
                    <td>Redeploy</td>
                    <td>Let us know if SSH tunnel does not work for you.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="popup">
        <div class="modal fade" id="ticketModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="modal-title">New Ticket</div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{!! url('tickets') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                            <div class="form-group">
                                <label class="bold">Ticket title:</label>
                                <input type="text" name="title" class="form-control" id="ticketTitle">
                            </div>
                            <div class="form-group">
                                <label class="bold subject-title">Duration</label>
                                <label class="bold">Day*</label>
                                <select name="duration" class="form-control" id="sel1">
                                    <option value="1">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="bold">API_sources*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="api_source" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">CCU*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="ccu" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">Mockup*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="mockups" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">Fb_title*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="fb_title" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">Fb_description*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="fb_description" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">FB_image*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="fb_image" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">exported_data*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="data_output" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">CC*</label>
                                <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                    DNS Name Record
                                </div>
                                <input name="cc" type="text" class="form-control" id="namePrefix">
                            </div>
                            <div class="form-group">
                                <label class="bold">Design Link*</label>
                                <div class="instruction">State the domain such as .garena.com, .shopee.vn</div>
                                <input name="design_link" type="text" class="form-control" id="namePostfix">
                            </div>
                            <div class="form-group">
                                <label class="bold">Domain*</label>
                                <div class="instruction">State the domain such as .garena.com, .shopee.vn</div>
                                <input name="domain" type="text" class="form-control" id="namePostfix">
                            </div>
                            <div class="form-group">
                                <label class="bold">Priority*</label>
                                <select name="priority" class="form-control" id="types">
                                    <option value="1">Low</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="bold">PO*</label>
                                <select name="owner" class="form-control" id="types">
                                    <option value="1">dinhphuc.luu@ved.com.vn</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="bold">Dealine*</label>
                                <input name="deadline" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label class="bold">Design Deadline*</label>
                                <input name="design_deadline" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label class="bold">Logic*</label>
                                <div class="instruction">IPv4 address. Enter multiple addresses on separate lines.</div>
                                <textarea name="logic" style="width: 100%" name="" id="" cols="15" rows="5" placeholder="">

                            </textarea>
                            </div>
                            <div class="form-group">
                                <label class="bold">GA*</label>
                                <div class="instruction">IPv4 address. Enter multiple addresses on separate lines.</div>
                                <textarea name="ga" style="width: 100%" name="" id="" cols="15" rows="5" placeholder="">

                            </textarea>
                            </div>

                                <button type="submit" class="btn btn-primary btn-create-ticket">
                                    Create
                                </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection