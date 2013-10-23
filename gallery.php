
    <link rel="stylesheet" type="text/css" href="js/gallery/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="js/gallery/css/style.css" />
    <link rel="stylesheet" type="text/css" href="js/gallery/css/elastislide.css" />
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
      <div class="rg-image-wrapper">
        {{if itemsCount > 1}}
          <div class="rg-image-nav">
            <a href="#" class="rg-image-nav-prev">Previous Image</a>
            <a href="#" class="rg-image-nav-next">Next Image</a>
          </div>
        {{/if}}
        <div class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
          <div class="rg-caption" style="display:none;">
            <p></p>
          </div>
        </div>
      </div>
    </script>
    <script type="text/javascript" src="js/gallery/gallery.js"></script>

   
    <div id="gallery-container">
		<div id="albums-section">
			<div id="gallery-title">
				<img src="img/gallery/gallery-decoration_left.png"></img>
				GALLERY
				<img src="img/gallery/gallery-decoration_right.png"></img>
			</div>
			<ul>
				<li>
					<div id="album-title"><a href="#" onclick="loadAlbum(1,3);">Album 1 Title</a></div>
					<div id="album-date"><a href="#" onclick="loadAlbum(1,3);">00/00/00</a></div>
				</li>
				<li>
					<div id="album-title"><a href="#" onclick="loadAlbum(1,4);">Album 2 Title</a></div>
					<div id="album-date"><a href="#" onclick="loadAlbum(1,4);">00/00/00</a></div>
				</li>
				<li>
					<div id="album-title"><a href="#" onclick="loadAlbum(1,5);">Album 3 Title</a></div>
					<div id="album-date"><a href="#" onclick="loadAlbum(1,5);">00/00/00</a></div>
				</li>
				<li>
					<div id="album-title"><a href="#" onclick="loadAlbum(1,6);">Album 4 Title</a></div>
					<div id="album-date"><a href="#" onclick="loadAlbum(1,6);">00/00/00</a></div>
				</li>
				<li>
					<div id="album-title"><a href="#" onclick="loadAlbum(1,7);">Album 5 Title</a></div>
					<div id="album-date"><a href="#" onclick="loadAlbum(1,7);">00/00/00</a></div>
				</li>
			</ul>
    	</div>
		<div id="photos-section">

			<div class="content">
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<!--load album-->
								<ul id="phothoscomplete-album">
									<li><a href="#"><img src="img/gallery/album1/small_gallery_1.jpg" data-large="img/gallery/album1/big_gallery_1.jpg" alt="" data-description="" /></a></li>
									<li><a href="#"><img src="img/gallery/album1/small_gallery_2.jpg" data-large="img/gallery/album1/big_gallery_2.jpg" alt="" data-description="" /></a></li>
									<li><a href="#"><img src="img/gallery/album1/small_gallery_3.jpg" data-large="img/gallery/album1/big_gallery_3.jpg" alt="" data-description="" /></a></li>
									<li><a href="#"><img src="img/gallery/album1/small_gallery_4.jpg" data-large="img/gallery/album1/big_gallery_4.jpg" alt="" data-description="" /></a></li>
									<li><a href="#"><img src="img/gallery/album1/small_gallery_5.jpg" data-large="img/gallery/album1/big_gallery_5.jpg" alt="" data-description="" /></a></li>
									<li><a href="#"><img src="img/gallery/album1/small_gallery_6.jpg" data-large="img/gallery/album1/big_gallery_6.jpg" alt="" data-description="" /></a></li>
									<li><a href="#"><img src="img/gallery/album1/small_gallery_7.jpg" data-large="img/gallery/album1/big_gallery_7.jpg" alt="" data-description="" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!-- content -->
    	</div><!-- photos-section -->
    </div><!-- gallery-container -->