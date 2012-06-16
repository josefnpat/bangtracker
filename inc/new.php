      <div class="row">
        <div class="span6">
          <h2><?php echo ($_GET['ticket'])?("Reply"):("New");?> Ticket</h2>
          <form class="well">
            <fieldset>
              <div class="control-group">
                <div class="controls">
                  <label class="control-label" for="textarea">Tickets are parsed in <a href="http://daringfireball.net/projects/markdown/" target="_blank">markdown</a>. HTML is disabled.</label>
                  <textarea style="width: 100%" id="textarea" rows="8"><?php if($_GET['ticket']){ echo "!reply:".$_GET['ticket']."\n"; } ?></textarea>
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
