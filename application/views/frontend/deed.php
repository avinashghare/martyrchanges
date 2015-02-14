<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="head-reg text-center">
                <h2>ADD DEED</h2>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="links ">
                <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/bricks');?>">Wall Of Fame</a>|<a href="">Add Deed</a>


             

            </div>
        </div>
    </div>
</div>
<div class="regi">
<div class="container">

    <div class="row">
        <div id="wrapper">
            <form action="<?php echo site_url('website/adddeed');?>" method="POST">
                <fieldset>
                   
                    <div>
                        <input type="text" name="name" placeholder="Name" required/>
                    </div>
             
                    <div>
        
                        <textarea name="deed" placeholder="Deed" required></textarea>
                    </div>
                    <input type="submit" class="btns" name="submit" value="Submit" style="position: relative;
top: 25px;" />
                </fieldset>
            </form>
    </div>



</div>
</div>
</div>