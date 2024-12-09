<x-layout>
    <link rel="stylesheet" href="/css/mainSection.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .background {
            background-image: url('/img/business-contact-us.jpg');
            background-size: cover;
            position: relative;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            color: white;
            text-align: center;
            min-height: 50vh ;
            /* Ensure content doesn't overflow */
        }

        .background::before {
            content: '';
            background-color: rgba(0, 32, 95, 0.4);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .background::after {
            content: '';
            background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(114, 189, 255, 0) 50%, rgba(0, 9, 79, 0.5) 100%);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }

        .background>* {
            position: relative;
            z-index: 2;
        }

        .cardsa {
            display: flex;
            flex: 1 1 auto;
            flex-wrap: wrap;
            gap: 40px;
            position: relative;
            justify-content: center;
            z-index: 2;
            transform: translateY(-30%);
        }

        .carda {
            background: white;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            min-width: 375px;
            width: 500px;
        }

        @media (max-width: 1039px) {
            .cardsa {
                transform: translateY(-10%);
            }

        }

        .carda>* {
            margin-top: 20px;
        }

        .button {
            border: none;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 3;
        }
    </style>
    <x-slot:title>Halaman Contact us</x-slot:title>
    <x-navbar-tertiary></x-navbar-tertiary>
    <x-navbar-secondary></x-navbar-secondary>
    <section class="section">
        <div class="background">
            <div class="content">
                <h2>Let's Explore New Opportunity Together!</h2>
                <h4>Want to get in touch? We'd Love to hear from you. Here's how you can reach us</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
                <path fill="#f3f4f5" fill-opacity="0.1"
                    d="M0,32L24,69.3C48,107,96,181,144,202.7C192,224,240,192,288,192C336,192,384,224,432,224C480,224,528,192,576,160C624,128,672,96,720,80C768,64,816,64,864,80C912,96,960,128,1008,133.3C1056,139,1104,117,1152,128C1200,139,1248,181,1296,170.7C1344,160,1392,96,1416,64L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                </path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
                <path fill="#f3f4f5" fill-opacity="0.1"
                    d="M0,64L24,69.3C48,75,96,85,144,90.7C192,96,240,96,288,85.3C336,75,384,53,432,85.3C480,117,528,203,576,213.3C624,224,672,160,720,112C768,64,816,32,864,16C912,0,960,0,1008,32C1056,64,1104,128,1152,170.7C1200,213,1248,235,1296,256C1344,277,1392,299,1416,309.3L1440,320L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                </path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
                <path fill="#f3f4f5" fill-opacity="0.1"
                    d="M0,288L24,250.7C48,213,96,139,144,106.7C192,75,240,85,288,80C336,75,384,53,432,58.7C480,64,528,96,576,106.7C624,117,672,107,720,101.3C768,96,816,96,864,117.3C912,139,960,181,1008,165.3C1056,149,1104,75,1152,37.3C1200,0,1248,0,1296,26.7C1344,53,1392,107,1416,133.3L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                </path>
            </svg>

        </div>
        <div class="cardsa">
            <div class="carda">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                </svg>
                <h5>Our contact information</h5>
                <h6>What will we can help from contacting us</h6>
                <button class="button">View Our Contact</button>
            </div>
            <div class="carda">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                    class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
                <h5>Get in Touch by email</h5>
                <h6>Ask your inquiry from our website immediately!</h6>
                <button class="button">Contact us now</button>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" style="line-height: 50px;">
                    <h2>How We Can Help you:</h2>
                    <h3>Quick Support</h3>
                    <p>Get answers to your inquiries promptly.</p>
                    <h3>Custom Solutions</h3>
                    <p>Tailored sourcing and logistics for your business..</p>
                    <h3>Trusted Guidance</h3>
                    <p>Expertise in Indonesian exports.</p>
                    <h2>How We Can Help you:</h2>
                    <h3>Quick Support</h3>
                    <p>Get answers to your inquiries promptly.</p>
                    <h3>Custom Solutions</h3>
                    <p>Tailored sourcing and logistics for your business..</p>
                    <h3>Trusted Guidance</h3>
                    <p>Expertise in Indonesian exports.</p>
                </div>
                <div class="col-12 col-md-6">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <button type="submit" class="btn btn-primary contact-btn mt-3">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/mainSection.js"></script>
</x-layout>
<x-footer></x-footer>