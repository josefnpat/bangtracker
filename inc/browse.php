      <h2><?php echo $project_name; ?></h2>
      <div class="row">
        <div class="span2">
          <h3>Filters</h3>
          <h4>Status</h4>
          <div class="btn-group"><?php
if($_GET['set'] == "open"){
?>
            <a href="./" class="btn">All</a>
            <a href="?set=open" class="btn btn-primary">Open</a>
            <a href="?set=close" class="btn">Closed</a>
<?php
} elseif($_GET['set'] == "close"){
?>
            <a href="./" class="btn">All</a>
            <a href="?set=open" class="btn">Open</a>
            <a href="?set=close" class="btn btn-primary">Closed</a>
<?php
} else {
?>
            <a href="./" class="btn btn-primary">All</a>
            <a href="?set=open" class="btn">Open</a>
            <a href="?set=close" class="btn">Closed</a>
<?php
}
?>
          </div>
        </div>
        <div class="span10">
          <h3>Tickets</h3>
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th></th>
                <th>Reply</th>
                <th>Age</th>
              </tr>
            </thead>
            <tbody>
<?php for($i=1;$i<=rand(15,25);$i++){ ?>
              <tr> 
                <td><span class="badge"><?php echo $i; ?></span></td>
                <td><a href="?ticket=<?php echo $i; ?>"><?php $temp = rand(60,100); echo substr($lorem,rand(1,strlen($lorem)-$temp),$temp); ?></a></td>
                <td>
<?php
if($_GET['set'] == "open"){
  $num = 1;
} elseif($_GET['set'] == "close"){
  $num = 0;
} else {
  $num = rand(0,1);
}
if($num){ ?>
                  <span class="label label-success"><i class="icon-eye-open icon-white"></i> Open</span>
<?php } else { ?>
                  <span class="label label-inverse"><i class="icon-eye-close icon-white"></i> Closed</span>
<?php } ?>
                </td>
                <td><i class="icon-inbox"></i> <?php echo rand(0,10); ?></td>
                <td><i class="icon-time"></i> <?php echo rand(1,10)." ".$times[rand(0,5)]; ?></td>
              </tr>
<?php } ?>
            </tbody>
          </table>
        </div>
      </div>
