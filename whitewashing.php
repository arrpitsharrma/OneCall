<?php
session_start();
if (!isset($_SESSION['token'])) {
        header("location:productsServices.php");
    }
if (isset($_COOKIE['services']))
{
    if (array_key_exists("whitewashing",$_COOKIE['services']))
    {
        $data=$_COOKIE['services'];
        $new_value=$data['whitewashing']+1;
        setcookie('services[whitewashing]',$new_value);
    }
    else
    {
        setcookie('services[whitewashing]',1);
    }
    
}else{
    setcookie('services[whitewashing]',1);
}

$curl = curl_init();
    $email=$_COOKIE['email'];
    $array1=array();
    $array1['email']=$email;
    $array1['companyName']='OneCall Pro';
    $array1['productName']='Whitewashing';
    $data=json_encode($array1);


    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://www.mitwapalkhiwala.com/rest/tracking.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: 31863584-ae0d-9f93-4052-f309c431b157"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    }
if (isset($_POST['review'])) {
        $rate=0;
        if(isset($_POST['rating'])){
            $rate=$_POST['rating'];
        }
        $email_new=$_COOKIE['email'];
        $array1_new=array();
        $array1_new['email']=$email_new;
        $array1_new['productName']='Whitewashing';
        $array1_new['review']=$_POST['review'];
        $array1_new['rating']=$rate;
        $array1_new['companyName']="OneCall Pro";
        $data_new=json_encode($array1_new);
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://mitwapalkhiwala.com/rest/rating.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data_new,
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: 44487622-9cc0-55d7-0e64-e8c9868a8aff"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
        } 
        
    }

?>
<html><title>Whitewashing</title><head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist 2/css/bootstrap.min.css">
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/** Style Star Rating Widget ***/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/** CSS Magic to Highlight Stars on Hover **/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }</style><script>
        function getInput(){
            document.getElementById('review').style.display = "block";
            document.getElementById('result').style.display = "none";
        }
    </script>


<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
<h1 style="margin-right: 14px;">Whitewashing</h1>
</head>
<body bgcolor="black" text="white" style="text-align: center; background-image: url(bg.jpg);
  background-repeat: repeat-x;">

<p style="margin-left: 175px;">
Let OneCall Painting teach you how to whitewash wood<br>Traditional whitewashing is done with lime (not the fruit), salt, and water. It has antibacterial properties, prevents mold and mildew from forming, disguises odors, and repels insects, making it a favorite on farmsteads.<br>
<br><br><img src="whitewashing_img.jpg" style="height: 350px"/>
</p><button onclick="getInput()">click Here to rate this product</button>
    <?php
        if(isset($_POST['review'])){
            echo "<h1 style='color:white' id='result'>Thanks for rating this product</h1>";
        }
    ?>
<div class="container">
<div class="container" id="review" style="display:none">
        <form method="POST">
              <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="good - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="good - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="bad - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="bad - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="half" /><label class="0.5" for="starhalf" title="Very bad - 0.5 stars"></label>
            </fieldset>
            <textarea rows="4" cols="50" placeholder="Write your Reviews here..." style="resize: none;" height="500px" width="100%" overflow="scroll" name="review" required></textarea>
            <button type="submit">Post your ratings</button>
        </form>
  </div></div>
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://mitwapalkhiwala.com/rest/showUserRating.php?email=".$email."&productName=Whitewashing",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: 31863584-ae0d-9f93-4052-f309c431b157"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
echo $response;
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
}


$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://www.mitwapalkhiwala.com/rest/ratings_reviews.php?productName=Whitewashing",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: 31863584-ae0d-9f93-4052-f309c431b157"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
echo $response;
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
}
?>
</body></html>

