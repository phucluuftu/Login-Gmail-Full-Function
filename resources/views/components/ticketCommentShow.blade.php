@foreach($comments as $comment)
    <div class="history-comment">
        <div class="comment">
            <div class="avatar">
                <img src="<?php
                $id= $comment->user_id;
                $user = \App\User::find($id);
                echo $user->avatar;
                ?>" alt="">
            </div>
            <div class="comment-content">
                <div class="head">
                    <span class="bold"><?php
                        $id= $comment->user_id;
                        $user = \App\User::find($id);
                        echo $user->name;
                        ?></span> added keynotes at <span class="time">{{ $comment->created_at }}</span>
                </div>
                <div class="content-input">
                    <div class="content">
                        {{ $comment->description }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endforeach

