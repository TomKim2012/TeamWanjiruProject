<div class="container">
  <div class="posts-wrap" id="page">
    <div class="posts">
      <article>
           <?php if(isset($posts)) : foreach ($posts as $r) : ?>
              <header>
              <h3><?php echo $r->post_title;?></h3>
              <p>Published: <time pubdate datetime="2009-10-09"><?php echo mdate("%h:%i %a, %d.%m.%Y",mysql_to_unix($r->date_added));?></time>
              <a href="<?php echo site_url() ?>/comment/commpost/<?php echo $r->post_id; ?>">(<?php echo $r->total_comment;?>)Comment</a>
              </header>
              <?php $im=$r->image; ?>
              <?php if($im != NULL) : ?> 
              <a href="<?php echo base_url()?>images/upload/<?php echo $im; ?>"><img src="<?php echo base_url()?>images/upload/<?php echo $im; ?>" height="300" width="500" /></a><br>
              <?php else : ?>
              <br clear="all" />
              <?php endif ; ?>
              <br clear="all" />
              <p>
              <?php echo substr($r->description, 0, 100);echo "...";?>
            </p>
              <a class="button button_gray" href="<?php echo site_url() ?>/comment/commpost/<?php echo $r->post_id; ?>">Read more →</a>
        <?php endforeach;  ?>
        <?php else :?>
        <?php endif ; ?>
           </article> 
    </div>
    <div class="clear"></div></div>
<div id="sidebar">
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
      <span></span>
    </div>
    <div class="clear"></div>
  </div>
  </div>          <div class="clear"></div>
        </div><!-- end div.container, begins in header.php -->
      </div><!-- end div.wrapper, begins in header.php -->
    </div><!-- end div#