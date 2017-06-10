<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>hourglassSVG</title>
<meta name="author" content="Subrata Dhal">
<meta name="desription" content="SVG path animation tutorial of hourglass.">
<meta name="keyword" content="svg,svg path,svg animation,svg animation,svg path animation">
<meta name="robots" content="index,follow">
<link rel="canonical" href="http://subratadhal.com/svg/HourglassSVG/" />
<link href="css/page.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/hourglass.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'/>
</head>

<body onload="main()">
<div id="container">
    <header>
        <h1>hourglassSVG</h1>
    </header>
	<section>
        <div id="svg-div">
            <div class="svg-container">
                          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							x="0px" y="0px" width="100%" height="100%" enable-background="new 0 0 300 300"  xml:space="preserve" 
							viewBox="0 0 300 300" 
							class="content-svg" 
							id="clock" > 
							
							<circle cx="156" cy="160" r="100" style="stroke:'none'; stroke-width:0; fill:#EF4136" />
							
							<path id="path-drop-top" d="M118,105 C 117,140  156,158  156,158  S 195,140, 194,105 z" class="sand"/>
							
							<g id="hourglass">
								

								<path id="path-drop" d="M156,105 C 156,105 156,105 156,105  S 156,105, 156,105 z" class="sand-drop"/>
													
								<line id="drop1" class="drop1" x1="156" y1="208" x2="154" y2="158" />
								<line id="drop2" class="drop2" x1="156" y1="208" x2="156" y2="156" />
								<line id="drop3" class="drop1" x1="156" y1="208" x2="158" y2="158" />
								
								<path id="path" d="M156,206 C 156,206 156,206 156,206 S 156,206, 156,206 z" class="sand"/>
								
								<path  class="hbody" d="M198.515,208h-0.896c-0.134-20.309-5.009-32.57-32.297-51.54c27.404-19.056,32.41-31.33,32.547-51.692h0.646
									c3.03,0,5.486-2.575,5.486-5.75s-2.456-5.75-5.486-5.75h-84.778c-3.029,0-5.485,2.575-5.485,5.75s2.456,5.75,5.485,5.75h0.896
									c0.133,20.309,5.009,32.57,32.297,51.54c-27.404,19.057-32.41,31.33-32.546,51.692h-0.646c-3.03,0-5.486,2.575-5.486,5.75
									s2.456,5.75,5.486,5.75h84.779c3.029,0,5.485-2.575,5.485-5.75S201.544,208,198.515,208z M118.418,207.736
									c0-20.251,4.929-31.633,35.06-51.396c-30.11-19.71-34.915-31.087-34.915-51.309h75.27c0,20.251-4.93,31.633-35.06,51.396
									c30.109,19.71,34.915,31.088,34.915,51.309H118.418z"/>
									
							</g>
								
							</svg>
                        </div>
        </div>
        <div class="divider"></div>
    </section>
</div>
    <article>
        <header>
        	<h2>Features</h2>
        </header>
        <ul class="feature">
            <li>Based on SVG/HTML5/CSS3/Javascript</li>
            <li>Fully Customizable CSS</li>
            <li>Compatible in Firefox, Safari, Opera</li>
        </ul>
    </article>
    <div class="github-link">
        <img src="images/github.png" alt=""/>
        <p> Find the working url on <a href="https://github.com/subratadhal/hourglasssvg" target="_blank">github.</a></p>
    </div>
    <footer>    
        <div class="footer">
            Designed and Developed by: <a target="_blank" href="http://www.subratadhal.com">subratadhal.com</a>
        </div>
    </footer>
<script>
							
							var i1 = 105;
							var jj = 105;
							var kk = 156;
							var mm;
							var nn = 156;
							function sandEmpty() {

								var pd = document.getElementById("drop1");
								pd.classList.add("dr1-anim");
								
								var pd1 = document.getElementById("drop3");
								pd1.classList.add("dr1-anim");
						
								var el = document.getElementById("drop2");
								el.classList.add("dr2-anim");
							
									if(i1<155){
										setTimeout(function(){
											document.getElementById('path-drop').setAttribute('d','M'+kk+',105  C '+mm+',105  156,'+jj+' 156,'+jj+'  S '+pp+',105, '+nn+',105 z');
											sandEmpty();
											i1 = i1+1;
										}, 80);
										
										if(jj<159){
											jj=jj+1;
										}
										if(kk>117){
											kk=kk-1;
											if(kk>131){
												mm=kk;
											}
										}
										if(nn<193){
											nn=nn+1;
											if(nn<181){
												pp=nn;
											}
										}
									}else{
										sandEmpty2();
										 i1 = 105;
										 jj = 105;
										 kk = 156;
										 mm = 156;
										 nn = 156;
									}
								}
							
							var zz=105;
							var yy=132;
							var xx;
							var uu=180;
							function sandEmpty2(){
								if(zz<195){
									setTimeout(function(){
										document.getElementById('path-drop').setAttribute('d','M118,105 C '+yy+','+xx+' 156,158 156,158 S '+uu+','+xx+', 194,105 z');
										sandEmpty2();
										zz = zz+1;
									}, 70);
									if(yy>115){
										yy=yy-1;
									}
									if(zz<141){
										xx=zz;
									}
									if(uu<196){
										uu=uu+1;
									}
								}
								if( zz==195){
								 zz=105;
								 yy=132;
								 xx = 105;
								 uu=180;
								}

							}
							
							var i = 204;
							var j = 204;
							var k = 156;
							var m;
							var n = 156;
							function sandFill() {
									if(i>150){
										setTimeout(function(){
											document.getElementById('path').setAttribute('d','M'+k+',208  C '+m+',208    156,'+j+' 156,'+j+'    S '+p+',208,   '+n+',208 z');
											sandFill();
											i = i-1;
										}, 80);
										
										if(j>156){
											j=j-1;
										}
										if(k>117){
											k=k-1;
											if(k>131){
												m=k;
											}
										}
										if(n<193){
											n=n+1;
											if(n<181){
											p=n;
												}
										}
									}
									if(i==150){
										sandFill2();
										 i = 204;
										 j = 204;
										 k = 156;
										 m = 156;
										 n = 156;
									}
								}
							
							var z=204;
							var y=132;
							var x;
							var u=180;
							function sandFill2(){
								if(z>116){
									setTimeout(function(){
										document.getElementById('path').setAttribute('d','M118,208 C '+y+','+x+' 156,155 156,155 S '+u+','+x+', 194,208 z');
										sandFill2();
										z = z-1;
									}, 50);
									if(y>116){
										y=y-1;
									}
									if(z>169){
										x=z;
									}
									if(u<196){
										u=u+1;
									}
								}
								if(z==116){
									hourglassRotation();
									 z=204;
									 y=132;
									 x;
									 u=180;
								}
							}
							function main(){
								sandFill();
								sandEmpty();
							}
							
							
							function hourglassRotation(){ console.log('start');
								var pd = document.getElementById("path-drop-top");
								pd.classList.add("dn");
								
								var pd1 = document.getElementById("path-drop");
								pd1.classList.add("dn");
						
								var el = document.getElementById("hourglass");
								el.classList.add("hourglass-anim");
								
								
								var pd = document.getElementById("drop1");
								pd.classList.remove("dr1-anim");
								
								var pd1 = document.getElementById("drop3");
								pd1.classList.remove("dr1-anim");
						
								var el = document.getElementById("drop2");
								el.classList.remove("dr2-anim");
								
								
								setTimeout(function(){
							
									document.getElementById('path-drop').setAttribute('d','M156,105 C 156,105 156,105 156,105  S 156,105, 156,105 z');
									document.getElementById('path').setAttribute('d','M156,206 C 156,206 156,206 156,206 S 156,206, 156,206 z');
								
									var pd = document.getElementById("path-drop-top");
									pd.classList.remove("dn");
									
									var pd1 = document.getElementById("path-drop");
									pd1.classList.remove("dn");
								
									var el = document.getElementById("hourglass");
									el.classList.remove("hourglass-anim");
									main();
								}, 3000);
							};
							
							</script>
</body>
</html>
