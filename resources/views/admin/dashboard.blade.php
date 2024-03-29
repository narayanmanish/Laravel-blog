@extends('admin.base')

@section('title', 'Dashboard')


@section('content')

<div class="row">
    <div class="col-lg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h3 class="card-title mb-1"><span class="lstick"></span>Sales Overview </h3>
                    </div>
                    <div class="ms-auto">
                        <select class="form-select b-0">
                            <option selected="">January 2021</option>
                            <option value="1">February 2021</option>
                            <option value="2">March 2021</option>
                            <option value="3">April 2021</option>
                        </select>
                    </div>
                </div>
                <div id="sales-overview2" class="p-relative" style="height:360px;"></div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- visit charts-->
    <!-- ============================================================== -->
    <div class="col-lg-3 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><span class="lstick"></span>Visit Separation</h4>
                <div id="visitor" style="height:250px; width:100%;"></div>
                <table class="table vm font-14">
                    <tr>
                        <td class="b-0">Mobile</td>
                        <td class="text-end font-medium b-0">38.5%</td>
                    </tr>
                    <tr>
                        <td>Tablet</td>
                        <td class="text-end font-medium">30.8%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Projects of the month -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h4 class="card-title"><span class="lstick"></span>Projects of the Month</h4>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table vm no-th-brd no-wrap pro-of-month">
                        <thead>
                            <tr>
                                <th colspan="2">Assigned</th>
                                <th>Name</th>
                                <th>Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:50px;"><span class="round"><img
                                            src="../assets/images/users/1.jpg" alt="user"
                                            width="50"></span></td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>Elite Admin</td>
                                <td>Low</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round"><img src="../assets/images/users/2.jpg"
                                            alt="user" width="50"></span></td>
                                <td>
                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small>
                                </td>
                                <td>Real Homes</td>
                                <td>Medium</td>
                            </tr>
                            <tr>
                                <td><span class="round round-success"><img
                                            src="../assets/images/users/3.jpg" alt="user"
                                            width="50"></span></td>
                                <td>
                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small>
                                </td>
                                <td>MedicalPro Theme</td>
                                <td>High</td>
                            </tr>
                            <tr>
                                <td><span class="round round-primary"><img
                                            src="../assets/images/users/4.jpg" alt="user"
                                            width="50"></span></td>
                                <td>
                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small>
                                </td>
                                <td>Elite Admin</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td><span class="round round-warning"><img
                                            src="../assets/images/users/5.jpg" alt="user"
                                            width="50"></span></td>
                                <td>
                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small>
                                </td>
                                <td>Helping Hands</td>
                                <td>High</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <h4 class="card-title"><span class="lstick"></span>My Contact</h4>
                </div>
                <div class="message-box contact-box">
                    <div class="message-widget contact-widget">
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user"
                                    class="img-circle"> <span
                                    class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc">info@wrappixel.com</span>
                            </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user"
                                    class="img-circle"> <span
                                    class="profile-status busy pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5> <span class="mail-desc">pamela1987@gmail.com</span>
                            </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <span class="round">A</span> <span
                                    class="profile-status away pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Arijit Sinh</h5> <span
                                    class="mail-desc">cruise1298.fiplip@gmail.com</span>
                            </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user"
                                    class="img-circle"> <span
                                    class="profile-status offline pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc">kat@gmail.com</span>
                            </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="../assets/images/users/5.jpg" alt="user"
                                    class="img-circle"> <span
                                    class="profile-status offline pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Andrew</h5> <span class="mail-desc">and@gmail.com</span>
                            </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="../assets/images/users/6.jpg" alt="user"
                                    class="img-circle"> <span
                                    class="profile-status offline pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Jonathan Jones</h5> <span class="mail-desc">jj@gmail.com</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Blog and website visit -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-4 col-xlg-3">
        <div class="card">
            <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg"
                alt="Card image cap">
            <div class="card-body">
                <h3 class="font-normal">Business development of rules 2021</h3>
                <span class="label label-info label-rounded">Technology</span>
                <p class="mb-0 mt-3 font-14">Titudin venenatis ipsum aciat. Vestibulum ullamcorper quam.
                    nenatis.</p>
                <div class="d-flex mt-2">
                    <button class="btn p-l-0 btn-link text-decoration-none">Read more</button>
                    <div class="ms-auto align-self-center">
                        <a href="javascript:void(0)" class="link me-2"><i
                                class="fa fa-heart-o"></i></a>
                        <a href="javascript:void(0)" class="link me-2"><i
                                class="fa fa-share-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <h4 class="card-title"><span class="lstick"></span>Website Visit</h4>
                    <ul class="list-inline mb-0 ms-auto">
                        <li>
                            <h6 class="text-muted text-success"><i
                                    class="fa fa-circle font-10 me-2 "></i>Site A view</h6>
                        </li>
                        <li>
                            <h6 class="text-muted text-info"><i
                                    class="fa fa-circle font-10 me-2"></i>Site B view</h6>
                        </li>
                    </ul>
                </div>
                <div class="website-visitor p-relative mt-4" style="width:100%;"></div>
            </div>
        </div>
    </div>
</div>

@endsection

