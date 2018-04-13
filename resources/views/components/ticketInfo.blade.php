<div class="ticket-info">
    <div class="header">
        <div class="name bold">Nam Trịnh Viết</div>
        <span>applied at {{ $tickets->created_at }}</span>
        <div class="right">
            <button class="btn-action" onclick="myFunction()">Ticket Info</button>
            <button class="btn-action" onclick="myFunction2()">Test Case</button>
        </div>
    </div>
    <div class="body">
        <div id="myDIV">
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
        </form>
            @if($tickets->status=='6')
                @include('components.Rating')
            @endif

        </div>
        <div id="myDIV2">
                @include('components.TestCase')
                @include('components.TestCaseShow')
        </div>
    </div>

</div>

<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        var y = document.getElementById("myDIV2");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
            y.style.display = "none";
        }
    }
    function myFunction2() {
        var x = document.getElementById("myDIV");
        var y = document.getElementById("myDIV2");
        if (y.style.display === "none") {
            x.style.display = "none";
            y.style.display = "block";
        } else {
            y.style.display = "none";
        }
    }
</script>