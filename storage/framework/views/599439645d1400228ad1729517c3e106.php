<?php if (isset($component)) { $__componentOriginalcf7e1d4949dbd350ec830409f7127ebc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf7e1d4949dbd350ec830409f7127ebc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.app','data' => ['title' => 'Direkayasa Untuk Jalan Ke Depan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Direkayasa Untuk Jalan Ke Depan']); ?>

    
    <section class="grain relative flex min-h-screen items-center overflow-hidden px-6 pt-16 lg:px-10">
        <div class="aurora pointer-events-none absolute -left-1/4 -top-1/3 h-[140%] w-[140%] rounded-full opacity-40 blur-3xl"
             style="background: radial-gradient(circle at 30% 30%, #1c69d4, transparent 60%);"></div>
        <div class="pointer-events-none absolute inset-0 bg-gradient-to-b from-transparent via-void/40 to-void"></div>

        <div class="relative mx-auto grid max-w-[1440px] items-center gap-14 py-24 lg:grid-cols-2 lg:gap-16">
            <div class="hero-fade">
                <p class="text-[13px] font-bold uppercase tracking-[1.5px] text-primary-hover">NOVARA e5 — Sedan Listrik</p>
                <h1 class="mt-4 text-[42px] font-bold leading-[1.05] text-ink lg:text-[68px]">
                    Diam.<br>
                    <span class="font-serif font-medium italic text-body">Sampai kau injak pedalnya.</span>
                </h1>
                <p class="mt-6 max-w-md text-[16px] font-light leading-[1.6] text-muted">
                    Dua motor listrik, akselerasi 0–100&nbsp;km/j dalam 4,2 detik, dan kabin yang dirancang dari nol untuk baterai — bukan mesin bensin yang dikonversi.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#model" class="btn-primary">Konfigurasi Sekarang</a>
                    <a href="#test-drive" class="btn-secondary">Jadwalkan Test Drive</a>
                </div>

                <dl class="mt-14 grid max-w-md grid-cols-3 gap-6 border-t border-hairline pt-8">
                    <div>
                        <dt class="text-[12px] uppercase tracking-[0.5px] text-muted-soft">Jangkauan</dt>
                        <dd class="mt-1 font-serif text-[30px] font-medium text-ink">
                            <span class="counter" data-target="520" data-suffix=" km">0</span>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-[12px] uppercase tracking-[0.5px] text-muted-soft">0–100 km/j</dt>
                        <dd class="mt-1 font-serif text-[30px] font-medium text-ink">
                            <span class="counter" data-target="4.2" data-decimals="1" data-suffix="s">0</span>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-[12px] uppercase tracking-[0.5px] text-muted-soft">Isi 10–80%</dt>
                        <dd class="mt-1 font-serif text-[30px] font-medium text-ink">
                            <span class="counter" data-target="22" data-suffix=" min">0</span>
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="hero-fade hero-fade-delay-1 relative" id="parallax-wrap">
                <div id="parallax-img" class="aspect-[3/2] w-full overflow-hidden border border-hairline">
                    <img src="<?php echo e(asset('images/m5.jpg')); ?>" alt="NOVARA e5 sedan performa" class="h-full w-full object-cover" loading="eager">
                </div>
            </div>
        </div>

        <a href="#model" class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 text-[11px] uppercase tracking-[1.5px] text-muted-soft lg:flex" aria-label="Gulir ke bawah">
            <span>Jelajahi</span>
            <span class="h-8 w-px animate-pulse bg-hairline-strong"></span>
        </a>
    </section>

    
    <div class="m-stripe-divider reveal-stripe"></div>
    <div class="overflow-hidden border-y border-hairline bg-surface py-5">
        <div class="marquee-track">
            <?php for($i = 0; $i < 2; $i++): ?>
                <div class="flex shrink-0 items-center gap-10 pr-10">
                    <?php $__currentLoopData = $featuredCars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-[15px] font-light tracking-[0.5px] text-muted-soft"><?php echo e($car->name); ?></span>
                        <span class="text-primary-hover">•</span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    
    <section id="model" class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-12">
                <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Jajaran NOVARA</h2>
                <p class="mt-2 max-w-md text-[15px] font-light text-muted">Satu platform listrik native, empat karakter berbeda.</p>
            </div>

            <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <?php $__currentLoopData = $featuredCars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="glow-card group">
                        <div class="aspect-[16/10] w-full overflow-hidden">
                            <img src="<?php echo e(asset($car->image)); ?>" alt="<?php echo e($car->name); ?>" class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" loading="lazy">
                        </div>
                        <div class="relative p-6">
                            <h3 class="text-[18px] font-bold leading-[1.4] text-ink"><?php echo e($car->name); ?></h3>
                            <p class="mt-1 text-[14px] font-light leading-[1.55] text-muted"><?php echo e($car->tagline); ?></p>
                            <p class="mt-1 font-serif text-[15px] text-body"><?php echo e($car->price); ?></p>
                            <a href="<?php echo e(route('cars.show', $car->slug)); ?>" class="link-uppercase mt-4">Pelajari Lebih Lanjut <span aria-hidden="true">›</span></a>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section id="berita" class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-12">
                <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Berita Terbaru</h2>
                <p class="mt-2 max-w-md text-[15px] font-light text-muted">Informasi dan pembaruan terbaru dari NOVARA.</p>
            </div>

            <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <?php $__currentLoopData = $latestNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="glow-card group">
                        <div class="relative p-6">
                            <h3 class="text-[18px] font-bold text-ink"><?php echo e($news->title); ?></h3>
                            <p class="mt-1 text-[14px] font-light text-muted"><?php echo e(\Illuminate\Support\Str::limit($news->excerpt ?? $news->content, 120)); ?></p>
                            <a href="<?php echo e(route('news.show', $news->slug)); ?>" class="link-uppercase mt-4">Baca Selengkapnya <span aria-hidden="true">›</span></a>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section id="filosofi" class="px-6 py-28 lg:px-10">
        <div class="reveal mx-auto max-w-[820px] text-center">
            <p class="font-serif text-[26px] font-light italic leading-[1.5] text-ink lg:text-[36px]">
                "Kami tidak mendesain mobil listrik yang menyamar sebagai mobil bensin.
                Kami mendesain ulang apa artinya berkendara, mulai dari baterai ke atas."
            </p>
            <p class="mt-6 text-[13px] uppercase tracking-[1.5px] text-muted-soft">Kepala Desain, NOVARA Motors</p>
        </div>
    </section>

    
    <div class="m-stripe-divider reveal-stripe"></div>
    <section class="relative overflow-hidden bg-surface px-6 py-24 text-center lg:px-10">
        <img src="<?php echo e(asset('images/suv.jpg')); ?>" alt="" class="absolute inset-0 h-full w-full object-cover opacity-30" loading="lazy">
        <div class="relative reveal mx-auto max-w-[1440px]">
            <h2 class="text-[26px] font-bold leading-[1.25] text-ink lg:text-[36px]">Temukan NOVARA X</h2>
            <p class="mx-auto mt-3 max-w-md text-[16px] font-light leading-[1.55] text-muted">
                SUV listrik tujuh kursi dengan jangkauan 480 km dan bagasi 620 liter.
            </p>
            <a href="<?php echo e(route('cars.show', 'x')); ?>" class="btn-secondary mt-8 inline-flex">Jelajahi NOVARA X</a>
        </div>
    </section>

    
    <section id="test-drive" class="px-6 py-24 lg:px-10">
        <div class="reveal mx-auto max-w-[560px] text-center">
            <h2 class="text-[26px] font-bold leading-[1.25] text-ink lg:text-[34px]">Jadwalkan Test Drive</h2>
            <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                Isi kontak Anda dan dealer terdekat akan menghubungi untuk mengatur waktu.
            </p>
            <?php if(session('test_drive_data')): ?>
                <div class="mt-8 border border-primary/40 bg-primary-soft px-5 py-4 text-left">
                    <p class="text-[14px] font-bold text-ink">Terima kasih, <?php echo e(session('test_drive_data')['nama']); ?>!</p>
                    <p class="mt-1 text-[13px] font-light leading-[1.5] text-body">
                        Permintaan test drive Anda untuk <?php echo e(session('test_drive_data')['model']); ?> telah kami terima.
                        Dealer terdekat akan menghubungi <?php echo e(session('test_drive_data')['email']); ?> untuk mengatur waktu.
                    </p>
                </div>
            <?php endif; ?>

            <form class="mt-8 flex flex-col gap-4 text-left" action="<?php echo e(route('test-drive.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'nama','label' => 'Nama','placeholder' => 'Nama lengkap','required' => true,'value' => Auth::user()->name ?? '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'nama','label' => 'Nama','placeholder' => 'Nama lengkap','required' => true,'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->name ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'email','label' => 'Email','type' => 'email','placeholder' => 'nama@email.com','required' => true,'value' => Auth::user()->email ?? '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email','label' => 'Email','type' => 'email','placeholder' => 'nama@email.com','required' => true,'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->email ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'phone','label' => 'No. Telepon','placeholder' => '08xxxxxxxxxx','value' => Auth::user()->phone ?? '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone','label' => 'No. Telepon','placeholder' => '08xxxxxxxxxx','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->phone ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['name' => 'model','label' => 'Model Diminati','required' => true,'options' => [
                        'NOVARA e3' => 'NOVARA e3',
                        'NOVARA e5' => 'NOVARA e5',
                        'NOVARA GT' => 'NOVARA GT',
                        'NOVARA X' => 'NOVARA X',
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'model','label' => 'Model Diminati','required' => true,'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        'NOVARA e3' => 'NOVARA e3',
                        'NOVARA e5' => 'NOVARA e5',
                        'NOVARA GT' => 'NOVARA GT',
                        'NOVARA X' => 'NOVARA X',
                    ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'preferred_date','label' => 'Tanggal Preferensi','type' => 'date','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'preferred_date','label' => 'Tanggal Preferensi','type' => 'date','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'submit','variant' => 'primary','class' => 'w-full mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','variant' => 'primary','class' => 'w-full mt-2']); ?>Kirim Permintaan <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
            </form>
        </div>
    </section>

    
    <script>
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const parallaxImg = document.getElementById('parallax-img');
        document.addEventListener('scroll', () => {
            if (parallaxImg && !reduceMotion) {
                const offset = Math.min(window.scrollY * 0.12, 60);
                parallaxImg.style.transform = `translateY(${offset}px)`;
            }
        }, { passive: true });

        const counters = document.querySelectorAll('.counter');
        const animateCounter = (el) => {
            const target = parseFloat(el.dataset.target);
            const decimals = parseInt(el.dataset.decimals || '0', 10);
            const suffix = el.dataset.suffix || '';
            if (reduceMotion) { el.textContent = target.toFixed(decimals) + suffix; return; }
            const duration = 1400;
            const start = performance.now();
            const step = (now) => {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = (target * eased).toFixed(decimals) + suffix;
                if (progress < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        };
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) { animateCounter(entry.target); counterObserver.unobserve(entry.target); }
            });
        }, { threshold: 0.6 });
        counters.forEach((el) => counterObserver.observe(el));
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcf7e1d4949dbd350ec830409f7127ebc)): ?>
<?php $attributes = $__attributesOriginalcf7e1d4949dbd350ec830409f7127ebc; ?>
<?php unset($__attributesOriginalcf7e1d4949dbd350ec830409f7127ebc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf7e1d4949dbd350ec830409f7127ebc)): ?>
<?php $component = $__componentOriginalcf7e1d4949dbd350ec830409f7127ebc; ?>
<?php unset($__componentOriginalcf7e1d4949dbd350ec830409f7127ebc); ?>
<?php endif; ?>
<?php /**PATH D:\Kuliah\SMT 5\Prak. Pemro\Proyek\1\laravel_modul1\resources\views/welcome.blade.php ENDPATH**/ ?>