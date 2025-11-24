<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNEAKERVERSE - Toko Sepatu Terbaik</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Menggunakan font Inter untuk tampilan modern */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f9; /* Latar belakang abu-abu muda */
        }
        /* Custom scrollbar untuk tampilan yang lebih halus */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        /* Efek hover pada tombol utama */
        .btn-primary:hover {
            box-shadow: 0 10px 15px -3px rgba(239, 68, 68, 0.5), 0 4px 6px -2px rgba(239, 68, 68, 0.05);
            transform: translateY(-2px);
        }
        .shoe-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .shoe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
        /* Menghilangkan panah spinner pada input number */
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
        /* Custom message box style */
        #message-box {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            z-index: 1000;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            opacity: 0;
            transform: translateX(100%);
        }
        .show-message {
            opacity: 1 !important;
            transform: translateX(0) !important;
        }
    </style>
</head>
<body>

    <!-- Message Box / Notifikasi -->
    <div id="message-box" class="bg-green-500 text-white p-4 rounded-xl shadow-lg">
        <!-- Content notifikasi akan diisi oleh JS -->
    </div>

    <!-- Header / Navbar (Telah Diubah ke Warna Hitam) -->
    <header class="bg-gray-900 shadow-xl sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="#" class="text-3xl font-extrabold text-white tracking-tight">
                    SNEAKER<span class="text-red-500">VERSE</span>
                </a>
                
                <!-- Navigasi Utama (Desktop) -->
                <nav class="hidden md:flex space-x-8">
                    <!-- Teks Navigasi Diubah ke Putih/Abu-abu Terang -->
                    <a href="#produk" class="text-gray-300 hover:text-red-500 font-medium transition duration-150">Produk</a>
                    <a href="#" class="text-gray-300 hover:text-red-500 font-medium transition duration-150">Promo</a>
                    <a href="#" class="text-gray-300 hover:text-red-500 font-medium transition duration-150">Tentang Kami</a>
                    <a href="#" class="text-gray-300 hover:text-red-500 font-medium transition duration-150">Kontak</a>
                </nav>

                <!-- Keranjang & Menu Mobile -->
                <div class="flex items-center space-x-4">
                    <!-- Tombol Keranjang (Diubah agar menonjol di latar belakang gelap) -->
                    <button id="cart-button" class="relative p-2 rounded-full bg-red-600 hover:bg-red-700 transition duration-150 shadow-md">
                        <!-- Icon keranjang (Warna diubah ke Putih) -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white">
                            <circle cx="8" cy="21" r="1"></circle>
                            <circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.15"></path>
                        </svg>
                        <span id="cart-count" class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-900 transform translate-x-1/2 -translate-y-1/2 bg-yellow-400 rounded-full">0</span>
                    </button>

                    <!-- Tombol Menu Mobile (Diubah agar menonjol) -->
                    <button class="md:hidden p-2 rounded-full bg-gray-800 hover:bg-gray-700 transition duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section (Tetap gelap, kini menyatu dengan Header) -->
        <section class="bg-gray-900 text-white pt-16 pb-24 shadow-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
                <!-- Konten Teks -->
                <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                    <span class="text-red-400 text-sm font-semibold uppercase tracking-widest block mb-2">KOLEKSI TERBARU 2025</span>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black leading-tight mb-6">
                        Langkahmu, <span class="text-red-500">Gayamu</span>.
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 max-w-lg mx-auto md:mx-0">
                        Temukan sepatu premium yang memadukan desain revolusioner, kenyamanan maksimal, dan performa tinggi.
                    </p>
                    <a href="#produk" class="btn-primary inline-flex items-center px-8 py-3 bg-red-600 text-white font-bold text-lg rounded-full shadow-lg transition duration-300">
                        Belanja Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>

                <!-- Gambar Hero (Placeholder) -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://placehold.co/500x350/ffffff/000000?text=Sepatu+Edisi+Khusus" 
                         alt="Sepatu olahraga modern edisi khusus" 
                         onerror="this.onerror=null;this.src='https://placehold.co/500x350/111827/f3f4f6?text=SNEAKERVERSE+Hero';"
                         class="w-full max-w-md rounded-2xl rotate-[-5deg] transform hover:rotate-0 transition duration-500 shadow-2xl"/>
                </div>
            </div>
        </section>

        <!-- Kategori Populer -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Kategori Pilihan</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Kategori 1: Lari -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition duration-300 cursor-pointer">
                        <img src="https://placehold.co/300x400/8b5cf6/ffffff?text=Running+Shoes" 
                             alt="Sepatu Lari" 
                             class="w-full h-48 object-cover transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null;this.src='https://placehold.co/300x400/8b5cf6/ffffff?text=LARI';"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-4">
                            <p class="text-white text-xl font-semibold">Lari</p>
                        </div>
                    </div>
                    <!-- Kategori 2: Kasual -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition duration-300 cursor-pointer">
                        <img src="https://placehold.co/300x400/10b981/ffffff?text=Casual+Sneakers" 
                             alt="Sepatu Kasual" 
                             class="w-full h-48 object-cover transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null;this.src='https://placehold.co/300x400/10b981/ffffff?text=KASUAL';"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-4">
                            <p class="text-white text-xl font-semibold">Kasual</p>
                        </div>
                    </div>
                    <!-- Kategori 3: Basket -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition duration-300 cursor-pointer">
                        <img src="https://placehold.co/300x400/3b82f6/ffffff?text=Basketball+Shoes" 
                             alt="Sepatu Basket" 
                             class="w-full h-48 object-cover transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null;this.src='https://placehold.co/300x400/3b82f6/ffffff?text=BASKET';"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-4">
                            <p class="text-white text-xl font-semibold">Basket</p>
                        </div>
                    </div>
                    <!-- Kategori 4: Boots -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition duration-300 cursor-pointer">
                        <img src="https://placehold.co/300x400/f59e0b/ffffff?text=Boots" 
                             alt="Sepatu Boots" 
                             class="w-full h-48 object-cover transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null;this.src='https://placehold.co/300x400/f59e0b/ffffff?text=BOOTS';"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-4">
                            <p class="text-white text-xl font-semibold">Boots</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produk Unggulan -->
        <section id="produk" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-6 text-center">Produk Unggulan Kami</h2>
                <p class="text-center text-lg text-gray-600 mb-12">Pilih yang terbaik untuk penampilan dan kenyamanan Anda.</p>

                <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <!-- Kartu Produk akan di-render di sini oleh JavaScript -->
                </div>

                <div class="text-center mt-16">
                    <button class="px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-full hover:bg-gray-100 transition duration-300">
                        Lihat Semua Produk
                    </button>
                </div>
            </div>
        </section>

        <!-- Banner Diskon -->
        <section class="bg-red-600 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h2 class="text-4xl font-extrabold mb-3">DISKON AKHIR MUSIM!</h2>
                <p class="text-xl mb-6">Dapatkan potongan harga hingga 50% untuk koleksi pilihan.</p>
                <a href="#produk" class="inline-flex items-center px-8 py-3 bg-white text-red-600 font-bold text-lg rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
                    Klaim Diskon Anda
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-b border-gray-700 pb-8 mb-8">
                <div>
                    <h4 class="text-xl font-bold mb-4 text-red-400">SNEAKERVERSE</h4>
                    <p class="text-sm text-gray-400">Pusatnya sepatu gaya dan berkualitas.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-red-400">FAQ</a></li>
                        <li><a href="#" class="hover:text-red-400">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-red-400">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Layanan Pelanggan</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-red-400">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-red-400">Lacak Pesanan</a></li>
                        <li><a href="#" class="hover:text-red-400">Pengembalian</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <!-- Placeholder Ikon Media Sosial -->
                        <a href="#" class="text-gray-400 hover:text-red-400 transition duration-150">FB</a>
                        <a href="#" class="text-gray-400 hover:text-red-400 transition duration-150">IG</a>
                        <a href="#" class="text-gray-400 hover:text-red-400 transition duration-150">TW</a>
                    </div>
                </div>
            </div>
            <div class="text-center text-sm text-gray-400">
                &copy; 2025 SNEAKERVERSE. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- Modal Keranjang Belanja -->
    <div id="cart-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-75 z-50 flex justify-center items-center">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-lg m-4 p-6 transform transition-all scale-95 duration-300">
            <div class="flex justify-between items-center border-b pb-3 mb-4">
                <h3 class="text-2xl font-bold text-gray-800">Keranjang Belanja</h3>
                <button id="close-cart-modal" class="text-gray-400 hover:text-gray-600 text-3xl leading-none">&times;</button>
            </div>
            
            <div id="cart-items-container" class="max-h-96 overflow-y-auto space-y-4 mb-4">
                <!-- Item keranjang akan di-render di sini -->
                <p id="empty-cart-message" class="text-center text-gray-500">Keranjang Anda kosong.</p>
            </div>

            <div class="border-t pt-4">
                <div class="flex justify-between items-center text-xl font-bold mb-4">
                    <span>Total:</span>
                    <span id="cart-total-price" class="text-red-600">Rp 0</span>
                </div>
                <button class="w-full py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 transition duration-300 disabled:bg-red-400" disabled>
                    Lanjutkan ke Pembayaran
                </button>
            </div>
        </div>
    </div>

<script>
    // Data produk dummy
    const products = [
        { id: 1, name: "Air Comet 5.0", price: 1890000, image: "https://placehold.co/400x300/f56565/ffffff?text=Air+Comet+5.0", color: "Merah/Putih", category: "Lari" },
        { id: 2, name: "Urban Stride Pro", price: 1250000, image: "https://placehold.co/400x300/4299e1/ffffff?text=Urban+Stride+Pro", color: "Biru Navy", category: "Kasual" },
        { id: 3, name: "Hoops Dominator", price: 2150000, image: "https://placehold.co/400x300/9f7aea/ffffff?text=Hoops+Dominator", color: "Ungu Gelap", category: "Basket" },
        { id: 4, name: "Trail Master GTX", price: 1990000, image: "https://placehold.co/400x300/48bb78/ffffff?text=Trail+Master+GTX", color: "Hijau Army", category: "Outdoor" },
        { id: 5, name: "Classic 88 Low", price: 950000, image: "https://placehold.co/400x300/f6ad55/ffffff?text=Classic+88+Low", color: "Krem", category: "Kasual" },
        { id: 6, name: "FlySpeed Racer", price: 1600000, image: "https://placehold.co/400x300/81e6d9/000000?text=FlySpeed+Racer", color: "Tosca", category: "Lari" },
    ];

    let cart = []; // Array untuk menyimpan item di keranjang

    // Fungsi utilitas untuk memformat mata uang Rupiah
    const formatRupiah = (number) => {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(number);
    };

    // Fungsi untuk menampilkan notifikasi/message box
    const showMessage = (message, isError = false) => {
        const msgBox = document.getElementById('message-box');
        msgBox.textContent = message;
        
        // Atur warna berdasarkan tipe pesan
        if (isError) {
            msgBox.classList.remove('bg-green-500');
            msgBox.classList.add('bg-red-500');
        } else {
            msgBox.classList.remove('bg-red-500');
            msgBox.classList.add('bg-green-500');
        }

        msgBox.classList.add('show-message');
        
        // Hilangkan notifikasi setelah 3 detik
        setTimeout(() => {
            msgBox.classList.remove('show-message');
        }, 3000);
    };

    // FUNGSI UTAMA KERANJANG BELANJA
    
    // 1. Render Kartu Produk
    const renderProducts = () => {
        const productListContainer = document.getElementById('product-list');
        productListContainer.innerHTML = ''; // Kosongkan konten lama

        products.forEach(product => {
            const card = document.createElement('div');
            card.className = 'shoe-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col p-5';
            card.innerHTML = `
                <div class="relative h-48 mb-4">
                    <img src="${product.image}" 
                         alt="${product.name}" 
                         onerror="this.onerror=null;this.src='https://placehold.co/400x300/e2e8f0/2d3748?text=${product.name.replace(/\s/g, '+')}'"
                         class="w-full h-full object-cover rounded-xl transition duration-500 hover:scale-105"/>
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded-full">${product.category}</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 truncate mb-1">${product.name}</h3>
                <p class="text-sm text-gray-500 mb-2">${product.color}</p>
                <div class="flex-grow"></div>
                <div class="flex justify-between items-center pt-2">
                    <span class="text-2xl font-extrabold text-red-600">${formatRupiah(product.price)}</span>
                    <button data-product-id="${product.id}" class="add-to-cart-btn px-4 py-2 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-700 transition duration-300">
                        + Keranjang
                    </button>
                </div>
            `;
            productListContainer.appendChild(card);
        });

        // Tambahkan event listener untuk tombol "Tambah ke Keranjang"
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const productId = parseInt(e.currentTarget.dataset.productId);
                addToCart(productId);
            });
        });
    };

    // 2. Tambahkan Produk ke Keranjang
    const addToCart = (productId) => {
        const product = products.find(p => p.id === productId);
        if (product) {
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
                showMessage(`${product.name} (x${existingItem.quantity}) diperbarui di keranjang.`);
            } else {
                cart.push({ ...product, quantity: 1 });
                showMessage(`${product.name} ditambahkan ke keranjang.`);
            }
            updateCartUI();
        }
    };

    // 3. Hapus Item dari Keranjang
    const removeFromCart = (productId) => {
        const initialLength = cart.length;
        cart = cart.filter(item => item.id !== productId);
        
        if (cart.length < initialLength) {
            showMessage("Item dihapus dari keranjang.", true);
        }
        updateCartUI();
    };

    // 4. Update Jumlah di Keranjang
    const updateQuantity = (productId, change) => {
        const item = cart.find(item => item.id === productId);
        if (item) {
            item.quantity += change;
            if (item.quantity <= 0) {
                removeFromCart(productId);
            } else {
                updateCartUI();
            }
        }
    };

    // 5. Render/Update Tampilan Keranjang (Modal & Count)
    const updateCartUI = () => {
        const cartCountElement = document.getElementById('cart-count');
        const cartItemsContainer = document.getElementById('cart-items-container');
        const cartTotalPriceElement = document.getElementById('cart-total-price');
        const emptyCartMessage = document.getElementById('empty-cart-message');
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        
        // Update hitungan di navbar
        cartCountElement.textContent = totalItems;

        // Tampilkan/Sembunyikan pesan keranjang kosong
        emptyCartMessage.classList.toggle('hidden', totalItems > 0);

        // Update konten modal
        cartItemsContainer.innerHTML = '';
        if (cart.length > 0) {
            cart.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'flex items-center space-x-4 p-3 bg-gray-50 rounded-lg';
                itemElement.innerHTML = `
                    <img src="${item.image}" 
                         alt="${item.name}" 
                         class="w-16 h-16 object-cover rounded-md"
                         onerror="this.onerror=null;this.src='https://placehold.co/64x64/e2e8f0/2d3748?text=Shoe'"
                    >
                    <div class="flex-grow">
                        <p class="font-semibold text-gray-900">${item.name}</p>
                        <p class="text-sm text-gray-600">${formatRupiah(item.price)}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button data-id="${item.id}" data-action="decrease" class="cart-quantity-btn w-6 h-6 bg-gray-200 rounded-full hover:bg-gray-300 transition">-</button>
                        <span class="font-medium">${item.quantity}</span>
                        <button data-id="${item.id}" data-action="increase" class="cart-quantity-btn w-6 h-6 bg-gray-200 rounded-full hover:bg-gray-300 transition">+</button>
                    </div>
                    <button data-id="${item.id}" data-action="remove" class="remove-from-cart-btn text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path></svg>
                    </button>
                `;
                cartItemsContainer.appendChild(itemElement);
            });
            // Re-attach event listeners for quantity buttons
            attachCartItemListeners();
        }
        
        // Update total harga
        cartTotalPriceElement.textContent = formatRupiah(totalPrice);
        
        // Update status tombol checkout
        const checkoutButton = document.querySelector('#cart-modal button.w-full');
        checkoutButton.disabled = totalItems === 0;
    };

    // 6. Listener untuk tombol di dalam modal keranjang
    const attachCartItemListeners = () => {
        document.querySelectorAll('.cart-quantity-btn').forEach(button => {
            button.onclick = (e) => {
                const productId = parseInt(e.currentTarget.dataset.id);
                const action = e.currentTarget.dataset.action;
                if (action === 'increase') {
                    updateQuantity(productId, 1);
                } else if (action === 'decrease') {
                    updateQuantity(productId, -1);
                }
            };
        });

        document.querySelectorAll('.remove-from-cart-btn').forEach(button => {
            button.onclick = (e) => {
                const productId = parseInt(e.currentTarget.dataset.id);
                removeFromCart(productId);
            };
        });
    };


    // Event listener untuk Modal
    const cartButton = document.getElementById('cart-button');
    const cartModal = document.getElementById('cart-modal');
    const closeCartModal = document.getElementById('close-cart-modal');

    cartButton.addEventListener('click', () => {
        updateCartUI(); // Pastikan modal menampilkan data terbaru
        cartModal.classList.remove('hidden');
    });

    closeCartModal.addEventListener('click', () => {
        cartModal.classList.add('hidden');
    });

    // Menutup modal jika klik di luar area modal
    cartModal.addEventListener('click', (e) => {
        if (e.target === cartModal) {
            cartModal.classList.add('hidden');
        }
    });

    // Inisialisasi: Render produk saat halaman dimuat
    window.onload = () => {
        renderProducts();
        updateCartUI(); // Set count awal ke 0
        console.log("Halaman Home Toko Sepatu dimuat.");
    };

</script>

</body>
</html>