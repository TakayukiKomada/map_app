<?php
   namespace App\Models;
   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;
   use Illuminate\Database\Eloquent\SoftDeletes;
   class Shop extends Model
   {
       use HasFactory;
       use SoftDeletes;
       // 一つにまとめてもOK
       // use HasFactory, SoftDeletes;
   }
