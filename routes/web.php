<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProfileController,
    LogoController,
    SliderController,
    SocialMediaController,
    HomeController,
    SectionController,
    ProductController,
    CategoryController,
    GalleryController
};
use App\Models\{
    Logo,
    SocialMedia,
    Section
};


// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// static pages routes
Route::get('/mattress-collections', function () {
    return view('frontend.mattress-collections', getCommonData());
})->name('mattress-collections');

// Relaxo (M-001) Routes
Route::get('/relaxo/ortho', function () {
    return view('frontend.relaxo.ortho');
})->name('relaxo.ortho');

// Relaxo (M-001) Routes
Route::get('/relaxo', function () {
    return view('frontend.relaxo');
})->name('relaxo');


Route::get('/relaxo/softy-hardy', function () {
    return view('frontend.relaxo.softy-hardy');
})->name('relaxo.softy-hardy');

Route::get('/relaxo/softy', function () {
    return view('frontend.relaxo.softy');
})->name('relaxo.softy');

// Royale (M-002) Routes
Route::get('/royale', function () {
    return view('frontend.royale');
})->name('royale');


// Royale (M-002) Routes
Route::get('/royale/ortho', function () {
    return view('frontend.royale.ortho');
})->name('royale.ortho');

Route::get('/royale/softy-hardy', function () {
    return view('frontend.royale.softy-hardy');
})->name('royale.softy-hardy');

Route::get('/royale/softy', function () {
    return view('frontend.royale.softy');
})->name('royale.softy');

// Classic Ortho Bondo Coir (M-003) Routes
Route::get('/coir-series', function () {
    return view('frontend.coir-series');
})->name('coir-series');

// Luxury (M-004) Routes
Route::get('/latexo-series', function () {
    return view('frontend.latexo-series');
})->name('latexo-series');

Route::get('/latexo-series/bondo-memory', function () {
    return view('frontend.latexo-series.bondo-memory');
})->name('latexo-series.bondo-memory');

Route::get('/latexo-series/foam-memory', function () {
    return view('frontend.latexo-series.foam-memory');
})->name('latexo-series.foam-memory');

// Adonis Ortho Bondo (M-005) Routes
Route::get('/adonis-ortho-bondo', function () {
    return view('frontend.adonis-ortho-bondo');
})->name('adonis-ortho-bondo');

// Debonaire Softy Hardy (M-006) Routes
Route::get('/debonair-softy-hardy', function () {
    return view('frontend.debonair-softy-hardy');
})->name('debonair-softy-hardy');

// Oxford Ortho Coir (M-007) Routes
Route::get('/oxford-ortho-coir', function () {
    return view('frontend.oxford-ortho-coir');
})->name('oxford-ortho-coir');

// Elegance Memory Plus (M-008) Routes
Route::get('/memory-foam-series', function () {
    return view('frontend.memory-foam-series');
})->name('memory-foam-series');



// Spring Series (M-009) Routes

Route::get('/spring-series', function () {
    return view('frontend.spring-series');
})->name('spring-series');


Route::get('/spring-series/bonal', function () {
    return view('frontend.spring-series.bonal');
})->name('spring-series.bonal');

Route::get('/spring-series/pocket', function () {
    return view('frontend.spring-series.pocket');
})->name('spring-series.pocket');

Route::get('/spring-series/memory-plus', function () {
    return view('frontend.spring-series.memory-plus');
})->name('spring-series.memory-plus');


// About Page
Route::get('/about', function () {
    return view('frontend.about', getCommonData());
})->name('about');

// Frontend routes
Route::get('/categories', [CategoryController::class, 'showCategories'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'showCategoryProducts'])->name('categories.show');

// Latest Products Page
Route::get('/latest-products', function () {
    return view('frontend.latest-products', getCommonData());
})->name('latest-products');

// Contact Page
Route::get('/contact', function () {
    return view('frontend.contact-us', getCommonData());
})->name('contact');

// Gallery Page
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');



// Terms and Conditions Page
Route::get('/terms-and-conditions', function () {
    return view('frontend.terms-and-conditions', getCommonData());
})->name('terms');

// Privacy Policy Page
Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy', getCommonData());
})->name('privacy');


// shipping-and-returns-policy Page
Route::get('/shipping-and-returns-policy', function () {
    return view('frontend.shipping-and-returns-policy', getCommonData());
})->name('shipping-and-returns-policy');

// shipping-and-returns-policy Page
Route::get('/warranty-information', function () {
    return view('frontend.warranty-information', getCommonData());
})->name('warranty-information');


// Authenticated Routes (User Profile and Dashboard)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', getCommonData());
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes (with authentication and /admin prefix)
Route::middleware('auth')->prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard', getCommonData());
    })->name('admin.dashboard');

    // Logo Management
    Route::get('/upload-logo', function () {
        return view('admin.upload-logo', array_merge(['logo' => Logo::first()], getCommonData()));
    })->name('logo.upload');
    Route::post('/upload-logo', [LogoController::class, 'store'])->name('logo.store');

    // Slider Management
    Route::get('/manage-sliders', [SliderController::class, 'index'])->name('slider.index');
    Route::post('/manage-sliders', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/manage-sliders/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/manage-sliders/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/manage-sliders/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

    // Social Media Management
    Route::get('/manage-social-media', [SocialMediaController::class, 'index'])->name('socialMedia.index');
    Route::post('/manage-social-media', [SocialMediaController::class, 'store'])->name('socialMedia.store');
    Route::get('/manage-social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('socialMedia.edit');
    Route::post('/manage-social-media/{id}', [SocialMediaController::class, 'update'])->name('socialMedia.update');
    Route::delete('/manage-social-media/{id}', [SocialMediaController::class, 'destroy'])->name('socialMedia.destroy');

    // Section Management
    Route::get('/manage-sections', [SectionController::class, 'index'])->name('section.index');
    Route::post('/manage-sections', [SectionController::class, 'store'])->name('section.store');
    Route::get('/manage-sections/{id}/edit', [SectionController::class, 'edit'])->name('section.edit');
    Route::post('/manage-sections/{id}', [SectionController::class, 'update'])->name('section.update');

    // Product Management
    Route::resource('products', ProductController::class);

    // Category Management
    // Route::resource('categories', CategoryController::class);

    Route::resource('categories', CategoryController::class);
});

// Authentication Routes
require __DIR__ . '/auth.php';
