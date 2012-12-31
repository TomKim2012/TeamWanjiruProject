<div class="container">
  <div class="posts-wrap" id="page">
    <div class="btn-group">
         <a href="<?php echo base_url() ?>index.php/admin/post/add" class="btn btn-success"><i class="icon-plus-sign"></i> Add Posts</a>
        </div>
    <div class="posts">
     <?php echo form_open('admin/post/delete'); ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <td width="1" style="text-align: center;"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></td>
              <td class="left"><b>Post Title</b></td>
              <td class="left"><b>Description<b></td>
              <td class="right"><b>Action<b></td>
              <td class="right"><b>Action<b></td>
            </tr>
          </thead>
          <tbody>
             <?php foreach ($posts as $c) : ?>
            <tr>
              <td style="text-align: center;">
              <input type="checkbox" name="selected" value="<?php echo $c->post_id; ?>" /></td>
              <td class="left"><?php echo $c->post_title; ?></td>
              <td class="left"><?php echo $c->description; ?></td>
              <td class="right"><a onclick="location = '<?php echo base_url() ?>index.php/admin/post/edit/<?php echo $c->post_id; ?>'" class="btn btn-info" ><i class="icon-edit"></i>Edit</a></td>
              <td class="right"><a onclick="location = '<?php echo base_url() ?>index.php/admin/post/delete/<?php echo $c->post_id; ?>'" class="btn btn-danger" ><i class="icon-trash icon-white"></i>Delete</a></td>
            </tr>
                    <?php endforeach;  ?>
          </tbody>
        </table>
      <?php echo form_close(); ?>
        </div>
      </div>
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