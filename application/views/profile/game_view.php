<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/fluidmeter.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>public/css/profile.css" type="text/css">


<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<?php $this->load->view('template/sidebar'); ?>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
				<?php if($games[0]->result=="Dragon"){ ?>
					<span style="color:green"><b>Dragon has won Game</b></span>
				
				<?php }else	{ ?>
				<span style="color:green">You have won Game</span>
				<?php } ?>
				
				<div class="row">
				<div class="col text-left left" >
				<div><img src="<?php echo base_url();?>public/images/coronawarrior.jpg" class="img-responsive" alt="" style="width:100px;height:150px"></div>
				<div id="fluid-meter" class="mx-auto"></div>
                 <input type="hidden" id="player" name="player1" value="<?=$games[0]->player1 ?>" />
				</div>
				<div class="col text-right right" >
				
				<div><img src="<?php echo base_url();?>public/images/coronadragon.png" class="img-responsive" style="width:200px;height:150px"></div>
				<div id="fluid-meter-2"></div>
                 <input type="hidden" id="dragon" name="dragon" value="<?=$games[0]->player2 ?>" />
				</div>
				 <div id="commentry" >
				 <?php foreach($comentry as $cmntry){?>
					<?=$cmntry->description?></br>
				 <?php } ?>
					  </div>
				</div>
					
				

		   </div>
		</div>
	</div>
</div>

<style>
div#commentry {
  background-color: gray;
  width: 350px;
  height: 250px;
  overflow: auto;
  align:right;
}

.left {
  float: left;
  
  text-align: right;
  margin: 2px 10px;
  display: inline
}
.right {
	
  float: left;
  text-align: left;
  margin: 2px 10px;
  display: inline
}

</style>

<script>
var base_url='<?php echo base_url();?>';


//////////

$(document).ready(function(){
	 var player=$("#player").val();
	     var dragon=$("#dragon").val();
		
var fm = new FluidMeter();
fm.init({
  targetContainer: document.getElementById("fluid-meter"),
  fillPercentage: player,
  options: {
    fontFamily: "Oxygen",
    drawPercentageSign: true,
    drawBubbles: true,
    size: 200,
    borderWidth: 10,
    backgroundColor: "#262626",
    foregroundColor: "#4C4A4A",
    foregroundFluidLayer: {
      fillStyle: "purple",
      angularSpeed: 90,
      maxAmplitude: 11,
      frequency: 25,
      horizontalSpeed: -200
    },
    backgroundFluidLayer: {
      fillStyle: "pink",
      angularSpeed: 100,
      maxAmplitude: 9,
      frequency: 30,
      horizontalSpeed: 150
    }
  }
});

var fm2 = new FluidMeter();

fm2.init({
	
  targetContainer: document.getElementById("fluid-meter-2"),
  fillPercentage: dragon,
  options: {
    fontFamily: "Oxygen",
    drawPercentageSign: true,
    drawBubbles: true,
    size: 200,
    borderWidth: 10,
    backgroundColor: "#262626",
    foregroundColor: "#4C4A4A",
    foregroundFluidLayer: {
      fillStyle: "#55DD10",
      angularSpeed: 90,
      maxAmplitude: 11,
      frequency: 25,
      horizontalSpeed: -200
    },
    backgroundFluidLayer: {
      fillStyle: "#CDDD10",
      angularSpeed: 100,
      maxAmplitude: 13,
      frequency: 23,
      horizontalSpeed: 230
    }
  }
});
});
</script>