<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="./plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
<link href="./plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="./plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Validation Forms Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Create Contact</h3>
            <form  id="mainForm" name="mainForm" data-toggle="validator">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="white-box">
                                    <h3 class="box-title m-b-30">Personal</h3>
                                    <div class="form-group row">
                                      <div class="col-3">
                                        <img src="images/profilepic.png" alt="user-img" width="100" class="img-circle mr-3">
                                      </div>
                                      <div class="col-9">
                                        <div class="form-group">
                                          <label for="first_name">First Name</label>
                                          <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required data-minlength="3" data-maxlength="100" data-toggle="validator" data-error="Minimum of 3 characters">
											<div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                          <label for="middel_name">Middle  Name</label>
                                          <input type="text" class="form-control" id="middel_name" placeholder="Middel  Name" name="middel_name" required data-minlength="3" maxlength="100" pattern="^[A-Za-z]+$" data-error="Minimum of 3 characters">
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                          <label for="last_name">Last Name</label>
                                          <input type="text" class="form-control" id="last_name" placeholder="Last  Name" pattern="^[A-Za-z]+$" name="last_name" required data-minlength="3" maxlength="100" data-error="Minimum of 3 characters">
											<div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                          <label for="alias">Alias</label>
                                          <input type="text" class="form-control" id="alias" placeholder="Alias" name="alias" pattern="^[A-Za-z]+$"  required data-minlength="3" maxlength="100" data-error="Minimum of 3 characters">
                                       <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                    </div>
                                    <h3 class="box-title m-b-30">
                                      Address
                                      <button class="pull-right btn btn-default btn-rounded ml-3 add_address_button" type="button" id=""><i class="fa fa-plus-circle"></i></button></h3>
                                      <div class="address-row">
                                        <div class="form-group">
                                          <div class="input-group">
                                            <div class="input-group-btn">
                                              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Home</a>
                                                <a class="dropdown-item" href="#">Work</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                              </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Street address, P.O. Box"  name="address"  required minlength="3" maxlength="100" data-error="Please enter address.">
                                            
                                          </div>
										  <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" id="street" placeholder="Suite No, Street name" required minlength="3" maxlength="100" data-error="Please enter street.">
                                           <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                              <input type="text" class="form-control" id="building" placeholder="Apartment/Building" required minlength="3" maxlength="100"  data-error="Please enter building.">
                                             <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <div class="input-group">
                                                <select class="form-control" data-placeholder="Choose a State" tabindex="1"  name="state" data-error="Please Choose a State.">
                                                  <option value="State 1" >Quadrant</option>
                                                  <option value="State 2">SE</option>
                                                  <option value="State 3">SW</option>
                                                  <option value="State 4">NE</option>
                                                  <option value="State 5">S</option>
                                                  <option value="State 6">N</option>
                                                  <option value="State 7">E</option>
                                                  <option value="State 8">W</option>
                                                </select>
                                              
                                              </div><div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="first_name">City</label>
                                              <input type="text" class="form-control" id="city" placeholder="City"  name="city{{i}}" pattern="^[A-Za-z]+$" required minlength="3" maxlength="100">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="control-label">State/Province</label>
                                              <input type="text" class="form-control" id="province" placeholder="State/Province" pattern="^[A-Za-z]+$" name="province"  required minlength="3" maxlength="100">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="first_name">Postal Code / Zip Code</label>
                                              <input type="text" class="form-control" id="first_name" placeholder="Postal Code / Zip Code" pattern="^[0-9]+$" name="zipcode{{i}}"  required minlength="6" maxlength="10">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="control-label">Country</label>
                                              <input type="text" class="form-control" id="Country" placeholder="Country" pattern="^[A-Za-z]+$" name="country{{i}}" required minlength="3" maxlength="100">
                                             <div class="help-block with-errors"></div>
                                            </div>
                                          </div>
                                        </div>

                                       
                                      </div>
                                      
                                    
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="white-box">
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-12 scrollTable">
										<div class="table-responsive">
                                          <table id="myTable" data-toggle="table" data-height="270" data-mobile-responsive="true" class="table table-striped table-sm">
                                              <thead>
                                                  <tr>
                                                      <th>First Name</th>
                                                      <th>Last Name</th>
                                                      
                                                      <th>Phone</th>
                                                  </tr>
                                              </thead>
                                              <tbody >
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Test</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">John</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Himanshu</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Dushant</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">bootstrap</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Test</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Sushil</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">bootstrap</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Sushil Sharma</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">Miller</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">bootstrap</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                                <tr id="tr-id-1" class="tr-class-1">
                                                    <td id="td-id-1" class="td-class-1">bootstrap</td>
                                                    <td>526</td> 
                                                    <td>extended</td> 
                                                </tr>
                                              </tbody>
                                          </table>
                                        </div>
										</div>
                                      </div>
                                    </div>
                                    <div class="phone-number-row" *ngFor="let itemrow of arr.phone; let i=index">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <div class="input-group phoneValid"  >
                                          <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="#">Cell</a>
                                              <a class="dropdown-item" href="#">Home</a>
                                              <a class="dropdown-item" href="#">Work</a>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="phone" data-error="Your Phone number is not valid." pattern="^[0-9]+$" data-minlength="10" maxlength="10" required>
                                               


                                          <div class="ml-3">
                                            <label class="custom-control custom-radio">
                                              <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                              <span class="custom-control-indicator"></span>
                                              <span class="custom-control-description">M</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                              <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                              <span class="custom-control-indicator"></span>
                                              <span class="custom-control-description">T</span>
                                            </label>
                                          </div>
                                          <button class="btn btn-default btn-rounded ml-3 add_phone_number_button" type="button"  *ngIf="i == 0" (click)="addNewRow('phone')" id=""><i class="fa fa-plus-circle"></i></button>
                                          <button class="btn btn-default btn-rounded ml-3 add_phone_number_button" type="button" *ngIf="arr.phone.length > 1 && i != 0" (click)="deleteRow('phone',i)" id=""><i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                    <div class="email-row" *ngFor="let itemrow of arr.email; let i=index">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <div class="input-group emailValid">
                                          <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="#">Main</a>
                                              <a class="dropdown-item" href="#">Home</a>
                                              <a class="dropdown-item" href="#">Work</a>
                                            </div>
                                          </div>
                                          <input type="email" class="form-control" aria-label="Text input with dropdown button" placeholder="example@email.com" data-error="That email address is invalid" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" required >
                                   

                                          <button class="btn btn-default btn-rounded ml-3 add_email_button" type="button"  *ngIf="i == 0" (click)="addNewRow('email')" id=""><i class="fa fa-plus-circle"></i></button>
                                          <button class="btn btn-default btn-rounded ml-3 add_email_button" type="button" *ngIf="arr.email.length > 1 && i != 0" (click)="deleteRow('email',i)" id=""><i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Best Time To Contact</label>
                                      <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                        <input type="text" class="form-control" value="13:14"
                                         pattern="^[0-9]+$" name="besttime" required minlength="3" maxlength="100">

                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-time"></span>
                                        </span>

                                          
                                             
                                      </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group mt-5">
                                      <label for="exampleInputEmail1">Notes</label>
                                      <textarea class="form-control" rows="5" name="notes"  name="notes" required minlength="3" maxlength="100"></textarea>
                                         <div class="help-block with-errors"></div>      
                                    </div>
                                  </div>
                                </div>
                               
                                <div class="col-md-12 mb-5">
                                  <div class="white-box">
                                    <div class="form-actions">
                                         <button type="button" class="btn btn-sm btn-default btn-rounded fcbtn btn-1e" data-toggle="modal" data-target="#responsive-modal-cli" class="model_img img-responsive">CLI</button>
                                        <button type="button" class="btn btn-sm btn-default btn-rounded fcbtn btn-1e" data-toggle="modal" data-target="#responsive-modal-ind" class="model_img img-responsive">IND</button>
                                        <button type="button" class="btn btn-sm btn-default btn-rounded fcbtn btn-1e" data-toggle="modal" data-target="#responsive-modal-ext" class="model_img img-responsive">EXT</button>
                                        <button type="button" class="btn btn-sm btn-default btn-rounded fcbtn btn-1e">INT</button> 
                                      <div class="pull-right">
                                        <button type="submit" class="fcbtn btn btn-info btn-outline btn-1e "> <i class="fa fa-check" ></i> Create</button>
                                        <button type="submit" class="fcbtn btn btn-info btn-outline btn-1e"> <i class="fa fa-check"></i> Create and Add Another</button>
                                        <button type="button" class="fcbtn btn btn-danger btn-outline btn-1e" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
									
									
						
						 </div>
                                </div>
                              </div>
                            </form>
						<!-- /.modal 1 CLI -->
                        <div id="responsive-modal-cli" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">CLI</h4> </div>
                                    <div class="modal-body">
                                         <div class="col-md-12">
                                                    <!-- CLI -->
                                                    <div id="cl" class="form-group">
                                                      <label class="control-label">Refarrel Source</label>
                                                      <select class="form-control">
                                                        <option>Online</option>
                                                        <option>Industry Affiliate</option>
                                                        <option>Internal Refarrel</option>
                                                        <option>Prior Client</option>
                                                        <option>World of Mouth</option>
                                                        <option>Events/Promotion</option>
                                                        <option>Others</option>
                                                      </select>
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- /.end modal 1 CLI -->
						<!-- /.modal 1 IND -->
                        <div id="responsive-modal-ind" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">IND</h4> </div>
                                    <div class="modal-body">
									<form  data-toggle="validator">
                                         <div class="col-md-12">
                                                    <!-- IND -->
                                                    <div id="ind">
                                                      <div class="form-group">
                                                        <label>Profession</label>
                                                        <select class="form-control">
                                                          <option>Student</option>
                                                          <option>Doctor</option>
                                                          <option>Teacher</option>
                                                          <option>Others</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Date of birth</label>
                                                        <div class="input-group">
                                                          <input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="dob" required minlength="3" maxlength="100">
                                              
                                                          <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                           
                                                        </div>
														<div class="help-block with-errors"></div>
                                                      </div>
                                                      <div class="form-group">
                                                        <button class="btn  btn-outline btn-rounded btn-default">Brokerage</button> 
                                                        <button class="btn btn-outline btn-rounded btn-default">Team</button>

                                                        <div class="pull-right">
                                                          <button class="btn btn-facebook waves-effect btn-rounded waves-light" type="button"> <i class="fa fa-facebook"></i> </button>
                                                          <button class="btn btn-twitter waves-effect btn-rounded waves-light" type="button"> <i class="fa fa-twitter"></i> </button>
                                                          <button class="btn btn-googleplus waves-effect btn-rounded waves-light" type="button"> <i class="fa fa-google-plus"></i> </button>
                                                          <button class="btn btn-linkedin waves-effect btn-rounded waves-light" type="button"> <i class="fa fa-linkedin"></i> </button>
                                                          <button class="btn btn-instagram waves-effect btn-rounded waves-light" type="button"> <i class="fa fa-instagram"></i> </button>
                                                        </div>
                                                      </div>
                                                      <div class="refarrel_row" id="refarrel_row">
                                                        <div class="form-group mt-5">
                                                          <label>Active Refarrel</label>
                                                          <select id="refarrel_status" class="form-control">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <div class="form-group mt-5" id="refarrel_status_yes">
                                                          <select id="" class="form-control">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                          </select>
                                                        </div>
                                                        <div class="form-group mt-5" id="refarrel_status_no">
                                                          <select id="" class="form-control">
                                                            <option value="Prospective">Prospective</option>
                                                            <option value="Non Prospective">Non Prospective</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                            <label>Website</label>
                                                            <div class="input-group">
                                                              <span class="input-group-addon" id="basic-addon3">http://</span>
                                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="website"  required minlength="3" maxlength="100">
                                                              
                                                            </div>
															<div class="help-block with-errors"></div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                    </div>
									</form>
                                </div>
                            </div>
                        </div>
						<!-- /.end modal 1 IND -->
<!-- /.modal 1 EXT -->
                        <div id="responsive-modal-ext" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">EXT</h4> </div>
                                    <div class="modal-body">
                                        <form data-toggle="validator">
										<div class="col-md-12">
                                                    <!-- EXT -->
                                                    <div id="ext" class="form-group">
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <label class="">Association</label>
                                                          <textarea class="form-control" rows="5" name="association" required data-minlength="3" maxlength="100"></textarea>
														  
															<div class="help-block with-errors"></div>  
                                                          
                                                        </div>
                                                      </div>
                                                      <div class="row mt-5">
                                                        <div class="col-md-12">
                                                          <label class="">Company</label>
                                                          <textarea class="form-control" rows="5" name="company" required minlength="3" maxlength="100"></textarea>
                                                          <div class="help-block with-errors"></div> 
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
												
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                    </div>
									</form>
                                </div>
                            </div>
                        </div>
						<!-- /.end modal 1 EXT -->						
									
                                 
        </div>
    </div>
    
</div>
<!-- /.row -->

            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="./plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="./plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/validator.js"></script>
	<script src="./plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
	
	<script>
        $(document).ready(function () {
            $('#myTable').DataTable({
					"pageLength": 5,
					"bPaginate": false,
					"bLengthChange": false,
					"bFilter": true,
					"bInfo": false,
					"bAutoWidth": false
			});
		});
		</script>
		<style>
		.table-responsive{
			overflow:scroll;
			height:400px;
		}
		</style>
    <!--Style Switcher -->
    <script src="./plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="./plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>