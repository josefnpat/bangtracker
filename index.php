<?php
require("config.php");
include_once("md/markdown.php");

$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a dui ultrices sem condimentum faucibus. Vestibulum porta ultricies est vitae facilisis. In dapibus nunc quis felis tristique vitae volutpat neque auctor. Mauris odio sapien, placerat tincidunt dapibus eu, pulvinar non urna. Suspendisse sit amet mattis est. Mauris cursus, elit dapibus malesuada placerat, erat nibh pretium lorem, eu pulvinar mauris massa vel nulla. Pellentesque faucibus magna ac enim pretium feugiat. Morbi vel lacus risus. Integer ultricies nulla eget justo viverra vel suscipit orci facilisis. Integer ultrices commodo risus in ultrices. Vivamus consequat, metus id fringilla commodo, ipsum nibh iaculis ipsum, at posuere lacus ante et metus. Ut a lacinia orci. Nunc et nulla sem, in feugiat odio.";

$times = array("s","min","h","d","mo","yr");
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BangTracker &ndash; <?php echo $project_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">BangTracker</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="#browse">Browse</a></li>
              <li><a href="#new">New</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <a name="browse"></a>
      <h2><?php echo $project_name; ?></h2>
      <div class="row">
        <div class="span2">
          <h3>Filters</h3>
          <div class="btn-group">
            <a href="#open" class="btn btn-primary">Open</a>
            <a href="#close" class="btn">Closed</a>
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
<?php
  for($i=1;$i<20;$i++){
?>
              <tr> 
                <td><span class="badge"><?php echo $i; ?></span></td>
                <td><a href="#"><?php $temp = rand(60,100); echo substr($lorem,rand(1,strlen($lorem)-$temp),$temp); ?></a></td>
                <td>
<?php if(rand(0,1)==0){ ?>
                  <span class="label label-success"><i class="icon-eye-open icon-white"></i> Open</span>
<?php } else { ?>
                  <span class="label label-inverse"><i class="icon-eye-close icon-white"></i> Closed</span>
<?php } ?>
                </td>
                <td><i class="icon-inbox"></i> <?php echo rand(0,10); ?></td>
                <td><i class="icon-time"></i> <?php echo rand(1,10)." ".$times[rand(0,5)]; ?></td>
              </tr>
<?php
}
?>
            </tbody>
          </table>
        </div>
      </div>
      <hr />
      <a name="new"></a>
      <div class="row">
        <div class="span6">
          <h2>New Ticket</h2>
          <form class="well">
            <fieldset>
              <div class="control-group">
                <div class="controls">
                  <label class="control-label" for="textarea">Tickets are parsed in <a href="http://daringfireball.net/projects/markdown/">markdown</a>. HTML is disabled.</label>
                  <textarea class="input-xxlarge" id="textarea" rows="8"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit Ticket</button>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="span6">
          <h2>Help</h2>
          <div class="well">
            <p><strong>A bang is an `!` before a command that allows you to add additional data to a ticket.</strong></p>
            <p>Bangs availible to you:</p>
            <ul>
              <li><p>Reply to a specific ticket id &rarr; <code>!reply:[id]</code></p><p>e.g.: <code>!reply:12</code></p></li>
              <li><p>Identify yourself with a keyphrase &rarr; <code>!identify:[keyphrase]</code></p><p>e.g.: <code>!identify:m4bez7HE</code></p></li>
              <li><p>Set the current ticket as open (default) or closed &rarr; <code>!set:[open|close]</code></p><p>e.g.: <code>!set:close</code></p></li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
<?php
$parser = new Markdown_Parser; // or MarkdownExtra_Parser
$parser->no_markup = true;
$text = file_get_contents("readme.md");
$parser->transform($text);
?>
      <footer>
        <p><a href="http://josefnpat.com">&copy; josefnpat 2012</a></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
