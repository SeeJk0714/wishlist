<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Product_Wishlist', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'GObT0SaYlthXkrat' // instruction: change this to your database password
    );
}