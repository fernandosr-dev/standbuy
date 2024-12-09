@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <!-- Hero Section -->
    <header id="inicio" class="hero-section">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4">Descubra o Seu<br><span class="text-primary">Próximo Carro</span></h1>
                    <p class="lead mb-4">Experiência premium em automóveis de luxo em Portugal</p>
                    <div class="hero-buttons mb-5">
                        <a href="#veiculos" class="btn btn-primary btn-lg me-3">Explorar Veículos</a>
                        <a href="#contacto" class="btn btn-outline-light btn-lg">Contacte-nos</a>
                    </div>

                    <!-- Search Box -->
                    <div class="search-box" data-aos="fade-up" data-aos-delay="200">
                        <form class="search-form">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <select class="form-select form-select-lg" aria-label="Marca">
                                        <option selected>Marca</option>
                                        <option>Mercedes-Benz</option>
                                        <option>BMW</option>
                                        <option>Audi</option>
                                        <option>Porsche</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select form-select-lg" aria-label="Modelo">
                                        <option selected>Modelo</option>
                                        <option>Classe A</option>
                                        <option>Série 3</option>
                                        <option>A4</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select form-select-lg" aria-label="Preço Máximo">
                                        <option selected>Preço Máximo</option>
                                        <option>€30.000</option>
                                        <option>€50.000</option>
                                        <option>€75.000</option>
                                        <option>€100.000+</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="fas fa-search me-2"></i>Procurar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </header>

    <!-- Featured Vehicles -->
    <section id="veiculos" class="py-6">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">Veículos em Destaque</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?auto=format&fit=crop&q=80&w=800" alt="Mercedes-Benz Classe A">
                            <div class="vehicle-badge">Novo</div>
                        </div>
                        <div class="vehicle-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Mercedes Classe A</h3>
                                <div class="interaction-buttons">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" onclick="shareVehicle('Mercedes-Benz Classe A')">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="specs">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-gas-pump"></i> Diesel</span>
                                <span><i class="fas fa-road"></i> 0 km</span>
                            </div>
                            <div class="price-tag">€45.000</div>
                            <a href="#" class="btn btn-primary w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&q=80&w=800" alt="BMW Série 3">
                            <div class="vehicle-badge">Premium</div>
                        </div>
                        <div class="vehicle-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>BMW Serie 3</h3>
                                <div class="interaction-buttons">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" onclick="shareVehicle('Mercedes-Benz Classe A')">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="specs">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-bolt"></i> Híbrido</span>
                                <span><i class="fas fa-road"></i> 0 km</span>
                            </div>
                            <div class="price-tag">€52.000</div>
                            <a href="#" class="btn btn-primary w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&q=80&w=800" alt="Audi A4">
                            <div class="vehicle-badge">Destaque</div>
                        </div>
                        <div class="vehicle-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Audi A4</h3>
                                <div class="interaction-buttons">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" onclick="shareVehicle('Mercedes-Benz Classe A')">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="specs">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-gas-pump"></i> Gasolina</span>
                                <span><i class="fas fa-road"></i> 0 km</span>
                            </div>
                            <div class="price-tag">€48.000</div>
                            <a href="#" class="btn btn-primary w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&q=80&w=800" alt="Audi A4">
                            <div class="vehicle-badge">Destaque</div>
                        </div>
                        <div class="vehicle-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Audi A4</h3>
                                <div class="interaction-buttons">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" onclick="shareVehicle('Mercedes-Benz Classe A')">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="specs">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-gas-pump"></i> Gasolina</span>
                                <span><i class="fas fa-road"></i> 0 km</span>
                            </div>
                            <div class="price-tag">€48.000</div>
                            <a href="#" class="btn btn-primary w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?auto=format&fit=crop&q=80&w=800" alt="Mercedes-Benz Classe A">
                            <div class="vehicle-badge">Novo</div>
                        </div>
                        <div class="vehicle-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Mercedes Classe A</h3>
                                <div class="interaction-buttons">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" onclick="shareVehicle('Mercedes-Benz Classe A')">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="specs">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-gas-pump"></i> Diesel</span>
                                <span><i class="fas fa-road"></i> 0 km</span>
                            </div>
                            <div class="price-tag">€45.000</div>
                            <a href="#" class="btn btn-primary w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&q=80&w=800" alt="BMW Série 3">
                            <div class="vehicle-badge">Premium</div>
                        </div>
                        <div class="vehicle-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>BMW Série 3</h3>
                                <div class="interaction-buttons">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" onclick="shareVehicle('Mercedes-Benz Classe A')">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="specs">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-bolt"></i> Híbrido</span>
                                <span><i class="fas fa-road"></i> 0 km</span>
                            </div>
                            <div class="price-tag">€52.000</div>
                            <a href="#" class="btn btn-primary w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="servicos" class="py-6 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">Nossos Serviços</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h4>Venda de Veículos</h4>
                        <p>Novos e usados com garantia estendida e suporte completo</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Manutenção Premium</h4>
                        <p>Serviço autorizado multimarca com tecnologia de ponta</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <h4>Financiamento Flexível</h4>
                        <p>As melhores condições do mercado com aprovação rápida</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="py-6 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">Por Que Escolher-nos</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Garantia de Qualidade</h4>
                        <p>Todos os nossos veículos passam por rigorosas inspeções e oferecem garantia completa.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Especialistas</h4>
                        <p>Nossa equipe experiente ajuda você a encontrar o veículo perfeito para suas necessidades.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <h4>Melhor Valor</h4>
                        <p>Garantimos preços competitivos e as melhores condições de financiamento do mercado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <i class="fas fa-envelope fa-2x mb-3"></i>
                    <h2 class="mb-3">Receba Novidades</h2>
                    <p class="mb-4">Subscreva a nossa newsletter para receber ofertas exclusivas e novidades</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu email">
                            <button class="btn btn-light" type="submit">Subscrever</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contacto" class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-info">
                        <h2 class="section-title mb-4">Fale Conosco</h2>
                        <div class="info-card mb-4">
                            <h4><i class="fas fa-clock"></i> Horário</h4>
                            <p>Segunda a Sexta: 09:30 - 19:00<br>
                                Sábado: 09:30 - 19:00<br>
                                Domingo: Fechado</p>
                        </div>
                        <div class="info-card mb-4">
                            <h4><i class="fas fa-map-marker-alt"></i> Localização</h4>
                            <p>Rua da Constituição, 261<br>
                                4200-198 Porto<br>
                                Portugal</p>
                        </div>
                        <div class="info-card">
                            <h4><i class="fas fa-phone"></i> Contactos</h4>
                            <p>Tel: +351 22 509 3690<br>
                                Email: standbuy@sapo.pt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Nome">
                                <label for="name">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="phone" placeholder="Telefone">
                                <label for="phone">Telefone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" placeholder="Mensagem" style="height: 150px"></textarea>
                                <label for="message">Mensagem</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mapa -->
    <section id="localizacao" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-4">Nossa Localização</h2>
            <div class="map-container" style="height: 400px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.875345166429!2d-8.605849484655684!3d41.16214557928895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24654ab55f5dbd%3A0xab3bbbe95f5eb5bd!2sRua%20da%20Constitui%C3%A7%C3%A3o%2C%20261%2C%204200-198%20Porto%2C%20Portugal!5e0!3m2!1sen!2spt!4v1696234627267!5m2!1sen!2spt"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection
