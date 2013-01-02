<div class="container-inside">
    <div id="slides_wrap">
    <div id="slides">
    <div class="slidearea slides_container">     
        <div>
            <div class="slide_image_wrap">
              <a href="#" title="Campaign Slide">
                <img width="1040" height="330" src="<?php echo base_url() ?>images/splash/banner.png" alt="Campaign Slide" />
              </a>
            </div>
        </div>
         <div>
            <div class="slide_image_wrap">
              <a href="#" title="Campaign Slide">
                <img width="1040" height="330" src="<?php echo base_url() ?>images/splash/banner2.png" alt="Campaign Slide" />
              </a>
            </div>
        </div>
         <div>
            <div class="slide_image_wrap">
              <a href="#" title="Campaign Slide">
                <img width="1040" height="330" src="<?php echo base_url() ?>images/splash/banner3.png" alt="Campaign Slide" />
              </a>
            </div>
        </div>
         <div>
            <div class="slide_image_wrap">
              <a href="#" title="Campaign Slide">
                <img width="1040" height="330" src="<?php echo base_url() ?>images/splash/banner4.png" alt="Campaign Slide" />
              </a>
              <div class="slide_text_overlay">
                  This slide has a little bit of text overlaid on the bottom.
              </div>
            </div>
        </div>

          
    </div>
  </div>

 <div id="slide_widget" class="campaign_email_slide">
    <div id="slide_widget_inner">
      <div class="widget campaign_email_capture_wrap">
        <h4>JOIN THE HON BISHOP</h4>
        <!--Check If user is logged In (Manually) -->
            <?php if(isset($firstname)&&isset($lastname)){ ?>
              <span id="account_icon"></span>
              <p class="account_title"> <?php echo $firstname.' '. $lastname; ?></p>
              <a href="<?php echo base_url()?>index.php/common/map_ view"> View Account </a>
              <a href="<?php echo base_url()?>index.php/account/logout"> Log-Out </a>
              
          <!--Check If user is logged In (Facebook) -->
              <?php }else if(isset($fb_data)){ ?>
                <span id="fb_image"><img src="https://graph.facebook.com/<?php echo $fb_data['uid']; ?>/picture" alt="" class="pic" /></span>
                <p class="account_title"><?php echo $fb_data['me']['name']; ?></p>
                <a href="<?php echo $fb_data['logoutUrl'];?>">logout</a>
                <a href="<?php echo base_url()?>index.php/common/map_view"> View Account </a>
         
          <!--User not Logged In; Display First Login State-->
            <?php }else{ ?>
            <span><a href="<?php echo base_url().'index.php/home/facebook_request'?>"><img  src="<?php echo base_url()?>images/login/fb_login.png" alt="Join using Facebook"/></a></span>
            <span><a href="<?php echo base_url().'index.php/account/register'?>"><img  src="<?php echo base_url() ?>images/login/tw_login.png" alt="Join using Twitter"/></a></span>
             <?php } ?>
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
    </div>
  </div>
  <div class="clear"></div>
</div>

  <!--
  <div id="home_widgets">
    <div id="home_widget_wrap">
      <div class="widget">
        <div><img  src="<?php echo base_url() ?>images/slider/campaign-attend.png" alt="VIEW EVENTS" /><a href="<?php echo site_url('events')?>" class="button button_gray">VIEW EVENTS</a></div>
        
      </div>
      <div class="widget">
       
        <div><img  src="<?php echo base_url() ?>images/slider/campaign-donate.png" alt="DONATE" /><a href="<?php echo site_url('project/campaign')?>" class="button button_gray">DONATE</a></div>
        
      </div>
      <div class="widget">
        
        <div><img  src="<?php echo base_url() ?>images/slider/campaign-volunteer.png" alt="VOLUNTEER" /> <a href="project/volunteer" class="button button_gray">VOLUNTEER</a></div>
       
      </div>
      <div class="clear"></div>
    </div>
  </div> -->
  
<div class="posts-wrap">
  <div id="home_latest_posts">
    <h3>Latest Posts</h3>
    <div class="single_latest left">
           <?php if(isset($posts)) : foreach ($posts as $r) : ?>
              <div id='respond'>
              <header>
              <h3><?php echo $r->post_title;?></h3>
              <?php if ($r->total_comment == NULL){
                $count=0;
              }
              else{
                $count=$r->total_comment;
              }?>
              <p>Published: <time pubdate datetime="2009-10-09"><?php echo mdate("%h:%i %a, %d.%m.%Y",mysql_to_unix($r->date_added));?></time>
              <a href="<?php echo site_url() ?>/comment/commpost/<?php echo $r->post_id; ?>">(<?php echo $count;?>)Comment</a>
              </header>
              <?php $im=$r->image; ?>
              <?php if($im != NULL) : ?> 
              <a href="<?php echo base_url()?>images/upload/<?php echo $im; ?>"><img src="<?php echo base_url()?>images/upload/<?php echo $im; ?>" height="300" width="500" /></a><br>
              <?php else : ?>
              <?php endif ; ?>
              <br clear="all" />
              <p>
              <?php echo substr($r->description, 0, 100);echo "...";?>
            </p>
              <a class="button button_gray" href="<?php echo site_url() ?>/comment/commpost/<?php echo $r->post_id; ?>">Read more →</a>
              </div>
        <?php endforeach;  ?>
        <?php else :?>
        <?php endif ; ?>
            <a class="button right" href="<?php echo site_url() ?>/post">View More Posts</a>
    </div>
    <div class="clear"></div>
  </div>
</div>
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
   </div><!-- end div#main_wrap, begins in header.php -->
    