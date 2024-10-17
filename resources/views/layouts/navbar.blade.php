<ul class="navbar-nav">
  <!-- Loop through categories -->
  @foreach ($categories as $category)
      <li class="nav-item">
          <a class="nav-link" href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
      </li>
  @endforeach

  <!-- Products dropdown -->
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown">
          Products
      </a>
      <ul class="dropdown-menu" aria-labelledby="productsDropdown">
          @foreach ($products as $product)
              <li><a class="dropdown-item" href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></li>
          @endforeach
      </ul>
  </li>
</ul>
