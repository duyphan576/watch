<div class="project item col-md-6 col-xl-4">
  <figure class="rounded mb-6">
    <img src="{{ $image }}" srcset="./assets/img/photos/sh2@2x.jpg 2x" alt="" />
    <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i
        class="uil uil-heart"></i></a>
    <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
    <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
  </figure>
  <div class="post-header">
    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
      <div class="post-category text-ash mb-0">{{ $strap }}</div>
      <span class="ratings four"></span>
    </div>
    <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">{{ $name }}</a></h2>
    <p class="price"><span class="amount">{{ $price }}</span></p>
  </div>
  <!-- /.post-header -->
</div>