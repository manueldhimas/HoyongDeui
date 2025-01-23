<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.product.index', compact('products'));
    }

    public function create()
    {
        return view('backend.pages.product.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'stock' => 'required|integer|min:0',
                'price' => 'required|numeric|min:0',
                'status' => 'required|in:Aktif,Nonaktif',
                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto
            ],

            [
                'name.required' => 'Nama wajib diisi',
                'name.max' => 'Nama maksimal 45 karakter',
                'photo.max' => 'Foto maksimal 2 MB',
                'photo.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif, svg',
                'photo.image' => 'File harus berbentuk image'
            ]
        );

        if (!empty($request->photo)) {
            $fileName = 'photo-' . uniqid() . '.' . $request->photo->extension();
            $request->photo->move(public_path('image'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        Product::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'status' => $request->status,
            'sku' => $request->sku,
            'photo' => $fileName,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }


    public function show(Product $product)
    {
        return view('backend.pages.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('backend.pages.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Aktif,Nonaktif',
            'sku' => 'required|string|max:255|unique:products,sku,' . $product->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto
        ]);

        // Penanganan foto baru
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada dan bukan placeholder default
            if ($product->photo && $product->photo !== 'nophoto.jpg') {
                @unlink(public_path('image/' . $product->photo));
            }

            // Simpan foto baru
            $fileName = 'photo-' . uniqid() . '.' . $request->photo->extension();
            $request->photo->move(public_path('image'), $fileName);
        } else {
            // Gunakan foto lama jika tidak ada foto baru
            $fileName = $product->photo;
        }

        // Update data produk
        $product->update([
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'status' => $request->status,
            'sku' => $request->sku,
            'photo' => $fileName,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui');
    }


    public function destroy(Product $product)
    {
        // Hapus foto dari penyimpanan jika ada dan bukan placeholder default
        if ($product->photo && $product->photo !== 'nophoto.jpg') {
            @unlink(public_path('image/' . $product->photo));
        }

        // Hapus produk dari database
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }

}
