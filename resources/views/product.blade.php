<!doctype html>

<html>

<head>
    <title>
        DAT
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
</head>

<body>
	<header>
		<div class="container" id="header-container">
			<div id="header-left">
				<div id="header-logo">
					<a href="/"><img src="{{asset('src/logo.png')}}" alt=""></a>
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

					<img src="{{asset('src/search.png')}}" alt="">
				</div>
				<img src="{{asset('src/bell.png')}}" alt="">
				<div class="button-blue" id="header-upload">
					Upload
				</div>

				<div class="button"  id="header-collect">
					Connect Wallet
				</div>
				
			</div>

			<img id="header-burger" src="{{asset('src/burger icon.png')}}" alt="">
		</div>
	</header>
	<div class="container" id="product-container">
		<div id="product-img">
			<img src="{{asset($nft->nft_image)}}" alt="">
		</div>

		<div id="product-info">
			<h1>
				{{$nft->nft_name}}
			</h1>
			<div id="product-price">
				<div class="price-eth">
					{{$nft->instant_price}} NFT
				</div>

				<div id="product-price-usd">
					${{$nft->instant_price*3618.36}}
				</div>
			</div>

			<p>
				This NFT Card will give you Access to Special Airdrops. To learn more about UI8 please visit <a href="">https://ui8.net</a> 
			</p>

			<div id="product-owners">
				<div class="product-dude" id="product-owner">
					<img src="{{asset($nft->owner->user_avatar)}}" alt="">
					<div class="product-dude-title">
						<span>
							Owner
						</span>
						<h4>
							{{$nft->owner->user_name}}
						</h4>
					</div>
				</div>
				<div class="product-dude" id="product-creator">
					<img src="{{asset($nft->creator->user_avatar)}}" alt="">
					<div class="product-dude-title">
						<span>
							Creator
						</span>
						<h4>
							{{$nft->creator->user_name}}
						</h4>
					</div>

				</div>
			</div>


			<div id="product-bid">
				<div id="product-bid-info">
					<img src="{{asset('src/dudiki/1.png')}}" alt="">
					<div id="product-bid-info-text">
						<div id="product-bider">
							<span>
								Highest bid by
							</span>
							<h3>
								Kohaku Tora
							</h3>
						</div>

						<div id="product-bid-value">
							<h3>
								{{$nft->current_bid}} ETH
							</h3>
							<span>${{$nft->current_bid * 3618}}</span>
						</div>
					</div>
				</div>

				<div id="product-bid-buttons">
					<div class="button-blue">
						Purchase now
					</div>
					<div class="button">
						Place a bid
					</div>
				</div>
			</div>
		</div>	
	</div>

	<footer>
		<div class="container" id="footer-container">
			<div id="footer-cols">
				<div class="footer-col">
					<img src="{{asset('src/logo.png')}}" alt="">
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