<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="head-reg text-center">
                <h2><?php echo strtoupper ($row->regimentname);?> </h2>
                <h2>WALL OF FAME</h2>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="links ">
                <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/bricks');?>">Fame</a>

            </div>
        </div>
    </div>
</div>
<div class="regiment-backs">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <div id="container" class="wall">
               <?php
                foreach($walloffame as $row)
                {
                ?>
                <a href="<?php echo site_url('website/deeddet?id=').$row->id;?>"><div class="item"><?php echo $row->name;?></div></a>
                <?php 
                }
                ?>
            </div>
           </div>
        </div>
    </div>
    

</div>
           <div class="detail-btn text-center" style="margin-top:50px;">
           <a href="<?php echo site_url('website/deed');?>"><button type="button" class="btns">Add Deed</button></a> 
                

               </div>
</div>
