  <div class="container">
      <div class="row">
         <div class="col-md-3"></div>
         
          <div class="col-md-6">
             <div class="head-reg text-center">
              <h2><?php echo strtoupper ($row->regimentname);?> MARTYR DETAILS</h2>
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

               
                  <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->categoryid;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Martyr Detail</a>

              </div>
          </div>
      </div>
  </div>
  <div class="regiment-backs">
   <div class="container">
      
       <div class="row">
           <div class="col-md-3">
               <div class="detail-img">
                   
                   <img src="<?php echo base_url("uploads");?><?php echo "/".$row->image;?>">
               </div>
           </div>
           <div class="col-md-8">
               <div class="detail-text">
                   <h4><?php echo $row->name."(".$row->homestate.")";?></h4>
                   <h5><?php echo $row->operation;?></h5>
                   <h6><?php echo $row->dateofdeath;?></h6>
                   <h6><?php echo "Age- ".$row->age;?></h6>
                   <h6><?php echo $row->unit;?></h6>
                   
                   
               </div>
               <div class="detail-hist">
                   <h2>History :</h2>
                   <p><?php echo $row->description;?></p>
               </div>
               <div class="detail-btn text-center">
           <a href="<?php echo site_url('website/sendmessage?id=').$row->id;?>"><button type="button" class="btns">Send Message</button></a> 
                   <a href="<?php echo site_url('website/lightalamp?id=').$row->id;?>"> <button type="button" class="btns">Light a Lamp</button></a>
                  <span class="light"> <i class="fa fa-fire"></i><?php echo $row->lights; ?></span>

               </div>
           </div>
		
			
           </div>
           
       </div>
       
   </div>
    </div>
<!--
    <div class="footer"></div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".section1 .show").click(function () {
//                console.log("ABCD");
                $(".section1 span.tobedone").fadeOut(300);
                $(this).parents(".section1").children("span.tobedone ").fadeIn(300);
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>-->