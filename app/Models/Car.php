<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function showPrice() {
        // This returns the price of the cars formatted correctly.
        return money_format('$%i', $this->price / 100); // This should work but since I have Windows, this function (money_format) is not available.
    }
}
