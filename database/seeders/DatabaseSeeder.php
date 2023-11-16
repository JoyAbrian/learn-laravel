<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        User::create([
            'name' => "Jonathan Joestar",
            'username' => "ruukaze",
            'email' => 'jon.joestar@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        // User::create([
        //     'name' => "Philip IV",
        //     'nickname' => "@philip.iv",
        //     'email' => 'philip.4@gmail.com',
        //     'password' => bcrypt('philip.iv')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Tutor Laravel',
            'slug' => 'tutor-laravel'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => "Judul Pertama",
        //     'slug' => 'judul-pertama',
        //     'excerpt' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since ...",
        //     'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a gall
        //                 ey of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
        //                 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => "Judul Kedua",
        //     'slug' => 'judul-kedua',
        //     'excerpt' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ...",
        //     'body' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less n
        //                 ormal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their de
        //                 fault model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected hum
        //                 our and the like)."
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => "Judul Ketiga",
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => "pellendus fugit aliquid illo qui illum molestias consectetur sunt ducimus. Quam voluptatibus, fuga nesciunt quis veritatis autem doloremque quae ...",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam suscipit dolore magnam. Illum voluptatem sint illo magni deserunt? Nisi, repellendus odio illo sit non quaerat recusandae
        //                 sed? Minus, distinctio molestias, ea nobis illum iste unde, nulla magni enim quas fuga repudiandae praesentium quaerat hic commodi expedita. Est quibusdam, quis assumenda consectetur repellendus, dolore 
        //                 fuga eveniet reiciendis, facere laudantium ex nobis explicabo. </p><p>Asperiores consequatur adipisci soluta exercitationem. Quia alias ullam, quibusdam sint omnis repellat harum, dolores modi cum earum e
        //                 um sunt. Iste dignissimos atque rem ratione debitis, illo tempora perspiciatis fuga. Velit natus hic pariatur ullam quo nemo nam eligendi atque minus mollitia ex ipsam, dolores, enim, sapiente assumenda c
        //                 orrupti porro. Blanditiis quidem nostrum quia consectetur, esse ab possimus quos suscipit.</p>"
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'title' => "Judul Keempat",
        //     'slug' => 'judul-keempat',
        //     'excerpt' => "pellendus fugit aliquid illo qui illum molestias consectetur sunt ducimus. Quam voluptatibus, fuga nesciunt quis veritatis autem doloremque quae ...",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam suscipit dolore magnam. Illum voluptatem sint illo magni deserunt? Nisi, repellendus odio illo sit non quaerat recusandae
        //                 sed? Minus, distinctio molestias, ea nobis illum iste unde, nulla magni enim quas fuga repudiandae praesentium quaerat hic commodi expedita. Est quibusdam, quis assumenda consectetur repellendus, dolore 
        //                 fuga eveniet reiciendis, facere laudantium ex nobis explicabo. </p><p>Asperiores consequatur adipisci soluta exercitationem. Quia alias ullam, quibusdam sint omnis repellat harum, dolores modi cum earum e
        //                 um sunt. Iste dignissimos atque rem ratione debitis, illo tempora perspiciatis fuga. Velit natus hic pariatur ullam quo nemo nam eligendi atque minus mollitia ex ipsam, dolores, enim, sapiente assumenda c
        //                 orrupti porro. Blanditiis quidem nostrum quia consectetur, esse ab possimus quos suscipit.</p>"
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'title' => "Judul Kelima",
        //     'slug' => 'judul-kelima',
        //     'excerpt' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ...",
        //     'body' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less n
        //                 ormal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their de
        //                 fault model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected hum
        //                 our and the like)."
        // ]);
    }
}
