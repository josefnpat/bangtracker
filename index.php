<?php include("inc/header.php");
require("config.php");
include_once("md/markdown.php");
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a dui ultrices sem condimentum faucibus. Vestibulum porta ultricies est vitae facilisis. In dapibus nunc quis felis tristique vitae volutpat neque auctor. Mauris odio sapien, placerat tincidunt dapibus eu, pulvinar non urna. Suspendisse sit amet mattis est. Mauris cursus, elit dapibus malesuada placerat, erat nibh pretium lorem, eu pulvinar mauris massa vel nulla. Pellentesque faucibus magna ac enim pretium feugiat. Morbi vel lacus risus. Integer ultricies nulla eget justo viverra vel suscipit orci facilisis. Integer ultrices commodo risus in ultrices. Vivamus consequat, metus id fringilla commodo, ipsum nibh iaculis ipsum, at posuere lacus ante et metus. Ut a lacinia orci. Nunc et nulla sem, in feugiat odio.";
$times = array("s","min","h","d","mo","yr");
if($_GET['ticket']){
  include("inc/ticket.php");
  include("inc/new.php");
} elseif($_GET['action']=="new") { 
  include("inc/new.php");
} else {
  include("inc/browse.php");
}
$parser = new Markdown_Parser; // or MarkdownExtra_Parser
$parser->no_markup = true;
$text = file_get_contents("readme.md");
$parser->transform($text);
?>
<?php include("inc/footer.php"); ?>
