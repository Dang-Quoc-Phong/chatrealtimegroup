@extends('admin.chatpublic')
@section('title', 'Trang chu')
 

@section('main-content')
    
<div class="content main_content">

    <div class="sidebar-menu">
        <div class="logo-col">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
        </div>
        <div class="menus-col">
            <div class="chat-menus">
                <ul>
                    <li>
                        <a href="index.html" class="chat-unread active" data-bs-toggle="tooltip"
                            data-bs-placement="right" title data-bs-original-title="Chat">
                            <i class="bx bx-message-square-dots"></i>
                        </a>
                    </li>
                    <li>
                        <a href="group.html" class="chat-unread" data-bs-toggle="tooltip"
                            data-bs-placement="right" title data-bs-original-title="Group">
                            <i class="bx bx-group"></i>
                        </a>
                    </li>
                    <li>
                        <a href="empty-status.html" class="chat-unread" data-bs-toggle="tooltip"
                            data-bs-placement="right" title data-bs-original-title="Status">
                            <i class="bx bx-stop-circle"></i>
                        </a>
                    </li>
                    <li>
                        <a href="call.html" class="chat-unread" data-bs-toggle="tooltip"
                            data-bs-placement="right" title data-bs-original-title="Call">
                            <i class="bx bx-phone"></i>
                        </a>
                    </li>
                    <li>
                        <a href="contact.html" class="chat-unread" data-bs-toggle="tooltip"
                            data-bs-placement="right" title data-bs-original-title="Contact">
                            <i class="bx bx-user-pin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="settings.html" class="chat-unread" data-bs-toggle="tooltip"
                            data-bs-placement="right" title data-bs-original-title="Settings">
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
                                <img src="assets/img/avatar/avatar-2.jpg" alt>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="settings.html" class="dropdown-item"><span><i
                                            class="bx bx-cog"></i></span>Settings</a>
                                <a href="email-login.html" class="dropdown-item"><span><i
                                            class="bx bx-log-out"></i></span>Logout </a>
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
                            <li><a href="javascript:;" class="user-chat-search-btn"><i
                                        class="bx bx-search"></i></a></li>
                            <li>
                                <div class="chat-action-btns">
                                    <div class="chat-action-col">
                                        <a class="#" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:;" class="dropdown-item "
                                                data-bs-toggle="modal" data-bs-target="#new-chat"><span><i
                                                        class="bx bx-message-rounded-add"></i></span>New Chat
                                            </a>
                                            <a href="javascript:;" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#new-group"><span><i
                                                        class="bx bx-user-circle"></i></span>Create Group</a>
                                            <a href="javascript:;" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#invite-other"><span><i
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
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="chat.html"><img src="assets/img/avatar/avatar-2.jpg"
                                                alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="chat.html"><img src="assets/img/avatar/avatar-1.jpg"
                                                alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="chat.html"><img src="assets/img/avatar/avatar-7.jpg"
                                                alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="chat.html"><img src="assets/img/avatar/avatar-5.jpg"
                                                alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="chat.html"><img src="assets/img/avatar/avatar-3.jpg"
                                                alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="chat.html"><img src="assets/img/avatar/avatar-2.jpg"
                                                alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-body chat-body" id="chatsidebar">

                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                        <div class="fav-title pin-chat">
                            <h6><i class="bx bx-pin me-1"></i>Pinned Chat</h6>
                        </div>
                    </div>

                    <ul class="user-list space-chat">
                        @foreach ($users as $user)
                            
                        
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html"  class="item" id="link_{{$user->id}}">
                                <div class="avatar avatar-online">
                                    <img src="{{$user->image}}" class="rounded-circle"
                                        alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                       
                                        <h5>{{$user->name}}</h5>
                                        <p>Have you called them?</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">10:20 PM</small>
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
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar ">
                                        <img src="assets/img/avatar/avatar-13.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Elizabeth Sosa</h5>
                                        <p><span class="animate-typing-col">Typing
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                        <div class="chat-pin">
                                            <i class="bx bx-pin me-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="chat-hover">
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
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-5.jpg" class="rounded-circle"
                                        alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Michael Howard</h5>
                                        <p>Thank you</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">10:20 PM</small>
                                        <div class="chat-pin">
                                            <i class="bx bx-pin me-2"></i>
                                            <i class="bx bx-check-double check"></i>
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
                    </ul>

                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                        <div class="fav-title pin-chat">
                            <h6><i class="bx bx-message-square-dots me-1"></i>Recent Chat</h6>
                        </div>
                    </div>

                    <ul class="user-list">
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle"
                                        alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Horace Keene</h5>
                                        <p>Have you called them?</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Just Now</small>
                                        <div class="chat-pin">
                                            <span class="count-message">5</span>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Read</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Hollis Tran</h5>
                                        <p><i class="bx bx-video me-1"></i>Video</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                        <div class="chat-pin">
                                            <i class="bx bx-check"></i>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                        alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>James Albert</h5>
                                        <p><i class="bx bx-file me-1"></i>Project Tools.doc</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">10:20 PM</small>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-9.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Debra Jones</h5>
                                        <p><i class="bx bx-microphone me-1"></i>Audio</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">12:30 PM</small>
                                        <div class="chat-pin">
                                            <i class="bx bx-check-double check"></i>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar ">
                                        <img src="assets/img/avatar/avatar-7.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Dina Brown</h5>
                                        <p>Have you called them?</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">Yesterday</small>
                                        <div class="chat-pin">
                                            <i class="bx bx-microphone-off"></i>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Judy Mercer</h5>
                                        <p class="missed-call-col"><i
                                                class="bx bx-phone-incoming me-1"></i>Missed Call</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">25/July/23</small>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar">
                                        <img src="assets/img/avatar/avatar-5.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Richard Ohare</h5>
                                        <p><i class="bx bx-image-alt me-1"></i>Photo</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">27/July/23</small>
                                        <div class="chat-pin">
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-list-item chat-user-list">
                            <a href="chat.html">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatar/avatar-6.jpg" class="rounded-circle"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Charles Sellars</h5>
                                        <p>Have you called them?</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">10:20 PM</small>
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
                                                    class="bx bx-trash"></i></span>Delete Chat</span>
                                        <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                            Chat</span>
                                        <span class="dropdown-item"><span><i
                                                    class="bx bx-check-square"></i></span>Mark as Unread</span>
                                        <span class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#block-user"><span><i
                                                    class="bx bx-block"></i></span>Block</span>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                    <figure class="avatar ms-1">
                        <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle" alt="image">
                    </figure>
                    <div class="mt-1">
                        <h5>Mark Villiams</h5>
                        <small class="last-seen">
                            Last Seen at 07:15 PM
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
                                <a href="index.html" class="dropdown-item "><span><i
                                            class="bx bx-x"></i></span>Close Chat </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#mute-notification"><span><i
                                            class="bx bx-volume-mute"></i></span>Mute Notification</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#disappearing-messages"><span><i
                                            class="bx bx-time-five"></i></span>Disappearing Message</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#clear-chat"><span><i
                                            class="bx bx-brush-alt"></i></span>Clear Message</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#change-chat"><span><i
                                            class="bx bx-trash"></i></span>Delete Chat</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#report-user"><span><i
                                            class="bx bx-dislike"></i></span>Report</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#block-user"><span><i
                                            class="bx bx-block"></i></span>Block</a>
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
            <div class="chat-body chat-page-group slimscroll">
                <div class="messages">
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="chat-profile-name">
                                <h6>Mark Villiams<span>8:16 PM</span><span
                                        class="check-star msg-star d-none"><i class="bx bxs-star"></i></span>
                                </h6>
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
                                            <a href="#" class="dropdown-item click-star"><span><i
                                                        class="bx bx-star"></i></span><span
                                                    class="star-msg">Star Message</span></a>
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
                            <div class="message-content">
                                Hello <a href="javascript:;">@Alex</a> Thank you for the beautiful web design
                                ahead schedule.
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
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#forward-message"><i
                                                    class="bx bx-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-line">
                        <span class="chat-date">Today, July 24</span>
                    </div>
                    <div class="chats chats-right">
                        <div class="chat-content">
                            <div class="chat-profile-name text-end">
                                <h6><i class="bx bx-check-double me-1 inactive-check"></i>Alex Smith<span>8:16
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
                                <div class="emoj-group rig-emoji-group">
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
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#forward-message"><i
                                                    class="bx bx-share"></i></a></li>
                                    </ul>
                                </div>
                                <div class="chat-voice-group">
                                    <ul>
                                        <li><a href="javascript:;"><span><img
                                                       src="{{asset('assets/img/icon/play-01.svg')}}"
                                                        alt="image"></span></a></li>
                                                        <li><img src="{{ asset('assets/img/voice.svg')}}" alt="image"></li>
                                        <li>0:05</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-10.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                    </div>
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="chat-profile-name">
                                <h6>Mark Villiams<span>8:16 PM</span><span
                                        class="check-star msg-star-three d-none"><i
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
                                            <a href="#" class="dropdown-item click-star-three"><span><i
                                                        class="bx bx-star"></i></span><span
                                                    class="star-msg-three">Star Message</span></a>
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
                            <div class="message-content award-link chat-award-link">
                                <a href="javascript:;">https://www.youtube.com/watch?v=GCmL3mS0Psk</a>
                                <img src="{{asset('assets/img/award.jpg')}}" alt="img">
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
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#forward-message"><i
                                                    class="bx bx-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chats chats-right">
                        <div class="chat-content">
                            <div class="chat-profile-name justify-content-end">
                                <h6><i class="bx bx-check-double me-1 active-check"></i>Alex Smith<span>8:16
                                        PM</span><span class="check-star msg-star-four d-none"><i
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
                                            <a href="#" class="dropdown-item click-star-four"><span><i
                                                        class="bx bx-star"></i></span><span
                                                    class="star-msg-four">Star Message</span></a>
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
                            <div class="message-content fancy-msg-box">
                                <div class="emoj-group wrap-emoji-group ">
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
                                <div class="download-col">
                                    <ul class="nav mb-0">
                                        <li>
                                            <div class="image-download-col">
                                                <a href="{{ asset('assets/img/media/media-big-02')}}.jpg"
                                                    data-fancybox="gallery" class="fancybox">
                                                    <img src="{{ asset('assets/img/media/media-02.jpg')}}" alt>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-download-col ">
                                                <a href="{{ asset('assets/img/media/media-big-03')}}.jpg"
                                                    data-fancybox="gallery" class="fancybox">
                                                    <img src="{{ asset('assets/img/media/media-03.jpg')}}" alt>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-download-col image-not-download">
                                                <a href="{{ asset('assets/img/media/media-big-01')}}.jpg"
                                                    data-fancybox="gallery" class="fancybox">
                                                    <img src="{{ asset('assets/img/media/media-01.jpg')}}" alt>
                                                    <span>10+</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-10.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                    </div>
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="chat-profile-name">
                                <h6>Mark Villiams<span>8:16 PM</span><span
                                        class="check-star msg-star-five d-none"><i
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
                                            <a href="#" class="dropdown-item click-star-five"><span><i
                                                        class="bx bx-star"></i></span><span
                                                    class="star-msg-five">Star Message</span></a>
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
                            <div class="message-content review-files">
                                <p>Please check and review the files<span class="ms-1"><img
                                            src="{{ asset('assets/img/icon/smile-chat.svg')}}" alt="Icon"></span></p>
                                <div class="file-download d-flex align-items-center mb-0">
                                    <div
                                        class="file-type d-flex align-items-center justify-content-center me-2">
                                        <i class="bx bxs-file-doc"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">Landing_page_V1.doc</span>
                                        <ul>
                                            <li>80 Bytes</li>
                                            <li><a href="javascript:;">Download</a></li>
                                        </ul>
                                    </div>
                                </div>
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
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#forward-message"><i
                                                    class="bx bx-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="like-chat-grp">
                                <ul>
                                    <li class="like-chat"><a href="javascript:;">2<img src="{{asset('assets/img/icon/like.svg')}}" alt="Icon"></a></li>
                                    <li class="comment-chat"><a href="javascript:;">2<img src="{{asset('assets/img/icon/heart.svg')}}" alt="Icon"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="chat-profile-name">
                                <h6>Mark Villiams<span>8:16 PM</span><span
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
                                Thank you for your support
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
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
                        </div>
                        <div class="chat-content chat-cont-type">
                            <div class="chat-profile-name chat-type-wrapper">
                                <p>Mark Villiams Typing...</p>
                            </div>
                        </div>
                    </div>
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
                            <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-01')}}.svg"
                                        alt="Icon"></a></li>
                            <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-02')}}.svg"
                                        alt="Icon"></a></li>
                            <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-03')}}.svg"
                                        alt="Icon"></a></li>
                            <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-04')}}.svg"
                                        alt="Icon"></a></li>
                            <li><a href="javascript:;"><img src="{{ asset('assets/img/icon/emoj-icon-05')}}.svg"
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
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" class="rounded-circle dreams_chat"
                                alt="image">
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
                    <input type="text" class="form-control chat_form"
                        placeholder="Type your message here...">
                </div>
                <div class="form-buttons">
                    <button class="btn send-btn" type="submit">
                        <i class="bx bx-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>




  

</div>

@section('script')
<script type="module">
    Echo.join('chat')
    .here(users => {
       users.forEach(item =>{
        let el = document.querySelector(`#link_${item.id}`)
        let elemenStatus  = document.createElement('div')
        elemenStatus.classList.add('avatar avatar-online')
        if(el){
            el.appendChild(elemenStatus)
        }
       })
    })
    .joining(user =>{
        let el = document.querySelector(`#link_${user.id}`)
        let elemenStatus  = document.createElement('div')
        elemenStatus.classList.add('avatar avatar-online')
        if(el){
            el.appendChild(elemenStatus)
        }
       })

    
    .leaving(user => [
        console.log(user, 'leaving')

    ])
</script> 
@endsection


@endsection
