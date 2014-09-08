<?php 
    $protocol="http://";
    $host=gethostname();
    
    //$url=$protocol.$host.$_SERVER['PHP_SELF'];
    $url=$protocol.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
    $encode_url = urlencode($url); 
    $t_count_url='http://urls.api.twitter.com/1/urls/count.json?url=http%3A%2F%2Faamir.coretechies.org%2FSocial-Bar%2Findex.php';
    //echo "url =".$url;
    
    require_once("shareCount.php");
$obj=new shareCount($url);  //Use your website or URL
$toal_count=$obj->get_tweets();+$obj->get_fb();+$obj->get_plusones();

/*
echo "Tweets: ".$obj->get_tweets(); //to get tweets
echo "<br>Facebook: ".$obj->get_fb(); //to get facebook total count (likes+shares+comments)
echo "<br>Google+: ".$obj->get_plusones(); //to get google plusones
 */

  
 /*
	$twittercount = json_decode( file_get_contents($t_count_url ) );
	$t=$twittercount->count;
        echo '<script> alert($t);</scipt>';
    */
    
    ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<!-- CSS Links-->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
body
{
	background-image: url(img/bg.jpg);

}


.box1{


margin:0 auto;
float:none;
margin-top:10%;
border-radius:6px;
background-color:#FFF;
width:700px;

background: rgba(255,255,255,1);
background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,0.73) 47%, rgba(237,237,237,0.42) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,0.73)), color-stop(100%, rgba(237,237,237,0.42)));
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,0.73) 47%, rgba(237,237,237,0.42) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,0.73) 47%, rgba(237,237,237,0.42) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,0.73) 47%, rgba(237,237,237,0.42) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(246,246,246,0.73) 47%, rgba(237,237,237,0.42) 100%);


}
.padding
{
	padding-top:15px;
	padding-bottom:15px;
	
}
hr
{
	margin-top:0px;
	height:2px;
	width:75%;
	border:0px;
	background: rgba(104,162,238,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(104,162,238,1) 0%, rgba(70,206,251,0) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(104,162,238,1)), color-stop(100%, rgba(70,206,251,0)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(104,162,238,1) 0%, rgba(70,206,251,0) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(104,162,238,1) 0%, rgba(70,206,251,0) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(104,162,238,1) 0%, rgba(70,206,251,0) 100%);
background: radial-gradient(ellipse at center, rgba(104,162,238,1) 0%, rgba(70,206,251,0) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#68a2ee', endColorstr='#46cefb', GradientType=1 );
	
}

input[type="email"] , [type="password"]
{
	display:block;
	background-color:#fff;
	opacity:.5;
}
.table_padding{
    
    padding: 2px;
}
</style>
<style type="text/css" media="screen">

      #custom-tweet-button a {

        display: block;

        padding: 2px 5px 2px 20px;

        background: url('https://twitter.com/favicons/favicon.ico') 1px center no-repeat;

        border: 1px solid #ccc;

      }

    </style>
<body>
<div class="container">

<div class="row">
<div class="col-md-10 box1">

<div class="container-fluid padding">

   
<div class="row">
    
   
   
        <script src="js/jquery-1.11.1.js"></script>    
        
         
        
<!-- Place this tag where you want the share button to render. -->
<!--
<ul style=" list-style: none; " >
    
    <li style=" display: inline;"> <span class=" btn btn-sm btn-danger ">Parteger</span> </li>
    <li style=" display: inline;"> <span class=" btn btn-sm btn-default">2985</span> </li>
    <li style=" display: inline; margin-left: 5px;" >
        <a  class="btn btn-sm  col-md-5 btn-facebook " target="_blank" href="http://www.facebook.com/sharer.php?u=<url to share>&t=<title of content>">
          <i class=" fa fa-facebook "></i> Partager sur Facebook
        </a>
        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
    </li>
    
    <li style=" display: inline;"   >
        <a class="btn btn-sm btn-info popuptwitter  col-md-5" href="https://twitter.com/share?url=<?php echo $encode_url; ?>" target="_blank"> <i class=" fa   fa-twitter"></i> Partager sur Twitter  </a>
    </li>
    
    <li style=" display: inline;  " >
        <a href="https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=4000');return false;"><img
      src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+"/>
      </a>
    </li>    
  
   
  <tr>
<td rowspan="2">abcsad
</td>
<td >abcasdasd
</td>

</tr>
<tr>
<td>rasd</td>
</tr>



    
</ul>-->

<table style=" background-color:#EAEFF2;">
  <tr>
      <td rowspan="2" style=" background-color:#C73733; height:23px; width:90px; color:#ffffff; padding-left: 15px; margin-right: 2px;  ">  
                <span >Parteger</span>
            </td>
            
            
            
            <td style=" background-color:#ffffff; height:13px; width:100px; text-align: center;">
                <span  ><font style=" font-size:11px; font-family:verdana;" ><?php echo $toal_count;  ?></font></span>
              
                
            </td>
    
      <td rowspan="2"> 
        <a  class="btn btn-sm   btn-facebook "  href="javascript:window.open('http://www.facebook.com/sharer.php?u=<url to share>&t=<title of content>', '_blank', 'width=650,height=350');void(0);">
          <i class=" fa fa-facebook "></i> Partager sur Facebook
        </a>
        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
    </td>
    <td> &nbsp;</td>
    <td  rowspan="2" style="margin-right: 2px;"> 
        <a class="btn btn-sm btn-info popuptwitter"  href="https://twitter.com/share?url=<?php echo $encode_url; ?>" target="_blank"> <i class=" fa   fa-twitter"></i> Partager sur Twitter  </a>
    </td>
     <td> &nbsp;</td>
    <td rowspan="2"> 
        <a href="https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=4000');return false;"><img
      src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+"/>
      </a>
    </td> 
    <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
        </tr>
        <tr   >
            <td style=" background-color:#ffffff; height:10px; width:100px; text-align: center;"> <span><font style=" font-size:7px" > PARTAGES</font></span>
            </td>        
        </tr>
        
    </table>

<script>
$(document).ready(function() {
  $('.popuptwitter').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
});
</script>

    
    
    
    
</div>
    
      

</div>
</div>
   </div>
</div>

</body>
</html>
