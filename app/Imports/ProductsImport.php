<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'     => $row['name'],
            'type'    => $row['type'],
            'affiliate_link' => $row['affiliate_link'],
            'added_by' => $row['added_by'],
            'user_id' => $row['user_id'],
            'category_id' => $row['category_id'],
            'subcategory_id' => $row['subcategory_id'],
            'subsubcategory_id' => $row['subsubcategory_id'],
            'brand_id' => $row['brand_id'],
            'video_provider' => $row['video_provider'],
            'video_link' => $row['video_link'],
            'tags' => $row['tags'],
            'description' => $row['description'],
            'unit_price' => $row['unit_price'],
            'purchase_price' => $row['purchase_price'],
            'choice_options' => $row['choice_options'],
            'colors' => $row['colors'],
            'variations' => $row['variations'],
            'todays_deal' => $row['todays_deal'],
            'published' => $row['published'],
            'featured' => $row['featured'],
            'current_stock' => $row['current_stock'],
            'unit' => $row['unit'],
            'discount' => $row['discount'],
            'discount_type' => $row['discount_type'],
            'tax' => $row['tax'],
            'tax_type' => $row['tax_type'],
            'shipping_type' => $row['shipping_type'],
            'shipping_cost' => $row['shipping_cost'],
            'num_of_sale' => $row['num_of_sale'],
            'meta_title' => $row['meta_title'],
            'meta_description' => $row['meta_description'],
            'slug' => $row['slug'],
            'rating' => $row['rating'],
        ]);
    }
}
