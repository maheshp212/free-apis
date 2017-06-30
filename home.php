<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Free APIs</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mahesh Perla">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .p-l-50{
            padding-left: 50px;
            margin-bottom: 10px;
        }
    </style>
</head> 

<body data-spy="scroll">
    
    
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">            
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                    <span class="logo-title">freeAPIs</span>
                </a>
            </h1><!--//logo-->              
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                        <!-- <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                        <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>
                         --><li class="nav-item"><a class="scrollto" href="#docs">Docs</a></li>
                        <li class="nav-item"><a class="scrollto" href="#license">License</a></li>                        
                        <li class="nav-item last"><a class="scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->
    
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">free<span class="highlight">APIs</span></h2>
            <p class="intro">A set of free API's to test any api based Project.</p>
            <ul class="meta list-inline">
                <li><a href="https://github.com/maheshp212/free-apis.git" target="_blank">View on GitHub</a></li>
                <li>Created by: <a href="http://maheshp212.github.io/" target="_blank">Mahesh Perla</a> at Qshore Technologies</li>
            </ul><!--//meta-->
        </div><!--//container-->
        
    </section><!--//promo-->

    <!-- ******DOCS****** --> 
    <section id="docs" class="docs section">
        <div class="container">
            <div class="docs-inner">
            <h2 class="title text-center">Get Started</h2>            
            <div class="block">
                <h3 class="sub-title text-center">LIST USERS</h3>
                <ul class="list-unstyled">
                    <li><strong>API URL:</strong> <a href="/users" target="_blank">&nbsp;&nbsp;/users</a></li>
                    <li><strong>METHOD:</strong> GET</li>
                    <li><strong>RESPONSE:</strong> see below</li>
                </ul>
                <div class="code-block">
                    <pre><code class="language-javascript">
    {"data":[{"id":"1","fname":"Mahesh","lname":"Perla","age":"23","email":"mahesh@gmail.com","password":"mahesh213"},{"id":"2","fname":"Ramesh","lname":"Reddy","age":"2","email":"ramehs@gmail.com","password":"ramehs143"},{"id":"3","fname":"Krishan","lname":"koundanyia","age":"20","email":"kkr@gmail.com","password":"kk3213"},{"id":"4","fname":"Umang","lname":"tripathi","age":"23","email":"tumang@gmail.com","password":"tumang3613"},{"id":"5","fname":"Mukesh","lname":"Ambani","age":"45","email":"amaniM@gmail.com","password":"amaniM213"},{"id":"6","fname":"Kailesh","lname":"yadav","age":"56","email":"kailash@gmail.com","password":"kailash@#"},{"id":"7","fname":"Girish","lname":"kulkarni","age":"92","email":"giriesh@gmail.com","password":"kulkarni098"},{"id":"8","fname":"amit","lname":"tripathi","age":"53","email":"amit@gmail.com","password":"amit12"},{"id":"9","fname":"sandep","lname":"boyina","age":"17","email":"boyinaS@gmail.com","password":"bbbs9643"},{"id":"10","fname":"lalit","lname":"kumar","age":"22","email":"lalit@gmail.com","password":"lalit45"}],"msg":"","status":true}
                     </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            


            <div class="block">
                <h3 class="sub-title text-center">VIEW USER</h3>
                <ul class="list-unstyled">
                    <li><strong>API URL:</strong> <a href="/view-user/1" target="_blank">&nbsp;&nbsp;/view-user/1</a></li>
                    <li><strong>METHOD:</strong> GET</li>
                    <li><strong>RESPONSE:</strong> see below</li>
                </ul>
                <div class="code-block">
                    <pre><code class="language-javascript">
    {"data":{"id":"1","fname":"Mahesh","lname":"Perla","age":"23","email":"mahesh@gmail.com","password":"mahesh213"},"msg":"","status":true}
                     </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            



            <div class="block">
                <h3 class="sub-title text-center">ADD USER</h3>
                <ul class="list-unstyled">
                    <li><strong>API URL:</strong> <a href="/add-user" target="_blank">&nbsp;&nbsp;/add-user</a></li>
                    <li><strong>METHOD:</strong> POST</li>
                    <li><strong>DATA:</strong>
                        <ul class="list-unstyled p-l-50">
                            <li><i>fname</i>: Mohan</li>
                            <li><i>lname</i>:Lal</li>
                            <li><i>age</i>:23</li>
                            <li><i>email</i>:mohanlal@123</li>
                            <li><i>password</i>:lal123</li>
                        </ul>
                    </li>
                    <li><strong>RESPONSE:</strong> see below</li>
                </ul>
                <div class="code-block">
                    <pre><code class="language-javascript">{"data":{"insert_id":22},"msg":"Data successfully inserted.","status":true}
                     </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            



            <div class="block">
                <h3 class="sub-title text-center">EDIT USER</h3>
                <ul class="list-unstyled">
                    <li><strong>API URL:</strong> <a href="/edit-user/1" target="_blank">&nbsp;&nbsp;/edit-user/1</a></li>
                    <li><strong>METHOD:</strong> PUT</li>
                    <li><strong>DATA:</strong>
                        <ul class="list-unstyled p-l-50">
                            <li><i>fname</i>: Mohan</li>
                            <li><i>lname</i>:Lal</li>
                            <li><i>age</i>:23</li>
                            <li><i>email</i>:mohanlal@123</li>
                            <li><i>password</i>:lal123</li>
                        </ul>
                    </li>
                    <li><strong>RESPONSE:</strong> see below</li>
                </ul>
                <div class="code-block">
                    <pre><code class="language-markup">
                        {"data":{"updated_id":"1"},"msg":"Data successfully updated.","status":true}
                     </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            



            <div class="block">
                <h3 class="sub-title text-center">DELETE USERS</h3>
                <ul class="list-unstyled">
                    <li><strong>API URL:</strong> <a href="/delete-user/11" target="_blank">&nbsp;&nbsp;/delete-user/11</a></li>
                    <li><strong>METHOD:</strong>DELETE</li>
                    <li><strong>RESPONSE:</strong> see below</li>
                </ul>
                <div class="code-block">
                    <pre><code class="language-javascript">
                        {"data":{"deleted_id":"11"},"msg":"Data successfully deleted.","status":true}
                     </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            


        
            
            
            
             
            <div class="block">
                <p class="text-center">
                    <a class="btn btn-cta-primary" href="https://github.com/maheshp212/free-apis" target="_blank">VIEW on GitHub</a>
                </p>
            </div><!--//block-->
            
            </div><!--//docs-inner-->         
        </div><!--//container-->
    </section><!--//features-->
    
    <!-- ******LICENSE****** --> 
    <section id="license" class="license section">
        <div class="container">
            <div class="license-inner">
            <h2 class="title text-center">License</h2>
                <div class="info">
                    <p>These API's  are made by Full Stack Developer <a href="https://www.linkedin.com/in/mahesh-perla-43239225" target="_blank">Mahesh Perla</a> at Qshore Technologies  under the <a href="https://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License, Version 2.0</a></p>
                    <p><strong>[Tip for developers]:</strong> If your project is open source you can use our api's.</p>
                </div><!--//info-->
                <div class="cta-container">
                    <div class="speech-bubble">                    
                        <p class="intro">If you are feeling generous and want to show your support to Qshore Technologies, you can come and check our institute. :)</p>
                        <div class="icon-holder  text-center"><i class="fa fa-smile-o"></i></div>
                    </div><!--//speech-bubble-->
                    
                </div><!--//cta-container-->
            </div><!--//license-inner-->
        </div><!--//container-->
    </section><!--//how-->
    
    <!-- ******CONTACT****** --> 
    <section id="contact" class="contact section has-pattern">
        <div class="container">
            <div class="contact-inner">
                <h2 class="title  text-center">Contact</h2>
                <p class="intro  text-center">I hope you find these API's useful. <br />Feel free to get in touch if you have any questions or suggestions.</p>
                <div class="author-message">                      
                    <div class="profile">
                        <img class="img-responsive" src="assets/images/profile.gif" alt="" />
                    </div><!--//profile-->
                    <div class="speech-bubble">
                        <h3 class="sub-title">Want to get more freebies in the future?</h3>
                        <p>I do posts about #UX and #webdev related resources/content at <a href="https://github.com/maheshp212" target="_blank">@mahesh-perla</a> 
                        <p>If you like what I do, you can follow us on facebook and we will keep you informed about my next batches there :)</p>
                        <p><strong>[Tip for developers]:</strong> If you take on training on any new technology at Hyderabad India. Please visit our campus. Be creative and good luck!</p> 
                        <div class="source">
                            <span class="name"><a href="https://twitter.com/3rdwave_themes" target="_blank">Mahesh Perla</a></span>
                            <br />
                            <span class="title">Full Stack Developer</span>
                        </div><!--//source-->
                    </div><!--//speech-bubble-->                        
                </div><!--//author-message-->
                <div class="clearfix"></div>
                <div class="info text-center">
                    <h4 class="sub-title">Get Connected</h4>
                    <ul class="social-icons list-inline">
                        <li><a href="https://twitter.com/QshoreT" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/qshoretech" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/mahesh-perla-43239225"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="http://qshore.com/"><i class="fa fa-dribbble"></i></a></li>   
                        <li class="last"><a href="mailto:qshoretechnologies@gmail.com"><i class="fa fa-envelope"></i></a></li>              
                    </ul>
                </div><!--//info-->
            </div><!--//contact-inner-->
        </div><!--//container-->
    </section><!--//contact-->  
      
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="maheshp212.github.io" target="_blank">Mahesh Perla</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
     
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>   
    <script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>   
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/js/main.js"></script>       
</body>
</html> 

