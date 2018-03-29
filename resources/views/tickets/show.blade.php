@extends('layouts.app')
@section('content')
    <div class="detail-ticket">
        <div class="title-ticket">
            <h2>{{ $tickets->title }}</h2>
            <div class="ticket-type">Type: {{ $tickets->type }}</div>
        </div>
        <div class="ticket-body">
            <div class="left-side">
                <div class="list-status">
                    <div class="status">OPEN</div>
                    <div class="arrow">>></div>
                    <div class="status">APPROVING</div>
                    <div class="arrow">>></div>
                    <div class="status">ANALYZING</div>
                    <div class="arrow">>></div>
                    <div class="status">CODING</div>
                    <div class="arrow">>></div>
                    <div class="status">TESTING</div>
                    <div class="arrow">>></div>
                    <div class="status">LIVE</div>
                    <div class="arrow">>></div>
                    <div class="status current">CLOSED</div>
                </div>
                <div class="reopen">
                    <div class="btn-reopen btn-action">Reopen</div>
                </div>
                <div class="ticket-info">
                    <div class="header">
                        <div class="name bold">Nam Trịnh Viết</div>
                        <span>applied 2 days ago</span>
                        <div class="right">
                            <div class="btn-action">Close</div>
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                    Latest Version by Nam Trịnh Viết
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-item">March 13, 2018 2:36 PM by Nam Trịnh Viết</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <h6>Ops General</h6>
                        <form action="">
                            <form>
                                <div class="form-group">
                                    <label class="bold">Ticket title:</label>
                                    <input type="text" value="{{ $tickets->title }}" class="form-control" id="ticketTitle">
                                </div>
                                <div class="form-group">
                                    <label class="bold subject-title">Duration</label>
                                    <label class="bold">Day*</label>
                                    <select class="form-control" id="sel1">
                                        <option>1</option>
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
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">CCU*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Mockup*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Fb_title*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Fb_description*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">FB_image*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">exported_data*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">CC*</label>
                                    <div class="instruction">Name Prefix will be combined with Name Postfix to generate actualy
                                        DNS Name Record
                                    </div>
                                    <input type="text" class="form-control" id="namePrefix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Design Link*</label>
                                    <div class="instruction">State the domain such as .garena.com, .shopee.vn</div>
                                    <input type="text" class="form-control" id="namePostfix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Domain*</label>
                                    <div class="instruction">State the domain such as .garena.com, .shopee.vn</div>
                                    <input type="text" class="form-control" id="namePostfix">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Priority*</label>
                                    <select class="form-control" id="types">
                                        <option>Low</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="bold">PO*</label>
                                    <select class="form-control" id="types">
                                        <option>dinhphuc.luu@ved.com.vn</option>
                                        <option>dinhphuc.luu@ved.com.vn</option>
                                        <option>dinhphuc.luu@ved.com.vn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="bold">Dealine*</label>
                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-date-input">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Design Deadline*</label>
                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-date-input">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Logic*</label>
                                    <div class="instruction">IPv4 address. Enter multiple addresses on separate lines.</div>
                                    <textarea style="width: 100%" name="" id="" cols="15" rows="5" placeholder="">

                            </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="bold">GA*</label>
                                    <div class="instruction">IPv4 address. Enter multiple addresses on separate lines.</div>
                                    <textarea style="width: 100%" name="" id="" cols="15" rows="5" placeholder="">

                            </textarea>
                                </div>
                                <a href="./ticketDetail.html">
                                    <button class="btn btn-primary btn-create-ticket">
                                        <a href="ticketDetail.html">Create</a>
                                    </button>
                                </a>
                            </form>
                            --
                            <div class="form-group">
                                <label class="">Raise ticket to SA Ops Team:</label>
                                <label class="bold"> Project*</label>
                                <select class="form-control" id="sel1" disabled="disabled">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="bold">Content*</label>
                                <textarea style="width: 100%" name="" id="" cols="15" rows="5" placeholder="" disabled="disabled">
                                            Point DNS of domain news.fo4.garena.vn to list ip 137.59.117.55, 137.59.117.111,137.59.117.112
                                            Thank so much!
                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="bold">Rating</label>
                                <div class="star-rating">
                                    <span class="fa fa-star active" data-rating="1"></span>
                                    <span class="fa fa-star active" data-rating="2"></span>
                                    <span class="fa fa-star" data-rating="3"></span>
                                    <span class="fa fa-star" data-rating="4"></span>
                                    <span class="fa fa-star" data-rating="5"></span>
                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                </div>
                            </div>
                            <div class="form-group">
                                <table class="table table-hover table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Rasised At</td>
                                        <td>Rasised By</td>
                                        <td>Last Updated</td>
                                        <td>Status</td>
                                        <td>Owner</td>
                                        <td>Team</td>
                                        <td>Type</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Rasised At</td>
                                        <td>Rasised By</td>
                                        <td>Last Updated</td>
                                        <td>Status</td>
                                        <td>Owner</td>
                                        <td>Team</td>
                                        <td>Type</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Rasised At</td>
                                        <td>Rasised By</td>
                                        <td>Last Updated</td>
                                        <td>Status</td>
                                        <td>Owner</td>
                                        <td>Team</td>
                                        <td>Type</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Rasised At</td>
                                        <td>Rasised By</td>
                                        <td>Last Updated</td>
                                        <td>Status</td>
                                        <td>Owner</td>
                                        <td>Team</td>
                                        <td>Type</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ticket-log">
                    <div class="log"><i class="fas fa-cogs"></i> <span class="bold">Nam Trịnh Viết</span> created this ticket <span class="time">Mar 13, 2018 2:36 PM</span></div>
                    <div class="log"><i class="far fa-user"></i><span class="bold">Nam Trịnh Viết</span> added reviewer <span class="bold">Phúc Lưu Đình (dinhphuc.luu@ved.com.vn) </span><span class="time">Mar 13, 2018 2:36 PM</span></div>
                    <div class="log"><i class="far fa-check-circle"></i> <span class="bold">Phúc Lưu Đình</span> approved it <span class="time">Mar 13, 2018 2:36 PM</span></div>
                </div>
                <div class="history-comment">
                    <div class="comment">
                        <div class="avatar">
                            <img src="https://lh4.googleusercontent.com/-YbzSVMZegnc/AAAAAAAAAAI/AAAAAAAABnM/ztHRcqSHHLE/s96-c/photo.jpg" alt="">
                        </div>
                        <div class="comment-content">
                            <div class="head">
                                <span class="bold">Phúc Lưu Đình</span> commented <span class="time">Mar 13, 2018 2:36 PM</span>
                                <span class="edit"><i class="fas fa-pencil-alt"></i></span>
                            </div>
                            <div class="content">
                                Your request done - create new recodes: news.fo4.garena.vn. A 137.59.117.111 137.59.117.55 137.59.117.112
                            </div>
                            <div class="content-input">
                                <div class="list-options .list-checkbox">
                                    <div class="option"><input type="checkbox" checked="checked"> Option 1</div>
                                    <div class="option"><input type="checkbox" checked="checked"> Option 2</div>
                                    <div class="option"><input type="checkbox" checked="checked"> Option 3</div>
                                    <div class="option"><input type="checkbox" checked="checked"> Option 4</div>
                                </div>
                                <div class="list-options .list-raido">
                                    <div class="option"><input type="radio" value="1" name="radio1" checked="checked"> Option 1</div>
                                    <div class="option"><input type="radio" value="2" name="radio1" checked="checked"> Option 2</div>
                                    <div class="option"><input type="radio" value="3" name="radio1" checked="checked"> Option 3</div>
                                    <div class="option"><input type="radio" value="4" name="radio1" checked="checked"> Option 4</div>
                                </div>
                                <div class="list-options .list-select">
                                    <select name="" id="">
                                        <option value="1">value1</option>
                                        <option value="2">value2</option>
                                        <option value="3">value3</option>
                                    </select>
                                </div>
                                <textarea name="" cols="30" rows="3"></textarea>
                                <div class="bottom">
                                    <span></span><button type="button" class="btn btn-success">Comment</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="right-side">
                <table>

                    <tr>
                        <td colspan="2"><div class="bold">Applicant</div></td>
                    </tr>
                    <tr class="border-bottom">
                        <td class=""><div class="lb">User</div></td>
                        <td class=""><div class="vl">Nam Trịnh Viết</div></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div class="bold">Assignee</div></td>
                    </tr>
                    <tr class="border-bottom">
                        <td class=""><div class="lb">Team</div></td>
                        <td class=""><div class="vl">Operation <span class="edit"><i class="fas fa-pencil-alt"></i></span></div></td>
                    </tr>
                    <tr class="border-bottom">
                        <td colspan="2">
                            <select name="" id="selectRecommend">
                                <option value="1">Lưu Dinh Phuc</option>
                                <option value="2">Trinh Viet Nam</option>
                                <option value="3">Nguyen Tien Huong</option>
                            </select>
                            <div class="action-btn">
                                <span class="check"><i class="fas fa-check"></i></span>
                                <span class="close"><i class="fas fa-window-close"></i></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=""><div class="bold">Analyzation</div></td>
                    </tr>
                    <tr class="border-bottom">
                        <td><div class="lb">Impact</div></td>
                        <td><div class="vl">Minor</div></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border-bottom"><div class="bold display-inline-block">Reviewers</div><span class="number">1</span> <span class="edit"><i class="fas fa-pencil-alt"></i></span></td>
                    </tr>
                    <tr>
                        <td><div class="lb">Phúc Lưu Đình</div></td>
                        <td><div class="vl long">(dinhphuc.luu@ved.com.vn)</div></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection