<div class="container">
  <div class="posts-wrap" id="page">
      <article>
          <div class="posts">
           <?php if(isset($posts)) : foreach ($posts as $r) : ?>
              <header>
              <a href="<?php echo site_url() ?>/comment/commpost/<?php echo $r->post_id; ?>"><h3><?php echo $r->post_title;?></h3></a>
              <p>Published: <time pubdate datetime="2009-10-09"><?php echo mdate("%h:%i %a, %d.%m.%Y",mysql_to_unix($r->date_added));?></time>
              </header>
              <?php $im=$r->image; ?>
              <?php if($im != NULL) : ?> 
              <a href="<?php echo base_url()?>images/upload/<?php echo $im; ?>"><img src="<?php echo base_url()?>images/upload/<?php echo $im; ?>" height="300" width="500" /></a><br>
              <?php else : ?>
              <br clear="all" />
              <?php endif ; ?>
              <br clear="all" />
              <p>
              <?php echo $r->description;?>
            </p>
            <?php endforeach;  ?>
            <?php else :?>
            <?php endif ; ?>
              <?php if($total_comments > 1)
                {echo $total_comments.' comments';}
                else if($total_comments === 1)
                {echo $total_comments.' comment';}
                else{ echo 'No comment yet!';}?>
                <hr>
            </div>
           <?php if(isset($comments)): foreach($comments as $row):?>
            <strong>
            <?php echo $row->username;?></strong> says on <span style="font-size:10px;"><?php echo mdate("%h:%i %a, %d.%m.%Y",mysql_to_unix($row->date_added));?></span>
            <p><?php echo $row->comment;?></p>
            <?php endforeach; else: ?>
            <h3>No comment yet!</h3>
            <?php endif;?> 
            <section>
            <h3>Add a Comment</h3>
            <span class="label label-important">You Must be Logged in to Comment</span> 
            <?php if(validation_errors()){echo validation_errors('<p class="error">','</p>');} ?>        
                
            <?php echo form_open('comment/add_post_comm');?>
             <label for='desc'>Comment : </label>
              <input type="hidden" name="post_id" value="<?php echo $post_id;?>" />
              <input type="hidden" name="category" value="post" />
              <textarea rows="3" id="textarea" name="comment"></textarea>
           <p>
            <input type="submit" name="submit" id="submit" value="Add Comment" />
          </p>
            <?php echo form_close(); ?>
          </section>
        </article>
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