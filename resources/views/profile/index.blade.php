@extends('master')
@section('konten')
<!-- BEGIN::Konten Utama -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="ik ik-file-text bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Profile</h5>
                                        <span>Tentang akun anda</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="row">                
                        <div class="col-lg-12">
                            <div class="card">
                                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach($profile_user as $profil)
                                                <div class="col-md-12"> <strong>Nama Lengkap</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->name }}</p>
                                                </div>
                                                <div class="col-md-12"> <strong>Telepon</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->phone }}</p>
                                                </div>
                                                <div class="col-md-12"> <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->email }}</p>
                                                </div>
                                                <div class="col-md-12"> <strong>Alamat</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->address }}</p>
                                                </div>
                                                <div class="col-md-12"> <strong>Jenis Kelamin</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->gender }}</p>
                                                </div>
                                                <div class="col-md-12"> <strong>NIK</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->nik }}</p>
                                                </div>
                                                <div class="col-md-12"> <strong>NIP</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $profil->nip }}</p>
                                                </div>
                                                @endforeach
                                            </div>
                                            <hr>
                                            <!-- <p class="mt-30">Saya bisa dipanggil Jeo. Saya adalah seorang programming fornt end developer. Saya telah bekerja di banyak perusahaan</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <h4 class="mt-30">Skill Set</h4>
                                            <hr>
                                            <h6 class="mt-30">Wordpress <span class="pull-right">80%</span></h6>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h6 class="mt-30">HTML 5 <span class="pull-right">90%</span></h6>
                                            <div class="progress  progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h6 class="mt-30">jQuery <span class="pull-right">50%</span></h6>
                                            <div class="progress  progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h6 class="mt-30">Photoshop <span class="pull-right">70%</span></h6>
                                            <div class="progress  progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                        <div class="card-body">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="example-name">Full Name</label>
                                                    <input type="text" placeholder="Enter your full name" class="form-control" name="example-name" id="example-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email">Email</label>
                                                    <input type="email" placeholder="Enter your email" class="form-control" name="example-email" id="example-email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-password">Password</label>
                                                    <input type="password"placeholder="Password" class="form-control" name="example-password" id="example-password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-phone">Phone No</label>
                                                    <input type="text" placeholder=" ex: 081388446654" id="example-phone" name="example-phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-message">Message</label>
                                                    <textarea name="example-message" name="example-message" rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-country">Select Country</label>

                                                    <select name="example-message" id="example-message" class="form-control">
                                                    <option value="">Choose your country</option>
                                                        <option>Indonesia</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-success" type="submit">Update Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="right-sidebar">
                <div class="sidebar-chat" data-plugin="chat-sidebar">
                    <div class="sidebar-chat-info">
                        <h6>Chat List</h6>
                        <form class="mr-t-10">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search for friends ..."> 
                                <i class="ik ik-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="chat-list">
                        <div class="list-group row">
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                <figure class="user--online">
                                    <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                <figure class="user--online">
                                    <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                <figure class="user--online">
                                    <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                <figure class="user--busy">
                                    <img src="../img/users/4.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                                <figure class="user--busy">
                                    <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                <figure class="user--offline">
                                    <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                <figure class="user--offline">
                                    <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="chat-panel" hidden>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>  
                        <span class="user-name">John Doe</span> 
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="card-body">
                        <div class="widget-chat-activity flex-1">
                            <div class="messages">
                                <div class="message media reply">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Epic Cheeseburgers come in all kind of styles.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers make your knees weak.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--offline">
                                        <a href="#">
                                            <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers will never let you down.</p>
                                        <p>They'll also never run around or desert you.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>A great cheeseburger is a gastronomical event.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--busy">
                                        <a href="#">
                                            <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>If you are a vegan, we are sorry for you loss.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="javascript:void(0)" class="card-footer" method="post">
                        <div class="d-flex justify-content-end">
                            <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                            <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                    <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
                </div>
            </footer>
        </div>
    </div>
        
        
        

    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                    <i class="ik ik-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="container">
                        <div class="apps-wrap">
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                            </div>
                            
                            <div class="app-item">
                                <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END::Konten Utama -->
@endsection
