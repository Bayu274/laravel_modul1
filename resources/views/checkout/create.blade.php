<x-layout.app title="Checkout">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-10">
                <a href="{{ route('cars.show', $car->slug) }}" class="mb-6 inline-flex items-center gap-2 text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors duration-150 hover:text-ink">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    Kembali ke {{ $car->name }}
                </a>
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Checkout</h1>
            </div>

            <form action="{{ route('customer.checkout.store', $car->slug) }}" method="POST" x-data="{ payment: '{{ old('payment_method', 'cash') }}' }">
                @csrf

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <div class="lg:col-span-2 flex flex-col gap-6">
                        <x-alert />

                        <div class="rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Data Diri</h2>
                            <div class="flex flex-col gap-4">
                                <x-input name="full_name" label="Nama Lengkap" placeholder="Nama lengkap" :required="true" :value="old('full_name', $user->name)" />
                                <x-input name="phone" label="No. Telepon" placeholder="08xxxxxxxxxx" :required="true" :value="old('phone', $user->phone)" />
                                <x-input name="email" label="Email" type="email" placeholder="nama@email.com" :required="true" :value="old('email', $user->email)" />
                            </div>
                        </div>

                        <div class="rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Informasi Mobil</h2>
                            <div class="flex items-start gap-5">
                                <div class="h-24 w-32 shrink-0 overflow-hidden border border-hairline">
                                    <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="h-full w-full object-cover" loading="lazy">
                                </div>
                                <div>
                                    <p class="text-[18px] font-bold text-ink">{{ $car->name }}</p>
                                    <p class="mt-1 font-serif text-[20px] font-medium text-primary">{{ $car->price }}</p>
                                    <input type="hidden" name="car_id" value="{{ $car->id }}">
                                </div>
                            </div>
                        </div>

                        <div class="rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Pilihan Warna</h2>
                            <x-select name="color" label="Warna Mobil" :required="true" placeholder="Pilih warna"
                                :options="[
                                    'Putih' => 'Putih',
                                    'Hitam' => 'Hitam',
                                    'Perak' => 'Perak',
                                    'Biru' => 'Biru',
                                    'Merah' => 'Merah',
                                    'Abu-abu' => 'Abu-abu',
                                ]" />
                        </div>

                        <div class="rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Metode Pembayaran</h2>
                            <div class="flex flex-col gap-3">
                                <label class="flex items-center gap-3 rounded border border-hairline p-4 cursor-pointer transition-colors hover:border-primary" :class="payment === 'cash' && 'border-primary bg-primary/5'">
                                    <input type="radio" name="payment_method" value="cash" x-model="payment" {{ old('payment_method', 'cash') === 'cash' ? 'checked' : '' }} class="accent-primary">
                                    <span class="text-[14px] text-ink">Cash</span>
                                </label>
                                <label class="flex items-center gap-3 rounded border border-hairline p-4 cursor-pointer transition-colors hover:border-primary" :class="payment === 'credit' && 'border-primary bg-primary/5'">
                                    <input type="radio" name="payment_method" value="credit" x-model="payment" {{ old('payment_method') === 'credit' ? 'checked' : '' }} class="accent-primary">
                                    <span class="text-[14px] text-ink">Kredit</span>
                                </label>
                                <label class="flex items-center gap-3 rounded border border-hairline p-4 cursor-pointer transition-colors hover:border-primary" :class="payment === 'leasing' && 'border-primary bg-primary/5'">
                                    <input type="radio" name="payment_method" value="leasing" x-model="payment" {{ old('payment_method') === 'leasing' ? 'checked' : '' }} class="accent-primary">
                                    <span class="text-[14px] text-ink">Leasing</span>
                                </label>
                            </div>

                            <div x-show="payment === 'credit' || payment === 'leasing'" x-transition class="mt-5 flex flex-col gap-4 border-t border-hairline pt-5">
                                <x-input name="down_payment" label="Uang Muka (DP)" type="number" placeholder="Contoh: 50000000" :value="old('down_payment')" />
                                <x-input name="monthly_installment" label="Cicilan per Bulan" type="number" placeholder="Contoh: 5000000" :value="old('monthly_installment')" />
                                <x-input name="tenor" label="Tenor (bulan)" type="number" placeholder="Contoh: 60" :value="old('tenor')" />
                            </div>
                        </div>

                        <div class="rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Alamat Pengiriman</h2>
                            <div class="flex flex-col gap-4">
                                <x-textarea name="shipping_address" label="Alamat Lengkap" placeholder="Jalan, nomor, RT/RW" :required="true">{{ old('shipping_address') }}</x-textarea>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <x-input name="shipping_city" label="Kota" placeholder="Nama kota" :required="true" :value="old('shipping_city', $user->city)" />
                                    <x-input name="shipping_province" label="Provinsi" placeholder="Nama provinsi" :required="true" :value="old('shipping_province', $user->province)" />
                                </div>
                                <x-input name="shipping_postal_code" label="Kode Pos" placeholder="12345" :required="true" :value="old('shipping_postal_code', $user->postal_code)" />
                            </div>
                        </div>

                        <div class="rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Catatan</h2>
                            <x-textarea name="notes" label="Catatan (Opsional)" placeholder="Permintaan khusus atau informasi tambahan...">{{ old('notes') }}</x-textarea>
                        </div>
                    </div>

                    <div class="lg:col-span-1">
                        <div class="sticky top-24 rounded border border-hairline bg-surface p-6">
                            <h2 class="mb-5 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Ringkasan Pesanan</h2>

                            <div class="flex items-start gap-4">
                                <div class="h-20 w-28 shrink-0 overflow-hidden border border-hairline">
                                    <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="h-full w-full object-cover" loading="lazy">
                                </div>
                                <div>
                                    <p class="text-[15px] font-bold text-ink">{{ $car->name }}</p>
                                    <p class="mt-1 font-serif text-[18px] font-medium text-primary">{{ $car->price }}</p>
                                </div>
                            </div>

                            <div class="mt-5 border-t border-hairline pt-5">
                                <div class="flex items-center justify-between">
                                    <span class="text-[13px] text-muted">Harga Mobil</span>
                                    <span class="text-[14px] font-medium text-ink">{{ $car->price }}</span>
                                </div>
                            </div>

                            <div class="mt-6">
                                <x-button type="submit" variant="primary" class="w-full">Buat Pesanan</x-button>
                            </div>

                            <p class="mt-4 text-center text-[12px] font-light text-muted-soft">
                                Dengan memesan, Anda menyetujui syarat & ketentuan NOVARA Motors.
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</x-layout.app>
