<form action="{!! route("rating.store", $tickets) !!}" method="post">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
    <div class="rating">
    <label>
        <input type="radio" name="score" value="1" />
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="score" value="2" />
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="score" value="3" />
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="score" value="4" />
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="score" value="5" />
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    </div>
    <input type="text" name="rating_comments" class="form-control" id="ticketTitle">
    <button type="submit" class="btn btn-primary ">Submit</button>
</form>


