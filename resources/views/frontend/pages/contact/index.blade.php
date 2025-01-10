@extends('frontend.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <div class="container my-5" style="margin-top: 10%;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Kontak Kami</h1>
                <p class="text-center">Kami senang mendengar dari Anda. Apakah Anda memiliki pertanyaan tentang Produk, harga, atau hal lainnya? Tim kami siap menjawab semua pertanyaan Anda. 😊</p>

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek:</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-5">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
