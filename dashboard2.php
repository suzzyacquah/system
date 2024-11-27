
<?php include('inc/header.php');?>
<?php include('inc/main.php');?>
<div class="content-body">
<div class="container-fluid">

<div class="row">
    <div class=" row mt-3 ml-3 mr-3">
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-3">
            <div class="widget-stat card bg-danger">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="fas fa-home"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">TOTAL HOUSES</p>
                            <h3 class="text-white">76</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-4">
                <button type="button" class="btn btn-light"><a href="Houses.php">View List</a></button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-3">
            <div class="widget-stat card bg-success">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="fas fa-user-check"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Tenants</p>
                            <h3 class="text-white">56</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-4">
                <button type="button" class="btn btn-light"><a href="Tenants.php">View List</a></button>
                </div>
            </div>
        </div>
       <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-3">
            <div class="widget-stat card bg-info">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="fas fa-credit-card"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Total Payment</p>
                            <h3 class="text-white">$783K</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-4">
                <button type="button" class="btn btn-light"><a href="Payments.php">View List</a></button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
            <div class="widget-stat card bg-primary">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="fas fa-file-alt"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Reports</p>
                            <h3 class="text-white">4</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-4" >
                <button type="button" class="btn btn-light"><a href="Reports.php">View List</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class= "row">
    <div class="col-xl-6 ">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="card-intro-title mb-4">Smart Home</h4>
                                    <div class="bootstrap-carousel">
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="images/product/13.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="images/product/R.jpeg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="images/product/OIP.jpeg" alt="Third slide">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                              </button>
                                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                              </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-6 col-lg-6">
                        
                                            <div class="card">
                                                <div class="card-header border-0 flex-wrap">
                                                    <h4 class="fs-20 font-w700 mb-2">Expenses Statistics</h4>
                                                    <div class="d-flex align-items-center project-tab mb-2">    
                                                        <div class="card-tabs mt-3 mt-sm-0 mb-3 ">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown ms-2">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                                    <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                                    <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="d-flex">
                                                            <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                                <span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
                                                            </div>
                                                            <div class="ms-3">
                                                                <h4 class="fs-24 font-w700 ">246</h4>
                                                                <span class="fs-16 font-w400 d-block">Total Expenses</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">    
                                                            <div class="d-flex me-5">
                                                                <div class="mt-2">
                                                                    <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
                                                                    </svg>
                                                                </div>
                                                                <div class="ms-3">
                                                                    <h4 class="fs-24 font-w700 ">246</h4>
                                                                    <span class="fs-16 font-w400 d-block"> water bills</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="mt-2">
                                                                    <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                                                                    </svg>

                                                                </div>
                                                                <div class="ms-3">
                                                                    <h4 class="fs-24 font-w700 ">28</h4>
                                                                    <span class="fs-16 font-w400 d-block">Electricity</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="monthly">
                                                            <div id="chartBar" class="chartBar"></div>
                                                        </div>  
                                                        <div class="tab-pane fade" id="Weekly">
                                                            <div id="chartBar1" class="chartBar"></div>
                                                        </div>
                                                        <div class="tab-pane fade" id="Today">
                                                            <div id="chartBar2" class="chartBar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
                                                        <div class="form-check form-switch toggle-switch">
                                                            <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">
                                                         
                                                        </div>
                                                        <label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>   
                                                        <div class="form-check form-switch toggle-switch">
                                                          <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    </div>
</div>


       



</div>
<?php include('inc/footer.php');?>