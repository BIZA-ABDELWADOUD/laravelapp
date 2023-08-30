{{--success notify--}}

@if (session()->has('adduser'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{ trans('modals/user/user.successadded') }}",
                type: "success"
            });
        }

    </script>
@endif

{{--end success notify--}}


@if (session()->has('erroraddinguser'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{ trans('modals/user/user.erroraddinguser') }}",
                type: "success"
            });
        }

    </script>
@endif
