<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/fluidmeter.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>public/css/profile.css" type="text/css">

<style>

table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
}
thead {
  background: #395870;
  background: linear-gradient(#49708f, #293f50);
  color: #fff;
  font-size: 11px;
  text-transform: uppercase;
}
th:first-child {
  border-top-left-radius: 5px;
  text-align: left;
}
th:last-child {
  border-top-right-radius: 5px;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
.book-title {
  color: #395870;
  display: block;
}
.text-offset {
  color: #7c7c80;
  font-size: 12px;
}
.item-stock,
.item-qty {
  text-align: center;
}
.item-price {
  text-align: right;
}
.item-multiple {
  display: block;
}
tfoot {
  text-align: right;
}
tfoot tr:last-child {
  background: #f0f0f2;
  color: #395870;
  font-weight: bold;
}
tfoot tr:last-child td:first-child {
  border-bottom-left-radius: 5px;
}
tfoot tr:last-child td:last-child {
  border-bottom-right-radius: 5px;
} 



Resources

</style>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<?php $this->load->view('template/sidebar'); ?>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
				
				
				<table style="width:100%">
  <thead>
    <tr>
      <th scope="col">Game NO.</th>
      <th scope="col">Your Score</th>
      <th scope="col">Dragon Score</th>
	  <th scope="col">Result</th>
	   <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($games as $game){?>
    <tr>
      <td><?=$game->id?></td>
      <td><?=$game->player1?></td>
      <td><?=$game->player2?></td>
     
	  <td><?php if($game->result=="Dragon"){ echo "Dragon won the gane.";}else{ echo "You won game";}?></td>
	   <td><a href="<?php echo base_url();?>profile/game/<?=$game->id?>"><button id="view" type="button" class="btn btn-success" >View</button></a></td>
    </tr>
  <?php } ?>
  </tbody>

</table>

		   </div>
		</div>
	</div>
</div>