<div class="history-comment">
    <div class="comment">
        <div class="avatar">
            <img src="{{ Auth::user()->avatar }}" alt="">
        </div>
        <div class="comment-content">
            <div class="head">
                <span class="bold">Add Keynotes</span>  <span class="time"></span>
                {{--<span class="edit"><i class="fas fa-pencil-alt"></i></span>--}}
            </div>
            {{--<div class="content">--}}
                {{--Your request done - create new recodes: news.fo4.garena.vn. A 137.59.117.111 137.59.117.55 137.59.117.112--}}
            {{--</div>--}}
            <div class="content-input">
                <form action="{!! route("comments.store", $tickets) !!}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                {{--<div class="list-options .list-checkbox">--}}
                    {{--<div class="option"><input type="checkbox" checked="checked"> Option 1</div>--}}
                    {{--<div class="option"><input type="checkbox" checked="checked"> Option 2</div>--}}
                    {{--<div class="option"><input type="checkbox" checked="checked"> Option 3</div>--}}
                    {{--<div class="option"><input type="checkbox" checked="checked"> Option 4</div>--}}
                {{--</div>--}}
                {{--<div class="list-options .list-raido">--}}
                    {{--<div class="option"><input type="radio" value="1" name="radio1" checked="checked"> Option 1</div>--}}
                    {{--<div class="option"><input type="radio" value="2" name="radio1" checked="checked"> Option 2</div>--}}
                    {{--<div class="option"><input type="radio" value="3" name="radio1" checked="checked"> Option 3</div>--}}
                    {{--<div class="option"><input type="radio" value="4" name="radio1" checked="checked"> Option 4</div>--}}
                {{--</div>--}}
                {{--<div class="list-options .list-select">--}}
                    {{--<select name="" id="">--}}
                        {{--<option value="1">value1</option>--}}
                        {{--<option value="2">value2</option>--}}
                        {{--<option value="3">value3</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
                <textarea name="description" cols="30" rows="3"></textarea>
                <div class="bottom">
                    <span></span><button type="submit" class="btn btn-success">Keynotes</button>
                </div>

            </div>
        </div>

    </div>
</div>