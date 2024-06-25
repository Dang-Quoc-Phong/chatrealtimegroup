@extends('chat.home')
@section('title', 'Trang Chủ')
@section('style')
    <style>
#chat-container {
    display: flex;
    flex-direction: column;
    padding: 10px;
    max-height: 500px;
    overflow-y: auto;
    border-radius: 10px;
}

.chat-content {
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
    width: 100%;
}

.chats-right {
    justify-content: flex-end;
    text-align: right;
    justify-content: end;
}

.chats-left {
    justify-content: flex-start;
    text-align: left;
}

.chat-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 20px;
}

.chat-content-right {
    max-width: 60%;
    padding: 10px;
    border-radius: 20px;
    text-align: right;
    align-self: flex-end; 
    display: flex;
    flex-direction: row-reverse; 
}

.chat-content-left {
    max-width: 60%;
    padding: 10px;
    border-radius: 20px;
    text-align: left;
    align-self: flex-start;
    display: flex;
    flex-direction: row; 
}

.message-content {
    max-width: 100%;
    padding: 10px;
    border-radius: 20px;
    color: black;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.message-content-text {
    background-color: #f8ecff; 
    color: black;
    padding: 10px;
    border-radius: 15px 0 15px 15px;
    white-space: pre-wrap; 
}

.chat-name {
    font-weight: bold;
    margin-bottom: 5px;
    white-space: nowrap; 
}

.chats {
    display: flex;
    align-items: flex-start;
    width: 100%;
  
 
}

.status {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgb(22, 211, 22);
    top: 5px;
}


    </style>
@endsection
@section('content')
    <div class="main-wrapper">

        <div class="content main_content">

            <div class="sidebar-menu">
                <div class="logo-col">
                    <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="menus-col">
                    <div class="chat-menus">
                        <ul>
                            <li>
                                <a href="{{ route('chat') }}" class="chat-unread active" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Chat">
                                    <i class="bx bx-message-square-dots"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}" class="chat-unread" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Group">
                                    <i class="bx bx-group"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title data-bs-original-title="Status">
                                    <i class="bx bx-stop-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title data-bs-original-title="Call">
                                    <i class="bx bx-phone"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('showListUsers') }}" class="chat-unread" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title data-bs-original-title="Contact">
                                    <i class="bx bx-user-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title data-bs-original-title="Settings">
                                    <i class="bx bx-cog"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-menus">
                        <ul>
                            <li>
                                <a href="#" id="dark-mode-toggle" class="dark-mode-toggle active">
                                    <i class="bx bx-moon"></i>
                                </a>
                                <a href="#" id="light-mode-toggle" class="dark-mode-toggle">
                                    <i class="bx bx-sun"></i>
                                </a>
                            </li>
                            <li>
                                <div class="avatar avatar-online">
                                    <a href="#" class="chat-profile-icon" data-bs-toggle="dropdown">
                                        <img src=" {{ Auth::user()->image }}" alt>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="sidebar-group left-sidebar chat_sidebar">

                <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
                    <div class="slimscroll">

                        <div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
                            <div class="select-group-chat">
                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        All Chats<i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="chat.html">All Chat</a></li>
                                        <li><a class="dropdown-item" href="archive-chat.html">Archive Chat</a></li>
                                        <li><a class="dropdown-item" href="pinned-chat.html">Pinned Chat</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-section">
                                <ul>
                                    <li><a href="javascript:;" class="user-chat-search-btn"><i class="bx bx-search"></i></a>
                                    </li>
                                    <li>
                                        <div class="chat-action-btns">
                                            <div class="chat-action-col">
                                                <a class="#" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:;" class="dropdown-item " data-bs-toggle="modal"
                                                        data-bs-target="#new-chat"><span><i
                                                                class="bx bx-message-rounded-add"></i></span>New Chat
                                                    </a>
                                                    <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#new-group"><span><i
                                                                class="bx bx-user-circle"></i></span>Create Group</a>
                                                    <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#invite-other"><span><i
                                                                class="bx bx-user-plus"></i></span>Invite Others</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="user-chat-search">
                                    <form>
                                        <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                        <input type="text" name="chat-search" placeholder="Search"
                                            class="form-control">
                                        <div class="user-close-btn-chat"><span class="material-icons">close</span>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>


                        <div class="top-online-contacts">
                            <div class="fav-title">
                                <h6>Online Now</h6>
                            </div>

                        </div>

                        <div class="sidebar-body chat-body" id="chatsidebar">

                            <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                <div class="fav-title pin-chat">
                                    <h6><i class="bx bx-pin me-1"></i>Chát Chung</h6>
                                </div>
                            </div>

                            <ul class="user-list space-chat">
                                @foreach ($users as $user)
                                    <li class="user-list-item chat-user-list">
                                        <a href="{{ route('chatPrivate', $user->id) }}" class="item"
                                            id="link_{{ $user->id }}">
                                            <div class="avatar">
                                                <img src="{{ $user->image }}" class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>

                                                    <h5>{{ $user->name }}</h5>
                                                   
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted"></small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-pin me-2"></i>
                                                        <i class="bx bx-check-double"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#mute-notification"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#change-chat"><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>




                        </div>
                    </div>
                </div>

            </div>


            <div class="chat chat-messages" id="middle">
                <div>
                    <div class="chat-header">
                        <div class="user-details">
                            <div class="d-lg-none">
                                <ul class="list-inline mt-2 me-2">
                                    <li class="list-inline-item">
                                        <a class="text-muted px-0 left_sides" href="#" data-chat="open">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                           
                            
                            <div class="mt-1">
                                <h5>Cộng đồng chát</h5>
                                <small class="last-seen">
                                   Tạo niềm vui cho mọi người
                                </small>
                            </div>
                        </div>
                        <div class="chat-options ">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                        <i class="bx bx-search"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Video Call">
                                    <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#video_call">
                                        <i class="bx bx-video"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Voice Call">
                                    <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#voice_call">
                                        <i class="bx bx-phone"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item dream_profile_menu">
                                    <a href="javascript:void(0)" class="btn btn-outline-light not-chat-user"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact Info">
                                        <i class="bx bx-info-circle"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{route('home')}}" class="dropdown-item "><span><i
                                                    class="bx bx-x"></i></span>Close Chat </a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#mute-notification"><span><i
                                                    class="bx bx-volume-mute"></i></span>Mute Notification</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#disappearing-messages"><span><i
                                                    class="bx bx-time-five"></i></span>Disappearing Message</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#clear-chat"><span><i class="bx bx-brush-alt"></i></span>Clear
                                            Message</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#change-chat"><span><i class="bx bx-trash"></i></span>Delete
                                            Chat</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#report-user"><span><i
                                                    class="bx bx-dislike"></i></span>Report</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i class="bx bx-block"></i></span>Block</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="chat-search">
                            <form>
                                <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                <input type="text" name="chat-search" placeholder="Search Chats"
                                    class="form-control">
                                <div class="close-btn-chat"><span class="material-icons">close</span></div>
                            </form>
                        </div>

                    </div>
                    {{-- <div class="messages">

                            <div class="chats chats-right">
                                <div class="chat-content">  
                                    <div class="chat-profile-name text-end">
                                        <h6><i class="bx bx-check-double me-1 inactive-check"></i>{{ Auth::user()->name}}<span>8:16
                                                PM</span><span class="check-star msg-star-one d-none"><i
                                                    class="bx bxs-star"></i></span></h6>
                                        <div class="chat-action-btns ms-2">
                                            <div class="chat-action-col">
                                                <a class="#" href="#" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item message-info-left"><span><i
                                                                class="bx bx-info-circle"></i></span>Message Info </a>
                                                    <a href="#" class="dropdown-item reply-button"><span><i
                                                                class="bx bx-share"></i></span>Reply</a>
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-smile"></i></span>React</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><span><i
                                                                class="bx bx-reply"></i></span>Forward</a>
                                                    <a href="#" class="dropdown-item click-star-one"><span><i
                                                                class="bx bx-star"></i></span><span
                                                            class="star-msg-one">Star Message</span></a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#edit-message"><span><i
                                                                class="bx bx-edit-alt"></i></span>Edit</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               


                                    <div class="message-content ">
                                        gggyyyyy
                                        <div class="chat-content-right">  
                                        <div class="emoj-group rig-emoji-group">
                                            <ul >
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        
                                                        <ul class="">
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-01.svg')}}"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-02.svg')}}"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-03.svg')}}"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-04.svg')}}"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-05.svg')}}"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                       
                                        </div>
                                        
                                                    
                                            </div>
                                    </div>
                                    


                                </div>
                                <div class="chat-avatar">
                                    <img src="{{ Auth::user()->image}}" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                         
                                
                            </div>
                            

                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="{{$user->image}}" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>{{$user->name}}<span>8:16 PM</span><span
                                                class="check-star msg-star d-none"><i
                                                    class="bx bxs-star"></i></span></h6>
                                        <div class="chat-action-btns ms-2">
                                            <div class="chat-action-col">
                                                <a class="#" href="#" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <a href="#"
                                                        class="dropdown-item message-info-left"><span><i
                                                                class="bx bx-info-circle"></i></span>Message Info </a>
                                                    <a href="#" class="dropdown-item reply-button"><span><i
                                                                class="bx bx-share"></i></span>Reply</a>
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-smile"></i></span>React</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><span><i
                                                                class="bx bx-reply"></i></span>Forward</a>
                                                    <a href="#" class="dropdown-item click-star"><span><i
                                                                class="bx bx-star"></i></span><span
                                                            class="star-msg">Star Message</span></a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-edit-alt"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="message-content reply-getcontent">
                                       hhhhhhhhhhhh
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:;"><i
                                                            class="bx bx-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-01')}}.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-02')}}.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-03')}}.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-04')}}.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:;"><img
                                                                        src="{{ asset('assets/img/icon/emoj-icon-05')}}.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:;"><i
                                                                        class="feather-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="bx bx-share"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div> --}}
                    <div class="chat-body chat-page-group slimscroll">
                        {{-- ctrl +z --}}
                        <div id="chat-container">
                            <!-- Existing chat messages -->
                        </div>

                    </div>
                </div>
                <div class="chat-footer">
                    <form>
                        <div class="smile-foot">
                            <div class="chat-action-btns">
                                <div class="chat-action-col">
                                    <a class="action-circle" href="#" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item "><span><i
                                                    class="bx bx-file"></i></span>Document</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-camera"></i></span>Camera</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-image"></i></span>Gallery</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-volume-full"></i></span>Audio</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-map"></i></span>Location</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-user-pin"></i></span>Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="smile-foot emoj-action-foot">
                            <a href="#" class="action-circle"><i class="bx bx-smile"></i></a>
                            <div class="emoj-group-list-foot down-emoji-circle">
                                <ul>
                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-01') }}.svg"
                                                alt="Icon"></a></li>
                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-02') }}.svg"
                                                alt="Icon"></a></li>
                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-03') }}.svg"
                                                alt="Icon"></a></li>
                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-04') }}.svg"
                                                alt="Icon"></a></li>
                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-05') }}.svg"
                                                alt="Icon"></a></li>
                                    <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="smile-foot">
                            <a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
                        </div>
                        <div class="replay-forms">
                            <div class="chats forward-chat-msg reply-div d-none">
                                <div class="contact-close_call text-end">
                                    <a href="#" class="close-replay">
                                        <i class="bx bx-x"></i>
                                    </a>
                                </div>
                                <div class="chat-avatar">
                                    <img src="{{ asset('assets/img/avatar/avatar-2.jpg') }}"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Mark Villiams<span>8:16 PM</span></h6>
                                        <div class="chat-action-btns ms-2">
                                            <div class="chat-action-col">
                                                <a class="#" href="#" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item message-info-left"><span><i
                                                                class="bx bx-info-circle"></i></span>Message Info </a>
                                                    <a href="#" class="dropdown-item reply-button"><span><i
                                                                class="bx bx-share"></i></span>Reply</a>
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-smile"></i></span>React</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><span><i
                                                                class="bx bx-reply"></i></span>Forward</a>
                                                    <a href="#" class="dropdown-item"><span><i
                                                                class="bx bx-star"></i></span>Star Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user"><span><i
                                                                class="bx bx-dislike"></i></span>Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete-message"><span><i
                                                                class="bx bx-trash"></i></span>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-content reply-content">
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="form-control chat_form" id="inputChat"
                                placeholder="Type your message here...">
                        </div>
                        <div class="form-buttons">
                            <button class="btn send-btn" type="button" id="btnSend">
                                <i class="bx bx-paper-plane"></i>
                            </button>
                        </div>
                    </form>
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


        <div class="modal fade" id="block-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Block Mark Villiams
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <i class="bx bx-block change-color "></i>
                            <p>Blocked contacts will no longer be able to call you or send you messages.</p>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Block
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="report-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Report Mark Villiams
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <img src="{{ asset('assets/img/icon/report-01.svg') }}" alt="icon">
                            <p>If you block this contact and clear the chat, messages will only be removed from this
                                device and your devices on the newer versions of DreamsChat</p>
                            <div class="notify-check">
                                <div class="form-check d-flex align-items-center justify-content-center ps-0">
                                    <label class="custom-check mt-0 mb-0">
                                        <span class="remember-me">Report Contact</span>
                                        <input type="checkbox" name="remeber">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="edit-message">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Edit Message
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="edit-msg-blk text-center mb-3">
                            <form action="#">
                                <div class="msg-input">
                                    <input type="text" class="form-control" value="How Are You?">
                                </div>
                                <button class="btn send-btn ms-2" type="submit">
                                    <i class="bx bx-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bx bx-x"></i> Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bx bx-pencil me-1"></i>Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="delete-user">
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


        <div class="modal fade" id="disappearing-messages">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Disappearing messages
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="block-user-blk">
                                <p>For more privacy and storage, all new messages will disappear from this chat for
                                    everyone after the selected duration, except when kept. Anyone in the chat can
                                    change this setting.</p>
                                <div class="notify-check">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">24 Hours</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">7 Days</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">90 Days</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="custom-check mt-0 mb-0">
                                            <span class="remember-me">Off</span>
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Save
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


        <div class="modal fade" id="clear-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Clear Chat
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
                                Clear
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="forward-message">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Chuyển tiếp tin nhắn tới
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form action="#">
                            <div class="user-block-group mb-4">
                                <div class="search_chat has-search">
                                    <span class="fas fa-search form-control-feedback"></span>
                                    <input class="form-control chat_input" id="search-contact" type="text"
                                        placeholder="Search">
                                </div>
                                <h5>Các cuộc trò chuyện</h5>
                                @foreach ($users as $user)
                                    <div class="recent-block-group">
                                        <div class="user-block-profile">
                                            <div class="avatar">
                                                <img src="{{ $user->image }}" class="rounded-circle" alt="image">
                                            </div>
                                            <div class="block-user-name">
                                                <h6>{{ $user->name }}</h6>
                                            </div>
                                        </div>
                                        <div class="notify-check mb-0">
                                            <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                                <label class="custom-check mt-0 mb-0">
                                                    <input type="checkbox" name="remeber">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="feather-x me-1"></i>Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <img src="{{ asset('assets/img/icon/send.svg') }}" class="me-1"
                                        alt="image">Send

                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="delete-message">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content delete-model-head">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete Message
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="notify-check delete-chat-notify">
                            <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                <label class="custom-check mt-0 mb-0">
                                    <span class="remember-me">Delete for Me</span>
                                    <input type="checkbox" name="remeber" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                <label class="custom-check mt-0 mb-0">
                                    <span class="remember-me">Delete for Everyone</span>
                                    <input type="checkbox" name="remeber">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mute-chat-btn delete-pop-btn justify-content-end">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bx bx-trash me-1"></i>Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="new-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            New Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="user-block-group mb-4">
                                <div class="search_chat has-search">
                                    <span class="fas fa-search form-control-feedback"></span>
                                    <input class="form-control chat_input" id="search-contacted" type="text"
                                        placeholder="Search">
                                </div>
                                <h5>Contacts</h5>
                                <div class="sidebar sroll-side-view">
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title contact-title">
                                            <h6>A</h6>
                                        </div>
                                    </div>
                                    <ul class="user-list">
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-4.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Alexander Manuel</h5>
                                                        <p>Active 4Min Ago</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-5.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Annette Theriot</h5>
                                                        <p>Online</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title contact-title">
                                            <h6>B</h6>
                                        </div>
                                    </div>
                                    <ul class="user-list">
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-10.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Bacon Mark</h5>
                                                        <p>Active 8Min Ago</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-12.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Bennett Gerard</h5>
                                                        <p>Last Seen Today at 12:35 AM</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="feather-x me-1"></i>Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <img src="{{ asset('assets/img/icon/send.svg') }}" class="me-1"
                                        alt="image">Chat
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="new-group">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            New Group
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="new-group-add show-group-add">
                                <div class="user-profiles-group mb-4">
                                    <div class="profile-cover text-center">
                                        <label class="profile-cover-avatar" for="avatar_upload">
                                            <img class="avatar-img" src="{{ asset('assets/img/avatar/avatar-2.jpg') }}"
                                                alt="Profile Image">
                                            <input type="file" id="avatar_upload">
                                            <span class="avatar-edit">
                                                <img src="{{ asset('assets/img/icon/camera.svg') }}" alt="Image">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="pass-login">
                                        <label class="form-label">Group Name </label>
                                        <input type="password" class="form-control pass-input">
                                    </div>
                                    <div class="pass-login">
                                        <label class="form-label">Description </label>
                                        <textarea class="form-control "></textarea>
                                    </div>
                                    <div class="pass-login">
                                        <h4>Group Type</h4>
                                        <div class="d-flex align-items-center">
                                            <label class="group-type-radio">Public
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="group-type-radio">Private
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mute-chat-btn">
                                    <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="feather-x me-1"></i>Cancel
                                    </a>
                                    <a class="btn btn-primary" id="next-parti">
                                        <i class="feather-arrow-right me-1"></i>Next
                                    </a>
                                </div>
                            </div>
                            <div class="parti-group hash-participant">
                                <div class="user-block-group mb-4">
                                    <div class="search_chat has-search group-name-search">
                                        <span class="fas fa-search form-control-feedback"></span>
                                        <input class="form-control chat_input" id="search-contact-one" type="text"
                                            placeholder="Search">
                                    </div>

                                    <h5>Contacts</h5>
                                    <div class="sidebar">
                                        <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                            <div class="fav-title contact-title">
                                                <h6>A</h6>
                                            </div>
                                        </div>
                                        <ul class="user-list">
                                            <li class="user-list-item">
                                                <div class="list-user-blk">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-4.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Alexander Manuel</h5>
                                                            <p>Active 4Min Ago</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="list-user-blk">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-5.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Annette Theriot</h5>
                                                            <p>Online</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                            <div class="fav-title contact-title">
                                                <h6>B</h6>
                                            </div>
                                        </div>
                                        <ul class="user-list">
                                            <li class="user-list-item">
                                                <div class="list-user-blk">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-10.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Bacon Mark</h5>
                                                            <p>Active 8Min Ago</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item ">
                                                <div class="list-user-blk mb-0">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-12.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Bennett Gerard</h5>
                                                            <p>Last Seen Today at 12:35 AM</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mute-chat-btn">
                                    <a class="btn btn-secondary" id="previous-group">
                                        <i class="bx bx-left-arrow-alt me-1"></i>Previous
                                    </a>
                                    <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="modal" data-bs-target="#Success-group">
                                        <i class="bx bx-send me-1"></i>Create
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="Success-group">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content success-group-wrap-list">
                    <div class="modal-header">
                        <div class="success-pass mx-auto">
                            <img src="{{ asset('assets/img/avatar/avatar-16.png') }}" alt="Success" class="img-fluid">
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


        <div class="modal fade" id="video_call" role="document">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content voice_content">
                    <div class="modal-body voice_body">
                        <div class="call-box incoming-box">
                            <div class="call-wrapper">
                                <div class="call-inner">
                                    <div class="call-user">
                                        <img alt="User Image" src="{{ asset('assets/img/avatar/avatar-2.jpg') }}"
                                            class="call-avatar">
                                        <h4>Mark Villiams <span>Video Calling</span>
                                        </h4>
                                    </div>
                                    <div class="call-items">
                                        <a href="#" class="btn call-item call-end" data-bs-dismiss="modal">
                                            <i class="bx bx-x"></i>
                                        </a>
                                        <a href="video-call.html" class="btn call-item call-start">
                                            <i class="feather-video"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="voice_call" role="document">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content voice_content">
                    <div class="modal-body voice_body">
                        <div class="call-box incoming-box">
                            <div class="call-wrapper">
                                <div class="call-inner">
                                    <div class="call-user">
                                        <img alt="User Image" src="{{ asset('assets/img/avatar/avatar-2.jpg') }}"
                                            class="call-avatar">
                                        <h4>Mark Villiams <span>Voice Calling</span>
                                        </h4>
                                    </div>
                                    <div class="call-items">
                                        <a href="#" class="btn call-item call-end" data-bs-dismiss="modal">
                                            <i class="bx bx-x"></i>
                                        </a>
                                        <a href="audio-call.html" class="btn call-item call-start">
                                            <i class="bx bx-phone-call"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="872481386e010936a1508fa7-|49" defer></script>





@section('script')
<script type="module">
    Echo.join('chat')
        .here(users => {
            users.forEach(item => {
                let el = document.querySelector(`#link_${item.id}`);
                let elemenStatus = document.createElement('div');
                elemenStatus.classList.add('status');
                if (el) {
                    el.appendChild(elemenStatus);
                }
            });
        })
        .joining(user => {
            let el = document.querySelector(`#link_${user.id}`);
            let elemenStatus = document.createElement('div');
            elemenStatus.classList.add('status');
            if (el) {
                el.appendChild(elemenStatus);
            }
        })
        .leaving(user => {
            let el = document.querySelector(`#link_${user.id}`);
            let elemenStatus = el.querySelector('.status');
            if (elemenStatus) {
                el.removeChild(elemenStatus);
            }
        })
        .listen('UserOnlined', event => {
            let blockChat = document.querySelector("#chat-container");
            let elementChat = document.createElement('div');
            elementChat.classList.add('chat-content');

            let messageHTML = `
                <div class="chat-name">${event.user.name}</div>
                <div class="message-content-text">${event.message}</div>
            `;

            if (event.user.id == "{{ Auth::user()->id }}") {
                elementChat.classList.add('chats-right');
                elementChat.innerHTML = `
                    <div class="chats chats-right">
                        <div class="chat-avatar">
                            <img src="{{ Auth::user()->image }}" class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-content chat-content-right">
                            <div class="message-content">
                                ${messageHTML}
                                <div class="emoj-group rig-emoji-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:;"><i class="bx bx-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul class="">
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-01.svg') }}" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-02.svg') }}" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-03.svg') }}" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-04.svg') }}" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-05.svg') }}" alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
                                    </ul>       
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            } else {
                elementChat.classList.add('chats-left');
                elementChat.innerHTML = `
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="${event.user.image}" class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-content chat-content-left">
                            <div class="message-content reply-getcontent">
                                ${messageHTML}
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:;"><i class="bx bx-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-01') }}.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-02') }}.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-03') }}.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-04') }}.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-05') }}.svg" alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            blockChat.appendChild(elementChat);
            blockChat.scrollTop = blockChat.scrollHeight; // Scroll to the bottom
        });

    let inputChat = document.querySelector("#inputChat");
    let btnSend = document.querySelector("#btnSend");

    function sendMessage() {
        let message = inputChat.value.trim();
        if (message === '') {
            return; // Không gửi nếu tin nhắn rỗng hoặc chỉ chứa khoảng trắng
        }
        
        axios.post('{{ route('sendMessage') }}', {
                'message': message
            })
            .then(data => {
                console.log(data.data.success);
                inputChat.value = '';
            })
            .catch(error => {
                console.error(error);
            });
    }

    btnSend.addEventListener('click', function() {
        sendMessage();
    });

    inputChat.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của Enter
            sendMessage();
        }
    });
</script>

@endsection
