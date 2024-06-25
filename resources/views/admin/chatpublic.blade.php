<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 17:03:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Template Content">
    <meta name="keywords" content="Template Keywords">
    <meta name="author" content="Dreamguys - DreamsChat">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@dreamguystech">
    <meta name="twitter:title" content="Template Content">
    <meta name="twitter:description" content="Template Content">
    <meta name="twitter:image" content="{{ asset('assets/img/meta-image.png') }}">
    <meta name="twitter:image:alt" content="Twitter Image Alt Text">
    <meta property="og:url" content="Template Landing Page URL">
    <meta property="og:title" content="Template Title">
    <meta property="og:description" content="Template Content">
    <meta property="og:image" content="{{ asset('assets/img/meta-image.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/img/meta-image.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   
    @section('style')
   
</head>


<body>
   
   
    <div class="main-wrapper">

        @yield('main-content')
       
       @include('admin.layouts.newChat')

        @include('admin.layouts.newGroup')

        <div class="modal fade " id="Success-group">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content success-group-wrap-list">
                    <div class="modal-header">
                        <div class="success-pass mx-auto">
                            <img src="assets/img/avatar/avatar-16.png" alt="Success" class="img-fluid">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="success-header">
                            <h4>Success</h4>
                            <p>Group Created Successfully</p>
                        </div>
                        <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                            Ok
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="invite-other">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Invite Friends
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="user-profiles-group mb-4">
                                <div class="pass-login">
                                    <label class="form-label">Email Address or Phone Number</label>
                                    <input type="password" class="form-control pass-input">
                                </div>
                                <div class="pass-login">
                                    <label class="form-label">Invitation Message </label>
                                    <textarea class="form-control "></textarea>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="feather-x me-1"></i>Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="bx bx-send me-1"></i>Send Invitation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade mute-notify" id="mute-notification">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Mute Notifications
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="notify-check">
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">30 Minutes
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Hour
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Day
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Week
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Month
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Year
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">Always
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Mute
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="change-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <i class="bx bx-trash change-color "></i>
                            <p>Clearing or deleting entire chats will only remove messages from this device and your
                                devices on the newer versions of DreamsChat.</p>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="258a2c10fb9c17627199f2f7-|49" defer></script> --}}
    <main class="py-4">
        @yield('content')
    </main>
    @yield('script')

</body>

<!-- Mirrored from dreamschat.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 17:03:43 GMT -->

</html>
