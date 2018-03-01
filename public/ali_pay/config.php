<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2017070707676752",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAtLYr0V8u/cJbQLhWY422MWUZPCaF7UKFHW/VXaYU0iKgI3EX/Mke0AXmWeY2sVf+Z+zpIf07aQAMJj5+hJ+XxiMFdb63PAI51ocqNOc4s8UluecK3qy2hsZc4eT/dat1NJXiL2zlyrLf/Zpk8Mh+iBsG0nFDkYIkMLvcKaUA+q5sJ6RKQUmpNWiUoFDVSLSUia9L/+5xZZc2rVebuG781GAojfy/zRwR3S1vMUKKBlASwD/VZxcY3AK6oAoemWuqOOMFHBFujigy3Xe8rwi3KeW/aT6VyFW722zJirI0WFmCP44NTRIj9q9oeFGQ1ICoGhVmL837a8UZe/F/fIl8cQIDAQABAoIBAQCTBNplPjD21lZzMwVlfPdK/FspapXuzv2JU2CdDe9GflEWRH4ldGKTDxm27ep1IYeieUW6F1FsPVOlEZbQwx4xXnCkuIJOWelANTsLS0oAR1ZIBkX7nzvoLh2G0k1bKCD0pTQdLVVOMXS12BRjKFp41LQaJXe5O83BsDSP1OQVDM/2RAC4Ku2acbSi3O1k+rfWUnsBtHR5V8lniUF7uxDPdThM+my1BVE1HeveXFYT69uLlYzo2I6ZWAMl7jlXVKfh2KiUom4SDTmYHWTQjQXQT2R30cGrWVUToWncRW7rX+k4bh1q24dtlxwQ8Id3Jn8i7TV5qNkRZk+iQNcQVs25AoGBAOPcAm4Jls1bXYq/fTW7zlj9npdzy++DQzRwmH+g2X90HUDrQ8yT2BEJsPrSqJ7TpccupnfigLmRsMP8Hq4vlBcUUSIojJoteqJb3oC5W5WTqaa/UG+Q+VsAH8akj6BDji5qeIC1PV55z8M2l+KeeaFNrpVX6oqK0kz1e/KcapXzAoGBAMsHigzdRWrPoKANllPco9+kynRmavCsD8v3Op2Uo1gMLe79irlSW4dlqd7zAFb1d5XoCbIu/a5vznEQ8V4Ve1qIO/zfW5oACgf6NFpN/mDfS960jzgGKT3ZltSHW/V1fXSw/ZdOGy/mdBFEswYbTZsAKKowIuIEahbMxLCe8okLAoGALpJiQMFe/DwnY1t+KQRoyZGU35nAXgTzMH2u/a8PpVhDPmiXo/G34MudS7bQ1h2mLY7gYXJ/Iu6fNX+LecipuQnjB1tIWZ7gCN1EHgVErc7PhxBlTVhRTwM4e25ZGMWWAvCqDox8rZmyGFFJO/1uGMT64PVmL8jt8OLf4ZeMxXcCgYA0y4cYhUmR1t/7/syCjjOG6oFC94cDgpqw/V8erxIyySgAp6m1OzdV5BfiQ+posnggYTB0R0fsXmKegDtjrc5f4mFHBoX5a90v6d5HRVTKuAYwqV88wE1lKfnQ1koRcDXpbETlXYgwUosIGoc7JUpu7gGlD9NiVqeHukPDcfG7tQKBgF+PiiqrZmy/Yv6o5UoqR/cq8TPXJSe3ANxEEDkaFJqiJcZIF6C/TdXTedx5N0xtYT2YP5Xhgmp8p2SbtQKVPGFA/kUTQVsryY5tRf2sdGmzA+PUq7weWsifu3Vh2Rg7Zcit9FacLqmDJY7A29LhBzq5iXqEjU91fh9vyAsYXhiS",
		
		//异步通知地址
		'notify_url' => "http://smrtyan.me/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://smrtyan.me/alipay.trade.page.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgh+Xnko6bR4zqOEyXAq4m4iWK/nI7p3/mCRSoOJjutX8iYIQkmH10V+upBgDe2KFalixQkv9oIQw8QGVeyfZer22HIhc8y8LoM4OriDYgsC1y6PwGeisA7XMcPno7gJf50GUiVI/QavbkIH96jW0Fbhf8IaINNe4wupoB3g5TIIUDLsJUd2ugtI5MQw9rcatj5RUUlXHU10Ls5lDk0QYriM2ANfFpPnydVPtb1w/C6XeuX/Bx5JXeXeygNGcpLqD6agbxPhPl/99wetxRh0UFM0IuIX5rQNpns8X/XW+Wurpodnl/DpgnYgzDxXwvsf2+nmeFR/Pj9/TqD3T5oeCWwIDAQAB",
);
