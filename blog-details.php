
<style>
            
    @media (min-width: 1024px) {
    .about {
            margin-top: 150px; /* Set the background to white for desktop */
        }
    }
</style>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container about">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <!-- News Detail -->
                <div class="news-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php echo base_url; ?>images/blog/<?= $blogRow['image'] ?>" alt="" />
                        </div>
                        <div class="lower-content">
                            <h1 style="position: relative;font-size:38px;color: #243559;font-weight: 700;line-height: 1.2em;margin-top: 10px;margin-bottom: 20px;"><?= $blogRow['name'] ?></h1>
                            <p><?= $blogRow['title'] ?></p>
                            <div style="color:#243559">
                                <?= $blogRow['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h5>Search</h5>
                            </div>
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="text" id="search-box" name="search" placeholder="Search ....." required>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Popular Post Widget -->
                    <div class="sidebar-widget popular-posts">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h5>Recent posts</h5>
                            </div>
                            <?php
                                
                                $blogquery = mysqli_query($connection,"SELECT * FROM blog WHERE `delete` = 0 ORDER BY id DESC LIMIT 15");
                                
                                while($blogRow = mysqli_fetch_array($blogquery)){
                            
                            ?>
                            <article class="post comment-row">
                                <div class="text"><a href="<?php echo base_url; ?>blogs/<?= str_replace(" ","-",$blogRow['link']) ?>"><?= $blogRow['name'] ?></a></div>
                                <hr>
                            </article>
                            <?php } ?>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>


<?php

include "../include/footer.php";

?>

<script>
    $("#search-box").on('keyup', function(){
      var value = $(this).val().toLowerCase();
      $(".comment-row").each(function () {
         if ($(this).text().toLowerCase().search(value) > -1) {
            $(this).show();
            $(this).prev('.searchresult').last().show();
         } else {
            $(this).hide();
         }
      });
    })
</script>