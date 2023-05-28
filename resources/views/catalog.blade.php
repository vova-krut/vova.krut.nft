<!doctype html>

<html>

<head>
    <title>
        DAT
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
</head>

<body>
    <header>
		<div class="container" id="header-container">
			<div id="header-left">
				<div id="header-logo">
					<a href="/"><img src="src/logo.png" alt=""></a>
				</div>

				<div id="header-links">
					<h3>
						<a href="/catalog">Discover</a> 
					</h3>
					<h3>
						How it work
					</h3>
				</div>
			</div>
			<div id="header-right">
				<div id="header-search-bar">
					<span>
						Search
					</span>

					<img src="src/search.png" alt="">
				</div>
				<img src="src/bell.png" alt="">
				<div class="button-blue" id="header-upload">
					Upload
				</div>

				<div class="button"  id="header-collect">
					Connect Wallet
				</div>
				
			</div>

			<img id="header-burger" src="src/burger icon.png" alt="">
		</div>
	</header>

	<div class="container" id="catalog-container">
		<div id="filters">
			<div class="filter-element">
				<h5>
					Likes
				</h5>

				<div class="button filter-button">
					<span>
						Most liked
					</span>
					<img src="src/arrow-down.png" alt="">
				</div>
			</div>
			
			<div class="filter-element">
				<h5>
					Open
				</h5>

				<div class="button filter-button">
					<span>
						Verified only
					</span>
					<img src="src/arrow-down.png" alt="">
				</div>

				<div id="filter-colors">
					<div class="filter-color">
						<div class="color-circle" id="all-colors">
						</div>

						<span>
							All colors
						</span>
					</div>
					<div class="filter-color">
						<div class="color-circle">
						</div>

						<span>
							Black
						</span>
					</div>
					<div class="filter-color">
						<div class="color-circle">
						</div>

						<span>
							Green
						</span>
					</div>
					<div class="filter-color">
						<div class="color-circle">
						</div>

						<span>
							Pink
						</span>
					</div>
					<div class="filter-color">
						<div class="color-circle">
						</div>

						<span>
							Purple
						</span>
					</div>
				</div>
			</div>
			<div class="filter-element">
				<h5>
					Creator
				</h5>

				<div class="button filter-button">
					<span>
						Verified only
					</span>
					<img src="src/arrow-down.png" alt="">
				</div>
			</div>
		</div>

		<div id="catalog-items">
			@foreach($nfts as $nft)
			<div class="catalog-item">
				<a href="/nft/{{$nft->id}}"><img src="{{asset($nft->nft_image)}}" alt=""></a>
				

				<div class="item-info">
					<div class="info-upper">
						<div class="item-title-price">
							<h3>
								{{$nft->nft_name}}
							</h3>

							<div class="price-eth">
								{{$nft->instant_price}}
							</div>
						</div>
						<div class="item-avatars-stock">
							<img src="{{asset($nft->creator->user_avatar)}}" alt="">
							<span>
								3 in stock
							</span>
						</div>
					</div>

					<div class="highest-bid">
						<img src="{{asset('src/Line.png')}}" alt="">
						<div class="highest-bid-text">
							<span>
								Highest bid
							</span>
							<h4>
								{{$nft->current_bid}}
							</h4>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<footer>
		<div class="container" id="footer-container">
			<div id="footer-cols">
				<div class="footer-col">
					<img src="src/logo.png" alt="">
					<h2>
						The New Creative Economy.
					</h2>
				</div>
				<div class="footer-col">
					<h3>
						Crypter.
					</h3>
					<span>
						Discover
					</span>
					<span>
						Connect wallet
					</span>
					<span>
						Create item
					</span>
				</div>
				<div class="footer-col">
					<h3>
						Info
					</h3>
					<span>
						Download
					</span>
					<span>
						Demos
					</span>
					<span>
						Support
					</span>
				</div>
			</div>
			<div id="footer-lower">
				<span>
					Copyright © 2021 UI8 LLC. All rights reserved
				</span>
			</div>
		</div>
	</footer>

</body>


</html>