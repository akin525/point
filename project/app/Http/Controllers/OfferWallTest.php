<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferWallTest extends Controller
{
    public function index()
    {

        print_r('{
            "code": " OK",
            "message": "OK",
            "count": "1",
            "pages": "1",
            "information ": {
                "app_name": "SP Test App",
                "appid": 157,
                "virtual_currency": "Coins",
                "country": " US",
                "language": " EN",
                "support_url": "http://iframe.fyber.com/mobile/DE/157/my_offers"
            },
            "offers": [{
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Angry Birds ",
                "offer_id": 1355442,
                "teaser": "Download and START",
                "required_actions": "Install this game and keep it for 45 days.",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://play-lh.googleusercontent.com/CWa0Bu6YaohmxGQveCuxp2BCKDWn0sXKRs0AzrzJG8RIJYC0NKovcYxs7iOlDsOGhA=s48-rw",
                    "hires": "https://play-lh.googleusercontent.com/CWa0Bu6YaohmxGQveCuxp2BCKDWn0sXKRs0AzrzJG8RIJYC0NKovcYxs7iOlDsOGhA=s48-rw"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 2700,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Brain Test",
                "offer_id": 23323,
                "teaser": "Brain Test is an addictive free tricky puzzle game with a series of tricky brain teasers. Different riddles and tricky tests will challenge your mind.",
                "required_actions": "Install this game and keep it for 45 days.",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://main-p.agmcdn.com/offers/1648480264816.gif",
                    "hires": "https://main-p.agmcdn.com/offers/1648480264816.gif"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 2700,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }, {
                "title": "Tap Fish",
                "offer_id": 13554,
                "teaser": "Download and START",
                "required_actions": "Download and START",
                "link": "http://iframe.fyber.com/mbrowser?appid=157&lpid=11387&uid=player1",
                "offer_types": [{
                    "offer_type_id": 101,
                    "readable": "Download"
                }, {
                    "offer_type_id": 112,
                    "readable": "Free"
                }],
                "thumbnail": {
                    "lowres": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg",
                    "hires": "https://static.offertoro.com/uploads/offers_image/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg"
                },
                "payout": 90,
                "time_to_payout": {
                    "amount": 1800,
                    "readable": "30 minutes"
                },
                "action_steps": [{
                    "action_id": "SIXTH_MINE",
                    "step": "Reach Mine 6 and get ur reward",
                    "payout_distribution": 1.71,
                    "rewd_amnt": 1
                }, {
                    "action_id": "EIGHTH_MINE",
                    "step": "Reach Mine 8 and get ur reward",
                    "payout_distribution": 4.27,
                    "rewd_amnt": 1
                }, {
                    "action_id": "TENTH_MINE",
                    "step": "Reach Mine 10 and get ur reward",
                    "payout_distribution": 17.09,
                    "rewd_amnt": 5
                }, {
                    "action_id": "FOURTEENTH_MINE",
                    "step": "Reach Mine 14 and get ur reward",
                    "payout_distribution": 25.64,
                    "rewd_amnt": 8
                }, {
                    "action_id": "TWENTIETH_MINE",
                    "step": "Reach Mine 20 and get ur reward",
                    "payout_distribution": 51.29,
                    "rewd_amnt": 16
                }],
                "asset_urls": [{
                    "low": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_low.mp4",
                    "raw": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_raw.mp4",
                    "high": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_high.mp4",
                    "medium": "https://ofw-assets.fyber.com/offer_campaign/1333/38839/e7aa883d-4237-4d1f-ae3a-924f4bf02525_medium.mp4"
                }],
                "url": "https://aws.fyber.com/show/fyber?appid=1246&uid=marcelosig=2797caf0485ee6fed3f8bcebe5075de900c68ea9"
            }]
        }
        ');

    }
}
