<!DOCTYPE html>
<?php $id = $this->session->userdata('id');?>
<html>
<style>
  #pet, #item, #serv{
    display: none;
  }
</style>
  <head>
  </head>
  <body>
    <?php foreach($data as $read): ?>
      <div id="pet">
        <label> Pet Name: <?php echo $read['PetName'];?></label><br>
        <label> Pet Type: <?php echo $read['PetType'];?></label><br>
        <label> Pet Age: <?php echo $read['PetAge'];?></label><br>
        <label> Pet Breed: <?php echo $read['PetBreed'];?></label><br>
        <label> Pet Size: <?php echo $read['PetSize'];?></label><br>
        <label> Pet Record: <?php echo $read['PetRecord'];?></label><br>
        <label><?php echo $read['PetPic'];?></label>
      </div>
      <div id="item">
        <label> Item Type: <?php echo $read['ItemType'];?></label><br>
        <label> Item Price: <?php echo $read['ItemPrice'];?></label><br>
        <label> Item Info: <?php echo $read['ItemInfo'];?></label><br>
        <label> Item Contact: <?php echo $read['ItemContact'];?></label><br>
        <label> Item Address: <?php echo $read['ItemLocation'];?></label><br>
        <label><?php echo $read['ItemPic'];?></label>
      </div>
      <div id="serv">
        <label> Service Name: <?php echo $read['ServName'];?></label><br>
        <label> Service Type: <?php echo $read['ServType'];?></label><br>
        <label> Service Contact: <?php echo $read['ServContact'];?></label><br>
        <label> Service Address: <?php echo $read['ServAddress'];?></label><br>
        <label> Service Info: <?php echo $read['ServDesc'];?></label><br>
        <label> <?php echo $read['ServImage'];?></label>
      </div>
    <?php endforeach;?>
    <button class="btn btn-dark"><a href="<?php echo base_url('user');?>">Back</a></button>
  </body>
  <?php
  if($id != 'PetID'){
      if($id != 'ServID'){
        if($id == 'ItemID'){
          echo "<script>
            document.getElementById('item').style.display = 'block';
            document.getElementById('pet').style.display = 'none';
            document.getElementById('serv').style.display = 'none';
          </script>";
        }
      }
      else{
        echo "<script>
          document.getElementById('item').style.display = 'none';
          document.getElementById('pet').style.display = 'none';
          document.getElementById('serv').style.display = 'block';
        </script>";
      }
  }
  else{
    echo "<script>
      document.getElementById('item').style.display = 'none';
      document.getElementById('pet').style.display = 'block';
      document.getElementById('serv').style.display = 'none';
    </script>";
  }
  ?>
</html>
