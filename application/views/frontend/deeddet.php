  <div class="container">
      <div class="row">
         <div class="col-md-3"></div>
         
          <div class="col-md-6">
             <div class="head-reg text-center">
              <h2><?php echo strtoupper ($row->regimentname);?> </h2><h2>DEED DETAILS</h2>
              </div>
            
          </div>
          <div class="col-md-3"></div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
                       <div class="links ">
<!--                  <a href="index.html">Home</a>|<a href="regiments.html">Regiments</a>|<a href="detail.html">Martyr Detail</a>-->

               
                  <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->categoryid;?>">Deed</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Deed Detail</a>

              </div>
          </div>
      </div>
  </div>
  <div class="regiment-backs">
   <div class="container">
      
       <div class="row">
           <div class="col-md-3">
             
           </div>
           <div class="col-md-8">
               <div class="detail-text">
                   <h4>Name :</h4>

                   
               </div>
               <div class="detail-hist">
                   <h2>Deed :</h2>
                   <p><?php echo $row->description;?></p>
               </div>

           </div>
		
			
           </div>
           
       </div>
       
   </div>
    </div>