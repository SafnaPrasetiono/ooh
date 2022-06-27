<div>
    <div class="py-5 alert-secondary">
        <div class="container pt-5 pb-4">
            <div class="d-block mb-4 pb-3 text-center">
                <p class="mb-0">Testimonials</p>
                <h1>Apa Kata Mereka?</h1>
            </div>
            <div class="splide" id="splider2">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($data as $item)
                        <li class="splide__slide pb-5">
                            <div class="d-block rounded bg-white p-3 p-md-5 h-100">
                                <div class="d-block text-center mb-3">
                                    <img src="{{ url('/images/testimonial/' . $item->images) }}" alt="testimonials" class="rounded-circle mb-3" width="64px" height="64px">
                                    <div class="d-block">
                                        <p class="fs-5 fw-bold mb-0">{{ $item->username }}</p>
                                    </div>
                                </div>
                                <p class="fs-5 text-center mb-4">
                                    {{ $item->description }}
                                </p>
                                <div class="text-center">
                                    <i class="fas fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var testimonials = new Splide('#splider2', {
                type: 'loop',
                perPage: 1,
                padding: '6rem',
                pagination: true,
                gap: 24,
                breakpoints: {
                    640: {
                        padding: 0,
                    },
                },
            });
            testimonials.mount();
        });
    </script>
</div>