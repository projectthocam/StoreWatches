@extends('client.layout.layout')
@section('title', 'product index')
@section('content')

<main id="main" class="">

	<div id="content" class="blog-wrapper blog-archive page-wrapper">
			<header class="archive-page-header">
		<div class="row">
		<div class="large-12 text-center col">
		<h1 class="page-title is-large uppercase">
			<span>Blogs</span>	</h1>
			</div>
		</div>
	</header><!-- .page-header -->
	
	<div class="row row-large row-divided ">
	
		<div class="post-sidebar large-3 col">
			<div id="secondary" class="widget-area " role="complementary">
			<aside id="search-2" class="widget widget_search"><form method="get" class="searchform" action="https://mauweb.monamedia.net/donghohaitrieu/" role="search">
			<div class="flex-row relative">
				<div class="flex-col flex-grow">
				  <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm&hellip;" />
				</div><!-- .flex-col -->
				<div class="flex-col">
					<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
						<i class="icon-search" ></i>				</button>
				</div><!-- .flex-col -->
			</div><!-- .flex-row -->
		<div class="live-search-results text-left z-top"></div>
	</form>
	</aside>		<aside id="flatsome_recent_posts-4" class="widget flatsome_recent_posts">		<span class="widget-title "><span>Bài viết mới</span></span><div class="is-divider small"></div>		<ul>		
			
			<li class="recent-blog-posts-li">
				<div class="flex-row recent-blog-posts align-top pt-half pb-half">
					<div class="flex-col mr-half">
						<div class="badge post-date  badge-circle">
								<div class="badge-inner bg-fill" style="background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-150x150.jpg); border:0;">
																</div>
						</div>
					</div><!-- .flex-col -->
					<div class="flex-col flex-grow">
						  <a href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a>
							 <span class="post_comments op-7 block is-xsmall"><a href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/#respond"></a></span>
					</div>
				</div><!-- .flex-row -->
			</li>
			
			
			<li class="recent-blog-posts-li">
				<div class="flex-row recent-blog-posts align-top pt-half pb-half">
					<div class="flex-col mr-half">
						<div class="badge post-date  badge-circle">
								<div class="badge-inner bg-fill" style="background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-150x150.jpg); border:0;">
																</div>
						</div>
					</div><!-- .flex-col -->
					<div class="flex-col flex-grow">
						  <a href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/" title="12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</a>
							 <span class="post_comments op-7 block is-xsmall"><a href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/#respond"></a></span>
					</div>
				</div><!-- .flex-row -->
			</li>
			
			
			<li class="recent-blog-posts-li">
				<div class="flex-row recent-blog-posts align-top pt-half pb-half">
					<div class="flex-col mr-half">
						<div class="badge post-date  badge-circle">
								<div class="badge-inner bg-fill" style="background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-150x150.jpg); border:0;">
																</div>
						</div>
					</div><!-- .flex-col -->
					<div class="flex-col flex-grow">
						  <a href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/" title="10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3</a>
							 <span class="post_comments op-7 block is-xsmall"><a href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/#respond"></a></span>
					</div>
				</div><!-- .flex-row -->
			</li>
			
			
			<li class="recent-blog-posts-li">
				<div class="flex-row recent-blog-posts align-top pt-half pb-half">
					<div class="flex-col mr-half">
						<div class="badge post-date  badge-circle">
								<div class="badge-inner bg-fill" style="background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-150x150.jpg); border:0;">
																</div>
						</div>
					</div><!-- .flex-col -->
					<div class="flex-col flex-grow">
						  <a href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/" title="6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá &#8220;cắt cổ&#8221;">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá &#8220;cắt cổ&#8221;</a>
							 <span class="post_comments op-7 block is-xsmall"><a href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/#respond"></a></span>
					</div>
				</div><!-- .flex-row -->
			</li>
			
			
			<li class="recent-blog-posts-li">
				<div class="flex-row recent-blog-posts align-top pt-half pb-half">
					<div class="flex-col mr-half">
						<div class="badge post-date  badge-circle">
								<div class="badge-inner bg-fill" style="background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-150x150.jpg); border:0;">
																</div>
						</div>
					</div><!-- .flex-col -->
					<div class="flex-col flex-grow">
						  <a href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/" title="Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</a>
							 <span class="post_comments op-7 block is-xsmall"><a href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/#respond"></a></span>
					</div>
				</div><!-- .flex-row -->
			</li>
					</ul>		</aside></div><!-- #secondary -->
		</div><!-- .post-sidebar -->
	
		<div class="large-9 col medium-col-first">
			
	
	
	  
		<div id="row-256483560" class="row large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-2-hover row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
	
			  <div class="col post-item" >
				<div class="col-inner">
				<a href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" class="plain">
					<div class="box box-text-bottom box-blog-post has-hover">
									<div class="box-image" >
							  <div class="image-cover" style="padding-top:56%;">
								  <img width="300" height="205" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-300x205.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-300x205.jpg 300w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-600x411.jpg 600w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4.jpg 650w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						</div>
													</div><!-- .box-image -->
								  <div class="box-text text-left" >
						<div class="box-text-inner blog-post-inner">
	
						
											<h5 class="post-title is-large ">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt ">Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là ...					</p>
											
						
						
						</div><!-- .box-text-inner -->
						</div><!-- .box-text -->
																	<div class="badge absolute top post-date badge-circle">
								<div class="badge-inner">
									<span class="post-date-day">05</span><br>
									<span class="post-date-month is-xsmall">Th7</span>
								</div>
							</div>
										</div><!-- .box -->
					</a><!-- .link -->
				</div><!-- .col-inner -->
			</div><!-- .col -->
			<div class="col post-item" >
				<div class="col-inner">
				<a href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/" class="plain">
					<div class="box box-text-bottom box-blog-post has-hover">
									<div class="box-image" >
							  <div class="image-cover" style="padding-top:56%;">
								  <img width="300" height="117" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-300x117.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-300x117.jpg 300w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-768x299.jpg 768w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-1024x398.jpg 1024w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-600x233.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						</div>
													</div><!-- .box-image -->
								  <div class="box-text text-left" >
						<div class="box-text-inner blog-post-inner">
	
						
											<h5 class="post-title is-large ">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt ">Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu chững lại trong hai ...					</p>
											
						
						
						</div><!-- .box-text-inner -->
						</div><!-- .box-text -->
																	<div class="badge absolute top post-date badge-circle">
								<div class="badge-inner">
									<span class="post-date-day">05</span><br>
									<span class="post-date-month is-xsmall">Th7</span>
								</div>
							</div>
										</div><!-- .box -->
					</a><!-- .link -->
				</div><!-- .col-inner -->
			</div><!-- .col -->
			<div class="col post-item" >
				<div class="col-inner">
				<a href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/" class="plain">
					<div class="box box-text-bottom box-blog-post has-hover">
									<div class="box-image" >
							  <div class="image-cover" style="padding-top:56%;">
								  <img width="300" height="187" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-300x187.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-300x187.jpg 300w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-600x375.jpg 600w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3.jpg 650w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						</div>
													</div><!-- .box-image -->
								  <div class="box-text text-left" >
						<div class="box-text-inner blog-post-inner">
	
						
											<h5 class="post-title is-large ">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt ">1. Audemars Piguet Được thành lập vào năm 1875 bởi Jules-Louis Audemars và Edward-Auguste Piguet, ...					</p>
											
						
						
						</div><!-- .box-text-inner -->
						</div><!-- .box-text -->
																	<div class="badge absolute top post-date badge-circle">
								<div class="badge-inner">
									<span class="post-date-day">05</span><br>
									<span class="post-date-month is-xsmall">Th7</span>
								</div>
							</div>
										</div><!-- .box -->
					</a><!-- .link -->
				</div><!-- .col-inner -->
			</div><!-- .col -->
			<div class="col post-item" >
				<div class="col-inner">
				<a href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/" class="plain">
					<div class="box box-text-bottom box-blog-post has-hover">
									<div class="box-image" >
							  <div class="image-cover" style="padding-top:56%;">
								  <img width="300" height="169" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-300x169.jpg 300w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-600x338.jpg 600w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1.jpg 640w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						</div>
													</div><!-- .box-image -->
								  <div class="box-text text-left" >
						<div class="box-text-inner blog-post-inner">
	
						
											<h5 class="post-title is-large ">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá &#8220;cắt cổ&#8221;</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt ">Bên cạnh những Cartier, IWC và Jaeger-LeCoultre, có nhiều chiếc đồng hồ thuộc các thương ...					</p>
											
						
						
						</div><!-- .box-text-inner -->
						</div><!-- .box-text -->
																	<div class="badge absolute top post-date badge-circle">
								<div class="badge-inner">
									<span class="post-date-day">05</span><br>
									<span class="post-date-month is-xsmall">Th7</span>
								</div>
							</div>
										</div><!-- .box -->
					</a><!-- .link -->
				</div><!-- .col-inner -->
			</div><!-- .col -->
			<div class="col post-item" >
				<div class="col-inner">
				<a href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/" class="plain">
					<div class="box box-text-bottom box-blog-post has-hover">
									<div class="box-image" >
							  <div class="image-cover" style="padding-top:56%;">
								  <img width="300" height="169" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-300x169.jpg 300w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-600x337.jpg 600w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1.jpg 660w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						</div>
													</div><!-- .box-image -->
								  <div class="box-text text-left" >
						<div class="box-text-inner blog-post-inner">
	
						
											<h5 class="post-title is-large ">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt ">Có tin Casio dự định trình làng smartwatch G-Shock trong vòng 2 năm tới. Chắc ...					</p>
											
						
						
						</div><!-- .box-text-inner -->
						</div><!-- .box-text -->
																	<div class="badge absolute top post-date badge-circle">
								<div class="badge-inner">
									<span class="post-date-day">05</span><br>
									<span class="post-date-month is-xsmall">Th7</span>
								</div>
							</div>
										</div><!-- .box -->
					</a><!-- .link -->
				</div><!-- .col-inner -->
			</div><!-- .col -->
	</div>
	
		</div> <!-- .large-9 -->
	
	</div><!-- .row -->
	
	</div><!-- .page-wrapper .blog-wrapper -->
	
	
	</main>

	@endsection