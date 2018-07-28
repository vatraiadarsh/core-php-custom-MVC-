<main-content>
    <ul>
        <li><a href="<?=site_url()?>">Home</a></li>
        <li><a href="<?=site_url("home/about")?>">About</a></li>
        <li><a href="<?=site_url("home/services")?>">Services</a></li>
        <li><a href="<?=site_url("home/contact")?>">Contact</a></li>
        <li><a href="<?=site_url("products")?>">Product</a></li>
        <li><a href="<?=site_url("products/allproduct")?>">All Product</a></li>
        
    </ul>

    <div>
          <?php view($data['page'],$data);?>
    </div>

</main-content>

