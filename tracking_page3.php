<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tracking Page</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo1.png">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
	<link rel="stylesheet" type="text/css" href="font.css">
</head>
<?php session_start(); ?>
<style type="text/css">
	*{
		margin:0px;
	}
	html,body{
		height:115%;
		min-height:400px;
	}
	body{
		display:flex;
		background-color:#5c8a8a;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	.header{
		width:100%;
		height:11%;
		display:flex;
		justify-content:space-between;
		background-color:#f2f2f2;
		box-shadow:0px 4px 5px black;
		z-index:1;
	}
	.header .sect1{
		width:33%;
		height:100%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
	}
	.header .sect1 img{
		width:35%;
	}
	.header .sect1 span{
		width:1%;
		height:40%;
		border-left:2px solid #cccccc;
	}
	.header .sect1 p{
		font-size:clamp(12px, 1.1vw, 20px);
		font-weight:bolder;
		color:#19334d;
		font-family:'Montserrat',sans-serif;
	}
	.header .sect2{
		width:25%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;	
		transform:translateX(-20%);	
	}
	.header .sect2 p:nth-child(1){
		font-size:clamp(17px, 1.9vw, 33px);
		font-weight:bolder;
		font-family:"Comfortaa",sans-serif;
	}
	.header .sect2 i{
		margin-left:10px;
	}
	.header .sect2 p:nth-child(2){
		font-size:clamp(10px, 1vw, 17px);
		margin-top:10px;
		font-family:"Comfortaa",sans-serif;
		color:#336699;
	}
	.header .sect3{
		width:20%;
		height:100%;
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	.header .sect3 a{
		width:40%;
		height:50%;
		max-height:60px;
		text-decoration:none;
	}
	.header .sect3 button{
		width:100%;
		height:100%;
		border:none;
		border-radius:10px;
		font-size:clamp(10px, 1vw, 18px);
		display:flex;
		cursor:pointer;
		justify-content:space-evenly;
		align-items:center;
		font-family:'Hibana',sans-serif;
		background-color:rgba(0, 128, 96,.7);
		transition:all ;
	}
	.header .sect3 button:hover{
		box-shadow:0px 0px 5px 3px rgba(58, 146, 128,.6);
	}
	.userLogo{
		width:50%;
		height:100%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		flex-direction:column;
		border-left:2px solid #cccccc;	
	}
	.userLogo span{
		width:40%;
		height:55%;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:50%;
		font-size:clamp(25px, 3.2vw, 72px);
		color:gray;
	}
	.userLogo p{
		font-size:clamp(10px, 1vw, 18px);
		font-family:'Hibana',sans-serif;
		text-transform:capitalize;
	}
	.navBar{
		width:100%;
		height:10%;
		max-height:130px;
		display:flex;
		justify-content:flex-start;
		align-items:flex-end;
		background-color:#3d5c7b;
	}
	.tabs{
		width:23%;
		height:70%;
		max-height:76px;
		max-width:350px;
		margin:0px 10px;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		font-size:clamp(13px, 1.1vw, 18px);
		font-family:'Comfortaa',sans-serif;
		font-weight:bolder;
		color:white;
		text-transform:capitalize;
		border-radius:10px 10px 0px 0px;
		box-shadow:2px 2px 5px rgba(0, 0, 0, .7);
		background-color:#4c739a;
		cursor:pointer;
		transition:all .3s linear;
	}
	.tabs i{
		font-size:clamp(16px, 1.7vw, 31px);

	}
	.tabs i:nth-child(3){
		color:lightgray;
		opacity:0%;
		transition:all .3s ease;
	}
	.tabs:hover i:nth-child(3){
		opacity:100%;
	}
	.tabs.active{
		background-color:#f2f2f2;
		box-shadow:0px 0px 5px 5px rgba(0, 0, 0, .4);
		color:black;
	}
	.tabs.active i:nth-child(3){
		opacity:100%;
		color:darkgray;
	}
	.tabs:nth-child(3) i:nth-child(1){
		color:#cccccc;
	}
	.tabs.active:nth-child(3) i:nth-child(1){
		opacity:100%;
		color:black;
	}
	.content{
		width:100%;
		height:70%;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		background-color:#f2f2f2;
	}
	.welcMSG{
		font-family:'Comfortaa',sans-serif;
		font-size:15px;
		text-transform:capitalize;
		color:#999999;
		font-style:italic;
		text-align:center;
	}
	.filterBanner{
		width:100%;
		height:15%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		box-shadow:0px 3px 5px rgba(0,0,0,.6);
	}
	.filterCont{
		width:50%;
		height:100%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.filterCont input{
		width:45%;
		height:63%;
		font-size:16px;
		font-family:'Hibana',sans-serif;
		margin-left:20px;
		outline:none;
		padding-left:40px;
		border:2px solid gray;
		border-right:none;
		border-radius:5px 0px 0px 5px;
		text-transform:capitalize;
	}
	.filterCont span{
		width:14%;
		height:68%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		font-size:14px;
		font-family:'Comfortaa',sans-serif;
		border-radius:0px 5px 5px 0px;
		background-color:#e6e6e6;
		box-shadow:-2px 0px 5px rgba(0, 0, 0, .3);
		transform:translateY(9px);

		cursor:pointer;
	}
	.filterCont:hover span i{
		color:#427065;
	}
	.filterCont span i{
		font-size:20px;
	}
	.filterCont i:nth-child(1){
		margin-left:40px;
		transform:translateY(10px);
		margin-right:-50px;
	}
	.filterMenu{
		width:14%;
		height:200px;
		max-height:200px;
		opacity:0%;
		z-index:1;
		transform:translate(-100%,70%);
		border-radius:10px;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
		background-color:rgba(112, 125, 137,.5);
		backdrop-filter:blur(9px);
		overflow-y:scroll;
	}
	.menuElement{
		width:96%;
		height:40%;
		padding:15px 0px 15px 10px;
		font-size:14px;
		cursor:pointer;
		display:flex;
		justify-content:space-between;
		font-family:'Montserrat',sans-serif;
		transition:all .3s ease;
	}
	.menuElement i{
		font-size:20px;
		margin-right:10px;
		color:#b36b00;
	}
	.menuElement:hover{
		background-color:rgba(76, 108, 138,.6);
	}
	.filterMenu::-webkit-scrollbar{
		width:10px;
		background-color:#d9d9d9;
		border-radius:0px 10px 10px 0px;
	}
	.filterMenu::-webkit-scrollbar-thumb{
		border-radius:0px 10px 10px 0px;
		background-color:#7d8fa1;
	}
	.advFilter{
		width:60%;
		height:100%;
		display:flex;
		justify-content:flex-end;
		align-items:center;
	}
	.advFilter .filterPoint{
		width:17%;
		height:45%;
		margin-right:20px;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:30px;
		background-color:#537193;
		color:white;
		font-size:13px;
		font-family:'Comfortaa',sans-serif;
		transition:all .5s ease;
		cursor:pointer;
		box-shadow:2px 2.5px 3px rgba(0, 0, 0, .5);
		z-index:2;
		animation:appear .8s ease;
	}
	.filterPoint:nth-child(2){
		
		z-index:1;
		/*animation:reloadPoint 1.2s ease-in-out;*/
	}
	.filterPoint:nth-child(1){
		/*animation:reloadPoint2 1.2s ease-in-out;*/
		z-index:0;
	}
	@keyframes reloadPoint{
		0%{
			transform:translateX(0%);
		}
		50%{
			transform:translateX(115%);	
		}
		100%{
			transform:translateX(0%);
		}
	}
	@keyframes reloadPoint2{
		0%{
			transform:translateX(0%);
		}
		50%{
			transform:translateX(232%);
		}
		100%{
			transform:translateX(0%);
		}
	}
	.advFilter .filterPoint i{
		margin-left:10px;
		font-size:15px;
		color:white;
		transition:all .5s ease;
	}
	.advFilter .filterPoint.active{
		background-color:#ebebff;
		color:black;
		font-weight:bolder;
		border:none;
		box-shadow:0px 0px 5px 3px rgba(179, 179, 255,.5);
	}
	.filterPoint.active i{
		color:black;
	}
	.advFilter .filterPoint:hover{
		background-color:#ebebff;
		color:black;
	}
	.advFilter .filterPoint:hover i{
		color:black;
	}
	.tableCont{
		width:100%;
		height:85%;
		display:flex;
		flex-wrap:wrap;
		align-items:flex-start;
	}
	.innerTable{
		width:100%;
		height:100%;
		overflow:scroll;
	}
	.innerTable p{
		color:#bfbfbf;
		transform:translateY(-80%);
		width:100%;
		height:100%;
		text-align:center;
		padding:10px 0px;
		font-family:'Comfortaa',sans-serif;
		font-size:14px;
		font-weight:bolder;
		font-style:italic;
		text-transform:capitalize;
		word-spacing:3px;
		transition:all .4s ease;
	}
	.innerTable p:hover{
		color:black;
	}
	.innerTable::-webkit-scrollbar{
		width:10px;
		background-color:rgba(26, 127, 153,.7);
		border-radius:10px;
	}
	.innerTable::-webkit-scrollbar-thumb{
		background-color:#2f5e6a;
		border-radius:10px;
	}
	.table{
		width:2500px;
		height:100%;
	}
	.smallerBanner{
		width:100%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		z-index:-1;
		transform:translateY(-100%);
	}	
	.chatCont{
		width:53%;
		height:80%;
		display:flex;
		flex-wrap:wrap;
		align-items:center;
		transform:translateY(-10%);
		animation:appear .6s ease;
	}
	@keyframes appear {
		0%{
			opacity:0%;
		}

		100%{
			opacity:100%;
		}
	}
	.chats{
		width:100%;
		height:100%;
		display:flex;
		justify-content:space-betwee;
		align-items:center;
		flex-direction:column;
	}
	.contactName{
		width:100%;
		height:13%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		background-color:#cccccc;
		box-shadow:2px 4px 5px rgba(0, 0, 0, .5);
		border-radius:10px 10px 0px 0px;
		z-index:1;
	}
	.contactName div{
		width:7%;
		height:100%;
		
	}
	.contactName div:nth-child(1){
		width:70%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.contactName div:nth-child(2){
		display:flex;
		justify-content:center;
		align-items:center;
		font-size:23px;
		border-radius:0px 10px 0px 0px;
		cursor:pointer;
		transition:all .5s ease;
	}
	.contactName div:nth-child(2):hover{
		color:#cf6363;
		box-shadow:-5px 1px 5px rgba(0, 0, 0, .2);
	}
	.IconLetter{
		width:7%;
		height:70%;
		border-radius:50%;
		margin:0px 20px;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#f8dfd3;
		box-shadow:0px 0px 5px 2px rgba(0, 0, 0, .5);
	}
	.contactName p{
		color:black;
		font-weight:bolder;
		font-family:'Nunito',sans-serif;
		font-size:16px;
		text-transform:capitalize;
	}
	.IconLetter p{
		font-size:14px;
		font-weight:bolder;
		color:#9a5332;
		font-family:'Hibana',sans-serif;
	}
	.messageCont{
		width:100%;
		height:86%;
		display:flex;
		justify-content:flex-start;
		flex-direction:column;
		overflow-y:scroll;
		border-radius:0px 0px 10px 10px;
/*		background-image:url('chatbg1.jpg');
		background-size:cover;
		background-position:center;
		background-repeat:no-repeat;*/
		background-color:#e2d4c5;

	}
	.messageCont::-webkit-scrollbar{
		width:10px;
	}
	.messageCont::-webkit-scrollbar-thumb{
		background-color:rgba(107, 79, 51,.5);
	}
	.message1{
		width:45%;
		height:fit-content;		
		display:flex;
		justify-content:flex-start;		
		margin-top:20px;
	}
	.message2{
		width:45%;
		height:fit-content;		
		display:flex;
		justify-content:flex-end;
		transform:translateX(122%);
		margin-top:20px;
	}
	.message2:nth-child(1){
	}
	.senderIcon{
		width:10%;
		height:100%;
		max-height:52px;
		display:flex;
		justify-content:center;
		align-items:flex-start;
	}
	.senderIcon span{
		width:100%;
		max-width:20px;
		height:100%;
		max-height:20px;
		border-radius:50%;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#f8dfd3;
		box-shadow:0px 0px 5px 2px rgba(0, 0, 0, .5);
		font-size:7px;
		font-weight:bolder;
		color:#9a5332;
		font-family:'Hibana',sans-serif;
	}
	.msgCont{
		max-width:225px;
		border-radius:5px;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		text-align:justify;
		white-space:pre-wrap;
		font-size:13px;
		font-weight:bolder;
		color:#e5dacc;
		padding:10px 15px;
		font-family:'Nunito',sans-serif;
		background-color:#ab7a3b;
	}
	table{
		width:100%;
		border-collapse:collapse;
	}
	tr{
		height:60px;
		font-size:14px;
		font-family:'Comfortaa',sans-serif;
		border:1.5px solid #8ea1b4;
		order:2;
	}
	th{
		background-color:rgba(80, 110, 139,.2);
		border:1.5px solid #8ea1b4;
		text-align:left;	
	}
	th i{
		font-size:20px;
		margin:0px 10px;
		color:#995c00;
	}
	td{
		text-align:left;
		padding-left:10px;
		text-transform:capitalize;
		font-family:'Montserrat',sans-serif;
		font-weight:600;
		font-size:13px;
		border-left:2px solid #8ea1b4;
		color:#19334d;
	}
	td:nth-child(1){
		background-color:rgba(80, 110, 139,.1);
		font-weight:bolder;
	}
	td:nth-child(4){
		width:30%;
		font-size:12px;
	}
	td:nth-child(3){
		width:20%;
	}
	td:nth-child(3) span{
		padding:7px;
		border-radius:10px;
	}
	td:nth-child(5) span{
		width:70%;
		padding:10px 10px;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:20px;
		background-color:rgba(221, 161, 105,.7);
		border:none;
		color:white;
		font-family:'Comfortaa',sans-serif;
		transition:all .5s ease;
		text-transform:capitalize;
		margin-left:10px;
	}
	td:nth-child(5) span i{
		color:black;
		margin-left:10px;
		transition:all .5s ease;
	}
	td:nth-child(5) span:hover i{
		color:#408c7f;
	}
	td:nth-child(5) {
		width:8%;
	}
	td:nth-child(5) i{
		font-size:20px;
		margin-left:20px;
	}

	td:nth-child(8){
		text-transform:lowercase;
	}
	td:nth-child(9){
		width:8%;
	}
	td:nth-child(9) button{
		width:90%;
		padding:10px 0px;
		border:none;
		border-radius:0px;
		border-radius:10px;
		background-color:#b68758;
		font-size:11px;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		font-weight:bolder;
		color:#6a4d2f;
		font-family:'Comfortaa',sans-serif;
		transition:all .4s ease;
		cursor:pointer;
	}
	td:nth-child(9) button:hover{
		box-shadow:0px 0px 5px 3px rgba(53, 39, 23, .3);
		background-color:#53a295;
		color:black;
	}
	td:nth-child(9) button i{
		color:#e0cdb8;
		font-size:15px;
	}
	td:nth-child(9) button:hover i{
		color:white;
	}
	.menu{
		width:14%;
		height:0%;
		max-height:100px;
		background-color:rgba(166, 166, 166,.5);
		backdrop-filter:blur(3px);
		position:absolute;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
		overflow-y:scroll;
		z-index:1;
		border-radius:7px;
		opacity:0%;
		z-index:-1;
		transition:all .6s ease;
	}
	.menu p{
		width:93%;
		height:40px;
		padding:13px 4.5px 10px 10px;
		font-size:13px;
		font-family:'Comfortaa',sans-serif;
		transition:all .4s ease;
	}
	.menu p:hover{
		background-color:#8694a2;
		cursor:pointer;
		font-weight:bolder;
	}
	.menu::-webkit-scrollbar{
		width:5px;
		background-color:#19334d;
		border-radius:0px 10px 10px 0px;
	}
	.menu::-webkit-scrollbar-thumb{
		border-radius:0px 10px 10px 0px;
		background-color:#3873ad;
	}
	.manageCont{
		width:100%;
		height:100%;
		overflow-y:scroll;
		display:flex;
		flex-wrap:wrap;
		justify-content:space-between;
	}
	.manageCont::-webkit-scrollbar{
		width:10px;
		background-color:rgba(77, 130, 153,.5);
		border-radius:0px 10px 10px 0px;
	}
	.manageCont::-webkit-scrollbar-thumb{
		background-color:#335766;
		border-radius:0px 10px 10px 0px;
	}
	.registerCont{
		width:100%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;	

	}
	.leftBanner{
		width:25%;
		max-width:330px;
		height:90%;
		max-height:678px;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		background-image:url('bgimg10.jpg');
		backhround-size:cover;
		background-position:center;
		background-repeat:no-repeat;
		backdrop-filter:blur(8px);
		border-radius:10px 0px 0px 10px;
	}
	.leftBanner span{
		width:100%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		backdrop-filter:blur(6px);
		border-radius:10px 0px 0px 10px;
	}
	.leftBanner img{
		width:60%;
		margin-top:-30px;
	}
	.leftBanner p{
		font-size:clamp(15px, 1.55vw, 22px);
		font-family:'Hibana',sans-serif;
		color:white;
		margin-top:20px;
		margin-bottom:-50px;
	}
	.rightBanner{
		width:60%;
		max-width:670px;
		height:90%;
		max-height:678px;
		background-color:#e6e6e6;
		border-radius:7px;
		transform:translateX(-1%);
		z-index:1;
		box-shadow:4px 2px 5px rgba(0, 0, 0, .6), -4px 2px 5px rgba(0,0,0, .3);
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	.rightBanner .topSect{
		width:100%;
		height:15%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.rightBanner .topSect p{
		font-size:clamp(16px, 1.95vw, 27px);
		font-family:'Montserrat',sans-serif;
	}
	.rightBanner .topSect i{
		font-size:clamp(20px, 2.35vw, 37px);
		margin-right:20px;
		margin-left:40px;
	}
	.rightBanner .topSect span{
		width:35%;
		height:60%;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:5px;
		transform:translateX(30%);
		color:white;
		font-family:'Montserrat',sans-serif;
		font-size:15px;
		background-color:rgba(70, 155, 132,.6);
		box-shadow:2px 2px 5px rgba(0, 0, 0, .5);
		opacity:0%;
	}
	.rightBanner .topSect span i{
		font-size:18px;
		margin-left:0px;
		color:black;
	}
	.rightBanner .contentSect{
		width:100%;
		height:85%;
		display:flex;
		flex-wrap:wrap;
		justify-content:space-evenly;
	}
	.contentSect .dropDown{
		width:48%;
		height:13.5%;
		max-height:60px;
		display:flex;
		flex-wrap:wrap;
		background-color:blue;
		margin-left:10px;
	}
	.dropDown .selected{
		width:100%;
		height:100%;
		text-transform:capitalize;
		background-color:#cccccc;
		padding-left:15px;
		border:none;
		outline:none;
		color:#737373;
		font-size:clamp(11px, 1.1vw, 16px);
		font-family:'Montserrat',sans-serif;
		border-bottom:3px solid black;
		display:flex;
		align-items:center;
		justify-content:space-between;
		cursor:pointer;
		transition:all .6s ease;	
	}
	.dropDown .selected i{
		margin-right:25px;
		font-size:clamp(12px, 1.35vw, 18px);
		color:black;
	}
	.dropDown .postList{
		width:100%;
		height:120px;
		max-height:0px;
		opacity:0%;
		margin-top:10px;
		margin-left:10px;
		background-color:rgba(65, 110, 155,.5);
		backdrop-filter:blur(5px);
		display:flex;
		justify-content:space-between;
		align-items:flex-start;
		flex-direction:column;
		overflow-y:scroll;
		z-index:1;
		border-radius:5px;
		transition:all .4s ease;
	}
	.postList.active{
		max-height:120px;
		opacity:100%;
	}

	.postList .options{
		width:90%;
		padding:20px 14px;
		font-size:13px;
		font-family:'Comfortaa',sans-serif;
		transition:all .5s ease;
		cursor:pointer;
	}
	.postList .options:hover{
		background-color:#557291;
	}
	.postList::-webkit-scrollbar{
		width:5px;
		background-color:rgba(108, 130, 153,.5);
		border-radius:0px 10px 10px 0px;
	}
	.postList::-webkit-scrollbar-thumb{
		background-color:#5e7287;
		border-radius:0px 10px 10px 0px;
	}

	.dropDown .selected2{
		width:100%;
		height:100%;
		text-transform:capitalize;
		background-color:#cccccc;
		padding-left:15px;
		border:none;
		outline:none;
		color:#737373;
		font-size:clamp(11px, 1.1vw, 16px);
		font-family:'Montserrat',sans-serif;
		border-bottom:3px solid black;
		display:flex;
		align-items:center;
		justify-content:space-between;
		cursor:pointer;
		transition:all .6s ease;	
	}
	.dropDown .selected2 i{
		margin-right:25px;
		font-size:clamp(12px, 1.35vw, 18px);
		color:black;
	}
	.dropDown .postList2{
		width:100%;
		height:120px;
		max-height:0px;
		opacity:0%;
		margin-top:10px;
		margin-left:10px;
		background-color:rgba(65, 110, 155,.5);
		backdrop-filter:blur(5px);
		display:flex;
		justify-content:space-between;
		align-items:flex-start;
		flex-direction:column;
		overflow-y:scroll;
		z-index:1;
		border-radius:5px;
		transition:all .4s ease;
	}
	.postList2.active{
		max-height:120px;
		opacity:100%;
	}

	.postList2 .options2{
		width:90%;
		padding:20px 14px;
		font-size:13px;
		font-family:'Comfortaa',sans-serif;
		transition:all .5s ease;
		cursor:pointer;
	}
	.postList2 .options2:hover{
		background-color:#557291;
	}
	.postList2::-webkit-scrollbar{
		width:5px;
		background-color:rgba(108, 130, 153,.5);
		border-radius:0px 10px 10px 0px;
	}
	.postList2::-webkit-scrollbar-thumb{
		background-color:#5e7287;
		border-radius:0px 10px 10px 0px;
	}

	.dropDown .selected3{
		width:100%;
		height:100%;
		text-transform:capitalize;
		background-color:#cccccc;
		padding-left:15px;
		border:none;
		outline:none;
		color:#737373;
		font-size:clamp(11px, 1.1vw, 16px);
		font-family:'Montserrat',sans-serif;
		border-bottom:3px solid black;
		display:flex;
		align-items:center;
		justify-content:space-between;
		cursor:pointer;
		transition:all .6s ease;	
	}
	.dropDown .selected3 i{
		margin-right:25px;
		font-size:clamp(12px, 1.35vw, 18px);
		color:black;
	}
	.dropDown .postList3{
		width:100%;
		height:100px;
		max-height:0px;
		opacity:0%;
		margin-top:10px;
		margin-left:10px;
		background-color:rgba(65, 110, 155,.5);
		backdrop-filter:blur(5px);
		display:flex;
		justify-content:space-between;
		align-items:flex-start;
		flex-direction:column;
		overflow-y:scroll;
		z-index:1;
		border-radius:5px;
		transition:all .4s ease;
	}
	.postList3.active{
		max-height:100px;
		opacity:100%;
	}

	.postList3 .options3{
		width:90%;
		padding:20px 14px;
		font-size:13px;
		font-family:'Comfortaa',sans-serif;
		transition:all .5s ease;
		cursor:pointer;
	}
	.postList3 .options3:hover{
		background-color:#557291;
	}
	.postList3::-webkit-scrollbar{
		width:5px;
		background-color:rgba(108, 130, 153,.5);
		border-radius:0px 10px 10px 0px;
	}
	.postList3::-webkit-scrollbar-thumb{
		background-color:#5e7287;
		border-radius:0px 10px 10px 0px;
	}

	.rightBanner .contentSect input:nth-child(1),input:nth-child(2){
		margin-top:20px;
	}
	.rightBanner .contentSect input:nth-child(5), .rightBanner .contentSect input:nth-child(2){
		text-transform:none;
	}
	.rightBanner .contentSect .passCont{
		width:47%;
		height:13%;
		max-height:57px;
		margin-left:10px;
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	.rightBanner .contentSect input{
		width:45%;
		height:13%;
		max-height:57px;
		margin-left:10px;
		text-transform:capitalize;
		background-color:#cccccc;
		padding-left:15px;
		border:none;
		outline:none;
		color:#737373;
		font-size:clamp(11px, 1.1vw, 16px);
		font-family:'Montserrat',sans-serif;
		border-bottom:3px solid black;
		transition:all .6s ease;
	}
	.contentSect .passCont input{
		width:100%;
		height:100%;
		margin:0px;
		transform:translateY(-13%);
	}
	.contentSect .passCont i{
		width:0%;
		height:0%;
		cursor:pointer;
		transform:translate(-30px,-5px);
		
	}
	.contentSect input::placeholder{
		font-size:clamp(11px, 1.1vw, 16px);
		font-style:italic;
		font-family:'Montserrat',sans-serif;
	}
	.contentSect input:focus{
		border-bottom:3px solid #499287;
	}
	.contentSect button{
		width:40%;
		height:12%;
		background-color:#618f9e;
		color:white;
		font-size:clamp(12px, 1.25vw, 17px);
		font-family:'Montserrat',sans-serif;
		border:none;
		outline:none;
		border-radius:3px;
		transition: all .5s ease;
		cursor:pointer;
		box-shadow:-2px 2px 5px rgba(0, 0, 0, .6);
		
	}
	.contentSect button:hover{
		background-color: #399388;
	}
	.contentSect button i{
		color:black;
		margin-left:15px;
		font-size:15px;
	}
	.manageStaff{
		width:100%;
		height:90%;
		background-color:green;
	}
	.banner3{
		width:100%;
		height:100%;
		display:flex;
		flex-wrap:wrap;
		overflow-y:scroll;
	}
	.regIssue{
		width:100%;
		height:77%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	form{
		width:100%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.inputBanner{
		width:35%;
		max-width:480px;
		height:80%;
		max-height:420px;
		border-radius:7px 0px 0px 7px;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		background-color:#7a8a9f;

	}
	.input_Cont{
		width:100%;
		height:25%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.input_Cont input{
		width:70%;
		height:50%;
		border-radius:0px 10px 10px 0px;
		border:none;
		text-transform:capitalize;
		box-shadow:0px 0px 5px 3px rgba(0,0,0,.4);
		padding-left:20px;
		margin-top:0px;
		font-size:14px;
		font-family:'Nunito',sans-serif;
		z-index:0;
		outline:none;
	}
	.input_Cont span{
		width:10%;
		height:53%;
		border-radius:5px 0px 0px 5px;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#5192bd;
		color:white;
		z-index:1;
	}
	.deptSect{
		width:100%;
		height:40%;
		display:flex;
		flex-wrap:wrap;
		align-items:flex-start;
	}
	.deptPoint{
		width:27%;
		height:25%;
		border-radius:20px;
		font-size:11px;
		display:flex;
		justify-content:center;
		align-items:center;
		margin-top:10px;
		margin-left:10px;
		font-family:'Comfortaa',sans-serif;
		background-color:rgba(131, 207, 226,.4);
		box-shadow:0px 0px 5px 2px rgba(0, 0, 0, .2);
		color:#83cfe2;
		font-weight:bolder;
		cursor:pointer;
		transition:all .4s ease;
	}
	.deptPoint.active:nth-child(1){
		background-color:#45b7d3;
		color:#1d697c;	
	}
	.deptPoint:nth-child(2){
		background-color:rgba(227, 173, 79,.4);
		color:#e7b765;
	}
	.deptPoint.active:nth-child(2){
		background-color:#c7891f;
		color:#6e4c11;
	}
	.deptPoint:nth-child(3){
		width:35%;
		background-color:rgba(91, 164, 151,.4);
		color:#7bb7ac;
	}
	.deptPoint.active:nth-child(3){
		background-color:#488479;
		color:#2d524b;
	}
	.deptPoint:nth-child(4){
		background-color:rgba(198, 83, 140,.4);
		color:#993366;
	}
	.deptPoint.active:nth-child(4){
		background-color:#ac3973;
		color:#c7528c;
	}
	.inputBanner button{
		width:50%;
		height:12%;
		border-radius:10px;
		border:none;
		outline:none;
		font-family:'Montserrat',sans-serif;
		box-shadow:2px 1px 5px rgba(0, 0, 0, .4);
		cursor:pointer;
		transition:all .5s ease;
	}
	.inputBanner button:hover{
		background-color:#5da28d;;
		box-shadow:0px 0px 5px 3px rgba(65, 113, 99, .4);
		color:white;
	}
	.picBanner{
		width:35%;
		max-width:480px;
		height:80%;
		max-height:420px;
		display:flex;
		justify-content:center;
		align-items:center;
		box-shadow:2px 1px 5px rgba(0, 0, 0, .6);
		border-radius:0px 7px 7px 0px;
	}
	.picBanner img{
		width:80%;
	}
	.issueAnalysis{
		width:100%;
		height:100%;
		background-color:yellow;
	}
	.footerCont{
		width:100%;
		height:9%;
		display:flex;
		align-items:flex-end;
		background-color:#f2f2f2;
	}
	.footer{
		width:100%;
		height:50%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		background-color:#4a6987;
	}
	.footer a{
		text-decoration:none;
		color:#8ca6c0;
		font-style:italic;
		font-family:'Gill Sans Std',sans-serif;
		font-size:14px;
		margin-left:30px;
		transition:all .3s ease;
	}
	.footer a:hover{
		color:#00e6e6;
	}
	.footer p{
		text-decoration:none;
		color:#8ca6c0;
		font-style:italic;
		font-family:'Gill Sans Std',sans-serif;
		font-size:14px;
		margin-right:30px;
		transition:all .3s ease;
	}
	.footer p:hover{
		color:#00e6e6;
	}
</style>
<body>
	<div class="header">
		<div class="sect1">
			<img src="logo.png">
			<span>
				
			</span>
			<p>Overhead Admin</p>
		</div>

		<div class="sect2">
			<p>Issue Tracking <i class="fad fa-clipboard"></i></p>
			<p>Dashboard</p>
		</div>

		<div class="sect3">
			<a href="index.php"><button>Logout <i class="fad fa-right-to-bracket" style="font-size:18px;"></i></button></a>
			<div class="userLogo">
				<span>
					<i class="fad fa-circle-user"></i>
				</span>
				<p><?php echo $_SESSION['sessionfname4']?></p>
			</div>
		</div>
	</div>

	<div class="navBar">
		<div class="tabs" id="tab5" onclick="tabMove(5)">
			<i class="fad fa-server"></i>
			<p>facility Issues</p>
			<i class="fas fa-ellipsis-vertical"></i>
		</div>

		<div class="tabs" id="tab3" onclick="tabMove(3)">
			<i class="fad fa-circle-exclamation"></i>
			<p>Issue Instances</p>
			<i class="fas fa-ellipsis-vertical"></i>
		</div>

		<div class="tabs" id="tab4" onclick="tabMove(4)">
			<i class="fad fa-users-medical"></i>
			<p>Manage Users</p>
			<i class="fas fa-ellipsis-vertical"></i>
		</div>
	</div>

	<div class="content">
		<p class="welcMSG">Welcome Esteem Staff, Here we can track different sector of our project. incase in need of training or guidiance, <br>Pleas contact any HI Staff. Thank You</p>
	</div>

	<div class="footerCont">
		<div class="footer">
			<a href="https://www.gghnigeria.org/">Georgetown Global Health Nigeria Co.</a>	
			<p>Built By Naeem Bashir</p>
		</div>
	</div>
</body>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
	//navigate through the dashboards
	if (sessionStorage.getItem("pageNum3")){
		var num = sessionStorage.getItem("pageNum3");		
		var xhttp2 = new XMLHttpRequest();
		xhttp2.onload = function () {
			document.querySelector(" .content").innerHTML = this.responseText;
			var tabElem = document.getElementById("tab"+num);
			tabElem.classList = "tabs active";
			//alert(this.responseText);
			if (num == 5) {
				issueJS();
			}
			else if (num == 3) {
				regissue();
			}					
			else if (num == 4) {
				manage();
			}
		}
		xhttp2.open("POST","tracking-inc.php");
		xhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp2.send("pageNum="+num)
	}

	function tabMove(o){
		for (var j = 3; j <= 5; j++) {
			if (j == o) {
				var tab = document.getElementById("tab"+o);
				tab.classList = "tabs active";
				var xhttp = new XMLHttpRequest();
				xhttp.onload = function () {
					document.querySelector(" .content").innerHTML = this.responseText;
					//alert(this.responseText);
					if (o == 5) {
						issueJS();
					}
					else if (o == 3) {
						regissue();
					}
					else if (o == 4) {
						manage();
					}
				}
				xhttp.open("POST","tracking-inc.php");
				xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp.send("pageNum="+o);
				sessionStorage.setItem("pageNum3",o);
			}
			else {
				var tab = document.getElementById("tab"+j);
				tab.classList = "tabs";	
			}
		}
	}
	
	//javascript for the issue dashbaord
	function issueJS(){		
		
		var filterPointVal = ["Kano","Jigawa","Bauchi","M&E","HI","Logistic","Others","<i class = 'fad fa-left-to-line'></i>"];
		var pointNum = filterPointVal.length;		

		function createPoint(number) {
			var container = document.querySelector(".advFilter");

			var span1 = document.createElement("span");
			span1.classList = "filterPoint";
			var p1 = document.createElement("p");
			p1.setAttribute("id","pointPara"+number);
			var i1 = document.createElement("i");
			if (number < 3) {
				span1.addEventListener("click",() => {advFilter(number)});
				i1.classList = "fad fa-building-columns";
			}
			else if (number == 7) {
				span1.style.width = "10%";
				span1.addEventListener("click",() => {backFilter()});
				span1.style.display = "none";
			}
			else {
				span1.addEventListener("click",() => {
					SecondadvFilter(number,p1.innerHTML);
					sessionStorage.setItem("filterNum2",number);
				});
				span1.style.display = "none";
				i1.classList = "fad fa-building-columns";
			}

			
			
			

			span1.appendChild(p1);
			span1.appendChild(i1);
			container.appendChild(span1);
		}

		for (var r = 0; r < pointNum; r++) {
			createPoint(r);
			document.getElementById("pointPara"+r).innerHTML = filterPointVal[r];
		}


		var points = document.querySelectorAll(" .filterPoint");

		if (sessionStorage.getItem("filterLvl") && sessionStorage.getItem("filterLvl") == 1) {
			
			if (sessionStorage.getItem("filterNum")) {
				var number = sessionStorage.getItem("filterNum");
				LoadadvFilter(number);
			}
			else {
				var number = 0;
				LoadadvFilter(number);
			}
		}
		else if (sessionStorage.getItem("filterLvl") && sessionStorage.getItem("filterLvl") == 2) {
			
			if (sessionStorage.getItem("filterNum2")) {
				
				var number = sessionStorage.getItem("filterNum2");
				var filterValue = points[number].querySelector("p").innerHTML;
				sessionStorage.setItem("filterNum2",number);
				SecondadvFilter(number,filterValue);
			}
			else {
				var filterValue = "NULL";
				var number = 0;
				SecondadvFilter(number,filterValue);
			}
		}
		else{
			if (sessionStorage.getItem("filterNum")) {
				var number = sessionStorage.getItem("filterNum");
				LoadadvFilter(number);
			}
			else {
				var number = 0;
				LoadadvFilter(number);
			}
		}
			



		function advFilter(num){
			sessionStorage.setItem("filterLvl",2)
			
			for (var t = 0; t < 3; t++) {
				if (t == num) {
					points[t].classList = "filterPoint active";
					var filterVal = points[t].querySelector("p").innerHTML;
					var filterVal2 = "NULL";
					sessionStorage.setItem("filterVal1",filterVal);
					sessionStorage.setItem("filterNum",t);
					var xhttp5 = new XMLHttpRequest();
					xhttp5.onload = function () {
						//alert(this.responseText);
						document.querySelector(".innerTable").innerHTML = this.responseText;
						var rowNumber = document.querySelectorAll(".tRow").length;

						sessionStorage.setItem("RowNum3",rowNumber);
						InternalOperation();
					}
					xhttp5.open("POST","tracking-inc.php");
					xhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xhttp5.send("advFilterVal="+filterVal+"&advFilterVal2="+filterVal2);

				}
				else {

					points[t].classList = "filterPoint";
				}
			}

			for (var y = 0; y < pointNum; y++) {
				if (y < 3) {
					points[y].style.display = "none";
				}
				else {
					points[y].style.display = "flex";
				}
			}
		}

		function LoadadvFilter(num){

			sessionStorage.setItem("filterLvl",1)
			for (var t = 0; t < pointNum; t++) {
				if (t == num) {
					points[t].classList = "filterPoint active";
					var filterVal = points[t].querySelector("p").innerHTML;
					var filterVal2 = "NULL";
					sessionStorage.setItem("filterVal1",filterVal);
					sessionStorage.setItem("filterNum",t);
					var xhttp5 = new XMLHttpRequest();
					xhttp5.onload = function () {
						//alert(this.responseText);
						document.querySelector(".innerTable").innerHTML = this.responseText;
						var rowNumber = document.querySelectorAll(".tRow").length;

						sessionStorage.setItem("RowNum3",rowNumber);
						InternalOperation();
					}
					xhttp5.open("POST","tracking-inc.php");
					xhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xhttp5.send("advFilterVal="+filterVal+"&advFilterVal2="+filterVal2);

				}
				else {

					points[t].classList = "filterPoint";
				}
			}
		}

		function SecondadvFilter(num,val){
			
			for (var t = 3; t < pointNum; t++) {
				if (t == num) {
					points[t].classList = "filterPoint active";
				}
				else {
					points[t].classList = "filterPoint";
				}

			}

			var filterVal = sessionStorage.getItem("filterVal1");
			var filterVal2 = val;
			
			
			var xhttp5 = new XMLHttpRequest();
			xhttp5.onload = function () {
				//alert(this.responseText);
				document.querySelector(".innerTable").innerHTML = this.responseText;
				var rowNumber = document.querySelectorAll(".tRow").length;

				sessionStorage.setItem("RowNum3",rowNumber);
				InternalOperation();
			}
			xhttp5.open("POST","tracking-inc.php");
			xhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp5.send("advFilterVal="+filterVal+"&advFilterVal2="+filterVal2);

			for (var y = 0; y < pointNum; y++) {
				if (y < 3) {
					points[y].style.display = "none";
				}
				else {
					points[y].style.display = "flex";
				}
			}

		}

		function backFilter() {
			for (var g = 0; g < pointNum; g++) {
				sessionStorage.setItem("filterLvl",1)
				if (g < 3) {
					points[g].style.display = "flex";
				}
				else {
					points[g].style.display = "none";
				}
				var selcPoint = sessionStorage.getItem("filterNum");
				sessionStorage.removeItem("filterNum2");
				LoadadvFilter(selcPoint);
			}
		}
		function InternalOperation(){
			if (sessionStorage.getItem("RowNum3") > 0) {
				
				var rowNum = sessionStorage.getItem("RowNum3");
				var adminFullName ='<?php echo $_SESSION['sessionfname4']?>';

				var usedNum = [];

				function createRow(r){
					var table = document.querySelector(" .tableCont table");
					var tr1 = document.createElement('tr');
					tr1.setAttribute('id','trow'+r);

					table.appendChild(tr1);
				}

				for (var i = 1; i <= rowNum; i++) {
					var status = document.getElementById("tCol"+i+"_5").innerHTML;
					var chatBtn = document.getElementById("btnCol"+i+"_1");
					chatBtn.onclick = function () {
						openChat(this.value);
					}
					if (status == "resolved" || status == "resolved ") {
						document.getElementById("tCol"+i+"_5").style.backgroundColor = "rgba(73, 171, 152,.3)";
						document.getElementById("tCol"+i+"_5").style.color = "#45a18e";
						document.getElementById("tCol"+i+"_5").innerHTML = status + "<i class = 'fas fa-star'></i></button>";
					}
					else if (status == "processing" || status == "processing ") {
						document.getElementById("tCol"+i+"_5").style.backgroundColor = "rgba(219, 148, 112,.3)";
						document.getElementById("tCol"+i+"_5").style.color = "#cc6633";
						document.getElementById("tCol"+i+"_5").innerHTML = status + "<i class = 'fas fa-star-half-stroke'></i></button>";
					}
					else if (status == "unsolved" || status == "unsolved ") {
						document.getElementById("tCol"+i+"_5").style.backgroundColor = "rgba(176, 105, 105,.3)";
						document.getElementById("tCol"+i+"_5").style.color = "#964f4f";
						document.getElementById("tCol"+i+"_5").innerHTML = status + "<i class = 'far fa-star'></i></button>";
					}


					var Colorarray = [
					'rgba(210, 163, 81,.3)'
					,'rgba(0, 153, 135,.3)'
					,'rgba(146, 84, 115,.3)'
					,'rgba(232, 89, 161,.3)'
					,'rgba(255, 166, 77,.3)'
					,'rgba(0, 153, 204,.3)'
					,'rgba(57, 57, 192,.3)'
					,'rgba(74, 98, 50,.3)'
					,'rgba(199, 67, 67,.3)'
					,'rgba(172, 230, 0,.3)'
					,'rgba(84, 84, 84,.3)'];

					
					var randNum = Math.floor(Math.random() * 11)
					var checkingStats = usedNum.includes(randNum);
					function reCheck(num,usedNum) {
						var checkingStats2 = usedNum.includes(num);
						if (checkingStats2 == false) {
							usedNum.push(num);
							document.getElementById("tCol"+i+"_3").style.backgroundColor = Colorarray[num];
						}
						else {
							var randNum2 = Math.floor(Math.random() * 11)
							reCheck(randNum2,usedNum);
						}
					}

					if (usedNum.length == 10) {
						usedNum = [];
						reCheck(randNum,usedNum);
					}
					else {
						if (checkingStats == false) {
							usedNum.push(randNum);
							document.getElementById("tCol"+i+"_3").style.backgroundColor = Colorarray[randNum];
						}
						else {
							reCheck(randNum,usedNum);
						}	
					}	
				}
				

				
				var counter6 = 0;
				function openChat(convoID){
				document.querySelector(".messageCont").innerHTML = "";
					document.querySelector(".smallerBanner").style.zIndex = "1";
					document.querySelector(" .chatCont").style.opacity = "100%";
					document.querySelector(" .chatCont").style.display = "flex";
					var reporter = document.getElementById("tCol"+convoID+"_7").innerHTML;
					document.getElementById("otheruser").innerHTML = reporter;
					var splitname = reporter.split(" ");
					var initials = splitname[0].slice(0,1) + splitname[1].slice(0,1);
					initials1 = initials.toUpperCase();
					document.getElementById("initial1").innerHTML = initials1;

					var fullname = document.getElementById("tCol"+convoID+"_6").innerHTML;
					var splitname2 = fullname.split(" ");
					var initials_2 = splitname2[0].slice(0,1) + splitname2[1].slice(0,1);
					initials2 = initials_2.toUpperCase();
					sessionStorage.setItem("selcRowNum",convoID);

					var facilityNum = document.getElementById("tCol"+convoID+"_10").innerHTML;
					var issueNum = document.getElementById("tCol"+convoID+"_11").innerHTML;				
					liveChat(facilityNum,issueNum,convoID,initials2,initials1);

					var newMsgChecker = setInterval(() => {
						if (counter6 > 0) {
							clearInterval(newMsgChecker);
						}
						else {
							
							if (localStorage.getItem("chatNum"+facilityNum+"_"+issueNum)) {
								liveChat(facilityNum,issueNum,convoID,initials2,initials1)
							}
						}
					},1000)
				}

				//loading the chats functions
				function liveChat(facilityNum,issueNum,convoID,initials2,initials1){
					if (localStorage.getItem("chatNum"+facilityNum+"_"+issueNum)) {
						var chatNumber = localStorage.getItem("chatNum"+facilityNum+"_"+issueNum);
						for (var j = 1; j <= chatNumber; j++) {
							//alert(chatNumber);
							if (localStorage.getItem("issueStaffMsg"+facilityNum+issueNum+"_"+j)) {
								
								var message = localStorage.getItem("issueStaffMsg"+facilityNum+issueNum+"_"+j);
								sendMsg(convoID,message,j,initials2);	
								var msgPoint = j;
								var lastMsg = document.getElementById("msgContainer"+msgPoint);
								document.querySelector(".messageCont").scrollTo(0,lastMsg.offsetTop);
							}
							else if (localStorage.getItem("facStaffMsg"+facilityNum+issueNum+"_"+j)) {
								//alert(chatNumber);
								var message = localStorage.getItem("facStaffMsg"+facilityNum+issueNum+"_"+j);
								loadOtherMsg(convoID,message,j,initials1);	
								var msgPoint = j;
								var lastMsg = document.getElementById("msgContainer"+msgPoint);
								document.querySelector(".messageCont").scrollTo(0,lastMsg.offsetTop);
							}
						}
						for (var j = 1; j <= chatNumber; j++) {
							adjustMsg(j);
						}
					}
				}
				
				document.getElementById("closemark").addEventListener("click",closeChat)

				//function to close the chat banner
				function closeChat() {
					var counter = 0;
					var counter6
					document.querySelector(" .chatCont").style.opacity = "0%";
					document.querySelector(" .chatCont").style.transition = "all .6s ease";
					var closeChatAnime = setInterval(() => {
						if (counter > 0) {

							clearInterval(closeChatAnime);

							counter = 0;
						}
						else {
							counter++;
							document.querySelector(".smallerBanner").style.zIndex = "-1";
							document.querySelector(" .chatCont").style.display = "none";
						}
					},700)
				}

				function sendMsg(chatId,msg,msgId,initial){
					
					var msgCont = document.querySelector(" .messageCont");
					var facilityNum = document.getElementById("tCol"+chatId+"_10").innerHTML;
					var issueNum = document.getElementById("tCol"+chatId+"_11").innerHTML;	
					var div1 = document.createElement("div");
					div1.classList = "message2";
					div1.setAttribute("id","msgContainer"+msgId);
					var span1 = document.createElement("span");
					span1.classList = 'msgCont';
					span1.setAttribute("id","msgBox"+msgId);
					var p1 = document.createElement("p");
					p1.innerHTML = msg;
					p1.setAttribute("id","msg"+msgId);
					var span2 = document.createElement("span");
					span2.classList = "senderIcon";
					var span3 = document.createElement("span");
					span3.innerHTML = initial;

					span2.appendChild(span3);
					span1.appendChild(p1);
					div1.appendChild(span1);
					div1.appendChild(span2);
					if (msgId == 1) {
						msgCont.innerHTML = "";
						msgCont.appendChild(div1)
					}
					else {
						msgCont.appendChild(div1);	
					}
				}

				function loadOtherMsg(chatId,msg,msgId,initial) {
					var msgCont = document.querySelector(" .messageCont");
					var facilityNum = document.getElementById("tCol"+chatId+"_10").innerHTML;
					var issueNum = document.getElementById("tCol"+chatId+"_11").innerHTML;
					var div1 = document.createElement("div");
					div1.classList = "message1";
					div1.setAttribute("id","msgContainer"+msgId);
					var span1 = document.createElement("span");
					span1.classList = 'msgCont';
					span1.setAttribute("id","msgBox"+msgId);
					var p1 = document.createElement("p");
					p1.innerHTML = msg;;
					p1.setAttribute("id","msg"+msgId);
					var span2 = document.createElement("span");
					span2.classList = "senderIcon";
					var span3 = document.createElement("span");
					span3.innerHTML = initial;

					span2.appendChild(span3);
					span1.appendChild(p1);
					div1.appendChild(span2);
					div1.appendChild(span1);
					if (msgId == 1) {
						msgCont.innerHTML = "";
						msgCont.appendChild(div1)
					}
					else {
						msgCont.appendChild(div1);	
					}
				}

				function adjustMsg(id){
					var msg = document.getElementById("msg"+id).innerHTML;
					var msgBox = document.getElementById("msgBox"+id);
					var newWidth = 3*msg.length;
					if (newWidth <= 90) {
						newWidth = 2.5*msg.length
					}
					else {
						newWidth = 100;
					}
					msgBox.style.width = newWidth+"%";
					if (msg.length < 40) {
						msgBox.style.height = "fit-content";
					}
					else {
						msgBox.style.height = 'fit-content';
					}

				}
				

				var filterCont = document.querySelector(".filterCont");
				var filterBtn = document.querySelector(" .filterCont span");
				var filterIcon = document.querySelector(" .filterCont span i");
				var filterPara = document.querySelector(" .filterCont span p");
				var filterInput = document.querySelector(" .filterCont input");
				var filterMenu = document.querySelector (" .filterMenu");

				var counter3 = 0;
				filterBtn.addEventListener("click", () => {
					filterCont.classList.toggle("active");
					if (filterCont.classList == "filterCont active") {
						filterBtn.style.width = "80%";
						//filterBtn.style.transform = "translateX(20%)";
						filterInput.style.width = "100%";
						filterBtn.style.transition = "all .6s ease";
						filterPara.style.opacity = '0%';
						filterPara.style.transition = "all .6s ease";
						filterIcon.style.opacity = "0%";
						filterIcon.style.transition = "all .6s ease";
						var textAnime = setInterval(() => {
							if (counter3 > 0) {
								clearInterval(textAnime);
								counter3 = 0;
							}
							else {
								counter3++;
								filterPara.style.opacity = "100%";
								filterIcon.style.opacity = "100%";
								filterPara.style.transition = "all .6s ease";
								if (filterPara.innerHTML == "Filter") {
									filterPara.innerHTML = "Select Column To Filter";
									filterIcon.classList = "fas fa-chevron-down";
								}
							}
						},400)
						filterMenu.style.width = "20%";
						filterMenu.style.opacity = "100%";
						filterMenu.style.transition = "all .6s ease";
					}
					else {
						filterBtn.style.width = "7%";
						filterBtn.style.transition = "all .6s ease";
						filterMenu.style.width = "7%";
						filterMenu.style.opacity = "0%";
						filterMenu.style.transition = "all .6s ease";
						if (filterPara.innerHTML == "Select Column To Filter") {
							filterPara.innerHTML = "Filter"
							filterIcon.classList = "fas fa-filter";
						}
					}			
				})
				sessionStorage.setItem("listName1",'Issue');
				sessionStorage.setItem("iconName1",'bug');

				sessionStorage.setItem("listName2",'Facility');
				sessionStorage.setItem("iconName2",'hospital');

				sessionStorage.setItem("listName3",'Description');
				sessionStorage.setItem("iconName3",'memo-circle-info');

				sessionStorage.setItem("listName4",'Status');
				sessionStorage.setItem("iconName4",'list-check');

				sessionStorage.setItem("listName5",'Assigned Staff');
				sessionStorage.setItem("iconName5",'user-tag');

				sessionStorage.setItem("listName6",'Date of Submission');
				sessionStorage.setItem("iconName6",'calendar-days');

				function createFilterList(listId){
					var div = document.createElement("div");
					div.classList = "menuElement";
					div.addEventListener("click",() => {filterList(listId)});
					var p = document.createElement("p");
					p.setAttribute("id",'list'+listId);
					var i = document.createElement("i");
					i.setAttribute("id","listIcon"+listId);


					div.appendChild(p);
					div.appendChild(i)
					filterMenu.appendChild(div);
				}
				for (var y = 1; y <= 6; y++) {
					createFilterList(y);
					document.getElementById("list"+y).innerHTML = sessionStorage.getItem("listName"+y);
					document.getElementById("listIcon"+y).classList = "fad fa-"+sessionStorage.getItem("iconName"+y);
				}
				var parameter = 1;
				function filterList(k){
					filterPara.innerHTML = document.getElementById("list"+k).innerHTML;
					if (filterPara.innerHTML.length >= 10) {
						filterBtn.style.width = "17%";	
					}
					else {
						filterBtn.style.width = "10%";
					}

					filterIcon.classList += "fad fa-"+sessionStorage.getItem("iconName"+k);
					filterBtn.style.transition = "all .6s ease";
					filterMenu.style.width = "10%";
					filterMenu.style.opacity = "0%";
					filterMenu.style.transition = "all .6s ease";
					filterCont.classList.toggle("active");
					if (filterPara.innerHTML == 'Issue') {
						parameter = 2;
					}
					else if (filterPara.innerHTML == 'Facility') {
						parameter = 3;
					}
					else if (filterPara.innerHTML == 'Description') {
						parameter = 4;
					}
					else if (filterPara.innerHTML == "Status") {
						parameter = 5;
					}
					else if (filterPara.innerHTML == 'Assigned Staff') {
						parameter = 6;
					}
					else if (filterPara.innerHTML == 'Date of Submission') {
						parameter = 7;
					}
				}
				
				var searchBar = document.getElementById("search1");
				searchBar.addEventListener("keyup", () => {
					var input = searchBar.value;
					for (var w = 1; w <= rowNum; w++) {
						var rowElem = document.getElementById("tCol"+w+"_"+parameter).innerHTML;
						
						var regExp = new RegExp('\\b'+input,'i');

						if (regExp.test(rowElem)) {
							document.getElementById("tCol"+w+"_1").style.display = "table-cell";
							document.getElementById("tCol"+w+"_2").style.display = "table-cell";
							document.getElementById("tCol"+w+"_3").style.display = "table-cell";
							document.getElementById("tCol"+w+"_4").style.display = "table-cell";
							document.getElementById("tCol"+w+"_5").style.display = "table-cell";
							document.getElementById("tCol"+w+"_6").style.display = "table-cell";
							document.getElementById("tCol"+w+"_7").style.display = "table-cell";
							document.getElementById("trow"+w).style.display = "table-row";
						}
						else {
							document.getElementById("tCol"+w+"_1").style.display = "none";
							document.getElementById("tCol"+w+"_2").style.display = "none";
							document.getElementById("tCol"+w+"_3").style.display = "none";
							document.getElementById("tCol"+w+"_4").style.display = "none";
							document.getElementById("tCol"+w+"_5").style.display = "none";
							document.getElementById("tCol"+w+"_6").style.display = "none";
							document.getElementById("tCol"+w+"_7").style.display = "none";
							document.getElementById("trow"+w).style.display = "none";
						}
					}
				})
			}
			else if (sessionStorage.getItem("RowNum3") == 0) {
				
				var msg = "Lovely ! It looks like no issue  was reported from this state. any reported issue which is not visible, please contact the program engineer";

				var p1 = document.createElement("p");
				var table = document.querySelector(".innerTable");
				p1.innerHTML = msg;
				
				p1.classList = "emptyMsg";

				table.appendChild(p1);
			}
		}

	}

	//Javascript for the Registering new user
	function manage() {
		var errorStats = 
		'<?php 
			if (isset($_SESSION['errors2'])) {
				echo $_SESSION['errors2'];
			}
			else {
				echo "";
			}
		 ?>';

		document.getElementById("pageNum").value = 3;
		var postList = document.querySelector(".postList");
		var opt1 = document.querySelector("span");
		opt1.classList = "options";
		opt1.innerHTML = "State Admin";
		postList.appendChild(opt1)

		var selc = document.querySelector(" .selected");
		var selcP = document.getElementById("selcPara");
		var selcIcon = document.getElementById("selcIcon");
		var optionElem = document.querySelectorAll(" .options");

		//Display facility input box
		for (var i = 0; i < 7; i++) {
			if (i == 5) {
				optionElem[i].addEventListener("click",showFacilInput);
			}
			else {
				optionElem[i].addEventListener("click",closeFacilInput);
			}
		}

		//dropdown animation
		selc.addEventListener("click", () => {	
			postList.classList.toggle('active');
			if (postList.classList == "postList active") {
				selcIcon.style.transform = "rotateX(180deg)";
				selcIcon.style.transition = "all .6s ease";
				selc.style.borderBottom = "3px solid #499287";
			}
			else {
				selcIcon.style.transform = "rotateX(0deg)";
				selcIcon.style.transition = "all .6s ease";
				selc.style.borderBottom = "3px solid black";
			}
		})

		optionElem.forEach(o => {
			o.addEventListener("click", () => {
				selcP.innerHTML = o.innerHTML;
				document.getElementById("pos").value = o.innerHTML
				postList.classList.remove("active");
				selcIcon.style.transform = "rotateX(0deg)";
				selc.style.borderBottom = "3px solid black";
				selcIcon.style.transition = "all .6s ease";
			})
		})

		function showFacilInput() {
			var optCont = document.querySelectorAll(".dropDown");
			optCont[2].style.opacity = "100%";
			optCont[2].style.zIndex = "0";
			optCont[2].style.transition = "all .5s ease";
		}

		function closeFacilInput() {
			var optCont = document.querySelectorAll(".dropDown");
			optCont[2].style.opacity = "0%";
			optCont[2].style.zIndex = "-1";
			optCont[2].style.transition = "all .5s ease";
		}

		var postList3 = document.querySelector(".postList3");
		var selc3 = document.querySelector(".selected3");
		var selcP3 = document.getElementById("selcPara3");
		var selcIcon3 = document.getElementById("selcIcon3");
		var optionElem3 = document.querySelectorAll(".options3");
		
		
		//dropdown animation
		selc3.addEventListener("click", () => {	
			postList3.classList.toggle('active');
			if (postList3.classList == "postList3 active") {
				selcIcon3.style.transform = "rotateX(180deg)";
				selcIcon3.style.transition = "all .6s ease";
				selc3.style.borderBottom = "3px solid #499287";
			}
			else {
				selcIcon3.style.transform = "rotateX(0deg)";
				selcIcon3.style.transition = "all .6s ease";
				selc3.style.borderBottom = "3px solid black";
			}
		})

		optionElem3.forEach(o => {
			o.addEventListener("click", () => {
				selcP3.innerHTML = o.innerHTML;
				document.getElementById("stateVal").value = o.innerHTML
				postList3.classList.remove("active");
				selcIcon3.style.transform = "rotateX(0deg)";
				selc3.style.borderBottom = "3px solid black";
				selcIcon3.style.transition = "all .6s ease";
			})
		})

		for (var k = 0; k < 3; k++) {
			optionElem3[k].onclick = function () {
				filterState(this.innerHTML)
			}	
		}	

		//showing the facility based on the state selected
		function filterState(state){
			var xhttp4 = new XMLHttpRequest();
			xhttp4.onload = function () {
				//alert(this.responseText);
				document.querySelector(".postList2").innerHTML = this.responseText;
				var postList2 = document.querySelector(".postList2");
				var selc2 = document.querySelector(" .selected2");
				var selcP2 = document.getElementById("selcPara2");
				var selcIcon2 = document.getElementById("selcIcon2");
				var optionElem2 = document.querySelectorAll(" .options2");
				
				//dropdown animation
				selc2.addEventListener("click", () => {	
					postList2.classList.toggle('active');
					if (postList2.classList == "postList2 active") {
						selcIcon2.style.transform = "rotateX(180deg)";
						selcIcon2.style.transition = "all .6s ease";
						selc2.style.borderBottom = "3px solid #499287";
					}
					else {
						selcIcon2.style.transform = "rotateX(0deg)";
						selcIcon2.style.transition = "all .6s ease";
						selc2.style.borderBottom = "3px solid black";
					}
				})

				optionElem2.forEach(o => {
					
					o.addEventListener("click", () => {
						
						selcP2.innerHTML = o.innerHTML;
						document.getElementById("facil2").value = o.innerHTML
						postList2.classList.remove("active");
						selcIcon2.style.transform = "rotateX(0deg)";
						selc2.style.borderBottom = "3px solid black";
						selcIcon2.style.transition = "all .6s ease";
					})
				})
			}
			xhttp4.open("POST","tracking-inc.php");
			xhttp4.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp4.send("filterState="+state);
		}
		 var mail = 
		 '<?php
		 	if (isset($_SESSION['mail'])) {
		 		echo $_SESSION['mail'];
		 	}
		 	else {
		 		echo "";
		 	}
		  ?>';

		  var tempPass = 
		  '<?php
		  	if (isset($_SESSION['tempPass'])) {
		  		echo $_SESSION['tempPass'];
		  	}
		  	else {
		  		echo "";
		  	}
		   ?>';

		  var fName =
		  '<?php
		  	if (isset($_SESSION['uname'])) {
		  		echo $_SESSION['uname'];
		  	}
		  	else {
		  		echo "";
		  	}
		   ?>';

		   var posVal = 
		   '<?php 
		   	if (isset($_SESSION['new_pos'])) {
		   		echo $_SESSION['new_pos'];
		   	}
		   	else {
		   		echo "";
		   	}
		   ?>';

		   var facil_Name = 
		   '<?php 
		   	if (isset($_SESSION['facilValue'])) {
		   		echo $_SESSION['facilValue'];
		   	}
		   	else {
		   		echo "";
		   	}
		   ?>';

		   var stateName = 
		   '<?php 
		   	if (isset($_SESSION['stateVal'])) {
		   		echo $_SESSION['stateVal'];
		   	}
		   	else {
		   		echo "";
		   	}
		   ?>';
		//Mail Function
		function sendMail(userMail,userName,userPos,stateVal,facilName,tempPassword){
		
				Email.send({
			    Host : 'smtp.elasticemail.com',
			    Username : 'dweb734@gmail.com',
			    Password : '7BCBAF34E2E044C32BEC45BF4F03AFBF4B00',
			    To : userMail,
			    From : 'dweb734@gmail.com',
			    Subject : 'Welcoming You',
				Body : `<div style="width:100%; height:550px; background-color:#f2f2f2; margin-left:auto; margin-right:auto; font-family:'Verdana',sans-serif;">
							<table border="1px" style="width:55%; min-width:445px; height:100%; max-height:650px; margin-left:auto; margin-right:auto; border-collapse:collapse; border:.5px solid rgba(0, 0, 0, .0);">
								<tr style="height:17%; min-height:65px; background-color:#446097; color:white;">
									<td align="left" style="width:150px; padding-left:40px; border:.5px solid rgba(0, 0, 0, .0);">
										<img src="https://i.ibb.co/XyHwqfP/logo.png" style="width:90%; margin-top:5px;">
									</td>
									<td align="left" style="padding-left:40px; font-size:clamp(20px, 2.6vw, 40px);">
										Issue Tracking
									</td>
								</tr>
								<tr>
									<td colspan = "2" align="center"  style = "background-color:white; border:.5px solid rgba(0, 0, 0, .0);">
										<div style="width:90%; height:85%;" align="left">
											<div style="font-size:clamp(20px, 1.7vw, 30px); text-transform:capitalize;">Dear `+userName+`,</div>
											<div style="font-size:clamp(13px, 1.2vw, 20px); line-height:1.6; margin-top:10px;">
												You have been registered to our issue tracking tool, GGHN. You were register as `+userPos+` for `+facilName+` in `+stateVal+` State. You will be reporting to  your State Admin, they will be in charge assigning any reported issue. In case of any enquiry about the system you may contact the State Admin. Your Username for your account is `+userMail+` and your Temporary Password is `+tempPassword+`. Click the link below to set up your password  Thank You 
											</div>
											<div style ='height:20%; width:100%;  margin-top:20px;'>
												<i style ='color:#d9d9d9;'>Note : if the name above is not your or you do not work in GGHN. Please ignore thanks</i>
											</div>
										</div>
									</td>
								</tr>
								<tr style="background-color:white; border:.5px solid rgba(0, 0, 0, .0);">
									<td colspan="2" style="height:65px;">
										<a href ='localhost/Issue_Tracking/login2.php' style='text-decoration:none; cursor:pointer;'>
											<button style = 'width:22%; min-width:200px; height:70%; min-height:45px; margin-left:30px; background-color:#23907a; border:none; border-radius:10px; color:white; font-size:clamp(12px, 1vw, 17px); cursor:pointer;'>Setup Password</button>
										</a>
									</td>
								</tr>
							</table>
						</div>` 
				}).then(
			  		message => message == "OK" ?  console.log(message): alert(message),
				);
		}

		//running function based on any error rasied or not
		if (errorStats == "no error") {
			sendMail(mail,fName,posVal,stateName,facil_Name,tempPass);
			var counter5 = 0;
			var appearAnime = setInterval(() => {
				if (counter5 > 0) {
					clearInterval(appearAnime);
					counter5 = 0;
				}
				else{
					counter5++;
					document.getElementById("regStats").style.opacity = "100%";
					document.getElementById("regStats").style.transition = "all .7s ease";
				}
			},500)

			var disAppearAnime = setInterval(() => {
				if (counter5 > 0) {
					clearInterval(disAppearAnime);
					counter5 = 0;
				}
				else {
					counter5++;
					document.getElementById("regStats").style.opacity = "0%";
					document.getElementById("regStats").style.transition = "all .7s ease";
				}
			},5000)
		}	

		//removing the register successful prompt
		var counter6 = 0;
		var removeSession = setInterval(() => {
			if (counter6 > 0) {
				clearInterval();
			}
			else {
				counter6++;
				var xhttp3 = new XMLHttpRequest();
				xhttp3.onload = function () {
					//alert(this.responseText);
				}
				xhttp3.open("POST","tracking-inc.php");
				xhttp3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp3.send("delSess=yess");
			}
		},1000) 
	}

	//Javascript for add new issu
	function regissue(){
		document.getElementById("pageNum").value = 3;
		var dptPoint1 = document.getElementById("deptPoint1");
		var dptPoint2 = document.getElementById("deptPoint2");
		var dptPoint3 = document.getElementById("deptPoint3");
		var dptPoint4 = document.getElementById("deptPoint4");

		dptPoint1.addEventListener("click", () => {selcPoint(1)});
		dptPoint2.addEventListener("click", () => {selcPoint(2)});
		dptPoint3.addEventListener("click", () => {selcPoint(3)});
		dptPoint4.addEventListener("click", () => {selcPoint(4)});


		function selcPoint(val){
			for (var i = 1; i <= 4; i++) {
				if (i == val) {
					document.getElementById("deptPoint"+i).classList.toggle("active");
					var selcVal = document.getElementById("deptPoint"+i).innerHTML;
					if (selcVal == "M&amp;E Department" ) {
						selcVal = "M&E Department";
						document.getElementById("selcDept1").value = selcVal;
					}
					else {
						document.getElementById("selcDept1").value = selcVal;
					}

				}
				else {
					document.getElementById("deptPoint"+i).classList = "deptPoint";
				}
			}
			
		}
	}

</script>
</html>