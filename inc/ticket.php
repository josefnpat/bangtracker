      <h2>Specific Ticket</h2>
      <div class="alert alert-success">New blah</div>
<?php for($i=0;$i<rand(2,4);$i++){ ?>
      <h3>Ticket Name <?php
      if(rand(0,1)){ ?>
      <span class="label label-important"><i class="icon-user icon-white"></i> josefnpat</span>
      <?php
      }
      ?></h3>
      <div class="well">
        <?php
if(rand(0,1)){
  echo "<span class=\"label label-info\"><i class=\"icon-info-sign icon-white\"></i> Status Change</span> &rarr; ";
  if(rand(0,1)){
    echo "<span class=\"label label-success\"><i class=\"icon-eye-open icon-white\"></i> Open</span>";
  } else {
    echo "<span class=\"label label-inverse\"><i class=\"icon-eye-open icon-white\"></i> Closed</span>";
  }
}
        ?>
        <span style="float: right;">
        <span class="badge"><?php echo $_GET['ticket']+$i; ?></span>
        <span class="label"><i class="icon-time icon-white"></i> <?php echo date("r"); ?></span>
        </span>
        <hr />
        <?php echo $lorem; ?>
      </div>
<?php } ?>
