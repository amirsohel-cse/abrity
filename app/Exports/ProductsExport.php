<?php

namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('name','type','affiliate_link','added_by','user_id','category_id','subcategory_id','brand_id','video_provider','video_link','tags','description',
            'unit_price','purchase_price','choice_options','colors','variations','todays_deal','published','featured','current_stock','unit','discount','discount_type','tax',
            'tax_type','shipping_type','shipping_cost','num_of_sale','meta_title','meta_description','slug','rating')->get();
    }
}
