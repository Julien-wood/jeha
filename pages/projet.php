
<br>
<section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                  <?php 
                    $projects = get_projects();
                    foreach($projects as $project){
                    ?>
                    <div class="col-lg-4 templatemo-item-col all soon">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>£<?=$project->objectif ?></span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/imgs/<?=$project->image ?>" alt="<?=$project->nom ?>"></a>
                        </div>
                        <div class="down-content">
                          <div class="date">
                            <h6>Nov <span>12</span></h6>
                          </div>
                          <a href="meeting-details.html"><h4><?=$project->nom ?></h4></a>
                          <p><?=substr(nl2br($project->description), 0,150);?>...</p>
                          <div class="button left">
                                    <div class="left"><a href="<?=$project->url ?>" target="_blank" rel="noopener noreferrer"><h5>Contribuer</h5></a></div>
                                    <div class="right"><a href=""><h5>Détaille</h5></a></div>
                                </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                  ?>
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>