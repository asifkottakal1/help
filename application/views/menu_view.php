
<!-- Our Menus -->
						<?php                              
                        $notification = $this->session->flashdata('notification');
                        if(!empty($notification)) {
                        ?> 
                        <h4 class="">
                        <div class="<?php echo $notification['type'];?>" style="text-align: center;">
               <strong style="color: <?php echo $notification['color'];?>;"><?php echo $notification['message'];?></strong>
                        </div> 
                        </h4>
                        <?php } ?>
						
						
				

				

						<div class="choose-table">
							<form action="<?php echo site_url();?>/welcome/insertorder" method="post" class="choose-table-form">
							

								<div class="col-sm-4 form-item"> 
									<select class="form-control" name="food_id">
									<option   value="">Select  food</option>
										
										
										<?php
										foreach($rms_food_details as $rms_food_details )
										{
											?>
			<option value="<?php echo $rms_food_details->food_id; ?>"><?php echo $rms_food_details->food_name; ?></option>	
											<?php
										}
										?>
										
									</select>
								</div> 

								
								
								


								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Your Name" required> 	
								</div><!-- /.form-item -->

								

							
								

								
								
								<div class="class="btn-container">
									<button type="submit" class="btn btn-sm btn-light-green">Book Table Now</button>
								</div><!-- /.btn-container -->

							</form><!-- /.choose-table-form -->
						</div><!-- /.choose-table --> 
					</div><!-- /.book-table -->
					
					
										</div><!-- /.oc-container -->
									</div><!-- /.oc-container -->
				</section><!-- /#book-table -->
				<!-- Book Table  End -->

