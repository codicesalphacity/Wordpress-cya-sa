    <?php get_header(); ?>
	  <div class="backgroundTop">
	  
	  </div>
      <!-- Main component for a primary marketing message or call to action -->
	  <section class="contentPage">
        <div class="row">
            <div class="col-xs-12 col-md-6">
        			<?php if(have_posts() ): while(have_posts() ): the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; endif; ?>
            </div>
            <div class="col-xs-12 col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="img/automatiza.jpg" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                      <div class="item">
                        <img src="img/energia.jpg" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                      <div class="item">
                        <img src="img/telecomunicaciones.jpg" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
					            <div class="item">
                        <img src="img/syc.jpg" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="visible-lg banner">
          <?php if (dynamic_sidebar('principal-medio')); {  } ?>
        </div>
	   </section>
     <section class="lineas">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="cuadrosBlancos">
              <?php if (dynamic_sidebar('principal-izquierda')); {  } ?>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="cuadrosBlancos">
              <?php if (dynamic_sidebar('principal-centro')); {  } ?>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="cuadrosBlancos">
              <?php if (dynamic_sidebar('principal-derecha')); {  } ?>
            </div>
          </div>
        </div>
        <hr>
     </section>
	 <section class="ultimosPost">
		<div class="row">
			<?php if (dynamic_sidebar('principal-abajo')); {  } ?>
		</div>
	 </section>
	 <?php get_footer(); ?>