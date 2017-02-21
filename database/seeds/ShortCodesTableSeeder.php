<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShortCodesTableSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('short_codes')->insert([
        ['component_id' => 'V0001', 'component_name' => 'ENERGY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V1000', 'component_name' => 'CARBOHYDRATE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V2000', 'component_name' => 'FAT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V2001', 'component_name' => 'Cholestrol', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V2002', 'component_name' => 'Linolenic Acid', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V2003', 'component_name' => 'PUFA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3000', 'component_name' => 'PROTEIN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3001', 'component_name' => 'Arginine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3002', 'component_name' => 'Histidine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3003', 'component_name' => 'Lysine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3004', 'component_name' => 'Triptophane', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3005', 'component_name' => 'Phenyline', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3006', 'component_name' => 'Tyrosin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3007', 'component_name' => 'Methionine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3008', 'component_name' => 'Cystine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3009', 'component_name' => 'Threonine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3010', 'component_name' => 'Leucine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3011', 'component_name' => 'Isoleucine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V3012', 'component_name' => 'Valinine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4000', 'component_name' => 'MINERAL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4001', 'component_name' => 'Calcium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4002', 'component_name' => 'Phosphorous', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4003', 'component_name' => 'Iron', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4004', 'component_name' => 'Magnesium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4005', 'component_name' => 'Sodium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4006', 'component_name' => 'Pottassium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4007', 'component_name' => 'Copper', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4008', 'component_name' => 'Sulphur', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4009', 'component_name' => 'Chlorine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4010', 'component_name' => 'Zinc', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4011', 'component_name' => 'Iodine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4012', 'component_name' => 'Manganeese', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4013', 'component_name' => 'Fluoride', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4014', 'component_name' => 'Chromium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4015', 'component_name' => 'Selenium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4016', 'component_name' => 'Molybdenum', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V4017', 'component_name' => 'Chloride', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5000', 'component_name' => 'VITAMIN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5001', 'component_name' => 'Carotene', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5002', 'component_name' => 'Thiamine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5003', 'component_name' => 'Riboflavine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5004', 'component_name' => 'Niacin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5005', 'component_name' => 'Vitamin-C', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5006', 'component_name' => 'Vitamin - B12', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5007', 'component_name' => 'Vitamin - B6', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5008', 'component_name' => 'Panthonic Acid', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5009', 'component_name' => 'Biotin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5010', 'component_name' => 'Choline', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5011', 'component_name' => 'Inosito', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5012', 'component_name' => 'Vitamin D', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5013', 'component_name' => 'Vitamin E', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5014', 'component_name' => 'Vitamin K', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ['component_id' => 'V5015', 'component_name' => 'Folic - Free', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]]
    );
  }
}
