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
		height:13%;
		display:flex;
		justify-content:space-between;
		background-color:#f2f2f2;
		box-shadow:0px 4px 5px black;
		z-index:1;
	}
	.header .sect1{
		width:25%;
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
		align-items:flex-end;
		flex-direction:column;	
/*		transform:translateX(-20%);	*/
/*		background-color:yellow;*/
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
		transform:translateX(-90%);
	}
	.header .sect3{
		width:45%;
		height:100%;
		display:flex;
		justify-content:flex-end;
		align-items:center;
/*		background-color:blue;*/
	}
	.header .sect3 a{
		width:25%;
		height:50%;
		max-height:60px;
		text-decoration:none;
		margin-left:20px;
	}
	.header .sect3 a:nth-child(4){
		margin-right:10px;
	}
	.header .sect3 a:nth-child(1),.sect3 a:nth-child(2){
		width:30%;
	}
	.header .sect3 button{
		width:100%;
		height:100%;
		border:none;
		border-radius:10px 10px 0px 0px;
		font-size:clamp(8px, .9vw, 16px);
		display:flex;
		cursor:pointer;
		justify-content:space-evenly;
		align-items:center;
		font-family:'Hibana',sans-serif;
		background-color:rgba(79, 103, 150,.5);
		border-bottom:4px solid rgba(79, 103, 150,0);
		color:#737373;
		transition:all .4s ease;
	}
	.header .sect3 button.active{
		border-bottom:4px solid #1f6053;
		color:#232e43;
	}
	.header .sect3 button:hover{
		background-color:rgba(79, 103, 150,.8);
		color:white;
		box-shadow:2px 2px 4px rgba(0, 0, 0, .4);
		border-bottom:4px solid rgba(52, 193, 229,.7);
	}
	.header .sect3 button.active:hover{
		border-bottom:4px solid #1f6053;
	}
	.header .sect3 a:nth-child(4) button{
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
		color:black;
		transition:all .3s ease;
	}
	.header .sect3 a:nth-child(4) button:hover{
		box-shadow:0px 0px 5px 3px rgba(58, 146, 128,.6);
	}
	.navBar{
		width:100%;
		height:11%;
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
	.tabs.active{
		background-color:#f2f2f2;
		box-shadow:0px 0px 5px 5px rgba(0, 0, 0, .4);
		color:black;
	}
	.content{
		width:100%;
		height:67%;
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
	.filterCont{
		width:100%;
		height:15%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		box-shadow:0px 3px 5px rgba(0,0,0,.6);
	}
	.filterCont input{
		width:26%;
		height:63%;
		font-size:clamp(13px, 1.25vw, 25px);
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
		width:7%;
		height:68%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		font-size:clamp(11px, 1.1vw, 20px);
		font-family:'Comfortaa',sans-serif;
		border-radius:0px 5px 5px 0px;
		background-color:#e6e6e6;
		box-shadow:-2px 0px 5px rgba(0, 0, 0, .3);
		cursor:pointer;
	}
	.filterCont span:hover i{
		color:#427065;
	}
	.filterCont span i{
		font-size:clamp(14px, 1.55vw, 30px);
	}
	.filterCont i:nth-child(1){
		margin-left:40px;
		margin-right:-50px;
		font-size:clamp(13px, 1.25vw, 25px);
	}
	.filterMenu{
		width:7%;
		height:200px;
		max-height:200px;
		opacity:0%;
		z-index:-1;
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
		width:100%;
		height:40%;
		padding:15px 0px 15px;
		font-size:clamp(11px, 1.1vw, 20px);
		cursor:pointer;
		display:flex;
		justify-content:space-between;
		font-family:'Montserrat',sans-serif;
		transition:all .3s ease;
	}
	.menuElement i{
		font-size:20px;
		margin-right:clamp(14px, 1.55vw, 30px);
		color:#b36b00;
	}
	.menuElement p{
		margin-left:15px;
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
		transform:translate(35%,-550%);
		width:65%;
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
		width:2200px;
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
	form{
		width:100%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:flex-start;

	}
	.statusChanger{
		width:50%;
		height:65%;
		border-radius:10px;
		box-shadow:-1px 1px 5px rgba(0, 0, 0, .7);
		display:flex;
		justify-content:space-between;
		flex-direction:column;
		background-color:white;
		transform:translateY(10%);
		animation:appear .5s ease;
	}
	.topPart{
		width:100%;
		height:20%;
		display:flex;
		align-items:center;
		justify-content:space-between;
		background-color:#35526e;
		border-radius:10px 10px 0px 0px;
	}
	.topPart .sect1{
		width:90%;
		height:100%;
		display:flex;
		align-items:center;
		justify-content:flex-start;
	}
	.topPart .sect1 i{
		font-size:27px;
		margin-left:30px;
	}
	.topPart .sect1 p{
		font-size:20px;
		font-family:'Hibana',sans-serif;
		margin-left:10px;
		color:white;
	}
	.topPart .sect2{
		width:10%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		transition:all .6s ease;
		cursor:pointer;
		border-radius:0px 10px 0px 0px;
	}
	.topPart .sect2:hover{
		box-shadow:-2px 0px 3px rgba(0, 0, 0, .7);
		color:#d93f3f;
		background-color:#9b4b4b;
	}
	.topPart .sect2 i{
		font-size:25px;
		cursor:pointer;
	}
	.contentPart{
		width:100%;
		height:60%;
		display:flex;
		flex-wrap:wrap;
	}
	.contentPart .timeline{
		width:100%;
		height:32%;
		display:flex;
		align-items:center;
		justify-content:space-evenly;
		transform:translateY(101.5%);
		background-color:white;
		z-index:1;
	}
	.timeline .checkPoint{
		width:7%;
		height:75%;
		border-radius:50%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		color:white;
		font-size:18px;
		font-family:'Comfortaa',sans-serif;
		background-color:rgba(62, 106, 117,.5);
		box-shadow:1.5px 1.5px 3px rgba(0, 0, 0, .7);
		transition:all .5s ease 1.2s;
	}
	.timeline .checkPoint i{
		color:black;
		transition:all .5s ease 1.2s;
	}
	.timeline .checkPoint.active1{
		width:7%;
		height:75%;		
		font-weight:bolder;
		background-color:rgba(203, 77, 77,.7);
	}
	.timeline .checkPoint.active1 i{
		color:#9e2e2e;
	}
	.timeline .checkPoint.active2{
		width:7%;
		height:75%;		
		font-weight:bolder;
		background-color:rgba(231, 144, 101,.7);
	}
	.timeline .checkPoint.active2 i{
		color:#cc4400;
	}
	.timeline .checkPoint.active3{
		width:7%;
		height:75%;		
		font-weight:bolder;
		background-color:rgba(55, 149, 143,.7);
	}
	.timeline .checkPoint.active3 i{
		color:#225d59;
	}
	@keyframes pop{
		0%{
			width:7%;
			height:75%;
		}
		50%{
			width:10%;
			height:100%;
		}
		100%{
			width:7%;
			height:75%;
		}
	}
	.timeline .point{
		width:1%;
		height:10%;
		border-radius:50%;
		background-color:rgba(84, 120, 156,.4);
	}
	.timeline .point.active{
		background-color:rgba(84, 120, 156);
	}
	.contentPart .Pointlabel{
		width:100%;
		height:32%;
		display:flex;
		align-items:center;
		justify-content:space-between;
		z-index:0;
		transform:translateY(-55%);
	}
	.Pointlabel .label{
		width:17%;
		height:70%;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:10px;
		font-size:14px;
		font-family:'Hibana',sans-serif;
		background-color:rgba(0, 0, 0, .6);
		backdrop-filter:blur(9px);
		color:white;
		box-shadow:3px 3px 2px rgba(0, 0, 0, .5);
		border:none;
	}
	.Pointlabel .label:nth-child(1){
		margin-left:10px;
		transition:all .5s ease;
	}
	.Pointlabel .label:nth-child(2){
		transition:all .5s ease 1.2s;
	}
	.Pointlabel .label:nth-child(3){
		margin-right:10px;
		transition:all .5s ease 1.2s;
	}
	.Pointlabel .label.active{
		transform:translateY(-140%);
		animation:float 1s ease .5s infinite;
	}
	.Pointlabel .label.active3{
		transform:translateY(-140%);
		animation:float 1s ease 1.7s infinite;
	}
	.Pointlabel .label.active2{
		transform:translateY(140%);
		animation:float2 1s ease 1.7s infinite;
	}
	@keyframes float{
		0%{
			transform:translateY(-140%);
		}
		50%{
			transform:translateY(-135%);
		}
		100%{
			transform:translateY(-140%);
		}
	}
	@keyframes float2{
		0%{
			transform:translateY(140%);
		}
		50%{
			transform:translateY(135%);
		}
		100%{
			transform:translateY(140%);
		}
	}
	.btnPart{
		width:100%;
		height:20%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.btnPart button{
		width:30%;
		height:70%;
		border-radius:20px;
		border:none;
		display:flex;
		justify-content:center;
		align-items:center;
		color:white;
		font-size:15px;
		font-family:'Comfortaa',sans-serif;
		background-color:rgba(58, 98, 136,.7);
		cursor:pointer;
		transition:all .4s ease;
		box-shadow:-1px 2px 5px rgba(0, 0, 0, .5);
	}
	.btnPart i:nth-child(1){
		margin-left:10px;
	}
	.btnPart i:nth-child(2){
		opacity:0%;
		transition:all .2s linear .2s;
	}
	.btnPart i:nth-child(3){
		opacity:0%;
		transition:all .2s linear;
	}
	.btnPart button:hover i:nth-child(2){
		opacity:100%;
		transition:all .2s linear;	
	}
	.btnPart button:hover i:nth-child(3){
		opacity:100%;
		transition:all .2s linear .2s;
	}
	.btnPart button:hover{
		background-color:#44887c;
		box-shadow:-1px 2px 5px rgba(0, 0, 0, .7);
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
		height:73%;
		display:flex;
		justify-content:flex-start;
		flex-direction:column;
		overflow-y:scroll;
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

	.replyCont{
		width:100%;
		height:19%;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#d9d9d9;
	}
	.replyCont input{
		width:70%;
		height:70%;
		border-radius:10px 0px 0px 10px;
		border:none;
		box-shadow:inset 0px 0px 5px 3px rgba(0, 0, 0, .3);
		outline:none;
		padding-left:10px;
		font-family:'Montserrat',sans-serif;
	}
	.replyCont input:focus{
		box-shadow:0px 0px 5px 3px rgba(0, 0, 0, .3);
	}
	.replyCont button{
		width:15%;
		height:75%;
		border-radius:0px 10px 10px 0px;
		border:none;
		background-color:#3c7aaa;
		font-family:'Comfortaa',sans-serif;
		color:white;
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
	td:nth-child(3) span{
		padding:7px;
		border-radius:10px;
	}
	td:nth-child(5) button{
		width:85%;
		padding:7px 10px;
		display:flex;
		justify-content:space-between;
		align-items:center;
		border-radius:5px;
		background-color:rgba(53, 101, 146,.7);
		border:none;
		color:white;
		font-family:'Comfortaa',sans-serif;
		cursor:pointer;
		transition:all .5s ease;
		text-transform:capitalize;
	}
	td:nth-child(5) button:hover {
		background-color:#42709e;
		box-shadow:0px 0px 6px 2px rgba(0, 0, 0, .3);
	}
	td:nth-child(5) button i{
		color:black;
		transition:all .5s ease;
	}
	td:nth-child(5) button:hover i{
		color:#50af9f;
		
	}
	td:nth-child(5) {
		width:8%;
	}
	td:nth-child(5) i{
		font-size:20px;
		margin-left:20px;
	}
	td:nth-child(7){
		text-transform:lowercase;
	}
	td:nth-child(8) button{
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
	td:nth-child(8) button:hover{
		box-shadow:0px 0px 5px 3px rgba(53, 39, 23, .3);
		background-color:#53a295;
		color:black;
	}
	td:nth-child(8) button i{
		color:#e0cdb8;
		font-size:15px;
	}
	td:nth-child(8) button:hover i{
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
			<p style="text-transform: capitalize;"><?php echo $_SESSION['sessionfname1']?></p>
		</div>

		<div class="sect2">
			<p>Issue Tracking <i class="fad fa-clipboard"></i></p>
			<p>Dashboard</p>
		</div>

		<div class="sect3">
			<a href="tracking_page.php"><button class="active">Assigned Issue </button></a>
			<a href="issue_history.php"><button>Reported Issue </button></a>
			<a href="complaint_form.php"><button>Issue Form </button></a>
			<a href="index.php"><button>Logout <i class="fad fa-right-to-bracket" style="font-size:18px;"></i></button></a>
		</div>
	</div>

	<div class="navBar">
		<div class="tabs" id="tab1" onclick="tabMove(1)">
			<i class="fad fa-server"></i>
			<p>facility Issues</p>
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
<?php 
	require 'Includes/database.php';
	//Retriving the issue from the table based on all issue assigned to this staff
	$sql1 = "SELECT * FROM users WHERE User_Name = '{$_SESSION['sessionuname1']}'";
	$query1 = mysqli_query($conn,$sql1);
	$data1 = $query1->fetch_assoc();
	echo "<script>sessionStorage.setItem('troubleshooter_chatID','{$data1['chat_id']}')</script>";
	$sql2 = "SELECT * FROM issue_tracking WHERE Assigned_staff_uname = '{$data1['User_Name']}' AND second_stats = 'Open' ORDER BY date_val DESC";
	// echo $data1['Fullname'];
	$query2 = mysqli_query($conn,$sql2);
	$i = 0;
	$k = 0;
	if ($query2->num_rows > 0) {
		while ($rowData1 = $query2->fetch_assoc()) {
			$i++;
			$innerSql = "SELECT * FROM users WHERE Fullname = '{$rowData1['reporter']}'";
			$innerQuery = mysqli_query($conn,$innerSql);

			$innerData = $innerQuery->fetch_assoc();
			echo 
			"<script>
			sessionStorage.setItem('issueID$i','{$rowData1['Issue_No']}')
			sessionStorage.setItem('issue$i','{$rowData1['Issue']}');
			sessionStorage.setItem('depart$i','{$rowData1['Department']}');
			sessionStorage.setItem('description$i','{$rowData1['Description']}');
			sessionStorage.setItem('status$i','{$rowData1['Status']}');
			sessionStorage.setItem('compl$i','{$rowData1['reporter']}');
			sessionStorage.setItem('complInfo$i','{$rowData1['contact_Info']}');
			sessionStorage.setItem('date$i','{$rowData1['date_val']}');
			sessionStorage.setItem('reporter_chatID$i','{$innerData['chat_id']}');
			sessionStorage.setItem('RowNum',{$i});
			</script>
			";
			$_SESSION['RowNum'] = $i;
		}
	}
	else {
		$_SESSION['RowNum'] = 0;
		$emptyMsg = "Lovely ! It looks like all assigned issue have been solved and closed, if an assigned issue is missing or not visible, Contact your state admin.";

		echo "<script>
				sessionStorage.setItem('emptyTable','$emptyMsg')
				sessionStorage.removeItem('RowNum',{$i})
			</script>";
	}
		

?>
<script type="text/javascript">
	//navigate through the dashboards	
	if (sessionStorage.getItem("pageNum")){
		var num = sessionStorage.getItem("pageNum");		
		var xhttp2 = new XMLHttpRequest();
		xhttp2.onload = function () {
			document.querySelector(" .content").innerHTML = this.responseText;
			var tabElem = document.getElementById("tab"+num);
			tabElem.classList = "tabs active";
			//alert(this.responseText);
			if (num == 1) {
				issueJS();
			}
		}
		xhttp2.open("POST","tracking-inc.php");
		xhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp2.send("pageNum="+num)
	}

	function tabMove(o){
		for (var j = 1; j <= 3; j++) {
			if (j == o) {
				var tab = document.getElementById("tab"+o);
				tab.classList = "tabs active";
				var xhttp = new XMLHttpRequest();
				xhttp.onload = function () {
					document.querySelector(" .content").innerHTML = this.responseText;
					//alert(this.responseText);
					issueJS();
				}
				xhttp.open("POST","tracking-inc.php");
				xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp.send("pageNum="+o);
				sessionStorage.setItem("pageNum",o);
			}
			else {
				/*var tab = document.getElementById("tab"+j);
				tab.classList = "tabs";	*/
			}
		}
	}
	
	//creating the rows for the table based on how many result return from the database after the condition set
	function createRow(r){
		var table = document.querySelector(" .tableCont table");
		var tr1 = document.createElement('tr');
		tr1.setAttribute('id','trow'+r);

		table.appendChild(tr1);
	}

	//javascript for the issue dashbaord
	function issueJS(){
		if (sessionStorage.getItem("RowNum")) {
			var rowNum = sessionStorage.getItem("RowNum");
			
			var usedNum = [];
			//Filling each column with the right data
			for (var i = 1; i <= rowNum; i++) {
				createRow(i);
				var issue = sessionStorage.getItem("issue"+i);
				var department = sessionStorage.getItem("depart"+i);
				var desc = sessionStorage.getItem("description"+i);
				var compl = sessionStorage.getItem("compl"+i);
				var complInfo = sessionStorage.getItem("complInfo"+i);
				var AsStaff = sessionStorage.getItem("AsStaff"+i);
				var status = sessionStorage.getItem("status"+i);


				if (status == '') {
					status = 'Not Solved';
				}
				else {
					status = status;
				}
				var date = sessionStorage.getItem("date"+i);
				for (var j = 1; j <= 9; j++) {
					createColumn(i,j);
				}

				document.getElementById("tCol"+i+"_1").innerHTML = i;
				document.getElementById("tCol"+i+"_2").innerHTML = issue;
				document.getElementById("tCol"+i+"_3").innerHTML = department;
				document.getElementById("tCol"+i+"_4").innerHTML = desc;
				if (status == "resolved" || status == "resolved ") {
					document.getElementById("tCol"+i+"_5").innerHTML = status + "<i class = 'fas fa-star'></i></button>";
				}
				else if (status == "processing" || status == "processing ") {
					document.getElementById("tCol"+i+"_5").innerHTML = status + "<i class = 'fas fa-star-half-stroke'></i></button>";
				}
				else if (status == "unsolved" || status == "unsolved ") {
					document.getElementById("tCol"+i+"_5").innerHTML = status + "<i class = 'far fa-star'></i></button>";
				}
				document.getElementById("tCol"+i+"_6").innerHTML = compl;
				document.getElementById("tCol"+i+"_7").innerHTML = complInfo;
				
				document.getElementById("tCol"+i+"_9").innerHTML = date;

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
		
			//changing the status of an issue i.e from unsolved to provessing
			function changeStats(num){
				document.querySelector(".smallerBanner").style.zIndex = '1';
				document.getElementById("statusForm").style.display = "flex";
				document.querySelector(" .statusChanger").style.display = "flex";
				document.getElementById("statusForm").style.animation = "appear .5s ease"
				document.querySelector(".statusChanger").style.animation = "appear .5s ease"
				document.getElementById("statusForm").style.opacity = "100%";
				document.querySelector(".statusChanger").style.opacity = "100%";
				var checkPoint = document.querySelectorAll(".checkPoint");
				var points = document.querySelectorAll(".point");
				var label = document.querySelectorAll(".label");

				var issueNum = sessionStorage.getItem("issueID"+num);
				var facilNum = sessionStorage.getItem("facility"+num);
				var stats = sessionStorage.getItem("status"+num);
				var counter = 0;
				if (stats == "unsolved") {
					var popLabel = setInterval(() => {
						if (counter > 0) {
							clearInterval(popLabel);
						}
						else {
							counter++;
							document.querySelector(".label:nth-child(1)").classList = "label active";

						}
					},200)
				}
				else if (stats == "processing") {
					
					var popLabel = setInterval(() => {
						if (counter > 1) {
							clearInterval(popLabel);
							counter = 0;
						}
						else if (counter == 1) {
							counter++;
							
							for (var t = 0; t < 12; t++) {

								points[t].classList = "point active";
								points[t].style.transition = "all .1s ease "+t/10+"s";
							}
							checkPoint[1].classList = "checkPoint active2";
							checkPoint[1].style.animation = "pop .4s ease 1.2s";
							label[1].classList = "label active2";
						}
						else if (counter == 0) {
							counter++;
							document.querySelector(".label:nth-child(1)").classList = "label active";
						}
					},200)
				}
				else if (stats == "resolved") {
					
					var popLabel = setInterval(() => {
						if (counter > 1) {
							clearInterval(popLabel);
							counter = 0;
						}
						else if (counter == 1) {
							counter++;
							
							for (var t = 0; t < 12; t++) {

								points[t].classList = "point active";
								points[t].style.transition = "all .1s ease "+t/10+"s";
							}
							checkPoint[1].classList = "checkPoint active2";
							checkPoint[1].style.animation = "pop .4s ease 1.2s";
							label[1].classList = "label active2";
						}
						else if (counter == 0) {
							counter++;
							document.querySelector(".label:nth-child(1)").classList = "label active";
						}
					},200)

					var popLabel2 = setInterval(() => {
						if (counter > 0) {
							clearInterval(popLabel2);
							counter = 0;
						}
						else {
							counter++;
							
							var pointID = 0;
							for (var t = 12; t < 24; t++) {
								points[t].classList = "point active";
								points[t].style.transition = "all .1s ease "+pointID/10+"s";
								pointID++;
							}
							checkPoint[2].classList = "checkPoint active3";
							checkPoint[2].style.animation = "pop .4s ease 1.2s";
							label[2].classList = "label active3";
						}
					},2000)
				}
					
				document.getElementById("prog1").onclick = function () {
					var issueStats = stats;
					
					if (issueStats == "unsolved") {
						for (var t = 0; t < 12; t++) {
							points[t].classList = "point active";
							points[t].style.transition = "all .1s ease "+t/10+"s";
						}
						checkPoint[1].classList = "checkPoint active2";
						checkPoint[1].style.animation = "pop .4s ease 1.2s";
						label[1].classList = "label active2";
						var newStats = "processing";
						sendToTheBack(issueNum,newStats);
					}
					else if (issueStats == "processing") {
						var pointID = 0;
						for (var t = 12; t < 24; t++) {
							points[t].classList = "point active";
							points[t].style.transition = "all .1s ease "+pointID/10+"s";
							pointID++;
						}
						checkPoint[2].classList = "checkPoint active3";
						checkPoint[2].style.animation = "pop .4s ease 1.2s";
						label[2].classList = "label active3";
						var newStats = "resolved";
						sendToTheBack(issueNum,newStats);
					}
				}

				document.getElementById("issueId").innerHTML = "Status Progress : Issue #"+facilNum+"-"+issueNum;
				
			}

			//sending data to the back end to update the status of the issue being progress
			function sendToTheBack(id,status){
				
				var xhttp3 = new XMLHttpRequest();
				xhttp3.onload = function () {
					var counter2 = 0;
					var reload = setInterval(() => {
						if (counter2 > 0) {
							clearInterval(reload);
						}
						else {
							counter2++;
							window.location.href = this.responseText;
						}
					},2300)
				}
				xhttp3.open("POST","tracking-inc.php");
				xhttp3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp3.send("statText="+status+"&issueReg="+id);
			}

			//Closing the change status banner
			document.getElementById("closeIcon1").addEventListener("click",() => {
				var checkPoint = document.querySelectorAll(".checkPoint");
				var points = document.querySelectorAll(".point");
				var label = document.querySelectorAll(".label");

				document.getElementById("statusForm").style.opacity = "0%";
				document.querySelector(".statusChanger").style.opacity = "0%";
				document.getElementById("statusForm").style.transition = "all .5s ease";
				document.querySelector(".statusChanger").style.transition = "all .5s ease";

				var counter4 = 0;
				var closeBanner = setInterval(() => {
					if (counter4 > 0) {
						clearInterval(closeBanner);
						counter4 = 0;
					}
					else {
						counter4++;
						document.querySelector(".smallerBanner").style.zIndex = '-1';
						document.getElementById("statusForm").style.display = "none";
						document.querySelector(".statusChanger").style.display = "none";
						document.getElementById("statusForm").style.animation = "none";
						document.querySelector(".statusChanger").style.animation = "none";
						for (var r = 0; r < 24; r++) {
							label[0].classList = "label";
							points[r].classList = "point";
							points[r].style.transition = "none";
							checkPoint[1].classList = "checkPoint";
							checkPoint[1].style.animation = "none";
							label[1].classList = "label";
							checkPoint[2].classList = "checkPoint";
							checkPoint[2].style.animation = "none";
							label[2].classList = "label";
						}
					}
				},500)
			})

			var counter6 = 0;
			//Opening the chat banner
			var msgObjNum = 0;
			var reporter = "";
			var fullname = "";
			var messageKey = "";
			function openChat(row_ID){

				var row_dept = document.getElementById("tCol"+row_ID+"_3").innerHTML;
				var dept_short = row_dept.length > 3 ? row_dept.slice(0,3) : row_dept;
				var issueID = sessionStorage.getItem('issueID'+row_ID);
				

				document.querySelector(".messageCont").innerHTML = "";
				document.querySelector(".smallerBanner").style.zIndex = "1";
				document.querySelector(" .chatCont").style.opacity = "100%";
				document.querySelector(" .chatCont").style.display = "flex";
				reporter = sessionStorage.getItem("compl"+row_ID);
				
				document.getElementById("otheruser").innerHTML = reporter;
				var splitname = reporter.split(" ");
				var initials = splitname[0].slice(0,1) + splitname[1].slice(0,1);
				initials1 = initials.toUpperCase();
				document.getElementById("initial1").innerHTML = initials1;

				fullname = '<?php echo $data1['Fullname']?>'
				var splitname2 = fullname.split(" ");
				var initials_2 = splitname2[0].slice(0,1) + splitname2[1].slice(0,1);
				initials2 = initials_2.toUpperCase();
				messageKey = sessionStorage.getItem("reporter_chatID"+row_ID) + "-" + sessionStorage.getItem("troubleshooter_chatID") + "-" + dept_short.toUpperCase() + "-0"+issueID;

				
				var xhttp4 = new XMLHttpRequest();
				xhttp4.onload = function (){
					// alert(this.responseText);
					loadMsgs(this.responseText);
				}
				xhttp4.open("POST","tracking-inc.php");
				xhttp4.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp4.send("msgKey="+messageKey);

				//checking for new msg
				var counter6 = 0;
				var newMsgChecker = setInterval(() => {
					if (counter6 > 0) {
						clearInterval(newMsgChecker);
					}
					else {
						liveChat();
					}
				},1000)
			}
				


			//loading the chats functions
			function liveChat(){
				var xhttp6 = new XMLHttpRequest();
				xhttp6.onload = function () {
					// alert(this.responseText)
					loadMsgs(this.responseText);
				}
				xhttp6.open("POST","tracking-inc.php");
				xhttp6.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp6.send("message_key="+messageKey+"&message_length="+msgObjNum);
			}

			//function to close the chat banner
			document.getElementById("closemark").addEventListener("click",closeChat)

			function closeChat() {
				var counter = 0;
				counter6 = 1;
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

			function loadMsgs(msg){
				if (msg != "no message" || msg != "no new message"){
					var messages = msg+"}";
					// alert(messages);
					var msgObj = JSON.parse(messages);
					msgObjNum = Object.keys(msgObj).length;
						
					for (var t = 1; t <= msgObjNum; t++) {
						if (msgObj["ts"+t]) {
							var msg1 = msgObj["ts"+t];
							sendMsg(msg1,t,initials2)
						}
						else if (msgObj["rp"+t]) {
							var msg1 = msgObj["rp"+t];
							loadOtherMsg(msg1,t,initials1)
						}
						else{
							alert("error");
						}
					}
					var msgPoint = msgObjNum;
					var lastMsg = document.getElementById("msgContainer"+msgPoint);
					document.querySelector(".messageCont").scrollTo(0,lastMsg.offsetTop);
				}
			}
			// function for creating column for each row
			function createColumn(r,c){
				var tr = document.getElementById("trow"+r);
				var td1 = document.createElement("td");
				var span1 = document.createElement("span");
				var button1 = document.createElement("button");
				var button2 = document.createElement("button");
				if (c == 3) {
					span1.setAttribute("id","tCol"+r+"_"+c)
					td1.appendChild(span1);
				}
				else if (c == 5) {
					button1.addEventListener("click",() => {changeStats(r)});
					button1.setAttribute("id","tCol"+r+"_"+c);
					td1.appendChild(button1);	
				}
				else if (c == 8) {
					
					button2.addEventListener("click",() => {openChat(r)});
					button2.innerHTML = "Open ChatBox <i class = 'fad fa-arrow-up-right-from-square'></i></button>";
					td1.appendChild(button2);
				}
				else {
					td1.setAttribute("id","tCol"+r+"_"+c);
				}
				tr.appendChild(td1);
			}

			//creating the message bubble from the assigned staff
			function sendMsg(msg,msgId,initial){
				var msgCont = document.querySelector(" .messageCont");
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

			//creating the message bubble from the facility staff staff
			function loadOtherMsg(msg,msgId,initial) {
				var msgCont = document.querySelector(" .messageCont");
				var div1 = document.createElement("div");
				div1.classList = "message1";
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
			//Send new Message 
			function sendNewMsg() {
				msgObjNum++;
				var msg = document.getElementById("messagBox").value;
				
				sendMsg(msg,msgObjNum,initials2)
				document.getElementById("messagBox").value = "";
				adjustMsg(msgObjNum);
				var msgPoint = msgObjNum;
				var lastMsg = document.getElementById("msgContainer"+msgPoint);
				document.querySelector(".messageCont").scrollTo(0,lastMsg.offsetTop);
				
				var xhttp5 = new XMLHttpRequest();
				xhttp5.onload = function () {
					// alert(this.responseText);
				}
				xhttp5.open("POST","tracking-inc.php");
				xhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp5.send("msg_key="+messageKey+
					"&msg_length="+msgObjNum+
					"&msg="+msg+
					"&troubleshooter="+fullname+
					"&reporter="+reporter+
					"&senderID=ts");
			}
			//sending a message when button clicked
			document.getElementById("sendBtn").addEventListener("click",() => {
				sendNewMsg();
			})
			
			//Send the new msg when the "Enter" button is clicked
			document.addEventListener("keypress", (event) => {
				var keyCode = event.keyCode ? event.keyCode : event.which;

				if (keyCode === 13) {
					sendNewMsg();
				}
			})
			//Filtering functions
			var filterCont = document.querySelector(".filterCont");
			var filterBtn = document.querySelector(" .filterCont span");
			var filterIcon = document.querySelector(" .filterCont span i");
			var filterPara = document.querySelector(" .filterCont span p");
			var filterMenu = document.querySelector (" .filterMenu");

			var counter3 = 0;
			filterBtn.addEventListener("click", () => {
				filterCont.classList.toggle("active");
				if (filterCont.classList == "filterCont active") {
					filterBtn.style.width = "20%";
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
					filterMenu.style.zIndex = "1";
					filterMenu.style.opacity = "100%";
					filterMenu.style.transition = "all .6s ease";
				}
				else {
					filterBtn.style.width = "7%";
					filterBtn.style.transition = "all .6s ease";
					filterMenu.style.width = "7%";
					filterMenu.style.zIndex = "-1";
					filterMenu.style.opacity = "0%";
					filterMenu.style.transition = "all .6s ease";
					if (filterPara.innerHTML == "Select Column To Filter") {
						filterPara.innerHTML = "Filter"
						filterIcon.classList = "fas fa-filter";
					}
					else {
						if (filterPara.innerHTML.length >= 10) {
							
							filterBtn.style.width = "17%";	
						}
						else {
							filterBtn.style.width = "10%";
						}
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

			sessionStorage.setItem("listName5",'Complainant');
			sessionStorage.setItem("iconName5",'user-tag');

			sessionStorage.setItem("listName6",'Contact Information');
			sessionStorage.setItem("iconName6",'address-book');

			sessionStorage.setItem("listName7",'Date of Submission');
			sessionStorage.setItem("iconName7",'calendar-days');

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
			for (var y = 1; y <= 7; y++) {
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
				else if (filterPara.innerHTML == 'Complainant') {
					parameter = 6;
				}
				else if (filterPara.innerHTML == 'Contact Information') {
					parameter = 7;
				}
				else if (filterPara.innerHTML == 'Date of Submission') {
					parameter = 9;
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
		//message to be shown in situation of no data 
		else if (sessionStorage.getItem('emptyTable')) {
			var msg = sessionStorage.getItem("emptyTable");

			var p1 = document.createElement("p");
			var table = document.querySelector(".innerTable");
			p1.innerHTML = msg;
			p1.classList = "emptyMsg";

			table.appendChild(p1);
		}
	}



</script>
</html>