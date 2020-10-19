<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="<?php echo base_url(); ?>public/js/fluidmeter.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>public/css/profile.css" type="text/css">

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<?php $this->load->view('template/sidebar'); ?>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
				<!--<progress id="player1" value="0"></progress>
				
				<span id="display1"></span>
				
				<progress id="player2" value="0"></progress>
				
				<span id="display2"></span>-->
				<div id="game_div">
				<div class="row">
				<div class="col text-left left" >
				 <img src="<?php echo base_url();?>public/images/coronawarrior.jpg" class="img-responsive" alt="" style="width:100px;height:150px">
				</div>
				<div class="col text-right right" >
				<img src="<?php echo base_url();?>public/images/coronadragon.png" class="img-responsive" style="width:200px;height:250px">
                 
				</div>
				</div>
				<button id="newgame" type="button" class="btn btn-success">Start New Game</button>
				</div>
				
				
				
				
				<div id="game_content">
				
				<h1><span style="color:red;">Time Left:</span>&nbsp;<span class="timer" style="color:red;">00</span><span style="color:red;">sec</span></h1>
				<input type="hidden" id="timer" name="timer" value="60" />
				<div class="row">
				<div class="col text-left left" >
				<div><img src="<?php echo base_url();?>public/images/coronawarrior.jpg" class="img-responsive" alt="" style="width:100px;height:150px"></div>
				<div id="fluid-meter" class="mx-auto"></div>
                 <input type="hidden" id="player" name="player1" value="100" />
				</div>
				<div class="col text-right right" >
				
				<div><img src="<?php echo base_url();?>public/images/coronadragon.png" class="img-responsive" style="width:200px;height:150px"></div>
				<div id="fluid-meter-2"></div>
                 <input type="hidden" id="dragon" name="dragon" value="100" />
				</div>
				</div>
				
				<div><button id="attack" type="button" class="btn btn-success">Attack</button>&nbsp;<button id="blast" type="button" class="btn btn-warning">Blast</button>&nbsp;<button id="heal" type="button" class="btn btn-primary">Heal</button>&nbsp;<button id="giveup" type="button" class="btn btn-danger">Give Up</button>&nbsp;<button id="startagain" type="button" class="btn btn-info strtnewgame">Start Again</button></div>
           
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="commentry" align="right">
					 
					  
					  </div>
					  
					  </div>

		   </div>
		</div>
	</div>
</div>

 <!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
  <p><span style="color:green">Game Over!!!</span></br><span style="color:green">Congratulations!!! You have won the Game</span></p>
  
     <button id="strtnewgame" type="button" class="btn btn-success strtnewgame">Star New Game</button>
  <a href="#" rel="modal:close">Close</a>
</div>

<div id="ex2" class="modal">
  <p><span style="color:green">Game Over!!!</span></br><span style="color:red">OOps!!! Dragon has won the Game</span></p>
  
     <button id="strtnewgame" type="button" class="btn btn-success strtnewgame">Star New Game</button>
  <a href="#" rel="modal:close">Close</a>
</div>

<div id="ex3" class="modal">
  <p><span style="color:red">Time Over!!!!</span></p>
  
     <button id="strtnewgame" type="button" class="btn btn-success strtnewgame">Star New Game</button>
  <a href="#" rel="modal:close">Close</a>
</div>

<!-- Link to open the modal -->

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
/*var progressBar = document.getElementById("player1");
 
  var display1 = document.getElementById("display1");
  
   var display2 = document.getElementById("display2");
  
  var progressBar1 = document.getElementById("player2");
  
  var loadBtn = document.getElementById("attack");

$(document).ready(function(){
	 progressBar.value = 10;
	  progressBar1.value = 10;
	 
	$("#attack").on("click", function(e) {
	
	//process(buildFormData());
	});
	
})

function process() {
	
	   progressBar.max = 10;
        progressBar.value = 4;
  display1.innerText = Math.floor((4 / 10) * 100) + '%';
  
  
    progressBar1.max = 10;
    progressBar1.value = 7;
  display1.innerText = Math.floor((7 / 10) * 100) + '%';
}

function buildFormData() {
  var fd = new FormData();

  for (var i = 0; i < 3000; i += 1) {
    fd.append('data[]', Math.floor(Math.random() * 999999));
  }

  return fd;
}*/

//////////

$(document).ready(function(){
	$("#game_content").hide();
var fm = new FluidMeter();
fm.init({
  targetContainer: document.getElementById("fluid-meter"),
  fillPercentage: 100,
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
  fillPercentage: 100,
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
$("#attack").on("click", function(e) {
	var player=$("#player").val();
	var dragon=$("#dragon").val();
	$.ajax({
				url:base_url+'profile/update_game',
				type:"POST",
				data:{"type":'attack','player':player,'dragon':dragon},
				success:function(res){
					var data = JSON.parse(res);
						//
						fm.setPercentage(Number(data.player));
						fm2.setPercentage(Number(data.dragon));
						
						$("#player").val(Number(data.player));
						$("#dragon").val(Number(data.dragon));
						result();
					},
			});	
	
	});
	
	$("#blast").on("click", function(e) {
	
	var player=$("#player").val();
	var dragon=$("#dragon").val();
	$.ajax({
				url:base_url+'profile/update_game',
				type:"POST",
				data:{"type":'blast','player':player,'dragon':dragon},
				success:function(res){
					var data = JSON.parse(res);
						//
						fm.setPercentage(Number(data.player));
						fm2.setPercentage(Number(data.dragon));
						
						$("#player").val(Number(data.player));
						$("#dragon").val(Number(data.dragon));
						result();
					},
			});	
	});
	
	$("#heal").on("click", function(e) {
	
	var player=$("#player").val();
	var dragon=$("#dragon").val();
	$.ajax({
				url:base_url+'profile/update_game',
				type:"POST",
				data:{"type":'heal','player':player,'dragon':dragon},
				success:function(res){
					var data = JSON.parse(res);
						//
						fm.setPercentage(Number(data.player));
						fm2.setPercentage(Number(data.dragon));
						
						$("#player").val(Number(data.player));
						$("#dragon").val(Number(data.dragon));
						result();
					},
			});	
	});
	
	$("#giveup").on("click", function(e) {
	
	var player=$("#player").val();
	var dragon=$("#dragon").val();
	$.ajax({
				url:base_url+'profile/update_game',
				type:"POST",
				data:{"type":'giveup','player':player,'dragon':dragon},
				success:function(res){
					var data = JSON.parse(res);
						//
						fm.setPercentage(Number(data.player));
						fm2.setPercentage(Number(data.dragon));
						
						$("#player").val(Number(data.player));
						$("#dragon").val(Number(data.dragon));
						
						result();
					},
			});	
	});


 $("#newgame").on("click", function(e) {
	$("#game_div").hide();
	$("#game_content").show();
	
	$.ajax({
				url:base_url+'profile/new_game',
				type:"POST",
				data:{},
				success:function(res){
					$("#player").val(Number(100));
						$("#dragon").val(Number(100));
						$("#commentry").html("");
						$(".timer").html("");
					$("#timer").val(60);
					setTimeout(function(){ 
			timer();
			}, 1000);
					
					},
			});	
	});
	
	$(".strtnewgame").on("click", function(e) {
		
		              
	
	$.ajax({
				url:base_url+'profile/new_game',
				type:"POST",
				data:{},
				success:function(res){
					$("#ex1").hide();
					$("#ex2").hide();
					$("#ex3").hide();
					
					$("#player").val(Number(100));
					$("#dragon").val(Number(100));
					 fm.setPercentage(Number(100));
						fm2.setPercentage(Number(100));
						$("#commentry").html("");
						$(".timer").html("");
						$("#timer").val(60);
						setTimeout(function(){ 
			timer();
			}, 1000);
					},
			});	
	
	});
	
	
});

    function result(){
		 
		 var player=$("#player").val();
	     var dragon=$("#dragon").val();
		 
		    $.ajax({
				url:base_url+'profile/get_updates',
				type:"POST",
				data:{},
				success:function(res){
					    var data = JSON.parse(res);
						
						$("#commentry").html("");
						var str="";
						for(i=0;i<data.comentry.length;i++){
						
							str+="<span>"+data.comentry[i].description+"</span></br>";
							
						}
						$("#commentry").html(str);
						
						if(player<1 || dragon <1 ){
						if(player > dragon){
						
						var winner="User";
						}else{
						
						var winner="Dragon";
						}
						
							$.ajax({
							url:base_url+'profile/result_update',
							type:"POST",
							data:{'player':player,'dragon':dragon,'winner':winner},
							success:function(res){
                                if(winner=="User"){
									$("#ex1").modal('open');
								}else{
									$("#ex2").modal('open');
								}
							}
							});

						}
					//
					},
			});	
		       
	 }

      
	  /////////////////////////////
	  
	  
	  (function($) {
    $.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = $.extend({}, $.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return $(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };
     
    $.fn.countTo.defaults = {
        from: timer,  // the number the element should start at
        to: 0,  // the number the element should end at
        speed: 100000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);

//jQuery(function($) {
	function timer(){
		$(".timer").html("");
	var timer=$("#timer").val();
        $('.timer').countTo({
            from: 60,
            to: 0,
            speed: 100000,
            refreshInterval: 50,
            onComplete: function(value) {
				$("#ex3").modal('open');
               
            }
        });
	}
    //});

</script>