  @props(['products'])
  <div class="slider category-slider mb-35">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title">
                      <h3>Nos produits recents</h3>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="category-slider-container">
                      @foreach ($products as $product)
                          <div class="single-category">
                              <div class="category-image">
                                  <a href="{{ route('products.show', $product) }}" title="Vegetables">
                                      <img width="121" height="121" src="{{ asset($product->image) }}" style="width: 120px; height: 120px;"
                                          class="img-fluid" alt="">
                                  </a>
                              </div>
                              <div class="category-title">
                                  <h3>
                                      <a href="{{ route('products.show', $product) }}"> {{ $product->name }}</a>
                                  </h3>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
