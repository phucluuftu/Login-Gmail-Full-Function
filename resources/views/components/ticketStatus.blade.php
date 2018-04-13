@switch($tickets->status)
    @case(1)
    <div class="list-status">
    <div class="status current">OPEN</div>
    <div class="arrow">>></div>
    <div class="status">ANALYZING</div>
    <div class="arrow">>></div>
    <div class="status">CODING</div>
    <div class="arrow">>></div>
    <div class="status">TESTING</div>
    <div class="arrow">>></div>
    <div class="status">LIVE</div>
    <div class="arrow">>></div>
    <div class="status">CLOSED</div>
    @break
    @case(2)
        <div class="list-status">
            <div class="status">OPEN</div>
            <div class="arrow">>></div>
            <div class="status current">ANALYZING</div>
            <div class="arrow">>></div>
            <div class="status">CODING</div>
            <div class="arrow">>></div>
            <div class="status">TESTING</div>
            <div class="arrow">>></div>
            <div class="status">LIVE</div>
            <div class="arrow">>></div>
            <div class="status">CLOSED</div>
    @break
    @case(3)
            <div class="list-status">
                <div class="status">OPEN</div>
                <div class="arrow">>></div>
                <div class="status">ANALYZING</div>
                <div class="arrow">>></div>
                <div class="status current">CODING</div>
                <div class="arrow">>></div>
                <div class="status">TESTING</div>
                <div class="arrow">>></div>
                <div class="status">LIVE</div>
                <div class="arrow">>></div>
                <div class="status">CLOSED</div>
    @break
    @case(4)
                <div class="list-status">
                    <div class="status">OPEN</div>
                    <div class="arrow">>></div>
                    <div class="status">ANALYZING</div>
                    <div class="arrow">>></div>
                    <div class="status">CODING</div>
                    <div class="arrow">>></div>
                    <div class="status current">TESTING</div>
                    <div class="arrow">>></div>
                    <div class="status">LIVE</div>
                    <div class="arrow">>></div>
                    <div class="status">CLOSED</div>
    @break
    @case(5)
                    <div class="list-status">
                        <div class="status">OPEN</div>
                        <div class="arrow">>></div>
                        <div class="status">ANALYZING</div>
                        <div class="arrow">>></div>
                        <div class="status">CODING</div>
                        <div class="arrow">>></div>
                        <div class="status">TESTING</div>
                        <div class="arrow">>></div>
                        <div class="status current">LIVE</div>
                        <div class="arrow">>></div>
                        <div class="status">CLOSED</div>
    @break
    @case(6)
                        <div class="list-status">
                            <div class="status">OPEN</div>
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
    @break
        @endswitch
</div>
{{--<div class="reopen">--}}
    {{--<div class="btn-reopen btn-action">Reopen</div>--}}
{{--</div>--}}