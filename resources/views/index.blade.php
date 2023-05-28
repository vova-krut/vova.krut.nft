<!doctype html>

<html>

<head>
    <title>
        DAT
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
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

	<div class="container" id="start-container">
		<h3>
			Create, explore, & collect digital art NFTs.
		</h3>
		<h1>
			The new creative economy.
		</h1>
		<div class="button">
			Start your search
		</div>
	</div>

	<div class="container" id="auction-container">
		<div id="auctio-photo">
			<img src="src/01.png" alt="">
		</div>

		<div id="auction-content">
			<h1>
				{{$auction->nft_name}}
			</h1>

			<div id="auction-info">
				<div class="lot-info" id="lot-author">
					<img src="{{$auction->creator->user_avatar}}" alt="">
					<div id="lot-author-text">
						<span>
							Creator
						</span>
						<h4>
							{{$auction->creator->user_name}}
						</h4>
					</div>
				</div>
				<div class="lot-info" id="lot-price">
					<img src="src/idk.png" alt="">
					<div id="lot-price-text">
						<span>
							Instant price
						</span>
						<h4>
							{{$auction->instant_price}} ETH
						</h4>
					</div>
				</div>
			</div>

			<div id="auction-bid">
				<div id="bid-current">
					<h3>
						Current Bid
					</h3>
					<h1>
						{{$auction->current_bid}} ETH
					</h1>
					<h2>
						${{$auction->current_bid*3618.36}}
					</h2>
				</div>
<?php
$date1 = new DateTime($auction->date);
$date2 = new DateTime("now");

?>
				<div id="bid-time">
					<h3 id="bid-time-title">
						Auction ending in
					</h3>
					<div id="bid-end-date">
						<div>
							<h2>
								{{$date1->diff($date2)->days}}
							</h2>
							<h3>
								days
							</h3>
						</div>
					</div>
				</div>
			</div>

			<div id="auction-buttons">
				<div class="button-blue">
					Place a bid
				</div>
				<div class="button">
					View item
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="feed-container">
		<div id="feed-left">
			<div id="feed-big">
				<img src="{{asset($auction->nft_image)}}" alt="">
				<div id="big-feed-item-desc">
					<div id="big-feed-item-title">
						<img src="{{asset($auction->creator->user_avatar)}}" alt="">
						<div id="big-feed-item-title-text">
							<h2>
								The future of ETH®
							</h2>
							<span>
								18 in stock
							</span>
						</div>
					</div>
					<div id="big-feed-item-bid-info">
						<span>
							Highest bid
						</span>
						<div class="price-eth">
							{{$auction->current_bid}}
						</div>
					</div>
				</div>
			</div>
			<div id="feed-smalls">
				@foreach($nfts->slice(1, 4) as $nft)
				<div class="small-item">
					<img src="{{$nft->nft_image}}" alt="">
					<div class="small-item-text">
						<h4>
							{{$nft->nft_name}}
						</h4>
						<div class="small-item-info">
							<img src="{{asset($nft->creator->user_avatar)}}" alt="">

							<div class="price-eth">
							{{$nft->instant_price}} ETH
							</div>
						</div>

						<div class="button">
							Place a bid
						</div>
					</div>
				</div>
				@endforeach
			</div>

		</div>

		<div id="feed-right">
			<div id="latest-uplods-creators">
				@foreach($creators->slice(0, 5) as $creator) 
				@if(!$creator->created_nfts->isEmpty())
					<div class="creator-item">
						<img src="{{asset($creator->user_avatar)}}" alt="">
						<div class="creator-item-title">
							<h3>
								{{$creator->user_name}}
							</h3>
							<h3>
								{{$creator->user_money}} ETH
							</h3>
						</div>
					</div>
				@endif
				@endforeach
			</div>
			<div class="button" id="feed-button">
				Discover more
			</div>
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