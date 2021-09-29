<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends MY_Controller {

    public function index($page = null)
    {
        $data['title'] = 'Homepage';
        $data['content']    = $this->details->select(
                [
                    'product.id', 'product.title AS product_title', 'product.description', 'product.image', 'product.price', 'product.is_available',
                    'category.title AS category_title', 'category.slug AS category_slug'
                ]
            )
            ->join('category')                  // Query untuk mencari suatu data produk beserta kategorinya
            ->where('product.is_available', 1)  // Pilih yang stok tersedia
            ->paginate($page)
            ->get();
        $data['total_rows'] = $this->details->where('product.is_available', 1)->count();
        $data['pagination'] = $this->details->makePagination(base_url('details'), 2, $data['total_rows']);
        $data['page'] = 'pages/details/index';     // Mengarahkan halaman

        $this->view($data);
    }
}

/* End of file Details.php */
