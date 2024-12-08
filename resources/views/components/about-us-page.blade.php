<x-layout>
    <x-slot:title>About Us</x-slot:title>
    <link rel="stylesheet" href="/css/mainSection.css">
    <x-slot:title>About Us</x-slot:title>
    <x-navbar-tertiary></x-navbar-tertiary>
    <x-navbar-secondary></x-navbar-secondary>
    <section id="about" class="about py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <h1 class="font-montserrat text-[40px !important]">About Us</h1>
                    <p class="font-roboto text-[18px] text-muted lead">
                        At Seadex, we are dedicated to delivering the finest high-quality goods from Indonesia to the global market. 
                        Our commitment to sustainability and excellence is matched only by our focus on empowering local communities through fair trade practices and responsible sourcing. 
                        We strive to create a transparent platform where buyers can easily find trusted and reliable sources of exceptional products without the risk of fraudulent activities, 
                        ensuring that every partnership is built on integrity and quality.
                    </p>
                    <p class="font-roboto text-[18px] text-muted lead">
                        We take full accountability for our operations, recognizing the impact of our decisions on our stakeholders and the environment. 
                        By adhering to the highest standards of ethical conduct, we aim to foster lasting relationships that prioritize the success and growth of our customers and the communities we serve. 
                        At Seadex, we believe that accountability is not just a principle; it is the foundation of trust that enables us to excel in our mission of providing exceptional products and services.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/Impor-Coffee.jpg') }}" class="img-fluid rounded shadow" alt="About Us">
                </div>
            </div>
        </div>
    </section>
    <!-- Mission and Vision Section -->
    <section id="mission-vision" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="font-montserrat text-[35px]">Our Mission and Vision</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-montserrat text-[35px]">Mission</h3>
                    <p class="font-roboto text-[18px] text-muted">To deliver only the best of Indonesia’s high-quality goods to the world.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="font-montserrat text-[35px]">Vision</h3>
                    <p class="font-roboto text-[18px] text-muted">
                        To be the largest exporter representing Indonesia’s finest goods globally, while facilitating connections 
                        between buyers and reputable sources of exceptional products.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Company Values Section -->
    <section id="values" class="py-5 bg-light position-relative">
        <!-- Added Waves Background -->
        <div class="waves-background"></div>
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="font-montserrat text-[35px]">Our Company Values</h2>
            </div>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow h-100 transition-all duration-300 hover:scale-105">
                        <div class="card-body">
                            <h5 class="font-montserrat">Sustainability</h5>
                            <p class="font-roboto text-[18px] text-muted">
                                Committed to sustainable sourcing practices that protect Indonesia’s biodiversity and natural resources, 
                                ensuring eco-friendly operations and positive contributions to the environment and local communities.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow h-100 transition-all duration-300 hover:scale-105">
                        <div class="card-body">
                            <h5 class="font-montserrat">Excellence</h5>
                            <p class="font-roboto text-[18px] text-muted">
                                Delivering only the highest-quality products, adhering to strict global standards to maintain a reputation for superior performance.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow h-100 transition-all duration-300 hover:scale-105">
                        <div class="card-body">
                            <h5 class="font-montserrat">Accountability</h5>
                            <p class="font-roboto text-[18px] text-muted">
                                Ensuring transparency, fairness, and integrity in all transactions to build trust with customers, and partners.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow h-100 transition-all duration-300 hover:scale-105">
                        <div class="card-body">
                            <h5 class="font-montserrat">Dedication</h5>
                            <p class="font-roboto text-[18px] text-muted">
                                Committed to empowering local communities and producers through fair trade and equitable business practices.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow h-100 transition-all duration-300 hover:scale-105">
                        <div class="card-body">
                            <h5 class="font-montserrat">Expansion</h5>
                            <p class="font-roboto text-[18px] text-muted">
                                Pursuing constant growth by exploring new markets and employing digital transformation strategies 
                                to optimize supply chains and enhance product traceability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/mainSection.js"></script>
</x-layout>
