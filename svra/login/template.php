
body {
	background: #f8f8f8;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    line-height: 30px;
    text-align: center;
}

strong { font-weight: 500; }

a, a:hover, a:focus {
	color: #4aaf51;
	text-decoration: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

h1, h2 {
	margin-top: 10px;
	font-size: 38px;
    font-weight: 100;
    color: #555;
    line-height: 50px;
}

h3 {
	font-size: 22px;
    font-weight: 300;
    color: #555;
    line-height: 30px;
}
.no-margin-top h3 { margin-top: 0; }

img { max-width: 100%; }

::-moz-selection { background: #4aaf51; color: #fff; text-shadow: none; }
::selection { background: #4aaf51; color: #fff; text-shadow: none; }


.container {
	padding-bottom: 60px;
	background: #f8f8f8;
}

.section-container {
    margin: 0 auto;
}

.section-description {
	margin-top: 60px;
    padding-bottom: 10px;
}
.section-description.no-margin-top { margin-top: 0; }

.section-description p {
    margin-top: 20px;
	padding: 0 120px;
}


.top {
	margin: 0 auto;
	padding: 40px 0 50px 0;
}

.top .divider-1 span {
	background: rgba(255, 255, 255, 0.8);
}

.top h1 {
	margin-top: 40px;
	padding-left: 15px;
	padding-right: 15px;
}

.top p {
	margin-top: 20px;
	padding-left: 15px;
	padding-right: 15px;
}


.layouts {
	border-top: 1px solid #ddd;
}

.layout-box {
	padding: 30px 20px 20px 20px;
}

.layout-box h3 {
	padding: 10px 0;
}

.layout-box p {
	margin-top: 20px;
	margin-bottom: 0;
}

.layout-box img {
	border: 5px solid #eee;
	-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

.layout-box a:hover img { border-color: #ddd; }

.footer {
	padding-top: 30px;
	padding-bottom: 30px;
	border-top: 1px solid #ddd;
}


@media (min-width: 768px) and (max-width: 991px) {
	
	.section-description p { padding: 0; }
	
}

@media (max-width: 767px) {

	.section-description p { padding: 0; }
	
}

@media (max-width: 415px) {
	
	h1, h2 { font-size: 32px; }

}
