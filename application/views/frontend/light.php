<div class="container">
    <div class="row">
    <div class="col-md-12">
		<div class="fallingLeaves" >
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	
	</div>
	</div>
	</div>
  </div>

  <div class="container">
      <div class="row">
         <div class="col-md-3"></div>
         
          <div class="col-md-6">
             <div class="head-reg text-center">
              <h2 style="margin:-5px auto;">LIGHT A LAMP</h2>
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

               
                 <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->categoryid;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Soldier Detail</a>|<a href="#">Light A Lamp</a>

              </div>
          </div>
      </div>
      <div style="display:none;">
                        <input type="text" name="id" placeholder="Martyr id" value="<?php echo $id;?>" class="classajax" />
                    </div>
  </div>
  <div class="regi">
   <div class="container pages">
      <div class="">
  <div class="lamp-head text-center">
      <img src="<?php echo base_url("uploads");?><?php echo "/".$row->image;?>" class="lamp-img" height="250px" width="200px">
      <h3><?php echo $row->name;?></h3>
      <h4><?php echo $row->dateofdeath;?></h4>
      <div class="lamp-light">
<!--          <div class="candle"></div>-->
        <img src="<?php echo base_url('assets/images/lamp.gif'); ?>">
      </div>
      
  </div>
           
       </div>
       
   </div>
   </div>
    </div>

    <script>
 $(document).ready(function () {
//     alert($id);
     var id=$('.classajax').val();
//     alert (id);
//     alert("demo");
     
        $.getJSON(
            "<?php echo base_url(); ?>index.php/website/lightalampcount/" + $('.classajax').val(), {
            },
            function (data) {
                //  alert(data);
                console.log(data);
//                nodata=data;
//                // $("#store").html(data);
//                changestoretable(data);

            }

        );

    });
		</script>
