            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    View User
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
               <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
			<li><a href="<?php echo base_url();?>admin/listvenue/<?php echo $getdetails->vendor_id;?>">Venues List</a></li>
                        <li><a href="<?php echo base_url();?>admin/viewvenueusersinfo/<?php echo $venueid;?>">Venue Users</a></li>
                        <li class="active">View Venue User</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
				<div class="row">
                    <div class="col-sm-12">
					
                        <section class="panel">
                            <header class="panel-heading ">
                                
                                <!--<span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>-->
                            </header>
                            <table class="table responsive-data-table data-table">
                            
                            
							<?php 
								//echo "<pre>";print_r($viewuserdetails);exit;
							?>
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    
									<img src="<?php echo base_url();?>images/profiles/<?php echo $viewuserdetails->profile_pic;?>" style="width:auto;height:160px;"/>
                                </td>
                                
                          </tr>
						  <tr>
                                <td>
                                    User Name
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                   <?php echo ucfirst($viewuserdetails->name);?>
									</td>
                                
                          </tr>
							<tr>
                                <td>
                                    E-mail
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $viewuserdetails->email;?>
                                </td>
                          </tr>
						  <tr>
                                <td>
                                    gender
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php if($viewuserdetails->gender == 1) { echo "Male"; } else { echo "Female"; } ?>
                                </td>
                         </tr>
							<tr>
                                <td>
                                    phone
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                   <?php echo $viewuserdetails->phone;?>
                                </td>
                         </tr>
							<tr>
                                <td>
                                    Registered Date
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $viewuserdetails->created_on;?>
                                </td>
                          </tr>
							</tbody>
                            </table>
                        </section>
						
						
                    </div>

                </div>

                

            </div>
     