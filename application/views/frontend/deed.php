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
                <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->categoryid;?>">Fame</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Deed</a>


             

            </div>
        </div>
    </div>
</div>
<div class="regi">
<div class="container">

    <div class="row">
        <div id="wrapper">
            <form action="<?php echo site_url('website/sendmessagesubmit');?>" method="POST">
                <fieldset>
                   

                    <div style="display:none;">
                        <input type="text" name="id" placeholder="Martyr id" value="<?php echo $id;?>" class="classajax" />
                    </div>
                    <div>
                        <input type="text" name="name" placeholder="Name" required/>
                    </div>
                    <div>
             
                    <div>
        
                        <textarea name="message" placeholder="Deed"></textarea>
                    </div>
                    <!--                <button type="submit" class="btn btn-info">Submit</button>-->
                    <input type="submit" class="btns" name="submit" value="Submit" style="position: relative;
top: 25px;" />
                </fieldset>
            </form>
        </div>
    </div>



</div>
</div>
