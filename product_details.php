<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
 <style>

.container1 {
  padding: 25px;
  background-color: #efeeda;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-around;
}

.btn1 {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-family: 'Quicksand', sans-serif;
  background-color: #efeeda;
  color: #4d4d4d;
  border: 1px solid #4d4d4d;
  padding: 12.5px;
  cursor: pointer;
}
.btn1:hover {
  background-color: #4d4d4d;
  color: #efeeda;
}
.btn1:focus {
  outline: none;
}
.btn1:active {
  -webkit-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
  background-color: #efeeda;
  color: #4d4d4d;
}

.image-viewer {
  margin: 25px;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: start;
          justify-content: flex-start;
}
.image-viewer .main-image {
  width: 300px;
  height: 300px;
  align-self: center;
  text-align: center;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
}
.image-viewer .main-image img {
  cursor: -webkit-zoom-in;
  cursor: zoom-in;
  max-width: 100%;
  max-height: 100%;
  width: auto;
  height: auto;
}
.image-viewer .secondary-images {
  align-self: center;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  flex-wrap: nowrap;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.image-viewer .secondary-images .secondary-image {
  padding: 6.25px;
  height: 50px;
}
.image-viewer .secondary-images .secondary-image img {
  cursor: pointer;
  max-width: 100%;
  max-height: 100%;
}

.section, .pricing, .detail {
  padding: 12.5px;
}

.pricing {
  width: 15%;
  padding: 12.5px;
}
.pricing-price {
  text-align: right;
  margin: 12.5px 0;
  font-size: 3em;
}
.pricing-btn1 {
  width: 100%;
}

.detail {
  width: 30%;
}
.detail .detail-short-description {
  margin-top: 2em;
}
.detail .detail-long-description {
  margin-top: 3em;
  font-size: 0.8rem;
}

.lightbox {
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
  position: fixed;
  top: -100%;
  bottom: 100%;
  left: 0;
  right: 0;
  background: rgba(208, 205, 147, 0.9);
  z-index: 501;
  opacity: 0;
}
.lightbox img {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  max-width: 0%;
  max-height: 0%;
}
.lightbox .lightbox-controls {
  position: relative;
  height: 100vh;
}
.lightbox .lightbox-controls .lightbox-control, .lightbox .lightbox-controls .lightbox-controls-close, .lightbox .lightbox-controls .lightbox-controls-previous, .lightbox .lightbox-controls .lightbox-controls-next, .lightbox.show .lightbox-controls .lightbox-controls-previous, .lightbox.show .lightbox-controls .lightbox-controls-next {
  height: 70px;
  width: 70px;
  position: absolute;
  z-index: 502;
  background: rgba(177, 172, 76, 0.9);
  color: white;
  font-size: 3em;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  cursor: pointer;
}
.lightbox .lightbox-controls .lightbox-controls-close {
  position: absolute;
  top: 0%;
  right: 0%;
}
.lightbox .lightbox-controls .lightbox-controls-previous {
  position: absolute;
  top: 50%;
  left: -20%;
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
}
.lightbox .lightbox-controls .lightbox-controls-next {
  position: absolute;
  top: 50%;
  right: -20%;
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
}

.lightbox.show {
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
  top: 0%;
  bottom: 0%;
  opacity: 1;
}
.lightbox.show img {
  -webkit-transition: all 0.5s 0.5s ease-in-out;
  transition: all 0.5s 0.5s ease-in-out;
  max-width: 100%;
  max-height: 100%;
}
.lightbox.show .lightbox-controls .lightbox-controls-previous {
  position: absolute;
  top: 50%;
  left: 0%;
  -webkit-transition: all 0.5s 0.75s ease-in-out;
  transition: all 0.5s 0.75s ease-in-out;
}
.lightbox.show .lightbox-controls .lightbox-controls-next {
  position: absolute;
  top: 50%;
  right: 0%;
  -webkit-transition: all 0.5s 0.75s ease-in-out;
  transition: all 0.5s 0.75s ease-in-out;
}
</style>

</head>
<body>
<?php
  $user='root';
  $pass='';
  $db='homedecor';
  $id=$_GET['id'];
  $conn=mysqli_connect('localhost',$user, $pass, $db);
  $ProductSQL ="SELECT * FROM products where productid= '$id' ";
  $ProductResult = mysqli_query($conn, $ProductSQL);
  $ImageSQL="SELECT * FROM tbl_gallery where product_id= '$id' ";
  $ImagesResult= mysqli_query($conn, $ImageSQL);
?>
      <?php while ($row = mysqli_fetch_assoc($ProductResult)) { ?>
<!-- partial:index.partial.html -->
<div class="container1">
  <div class="image-viewer">
    <div class="main-image">
      <img src="tools/images/<?php echo $row['productimage']; ?>"/>
    </div>
 
    <div class="secondary-images">
    <?php while ($row1 = mysqli_fetch_assoc($ImagesResult)) { ?>
      <div class="secondary-image">
        <img src="tools/images/<?php echo $row1['image_name']; ?>"/>
      </div>
    <?php } ?>
    
 
 
    </div>

  </div>
  <div class="detail">
    <h1 class="detail-name"><?php echo $row['productname'];?></h1>
    <p class="detail-short-description"> 
    
    </p>
    <div class="detail-long-description"> 
      <p> <?php echo $row['productdetails'];?></p>
         </div>
  </div>
  <div class="pricing">
    <div class="pricing-price">$<?php echo $row['productprice'];?></div>
    
   

    <a class="btn1 pricing-btn1" href="reviews.php?pid=<?php echo $row['productid'] ?>">Reviews</a>
  </div>
  <div class="lightbox" id="lightbox">
    <img src="http://placehold.it/650x650"/>
    <div class="lightbox-controls">
      <div class="lightbox-controls-close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>

    </div>
  </div>
  <button   class="btn1 pricing-btn1" data-sc-key="sbpb_M2M0ZTk2Y2ItNTcxMi00Y2QxLWJmNTctNzg4ZjEzMGMzY2Nj"

data-name="<?php echo $row['productname'];?>"

data-reference="99999"

data-amount="<?php echo $row['productprice'];?>00"
>

Buy Now

</button>
      <?php } ?>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>
  <script type="text/javascript" src="https://www.simplify.com/commerce/simplify.pay.js"></script>


<script>
class ImageViewer {
  constructor(selector) {
    this.selector = selector;
    $(this.secondaryImages).click(() => this.setMainImage(event));
    $(this.mainImage).click(() => this.showLightbox(event));
    $(this.lightboxClose).click(() => this.hideLightbox(event));
  }

  get secondaryImageSelector() {
    return '.secondary-image';
  }

  get mainImageSelector() {
    return '.main-image';
  }

  get lightboxImageSelector() {
    return '.lightbox';
  }

  get lightboxClose() {
    return '.lightbox-controls-close';
  }

  get secondaryImages() {
    var secondaryImages = $(this.selector).find(this.secondaryImageSelector).find('img');
    return secondaryImages;
  }

  get mainImage() {
    var mainImage = $(this.selector).find(this.mainImageSelector);
    return mainImage;
  }

  get lightboxImage() {
    var lightboxImage = $(this.lightboxImageSelector);
    return lightboxImage;
  }

  setLightboxImage(event) {
    var src = this.getEventSrc(event);
    this.setSrc(this.lightboxImage, src);
  }

  setMainImage(event) {
    var src = this.getEventSrc(event);
    this.setSrc(this.mainImage, src);
  }

  getSrc(node) {
    var image = $(node).find('img');
  }

  setSrc(node, src) {
    var image = $(node).find('img')[0];
    image.src = src;
  }

  getEventSrc(event) {
    return event.target.src;
  }

  showLightbox(event) {
    this.setLightboxImage(event);
    $(this.lightboxImageSelector).addClass('show');
  }

  hideLightbox() {
    $(this.lightboxImageSelector).removeClass('show');
  }}


new ImageViewer('.image-viewer');
</script>
</body>
</html>
<?php include('footer.php');?>
