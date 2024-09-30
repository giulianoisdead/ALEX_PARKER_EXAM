<div id="main">
      <div class="container">
        <div class="row">
          <!-- About Me (Left Sidebar) Start -->
          <?php include_once '../app/views/templates/partials/_leftsidebar.php'; ?>

          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- ADD A POST -->
                  <?php include_once '../app/views/templates/partials/_add.php'; ?>
                  <!-- ADD A POST END -->

                  <!-- Blog Post Start -->
                  <?php include_once '../app/views/templates/partials/_post.php'; ?>
                  <!-- Blog Post End -->
  
                  <!-- Pagination -->
                  <?php include_once '../app/views/templates/partials/_pagination.php'; ?>
                    <!-- Pagination End -->

                </div>
              </div>
            </div>

            <!-- Footer Start -->
            <?php include_once '../app/views/templates/partials/_footer.php'; ?>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>