<?php

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
                'title' => 'Marketing_1',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 1
            ],
            [
                'title' => 'Marketing_2',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 1
            ],
            [
                'title' => 'Marketing_3',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 1
            ],
            [
                'title' => 'Business_1',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 2
            ],
            [
                'title' => 'Business_2',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 2
            ],
            [
                'title' => 'Business_3',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 2
            ],
            [
                'title' => 'Finance_1',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 3
            ],
            [
                'title' => 'Finance_2',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 3
            ],
            [
                'title' => 'Finance_3',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 3
            ],
            [
                'title' => 'Entrepreneurship_1',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 4
            ],
            [
                'title' => 'Entrepreneurship_2',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 4
            ],
            [
                'title' => 'Entrepreneurship_3',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 4
            ],
            [
                'title' => 'Science_1',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 5
            ],
            [
                'title' => 'Science_2',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 5
            ],
            [
                'title' => 'Science_3',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 5
            ],
            [
                'title' => 'Biography_1',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 6
            ],
            [
                'title' => 'Biography_2',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 6
            ],
            [
                'title' => 'Biography_3',
                'author' => 'Dinesh',
                'image' => 'user.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'link' => 'https://play.google.com/books/reader?id=lbUsDwAAQBAJ&printsec=frontcover&pg=GBS.PT4',
                'category_id' => 6
            ]
        ]);
    }
}
