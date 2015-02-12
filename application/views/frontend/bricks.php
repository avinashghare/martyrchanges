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
                <!--                  <a href="index.html">Home</a>|<a href="regiments.html">Regiments</a>|<a href="detail.html">Martyr Detail</a>-->


                <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="#">Fame</a>

            </div>
        </div>
    </div>
</div>
<div class="regiment-backs">
<!--
<div class="wall">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                            <li>* Demo name Demo name</li>
                            <li>* Demo name</li>
                            <li>* Demo name Demo name</li>
                            <li>* Demo name</li>
                            <li>* Demo name</li>
                            <li>* Demo name</li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
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
<!--
                 <div class="item">demo name demo name  demo name </div>
                  <div class="item">demo name</div>
                <div class="item">demo name</div>
                  <div class="item">demo name demo name</div>
                   <div class="item">demo name demo name</div>
                    <div class="item">demo name demo name</div>
                     <div class="item">demo name demo name</div>
                <div class="item">demo name demo name</div>
               
                <div class="item">demo name demo name</div>
                <div class="item">demo name demo name</div>
                <div class="item">demo name</div>
                <div class="item">demo name</div>
               
                <div class="item">demo name</div>
                <div class="item">demo name</div>
-->
               
            </div>
           </div>
        </div>
    </div>
    <!--
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="brick">
                    <div class="sigle-brick">
                        <ul>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>
                            <li>Demo name</li>
                            <li>Demo name Demo name</li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
-->

</div>
           <div class="detail-btn text-center" style="margin-top:50px;">
           <a href="deed.php"><button type="button" class="btns">Add Deed</button></a> 
                

               </div>
</div>
