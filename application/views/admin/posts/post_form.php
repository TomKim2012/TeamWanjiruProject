<div class="container">
<div class="posts-wrap" id="page">
  <h2 class="post_title">Add Post</h2>
  <?php
if(isset($post_id)){
  $post_id = @field($this->url->segment(3, NULL), $this->validation->post_id, 'X');
}
?>
    <div class="error"><?php echo validation_errors('<p class="error">'); ?> </div>
    <?php echo form_open_multipart('admin/post/save'); ?>
    <?php $post_id = @field($this->validation->post_id, $post->post_id); ?>
      <input id="post_id" name="post_id" type="hidden" value="<?php echo $post_id; ?>" />
    <?php $title = @field($this->validation->post_id, $post->post_title); ?>  
      <input id="title" name="title" type="text" value="<?php echo $title; ?>" placeholder="Title" />  
    </p>
    <p>
      <?php $desc = @field($this->validation->post_id, $post->description); ?>
      <textarea name="desc" cols="30" rows="5" id="desc" value="<?php echo $desc; ?>" placeholder="Description"></textarea>
    </p>
      <label for="fileToUpload">Select Files to Upload</label><br />
      <input type="file" id="files" name="userfile" value="" multiple />
      <output id="list"></output>
      <script>
      function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {

          // Only process image files.
          if (!f.type.match('image.*')) {
            continue;
          }

          var reader = new FileReader();

          // Closure to capture the file information.
          reader.onload = (function(theFile) {
            return function(e) {
              // Render thumbnail.
              var span = document.createElement('span');
              span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                '" title="', escape(theFile.name), '"/>'].join('');
              document.getElementById('list').insertBefore(span, null);
            };
          })(f);

          // Read in the image file as a data URL.
          reader.readAsDataURL(f);
        }
      }
      document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>
    <p>
      <input type="submit" name="submit" id="submit" value="Add Post" />
    </p>
    <p>*denotes required</p>
  </form>
    <div class="clear"></div>
</div><!-- End .posts-wrap-->
<div id="sidebar">
    <div class="widget campaign_email_capture_wrap">
    <h3 class="widgettitle">Join The Movement</h3>
    <span>This form does't work, but it's styled so you can insert code from your email list manager.</span>
    <div id="campaign_email_capture">
      <form action="#" method="post">
        <div>
          <input type="text" class="campaign-email-capture-name campaign-email-capture-name-active" name="campaign-email-capture-name" title="Your Name" />
          <input type="text" class="campaign-email-capture-email campaign-email-capture-email-active" name="campaign-email-capture-email" title="Your Email" />
          <input type="submit" class="campaign-email-capture-submit" value="Subscribe To Updates" name="Submit" />
        </div>
      </form>
    </div>
  </div>
    <div class="widget"><h4 class="widgettitle">Upcoming Events</h4>
    <ul class="upcoming">
      <li class="event_list_item">
        <div class="when">
          July 23, 2012 <small>(All Day)</small>
        </div>
        <div class="event">
          <a href="page-event.html">Campaign Party Event</a>
        </div>
      </li>
      <li class="event_list_item">
        <div class="when">
          November 6, 2012 8:00 am -<br/>November 6, 2012 5:00 pm
        </div>
        <div class="event">
          <a href="page-event.html">Election Day</a>
        </div>
      </li>
    </ul>
    <div class="dig-in"><a href="page-event.html">View All Events</a></div>
  </div>
  <div class="widget_testimonial widget"><h4 class="widgettitle">Testimonial Card</h4>
    <div class="the_testimonial">I support Campaign because it keeps me working. It's time to get out and vote!</div>
    <div class="the_testimonial_author">
      <strong>- Jake Caputo</strong>
      <span><a href="http://themeforest.net/user/designcrumbs/portfolio?ref=designcrumbs" title="Design Crumbs">Design Crumbs</a></span>
    </div>
    <div class="clear"></div>
  </div>
  </div>          <div class="clear"></div>
        </div><!-- end div.container, begins in header.php -->
      </div><!-- end div.wrapper, begins in header.php -->
    </div><!-- end div#main_wrap, begins in header.php -->