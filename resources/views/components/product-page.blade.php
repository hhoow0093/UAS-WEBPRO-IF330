@extends('layouts.app')

@section('content')
<section class="product-page-header text-white py-5" style="background-color: rgb(5, 89, 158);">
    <div class="container">
        <h1 class="text-center mb-4">Our Pr<span style="text-decoration-line: underline; text-decoration-color: #ffff; text-decoration-thickness: 5px; text-underline-offset: 10px;">oduc</span>ts</h1>
        <p class="text-center lead">Premium Indonesian Commodities and Agricultural Exports</p>
    </div>
</section>

<section class="product-categories my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="borderku my-3 mx-auto rounded-circle border border-4 d-flex justify-content-center align-items-center"
                            style="width: 64px; height:64px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-cup-hot-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H.5ZM0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v3a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 7.5v-3Zm2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V5H2v2.5ZM13 8.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2Z"/>
                            </svg>
                        </div>
                        <h4 class="card-title">Coffee Products</h4>
                        <p class="card-text">
                            Premium Green Coffee Beans - Arabica and Robusta varieties sourced from Indonesia's finest highlands.
                        </p>
                        <a href="#coffee-section" class="btn btn-outline-primary">Explore Coffee</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="borderku my-3 mx-auto rounded-circle border border-4 d-flex justify-content-center align-items-center"
                            style="width: 64px; height:64px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-eyedropper" viewBox="0 0 16 16">
                                <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 4.793l-.646-.647a.5.5 0 1 0-.708.708l.647.646L.854 10.54a.5.5 0 0 0-.146.354v2.5a.5.5 0 0 0 .5.5h2.5a.5.5 0 0 0 .354-.146l6-6 .646.647a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 11.707l6-6 .293.293-6 6-.293-.293z"/>
                            </svg>
                        </div>
                        <h4 class="card-title">Health Supplements</h4>
                        <p class="card-text">
                            Natural herbal extracts and premium health supplements, meticulously sourced and processed.
                        </p>
                        <a href="#supplements-section" class="btn btn-outline-primary">View Supplements</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="borderku my-3 mx-auto rounded-circle border border-4 d-flex justify-content-center align-items-center"
                            style="width: 64px; height:64px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-Tree" viewBox="0 0 16 16">
                                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h1.395A4.5 4.5 0 1 1 4 10H2a5 5 0 1 0 4.5-5h1.395L8.416.223z"/>
                            </svg>
                        </div>
                        <h4 class="card-title">Agricultural Commodities</h4>
                        <p class="card-text">
                            Diverse agricultural products including spices, herbs, tropical fruits, and sustainable crops.
                        </p>
                        <a href="#agriculture-section" class="btn btn-outline-primary">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="coffee-section" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="color: rgb(5, 89, 158);">Coffee Products</h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Green Coffee Beans Arabica</h4>
                        <p class="card-text">
                            Indonesian Arabica beans are renowned for their rich, earthy complexity.
                            Grown in the highlands, these beans boast an intriguing blend of herbal,
                            spicy, and earthy notes, complemented by a full body and smooth, low acidity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Green Coffee Beans Robusta</h4>
                        <p class="card-text">
                            Indonesian Robusta beans stand out for their robust flavor, full body, and high caffeine
                            content. With earthy undertones and subtle hints of dark chocolate, these beans are perfect
                            for creating intense, full-flavored coffee blends and espresso.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="supplements-section" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="color: rgb(5, 89, 158);">Health Supplements</h2>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Herbal Extracts</h4>
                        <p class="card-text">
                            Premium natural extracts derived from Indonesia's rich botanical diversity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Nutritional Supplements</h4>
                        <p class="card-text">
                            High-quality dietary supplements sourced from natural Indonesian ingredients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Wellness Products</h4>
                        <p class="card-text">
                            Holistic wellness products supporting health and vitality through natural solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="agriculture-section" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="color: rgb(5, 89, 158);">Agricultural Commodities</h2>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Spices and Herbs</h4>
                        <p class="card-text">
                            Exotic Indonesian spices and herbs known for their rich flavors and medicinal properties.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Tropical Fruits</h4>
                        <p class="card-text">
                            Fresh and processed tropical fruits sourced from Indonesia's fertile landscapes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Sustainable Crops</h4>
                        <p class="card-text">
                            Eco-friendly agricultural products supporting sustainable farming practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection